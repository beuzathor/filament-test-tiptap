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
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Builder::make('blocks')
                    ->label('Bloques')
                    ->blockPreviews(areInteractive: true)
                    ->blocks([
                        Block::make('blockName')
                            ->schema([
                                TiptapEditor::make('text')
                                ->output(TiptapOutput::Json) 
                            
                            ])
                            ->preview('blocks.example')
                    ])
                    ->columnSpan('full')
                    ->cloneable()
                    ->collapsible(),
            ])
            ->statePath('data');
    }
    
}
