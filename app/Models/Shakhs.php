<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shakhs extends Model
{
    protected $table = 'ashkhaas';

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getIsm()
    {
        return $this->ism;
    }

    /**
     * @return string
     */
    public function getIsmAailie()
    {
        return $this->ism_aailie;
    }

    /**
     * @return \DateTime
     */
    public function getMawlid()
    {
        return $this->mawlid;
    }

    /**
     * @return boolean
     */
    public function isUntha()
    {
        return $this->untha;
    }
}
