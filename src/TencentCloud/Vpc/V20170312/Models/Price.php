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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price
 *
 * @method ItemPrice getInstancePrice() Obtain Instance price.
 * @method void setInstancePrice(ItemPrice $InstancePrice) Set Instance price.
 * @method ItemPrice getBandwidthPrice() Obtain Bandwidth price
 * @method void setBandwidthPrice(ItemPrice $BandwidthPrice) Set Bandwidth price
 */
class Price extends AbstractModel
{
    /**
     * @var ItemPrice Instance price.
     */
    public $InstancePrice;

    /**
     * @var ItemPrice Bandwidth price
     */
    public $BandwidthPrice;

    /**
     * @param ItemPrice $InstancePrice Instance price.
     * @param ItemPrice $BandwidthPrice Bandwidth price
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
