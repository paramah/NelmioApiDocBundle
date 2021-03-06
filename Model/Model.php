<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Model;

use Symfony\Component\PropertyInfo\Type;

final class Model
{
    private $type;

    private $groups;

    private $name;
    /**
     * @param string[]|null $groups
     */
    public function __construct(Type $type, array $groups = null, string $name = null)
    {
        $this->type = $type;
        $this->groups = $groups;
        $this->name = $name;
    }

    /**
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->groups;
    }

    public function getHash(): string
    {
        return md5(serialize([$this->type, $this->groups, $this->name]));
    }

    public function getName()
    {
        return $this->name;
    }

}
