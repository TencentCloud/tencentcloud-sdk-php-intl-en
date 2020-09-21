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
 * Describes the information of the reserved instances the user has purchased
 *
 * @method string getReservedInstancesId() Obtain The ID of the purchased reserved instance, taking the form 650c138f-ae7e-4750-952a-96841d6e9fc1.
 * @method void setReservedInstancesId(string $ReservedInstancesId) Set The ID of the purchased reserved instance, taking the form 650c138f-ae7e-4750-952a-96841d6e9fc1.
 * @method string getInstanceType() Obtain Reserved instance specification, such as `S3.MEDIUM4`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a>
 * @method void setInstanceType(string $InstanceType) Set Reserved instance specification, such as `S3.MEDIUM4`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a>
 * @method string getZone() Obtain Availability zones in which the reserved instance can be purchased. For example, "ap-guangzhou-1".
Returned values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">list of availability zones</a>
 * @method void setZone(string $Zone) Set Availability zones in which the reserved instance can be purchased. For example, "ap-guangzhou-1".
Returned values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">list of availability zones</a>
 * @method string getStartTime() Obtain Start time of the reserved instance billing, taking the form of 2019-10-23 00:00:00.
 * @method void setStartTime(string $StartTime) Set Start time of the reserved instance billing, taking the form of 2019-10-23 00:00:00.
 * @method string getEndTime() Obtain End time of the reserved instance, taking the form of 2019-10-23 00:00:00
 * @method void setEndTime(string $EndTime) Set End time of the reserved instance, taking the form of 2019-10-23 00:00:00
 * @method integer getDuration() Obtain The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, 31536000.
Measurement unit: second.
 * @method void setDuration(integer $Duration) Set The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, 31536000.
Measurement unit: second.
 * @method integer getInstanceCount() Obtain The number of reserved instances that have been purchased. For example, 10.
 * @method void setInstanceCount(integer $InstanceCount) Set The number of reserved instances that have been purchased. For example, 10.
 * @method string getProductDescription() Obtain The operating system of the reserved instance. For example, "linux".
Returned value: linux.
 * @method void setProductDescription(string $ProductDescription) Set The operating system of the reserved instance. For example, "linux".
Returned value: linux.
 * @method string getState() Obtain The status of the reserved instance. For example, "active".
Returned value: "active" (created) | "pending" (waiting to be created) | "retired" (expired).
 * @method void setState(string $State) Set The status of the reserved instance. For example, "active".
Returned value: "active" (created) | "pending" (waiting to be created) | "retired" (expired).
 * @method string getCurrencyCode() Obtain The currency in which the reserved instance is billed. The ISO 4217 standard currency codes are used. For example, USD.
Returned value: USD.
 * @method void setCurrencyCode(string $CurrencyCode) Set The currency in which the reserved instance is billed. The ISO 4217 standard currency codes are used. For example, USD.
Returned value: USD.
 * @method string getOfferingType() Obtain The payment method of the reserved instance. For example, "All Upfront".
Returned value: All Upfront.
 * @method void setOfferingType(string $OfferingType) Set The payment method of the reserved instance. For example, "All Upfront".
Returned value: All Upfront.
 * @method string getInstanceFamily() Obtain Reserved instance type, such as `S3`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a>
 * @method void setInstanceFamily(string $InstanceFamily) Set Reserved instance type, such as `S3`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a>
 */
class ReservedInstances extends AbstractModel
{
    /**
     * @var string The ID of the purchased reserved instance, taking the form 650c138f-ae7e-4750-952a-96841d6e9fc1.
     */
    public $ReservedInstancesId;

    /**
     * @var string Reserved instance specification, such as `S3.MEDIUM4`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a>
     */
    public $InstanceType;

    /**
     * @var string Availability zones in which the reserved instance can be purchased. For example, "ap-guangzhou-1".
Returned values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">list of availability zones</a>
     */
    public $Zone;

    /**
     * @var string Start time of the reserved instance billing, taking the form of 2019-10-23 00:00:00.
     */
    public $StartTime;

    /**
     * @var string End time of the reserved instance, taking the form of 2019-10-23 00:00:00
     */
    public $EndTime;

    /**
     * @var integer The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, 31536000.
Measurement unit: second.
     */
    public $Duration;

    /**
     * @var integer The number of reserved instances that have been purchased. For example, 10.
     */
    public $InstanceCount;

    /**
     * @var string The operating system of the reserved instance. For example, "linux".
Returned value: linux.
     */
    public $ProductDescription;

    /**
     * @var string The status of the reserved instance. For example, "active".
Returned value: "active" (created) | "pending" (waiting to be created) | "retired" (expired).
     */
    public $State;

    /**
     * @var string The currency in which the reserved instance is billed. The ISO 4217 standard currency codes are used. For example, USD.
Returned value: USD.
     */
    public $CurrencyCode;

    /**
     * @var string The payment method of the reserved instance. For example, "All Upfront".
Returned value: All Upfront.
     */
    public $OfferingType;

    /**
     * @var string Reserved instance type, such as `S3`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a>
     */
    public $InstanceFamily;

    /**
     * @param string $ReservedInstancesId The ID of the purchased reserved instance, taking the form 650c138f-ae7e-4750-952a-96841d6e9fc1.
     * @param string $InstanceType Reserved instance specification, such as `S3.MEDIUM4`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Specifications</a>
     * @param string $Zone Availability zones in which the reserved instance can be purchased. For example, "ap-guangzhou-1".
Returned values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">list of availability zones</a>
     * @param string $StartTime Start time of the reserved instance billing, taking the form of 2019-10-23 00:00:00.
     * @param string $EndTime End time of the reserved instance, taking the form of 2019-10-23 00:00:00
     * @param integer $Duration The **validity** of the reserved instance in seconds, which is the purchased usage period. For example, 31536000.
Measurement unit: second.
     * @param integer $InstanceCount The number of reserved instances that have been purchased. For example, 10.
     * @param string $ProductDescription The operating system of the reserved instance. For example, "linux".
Returned value: linux.
     * @param string $State The status of the reserved instance. For example, "active".
Returned value: "active" (created) | "pending" (waiting to be created) | "retired" (expired).
     * @param string $CurrencyCode The currency in which the reserved instance is billed. The ISO 4217 standard currency codes are used. For example, USD.
Returned value: USD.
     * @param string $OfferingType The payment method of the reserved instance. For example, "All Upfront".
Returned value: All Upfront.
     * @param string $InstanceFamily Reserved instance type, such as `S3`.
Valid values: please see <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved Instance Types</a>
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
        if (array_key_exists("ReservedInstancesId",$param) and $param["ReservedInstancesId"] !== null) {
            $this->ReservedInstancesId = $param["ReservedInstancesId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CurrencyCode",$param) and $param["CurrencyCode"] !== null) {
            $this->CurrencyCode = $param["CurrencyCode"];
        }

        if (array_key_exists("OfferingType",$param) and $param["OfferingType"] !== null) {
            $this->OfferingType = $param["OfferingType"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
