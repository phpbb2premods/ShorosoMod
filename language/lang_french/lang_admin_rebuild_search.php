<?php

/***************************************************************************
 *                       lang_admin_rebuild_search.php [French]
 *                       ---------------------------------------
 *     begin                : Mon Aug 22 2005
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin_rebuild_search.php,v 2.2.1.1 2005/10/03 18:38:17 chatasos Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

$lang['Rebuild_search'] = 'Reconstruire la Recherche';
$lang['Rebuild_search_desc'] = 'Ce MOD va indexer chaque message de votre forum, afin de reconstruire les tables de la Recherche.<br />
Vous pouvez suspendre le traitement des messages quand vous le souhaitez et reprendre celui-ci là où vous l\'avez suspendu (via une option proposée) la prochaine fois que vous vous rendrez sur cet outil.<br /><br />
Cet outil peut mettre un certain temps à afficher sa progression de la tâche en cours (Cela dépend du nombre de "Messages par cycle" et du "Temps limite").<br />
Ainsi, veillez à ne pas vous déplacer sur d\'autres pages que celle de la progression de la tache en cours, à moins que vous ne souhaitez le contraire, c\'est à dire interrompre celle-ci.';

//
// Input screen
//
$lang['Starting_post_id'] = 'Choix de l\'ID du message de départ';
$lang['Starting_post_id_explain'] = 'Message à partir duquel le traitement des messages va commencer.<br />Vous pouvez choisir de commencer depuis le début ou depuis le dernier message non traité.';

$lang['Start_option_beginning'] = 'Commencer depuis le début';
$lang['Start_option_continue'] = 'Reprendre le traitement arrêté';

$lang['Clear_search_tables'] = 'Nettoyer les tables de la Recherche';
$lang['Clear_search_tables_explain'] = 'Lorsque vous choisissez de lancer le traitement des messages depuis le début,<br />vous avez le choix de nettoyer les trois tables de la Recherche de phpBB.<br />Vous avez l\'option de choisir entre les méthodes SUPPPRIMER/TRONQUER (DELETE/TRUNCATE).';
$lang['Clear_search_no'] = 'NON (NO)';
$lang['Clear_search_delete'] = 'SUPPPRIMER (DELETE)';
$lang['Clear_search_truncate'] = 'TRONQUER (TRUNCATE)';

$lang['Num_of_posts'] = 'Nombre de messages';
$lang['Num_of_posts_explain'] = 'Nombre total de messages à traiter.<br />Le calcul se base sur le nombre total de messages,<br /> par rapport au nombre de messages restants dans la base de données.';

$lang['Posts_per_cycle'] = 'Messages par cycle';
$lang['Posts_per_cycle_explain'] = 'Nombre de messages à traiter par cycle.<br />Optez pour un petit ratio afin ne pas rencontrer d\'erreurs dites "timeouts" (temps limite dépassé),<br /> de la part de PHP/Serveur web.';

$lang['Refresh_rate'] = 'Temps de rafraichissement';
$lang['Refresh_rate_explain'] = 'Temps d\'attente (en secondes) avant le prochain cycle du traitement des messages.<br />Généralement, vous n\'aurez pas à changer cette valeur.';

$lang['Time_limit'] = 'Temps limite';
$lang['Time_limit_explain'] = 'Temps limite (en secondes) de chaque cycle du traitement des messages.';
$lang['Time_limit_explain_safe'] = '<i>PHP (en mode "safe mode") a l\option "timeouts" (temps limite dépassé) configurée sur %s secondes, restez en-dessous de cette valeur</i>';
$lang['Time_limit_explain_webserver'] = '<i>Votre serveur web a l\option "timeouts" (temps limite dépassé) configurée sur %s secondes, restez en-dessous de cette valeur</i>';

$lang['Disable_board'] = 'Désactiver le forum';
$lang['Disable_board_explain'] = 'Option permettant de désactiver ou non le forum durant le traitement des messages.';
$lang['Disable_board_explain_enabled'] = 'Le forum sera automatiquement réactivé après la fin du traitement des messages.';
$lang['Disable_board_explain_already'] = '<i>Votre forum est actuellement désactivé</i>';

//
// Information strings
//
$lang['Info_processing_stopped'] = 'Vous avez suspendu la dernière fois, jusqu\'au traitement du message ayant l\'ID %s. Il y a eu : %s messages traités.';
$lang['Info_processing_aborted'] = 'Vous avez abandonné la dernière fois, jusqu\'au traitement du message ayant l\'ID %s. Il y a eu : %s messages traités.';
$lang['Info_processing_aborted_soon'] = 'Veuillez patienter quelques minutes avant de continuer...';
$lang['Info_processing_finished'] = 'Le traitement est terminé avec succès, il y a : %s messages traités.';
$lang['Info_processing_finished_new'] = 'Le traitement est terminé avec succès jusqu\'au message ayant l\'ID %s. Il y a : %s messages traités.<br />Mais il y a eu de nouveaux messages depuis le %s.';

//
// Progress screen
//
$lang['Rebuild_search_progress'] = 'Progession de la reconstruction de la Recherche';

$lang['Processed_post_ids'] = 'Progession du message ayant l\'ID : %s jusqu\'au message ayant l\'ID %s';
$lang['Timer_expired'] = 'Temps expiré à %s secondes. ';
$lang['Cleared_search_tables'] = 'Tables de la Recherche nettoyées. ';
$lang['Deleted_posts'] = '%s messages ont été supprimés par vos utilisateurs durant le traitement des messages. ';
$lang['Processing_next_posts'] = 'Prochain traitement de %s messages. Veuillez patienter...';
$lang['All_session_posts_processed'] = 'Tous les messages de la session actuelle sont traités.';
$lang['All_posts_processed'] = 'Tous les messages du forum sont traités.';

$lang['Processing_post_details'] = 'Détails sur le traitement des messages';
$lang['Processed_posts'] = 'Messages traités';
$lang['Percent'] = 'Pourcentage';
$lang['Current_session'] = 'Session actuelle';
$lang['Total'] = 'Total';

$lang['Process_details'] = 'De <b>%s</b> à <b>%s</b> (d\'un total de <b>%s</b>)';
$lang['Percent_completed'] = '%s %% accomplis';

$lang['Processing_time_details'] = 'Détails sur le temps de traitement des messages';
$lang['Processing_time'] = 'Temps du traitement';
$lang['Time_last_posts'] = 'Les %s derniers messages de la session actuelle';
$lang['Time_from_the_beginning'] = 'Temps écoulé depuis de début de la session en cours';
$lang['Time_average'] = 'Moyenne par cycle de la session actuelle';
$lang['Time_estimated'] = 'Temps estimé jusqu\'à la fin de la session en cours';

$lang['days'] = 'jours';
$lang['hours'] = 'heures';
$lang['minutes'] = 'minutes';
$lang['seconds'] = 'secondes';

$lang['Database_size_details'] = 'Détails sur la base de données';
$lang['Size_current'] = 'Actuelle';
$lang['Size_estimated'] = 'Estimation après la fin du traitement';
$lang['Size_search_tables'] = 'Taille des tables de la Recherche';
$lang['Size_database'] = 'Taille de la base de données';

$lang['Bytes'] = 'Bytes';

$lang['Active_parameters'] = 'Détails sur les paramètres';
$lang['Posts_last_cycle'] = 'Messages traités lors du dernier cycle';
$lang['Board_status'] = 'Etat du forum';
$lang['Board_disabled'] = 'Désactivé';
$lang['Board_enabled'] = 'Activé';

$lang['Info_estimated_values'] = '(*) Toutes les valeurs estimées sont calculées approximativement<br />Les calculs sont basés sur le pourcentage en cours et ne peuvent représenter les valeurs finales.<br />À mesure que le pourcentage évolue, les valeurs en cours se rapprocheront des valeurs finales.';

$lang['Click_return_rebuild_search'] = 'Cliquez %sici%s pour retourner à l\'outil de reconstruction de la Recherche';
$lang['Rebuild_search_aborted'] = 'La reconstruction de la Recherche a abandonné au message ayant l\'ID %s.<br /><br />Si vous avez abandonné le traitement en cours, vous devez patienter quelques minutes avant de pouvoir relancer l\'outil de reconstruction de la Recherche, et ainsi le dernier cycle pourra se terminer.';
$lang['Wrong_input'] = 'Vous avez entré de mauvaises valeurs. Veuillez vérifiez celles-ci et réessayer à nouveau.';

// Buttons
$lang['Next'] = 'Prochain';
$lang['Processing'] = 'Traitement en cours...';
$lang['Finished'] = 'Terminé';

?>