<?php

namespace Nece\Brawl\Pns\Axb;

use Nece\Brawl\ParameterAbstract;

class BindParameter extends ParameterAbstract
{
    public function toArray()
    {
        return $this->params;
    }

    /**
     * 获取主叫号码
     * 
     * @return string
     */
    public function getPhoneA()
    {
        return $this->getParamValue('phone_a', '');
    }

    /**
     * 设置主叫号码
     * 
     * @param string $value
     *
     * @return void
     */
    public function setPhoneA($value)
    {
        $this->params['phone_a'] = $value;
    }

    /**
     * 获取被叫号码
     * 
     * @return string
     */
    public function getPhoneB()
    {
        return $this->getParamValue('phone_b', '');
    }

    /**
     * 设置被叫号码
     * 
     * @param string $value
     *
     * @return void
     */
    public function setPhoneB($value)
    {
        $this->params['phone_b'] = $value;
    }

    /**
     * 获取用户自定义数据
     * 
     * @return string 原始数据
     */
    public function getCustomerData()
    {
        return $this->getParamValue('customer_data', '');
    }

    /**
     * 获取用户自定义数据
     * 
     * @return string base64编码后的数据
     */
    public function getCustomerDataBase64()
    {
        $data = $this->getParamValue('customer_data', '');
        if ($data) {
            return base64_encode($data);
        }

        return $data;
    }

    /**
     * 设置用户自定义数据
     * 
     * @param string $value
     *
     * @return void
     */
    public function setCustomerData(string $value)
    {
        $this->params['customer_data'] = $value;
    }
}
