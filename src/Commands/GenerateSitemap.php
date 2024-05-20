<?php

namespace Azzarip\Utilities\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the XML Sitemap for each domain';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (config('domains') as $key => $domain) {
            dd(config('domains'));
            $file = base_path('content/sitemaps/'.$key.'.php');
            if (! file_exists($file)) {
                continue;
            }

            $this->info('Sitemap for: '.$domain);

            $sitemap = Sitemap::create();
            $entries = include $file;
            foreach ($entries as $entry) {
                $entry->setUrl(durl($entry->url, $key));
                $sitemap->add($entry);
            }
            $sitemap->writeToFile(public_path("/sitemaps/$key.xml"));
        }

        return self::SUCCESS;
    }
}
