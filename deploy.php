<?php
namespace Deployer;

require 'recipe/laravel.php';

set('repository', 'git@gh-{{key}}:azzarip/{{key}}.git');
set('keep_releases', 3);


// Hosts
host('pizza-azzari-deployer')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/{{key}}')
    ->set('ssh_multiplexing', false);


desc('It generates the sitemaps');
task('artisan:sitemap:generate', artisan('sitemap:generate'));

desc('It generates the sitemaps');
task('deploy:build', function () {
    run('cd {{release_path}} && npm link vite');
    run('cd {{release_path}} && npm link laravel-vite-plugin');
    run('cd {{release_path}} && npm run build');
});

desc('Restart queue worker');
task('artisan:queue:restart', function () {
    artisan( 'queue:restart');
});



desc('Optimizes and caches all views, routes, config');
task('artisan:optimize', function() {
    artisan('optimize');
    artisan('filament:optimize');
});

after('deploy:symlink', 'artisan:queue:restart');

after('deploy:failed', 'deploy:unlock');

task('test:namespace', function () {
    writeln('It is pulling the tasks from Utilities');
});

desc('Deploys your project');
task('deploy', [
        'deploy:prepare',
        'deploy:vendors',
        'artisan:migrate',
        'artisan:storage:link',
        'artisan:optimize',
        'deploy:build',
        'deploy:publish',
]);
