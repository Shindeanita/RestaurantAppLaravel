Restaurant App

<h4>Below are the topics which I have learn and implemented in this project. 
<ol>
<li>Basic CRUD operation</li>
<ul>
<li>Controller - RestoController.php
<li>View - add.blade.php, layout.blade.php, list.blade.php, update.blade.php
<li>Route - web.php
</ul>
<li>Added Bootstrap 5 into laravel project
<ul>
<li>Install Laravel UI</li>
<pre>composer install laravel/ui</pre>
<li>Install the Laravel UI Package command for creating auth scaffolding using bootstrap 5.</li>
<pre>php artisan ui bootstrap 
                or
     php artisan ui bootstrap --auth </pre>
<li>Install npm</li>
<pre>npm install </pre>
<li>Import vite.config.js Bootstrap 5 path</li>
It will generate CSS and js min files.

<pre>
    import { defineConfig } from 'vite';
    import laravel from 'laravel-vite-plugin';
    import path from 'path';

    export default defineConfig({
        plugins: [
            laravel({
                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                ],
                refresh: true,
            }),
        ],
        resolve: {
            alias:{
                '~bootstrap': path.resolve(__dirname,'node_modules/bootstrap'),
        
            }
        }
    });
</pre>
<li>Run migration command</li>
<pre>php artisan migrate</pre>
<li>Define path to app.js file</li>
root folder -> resources -> app.js
<pre>
    import './bootstrap';
    import '../sass/app.scss';

    import * as bootstrap from 'bootstrap';
</pre>
<li>Use @vite in blade.php file inside the head tag</li>
<pre> 
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</pre>
<li>Then run npm build command</li>
<pre>
    npm run build</pre>
<li>Run server</li>
<pre>
    php artisan serve</pre>

</ul>
</ol>
