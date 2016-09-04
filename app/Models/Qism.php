<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qism extends Model
{
    protected $table = 'aqsaam';

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getSanaId()
    {
        return $this->sana_id;
    }

    public function sana()
    {
        return $this->belongsTo(Sana::class);
    }

    /**
     * @return string
     */
    public function getIsm()
    {
        return $this->ism;
    }

    /**
     * @return integer
     */
    public function getRaqam()
    {
        return $this->raqam;
    }
}
