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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method float getProxyDailyPrice() 获取Basic cost of connection (unit: CNY/day).
 * @method void setProxyDailyPrice(float $ProxyDailyPrice) 设置Basic cost of connection (unit: CNY/day).
 * @method array getBandwidthUnitPrice() 获取Connection bandwidth price gradient.
 * @method void setBandwidthUnitPrice(array $BandwidthUnitPrice) 设置Connection bandwidth price gradient.
 * @method float getDiscountProxyDailyPrice() 获取Discounted basic cost of connection (unit: CNY/day).
 * @method void setDiscountProxyDailyPrice(float $DiscountProxyDailyPrice) 设置Discounted basic cost of connection (unit: CNY/day).
 * @method string getCurrency() 获取Currency, which supports CNY, USD, etc.
 * @method void setCurrency(string $Currency) 设置Currency, which supports CNY, USD, etc.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *InquiryPriceCreateProxy response structure.
 */
class InquiryPriceCreateProxyResponse extends AbstractModel
{
    /**
     * @var float Basic cost of connection (unit: CNY/day).
     */
    public $ProxyDailyPrice;

    /**
     * @var array Connection bandwidth price gradient.
     */
    public $BandwidthUnitPrice;

    /**
     * @var float Discounted basic cost of connection (unit: CNY/day).
     */
    public $DiscountProxyDailyPrice;

    /**
     * @var string Currency, which supports CNY, USD, etc.
     */
    public $Currency;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param float $ProxyDailyPrice Basic cost of connection (unit: CNY/day).
     * @param array $BandwidthUnitPrice Connection bandwidth price gradient.
     * @param float $DiscountProxyDailyPrice Discounted basic cost of connection (unit: CNY/day).
     * @param string $Currency Currency, which supports CNY, USD, etc.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ProxyDailyPrice",$param) and $param["ProxyDailyPrice"] !== null) {
            $this->ProxyDailyPrice = $param["ProxyDailyPrice"];
        }

        if (array_key_exists("BandwidthUnitPrice",$param) and $param["BandwidthUnitPrice"] !== null) {
            $this->BandwidthUnitPrice = [];
            foreach ($param["BandwidthUnitPrice"] as $key => $value){
                $obj = new BandwidthPriceGradient();
                $obj->deserialize($value);
                array_push($this->BandwidthUnitPrice, $obj);
            }
        }

        if (array_key_exists("DiscountProxyDailyPrice",$param) and $param["DiscountProxyDailyPrice"] !== null) {
            $this->DiscountProxyDailyPrice = $param["DiscountProxyDailyPrice"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
