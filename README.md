### Install with Docker

Update your vendor packages

    docker-compose run --rm php composer update --prefer-dist

Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install

Start the container

    ./start

You can then access the application through the following URL:

    http://127.0.0.1:8000

**NOTES:**

- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches

## what I added:

- A webpack folder was added with my views and apline js code for reactive a frontend. Hot relead is supported (see webpack.config.js).
- Added alias for the webpack src folder. In your controller behaviours add:

  - ```
    $this->layout = '@src/views/layouts/main.twig';
    $this->setViewPath('@src/views/site');
    ```

    - The layout will be used as the base of our twig templates. If you omit the .twig extension a .php extension will be assumed and you can do php stuff.
    - The view path is set so when we do `return $this->render('test.twig');` we can omit the full path and just give the file name. Php files are similarly supported here. You could also omit the extension and add php render option in web.php to by default render twig.

- to add htmx insert the following into the <head> of your templates
  - ```
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/hyperscript.org@0.9.12"></script>
    ```
- To inject css and js I added to my template the following
  - ```
    {{ use('app/assets/AppAsset') }}
    {{ register_app_asset() }}
    {{ use('app/assets/AlpineAsset') }}
    {{ register_alpine_asset() }}
    ```
  - Where AppAsset is default and AlpineAsset points to my bundle.js from my webpack
