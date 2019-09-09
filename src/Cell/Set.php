<?php
declare(strict_types=1);

/*
 * This file is part of the QuidPHP package.
 * Website: https://quidphp.com
 * License: https://github.com/quidphp/core/blob/master/LICENSE
 */

namespace Quid\Core\Cell;
use Quid\Core;

// set
// class to manage a cell containing many relations separated by comma (set)
class Set extends RelationAlias
{
    // config
    public static $config = [];


    // cast
    // pour cast de cellule relation retourne get plutôt que value
    public function _cast():?array
    {
        return $this->get();
    }


    // relation
    // gère le retour d'une valeur de relation pour set
    // cache est true
    public function relation(?array $option=null):?array
    {
        return $this->colRelation()->get($this,false,true,$option);
    }


    // relationFound
    // comme relation, mais la différence est que si une valeur d'un élément de relation n'existe plus il ne sera pas retourné
    // dans relation, la clé sera retourné avec une valeur null
    public function relationFound(?array $option=null):?array
    {
        return $this->colRelation()->get($this,true,true,$option);
    }


    // relationRows
    // retourne la valeur de la relation sous forme de rows
    // envoie une exception si le type de relation n'est pas table
    public function relationRows(?array $option=null):Core\Rows
    {
        return $this->colRelation()->getRow($this,$option);
    }
}

// config
Set::__config();
?>