<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Empresa extends Model
{
    use HasSlug;

    protected $fillable = [
        'cnpj', 'razao', 'fantasia'
    ];
    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('fantasia')
            ->saveSlugsTo('slug');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_empresas');
    }

    public function movimentos()
    {
        return $this->hasMany(Movimento::class);
    }

}
