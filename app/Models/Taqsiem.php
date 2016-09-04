<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taqsiem extends Model
{
    protected $table = 'taqsiem';

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
     * @return \DateTime|null
     */
    public function getBidaya()
    {
        return $this->bidaya;
    }

    /**
     * @return \DateTime|null
     */
    public function getNihaya()
    {
        return $this->nihaya;
    }
}
