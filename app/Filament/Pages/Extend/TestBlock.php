<?php

namespace App\Filament\Extend;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapBlock;
use FilamentTiptapEditor\TiptapEditor;
use RalphJSmit\Filament\MediaLibrary\Forms\Components\MediaPicker;

class TestBlock extends TiptapBlock
{
    public string $preview = 'blocks.previews.test';

  public string $rendered = 'blocks.rendered.test';
    public string $width = 'full';



    public ?string $icon = 'heroicon-o-film';


    public function getFormSchema(): array
    {
        return [

            TipTapEditor::make('h2_quefaitonrrr')
                ->default('<p>Contenu initial</p>')
                ->label('que fait on')
                ->profile('simple'),

            TipTapEditor::make('h2_2')
                ->default('<p>Contenu initial</p>')
                ->label('que fait on')
                ->profile('simple'),

            TipTapEditor::make('h2_3')
                ->default('<p>Contenu initial</p>')
                ->label('que fait on')
                ->profile('simple'),


        ];
    }
}

