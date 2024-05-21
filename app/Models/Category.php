<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function title(): Attribute
    {
        return new Attribute(
            set: fn ($value) => [
                'title' => $value,
                'slug' => Str::slug($value),
            ],
        );
    }
    
    public function imageIcon(): Attribute
    {
        return new Attribute(
            get: fn() => $this->convertImageIcon($this->id),
        );
    }
    
    private function convertImageIcon($id)
    {
        if($id == 1 or $id == 6){
            return asset('web_assets/img/icons/facebook.png');
        }elseif($id == 2){
            return asset('web_assets/img/value-icon01.png');
        }elseif($id == 3){
            return asset('web_assets/img/icons/kwai.png');
        }elseif($id == 4){
            return asset('web_assets/img/icons/tiktok.png');
        }elseif($id == 5){
            return asset('web_assets/img/icons/youtube.png');
        }

        return asset('web_assets/img/icons/padrao.png');
    }
}
