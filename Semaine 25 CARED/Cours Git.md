# SCM (Source Code Manager)

## Différentes version

  - Les systèmes de gestion de version locaux

La méthode courante pour la gestion de version est généralement de recopier les fichiers dans un autre répertoire (peut-être avec un nom incluant la date dans le meilleur des cas). Cette méthode est la plus courante parce que c'est la plus simple, mais c'est aussi la moins fiable.

  - Les systèmes de gestion de version centralisés

Les systèmes de gestion de version centralisés (CVCS en anglais pour Centralized Version Control Systems) tels que *CVS*, *Subversion (SVN)*, et *Perforce*, mettent en place un serveur central qui contient tous les fichiers sous gestion de version, et des clients qui peuvent extraire les fichiers de ce dépôt central. Pendant de nombreuses années, cela a été le standard pour la gestion de version

  - Les systèmes de gestion de version distribués (décentralisés)

Les systèmes de gestion de version distribués entrent en jeu (DVCS en anglais pour Distributed Version Control Systems) tel que *Git*, *Mercurial*, *Bazaar* ou *Darcs*, les clients n'extraient plus seulement la dernière version d'un fichier, mais ils dupliquent complètement le dépôt. Ainsi, si le serveur disparaît et si les systèmes collaboraient via ce serveur, n'importe quel dépôt d'un des clients peut être copié sur le serveur pour le restaurer. Chaque extraction devient une sauvegarde complète de toutes les données

## Lexique

  - Commit : un commit est un ensemble de modifications apportées et validées accompagné d'un commentaire.

  - Historique : Permet de retrouver toutes les modifications apportées au projet. Il est construit à partir de la liste des commits.

  - Repository : C'est le lieu contenant les fichiers du projet, avec tout son historique.
  	- Repository local : Dépot le PC du développeur.
  	- Repository remote : Repository distant, par opposition à son Repository local

  - Rollback : revenir à une version précédente d'un fichier ou d'un projet

  - Branche : Une branche permet d'apporter des évolutions en parallèle. Jo travaille sur la branche A, Jack travaille sur la branche B. Jack ne voit pas le travail de Jo, et vice-versa.

  - Switch : Expression qui indique un changement de branch

  - Merger : Mélanger deux évolutions faites en parrallèle. Jo a travaillé, Jack a travaillé. Jack récupère le travail de Jo pour le merger dans son travail. Si ils ont travaillé sur les mêmes fichiers, il y a alors un risque de conflit.

  - Push : (pousser) Envoyer ses commits vers un Repository Remote

  - Pull : (tirer) Récupérer les commits des autres membres de l'équipe depuis le Repository

## Commande

git init : initialise le projet (création du dossier .git)

git remote add origin <url> : Met en place la liaison entre le repository remote et le repository local

git pull origin master : récupération des modification du master sur le origin

## Fichier git

.gitkeep : Ce sont des fichiers à crée dans les dossiers vide afin qu'il soit récupérer sur le répository remote

.gitignore : Ce sont de fichiers listant les fichiers ou dossier à ignorer lors d'un commit

# Ungit

Logiciel de représentation des éléments sous git

http://www.youtube.com/watch?v=hkBVAi3oKvo

# git-book

http://git-scm.com/book/fr

