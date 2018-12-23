/*
* Basic DB data for phpBB2 devel
*
* $Id: postgres_basic.sql,v 1.1.2.27 2006/05/20 14:01:48 grahamje Exp $
*/

-- Config
INSERT INTO phpbb_config (config_name, config_value) VALUES ('config_id','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_disable','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('sitename','yourdomain.com');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('site_desc','A _little_ text to describe your forum');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_name','phpbb2mysql');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_path','/');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_domain','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_secure','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('session_length','3600');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_html','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_html_tags','b,i,u,pre');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_bbcode','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_smilies','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_sig','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_namechange','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_theme_create','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_avatar_local','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_avatar_remote','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_avatar_upload','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('enable_confirm', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_autologin','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_autologin_time','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('override_user_style','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('posts_per_page','15');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('topics_per_page','50');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('hot_threshold','25');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_poll_options','10');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_sig_chars','255');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_inbox_privmsgs','50');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_sentbox_privmsgs','25');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_savebox_privmsgs','50');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_email_sig','Thanks, The Management');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_email','youraddress@yourdomain.com');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_delivery','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_host','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_username','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_password','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('sendmail_fix','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('require_activation','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('flood_interval','15');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('search_flood_interval','15');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('search_min_chars','3');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_login_attempts', '5');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('login_reset_time', '30');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_email_form','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_filesize','6144');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_max_width','80');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_max_height','80');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_path','images/avatars');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_gallery_path','images/avatars/gallery');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smilies_path','images/smiles');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('default_style','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('default_dateformat','D M d, Y g:i a');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_timezone','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('prune_enable','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('privmsg_disable','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('gzip_compress','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('coppa_fax', '');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('coppa_mail', '');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('record_online_users', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('record_online_date', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('server_name', 'www.yourdomain.tld');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('server_port', '80');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('script_path', '/phpBB2/');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('version', '.0.21');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('rand_seed', '0');

-- Categories
INSERT INTO phpbb_categories (cat_id, cat_title, cat_order) VALUES (1, 'Test category 1', 10);


-- Forums
INSERT INTO phpbb_forums (forum_id, forum_name, forum_desc, cat_id, forum_order, forum_posts, forum_topics, forum_last_post_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_announce, auth_sticky, auth_pollcreate, auth_vote, auth_attachments) VALUES (1, 'Test Forum 1', 'This is just a test forum.', 1, 10, 1, 1, 1, 0, 0, 1, 1, 1, 1, 3, 3, 1, 1, 3);

-- Users
INSERT INTO phpbb_users (user_id, username, user_level, user_regdate, user_password, user_email, user_icq, user_website, user_occ, user_from, user_interests, user_sig, user_viewemail, user_style, user_aim, user_yim, user_msnm, user_posts, user_attachsig, user_allowsmile, user_allowhtml, user_allowbbcode, user_allow_pm, user_notify_pm, user_allow_viewonline, user_rank, user_avatar, user_lang, user_timezone, user_dateformat, user_actkey, user_newpasswd, user_notify, user_active) VALUES ( -1, 'Anonymous', 0, 0, '', '', '', '', '', '', '', '', 0, NULL, '', '', '', 0, 0, 1, 1, 1, 0, 1, 1, NULL, '', '', 0, '', '', '', 0, 0);

-- username: admin    password: admin (change this or remove it once everything is working!)
INSERT INTO phpbb_users (user_id, username, user_level, user_regdate, user_password, user_email, user_icq, user_website, user_occ, user_from, user_interests, user_sig, user_viewemail, user_style, user_aim, user_yim, user_msnm, user_posts, user_attachsig, user_allowsmile, user_allowhtml, user_allowbbcode, user_allow_pm, user_notify_pm, user_popup_pm, user_allow_viewonline, user_rank, user_avatar, user_lang, user_timezone, user_dateformat, user_actkey, user_newpasswd, user_notify, user_active) VALUES ( 2, 'Admin', 1, 0, '21232f297a57a5a743894a0e4a801fc3', 'admin@yourdomain.com', '', '', '', '', '', '', 1, 1, '', '', '', 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, '', 'english', 0, 'd M Y h:i a', '', '', 0, 1);


-- Ranks
INSERT INTO phpbb_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES ( 1, 'Site Admin', -1, 1, NULL);


-- Groups
INSERT INTO phpbb_groups (group_id, group_name, group_description, group_single_user) VALUES (1, 'Anonymous', 'Personal User', 1);
INSERT INTO phpbb_groups (group_id, group_name, group_description, group_single_user) VALUES (2, 'Admin', 'Personal User', 1);


-- User -> Group
INSERT INTO phpbb_user_group (group_id, user_id, user_pending) VALUES (1, -1, 0);
INSERT INTO phpbb_user_group (group_id, user_id, user_pending) VALUES (2, 2, 0);


-- Demo Topic
INSERT INTO phpbb_topics (topic_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, forum_id, topic_status, topic_type, topic_vote, topic_first_post_id, topic_last_post_id) VALUES (1, 'Welcome to phpBB 2', 2, '972086460', 0, 0, 1, 0, 0, 0, 1, 1);


-- Demo Post
INSERT INTO phpbb_posts (post_id, topic_id, forum_id, poster_id, post_time, post_username, poster_ip) VALUES (1, 1, 1, 2, 972086460, NULL, '7F000001');
INSERT INTO phpbb_posts_text (post_id, post_subject, post_text) VALUES (1, NULL, 'This is an example post in your phpBB 2 installation. You may delete this post, this topic and even this forum if you like since everything seems to be working!');


-- Themes
INSERT INTO phpbb_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3) VALUES (1, 'subSilver', 'subSilver', 'subSilver.css', NULL, 'E5E5E5', '000000', '006699', '5493B4', '', 'DD6900', 'EFEFEF', 'DEE3E7', 'D1D7DC', NULL, NULL, NULL, '98AAB1', '006699', 'FFFFFF', 'cellpic1.gif', 'cellpic3.gif', 'cellpic2.jpg', 'FAFAFA', 'FFFFFF', NULL, 'row1', 'row2', NULL, 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, ''Courier New'', sans-serif', 10, 11, 12, '444444', '006600', 'FFA34F', NULL, NULL, NULL);

INSERT INTO phpbb_themes_name (themes_id, tr_color1_name, tr_color2_name, tr_color3_name, tr_class1_name, tr_class2_name, tr_class3_name, th_color1_name, th_color2_name, th_color3_name, th_class1_name, th_class2_name, th_class3_name, td_color1_name, td_color2_name, td_color3_name, td_class1_name, td_class2_name, td_class3_name, fontface1_name, fontface2_name, fontface3_name, fontsize1_name, fontsize2_name, fontsize3_name, fontcolor1_name, fontcolor2_name, fontcolor3_name, span_class1_name, span_class2_name, span_class3_name) VALUES (1, 'The lightest row colour', 'The medium row color', 'The darkest row colour', NULL, NULL, NULL, 'Border round the whole page', 'Outer table border', 'Inner table border', 'Silver gradient picture', 'Blue gradient picture', 'Fade-out gradient on index', 'Background for quote boxes', 'All white areas', NULL, 'Background for topic posts', '2nd background for topic posts', NULL, 'Main fonts', 'Additional topic title font', 'Form fonts', 'Smallest font size', 'Medium font size', 'Normal font size (post body etc)', 'Quote & copyright text', 'Code text colour', 'Main table header text colour', NULL, NULL, NULL);


-- Smilies
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 1, ':D', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 2, ':-D', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 3, ':grin:', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 4, ':)', 'icon_smile.gif', 'Smile');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 5, ':-)', 'icon_smile.gif', 'Smile');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 6, ':smile:', 'icon_smile.gif', 'Smile');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 7, ':(', 'icon_sad.gif', 'Sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 8, ':-(', 'icon_sad.gif', 'Sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 9, ':sad:', 'icon_sad.gif', 'Sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 10, ':o', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 11, ':-o', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 12, ':eek:', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 13, ':shock:', 'icon_eek.gif', 'Shocked');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 14, ':?', 'icon_confused.gif', 'Confused');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 15, ':-?', 'icon_confused.gif', 'Confused');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 16, ':???:', 'icon_confused.gif', 'Confused');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 17, '8)', 'icon_cool.gif', 'Cool');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 18, '8-)', 'icon_cool.gif', 'Cool');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 19, ':cool:', 'icon_cool.gif', 'Cool');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 20, ':lol:', 'icon_lol.gif', 'Laughing');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 21, ':x', 'icon_mad.gif', 'Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 22, ':-x', 'icon_mad.gif', 'Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 23, ':mad:', 'icon_mad.gif', 'Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 24, ':P', 'icon_razz.gif', 'Razz');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 25, ':-P', 'icon_razz.gif', 'Razz');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 26, ':razz:', 'icon_razz.gif', 'Razz');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 27, ':oops:', 'icon_redface.gif', 'Embarassed');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 28, ':cry:', 'icon_cry.gif', 'Crying or Very sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 29, ':evil:', 'icon_evil.gif', 'Evil or Very Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 30, ':twisted:', 'icon_twisted.gif', 'Twisted Evil');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 31, ':roll:', 'icon_rolleyes.gif', 'Rolling Eyes');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 32, ':wink:', 'icon_wink.gif', 'Wink');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 33, ';)', 'icon_wink.gif', 'Wink');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 34, ';-)', 'icon_wink.gif', 'Wink');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 35, ':!:', 'icon_exclaim.gif', 'Exclamation');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 36, ':?:', 'icon_question.gif', 'Question');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 37, ':idea:', 'icon_idea.gif', 'Idea');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 38, ':arrow:', 'icon_arrow.gif', 'Arrow');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 39, ':|', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 40, ':-|', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 41, ':neutral:', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 42, ':mrgreen:', 'icon_mrgreen.gif', 'Mr. Green');


-- wordlist
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 1, 'example', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 2, 'post', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 3, 'phpbb', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 4, 'installation', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 5, 'delete', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 6, 'topic', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 7, 'forum', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 8, 'since', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 9, 'everything', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 10, 'seems', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 11, 'working', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 12, 'welcome', 0 );


-- wordmatch
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 1, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 2, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 3, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 4, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 5, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 6, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 7, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 8, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 9, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 10, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 11, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 12, 1, 1 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 3, 1, 1 );


-- birthday_event
ALTER TABLE phpbb_users ADD user_birthday varchar(10) DEFAULT '' NOT NULL;
INSERT INTO phpbb_config (config_name, config_value) VALUES ('birthday_settings', '0-1-5-100');


-- bloc_pub_large
	CREATE TABLE phpbb_pub_lrg
	(id INT not null AUTO_INCREMENT,
	text_pub_lrg TEXT not null,
	titre_pub_lrg VARCHAR (40) null,
	width SMALLINT (3) not null,
	height SMALLINT (3) not null,
	scrollamount TINYINT (2) not null,
	scrolldelay TINYINT (2) not null,
	way VARCHAR (5) not null,
	logo_left VARCHAR (100) null,
	logo_right VARCHAR (100) null,
	PRIMARY KEY (id))
	TYPE=MyISAM ;

	INSERT INTO phpbb_pub_lrg VALUES
	('','Les bannières de vos partenaires en 468 x 60',
	'Partenaires',
	'150',
	'100',
	'1',
	'1',
	'up',
	'Emplacement d\'un logo pub',
	'Emplacement d\'un logo pub'
	);
	
	CREATE TABLE phpbb_pub_lrg_config (
    config_name varchar(255) NOT NULL,
    config_value varchar(255) NOT NULL,
    PRIMARY KEY (config_name)
	);
	
	INSERT INTO phpbb_pub_lrg_config (config_name, config_value) VALUES ('pub_lrg_enable', '1');


-- album_photo
CREATE TABLE phpbb_album (
	pic_id int(11) UNSIGNED NOT NULL auto_increment,
	pic_filename varchar(255) NOT NULL,
	pic_thumbnail varchar(255),
	pic_title varchar(255) NOT NULL,
	pic_desc text,
	pic_user_id mediumint(8) NOT NULL,
	pic_username varchar(32),
	pic_user_ip char(8) NOT NULL DEFAULT '0',
	pic_time int(11) UNSIGNED NOT NULL,
	pic_cat_id mediumint(8) UNSIGNED NOT NULL DEFAULT '1',
	pic_view_count int(11) UNSIGNED NOT NULL DEFAULT '0',
	pic_lock tinyint(3) NOT NULL DEFAULT '0',
	pic_approval tinyint(3) NOT NULL DEFAULT '1',
	PRIMARY KEY (pic_id),
	KEY pic_cat_id (pic_cat_id),
	KEY pic_user_id (pic_user_id),
	KEY pic_time (pic_time));

CREATE TABLE phpbb_album_rate (
	rate_pic_id int(11) UNSIGNED NOT NULL,
	rate_user_id mediumint(8) NOT NULL,
	rate_user_ip char(8) NOT NULL,
	rate_point tinyint(3) UNSIGNED NOT NULL,
	KEY rate_pic_id (rate_pic_id),
	KEY rate_user_id (rate_user_id),
	KEY rate_user_ip (rate_user_ip),
	KEY rate_point (rate_point));

CREATE TABLE phpbb_album_comment (
	comment_id int(11) UNSIGNED NOT NULL auto_increment,
	comment_pic_id int(11) UNSIGNED NOT NULL,
	comment_user_id mediumint(8) NOT NULL,
	comment_username varchar(32),
	comment_user_ip char(8) NOT NULL,
	comment_time int(11) UNSIGNED NOT NULL,
	comment_text TEXT,
	comment_edit_time int(11) UNSIGNED,
	comment_edit_count smallint(5) UNSIGNED NOT NULL DEFAULT '0',
	comment_edit_user_id mediumint(8),
	PRIMARY KEY(comment_id),
	KEY comment_pic_id (comment_pic_id),
	KEY comment_user_id (comment_user_id),
	KEY comment_user_ip (comment_user_ip),
	KEY comment_time (comment_time));

CREATE TABLE phpbb_album_cat (
	cat_id mediumint(8) UNSIGNED NOT NULL auto_increment,
	cat_title varchar(255) NOT NULL,
	cat_desc text,
	cat_order mediumint(8) NOT NULL,
	cat_view_level tinyint(3) NOT NULL DEFAULT '-1',
	cat_upload_level tinyint(3) NOT NULL DEFAULT '0',
	cat_rate_level tinyint(3) NOT NULL DEFAULT '0',
	cat_comment_level tinyint(3) NOT NULL DEFAULT '0',
	cat_edit_level tinyint(3) NOT NULL DEFAULT '0',
	cat_delete_level tinyint(3) NOT NULL DEFAULT '2',
	cat_view_groups varchar(255),
	cat_upload_groups varchar(255),
	cat_rate_groups varchar(255),
	cat_comment_groups varchar(255),
	cat_edit_groups varchar(255),
	cat_delete_groups varchar(255),
	cat_moderator_groups varchar(255),
	cat_approval tinyint(3) NOT NULL DEFAULT '0',
	PRIMARY KEY (cat_id),
	KEY cat_order (cat_order));

CREATE TABLE phpbb_album_config (
	config_name varchar(255) NOT NULL,
	config_value varchar(255) NOT NULL,
	PRIMARY KEY (config_name));

INSERT INTO phpbb_album_config VALUES ('max_pics', '1024');
INSERT INTO phpbb_album_config VALUES ('user_pics_limit', '50');
INSERT INTO phpbb_album_config VALUES ('mod_pics_limit', '250');
INSERT INTO phpbb_album_config VALUES ('max_file_size', '128000');
INSERT INTO phpbb_album_config VALUES ('max_width', '800');
INSERT INTO phpbb_album_config VALUES ('max_height', '600');
INSERT INTO phpbb_album_config VALUES ('rows_per_page', '3');
INSERT INTO phpbb_album_config VALUES ('cols_per_page', '4');
INSERT INTO phpbb_album_config VALUES ('fullpic_popup', '1');
INSERT INTO phpbb_album_config VALUES ('thumbnail_quality', '50');
INSERT INTO phpbb_album_config VALUES ('thumbnail_size', '125');
INSERT INTO phpbb_album_config VALUES ('thumbnail_cache', '1');
INSERT INTO phpbb_album_config VALUES ('sort_method', 'pic_time');
INSERT INTO phpbb_album_config VALUES ('sort_order', 'DESC');
INSERT INTO phpbb_album_config VALUES ('jpg_allowed', '1');
INSERT INTO phpbb_album_config VALUES ('png_allowed', '1');
INSERT INTO phpbb_album_config VALUES ('gif_allowed', '0');
INSERT INTO phpbb_album_config VALUES ('desc_length', '512');
INSERT INTO phpbb_album_config VALUES ('hotlink_prevent', '0');
INSERT INTO phpbb_album_config VALUES ('hotlink_allowed', 'smartor.is-root.com');
INSERT INTO phpbb_album_config VALUES ('personal_gallery', '0');
INSERT INTO phpbb_album_config VALUES ('personal_gallery_private', '0');
INSERT INTO phpbb_album_config VALUES ('personal_gallery_limit', '10');
INSERT INTO phpbb_album_config VALUES ('personal_gallery_view', '-1');
INSERT INTO phpbb_album_config VALUES ('rate', '1');
INSERT INTO phpbb_album_config VALUES ('rate_scale', '10');
INSERT INTO phpbb_album_config VALUES ('comment', '1');
INSERT INTO phpbb_album_config VALUES ('gd_version', '1');
INSERT INTO phpbb_album_config VALUES ('album_version', '.0.53');


-- couleur_modo_admin
ALTER TABLE phpbb_themes ADD fontcolor5 VARCHAR (6) DEFAULT 'FFA34F' NOT NULL;
ALTER TABLE phpbb_themes_name ADD fontcolor5_name CHAR (50) DEFAULT 'Couleur des Administrateurs' NOT NULL;
ALTER TABLE phpbb_themes ADD fontcolor6 VARCHAR (6) DEFAULT '006600' NOT NULL;
ALTER TABLE phpbb_themes_name ADD fontcolor6_name CHAR (50) DEFAULT 'Couleur des Modérateurs' NOT NULL;


-- rebuild_search
CREATE TABLE `phpbb_search_rebuild` (
  `rebuild_session_id` mediumint(8) unsigned NOT NULL auto_increment,
  `start_post_id` mediumint(8) unsigned NOT NULL default '0',
  `end_post_id` mediumint(8) unsigned NOT NULL default '0',
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(11) NOT NULL default '0',
  `last_cycle_time` int(11) NOT NULL default '0',
  `session_time` int(11) NOT NULL default '0',
  `session_posts` mediumint(8) unsigned NOT NULL default '0',
  `session_cycles` mediumint(8) unsigned NOT NULL default '0',
  `search_size` int(10) unsigned NOT NULL default '0',
  `rebuild_session_status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`rebuild_session_id`),
  KEY `end_post_id` (`end_post_id`)
);


-- pseudo subforum
ALTER TABLE phpbb_forums ADD attached_forum_id MEDIUMINT(8) DEFAULT '-1' NOT NULL;
ALTER TABLE phpbb_topics ADD INDEX topic_last_post_id(topic_last_post_id);


-- inactive users
ALTER TABLE phpbb_users ADD user_inactive_emls TINYINT( 1 ) NOT NULL ;
ALTER TABLE phpbb_users ADD user_inactive_last_eml INT( 11 ) NOT NULL ;
INSERT INTO phpbb_config (config_name, config_value) VALUES ('removed_users', '0') ;


-- db_maintenance
DELETE FROM phpbb_config WHERE config_name = 'index_rebuild_position';
DELETE FROM phpbb_config WHERE config_name = 'index_rebuild_end_position';
DELETE FROM phpbb_config WHERE config_name = 'index_rebuild_postlimit';
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuild_end', '0');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuild_pos', '-1');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuildcfg_maxmemory', '500');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuildcfg_minposts', '3');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuildcfg_php3only', '0');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuildcfg_php3pps', '1');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuildcfg_php4pps', '8');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuildcfg_timelimit', '240');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_rebuildcfg_timeoverwrite', '0');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_disallow_postcounter', '0');
INSERT IGNORE INTO phpbb_config (config_name, config_value) VALUES ('dbmtnc_disallow_rebuild', '0');


-- forum_icon
ALTER TABLE `phpbb_forums` ADD `forum_icon` VARCHAR( 255 ) default NULL;


-- fix_message_long
ALTER TABLE phpbb_posts_text CHANGE post_text post_text MEDIUMTEXT DEFAULT NULL;
ALTER TABLE phpbb_privmsgs_text CHANGE privmsgs_text privmsgs_text MEDIUMTEXT DEFAULT NULL;


-- bbcodebox
CREATE TABLE phpbb_bbc_box (
	bbc_id smallint(5) unsigned NOT NULL auto_increment,
	bbc_name varchar(255) NOT NULL,
	bbc_value varchar(255) NOT NULL,
	bbc_auth varchar(255) NOT NULL,
	bbc_before varchar(255) NOT NULL,
	bbc_after varchar(255) NOT NULL,
	bbc_helpline varchar(255) NOT NULL,
	bbc_img varchar(255) NOT NULL,
	bbc_divider varchar(255) NOT NULL,
	bbc_order mediumint(8) DEFAULT '1' NOT NULL,
	PRIMARY KEY (bbc_id)
);


-- bbcodebox_2
INSERT INTO phpbb_bbc_box VALUES (1, 'strike', '1', '0', 's', 's', 'strike', 'strike', '0', '10');
INSERT INTO phpbb_bbc_box VALUES (2, 'spoiler', '1', '0', 'spoil', 'spoil', 'spoiler', 'spoiler', '0', '20');
INSERT INTO phpbb_bbc_box VALUES (3, 'fade', '1', '0', 'fade', 'fade', 'fade', 'fade', '0', '30');
INSERT INTO phpbb_bbc_box VALUES (4, 'rainbow', '1', '0', 'rainbow', 'rainbow', 'rainbow', 'rainbow', '1', '40');
INSERT INTO phpbb_bbc_box VALUES (5, 'justify', '1', '0', 'align=justify', 'align', 'justify', 'justify', '0', '50');
INSERT INTO phpbb_bbc_box VALUES (6, 'right', '1', '0', 'align=right', 'align', 'right', 'right', '0', '60');
INSERT INTO phpbb_bbc_box VALUES (7, 'center', '1', '0', 'align=center', 'align', 'center', 'center', '0', '70');
INSERT INTO phpbb_bbc_box VALUES (8, 'left', '1', '0', 'align=left', 'align', 'left', 'left', '1', '80');
INSERT INTO phpbb_bbc_box VALUES (9, 'link', '1', '0', 'link=', 'link', 'link', 'alink', '0', '90');
INSERT INTO phpbb_bbc_box VALUES (10, 'target', '1', '0', 'target=', 'target', 'target', 'atarget', '1', '100');
INSERT INTO phpbb_bbc_box VALUES (11, 'marqd', '1', '0', 'marq=down', 'marq', 'marqd', 'marqd', '0', '110');
INSERT INTO phpbb_bbc_box VALUES (12, 'marqu', '1', '0', 'marq=up', 'marq', 'marqu', 'marqu', '0', '120');
INSERT INTO phpbb_bbc_box VALUES (13, 'marql', '1', '0', 'marq=left', 'marq', 'marql', 'marql', '0', '130');
INSERT INTO phpbb_bbc_box VALUES (14, 'marqr', '1', '0', 'marq=right', 'marq', 'marqr', 'marqr', '1', '140');
INSERT INTO phpbb_bbc_box VALUES (15, 'email', '1', '0', 'email', 'email', 'email', 'email', '0', '150');
INSERT INTO phpbb_bbc_box VALUES (16, 'flash', '1', '0', 'flash width=250 height=250', 'flash', 'flash', 'flash', '0', '160');
INSERT INTO phpbb_bbc_box VALUES (17, 'video', '1', '0', 'video width=400 height=350', 'video', 'video', 'video', '0', '170');
INSERT INTO phpbb_bbc_box VALUES (18, 'stream', '1', '0', 'stream', 'stream', 'stream', 'stream', '0', '180');
INSERT INTO phpbb_bbc_box VALUES (19, 'real', '1', '0', 'ram width=220 height=140', 'ram', 'real', 'real', '0', '190');
INSERT INTO phpbb_bbc_box VALUES (20, 'quick', '1', '0', 'quick width=480 height=224', 'quick', 'quick', 'quick', '1', '200');
INSERT INTO phpbb_bbc_box VALUES (21, 'sup', '1', '0', 'sup', 'sup', 'sup', 'sup', '0', '210');
INSERT INTO phpbb_bbc_box VALUES (22, 'sub', '1', '0', 'sub', 'sub', 'sub', 'sub', '1', '220');


-- bbcodebox_3
INSERT INTO phpbb_config (config_name, config_value) VALUES ('bbc_box_on', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('bbc_advanced', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('bbc_per_row', '14');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('bbc_time_regen', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('bbc_style_path', 'default');


-- quick_title_edition
CREATE TABLE phpbb_title_infos (
  id INT(11) auto_increment NOT NULL,
  title_info VARCHAR(255) default '' NOT NULL,
  info_color VARCHAR(6) default '' NOT NULL,
  date_format VARCHAR(25) default NULL,
  title_pos TINYINT(1) DEFAULT '0' NOT NULL,
  admin_auth TINYINT(1) default '0',
  mod_auth TINYINT(1) default '0',
  poster_auth TINYINT(1) default '0',
  UNIQUE KEY id (id)
);

ALTER TABLE phpbb_topics ADD title_compl_infos VARCHAR(255);
ALTER TABLE phpbb_topics ADD title_compl_color VARCHAR(6) default '' NOT NULL;
ALTER TABLE phpbb_topics ADD title_pos TINYINT(1) DEFAULT '0' NOT NULL;


-- champs_requis
CREATE TABLE phpbb_profile_config (
    config_name VARCHAR(255) NOT NULL DEFAULT '',
    config_value VARCHAR(255) NOT NULL DEFAULT '',
    PRIMARY KEY (config_name)
);

INSERT INTO phpbb_profile_config VALUES('icq','0');
INSERT INTO phpbb_profile_config VALUES('website','0');
INSERT INTO phpbb_profile_config VALUES('location','0');
INSERT INTO phpbb_profile_config VALUES('signature','0');
INSERT INTO phpbb_profile_config VALUES('aim','0');
INSERT INTO phpbb_profile_config VALUES('yim','0');
INSERT INTO phpbb_profile_config VALUES('msnm','0');
INSERT INTO phpbb_profile_config VALUES('occupation','0');
INSERT INTO phpbb_profile_config VALUES('interests','0');


-- today_userlist
INSERT INTO phpbb_config (config_name, config_value) VALUES ('today_day_selected', '0');


-- db_optimize
CREATE TABLE phpbb_optimize_db (
  cron_enable enum('0','1') NOT NULL default '0',
  cron_every int(7) NOT NULL default '86400',
  cron_next int(11) NOT NULL default '0',
  cron_count int(5) NOT NULL default '0',
  cron_lock enum('0','1') NOT NULL default '0',
  show_begin_for varchar(150) NOT NULL default '',
  show_not_optimized enum('0','1') NOT NULL default '0'
)


-- db_optimize2
INSERT INTO phpbb_optimize_db VALUES ('0', 86400, 0, 0, '1', '', '0');


-- colored_usernames
ALTER TABLE phpbb_groups ADD group_color varchar(32) NULL default 0;
INSERT INTO phpbb_config (config_name, config_value) VALUES ('colorize_groups', 1);
ALTER TABLE phpbb_users ADD group_priority mediumint(8) NULL default NULL;


-- description
ALTER TABLE phpbb_topics ADD topic_desc varchar(255) DEFAULT '' AFTER topic_title;