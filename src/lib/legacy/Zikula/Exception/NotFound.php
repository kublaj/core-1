<?php
/**
 * Copyright 2010 Zikula Foundation.
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 * @subpackage Zikula_Exception
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Zikula_Exception_NotFound class.
 *
 * @deprecated since 1.4.0
 * @see NotFoundHttpException
 */
class Zikula_Exception_NotFound extends NotFoundHttpException
{
}
