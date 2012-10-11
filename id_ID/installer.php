<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-10-11 12:04+0000
// PO revision date:  2012-08-19 22:52+0000
$lang = array(
	'base_path' => 'Lokasi Base',
	'database' => 'Basis data',
	'database_host' => 'Induk Basis data',
	'database_host_description' => 'Kalau anda menjalankan Ushahidi dr komputer anda sendiri, hampir pasti isian ini adalah "localhost". Jika anda menjalankan Ushahidi dr peladen web, minta info ttg mesin peladen anda dr penyedia layanan hosting anda.',
	'database_name' => 'Nama Basis data',
	'database_name_description' => 'Nama Basis data dimana Ushahidi ingin anda jalankan',
	'db_information_link' => 'Untuk keterengan lebih lanjut, silakan baca <a href="http://wiki.ushahidi.com/doku.php?id=a_brief_word_on_databases" target="_blank">artikel ini</a> di wiki yg membahas lebih rinci ttg Basis data',
	'default_language' => 'Bahasa bawaan (lokal)',
	'default_language_description' => 'Tiap instalasi Ushahidi disertai satu set terjemahan berbagai bahasa. Anda bisa juga  <a href="http://wiki.ushahidi.com/doku.php?id=localisation_l10n_internationlisation_i18n&s[]=language#enabling_new_languages" target="_blank">menambahkan bahasa anda sendiri</a>',
	'disable' => 'Matikan',
	'enable' => 'Hidupkan',
	'error_summary' => 'Daftar dibawah ini adalah rangkuman semua galat yg pernah dijumpai',
	'files_location_text' => 'Lokasi dimana berkas-berkas Ushahidi ditempatkan. <strong>Kami telah mendeteksi isian ini secara otomati, mohon dipastikan hasil pendeteksian ini tidak salah.</strong> Jika isiannya kosong, jangan khawatir, itu artinya Ushahidi terinstal di direktori utama.',
	'finished' => 'Selesai',
	'general' => 'Umum',
	'google_key' => 'Kunci API <span>Google</span>',
	'google_key_description' => 'Siapa saja bisa mendapatkan kunci api.  <a id="api-link" href="http://code.google.com/apis/maps/signup.html" target="_blank">Miliki segera</a>',
	'go_back' => 'Kembali',
	'index' => array(
		'advanced' => 'Instalasi lanjutan',
		'advanced_installation_description' => 'Selesaikan semua konfigurasi dasar dengan proses 5-langkah ini. Ini termasuk peladen, pemetaan, nama situs dan rincian narahubung.',
		'basic_installation' => 'Instalasi dasar',
		'basic_installation_description' => 'Sederhana dan cepat. Yang dibutuhkan hanya direktory utama situs dan informasi basis datanya. Pilih opsi ini jika anda mau menjalankan ushahidi secepatnya, anda masih tetap bisa melakukan konfigurasi lanjutan dikemudian hari.',
		'proceed' => 'Lanjutkan',
		'welcome' => 'Selamat datang di proses instalasi peladen Ushahidi. Pilih tipe instalasi sesuai kebutuhan anda :',
	) ,
	'installation_successful' => 'Instalasi sukses',
	'mail_server' => 'Peladen Mail',
	'mail_server_host' => 'Induk peladen Mail',
	'mail_server_host_description' => 'Contoh: mail.situsanda.com, imap.gmail.com, pop.gmail.com',
	'mail_server_password' => 'Password peladen mail',
	'mail_server_password_description' => 'Password yang biasa anda gunakan untuk log in le layanan e-mail',
	'mail_server_port' => 'Port peladen mail',
	'mail_server_port_description' => 'Port umum : 25,110,995 (ssl pop3 gmail), 993 (ssl imap gmail)',
	'mail_server_type' => 'Tipe peladen mail',
	'mail_server_type_description' => 'Internet message access protocol (IMAP) atau Post Office Protocol (POP). <a href="http://saturn.med.nyu.edu/it/help/email/imap/index.html" target="_blank">Apa bedanya?</a> ',
	'mail_server_username' => 'Nama pengguna peladen mail',
	'mail_server_username_description' => 'Kalau anda menggunakan layanan mail Gmail, Hotmail atau Yahoo, masukan alamat e-mail lengkap anda sebagai nama penggunanya.',
	'map' => 'Peta',
	'map_provider' => 'Penyedia peta',
	'map_provider_description' => 'Ushahidi bekerja sama baiknya dengan keempat penyedia layanan pemetaan ini:Google, Bing, Yahoo dan OpenStreetMap. Pilih yang tampilannya paling rinci di daerah anda.',
	'other_steps' => 'Langkah lainnya...',
	'password_description' => 'Password basis data anda',
	'previous' => 'Sebelumnya',
	'restart_apache' => 'Mohon restart peladen Apache anda',
	'select_mail_server_ssl' => 'Hidupkan atau matikan SSL',
	'select_mail_server_ssl_description' => 'Beberapa peladen mail memberikan pilihan untuk menggunakan <abbr title="Secure Sockets Layer">SSL</abbr> ketika melakukan koneksi. Menggunakan SSL sangat dianjurkan untuk meningkatkan level keamanan anda.',
	'setup_sms' => 'Setup peladen SMS anda',
	'site_email' => 'Alamat situs mail',
	'site_email_alerts' => 'alamat e-mail notifikasi situs',
	'site_email_alerts_description' => 'Ketika pengunjung situs anda memesan notifikasi e-mail, mereka akan menerima e-mail dr alamat e-mail ini. Alamat e-mail ini tidak mesti sama dengan alamat e-mail situs.',
	'site_email_description' => 'Semua komunikasi e-mail situs menggunakan alamat ini',
	'site_name' => 'Nama situs',
	'site_name_description' => 'Nama situs anda',
	'site_tagline' => 'Slogan Situs',
	'site_tagline_description' => 'Slogan anda',
	'summary' => array(
		'text_1' => 'Webserver harus punya hak menulis pada berkas dan direktori yg tercantum dibawah ini',
		'text_2' => '<p>Berikut instruksi untuk mengubah hak akses berkas: </p> <ul> <li><a href="http://www.washington.edu/computing/unix/permissions.html" target="_blank">Unix/Linux</a></li> <li><a href="http://support.microsoft.com/kb/308419" target="_blank">Windows</a></li> </ul>',
		'text_3' => 'Sebelum memulai pastikan webserver punya hak menulis pada berkas dan direktori berikut ini. Kalau perlu ubah hak aksesnya.',
		'text_4' => 'Untuk memperlancar proses instalasi, siapkan informasi berikut ini',
	) ,
	'table_prefix' => 'Tabel prefix',
	'table_prefix_description' => 'Umumnya anda tidak perlu mengubah apa-apa dr tabel Prefix. Tetapi bila anda ingin menjalankan beberapa instalasi Ushahidi dr basis data yang sama anda lakukan itu dengan menyesuaikan prefix-nya disini',
	'title' => 'Judul',
	'to_login' => 'Untuk login, kunjungi',
	'upload_data' => 'Unggah laporan data',
	'username' => 'Nama pengguna',
	'username_description' => 'Nama pengguna basis data anda',
	'use_credentials' => 'dan gunakan data akun berikut ini',
	'view_site' => 'Periksa situs anda',
);
