<?php

namespace Nece\Brawl\Pns\Axb;

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
     * @DateTime 2023-06-25
     *
     * @param BindParameter $bindParameter
     *
     * @return BindResult
     */
    public function bind(BindParameter $bindParameter): BindResult;

    /**
     * 解绑
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-25
     *
     * @param string $bind_id
     *
     * @return void
     */
    public function unbind(string $bind_id);
}
