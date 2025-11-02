Portfolio-MANKOU

Résumé des changements récents (Octobre - Novembre 2025)
--------------------------------------------------
Les modifications suivantes ont été ajoutées au dépôt et poussées sur `origin/main` :

- Ajout de vignettes et modales pour de nouveaux projets (images dans `images/portfolio/`)
  - commits notables : 9b98a56 (ajout images Projets/Blog et modales)
  - Plusieurs affiches et miniatures ajoutées (ex. Chronos-Services, Fête du travail, Affiche Toussaint, etc.)

- Intégration de vidéos (dossier `Vidéos/` — sous-dossiers `Figma` et `Phtoshop`)
  - Modales vidéo avec balise `<video controls>` pour lecture (modales modal-16..modal-24)

- Uniformisation des vignettes (CSS)
  - Taille et comportement des images harmonisés (object-fit: contain) pour afficher l'affiche complète sans recadrage
  - commit: 474b665 (uniformiser vignettes)

- Ajout / correction de contenu
  - Ajout du skill "Cinéma 4D" dans la section Compétences
  - Ajout et formatage des témoignages (Joyce Ngoma, Emmanuel SAGOUNAMA-MENSAH)
  - Correction de la date du billet Blog "Cérémonie de remise des certificats" -> 12 Mars 2025 (commit: 113dff4)

- Gestion d'actifs
  - Fichier image ajouté : `images/portfolio/Cérémonie de remise des certificats (01).jpg` (commit: ceadd9f)
  - Références dans `index.html` mises à jour pour pointer vers le fichier renommé (commit: 255ed0d)

Comment prévisualiser localement
-------------------------------
1) Ouvrir le dossier du projet dans PowerShell :

   cd "C:\Users\LENOVO\Downloads\Fich.Photoshop\Nouveau dossier\Portfolio-MANKOU"

2) Ouvrir la page `index.html` dans votre navigateur par défaut :

   Start-Process .\index.html

Remarques et recommandations
----------------------------
- Certains fichiers d'images utilisent des espaces, accents et caractères spéciaux. Pour réduire les risques d'incompatibilité (serveurs, URLs, scripts), il est recommandé de renommer les fichiers en kebab-case (ex. `ceremonie-remise-certificats-01.jpg`) et mettre à jour les références dans `index.html`.
- Si vous souhaitez que je renomme automatiquement tous les fichiers (et mette à jour les références), je peux le faire en créant un commit séparé.

Historique rapide (commits récents)
---------------------------------
- 255ed0d — fix(blog): update image reference to 'Cérémonie de remise des certificats (01).jpg'
- ceadd9f — assets: add Cérémonie de remise des certificats image for blog
- 113dff4 — blog: corriger date Cérémonie de remise des certificats -> 12 Mars 2025
- 9b98a56 — portfolio: ajouter nouvelles images Projets/Blog et modales (modal-29..modal-34)
- f1d5cd7 — portfolio: ajouter images récentes et modales (2Fich, Affiche Toussaint, Soirée, Sponsorisation)
- 6e476af — portfolio: ajouter 3 affiches supplémentaires (Fête du travail, Chaque matin, promo) et modales
- 474b665 — portfolio: ajouter images projets et uniformiser vignettes (CSS)

Besoin d'aide ?
--------------
Si tu veux que je :
- renomme les fichiers image pour les rendre sûrs pour le web et mette à jour `index.html`,
- restaure la copie locale d'`index.html` à la version distante, ou
- fasse une vérification visuelle complète (capture d'écran ou ouvrir la page),
dis‑le et je m'en occupe.

© Projet Portfolio-MANKOU
