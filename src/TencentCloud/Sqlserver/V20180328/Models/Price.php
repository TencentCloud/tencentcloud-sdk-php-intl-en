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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reference price. This price covers CPU and memory specifications, excluding disk usage. The actual price is subject to the quotation API.
 *
 * @method integer getPrepaidPrice() Obtain Reference price for yearly/monthly subscription, unit-cent
 * @method void setPrepaidPrice(integer $PrepaidPrice) Set Reference price for yearly/monthly subscription, unit-cent
 * @method string getPrepaidPriceUnit() Obtain Price unit for yearly/monthly subscription, M-month
 * @method void setPrepaidPriceUnit(string $PrepaidPriceUnit) Set Price unit for yearly/monthly subscription, M-month
 * @method integer getPostpaidPrice() Obtain Pay-as-you-go price, unit-cent
 * @method void setPostpaidPrice(integer $PostpaidPrice) Set Pay-as-you-go price, unit-cent
 * @method string getPostpaidPriceUnit() Obtain Pay-as-you-go price unit, H-hour
 * @method void setPostpaidPriceUnit(string $PostpaidPriceUnit) Set Pay-as-you-go price unit, H-hour
 */
class Price extends AbstractModel
{
    /**
     * @var integer Reference price for yearly/monthly subscription, unit-cent
     */
    public $PrepaidPrice;

    /**
     * @var string Price unit for yearly/monthly subscription, M-month
     */
    public $PrepaidPriceUnit;

    /**
     * @var integer Pay-as-you-go price, unit-cent
     */
    public $PostpaidPrice;

    /**
     * @var string Pay-as-you-go price unit, H-hour
     */
    public $PostpaidPriceUnit;

    /**
     * @param integer $PrepaidPrice Reference price for yearly/monthly subscription, unit-cent
     * @param string $PrepaidPriceUnit Price unit for yearly/monthly subscription, M-month
     * @param integer $PostpaidPrice Pay-as-you-go price, unit-cent
     * @param string $PostpaidPriceUnit Pay-as-you-go price unit, H-hour
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
        if (array_key_exists("PrepaidPrice",$param) and $param["PrepaidPrice"] !== null) {
            $this->PrepaidPrice = $param["PrepaidPrice"];
        }

        if (array_key_exists("PrepaidPriceUnit",$param) and $param["PrepaidPriceUnit"] !== null) {
            $this->PrepaidPriceUnit = $param["PrepaidPriceUnit"];
        }

        if (array_key_exists("PostpaidPrice",$param) and $param["PostpaidPrice"] !== null) {
            $this->PostpaidPrice = $param["PostpaidPrice"];
        }

        if (array_key_exists("PostpaidPriceUnit",$param) and $param["PostpaidPriceUnit"] !== null) {
            $this->PostpaidPriceUnit = $param["PostpaidPriceUnit"];
        }
    }
}
