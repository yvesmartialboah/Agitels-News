## Comment Déployer cette application en locale

Il faut exécuter les commandes de migrations et les seeds préalablement enregistrés après avoir créer une base de données.

- php artisan migrate
- php artisan db:seed
- php artisan serve

## Comment publier des images et des vidéos sur la plateforme

### Cas des Vidéos

- Créer une chaine youtube sur *https://www.youtube.com/*
- uploader vos vidéos sur la chaine youtube
- choisir l'option *partager* puis *intégrer* afin de pouvoir récupérer le lien *Url* contenu dans l'*Iframe*

### Cas des Audio

- Créer un compte sur *https://soundcloud.com/*
- uploader vos interviews audio sur cette plateforme.
- choisissez l'option *partager* puis *intégrer* afin de pouvoir récupérer le lien *Url* contenu dans l'*Iframe*

### Exemple d'*Iframe*

- *youtube* :  <iframe width="560" height="315" src="https://www.youtube.com/embed/JyJuLSzt9wg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

- *soundcloud* :  <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/127755258&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

## Vulnérabilités en matière de sécurité

Si vous découvrez une faille de sécurité au sein de Laravel, veuillez envoyer un e-mail à Taylor Otwell via taylor@laravel.com. Toutes les vulnérabilités de sécurité seront traitées rapidement.

## License

Le Framework Laravel est un logiciel libre sous licence du [MIT license] (https://opensource.org/licenses/MIT).
