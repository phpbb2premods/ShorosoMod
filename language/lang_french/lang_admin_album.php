<?php
/***************************************************************************
 *                            lang_admin_album.php [French]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *     Translation          : Kooky <kooky@altern.org>
 *
 *     $Id: lang_admin_album.php,v 1.0.6 2003/03/05 00:21:55 ngoctu Exp $^_^
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

//
// Configuration
//
$lang['Album_config'] = 'Configuration de l\'Album';
$lang['Album_config_explain'] = 'Ici, vous pouvez changer les options principales de votre Album Photos';
$lang['Album_config_updated'] = 'La configuration de l\'Album a �t� mise � jour avec succ�s';
$lang['Click_return_album_config'] = 'Cliquez %sici%s pour revenir � la configuration de l\'Album';
$lang['Max_pics'] = 'Nombre maximum de photos pour chaque galerie (-1 = illimit�)';
$lang['User_pics_limit'] = 'Nombre limite de photos par galerie pour chaque membre (-1 = illimit�)';
$lang['Moderator_pics_limit'] = 'Nombre limite de photos par galerie pour chaque mod�rateur (-1 = illimit�)';
$lang['Pics_Approval'] = 'Approbation des photos';
$lang['Rows_per_page'] = 'Nombre de lignes sur la page des miniatures';
$lang['Cols_per_page'] = 'Nombre de colonnes sur la page des miniatures';
$lang['Thumbnail_quality'] = 'Qualit� des miniatures (1-100)';
$lang['Thumbnail_cache'] = 'Cache des miniatures';
$lang['Manual_thumbnail'] = 'Option manuelle des miniatures';
$lang['GD_version'] = 'Optimisation pour la version de la librairie GD';
$lang['Pic_Desc_Max_Length'] = 'Longeur maximale de la description/commentaire de la photo (en caract�res)';
$lang['Hotlink_prevent'] = 'Pr�vention des liens directs';
$lang['Hotlink_allowed'] = 'Autoriser des domaines pour les liens directs (s�parer par une virgule)';
$lang['Personal_gallery'] = 'Autoriser la cr�ation d\'une galerie priv�e par les membres';
$lang['Personal_gallery_limit'] = 'Nombre limite de photos pour chaque galerie priv�e (-1 = illimit�)';
$lang['Personal_gallery_view'] = 'Qui peut voir les galeries priv�es';
$lang['Rate_system'] = 'Autoriser le syt�me de notation';
$lang['Rate_Scale'] = 'Echelle de notation';
$lang['Comment_system'] = 'Autoriser le syst�me de commentaire';
$lang['Thumbnail_Settings'] = 'Options des miniatures';
$lang['Extra_Settings'] = 'Options sp�ciales';
$lang['Default_Sort_Method'] = 'M�thode de tri par d�faut';
$lang['Default_Sort_Order'] = 'Ordre de tri par d�faut';
$lang['Fullpic_Popup'] = 'Voir la photo compl�te dans une fen�tre';


// Personal Gallery Page
$lang['Personal_Galleries'] = 'Galeries Priv�es';
$lang['Album_personal_gallery_title'] = 'Galeries Priv�es';
$lang['Album_personal_gallery_explain'] = 'Sur cette page, vous pouvez choisir quels sont les groupes autoris�s � cr�er et voir les galeries priv�es. Ces options s\'appliquent uniquement lorsque vous r�glez "Autoriser la cr�ation d\'une galerie priv�e par les membres" ou "Qui peut voir les galeries priv�es" sur "PRIVE" dans l\'�cran de configuration de l\'Album.';
$lang['Album_personal_successfully'] = 'Les options ont �t� mises � jour avec succ�s';
$lang['Click_return_album_personal'] = 'Cliquez %sici%s pour revenir aux options des Galeries Priv�es';

//
// Categories
//
$lang['Album_Categories_Title'] = 'Contr�le des galeries de l\'Album';
$lang['Album_Categories_Explain'] = 'Sur cette �cran, vous pouvez g�rer vos galeries: cr�er, modifier, supprimer, ordonner, etc.';
$lang['Category_Permissions'] = 'Permissions de la galerie';
$lang['Category_Title'] = 'Titre de la galerie';
$lang['Category_Desc'] = 'Description de la galerie';
$lang['View_level'] = 'Voir';
$lang['Upload_level'] = 'Uploader';
$lang['Rate_level'] = 'Noter';
$lang['Comment_level'] = 'Commenter';
$lang['Edit_level'] = 'Editer';
$lang['Delete_level'] = 'Supprimer';
$lang['New_category_created'] = 'La nouvelle galerie a �t� cr��e avec succ�s';
$lang['Click_return_album_category'] = 'Cliquez %sici%s pour revenir � la gestion des galeries de l\'Album';
$lang['Category_updated'] = 'Cette galerie a �t� mise � jour avec succ�s';
$lang['Delete_Category'] = 'Supprimer la galerie';
$lang['Delete_Category_Explain'] = 'Le formulaire ci-dessous vous autorise � supprimer une galerie et � d�cider o� vous souhaitez placer les photos qu\'elle contient.';
$lang['Delete_all_pics'] = 'Supprimer toutes les photos';
$lang['Category_deleted'] = 'Cette galerie a �t� supprim�e avec succ�s';
$lang['Category_changed_order'] = 'Cette galerie a chang� d\'ordre avec succ�s';

//
// Permissions
//
$lang['Album_Auth_Title'] = 'Permissions de l\'Album';
$lang['Album_Auth_Explain'] = 'Ici, vous pouvez choisir quels groupes peuvent �tre mod�rateur pour chaque galerie de l\'Album ou seulement en tant qu\'acc�s priv�.';
$lang['Select_a_Category'] = 'S�lectionner une galerie';
$lang['Look_up_Category'] = 'Consulter la galerie';
$lang['Album_Auth_successfully'] = 'Les permissions ont �t� mises � jour avec succ�s';
$lang['Click_return_album_auth'] = 'Cliquez %sici%s pour revenir aux permissions de l\'Album';

$lang['Upload'] = 'Uploader';
$lang['Rate'] = 'Noter';
$lang['Comment'] = 'Commentaire';

//
// Clear Cache
//
$lang['Clear_Cache'] = 'Vider le cache';
$lang['Album_clear_cache_confirm'] = 'Si vous utilisez l\'option du cache des miniatures, vous devez vider votre cache des miniatures apr�s avoir modifi� vos options des miniatures dans la configuration de l\'Album pour qu\'elles soient g�n�r�es � nouveau.<br /><br />Voulez-vous le vider maintenant ?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />Votre cache des miniatures a �t� vid� avec succ�s<br />&nbsp;';

?>