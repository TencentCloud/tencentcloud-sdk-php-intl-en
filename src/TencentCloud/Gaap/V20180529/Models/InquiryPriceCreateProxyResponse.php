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
 * InquiryPriceCreateProxy response structure.
 *
 * @method float getProxyDailyPrice() Obtain Basic price of connection in USD/day.
 * @method void setProxyDailyPrice(float $ProxyDailyPrice) Set Basic price of connection in USD/day.
 * @method array getBandwidthUnitPrice() Obtain Tiered price of connection bandwidth.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthUnitPrice(array $BandwidthUnitPrice) Set Tiered price of connection bandwidth.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getDiscountProxyDailyPrice() Obtain Discounted basic price of connection in USD/day.
 * @method void setDiscountProxyDailyPrice(float $DiscountProxyDailyPrice) Set Discounted basic price of connection in USD/day.
 * @method string getCurrency() Obtain Currency, which supports CNY, USD, etc.
 * @method void setCurrency(string $Currency) Set Currency, which supports CNY, USD, etc.
 * @method float getFlowUnitPrice() Obtain Connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFlowUnitPrice(float $FlowUnitPrice) Set Connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getDiscountFlowUnitPrice() Obtain Discounted connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountFlowUnitPrice(float $DiscountFlowUnitPrice) Set Discounted connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getCn2BandwidthPrice() Obtain Dedicated BGP bandwidth price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setCn2BandwidthPrice(float $Cn2BandwidthPrice) Set Dedicated BGP bandwidth price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method float getCn2BandwidthPriceWithDiscount() Obtain Dedicated BGP bandwidth discount price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setCn2BandwidthPriceWithDiscount(float $Cn2BandwidthPriceWithDiscount) Set Dedicated BGP bandwidth discount price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class InquiryPriceCreateProxyResponse extends AbstractModel
{
    /**
     * @var float Basic price of connection in USD/day.
     */
    public $ProxyDailyPrice;

    /**
     * @var array Tiered price of connection bandwidth.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthUnitPrice;

    /**
     * @var float Discounted basic price of connection in USD/day.
     */
    public $DiscountProxyDailyPrice;

    /**
     * @var string Currency, which supports CNY, USD, etc.
     */
    public $Currency;

    /**
     * @var float Connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FlowUnitPrice;

    /**
     * @var float Discounted connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountFlowUnitPrice;

    /**
     * @var float Dedicated BGP bandwidth price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cn2BandwidthPrice;

    /**
     * @var float Dedicated BGP bandwidth discount price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cn2BandwidthPriceWithDiscount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $ProxyDailyPrice Basic price of connection in USD/day.
     * @param array $BandwidthUnitPrice Tiered price of connection bandwidth.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $DiscountProxyDailyPrice Discounted basic price of connection in USD/day.
     * @param string $Currency Currency, which supports CNY, USD, etc.
     * @param float $FlowUnitPrice Connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $DiscountFlowUnitPrice Discounted connection traffic price in USD/GB.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $Cn2BandwidthPrice Dedicated BGP bandwidth price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param float $Cn2BandwidthPriceWithDiscount Dedicated BGP bandwidth discount price. Unit: USD/Mbps/day
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("FlowUnitPrice",$param) and $param["FlowUnitPrice"] !== null) {
            $this->FlowUnitPrice = $param["FlowUnitPrice"];
        }

        if (array_key_exists("DiscountFlowUnitPrice",$param) and $param["DiscountFlowUnitPrice"] !== null) {
            $this->DiscountFlowUnitPrice = $param["DiscountFlowUnitPrice"];
        }

        if (array_key_exists("Cn2BandwidthPrice",$param) and $param["Cn2BandwidthPrice"] !== null) {
            $this->Cn2BandwidthPrice = $param["Cn2BandwidthPrice"];
        }

        if (array_key_exists("Cn2BandwidthPriceWithDiscount",$param) and $param["Cn2BandwidthPriceWithDiscount"] !== null) {
            $this->Cn2BandwidthPriceWithDiscount = $param["Cn2BandwidthPriceWithDiscount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
