<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalesAccountResource\Pages;
use App\Filament\Resources\SalesAccountResource\RelationManagers;
use App\Models\SalesAccount;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SalesAccountResource extends Resource
{
  protected static ?string $model = SalesAccount::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        TextInput::make("name")
          ->required()
          ->maxLength(255),

        FileUpload::make("thumbnail")
          ->image()
          ->required(),

        TextInput::make("email")
          ->email()
          ->required(),

        TextInput::make("job_title")
          ->helperText("Job In Company")
          ->required()
          ->maxLength(255),

        TextInput::make("phone_number")
          ->required()
          ->numeric()

      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        //
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
      ])
      ->bulkActions([
        Tables\Actions\BulkActionGroup::make([
          Tables\Actions\DeleteBulkAction::make(),
        ]),
      ]);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListSalesAccounts::route('/'),
      'create' => Pages\CreateSalesAccount::route('/create'),
      'edit' => Pages\EditSalesAccount::route('/{record}/edit'),
    ];
  }
}
