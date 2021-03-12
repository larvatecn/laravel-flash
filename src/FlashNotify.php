<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Flash;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Traits\Macroable;

/**
 * 闪存通知
 * @author Tongle Xu <xutongle@gmail.com>
 */
class FlashNotify
{
    use Macroable;

    /**
     * @var Session
     */
    protected Session $session;

    /**
     * Constructor.
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * 成功消息
     * @param string $message
     * @return $this
     */
    public function success(string $message)
    {
        return $this->message($message, 'success');
    }

    /**
     * @param string $message
     * @return $this
     */
    public function error(string $message)
    {
        return $this->message($message, 'error');
    }

    /**
     * 警告消息
     * @param string $message
     * @return $this
     */
    public function warning(string $message)
    {
        return $this->message($message, 'warning');
    }

    /**
     * 提醒消息
     * @param string $message
     * @return $this
     */
    public function info(string $message)
    {
        return $this->message($message, 'info');
    }

    /**
     * 添加一个消息
     * @param string $message
     * @param string $type
     * @return $this
     */
    public function message(string $message, string $type)
    {
        $this->session->flash('flash.message', $message);
        $this->session->flash('flash.type', $type);
        return $this;
    }
}