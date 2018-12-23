<?php
/***************************************************************************
 *                          lang_faq.php [french]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php
 *
 *
 ***************************************************************************/

/***************************************************************************
 *   English
 *   --------
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   Francais
 *   ----------
 *   Ce programme est un logiciel libre; vous pouvez les redistribuer
 *   et/ou le modifier tel que le pr�voit la license GNU General Public License
 *   (GNU/GPL) publi�e par la Fondation des logiciels libres (Free Software Foundation)
 *   Est appliqu�e la version 2 de la licence ou n'importe qu'elle version ant�rieure
 *   de votre choix.
 *
 ***************************************************************************/

//
// Traduction : phpBulletinBoard.fr (http://www.phpbulletinboard.fr/)
//
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
$faq[] = array("--","Connexion au forum");
$faq[] = array("Pourquoi ne puis-je pas me connecter ?", "Etes vous s�r que vous �tes enregistr� ? Plus s�rieusement, vous devez vous enregistrer pour pouvoir vous connecter. Si vous �tes enregistr�, et que vous ne pouvez vous connecter, v�rifiez bien si votre compte n'a pas �t� banni, ou s'il est inactif (un compte peut-�tre inactif si l'administrateur a activ� le code d'activation et que vous n'avez pas valid� votre compte via le mail qui vous a �t� envoy� par exemple). Si vous ne pouvez vraiment pas vous connecter sans aucune raison apparente, veuillez contacter le webmaster ou l'administrateur de ce forum.");
$faq[] = array("Pourquoi devrais-je m'inscrire au forum ?", "Personne ne vous y oblige. L'administrateur du forum est ma�tre de d�cider si les personnes non enregistr�es (invit�s) pourront poster ou non. Cependant l'enregistrement vous donnera acc�s � certaines options indisponibles aux invit�s, comme la possibilit� d'utiliser une signature, un avatar, d'envoyer des mails ou des messages priv�s aux autres membres, de vous inscrire � des groupes, etc. La proc�dure d'enregistrement ne prend que deux minutes, aussi il est recommand� de le faire.");
$faq[] = array("Pourquoi suis-je d�connect� automatiquement ?", "Si vous ne cochez pas le bouton <i>Se connecter automatiquement � chaque visite</i> lors de votre connexion, vous resterez seulement connect� le temps de votre pr�sence sur le forum. C'est une protection pour �viter que d'autres puissent utiliser ind�ment votre compte. Pour rester automatiquement connect�, cochez la case lors de la connexion. Il est recommand� de ne pas la cocher si vous acc�dez au forum via un espace public (biblioth�que, cyber-caf�, universit�, etc.).");
$faq[] = array("Comment puis-je cacher mon pseudo de la liste des connect�s ?", "Dans votre profil vous trouverez une option <i>Cacher votre pseudo</i>. Si vous cochez <i>oui</i> pour l'option, votre pseudo sera cach� dans la liste des connect�s (exept� des administrateurs qui vous verront en italique). Vous serez comptabilis� comme un membre en invisible.");
$faq[] = array("J'ai perdu mon mot de passe !", "Pas de panique ! Bien que votre mot de passe ne puisse �tre retrouv�, il peut �tre recr�� � nouveau. Pour cela, veuillez vous rendre sur la page de connexion et cliquez sur le lien <u>J'ai oubli� mon mot de passe</u>. Suivez les instructions et vous serez � nouveau connect� d'ici peu.");
$faq[] = array("Je me suis enregistr�, mais je ne peux pas me connecter !", "Tout d'abord, v�rifiez que vous avez entr� un bon pseudo / mot de passe. S'ils sont corrects, la seule raison restante est que votre compte n'a pas �t� activ�. Lorsque vous vous enregistrez, fournissez une adresse mail valide car, suivant la configuration du forum, un mail peut vous �tre envoy� avec un code d'activation. Il se peut aussi que l'administrateur ait enclench� l'activation manuelle des membres, auquel cas vous devrez attendre qu'un administrateur valide votre compte avant de pouvoir vous connecter (un email les notifiera de votre inscription).");
$faq[] = array("Je me suis d�j� enregistr� dans le pass� mais je ne peux plus me connecter � nouveau !", "Il y a deux raisons possibles � ce probl�me. Soit vous avez entr� un mauvais pseudo / mot de passe (v�rifiez l'email que vous avez re�u lors de votre enregistrement) ou bien l'administrateur a supprim� votre compte (pour diff�rentes raisons). Votre compte a tr�s bien pu, par exemple, �tre d�lest� si vous n'avez jamais post� de messages et que l'administrateur a fait le m�nage pour lib�rer un peu de place dans sa base de donn�es.");


$faq[] = array("--","Profil d'utilisateur");
$faq[] = array("Comment puis-je changer mon profil ?", "Votre profil (si vous �tes inscrit) est enregistr� dans la base de donn�es. Pour le modifier cliquez sur le lien <u>Profil</u> (g�n�ralement mis en haut des pages). Vous pourrez y modifier toutes vos donn�es.");
$faq[] = array("La date du forum est incorrecte !", "La date est certainement correcte. Cependant les dates affich�es sont g�r�es en fonction de diff�rents fuseaux horaires, il se peut que le v�tre soit mal r�gl�. Si c'est le cas vous pouvez le changer via le profil pour le resynchroniser avec votre fuseau horaire (Londres, Paris, New York, Sydney, etc). Veuillez noter que le fuseau horaire ne peut �tre modifi� que si vous �tes connect�. Si ce n'est pas d�j� le cas, voil� une bonne occasion de le faire !");
$faq[] = array("J'ai chang� mon fuseau horaire mais la date est � nouveau fausse !", "Si vous �tes s�r d'avoir mis un fuseau horaire correct, et que la date est encore fausse, changez le � nouveau. Le forum n'est pas con�u pour g�rer automatiquement les passages aux heures d'�t� ou d'hiver, aussi n'h�sitez pas � le d�caler vous-m�me d'une heure.");
$faq[] = array("Ma langue n'est pas dans la liste des langues disponibles !", "La raison la plus probable est que l'administrateur n'a pas install� sur le forum le pack de langue vous concernant. Essayez de demander � l'administrateur s'il peut le faire. Vous trouverez la liste des packs de langue disponibles sur notre site web.");
$faq[] = array("Comment puis-je mettre une image (avatar) devant mon pseudo ?", "Il y a deux types d'images possibles qui peuvent s'afficher devant votre pseudo. Le premier type est l'image du rang qui vous est associ� : elle prend g�n�ralement la forme d'�toiles ou de blocs. Vous en aurez plus ou moins suivant votre nombre de messages. Juste en dessous peut se trouver une image plus large qui s'appelle <i>avatar</i>. Elle est g�n�ralement unique ou personnelle � chaque membre. C'est � l'administrateur d'activer ou non les avatars et les diff�rentes fa�ons d'en utiliser un (depuis une galerie, une url ou en l'important depuis votre PC). Si vous ne pouvez utiliser d'avatar, c'est d�, soit au fait que l'administrateur les ait d�sactiv�s (nous sommes s�r qu'il a de bonnes raisons !), soit que seul votre avatar l'ait �t� (image choquante ou trop grande ?).");
$faq[] = array("Comment puis-je changer mon rang ?", "Vous ne pourrez pas changer votre rang en g�n�ral (les rangs apparaissent dans les sujets, sous votre pseudo, ou ailleurs suivant le th�me utilis�). De nombreux forums utilisent les rangs pour indiquer le nombre de messages des membres ou pour identifier certains membres. Par exemple il se peut que les mod�rateurs et administrateurs aient un rang sp�cial. Ne postez pas de messages inutiles (flood) juste pour incr�menter votre rang -- il y aura toujours un administrateur ou un mod�rateur qui supprimera vos messages inutiles et vous rabaissera davantage votre rang.");
$faq[] = array("Quand je clique sur le lien pour envoyer un email � un membre, il me demande de me connecter.", "D�sol�, mais seul les membres connect�s (donc enregistr�s) peuvent envoyer des emails. Il s'agit d'une simple protection pour �viter les envois de mails anonymes (spams, etc).");


$faq[] = array("--","Ajout de messages");
$faq[] = array("Comment puis-je poster un sujet dans un forum ?", "Simplement en cliquant sur le bouton appropri� sur la page du forum, ou sur celle du sujet. Il vous sera peut-�tre n�cessaire de vous enregistrer avant de poster votre message. Les droits que vous poss�dez sont list�s en bas de la page du forum ou du sujet (par exemple la liste : <i>Vous pouvez poster de nouveaux sujets dans ce forum, Vous pouvez r�pondre aux sujets dans ce forum, etc.</i>)");
$faq[] = array("Comment puis-je �diter ou supprimer un message ?", "� moins de n'�tre administrateur ou mod�rateur du forum, vous ne pouvez �diter ou supprimer que vos propres messages. Vous pouvez �diter un message (parfois seulement apr�s un certain temps apr�s qu'il ait �t� post�) en cliquant sur le bouton <i>�diter</i> du message concern�. Si quelqu'un a d�j� r�pondu au message, un petit texte appara�tra tout en bas du message apr�s que vous ayez �dit�, indiquant le nombre d'�dition du message. Il n'appara�tra pas si personne n'a r�pondu, ou si un mod�rateur ou un administrateur a �dit� le message (il devrait laisser un petit message expliquant ce qu'il a modifi�, et pourquoi). Veuillez noter qu'un utilisateur normal ne peut supprimer un message une fois que quelqu'un y a r�pondu.");
$faq[] = array("Comment puis-je ajouter une signature � mon message ?", "Pour ajouter une signature � un message vous devez avant tout la cr�er, via votre profil. Une fois cr��e, vous pouvez cocher la case <i>Attacher sa signature</i> dans le formulaire pour poster un message, juste en dessous de la zone de texte. Vous pouvez aussi ajouter par d�faut votre signature � tous vos messages en cochant la bonne case dans votre profil. Il vous sera toujours possible de ne pas afficher votre signature sur un message en particulier, en d�cochant la case <i>Attacher sa signature</i> dans le formulaire.");
$faq[] = array("Comment puis-je cr�er un sondage ?", "Cr�er un sondage est simple -- lorsque vous postez un nouveau sujet (ou que vous �ditez le premier message, si vous en avez la permission) vous devriez voir un formulaire <i>Ajouter un sondage</i> en dessous de la partie <i>Poster un nouveau sujet</i>. Si vous ne le voyez pas, c'est que vous n'avez probablement pas les droits pour cr�er des sondages. Vous devez entrer un titre � votre sondage et ensuite au moins deux options. Pour ajouter une option, entrez la proposition dans la case et cliquez sur le bouton <i>Ajouter l'option</i>. Vous pouvez aussi ajouter un temps limite au sondage, 0 signifiant qu'aucune limite n'est fix�e. Sachez qu'il y a un nombre maximum d'options que vous pouvez entrer, fix� par l'administrateur.");
$faq[] = array("Comment puis-je �diter ou supprimer un sondage ?", "Comme pour les messages, les sondages ne peuvent �tre �dit�s que par le posteur, les mod�rateurs ou l'administrateur. Pour �diter un sondage, cliquez sur le bouton <i>�diter</i> du premier message, le sondage lui �tant toujours associ�. Si personne n'a encore vot�, vous pourrez supprimer le sondage ou bien �diter les options. Sinon, seul les mod�rateurs et l'administrateur pourront le faire, ceci dans le but d'�viter de truquer les sondages en modifiant les options au cours des votes.");
$faq[] = array("Pourquoi ne puis-je pas acc�der � un forum ?", "Il est possible que des forums soient r�serv�s � certains utilisateurs ou groupes. Pour voir, lire, poster, etc. vous devez avoir des autorisations sp�ciales que seuls les mod�rateurs et administrateurs peuvent donner. Vous devriez donc les contacter.");
$faq[] = array("Pourquoi ne puis-je pas voter dans les sondages ?", "Seuls les utilisateurs enregistr�s peuvent voter dans les sondages, ceci afin d'�viter le trucage des r�sultats. Si vous �tes enregistr� et que vous ne pouvez toujours pas voter, c'est que vous n'avez probablement pas les droits d'acc�s appropri�s.");


$faq[] = array("--","Formatage et types de Sujets");
$faq[] = array("Qu'est ce que le BBCode ?", "Le BBCode est un langage \"� balises\" qui vous permet de mettre en forme et d'organiser le texte de vos messages, notes et annonces. Sur le principe du code HTML, le BBCode s'appuie sur l'ouverture et la fermeture de balises, contenues dans des crochets [ et ], pour d�limiter votre texte suivant le mod�le [balise]texte[/balise]. Pour plus d'informations sur le BBCode, consultez le guide qui est accessible depuis la page de cr�ation / r�ponses des messages ou en cliquant <a href=\"faq.php?mode=bbcode\">ici</a>.");
$faq[] = array("Puis-je utiliser le HTML ?", "Cela d�pend si l'administrateur vous-y autorise ou pas. Si vous �tes autoris� � utiliser le HTML, vous remarquerez certainement que seulement certaines balises fonctionnent. C'est une mesure de s�curit� pour �viter que certains tags ne d�truisent la mise en page ou puissent permettre d'autres actions malveillantes.");
$faq[] = array("Que sont les smileys ?", "Les smileys, ou �motic�nes, sont de petites images qui peuvent �tre utilis�es pour exprimer un sentiment en �crivant une combinaison courte de caract�res. Par exemple :  <b>:)</b> signifie <b>content</b>,  <b>:(</b> signifie <b>triste</b>. La liste compl�te des smileys peut �tre vue � partir du formulaire pour poster les messages. Essayez de ne pas abuser des smileys, car ils peuvent rapidement rendre un message illisible et un mod�rateur pourrait d�cider de les supprimer du message, ou de supprimer le message lui-m�me...");
$faq[] = array("Puis-je poster des images ?", "Des images peuvent bien �videment appara�tre dans votre message, cependant il n'existe pour l'instant aucun moyen de charger les images directement sur le forum. Ainsi vous aurez besoin de lier les images vers un serveur web d'acc�s public. Pour poster une image, utilisez le BBCode [img] ou la balise html appropri�e (si elle est autoris�e).");
$faq[] = array("Que sont les annonces ?", "Les annonces contiennent des informations importantes et vous devriez les lire aussit�t que possible. Les annonces apparaissent au sommet de chaque page du forum dans lesquelles elles sont post�es. Que vous puissiez poster ou non, les annonces n�cessitent des permissions pour pouvoir �tre post�es, permissions elles-m�mes attribu�es par l'administrateur.");
$faq[] = array("Que sont les sujets Post-it ?", "Les sujets Post-it apparaissent en dessous des sujets d'annonces et seulement sur la premi�re page. Ils sont souvent importants donc vous devriez essayer de les lire quand c'est possible. Comme pour les annonces, c'est l'administrateur qui d�cide quelles permissions sont requises pour poster un Post-it dans un forum.");
$faq[] = array("Pourquoi tel sujet est verrouill� ?", "Les sujets peuvent �tre verrouill�s soit par les mod�rateurs, soit par l'administrateur lui-m�me. Vous ne pouvez pas r�pondre sur un sujet verrouill� et n'importe quel sondage contenu dans un sujet verrouill� est automatiquement clos. Les sujets peuvent �tre verrouill�s pour beaucoup de raisons diff�rentes...");


$faq[] = array("--","Niveaux d'utilisateurs et groupes");
$faq[] = array("Qui sont les administrateurs ?", "Les administrateurs sont des utilisateurs qui poss�dent le plus haut niveau de contr�le sur le forum. Ces personnes peuvent contr�ler toutes les facettes des op�rations concernant le forum, ce qui inclut la mise en place des permissions, le bannissement d'autres utilisateurs, la cr�ation de groupes d'utilisateurs, la nomination des mod�rateurs etc... Ils peuvent �galement mod�rer tous les forums.");
$faq[] = array("Qui sont les mod�rateurs ?", "Les mod�rateurs sont des utilisateurs (ou des groupes d'utilisateurs) dont le travail est de surveiller le bon fonctionnement du forum jour apr�s jour. Ils ont le pouvoir d'�diter ou de supprimer des messages ainsi que de verrouiller/d�verrouiller, transf�rer, supprimer ou s�parer les sujets situ�s dans les forums dont ils ont la mod�ration. G�n�ralement les mod�rateurs sont l� pour pr�venir des personnes qui font du <i>Hors-sujet</i> ou qui postent des messages abusifs ou diffamatoires.");
$faq[] = array("Que sont les groupes d'utilisateurs ?", "Les groupes d'utilisateurs sont un moyen qu'utilisent les administrateurs pour regrouper des utilisateurs. Chaque utilisateur peut appartenir � plusieurs groupes (ce qui est diff�rent de la plupart des autres forums) et chaque groupe peut �tre assign� par des droits d'acc�s particuliers. Cela devient tr�s facile pour un administrateur de mettre plusieurs utilisateurs en mod�rateurs de forums, ou encore de leur donner des acc�s � certains forums priv�s etc...");
$faq[] = array("Comment puis-je rejoindre un groupe d'utilisateurs ?", "Pour rejoindre un groupe d'utilisateurs, cliquez sur le lien <u>groupes</u> dans l'en-t�te de la page (peut-�tre diff�rent suivant le design du forum). Ainsi vous pouvez voir tous les groupes d'utilisateurs. Certains groupes ne sont pas en <i>acc�s libre</i> : ils peuvent �tre ferm�s ou m�me cach�s. Si le groupe est ouvert, vous pouvez le rejoindre en cliquant sur le bouton appropri�. Le mod�rateur du groupe devra approuver votre demande pour qu'elle soit accept�e, il peut aussi vous demander pour quelles raisons vous souhaitez faire partie de tel ou tel groupe. Merci donc de ne pas r�ler contre un mod�rateur de groupe s'il refuse votre demande, il aura certainement de bonnes raisons pour le faire que vous pouvez ignorer.");
$faq[] = array("Comment puis-je devenir mod�rateur de groupe ?", "Les groupes d'utilisateurs sont initialement cr��s par un administrateur du forum. Celui-ci assigne en m�me temps un mod�rateur � chaque groupe. Si vous �tes int�ress� pour devenir mod�rateur de groupe, votre seul contact est donc un administrateur. Essayez donc de le contacter par message priv�...");


$faq[] = array("--","Messages Priv�s");
$faq[] = array("Je ne peux pas envoyer de messages priv�s !", "Il peut y avoir trois raisons � cela: vous n'�tes pas enregistr� et/ou connect�, l'administrateur du forum a d�sactiv� les messages priv�s ou l'administrateur vous emp�che d'envoyer des messages. Si tel est le cas, vous devriez le contacter afin de savoir pourquoi.");
$faq[] = array("Je n'arr�te pas de recevoir des messages non sollicit�s !", "Dans le futur, le syst�me de messagerie comportera une liste-noire. Pour le moment, si vous recevez trop de messages non sollicit�s de la part de quelqu'un, essayez de contacter l'administrateur. Il a le pouvoir d'emp�cher quelqu'un d'envoyer des messages.");
$faq[] = array("J'ai re�u des spams et autres mails abusifs de la part d'un utilisateur de ce forum !", "Nous en sommes d�sol�s. Le formulaire d'email de ce forum inclut des barri�res de s�curit� pour essayer de traquer les utilisateurs qui envoient de tels spams. Vous devriez contacter l'administrateur du forum avec une copie de l'email recu (et notamment les en-t�tes afin d'obtenir une recherche plus fructueuse) ainsi il pourra essayer de retrouver le coupable.");

//
// These entries should remain in all languages and for all modifications
// -[fr]- Ces entr�es doivent subsister dans tous les langages et pour toute �ventuelle modification.
//
$faq[] = array("--","phpBB 2");
$faq[] = array("Qui a �crit ce forum ?", "Ce programme (dans sa forme originelle) est produit, distribu� et copyright� par le <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Il est disponible sous license GNU/GPL et peut �tre redistribu� librement. Consultez le lien pour plus de d�tails.");
$faq[] = array("Pourquoi est-ce que la fonction X n'est pas disponible ?", "Ce programme a �t� �crit par le phpBB Group. Si vous pensez qu'une fonction devrait �tre ajout�e, visitez donc le site phpbb.com et voyez ce que le phpBB Group en pense. Merci de ne pas poster de demande d'ajout sur le forum phpbb.com, utilisez plut�t le syst�me de gestion des t�ches sourceforge du groupe. ");
$faq[] = array("Qui dois-je contacter en cas de redistribution abusive ou ill�gale de ce forum ?", "Vous devez contacter l'administrateur de ce forum. Si vous ignorez qui c'est, contactez un mod�rateur et lui demander vers qui vous orienter. Si vous n'avez toujours aucune r�ponse, contactez le propri�taire du domaine (essayez une requ�te whois) ou, s'il est h�berg� par un service gratuit, le d�partement <i>abuse</i> de ce service. Notez bien que le phpBB Group n'a aucun contr�le sur la mani�re dont est redistribu� le forum, et ne peut en �tre aucunement reconnu pour responsable.");

//
// This ends the FAQ entries
// -[fr]- Ici finissent les entr�es pour la FAQ.
//

?>
