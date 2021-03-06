<?php

/**
 * Elements.at
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) elements.at New Media Solutions GmbH (https://www.elements.at)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Elements\Bundle\ProcessManagerBundle\Model\Configuration;

use Elements\Bundle\ProcessManagerBundle\Model\Configuration;
use Pimcore\Model;

/**
 * Class Listing
 *
 * @method \Elements\Bundle\ProcessManagerBundle\Model\Configuration\Listing\Dao getDao()
 * @method Configuration[] load()
 */
class Listing extends Model\Listing\AbstractListing
{
    /**
     * @var null | \Pimcore\Model\User
     */
    protected $user;

    public function isValidOrderKey($key)
    {
        return true;
    }

    /**
     * @return null|\Pimcore\Model\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param null|\Pimcore\Model\User $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}
