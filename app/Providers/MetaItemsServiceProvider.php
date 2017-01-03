<?php

namespace App\Providers;

use Blade;
use Parsedown;
use Indal\Markdown\Parser;
use Illuminate\Support\ServiceProvider;

class MetaItemsServiceProvider extends ServiceProvider
{
	public function boot()
	{
        $this->publishes([
            __DIR__.'/../config/markdown.php' => config_path('markdown.php'),
        ]);

        Blade::directive('markdown', function($markdown) {
            if ($markdown) {
                return "<?php echo app('Indal\Markdown\Parser')->parse($markdown); ?>";
            }

            return "<?php app('Indal\Markdown\Parser')->begin() ?>";
        });

        Blade::directive('endmarkdown', function () {
            return "<?php echo app('Indal\Markdown\Parser')->end() ?>";
        });
	}
	
    public function register()
    {
        $this->app->singleton(Parser::class, function ($app) {
            $parsedown = new \App\Library\CustomParsedown;
			
            $parsedown->setUrlsLinked(config('markdown.urls'));
            $parsedown->setMarkupEscaped(config('markdown.escape_markup'));
            $parsedown->setBreaksEnabled(config('markdown.breaks'));

            return new Parser($parsedown);
        });

        $this->app->bind('markdown', Parser::class);
    }
	
}