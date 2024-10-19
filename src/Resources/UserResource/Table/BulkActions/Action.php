<?php

namespace TomatoPHP\FilamentUsers\Resources\UserResource\Table\BulkActions;

use Filament\Tables\Actions\BulkAction;

abstract class Action
{
    /**
     * @return BulkAction
     */
    public abstract static function make(): BulkAction;
}
