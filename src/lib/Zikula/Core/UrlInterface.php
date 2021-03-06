<?php
/**
 * Copyright 2014 Zikula Foundation
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\Core;

/**
 * UrlInterface class.
 */
interface UrlInterface
{
    public function getLanguage();

    public function getFragment();

    public function getUrl();

    public function getArgs();

    public function serialize();

    public function toArray();
}
