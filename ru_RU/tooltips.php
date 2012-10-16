<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-10-16 12:05+0000
// PO revision date:  2012-09-20 12:02+0000
$lang = array(
	'actions' => array(
		'add_to_category' => 'Позволяет добавлять дополнительные категории к сообщению. Если вы  отметете "Категория1" для сообщения, которое уже находится в "Категория2", то сообщение будет привязано к обеим категориям.',
		'category' => 'Вы можете задать условие активации триггеров при использовании определенных категорий. Например, если вы выбрали условие "Категория1 и Категория2", а сообщение привязано к Категория2 и Категория3, то она выполнит заданное условие.',
		'email_body' => 'Тело письма, которое будет отправлено.',
		'email_subject' => 'Заголовок письма, которое будет отправлено.',
		'keywords' => 'Если вы хотите запускать триггеры по ключевым словам, введите их здесь через запятую.',
		'location' => 'Вы можете выбрать "где угодно" или указать местоположение. Если вы выбрали местоположение, вы можете указать периметр, где происходит действие. Например, если вы хотите активировать триггер, когда кто-либо укажет точку в Смоленской области, вам необходимо выделить данную область одним или несколькими прямоугольниками.',
		'on_specific_count' => 'This qualifier will activate the trigger on the N-th count either for the entire collective user base or for each individual user.',
		'response' => 'Если все критерии выше были пройдены, триггер запустит действие - от одобрения сообщения до электронного письма пользователю. Выберите необходимые дополнительные опции.',
		'send_to' => 'При выборе "Triggering User" электроное письмо будет отослано пользователю, выполнившему действие. При использовании радио-кнопки после поля ввода вы сможете ввести любой другой e-mail. Это полезно, когда вы устанавливаете триггеры для уведомления пользователей о произошедших изменениях.',
		'trigger' => 'Триггер является основным элементом для настройки "Действий по условию".  Вы можете выбрать какое-либо действие, когда кто-нибудь отправит новое сообщение, зарегистрируется и т. д.',
		'user' => 'Пользователем может быть кто угодно или выбранный пользователь.',
		'verify' => 'Отметить сообщение как проверенное или нет.',
	) ,
	'change_picture' => 'Аватары анкет данного сайта используют сервис Gravatar. Нажав на ваш аватар, вы будете переадресованы на их сайт, где сможете изменить изображение.',
	'default_value' => 'Отделите каждое значение запятой. Например: Значение1, Значение2 и т. д.',
	'dropdown_choices' => 'Отделите каждый элемент запятой. Например: Пункт1, Пункт2 и т. д.',
	'private_to' => 'Начните печатать, чтобы выпал список пользователей',
	'private_subject' => 'Тема личного сообщения',
	'private_message' => 'Личное сообщение',
	'profile_color' => 'Вы можете выбрать цвет, который будет отображён под вашим аватаром. Этим цветом также будут отображаться сообщения, которые вы отправили..',
	'profile_email' => 'Ваш e-mail адрес',
	'profile_name' => 'Полное имя',
	'profile_notify' => 'Выберите "ДА" для e-mail оповещений о новых точках или комментариях',
	'profile_password' => 'Ваш пароль. Оставьте пустым, если вы не хотите изменять пароль',
	'profile_public' => 'Ваша анкета может быть просмотрена кем угодно, если вы отметите эту опцию.',
	'profile_username' => 'Имя пользователя не может быть изменено',
	'settings_access_level' => 'Уровень доступа используется для ограничения доступа к пользовательским полям. Обладающий большим уровнем сможет увидеть поля с меньшим уровнем. Суперадмин имеет высший уровень доступа "100". Данные, предназначенные для публичного просмотра имеют низший уровень "0".',
	'settings_alert_email' => 'На этот e-mail будут отправляться уведомления',
	'settings_allow_clustering' => 'Позволяет добавлять точки на одно и то же место на карте',
	'settings_allow_comments' => 'Разрешить пользователям комментировать сообщения на главной странице',
	'settings_allow_feed' => 'Показывать новостную ленту RSS на главной странице',
	'settings_allow_reports' => 'Разрешить пользователям отправлять сообщения через веб-форму.',
	'settings_api_default_record_limit' => 'Кол-во выдаваемых записей по умолчанию по API-запросу',
	'settings_api_max_record_limit' => 'Максимум выдаваемых записей по умолчанию по API-запросу',
	'settings_api_max_requests_per_ip' => 'Максимум API-запросов с одного IP адреса',
	'settings_banner' => 'Заставка показывается наверху вашего сайта, если тема её поддерживает. Оптимальный размер зависит от используемой темы. Обратите внимание, что заставка заменит собой название и слоган сайта.',
	'settings_blocks_per_row' => 'Количество блоков которое будет показываться на каждом ряду.',
	'settings_cache_pages' => 'Разрешить кешировать страницы? Ускоряет загрузку страниц, рекомендуется для сайтов с высоким трафиком. **Помните, что пользователи будут видеть обновленные данные с периодичностью времени жизни кеша.',
	'settings_cache_pages_lifetime' => 'Время жизни кеша.',
	'settings_checkins' => 'Проверка настроек сайта перед запуском платформы (This setting enables checkins on your deployment. This is a simplified report type that is not moderated before it goes on the homepage and requires your site to be configured a certain way. When you enable this, make sure your timezone setting is on UTC and your theme supports checkins. When you enable this, checkin only themes will become enabled under your addons/themes settings page).',
	'settings_configure_map' => 'Установите карту для отображения местоположения',
	'settings_default_category_colors' => 'Единый цвет для всех категорий на сайте',
	'settings_default_location' => 'Страна, где будет установлена платформа',
	'settings_display_contact' => 'Показывать или нет ссылку ОБРАТНАЯ СВЯЗЬ для пользователей',
	'settings_display_howtohelp' => 'Включает и выключает панель ПОМОЩЬ на главной странице.',
	'settings_display_items_per_page' => 'Количество сообщений, которые будут показаны на одной странице (главная страница)',
	'settings_display_items_per_page_admin' => 'Количество сообщений, которые будут показаны на одной странице (Admin).',
	'settings_flsms_download' => 'Хаб для входящих SMS-сообщений',
	'settings_flsms_synchronize' => 'Синхронизирует сообщения из хаба с платформой Ушахиди',
	'settings_flsms_text_1' => 'Телефонные номера через которые были получены сообщения',
	'settings_google_analytics' => 'Отслеживает посетителей Вашего сайта. Получите детальную статистику о посетителях',
	'settings_locale' => 'Язык веб-сайта',
	'settings_map_provider' => 'Определяет, какая карта будет использована на сайте',
	'settings_private_deployment' => 'Закрытый доступ к карте, только после авторизации.',
	'settings_server_host' => 'Адрес e-mail сервера',
	'settings_server_password' => 'Пароль e-mail, который получает сообщения',
	'settings_server_port' => 'Порт e-mail сервера',
	'settings_server_ssl_support' => 'Требуется для более безопасного соединения',
	'settings_server_type' => 'Требуется, чтобы получать e-mail от сервера',
	'settings_server_username' => 'Имя пользователя E-mail, на который будут приходить сообщения',
	'settings_share_site_stats' => 'Получение статистики через админку.',
	'settings_site_copyright_statement' => 'Авторское право см. http://creativecommons.org/choose/',
	'settings_site_email' => 'E-mail, на который будут отправлены уведомления и сообщения из формы контактов.',
	'settings_site_message' => 'Сообщение, которое будет показано над картой на главной странице',
	'settings_site_name' => 'Имя сайта в верхней части главной страницы',
	'settings_site_submit_report_message' => 'Сообщение, которое будет показываться пользователям на странице заполнения данных о новом сообщении. Возможно использование для информирования о юридической ответственности или других инструкциях.',
	'settings_site_tagline' => 'Несколько слов о данном веб-сайте',
	'settings_site_timezone' => 'Часовой пояс, который будет использовать данный сайт.',
	'settings_twitter_configuration' => 'Хэштэг Twitter',
);
