<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sana extends Model
{
    protected $table = 'sanawaat';

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getSana()
    {
        return $this->sana;
    }
}
