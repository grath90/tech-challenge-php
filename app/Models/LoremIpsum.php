<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoremIpsum extends Model
{
    use HasFactory;

    /**
     * Table associated with the model
     * 
     * @var string
     */

    protected $table = 'lorem_ipsum';

    /**
     * Mass assingable attributes
     * 
     * @var string[]
     */
    protected $fillable = [
      'lorem_paragraph',
      'lorem_title',
      'image_url',
      'section_id',
    ]; 
}
