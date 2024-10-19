<?php

namespace TomatoPHP\FilamentUsers\Resources\UserResource\Table;

use Filament\Tables\Columns\Column;
use Filament\Tables\Table;

class UserTable
{
    protected static array $columns = [];

    public static function make(Table $table): Table
    {
        return $table
            ->bulkActions(UserBulkActions::make())
            ->actions(UserActions::make())
            ->filters(UserFilters::make())
            ->columns(self::getColumns());
    }

    /**
     * @return array
     */
    public static function getDefaultColumns(): array
    {
        return [
            Columns\ID::make(),
            Columns\Name::make(),
            Columns\Email::make(),
            Columns\Verified::make(),
            Columns\CreatedAt::make(),
            Columns\UpdatedAt::make(),
        ];
    }

    /**
     * @return array
     */
    private static function getColumns(): array
    {
        return array_merge(self::getDefaultColumns(), self::$columns);
    }

    /**
     * @param Column|array $column
     * @return void
     */
    public static function register(Column|array $column): void
    {
        if(is_array($column)) {
            foreach ($column as $item){
                if($item instanceof Column) {
                    self::$columns[] = $item;
                }
            }
        } else {
            self::$columns[] = $column;
        }
    }

}
