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
 * The information of the Reserved Instance offering.
 *
 * @method string getZone() Obtain The availability zones in which the Reserved Instance can be purchased, such as ap-guangzhou-1.
Valid value: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a>
 * @method void setZone(string $Zone) Set The availability zones in which the Reserved Instance can be purchased, such as ap-guangzhou-1.
Valid value: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a>
 * @method string getCurrencyCode() Obtain The billing currency of the Reserved Instance you are purchasing. It's specified using ISO 4217 standard currency.
Value: USD.
 * @method void setCurrencyCode(string $CurrencyCode) Set The billing currency of the Reserved Instance you are purchasing. It's specified using ISO 4217 standard currency.
Value: USD.
 * @method integer getDuration() Obtain The **validity** of the Reserved Instance in seconds, which is the purchased usage period. For example, 31536000.
Unit: second
 * @method void setDuration(integer $Duration) Set The **validity** of the Reserved Instance in seconds, which is the purchased usage period. For example, 31536000.
Unit: second
 * @method float getFixedPrice() Obtain The purchase price of the Reserved Instance, such as 4000.0.
Unit: this field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
 * @method void setFixedPrice(float $FixedPrice) Set The purchase price of the Reserved Instance, such as 4000.0.
Unit: this field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
 * @method string getInstanceType() Obtain The instance model of the Reserved Instance, such as S3.MEDIUM4.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518">Reserved Instance Types</a>
 * @method void setInstanceType(string $InstanceType) Set The instance model of the Reserved Instance, such as S3.MEDIUM4.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518">Reserved Instance Types</a>
 * @method string getOfferingType() Obtain The payment term of the Reserved Instance, such as **All Upfront**.
Valid value: All Upfront.
 * @method void setOfferingType(string $OfferingType) Set The payment term of the Reserved Instance, such as **All Upfront**.
Valid value: All Upfront.
 * @method string getReservedInstancesOfferingId() Obtain The ID of the Reserved Instance offering, such as 650c138f-ae7e-4750-952a-96841d6e9fc1.
 * @method void setReservedInstancesOfferingId(string $ReservedInstancesOfferingId) Set The ID of the Reserved Instance offering, such as 650c138f-ae7e-4750-952a-96841d6e9fc1.
 * @method string getProductDescription() Obtain The operating system of the Reserved Instance, such as **linux**.
Valid value: linux.
 * @method void setProductDescription(string $ProductDescription) Set The operating system of the Reserved Instance, such as **linux**.
Valid value: linux.
 * @method float getUsagePrice() Obtain The hourly usage price of the Reserved Instance, such as 0.0.
Currently, the only supported payment mode is **All Upfront**, so the default value of `UsagePrice` is 0 USD/hr.
Unit: USD/hr. This field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
 * @method void setUsagePrice(float $UsagePrice) Set The hourly usage price of the Reserved Instance, such as 0.0.
Currently, the only supported payment mode is **All Upfront**, so the default value of `UsagePrice` is 0 USD/hr.
Unit: USD/hr. This field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
 */
class ReservedInstancesOffering extends AbstractModel
{
    /**
     * @var string The availability zones in which the Reserved Instance can be purchased, such as ap-guangzhou-1.
Valid value: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a>
     */
    public $Zone;

    /**
     * @var string The billing currency of the Reserved Instance you are purchasing. It's specified using ISO 4217 standard currency.
Value: USD.
     */
    public $CurrencyCode;

    /**
     * @var integer The **validity** of the Reserved Instance in seconds, which is the purchased usage period. For example, 31536000.
Unit: second
     */
    public $Duration;

    /**
     * @var float The purchase price of the Reserved Instance, such as 4000.0.
Unit: this field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
     */
    public $FixedPrice;

    /**
     * @var string The instance model of the Reserved Instance, such as S3.MEDIUM4.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518">Reserved Instance Types</a>
     */
    public $InstanceType;

    /**
     * @var string The payment term of the Reserved Instance, such as **All Upfront**.
Valid value: All Upfront.
     */
    public $OfferingType;

    /**
     * @var string The ID of the Reserved Instance offering, such as 650c138f-ae7e-4750-952a-96841d6e9fc1.
     */
    public $ReservedInstancesOfferingId;

    /**
     * @var string The operating system of the Reserved Instance, such as **linux**.
Valid value: linux.
     */
    public $ProductDescription;

    /**
     * @var float The hourly usage price of the Reserved Instance, such as 0.0.
Currently, the only supported payment mode is **All Upfront**, so the default value of `UsagePrice` is 0 USD/hr.
Unit: USD/hr. This field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
     */
    public $UsagePrice;

    /**
     * @param string $Zone The availability zones in which the Reserved Instance can be purchased, such as ap-guangzhou-1.
Valid value: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability Zones</a>
     * @param string $CurrencyCode The billing currency of the Reserved Instance you are purchasing. It's specified using ISO 4217 standard currency.
Value: USD.
     * @param integer $Duration The **validity** of the Reserved Instance in seconds, which is the purchased usage period. For example, 31536000.
Unit: second
     * @param float $FixedPrice The purchase price of the Reserved Instance, such as 4000.0.
Unit: this field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
     * @param string $InstanceType The instance model of the Reserved Instance, such as S3.MEDIUM4.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518">Reserved Instance Types</a>
     * @param string $OfferingType The payment term of the Reserved Instance, such as **All Upfront**.
Valid value: All Upfront.
     * @param string $ReservedInstancesOfferingId The ID of the Reserved Instance offering, such as 650c138f-ae7e-4750-952a-96841d6e9fc1.
     * @param string $ProductDescription The operating system of the Reserved Instance, such as **linux**.
Valid value: linux.
     * @param float $UsagePrice The hourly usage price of the Reserved Instance, such as 0.0.
Currently, the only supported payment mode is **All Upfront**, so the default value of `UsagePrice` is 0 USD/hr.
Unit: USD/hr. This field uses the currency code specified in `currencyCode`, and only supports “USD” at this time.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CurrencyCode",$param) and $param["CurrencyCode"] !== null) {
            $this->CurrencyCode = $param["CurrencyCode"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("FixedPrice",$param) and $param["FixedPrice"] !== null) {
            $this->FixedPrice = $param["FixedPrice"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OfferingType",$param) and $param["OfferingType"] !== null) {
            $this->OfferingType = $param["OfferingType"];
        }

        if (array_key_exists("ReservedInstancesOfferingId",$param) and $param["ReservedInstancesOfferingId"] !== null) {
            $this->ReservedInstancesOfferingId = $param["ReservedInstancesOfferingId"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("UsagePrice",$param) and $param["UsagePrice"] !== null) {
            $this->UsagePrice = $param["UsagePrice"];
        }
    }
}
