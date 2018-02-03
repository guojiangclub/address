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

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * @package iBrand\Component\Address
 */
class Address extends Model
{
    /**
     * @var string
     */
    protected $table = 'el_addresses';

    /**
     * @var array
     */
    protected $guarded = ['id'];
}
