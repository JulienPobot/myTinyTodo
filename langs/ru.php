<?php

/*
	myTinyTodo language pack (Russian)
	v1.3 compatible
*/

class Lang extends DefaultLang
{
	var $js = array
	(
		'actionNote' => "заметка",
		'actionEdit' => "редактировать",
		'actionDelete' => "удалить",
		'taskDate' => array("function(date) { return 'добавленa '+date; }"),
		'confirmDelete' => "Вы уверены?",
		'actionNoteSave' => "сохранить",
		'actionNoteCancel' => "отмена",
		'error' => "Ошибка",
		'denied' => "Доступ запрещен",
		'invalidpass' => "Неверный пароль",
		'readonly' => "только для чтения",
		'tagfilter' => "Тег:",
		'addList' => "Новый список",
		'renameList' => "Переименовать список",
		'deleteList' => "Вы действительно хотите удалить этот список со всеми задачами?",
		'settingsSaved' => "Настройки сохранены. Перезагрузка...",
	);

	var $inc = array
	(
		'My Tiny Todolist' => "Мои задачи",
		'htab_newtask' => "Новая задача",
		'htab_search' => "Поиск",		
		'btn_add' => "Добавить",
		'btn_search' => "Искать",
		'advanced_add' => "Расширенная форма",
		'searching' => "Поиск",
		'tasks' => "Задачи",
		'edit_task' => "Редактирование задачи",
		'add_task' => "Новая задача",
		'priority' => "Приоритет",
		'task' => "Задача",
		'note' => "Заметка",
		'save' => "Сохранить",
		'cancel' => "Отмена",
		'password' => "Пароль",
		'btn_login' => "Войти",
		'a_login' => "Вход",
		'a_logout' => "Выйти",
		'tags' => "Теги",
		'tagfilter_cancel' => "отменить фильтр по тегу",
		'sortByHand' => "Сортировка вручную",
		'sortByPriority' => "Сортировка по приоритету",
		'sortByDueDate' => "Сортировка по сроку",
		'due' => "Срок",
		'daysago' => "%d дн. назад",
		'indays' => "через %d дн.",
		'months_short' => array("Янв","Фев","Мар","Апр","Май","Июн","Июл","Авг","Сен","Окт","Ноя","Дек"),
		'months_long' => array("Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
		'days_min' => array("Вс","Пн","Вт","Ср","Чт","Пт","Сб"), 
		'today' => "сегодня",
		'yesterday' => "вчера",
		'tomorrow' => "завтра",
		'f_past' => "Просроченные",
		'f_today' => "Сегодня и завтра",
		'f_soon' => "Скоро",
		'tasks_and_compl' => "Задачи + завершенные",
		'notes' => "Заметки:",
		'notes_show' => "Показать",
		'notes_hide' => "Скрыть",
		'list_new' => "Новый список",
		'list_rename' => "Переименовать",
		'list_delete' => "Удалить",
		'alltags' => "Все теги:",
		'alltags_show' => "Показать все",
		'alltags_hide' => "Скрыть все",
		'a_settings' => "Настройки",
		'rss_feed' => "RSS-лента",
		'feed_title' => "%s",
		'feed_description' => "%s - новые задачи",
	);
}

?>