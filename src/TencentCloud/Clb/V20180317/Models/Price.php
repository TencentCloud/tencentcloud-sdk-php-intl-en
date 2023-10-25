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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price of CLB instances.
 *
 * @method ItemPrice getInstancePrice() Obtain Instance price.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInstancePrice(ItemPrice $InstancePrice) Set Instance price.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method ItemPrice getBandwidthPrice() Obtain Network price.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setBandwidthPrice(ItemPrice $BandwidthPrice) Set Network price.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method ItemPrice getLcuPrice() Obtain LCU price.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLcuPrice(ItemPrice $LcuPrice) Set LCU price.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class Price extends AbstractModel
{
    /**
     * @var ItemPrice Instance price.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InstancePrice;

    /**
     * @var ItemPrice Network price.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $BandwidthPrice;

    /**
     * @var ItemPrice LCU price.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LcuPrice;

    /**
     * @param ItemPrice $InstancePrice Instance price.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param ItemPrice $BandwidthPrice Network price.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param ItemPrice $LcuPrice LCU price.
Note: This field may return·null, indicating that no valid values can be obtained.
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

        if (array_key_exists("LcuPrice",$param) and $param["LcuPrice"] !== null) {
            $this->LcuPrice = new ItemPrice();
            $this->LcuPrice->deserialize($param["LcuPrice"]);
        }
    }
}
