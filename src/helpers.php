<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

use Larva\Flash\FlashNotify;

/**
 * @param string|null $message
 * @param string $type
 * @return FlashNotify
 */
function flash(string $message = null, $type = 'info'): FlashNotify
{
    /** @var FlashNotify $flashNotify */
    $flashNotify = app(FlashNotify::class);

    if (is_null($message)) {
        return $flashNotify;
    }
    return $flashNotify->message($message, $type);
}