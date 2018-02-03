<?php

/*
 * This file is part of ibrand/address.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Address;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface RepositoryContract.
 */
interface RepositoryContract extends RepositoryInterface
{
    /**
     * @param $userId
     *
     * @return mixed
     */
    public function getByUser($userId);

    /**
     * @param $userId
     *
     * @return mixed
     */
    public function getDefaultByUser($userId);

    /**
     * @param array $attributes
     * @param $id
     * @param $userId
     *
     * @return mixed
     */
    public function updateByUser(array $attributes, $id, $userId);
}
