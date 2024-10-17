<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use FilamentTiptapEditor\TiptapEditor;


use Filament\Forms\Form;
use FilamentTiptapEditor\Enums\TiptapOutput;

class Test extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test';

    public ?array $data = [];
    public $textjson = '';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                    TiptapEditor::make('textjson')

                        ->maxContentWidth('full')
                        ->output(TiptapOutput::Json),
            ]);
    }

}
