<?php
/***************************************************************************
 *                        lang_smilies_upload.php [French]
 *                            -------------------
 *   begin                : 12/06/2004
 *   version              : 1.1.0
 ***************************************************************************/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
//	 The greatest emperor of the rabbits - Lapinouland

//
// The format of this file is ---> $lang['message'] = 'text';
//
// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] .= '';

if ( defined('IN_SMILIESUPLOAD_LANG') )
{
	return;
}
define('IN_SMILIESUPLOAD_LANG', true);

$lang['Upload_Smilies'] = 'Upload de smilies';
$lang['SU_Upload_Smilies'] = 'Upload de smilies';
$lang['SU_Upload_Explain'] = 'Vous pouvez utiliser ceci pour uploader de petites images faisant office de smilie ou �moticone . Une seul image � la fois peut �tre upload�e , et sa taille ne doit pas �tre sup�rieure � %s Kilooctects. Les dimensions maximales sont %s pour la largeur et %s pour la hauteur .';
$lang['SU_File'] = 'Uploader une image depuis votre ordinateur';
$lang['SU_Sorry'] = 'D�sol� , vous ne pouvez pas uploader de fichiers .';
$lang['SU_Upload_Name'] = 'Nom du fichier d\'upload';
$lang['SU_Default_Name'] = 'Utiliser le nom original du fichier';
$lang['SU_Name_Explain'] = 'Sp�cifie un nom pour le fichier upload�. N\'incluez pas l\'extension du fichier (par exemple , utilisez "apple" au lieu "apple.gif").';
$lang['SU_Upload_Succesful'] = 'Fichier upload� avec succ�s !';
$lang['SU_Upload_Failed'] = 'Echec de l\'upload du fichier ! V�rifiez que le r�pertoire de destination des smilies poss�de les permissions pour ceci .';
$lang['SU_Auto_Add'] = 'Ajouter automatiquement aux smilies du forum';
$lang['SU_Add_Successful'] = 'Ajout� dans la table des smilies de la base de donn�es avec succ�s !';
$lang['SU_Add_Failed'] = 'Impossible d\'ajouter � la table des smilies de la base de donn�es .';
$lang['SU_filetype'] = 'Seules les extensions JPEG, GIF, ou PNG sont autoris�es .';
$lang['SU_filesize'] = 'Seuls les fichiers d\'une taille inf�rieure � %s KO peuvent �tre upload�s .';
$lang['SU_File_Already'] = 'Un fichier avec ce nom existe d�j� dans le r�pertoire des smilies .';
$lang['SU_CC_Fail'] = 'Impossible de v�rifier le code des smilies existants .';
$lang['SU_CC_Found'] = 'Il existe d�j� un smilie avec ce code .';
$lang['SU_Filename_failed'] = 'Impossible de d�terminer un nouveau fichier';
$lang['SU_open_basedir'] = 'Votre version de PHP n\'autorise pas la fonction move_uploaded_file .';
$lang['SU_Uploaded'] = 'Images de smilies upload�es';
$lang['SU_Sorry_None'] = 'Vous n\'avez aucune images de smilies upload�es .';
$lang['SU_Delete_Successful'] = 'Le fichier %s a �t� supprim� !';
$lang['SU_Delete_Failed'] = 'Vous ne pouvez pas effacer le fichier %s !';
$lang['SU_Select_file'] = 'Veuillez s�lectionner un fichier � uploader .';
$lang['SU_CD_Fail'] = 'Impossible d\'effacer la moindre entr�e dans la base de donn�es .';
$lang['SU_CD_Successful'] = 'Effacer les entr�es dans la base de donn�es des smilies .';
$lang['SU_Width_height'] = 'Ce fichier d�passe les dimensions maximales autoris�es . Les images doivent avoir une largeur inf�rieure � %s et une hauteur inf�rieure � %s .';
$lang['SU_No_Name'] = 'Vous n\'avez pas sp�cifi� de nom pour le fichier upload� .';

?>