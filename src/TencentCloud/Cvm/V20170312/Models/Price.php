<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method ItemPrice getInstancePrice() 获取Instance price.
 * @method void setInstancePrice(ItemPrice $InstancePrice) 设置Instance price.
 * @method ItemPrice getBandwidthPrice() 获取Network price.
 * @method void setBandwidthPrice(ItemPrice $BandwidthPrice) 设置Network price.
 */

/**
 *Price.
 */
class Price extends AbstractModel
{
    /**
     * @var ItemPrice Instance price.
     */
    public $InstancePrice;

    /**
     * @var ItemPrice Network price.
     */
    public $BandwidthPrice;
    /**
     * @param ItemPrice $InstancePrice Instance price.
     * @param ItemPrice $BandwidthPrice Network price.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new ItemPrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("BandwidthPrice",$param) and $param["BandwidthPrice"] !== null) {
            $this->BandwidthPrice = new ItemPrice();
            $this->BandwidthPrice->deserialize($param["BandwidthPrice"]);
        }
    }
}
