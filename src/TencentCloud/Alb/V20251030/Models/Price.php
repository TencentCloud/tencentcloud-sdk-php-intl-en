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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Indicates the price of CLB
 *
 * @method PostPayPriceInfo getInstancePrice() Obtain Describes instance pricing. Unit: CNY/hour.
 * @method void setInstancePrice(PostPayPriceInfo $InstancePrice) Set Describes instance pricing. Unit: CNY/hour.
 * @method PostPayPriceInfo getLcuPrice() Obtain Describes the lcu price. Unit: CNY/lcu.
 * @method void setLcuPrice(PostPayPriceInfo $LcuPrice) Set Describes the lcu price. Unit: CNY/lcu.
 */
class Price extends AbstractModel
{
    /**
     * @var PostPayPriceInfo Describes instance pricing. Unit: CNY/hour.
     */
    public $InstancePrice;

    /**
     * @var PostPayPriceInfo Describes the lcu price. Unit: CNY/lcu.
     */
    public $LcuPrice;

    /**
     * @param PostPayPriceInfo $InstancePrice Describes instance pricing. Unit: CNY/hour.
     * @param PostPayPriceInfo $LcuPrice Describes the lcu price. Unit: CNY/lcu.
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
            $this->InstancePrice = new PostPayPriceInfo();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("LcuPrice",$param) and $param["LcuPrice"] !== null) {
            $this->LcuPrice = new PostPayPriceInfo();
            $this->LcuPrice->deserialize($param["LcuPrice"]);
        }
    }
}
