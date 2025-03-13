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
 * Information on reserved instances purchased by the user.
 *
 * @method string getReservedInstancesId() Obtain (This field has been deprecated. ReservedInstanceId is recommended.) IDs of purchased reserved instances. For example, ri-rtbh4han.
 * @method void setReservedInstancesId(string $ReservedInstancesId) Set (This field has been deprecated. ReservedInstanceId is recommended.) IDs of purchased reserved instances. For example, ri-rtbh4han.
 * @method string getInstanceType() Obtain Specifications of reserved instances. For example, S3.MEDIUM4.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance specification list.</a>
 * @method void setInstanceType(string $InstanceType) Set Specifications of reserved instances. For example, S3.MEDIUM4.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance specification list.</a>
 * @method string getZone() Obtain Availability zones in which reserved instances can be purchased. For example, ap-guangzhou-1.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability zone list.</a>
 * @method void setZone(string $Zone) Set Availability zones in which reserved instances can be purchased. For example, ap-guangzhou-1.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability zone list.</a>
 * @method string getStartTime() Obtain Billing start time of reserved instances. For example, 1949-10-01 00:00:00.
 * @method void setStartTime(string $StartTime) Set Billing start time of reserved instances. For example, 1949-10-01 00:00:00.
 * @method string getEndTime() Obtain Billing end time of reserved instances. For example, 1949-10-01 00:00:00.
 * @method void setEndTime(string $EndTime) Set Billing end time of reserved instances. For example, 1949-10-01 00:00:00.
 * @method integer getDuration() Obtain Validity periods of reserved instances, which is the purchase duration of reserved instances. For example, 31536000.
Unit: second.
 * @method void setDuration(integer $Duration) Set Validity periods of reserved instances, which is the purchase duration of reserved instances. For example, 31536000.
Unit: second.
 * @method integer getInstanceCount() Obtain Number of purchased reserved instances. For example, 10.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of purchased reserved instances. For example, 10.
 * @method string getProductDescription() Obtain Platform descriptions (operating systems) of reserved instances. For example, linux.
Return value: linux.
 * @method void setProductDescription(string $ProductDescription) Set Platform descriptions (operating systems) of reserved instances. For example, linux.
Return value: linux.
 * @method string getState() Obtain Statuses of purchased reserved instances. For example: active.
Return values: active (created) | pending (waiting to be created) | retired (expired).
 * @method void setState(string $State) Set Statuses of purchased reserved instances. For example: active.
Return values: active (created) | pending (waiting to be created) | retired (expired).
 * @method string getCurrencyCode() Obtain Billing currencies of purchasable reserved instances. Use standard currency codes defined in ISO 4217. For example, USD.
Return value: USD.
 * @method void setCurrencyCode(string $CurrencyCode) Set Billing currencies of purchasable reserved instances. Use standard currency codes defined in ISO 4217. For example, USD.
Return value: USD.
 * @method string getOfferingType() Obtain Payment types of reserved instances. For example, All Upfront.
Return value: All Upfront (fully prepaid).
 * @method void setOfferingType(string $OfferingType) Set Payment types of reserved instances. For example, All Upfront.
Return value: All Upfront (fully prepaid).
 * @method string getInstanceFamily() Obtain Types of reserved instances. For example, S3.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance type list.</a>
 * @method void setInstanceFamily(string $InstanceFamily) Set Types of reserved instances. For example, S3.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance type list.</a>
 * @method string getReservedInstanceId() Obtain IDs of purchased reserved instances. For example, ri-rtbh4han.
 * @method void setReservedInstanceId(string $ReservedInstanceId) Set IDs of purchased reserved instances. For example, ri-rtbh4han.
 * @method string getReservedInstanceName() Obtain Display names of reserved instances. For example, riname-01.
 * @method void setReservedInstanceName(string $ReservedInstanceName) Set Display names of reserved instances. For example, riname-01.
 */
class ReservedInstances extends AbstractModel
{
    /**
     * @var string (This field has been deprecated. ReservedInstanceId is recommended.) IDs of purchased reserved instances. For example, ri-rtbh4han.
     * @deprecated
     */
    public $ReservedInstancesId;

    /**
     * @var string Specifications of reserved instances. For example, S3.MEDIUM4.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance specification list.</a>
     */
    public $InstanceType;

    /**
     * @var string Availability zones in which reserved instances can be purchased. For example, ap-guangzhou-1.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability zone list.</a>
     */
    public $Zone;

    /**
     * @var string Billing start time of reserved instances. For example, 1949-10-01 00:00:00.
     */
    public $StartTime;

    /**
     * @var string Billing end time of reserved instances. For example, 1949-10-01 00:00:00.
     */
    public $EndTime;

    /**
     * @var integer Validity periods of reserved instances, which is the purchase duration of reserved instances. For example, 31536000.
Unit: second.
     */
    public $Duration;

    /**
     * @var integer Number of purchased reserved instances. For example, 10.
     */
    public $InstanceCount;

    /**
     * @var string Platform descriptions (operating systems) of reserved instances. For example, linux.
Return value: linux.
     */
    public $ProductDescription;

    /**
     * @var string Statuses of purchased reserved instances. For example: active.
Return values: active (created) | pending (waiting to be created) | retired (expired).
     */
    public $State;

    /**
     * @var string Billing currencies of purchasable reserved instances. Use standard currency codes defined in ISO 4217. For example, USD.
Return value: USD.
     */
    public $CurrencyCode;

    /**
     * @var string Payment types of reserved instances. For example, All Upfront.
Return value: All Upfront (fully prepaid).
     */
    public $OfferingType;

    /**
     * @var string Types of reserved instances. For example, S3.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance type list.</a>
     */
    public $InstanceFamily;

    /**
     * @var string IDs of purchased reserved instances. For example, ri-rtbh4han.
     */
    public $ReservedInstanceId;

    /**
     * @var string Display names of reserved instances. For example, riname-01.
     */
    public $ReservedInstanceName;

    /**
     * @param string $ReservedInstancesId (This field has been deprecated. ReservedInstanceId is recommended.) IDs of purchased reserved instances. For example, ri-rtbh4han.
     * @param string $InstanceType Specifications of reserved instances. For example, S3.MEDIUM4.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance specification list.</a>
     * @param string $Zone Availability zones in which reserved instances can be purchased. For example, ap-guangzhou-1.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/6091?from_cn_redirect=1">Availability zone list.</a>
     * @param string $StartTime Billing start time of reserved instances. For example, 1949-10-01 00:00:00.
     * @param string $EndTime Billing end time of reserved instances. For example, 1949-10-01 00:00:00.
     * @param integer $Duration Validity periods of reserved instances, which is the purchase duration of reserved instances. For example, 31536000.
Unit: second.
     * @param integer $InstanceCount Number of purchased reserved instances. For example, 10.
     * @param string $ProductDescription Platform descriptions (operating systems) of reserved instances. For example, linux.
Return value: linux.
     * @param string $State Statuses of purchased reserved instances. For example: active.
Return values: active (created) | pending (waiting to be created) | retired (expired).
     * @param string $CurrencyCode Billing currencies of purchasable reserved instances. Use standard currency codes defined in ISO 4217. For example, USD.
Return value: USD.
     * @param string $OfferingType Payment types of reserved instances. For example, All Upfront.
Return value: All Upfront (fully prepaid).
     * @param string $InstanceFamily Types of reserved instances. For example, S3.
Return values: <a href="https://intl.cloud.tencent.com/document/product/213/11518?from_cn_redirect=1">Reserved instance type list.</a>
     * @param string $ReservedInstanceId IDs of purchased reserved instances. For example, ri-rtbh4han.
     * @param string $ReservedInstanceName Display names of reserved instances. For example, riname-01.
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

        if (array_key_exists("ReservedInstanceId",$param) and $param["ReservedInstanceId"] !== null) {
            $this->ReservedInstanceId = $param["ReservedInstanceId"];
        }

        if (array_key_exists("ReservedInstanceName",$param) and $param["ReservedInstanceName"] !== null) {
            $this->ReservedInstanceName = $param["ReservedInstanceName"];
        }
    }
}
