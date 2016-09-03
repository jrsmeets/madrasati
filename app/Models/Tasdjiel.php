<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasdjiel extends Model
{
    protected $table = 'tasdjielaat';

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
    public function getSanaId()
    {
        return $this->sana_id;
    }

    public function sana()
    {
        return $this->belongsTo(Sana::class);
    }

    /**
     * @return integer
     */
    public function getTilmiedhId()
    {
        return $this->tilmiedh_id;
    }

    public function tilmiedh()
    {
        return $this->belongsTo(Shakhs::class);
    }

    /**
     * @return integer
     */
    public function isMusaddjal()
    {
        return $this->musaddjal;
    }
}
