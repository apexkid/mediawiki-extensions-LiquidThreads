<?php
if ( !defined( 'MEDIAWIKI' ) ) die;

class ThreadRevision {
	static $load =
		array(
			'th_id' 			=> 'mId',
			'th_thread'			=> 'mThreadId',
			
			'th_timestamp' 		=> 'mTimestamp',
			
			'th_user' 			=> 'mUserId',
			'th_user_text' 		=> 'mUserText',
			
			'th_change_type' 	=> 'mChangeType',
			'th_change_object' 	=> 'mChangeObjectId',
			'th_change_comment' => 'mChangeComment',
			'th_content' 		=> 'mObjSer',
		);
	
	protected $mId, $mThreadId, $mTimestamp, $mUserId, $mUserText, $mChangeType,
				$mChangeObjectId, $mChangeObject, $mChangeComment, $mObjSer, $mThreadObj;
	
	static function loadFromId( $id ) {
		$dbr = wfGetDB( DB_SLAVE );
		$row = $dbr->selectRow( 'thread_history', '*', array( 'th_id' => $id ), __METHOD__ );
		
		return self::loadFromRow( $row );
	}
		
	static function loadFromRow( $row ) {
		$rev = new ThreadRevision;
		
		foreach( self::$load as $col => $field ) {
			$rev->$field = $row->$col;
		}
		
		$rev->mUser = User::newFromName( $rev->mUserText, /* Don't validate */ false );
		$rev->mThreadObj = unserialize( $rev->mObjSer );
		
		return $rev;
	}
	
	static function create( $thread, $change_type, $change_object = null, $comment = '',
							$user = null, $timestamp = null ) {
		if ( is_null($user) ) {
			global $wgUser;
			$user = $wgUser;
		}
		
		if ( is_null($timestamp) ) {
			$timestamp = wfTimestampNow();
		}
		
		$rev = new ThreadRevision;
		
		$rev->mThreadId = $thread->topmostThread()->id();
		$rev->mTimestamp = $timestamp;
		
		$rev->mUser = $user;
		$rev->mUserId = $user->getId();
		$rev->mUserText = $user->getName();
		
		$rev->mChangeType = $change_type;
		
		if ( $change_object instanceof Thread ) {
			$rev->mChangeObjectId = $change_object->id();
			$rev->mChangeObject = $change_object;
		} elseif ( is_null($change_object) ) {
			$rev->mChangeObjectId = $thread->id();
			$rev->mChangeObject = $thread;
		} else {
			$rev->mChangeObjectId = $change_object;
		}
		
		$rev->mChangeComment = $comment;
		
		$rev->mThreadObj = $thread->topmostThread();
		$rev->mObjSer = serialize( $rev->mThreadObj );
		
		$rev->insert();
		
		return $rev;
	}
	
	function insert() {
		$dbw = wfGetDB( DB_MASTER );
		
		$row = $this->getRow();
		$row['th_id'] = $dbw->nextSequenceValue( 'thread_history_th_id' );
		
		$dbw->insert( 'thread_history', $row, __METHOD__ );
		
		$this->mId = $dbw->insertId();
	}
	
	function save() {
		$row = $this->getRow();
		
		$dbw = wfGetDB( DB_MASTER );
		
		$dbw->replace( 'thread_history', array( 'th_thread' ), $row, __METHOD__ );
	}
	
	function getRow() {
		$row = array();
		
		// First, prep the data for insertion
		$dbw = wfGetDB( DB_MASTER );
		$this->mTimestamp = $dbw->timestamp( $this->mTimestamp );
		
		foreach( self::$load as $col => $field ) {
			$row[$col] = $this->$field;
		}
		
		return $row;
	}
	
	function getTimestamp() {
		return wfTimestamp( TS_MW, $this->mTimestamp );
	}
	
	function getUser() {
		if ($this->mUserId) {
			return User::newFromId( $this->mUserId );
		}
		
		return User::newFromText( $this->mUserText, /* No validation */ false );
	}
	
	function getChangeType() {
		return $this->mChangeType;
	}
	
	function getChangeObject() {
		if ( !$this->mChangeObject && $this->mChangeObjectId ) {
			$this->mChangeObject = Threads::withId( $this->mChangeObjectId );
		}
		
		return $this->mChangeObject;
	}
	
	function getChangeComment() {
		return $this->mChangeComment;
	}
	
	function getId() {
		return $this->mId;
	}
	
	function getThreadObj() {
		if ( !$this->mThreadObj && $this->mObjSer ) {
			$this->mThreadObj = unserialize( $this->mObjSer );
		} elseif (!$this->mThreadObj) {
			throw new MWException( "Missing mObjSer" );
		}
		
		$this->mThreadObj->threadRevision = $this;
		
		return $this->mThreadObj;
	}
}
