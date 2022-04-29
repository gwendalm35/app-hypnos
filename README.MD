## Procédure de mise en place
`git clone https://github.com/gwendalm35/app-hypnos.git`
___
`composer install`
___
`yarn install` ou `npm install`
___
- Modifer votre BDD dans le fichier .env et ensuite :
  `php bin/console doctrine:database:create`
___
`php bin/console doctrine:schema:update --force`
___
`yarn dev` ou `npm run dev`
___
`symfony server:start`
___
- Créer un compte sur la page réservation et modifier le role dans la BDD ou importer le test.sql et connecter vous avec l'adresse mail : admin@hypnos.com et le mot de passe : Azerty10.
  Vous pouvez maintenant accéder au Dashboard d'admin et créer vos données
- Vous savez désormais naviguer sur le site en local ou le déployer en ligne.
___
- Pour un déploiement heroku
- vérifié que vous avez bien téléchargé heroku client
- Se connecté sur le site heroku
- Télécharger une addon de DB comme ClearDB et transférer vos données sql dessus
- `heroku login`
- `heroku git:remote -a <nom du projet>`
- `git add .`
- `git commit -am "make it better"`
- `git push heroku master` ou `git push heroku main`
