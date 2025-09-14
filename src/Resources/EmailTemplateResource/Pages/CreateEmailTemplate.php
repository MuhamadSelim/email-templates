<?php

namespace Visualbuilder\EmailTemplates\Resources\EmailTemplateResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Visualbuilder\EmailTemplates\Resources\EmailTemplateResource;

class CreateEmailTemplate extends CreateRecord
{
    protected static string $resource = EmailTemplateResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $emailTemplateResource = new EmailTemplateResource;
        $sortedData = $emailTemplateResource->handleLogo($data);

        return static::getModel()::create($sortedData);
    }
}
