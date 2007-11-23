<?php
/**
 * Internationalisation file for Liquid Threads extension.
 *
 * @package MediaWiki
 * @addtogroup Extensions
 * @subpackage LiquidThreads
 * @author David McCabe <davemccabe@gmail.com> / I18n file by Erik Moeller and Siebrand Mazeland
 * @licence GPL2
*/

$messages = array();

$messages['en'] = array(
	'lqt_newmessages' => 'New Messages',
	'lqt_movethread' => 'Move Thread to Another Page',
	'lqt_deletethread' => 'Delete or Undelete Thread',
	'lqt_browse_archive' => 'Browse archive',
	'lqt_recently_archived' => 'Recently archived',
	'lqt_add_header' => 'Add header',
	'lqt_new_thread' => 'Start a new discussion',
	'lqt_move_placeholder' => "''Placeholder left when the thread was moved to another page.''",
	'lqt_reply' => 'Reply',
	'lqt_delete' => 'Delete',
	'lqt_undelete' => 'Undelete',
	'lqt_permalink' => 'Permalink',
	'lqt_fragment' => 'a fragment of a $1 from $2',
	'lqt_discussion_link' => 'discussion', // substituted above
	'lqt_from_talk' => 'from $1',
	'lqt_newer' => '«newer',
	'lqt_older' => 'older»',
	'lqt_hist_comment_edited' => 'Comment text edited',
	'lqt_hist_summary_changed' => 'Summary changed',
	'lqt_hist_reply_created' => 'New reply created',
	'lqt_hist_thread_created' => 'New thread created',
	'lqt_hist_deleted' => 'Deleted',
	'lqt_hist_undeleted' => 'Undeleted',
	'lqt_hist_moved_talkpage' => 'Moved',
	'lqt_hist_listing_subtitle' => 'Viewing a history listing.',
	'lqt_hist_view_whole_thread' => 'View history for the entire thread',
	'lqt_hist_no_revisions_error' => 'This thread doesn\'t have any history revisions. That\'s pretty weird.',
	'lqt_hist_past_last_page_error' => 'You are beyond the number of pages of history that exist.',
	'lqt_hist_tooltip_newer_disabled' => 'This link is disabled because you are on the first page.',
	'lqt_hist_tooltip_older_disabled' => 'This link is disabled because you are on the last page.',
	'lqt_revision_as_of' => "Revision as of $1.",
	'lqt_change_new_thread' => 'This is the thread\'s initial revision.',
	'lqt_change_reply_created' => 'The highlighted comment was created in this revision.',
	'lqt_change_edited_root' => 'The highlighted comment was edited in this revision.',
	'lqt_youhavenewmessages' => 'You have $1.',
	'lqt_changes_from' => ' from ',
	'lqt_protectedfromreply' => 'This thread has been $1 from being replied to.',
	'lqt_protectedfromreply_link' => 'protected',
	'lqt_subject' => 'Subject: ',
	'lqt_nosubject' => '«no subject»',
	'lqt_noreason' => 'No reason given.',
	'lqt_move_placeholder' => 'This thread is a placeholder indicating that a thread, $1, was removed from this page to another talk page. This move was made by $2 at $3.',
	'lqt_thread_deleted_for_sysops' => 'This thread has been $1 and is only visible to sysops.',
	'lqt_thread_deleted_for_sysops_deleted' => 'deleted', // substituted above in bold
	'lqt_thread_deleted' => 'This thread has been deleted.',
	'lqt_summary_notice' => 'If this discussion seems to be concluded, you are encouraged to $1. There have been no changes here for at least $2 days.',
	'lqt_summary_notice_link' => 'write a summary',
	'lqt_summary_label' => 'This thread has been summarized as follows:',
	'lqt_nosuchrevision' => 'There is no such revision of this thread.',
	'lqt_nosuchthread' => 'There is no such thread.',
	'lqt_threadrequired' => 'You must specify a thread in the URL.',
	'lqt_move_movingthread' => 'Moving $1. This thread is part of $2.',
	'lqt_move_torename' => 'To rename this thread, $1 and change the \'Subject\' field.',
	'lqt_move_torename_edit' => 'edit it', // substituted above as a link
	'lqt_move_destinationtitle' => 'Title of destination talkpage:',
	'lqt_move_move' => 'Move',
	'lqt_move_nodestination' => 'You must specify a destination.',
	'lqt_move_noreason' => 'No reason given.',
	'lqt_move_success' => 'The thread was moved to $1.',
	'lqt_delete_undeleting' => 'Undeleting $1.',
	'lqt_delete_undeletethread' => 'Undelete Thread',
	'lqt_delete_partof' => 'This thread is part of $1.',
	'lqt_delete_deleting' => 'Deleting $1 and $2 to it.',
	'lqt_delete_deleting_allreplies' => 'all replies', // subst above in bold
	'lqt_delete_deletethread' => 'Delete Thread and Replies',
	'lqt_delete_deleted' => 'The thread was deleted.',
	'lqt_delete_undeleted' => 'The thread was undeleted.',
	'lqt_delete_return' => 'Return to $1.',
	'lqt_delete_return_link' => 'the talkpage', // subst above
	'lqt_delete_unallowed' => 'You are not allowed to delete threads.',
);

$messages['ar'] = array(
	'lqt_newmessages' => 'رسائل جديدة',
	'lqt_movethread' => 'نقل الرسائل إلى صفحة أخرى',
	'lqt_deletethread' => 'حذف أو استرجاع الرسائل',
	'lqt_browse_archive' => 'تصفح الأرشيف',
	'lqt_recently_archived' => 'مؤرشف حديثا',
	'lqt_add_header' => 'أضف عنوانا',
	'lqt_new_thread' => 'ابدأ نقاشا جديدا',
	'lqt_move_placeholder' => 'مجموعة الرسائل هذه هي لحجز المكان وتعني أن مجموعة رسائل، $1، أزيلت من هذه الصفحة إلى صفحة نقاش أخرى. هذا النقل تم بواسطة $2 في $3.',
	'lqt_reply' => 'رد',
	'lqt_delete' => 'احذف',
	'lqt_undelete' => 'استرجع',
	'lqt_permalink' => 'وصلة دائمة',
	'lqt_fragment' => 'جزء من $1 من $2',
	'lqt_discussion_link' => 'نقاش',
	'lqt_from_talk' => 'من $1',
	'lqt_newer' => '«أحدث',
	'lqt_older' => 'أقدم»',
	'lqt_hist_comment_edited' => 'تم تعديل نص التعليق',
	'lqt_hist_summary_changed' => 'تم تغيير الملخص',
	'lqt_hist_reply_created' => 'تم إنشاء رد جديد',
	'lqt_hist_thread_created' => 'تم إنشاء مجموعة رسائل جديدة',
	'lqt_hist_deleted' => 'محذوف',
	'lqt_hist_undeleted' => 'مسترجع',
	'lqt_hist_moved_talkpage' => 'منقول',
	'lqt_hist_listing_subtitle' => 'عرض قائمة تاريخ',
	'lqt_hist_view_whole_thread' => 'عرض تاريخ مجموعة الرسائل بأكملها',
	'lqt_hist_no_revisions_error' => 'مجموعة الرسائل هذه لا تمتلك أي نسخ في التاريخ. هذا غريب جدا.',
	'lqt_hist_past_last_page_error' => 'أنت تجاوزت عدد صفحات التاريخ الموجودة.',
	'lqt_hist_tooltip_newer_disabled' => 'هذه الوصلة معطلة لأنك على الصفحة الأولى.',
	'lqt_hist_tooltip_older_disabled' => 'هذه الوصلة معطلة لأنك على الصفحة الأخيرة.',
	'lqt_revision_as_of' => 'النسخة بتاريخ $1.',
	'lqt_change_new_thread' => 'هذه هي النسخة الابتدائية لمجموعة الرسائل.',
	'lqt_change_reply_created' => 'التعليق المظلل تم إنشاؤه في هذه النسخة.',
	'lqt_change_edited_root' => 'التعليق المظلل تم تعديله في هذه النسخة.',
	'lqt_youhavenewmessages' => 'لديك $1.',
	'lqt_changes_from' => ' من',
	'lqt_protectedfromreply' => 'مجموعة الرسائل هذه تم $1 من الرد عليها.',
	'lqt_protectedfromreply_link' => 'محمي',
	'lqt_subject' => 'موضوع:',
	'lqt_nosubject' => '«لا موضوع»',
	'lqt_noreason' => 'لا سبب معطى.',
	'lqt_thread_deleted_for_sysops' => 'مجموعة الرسائل هذه تم $1 وهي مرئية فقط لمديري النظام.',
	'lqt_thread_deleted_for_sysops_deleted' => 'محذوف',
	'lqt_thread_deleted' => 'مجموعة الرسائل هذه تم حذفها.',
	'lqt_summary_notice' => 'لو أن هذا النقاش يبدو كما لو أنه انتهى، فأنت مشجع على $1. لا توجد أي تغييرات هنا لمدة $2 يوم على الأقل.',
	'lqt_summary_notice_link' => 'اكتب ملخصا',
	'lqt_summary_label' => 'مجموعة الرسائل هذه تم تلخيصها كالتالي:',
	'lqt_nosuchrevision' => 'لا توجد نسخة كهذه من مجموعة الرسائل هذه.',
	'lqt_nosuchthread' => 'لا توجد مجموعة رسائل كهذه.',
	'lqt_threadrequired' => 'يجب عليك تحديد مجموعة رسائل في المسار.',
	'lqt_move_movingthread' => 'نقل $1. مجموعة الرسائل هذه هي جزء من $2.',
	'lqt_move_torename' => 'لإعادة تسمية مجموعة الرسائل هذه، $1 وغير حقل \'الموضوع\'.',
	'lqt_move_torename_edit' => 'عدله',
	'lqt_move_destinationtitle' => 'عنوان صفحة النقاش الهدف:',
	'lqt_move_move' => 'نقل',
	'lqt_move_nodestination' => 'يجب عليك تحديد وجهة.',
	'lqt_move_noreason' => 'لا سبب معطى.',
	'lqt_move_success' => 'مجموعة الرسائل تم نقلها إلى $1.',
	'lqt_delete_undeleting' => 'استرجاع $1.',
	'lqt_delete_undeletethread' => 'استرجاع مجموعة الرسائل',
	'lqt_delete_partof' => 'مجموعة الرسائل هذه هي جزء من $1.',
	'lqt_delete_deleting' => 'حذف $1 و $2 إليه.',
	'lqt_delete_deleting_allreplies' => 'كل الردود',
	'lqt_delete_deletethread' => 'احذف مجموعة الرسائل والردود',
	'lqt_delete_deleted' => 'تم حذف مجموعة الرسائل.',
	'lqt_delete_undeleted' => 'تم استرجاع مجموعة الرسائل.',
	'lqt_delete_return' => 'ارجع إلى $1.',
	'lqt_delete_return_link' => 'صفحة النقاش',
	'lqt_delete_unallowed' => 'أنت غير مسموح لك بحذف مجموعات الرسائل.',
);

$messages['hsb'] = array(
	'lqt_newmessages' => 'Nowe powěsće',
	'lqt_movethread' => 'Nitku na druhu stronu přesunyć',
	'lqt_deletethread' => 'Nitku wušmórnyć abo wobnowić',
	'lqt_browse_archive' => 'Archiw přepytać',
	'lqt_recently_archived' => 'Runje archiwowany',
	'lqt_add_header' => 'Hłowu přidać',
	'lqt_new_thread' => 'Nowu diskusiju započeć',
	'lqt_move_placeholder' => 'Tuta nitka je naměstnik, kotryž podawa, zo nitka, $1, je so z tuteje strony na druhu diskusijnu stron přesunyła. Tute přesunjenje je $2 pola $3 činił.',
	'lqt_reply' => 'Wotmołwić',
	'lqt_delete' => 'Wušmórnyć',
	'lqt_undelete' => 'Wobnowić',
	'lqt_permalink' => 'Trajny wotkaz',
	'lqt_fragment' => 'Fragment wot $1 z $2',
	'lqt_discussion_link' => 'diskusija',
	'lqt_from_talk' => 'wot $1',
	'lqt_newer' => '«nowši',
	'lqt_older' => 'starši»',
	'lqt_hist_comment_edited' => 'Změnjeny tekst komentować',
	'lqt_hist_summary_changed' => 'Zjeće změnjene',
	'lqt_hist_reply_created' => 'Nowu wotmołwu wutworjeny',
	'lqt_hist_thread_created' => 'Nowa nitka wutworjena',
	'lqt_hist_deleted' => 'Wušmórnjeny',
	'lqt_hist_undeleted' => 'Wobnowjeny',
	'lqt_hist_moved_talkpage' => 'Přesunjeny',
	'lqt_hist_listing_subtitle' => 'Lisćinu stawiznow wobhladać',
	'lqt_hist_view_whole_thread' => 'Stawizny za cyłu nitku wobhladać',
	'lqt_hist_no_revisions_error' => 'Tuta nitka nima stawizniske wersije, To je zboha dźiwne.',
	'lqt_hist_past_last_page_error' => 'Sy wyše ličby stronow stawiznow.',
	'lqt_hist_tooltip_newer_disabled' => 'Tutón wotkaz je znjemóžnjeny, dokelž sy na prěnjej stronje.',
	'lqt_hist_tooltip_older_disabled' => 'Tutón wotkaz je znjemóžnjeny, dokelž sy na poslednjej stronje.',
	'lqt_revision_as_of' => 'Wersija wot $1.',
	'lqt_change_new_thread' => 'To je spočatna wersija nitki.',
	'lqt_change_reply_created' => 'Wuzběhnjeny komentar bu w tutej wersiji wutworjeny.',
	'lqt_change_edited_root' => 'Wuzběhnjeny komentar bu w tutej wersiji změnjeny.',
	'lqt_youhavenewmessages' => 'Maš $1.',
	'lqt_changes_from' => ' wot',
	'lqt_protectedfromreply' => 'Z tuteje nitki je $1 wotmołwił.',
	'lqt_protectedfromreply_link' => 'škitany',
	'lqt_subject' => 'Tema:',
	'lqt_nosubject' => '«žana tema»',
	'lqt_noreason' => 'Žana pričina podata.',
	'lqt_thread_deleted_for_sysops' => 'Tuta nitka je $1 była a je jenož za administratorow widźomna.',
	'lqt_thread_deleted_for_sysops_deleted' => 'wušmórnjeny',
	'lqt_thread_deleted' => 'Tuta nitka je so wušmórnyła.',
	'lqt_summary_notice' => 'Jeli tuta diskusija zda so skónčena, da pozbudźeš so $1. Njeběchu změny wot znajmjeńša $2 {{PLURAL:$2|dnja|dnjow|dnjow|dnjow}}.',
	'lqt_summary_notice_link' => 'zjeće pisać',
	'lqt_summary_label' => 'Tuta nitka je so takle zjała:',
	'lqt_nosuchrevision' => 'Njeje tajka wersija tuteje nitki.',
	'lqt_nosuchthread' => 'Njeje tajka nitka.',
	'lqt_threadrequired' => 'Dyrbiš w URL nitku podać.',
	'lqt_move_movingthread' => '$1 přesunje so. Tuta nitka je dźěl wot $2.',
	'lqt_move_torename' => 'Zo by tutu nitku přemjenował, $1 a změń polo \'Tema\'.',
	'lqt_move_torename_edit' => 'změnić',
	'lqt_move_destinationtitle' => 'Titul ciloweje diskusijneje strony:',
	'lqt_move_move' => 'Přesunyć',
	'lqt_move_nodestination' => 'Dyrbiš cil podać.',
	'lqt_move_noreason' => 'Žana přičina podata.',
	'lqt_move_success' => 'Tuta nitka je so do $1 přesunyła.',
	'lqt_delete_undeleting' => 'Wobnowja so $1.',
	'lqt_delete_undeletethread' => 'Nitku wobnowić',
	'lqt_delete_partof' => 'Tuta nitka je dźěl wot $1.',
	'lqt_delete_deleting' => 'Wušmórnja so $1 a $2 do njeho.',
	'lqt_delete_deleting_allreplies' => 'wšě wotmołwy',
	'lqt_delete_deletethread' => 'Nitku a wotmołwy wušmórnyć.',
	'lqt_delete_deleted' => 'Nitka je so wušmórnyła.',
	'lqt_delete_undeleted' => 'Nitka je so wobnowiła.',
	'lqt_delete_return' => 'Wróć so k $1.',
	'lqt_delete_return_link' => 'diskusijna strona',
	'lqt_delete_unallowed' => 'Njesměš nitki wušmórować.',
);

$messages['nl'] = array(
	'lqt_newmessages' => 'Nieuwe berichten',
	'lqt_movethread' => 'Overleg naar andere pagina verplaatsen',
	'lqt_deletethread' => 'Overleg verwijderen of terugplaatsen',
	'lqt_browse_archive' => 'Archief bekijken',
	'lqt_recently_archived' => 'Recent gearchiveerd',
	'lqt_add_header' => 'Voeg kopje toe',
	'lqt_new_thread' => 'Start een nieuw overleg',
	'lqt_move_placeholder' => '\'\'Deze markering is achtergelaten toen de thread is verplaatst naar een andere pagina.\'\'',
	'lqt_reply' => 'Antwoorden',
	'lqt_delete' => 'Verwijderen',
	'lqt_undelete' => 'Terugplaatsen',
	'lqt_fragment' => 'een fragment van een $1 van $2',
	'lqt_discussion_link' => 'overleg',
	'lqt_from_talk' => 'van $1',
	'lqt_newer' => 'nieuwer',
	'lqt_older' => 'ouder',
	'lqt_hist_comment_edited' => 'Tekst opmerking bewerkt',
	'lqt_hist_summary_changed' => 'Samenvatting aangepast',
	'lqt_hist_reply_created' => 'Nieuw antwoord gemaakt',
	'lqt_hist_thread_created' => 'Nieuwe thread gemaakt',
	'lqt_hist_deleted' => 'Verwijderd',
	'lqt_hist_undeleted' => 'Teruggeplaatst',
	'lqt_hist_moved_talkpage' => 'Verplaatst',
	'lqt_hist_listing_subtitle' => 'U bent een oudere versie aan het bekijken.',
	'lqt_hist_view_whole_thread' => 'Geschiedenis van de hele thread bekijken',
	'lqt_hist_no_revisions_error' => 'Deze thread heeft geen oudere versies. Dat is nogal vreemd..',
	'lqt_hist_past_last_page_error' => 'U heeft een hoger paginanummer gekozen dan bestaat in de geschiedenis.',
	'lqt_hist_tooltip_newer_disabled' => 'Deze link is niet actief omdat u op de eerste pagina bent.',
	'lqt_hist_tooltip_older_disabled' => 'Deze link is niet actief omdat u op de laatste pagina bent.',
	'lqt_revision_as_of' => 'Versie per $1.',
	'lqt_change_new_thread' => 'Dit is de eerste versie van de thread.',
	'lqt_change_reply_created' => 'De gemarkeerde opmerking is in deze versie toegevoegd.',
	'lqt_change_edited_root' => 'De gemarkeerde opmerking is in deze versie bewerkt.',
	'lqt_youhavenewmessages' => 'U heeft $1.',
	'lqt_changes_from' => ' van',
	'lqt_protectedfromreply' => 'Deze onderwerpspagina is $1 van te worden beantwoord.',
	'lqt_protectedfromreply_link' => 'beveiligd',
	'lqt_subject' => 'Onderwerp:',
	'lqt_nosubject' => '«geen onderwerp»',
	'lqt_noreason' => 'Geen reden gegeven.',
	'lqt_thread_deleted_for_sysops' => 'Deze onderwerpspagina is $1 en is alleen zichtbaar voor beheerders.',
	'lqt_thread_deleted_for_sysops_deleted' => 'verwijderd',
	'lqt_thread_deleted' => 'Deze onderwerpspagina is verwijderd.',
	'lqt_summary_notice' => 'Als er een besluit lijkt te zijn over dit overleg, wordt u aangemoedigd om $1. Er zijn geen wijzigingen geweest in de afgelopen $2 dagen.',
	'lqt_summary_notice_link' => 'een samenvatting te schrijven',
	'lqt_summary_label' => 'Deze onderwerpspagina werd samengevat als volgt:',
	'lqt_nosuchrevision' => 'Er bestaat geen dergelijke versie van deze onderwerpspagina.',
	'lqt_nosuchthread' => 'Er bestaat geen dergelijke onderwerpspagina.',
	'lqt_threadrequired' => 'U moet een onderwerspagina opgeven in de URL.',
	'lqt_move_movingthread' => 'Hernoemen van $1. Deze onderwerpspagina is een deel van $2.',
	'lqt_move_torename' => 'Om deze onderwerpspagina te hernoemen, $1 en wijzig het \'Onderwerp\'-veld.',
	'lqt_move_torename_edit' => 'bewerk het',
	'lqt_move_destinationtitle' => 'Titel van de bestemming van de overlegpagina:',
	'lqt_move_move' => 'Hernoemen',
	'lqt_move_nodestination' => 'U moet een bestemming opgeven.',
	'lqt_move_noreason' => 'Geen reden gegeven.',
	'lqt_move_success' => 'De onderwerpspagina is hernoemd naar $1.',
	'lqt_delete_undeleting' => 'Terugplaatsen van $1.',
	'lqt_delete_undeletethread' => 'Onderwerpspagina terugplaatsen',
	'lqt_delete_partof' => 'Deze onderwerpspagina is een deel van $1.',
	'lqt_delete_deleting' => 'Verwijderen van $1 en $2 ernaar.',
	'lqt_delete_deleting_allreplies' => 'alle antwoorden',
	'lqt_delete_deletethread' => 'Onderwerpspagina verwijderen',
	'lqt_delete_deleted' => 'De onderwerpspagina is verwijderd.',
	'lqt_delete_undeleted' => 'De onderwerpspagina is teruggeplaatst.',
	'lqt_delete_return' => 'Terugkeren naar $1.',
	'lqt_delete_return_link' => 'de overlegpagina',
	'lqt_delete_unallowed' => 'U mag geen onderwerpspagina\'s verwijderen.',
);
