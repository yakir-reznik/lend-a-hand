This project is the backend & frontend apps deployed to https://notnim-yad.net/

# How to work on this project

#### Requirements:

1. NodeJS
2. PHP server (apache / nginx)
3. mysql database

#### Install dev enviroment

1. Clone the repo
2. Install dependencies `npm install`
3. Create a mysql database and import data structure and dummy data from `dummy-data.sql`
4. Create "enviroment_variables.php" file in project root (See more info below)
5. Run dev server `npm run dev`

## Tech stack:

The project is hosted on SiteGround shared hosting.

The backend is written in PHP and uses a mysql database.

The frontend app is built with Nuxt (vue). Renders to static html and deployed to Siteground shared hosting.

## Enviroment Variables

Below there is a detailed list of the variables you need to define in `enviroment_variables.php` in the project root folder.

to define a variable use this syntax:

```php
define("VARIABLE_NAME", "VALUE");
```

| Variable Name | Description                                     | Example Value                           |
| ------------- | ----------------------------------------------- | --------------------------------------- |
| DB_NAME       | mysql database name                             |                                         |
| DB_USER       | mysql database Username                         |                                         |
| DB_PASS       | mysql database password                         |                                         |
| PATH_VARS     | path variables need to run NodeJS (optional)    | export PATH=/Users/yr/.nvm/versions/... |
| SRC_DIR       | absolute path to project root                   |                                         |
| BUILD_DIR     | absolute path to Nuxt build output "public" dir |                                         |
| FTP_HOST      | SiteGround ftp server hostname                  |                                         |
| FTP_PORT      | SiteGround ftp server port                      |                                         |
| FTP_USERNAME  | SiteGround ftp server username                  |                                         |
| FTP_PASSWORD  | SiteGround ftp server password                  |                                         |
| FTP_FOLDER    | SiteGround ftp folder to deploy to              |                                         |
| SSH_FOLDER    | absolute path to deploy folder on the server    |                                         |

## How to deploy?

```bash
php deploy.php
```

After running the deploy script please remember to clear the cache on SiteGround admin UI: Speed -> Caching -> Dynamic Cache (tab) -> Click the brush icon
