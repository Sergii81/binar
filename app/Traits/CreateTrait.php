<?php


namespace App\Traits;

use App\Binar;


trait CreateTrait
{

    public function create($end_leaf)
    {
        for ($i=2; $i <= $end_leaf; $i++) {
            $binar = new Binar;
            $binar->id = $i;
            if($this->findPosition($i)) {
                $binar->position = 1;
            } else {
                $binar->position = 2;
            }
            $binar->parent_id = $this->findParentId($i);
            $binar->level = $this->findLevel($i);
            $binar->path = $this->findPath($i);
            $binar->save();
        }
    }
    /**
     * @param $i
     * @return bool
     */
    public function findPosition($i)
    {
        if($i%2 == 0) {
            return true;
        }
        return false;
    }

    /**
     * @param $i
     * @return float|int
     */
    public function findParentId($i)
    {
        if($i%2 == 0) {
            $parent_id = $i/2;
        } else {
            $parent_id = ($i-1)/2;
        }
        return $parent_id;
    }

    /**
     * @param $i
     * @return int
     */
    public function findLevel($i)
    {
        $level = 1;
        while($i >= 2) {
            $level = $level + 1;
            $i = $i/2;
        }
        return $level;
    }

    /**
     * @param $i
     * @return string
     */
    public function findPath($i)
    {
        $path = $i;
        while ($i >=2) {
            $path = intdiv($i, 2).'.'.$path;
            $i = $i/2;
        }
        return $path;
    }
}
