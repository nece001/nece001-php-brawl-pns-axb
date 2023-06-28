<?php

namespace Nece\Brawl\Pns\Axb;

use Nece\Brawl\Pns\PhoneNumber;

/**
 * AXB模式接口
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-25
 */
interface AxbInterface
{
    /**
     * 绑定
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-28
     *
     * @param PhoneNumber $a 号码A
     * @param PhoneNumber $b 号码B
     * @param array $custom_data 自定义数据
     *
     * @return BindResult
     */
    public function bind(PhoneNumber $a, PhoneNumber $b, array $custom_data = array()): BindResult;

    /**
     * 解绑
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-25
     *
     * @param string $bind_id
     *
     * @return bool
     */
    public function unbind(string $bind_id): bool;
}
