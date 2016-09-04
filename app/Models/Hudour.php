<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hudour extends Model
{
    protected $table = 'hudour';

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getTaariekh()
    {
        return $this->taariekh;
    }

    /**
     * @return integer
     */
    public function getQismId()
    {
        return $this->qism_id;
    }

    public function qism()
    {
        return $this->belongsTo(Qism::class);
    }

    /**
     * @return integer
     */
    public function getTasdjielId()
    {
        return $this->tasdjiel_id;
    }

    public function tasdjiel()
    {
        return $this->belongsTo(Tasdjiel::class);
    }

    /**
     * @return boolean|null
     */
    public function isHaadir()
    {
        return $this->haadir;
    }

    /**
     * @return boolean
     */
    public function isMuta_akkhar()
    {
        return $this->muta_akkhar;
    }

    /**
     * @return string|null
     */
    public function getUdhr()
    {
        return $this->udhr;
    }
}
