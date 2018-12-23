<?php

/***************************************************************************
 *                            lang_bbcode.php [french]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2006 phpBulletinBoard.fr
 *
 *     $Id: lang_bbcode.php
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
// Traduction : phpBulletinBoard.fr (http://www.phpbulletinboard.fr/)
//
 
// ---English---
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
// ---French---
// Si vous voulez ajouter une section, ajoutez simplement une ligne � ce fichier, ressemblant � celle-ci :
// $faq[] = array("--","titre du paragraphe d�sir�");
// Pour ajouter un article dans votre guide du BBCode, ajoutez simplement une ligne � ce fichier, ressemblant � celle-ci :
// $faq[] = array("question", "r�ponse");
// Ne vous pr�occupez pas des liens, ou du reste, tout est cr�� automatiquement.
//
// N'OUBLIEZ PAS !
// - Pensez � bien mettre un point virgule (;) (sans paranth�ses bien entendu) � la fin de votre ligne.
// - Ne mettez pas de guillemets (") dans votre guide du BBCode, si vous en avez absolument besoin,
//      soustrayez-le en l'antislashant (ex : \"quelquechose\").
// - Ne touchez pas aux �l�ments HTML de ce fichier, sauf cas de force majeure. Merci :)
//
// Les sections du guide du BBCode apparaitront dans la page correspondante, dans le m�me ordre que celui pr�sent� dans ce fichier.
//
 
$faq[] = array("--","Introduction");
$faq[] = array("Qu'est ce que le BBCode ?", "Le BBCode est un langage \"� balises\" qui vous permet de mettre en forme et d'organiser le texte de vos messages, notes et annonces. <br /> Sur le principe du code HTML, le BBCode s'appuie sur l'ouverture et la fermeture de balises, contenues dans des crochets [ et ], pour d�limiter votre texte suivant le mod�le [balise]texte[/balise]. Le slash (\"/\") pr�c�dant le nom de la balise indique la fermeture d'une balise pr�alablement ouverte.<br />Des explications propres � chacune des balises BBCode sont dispens�es plus bas. <br />L'activation du BBCode est d�termin�e par l'administrateur. En outre, vous pouvez d�sactiver le BBCode dans un message lors de sa composition.<br />Vous pourrez facilement rajouter des balises BBCode � vos messages au travers d'une interface de boutons \"cliquables\" au-dessus de la zone de saisie des messages. Toutefois, le guide qui suit pourra vous �tre utile.");  

$faq[] = array("--","Mise en forme du texte");
$faq[] = array("Comment rendre le texte en gras, en italique, ou le souligner ?", "Le BBCode correspond � des balises permettant d'organiser et mettre en forme votre texte avec clart�, facilit� et rapidit�. <ul><li>Pour modifier une partie de votre texte en gras, encadrez ce texte avec les balises <b>[b] [/b]</b>, exemple: <br /><br /><b>[b]</b>Texte en gras<b>[/b]</b> donnera : <b>Texte en gras</b></li><br /><li>Pour souligner une partie de votre texte, encadrez ce texte des balises <b>[u] [/u]</b>, par exemple :<br /><br /><b>[u]</b>Texte soulign�<b>[/u]</b> donnera : <u>Texte soulign�</u></li><br /><li>Pour mettre une partie de texte en italique, encadrez ce texte avec les balises <b>[i] [/i]</b>, exemple:<br /><br /><b>[i]</b>Texte en Italique<b>[/i]</b> donnera : <i>Texte en Italique</i></li></ul>");
$faq[] = array("Comment changer la taille ou la couleur d'un texte ?", "Gardez � l'esprit que ce qui appara�tra � l'�cran d�pendra de votre navigateur, de votre syst�me d'exploitation, de leurs configurations, ainsi que de votre mat�riel. Pour changer la couleur ou la taille de votre texte, vous pouvez utiliser les balises suivantes : <ul><li>Pour rendre une partie de votre texte en couleur, encadrez-la par les balises <b>[color=][/color]</b>. Vous devez sp�cifier un nom de couleur reconnu (ex : red, blue, yellow, etc. pour rouge, bleu, jaune, etc.) ou en employant comme alternative la valeur hexad�cimale de la couleur (ex : #FFFFFF, #000000). Par exemple, pour cr�er un texte rouge, encadrez-le comme il suit :<br /><br /><b>[color=red]</b>Texte en rouge<b>[/color]</b><br /><br />ou<br /><br /><b>[color=#FF0000]</b>Texte en rouge<b>[/color]</b><br /><br />cela donnera <span style=\"color:red\">Texte rouge</span>.</li><li>Pour changer la taille du texte, proc�dez de la m�me fa�on, en utilisant les balises <b>[size=][/size]</b>. Ces balises d�pendent du th�me utilis�, mais les valeurs que vous pouvez employer sont des valeurs num�riques repr�sentant la taille du texte en pixels, allant de 1 (si petit que le texte sera illisible) jusqu'� 29 (tr�s grand). Par exemple :<br /><br /><b>[size=9]</b>petit<b>[/size]</b><br /><br />donnera <span style=\"font-size:9px\">petit</span><br /><br />alors que :<br /><br /><b>[size=24]</b>ENORME<b>[/size]</b><br /><br />donnera <span style=\"font-size:24px\">ENORME</span>.</li></ul>");
$faq[] = array("Est il possible de combiner les balises BBCode?", "Oui ! Par exemple, pour attirer l'attention sur ce que vous venez d'�crire, encadrez-le par :<br /><br /><b>[size=18][color=red][b]</b>REGARDEZ MOI !<b>[/b][/color][/size]</b><br /><br />ce qui donnera <span style=\"color:red;font-size:18px\"><b>REGARDEZ MOI !</b></span><br /><br />Nous vous d�conseillons d'abuser de ce type de messages, bien qu'il vous soit possible d'en cr�er. N'oubliez pas que c'est � vous, membre utilisateur, de vous assurer que les balises sont correctement ferm�es. Par exemple, ce qui suit est incorrect :<br /><br /><b>[b][u]</b>Ceci est faux !<b>[/b][/u]</b>");

$faq[] = array("--","Citation et diff�rence de largeur du texte.");
$faq[] = array("Citation dans la r�ponse.", "Il y a deux m�thodes pour citer tout ou partie d'un message : avec ou sans r�f�rence.<ul><li>La premi�re m�thode consiste � utiliser le bouton \"Citer\" pour r�pondre � un message. Le message cit� est automatiquement ajout� dans la zone de texte et encadr� par les balises <b>[quote=\"\"]</b> et <b>[/quote]</b>. Cette m�thode vous permet de citer un message avec une r�f�rence � son auteur (ou ce que vous aurez choisi de mettre !). Par exemple, pour citer une partie du texte �crit par X, vous devrez saisir:<br /><br /><b>[quote=\"X\"]</b>Texte de X que vous souhaitez citer<b>[/quote]</b><br /><br />Une fois le message post�, le texte de X sera pr�c�d� de <b>X a �crit</b><br />Souvenez-vous que vous <b>devez</b> encadrer la r�f�rence que vous citez par des guillemets \"\". Ils ne sont pas optionnels.</li><br /><li>La seconde m�thode vous permet de citer un texte sans faire r�f�rence � son auteur. Pour l'utiliser, encadrez le texte � citer par les balises <b>[quote]</b> et <b>[/quote]</b>. Le message cit� sera simplement pr�c�d� de la mention <b>Citation</b>.</li></ul>");
$faq[] = array("Texte brut, ou partie de code", "Pour afficher dans vos messages du texte sans mise en forme, avec une taille fixe de caract�res, en police d'�criture de type Courrier ou bien encore des parties de code informatique sans interpr�tation (ex : description de balise BBCode) , vous devez encadrez votre texte avec les balises <b>[code][/code]</b>, exemple: <br /><ul><b>[code]</b>[b]Texte en Gras [/b]<b>[/code]</b> donnera [b]Texte en Gras [/b] (et non <b>Texte en Gras</b>)</ul>Toute mise en forme utilis�e dans  les balises <b>[code][/code]</b> sera donc ignor�e.<br />");

$faq[] = array("--","Cr�er des listes");
$faq[] = array("Cr�er une liste non-ordonn�e", "Le BBCode permet de cr�er deux types de listes : les listes non-ordonn�es et les listes ordonn�es. Elles sont quasi identiques � leurs �quivalents en HTML.<br />Une liste non-ordonn�e affichera chaque item les uns � la suite des autres dans l'ordre de saisie. Chaque item de la liste sera pr�c�d� par une puce.<br /> Pour cr�er une liste non-ordonn�e, utilisez les balises <b>[list] [/list]</b> et d�finissez chaque item � l'int�rieur de la liste en utilisant <b>[*]</b>. <ul>Par exemple, pour �tablir une liste de vos couleurs favorites, saisissez:<br /><br /><b>[list]</b><br /><b>[*]</b>Rouge<br /><b>[*]</b>Bleu<br /><b>[*]</b>Jaune<br /><b>[/list]</b><br /><br />Vous obtiendrez :<br /><br /><li>Rouge</li><li>Bleu</li><li>Jaune</li></ul>");
$faq[] = array("Cr�er une liste ordonn�e", "Une liste ordonn�e affichera chaque item les uns � la suite des autres dans l'ordre de saisie. Chaque item de la liste sera pr�c�d� d'une lettre ou d'un chiffre, sp�cifiant ainsi son num�ro d'ordre dans la liste. Pour cr�er une liste ordonn�e avec des items pr�c�d�s d'une lettre, vous devez encadrez votre texte des balises <b>[list=a][/list]</b>. De la m�me mani�re, pour cr�er une liste ordonn�e avec des items pr�c�d�s d'un chiffre, utilisez les balises <b>[list=1][/list]</b>. Comme pour les listes non-ordonn�es, chaque item est d�finie en utilisant <b>[*]</b>. <ul>Exemple de liste ordonn�e alpha : <br /><br /><b>[list=a]</b><br /><b>[*]</b>Rouge<br /><b>[*]</b>Bleu<br /><b>[*]</b>Jaune<br /><b>[/list]</b><br /><br />donnera : </ul><ol type=\"a\"><li>Rouge</li><li>Bleu</li><li>Jaune</li></ol><ul>Exemple de liste ordonn�e num�rique : <br /><br /><b>[list=1]</b><br /><b>[*]</b>Rouge<br /><b>[*]</b>Bleu<br /><b>[*]</b>Jaune<br /><b>[/list]</b><br /><br />donnera :</ul><ol type=\"1\"><li>Rouge</li><li>Bleu</li><li>Jaune</li></ol>");

$faq[] = array("--", "Cr�er des liens");
$faq[] = array("Cr�er un lien vers un autre site", "Le BBCode offre plusieurs possibilit�s pour cr�er des liens hypertextes vers d'autres ressources, plus commun�ment appel�s URLs (pour Uniform Resource Indicators).<ul><li>La premi�re m�thode consiste � utiliser les balises <b>[url=][/url]</b>. Tapez l'adresse vers laquelle pointera votre URL apr�s le signe '=' comme dans l'exemple suivant :<br /><br /><b>[url=http://www.phpbb.com/]</b>Visitez phpBB !<b>[/url]</b>  permet d'obtenir le lien suivant : <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visitez phpBB !</a> <br /><br />Vous noterez que la page web vers laquelle pointe votre lien s'ouvrira dans une nouvelle fen�tre, ce qui permet � l'utilisateur de continuer � utiliser le forum � sa convenance.</li><br /><li>Vous pouvez �galement afficher l'adresse de votre lien en utilisant les balises <b>[url] [/url]</b> de la mani�re suivante: <br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b> ce qui aura pour r�sultat : <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><br /><li>En outre, phpBB int�gre la technologie <i>Magic Links</i>. Cette technologie permet de rendre active toute URL correcte sans avoir � utiliser les balises BBCode ou la faire pr�c�der de http://. Par exemple, en saisissant www.phpbb.com dans votre message, celui-ci sera automatiquement reconnu comme un lien actif : <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><br /><li> Cette r�gle s'applique �galement aux adresses de courrier �lectroniques (e-mails). Ainsi, l'usage des balises <b>[email] [/email]</b> pour encadrer une adresse e-mail aura le m�me r�sultat que la saisie directe de cette m�me adresse <br /><br /><b>[email]</b>nom@domaine.com<b>[/email]</b> et nom@domaine.com auront tous deux pour r�sultat <a href=\"emailto:nom@domaine.com\">nom@domaine.com</a></li></ul>Enfin, ces balises BBCode peuvent �tre combin�es avec d'autres balises comme <b>[img][/img]</b> (voir paragaphe suivant), <b>[b][/b]</b>, etc... <br />Dans ce cas, veillez � l'ordre d'ouverture des balises et assurez vous de fermer les balises correctement. <br /> Ainsi, l'exemple ci-apr�s n'est pas correct :<br /><ul><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b></ul>");

$faq[] = array("--", "Afficher une image dans un message");
$faq[] = array("Ajouter une image dans un message", "Le BBCode poss�de aussi des balises pour inclure des images dans vos messages. Vous devez vous souvenir de deux choses tr�s importantes lorsque vous utiliserez ces balises ! Premi�rement, beaucoup d'utilisateurs n'appr�cient pas voir apparaitre un nombre important d'images dans les messages. Deuxi�mement, l'image que vous voulez afficher doit obligatoirement se trouver sur Internet (elle ne doit pas se trouver sur votre ordinateur, par exemple, sauf si vous postez depuis un ordinateur qui fait office de serveur web !). Il est actuellement impossible d'afficher des images depuis votre ordinateur avec un forum phpBB comme fourni dans le fichier d'installation (des solutions sont succeptibles de se trouver dans la prochaine version de phpBB). Pour afficher une image, vous devez mettre de part et d'autre de l'URL pointant vers l'image les balises <b>[img][/img]</b>. Par exemple :<br/><br/><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Comme not� dans la section traitant des liens, vous pouvez aussi utiliser votre image pour comme lien en utilisant les balises <b>[url]<b> et <b>[/url]</b> si vous le d�sirez. Exemple :<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />donnera : <br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "D'autres probl�mes ?");
$faq[] = array("Est-il possible d'ajouter et d'utiliser mes propres balises ?", "Non, pas dans les versions actuelles. Mais cela sera rendu possible avec la prochaine version majeure.");


//
// This ends the BBCode guide entries
//

?>
