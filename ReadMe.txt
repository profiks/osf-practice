1. Create a logically named folder (e.g. projectname) on your local drive.
2. Unzip content of the app folder into the folder you created.
3. Open application/bootstrap.php and set the base_url in the Kohana::init call to reflect the location of the kohana folder on your server relative to the document root.
4. Choose the file dump.sql  with schema and data for app, and import it in your postgresql database.
5. Open application/config/database.php and fill in the PostgreSQL information for your host server.
6. Test your installation by opening the URL you set as the base_url(e.g. htt://projectname/) in your favorite browser.





