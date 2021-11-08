<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormContent extends Model
{
    use HasFactory;

    /**
     * Table name
     * @var string
     */
    protected $table = 'form_content';

    /**
     * Primary key for table.
     * @var string
     */
    protected $primaryKey = 'email';

    /** Key is not auto incrementing */
    public $incrementing = false;

    protected $keyType = 'string';


    /**
     * Mass assingable attributes
     * 
     * @var string[]
     */
    protected $fillable = [
      'email',
      'first_name',
      'last_name',
      'message',
    ]; 
}
