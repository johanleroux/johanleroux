<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Boolean;
use Spatie\TagsField\Tags;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Post';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Title')
                ->sortable()
                ->rules('required')
                ->displayUsing(function (string $title) {
                    return str_limit($title, 50);
                }),
            
            Tags::make('Tags'),
        
            DateTime::make('Published At')
                ->sortable(),
            
            Markdown::make('Text')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('', function () {
                if (! $this->exists) {
                    return '';
                }
                return '<a target="murze_preview" href="' . url($this->url) . '">Show</a>';
            })->asHtml(),
        ];
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->orderByDesc('published_at');
    }
}
