<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DownloadableForm extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'information_page_id',
        'name',
        'file_path',
        'version',
        'is_current',
    ];

    protected function casts(): array
    {
        return [
            'is_current' => 'boolean',
        ];
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(InformationPage::class, 'information_page_id');
    }
}
