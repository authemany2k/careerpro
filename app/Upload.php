<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $bizcenter_id
 * @property string $filename
 * @property string $mime
 * @property string $original_filename
 * @property string $created_at
 * @property string $updated_at
 * @property Bizcenter $bizcenter
 */
class Upload extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_upload_id', 'filename', 'original_filename', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
