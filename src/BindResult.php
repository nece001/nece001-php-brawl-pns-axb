<?php

namespace Nece\Brawl\Pns\Axb;

use Nece\Brawl\ResultAbstract;

/**
 * 绑定结果
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-25
 */
class BindResult extends ResultAbstract
{
    public function toArray()
    {
        return $this->params;
    }

    /**
     * 设置绑定ID
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-25
     *
     * @param string $value
     *
     * @return void
     */
    public function setBindId(string $value)
    {
        $this->params['bind_id'] = $value;
    }

    /**
     * 获取绑定ID
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-25
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->params['bind_id'];
    }

    /**
     * 设置绑定的中间号码
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-25
     *
     * @param string $value
     *
     * @return void
     */
    public function setPhoneX($value)
    {
        $this->params['phone_x'] = $value;
    }

    /**
     * 获取绑定的中间号码
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-25
     *
     * @return string
     */
    public function getPhoneX()
    {
        return $this->params['phone_x'];
    }
}
