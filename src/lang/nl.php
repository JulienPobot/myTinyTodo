<?php

/*
	myTinyTodo language pack
	Language: Dutch
	Original name: Nederlands
	Author: Rik van der Heijden
	Author Url: http://www.rikvanderheijden.nl
	AppVersion: v1.5.0
	Date: 2012-11-17
*/

class Lang extends DefaultLang
{
	var $js = array
	(
		'confirmDelete' => "Weet je zeker dat je deze taak wilt verwijderen?",
		'confirmLeave' => "Het kan zijn dat niet alle wijzigingen zijn opgeslagen, weet je zeker dat je wilt gaan?",
		'actionNoteSave' => "opslaan",
		'actionNoteCancel' => "annuleren",
		'error' => "Er deed zich een fout voor (klik voor meer informatie)",
		'denied' => "Toegang geweigerd",
		'invalidpass' => "Verkeerde wachwoord",
		'tagfilter' => "Tag:",
		'addList' => "Maak nieuwe lijst",
		'renameList' => "Hernoem lijst",
		'deleteList' => "Hiermee verwijder je de huidige lijst met alle taken daarbinnen.\\nWeet je het zeker?",
		'clearCompleted' => "Hiermee verwijder je alle voltooide taken in de lijst.\\nWeet je het zeker?",
		'settingsSaved' => "Instellingen opgeslagen. Ververs de pagina...",
	);

	var $inc = array
	(
		'htab_newtask' => "Nieuwe taak",
		'htab_search' => "Zoek",
		'btn_add' => "Toevoegen",
		'btn_search' => "Zoek",
		'advanced_add' => "Geavanceerd",
		'searching' => "Zoeken naar",
		'tasks' => "Taken",
		'taskdate_inline_created' => "Gemaakt op %s",
		'taskdate_inline_completed' => "Voltooid op %s",
		'taskdate_inline_duedate' => "Voor %s",
		'taskdate_created' => "Aanmaakdatum",
		'taskdate_completed' => "Voltooïngsdatum",
		'go_back' => "&lt;&lt; Terug",
		'edit_task' => "Bewerk Taak",
		'add_task' => "Niewe Taak",
		'priority' => "Prioriteit",
		'task' => "Taak",
		'note' => "Notities",
		'tags' => "Tags",
		'save' => "Bewaar",
		'cancel' => "Annuleer",
		'password' => "Wachtwoord",
		'btn_login' => "Login",
		'a_login' => "Login",
		'a_logout' => "Uitloggen",
		'public_tasks' => "Publieke taken",
		'tagcloud' => "Tags",
		'tagfilter_cancel' => "annuleer filter",
		'sortByHand' => "Sorteer handmatig",
		'sortByPriority' => "Sorteer op prioriteit",
		'sortByDueDate' => "Sorteer op uiterste datum",
                'sortByDateCreated' => "Sorteer op aanmaak datum",
                'sortByDateModified' => "Sorteer op wijzigings datum",
		'due' => "Uiterlijk",
		'daysago' => "%d dagen geleden",
		'indays' => "over %d dagen",
		'months_short' => array("Jan","Feb","Mrt","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Dec"),
		'months_long' => array("Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"),
		'days_min' => array("Zo","Ma","Di","Wo","Do","Vr","Za"),
		'days_long' => array("Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"),
		'today' => "vandaag",
		'yesterday' => "gisteren",
		'tomorrow' => "morgen",
		'f_past' => "Verleden",
		'f_today' => "Vandaag en morgen",
		'f_soon' => "Binnenkort",
		'action_edit' => "Bewerk",
		'action_note' => "Bewerk Notitie",
		'action_delete' => "Verwijder",
		'action_priority' => "Prioriteit",
		'action_move' => "Verplaats naar",
		'notes' => "Notities:",
		'notes_show' => "Toon",
		'notes_hide' => "Verberg",
		'list_new' => "Nieuwe lijst",
		'list_rename' => "Hernoem lijst",
		'list_delete' => "Verwijder lijst",
		'list_publish' => "Publiceer lijst",
		'list_showcompleted' => "Toon voltooide taken",
		'list_clearcompleted' => "Verwijder voltooide taken",
                'list_select' => "Kies lijst",
                'list_export' => "Exporteer",
                'list_export_csv' => "CSV",
                'list_export_ical' => "iCalendar",
                'list_rssfeed' => "RSS Feed",
		'alltags' => "Alle tags:",
		'alltags_show' => "Toon alle",
		'alltags_hide' => "Verberg alle",
		'a_settings' => "Instellingen",
		'rss_feed' => "RSS Feed",
		'feed_title' => "%s",
                'feed_completed_tasks' => "Voltooide taken",
                'feed_modified_tasks' => "Gewijzigde taken",
                'feed_new_tasks' => "Nieuwe taken",
                'alltasks' => "Alle taken",

		/* Settings */
		'set_header' => "Instellingen",
		'set_title' => "Titel",
		'set_title_descr' => "(geef op als je de standaard titel wilt aanpassen)",
		'set_language' => "Taal",
		'set_protection' => "Wachtwoord beveiliging",
		'set_enabled' => "Toestaan",
		'set_disabled' => "Weigeren",
		'set_newpass' => "Nieuw wachtwoord",
		'set_newpass_descr' => "(laat leeg als er geen wachtwoord wijzigingen zijn)",
		'set_smartsyntax' => "Slimme syntax",
		'set_smartsyntax_descr' => "(/prioriteit/taak/tags/)",
		'set_timezone' => "Tijdzone",
		'set_autotag' => "Autotagging",
		'set_autotag_descr' => "(voegt automatisch de tag van het huidige filter toe aan de nieuwe taak)",
		'set_sessions' => "Sessie beheer",
		'set_sessions_php' => "PHP",
		'set_sessions_files' => "Files",
		'set_firstdayofweek' => "Eerste dag van de week",
		'set_custom' => "Geavanceerd",
		'set_date' => "Datum formaat",
		'set_date2' => "Kort datum formaat",
		'set_shortdate' => "Verkort Datum formaat (dit jaar)",
		'set_clock' => "Tijd formaat",
		'set_12hour' => "12-uur",
		'set_24hour' => "24-uur",
		'set_submit' => "Toepassen",
		'set_cancel' => "Annuleer",
		'set_showdate' => "Toon taak datum in lijst",
	);
}
