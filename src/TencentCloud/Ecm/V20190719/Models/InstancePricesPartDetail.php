<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance price information
 *
 * @method PriceDetail getCpuPrice() Obtain CPU price information
 * @method void setCpuPrice(PriceDetail $CpuPrice) Set CPU price information
 * @method PriceDetail getMemPrice() Obtain Memory price information
 * @method void setMemPrice(PriceDetail $MemPrice) Set Memory price information
 * @method PriceDetail getDisksPrice() Obtain Disk price information
 * @method void setDisksPrice(PriceDetail $DisksPrice) Set Disk price information
 */
class InstancePricesPartDetail extends AbstractModel
{
    /**
     * @var PriceDetail CPU price information
     */
    public $CpuPrice;

    /**
     * @var PriceDetail Memory price information
     */
    public $MemPrice;

    /**
     * @var PriceDetail Disk price information
     */
    public $DisksPrice;

    /**
     * @param PriceDetail $CpuPrice CPU price information
     * @param PriceDetail $MemPrice Memory price information
     * @param PriceDetail $DisksPrice Disk price information
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CpuPrice",$param) and $param["CpuPrice"] !== null) {
            $this->CpuPrice = new PriceDetail();
            $this->CpuPrice->deserialize($param["CpuPrice"]);
        }

        if (array_key_exists("MemPrice",$param) and $param["MemPrice"] !== null) {
            $this->MemPrice = new PriceDetail();
            $this->MemPrice->deserialize($param["MemPrice"]);
        }

        if (array_key_exists("DisksPrice",$param) and $param["DisksPrice"] !== null) {
            $this->DisksPrice = new PriceDetail();
            $this->DisksPrice->deserialize($param["DisksPrice"]);
        }
    }
}
