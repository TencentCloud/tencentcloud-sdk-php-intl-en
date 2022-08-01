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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of existing instances
 *
 * @method boolean getUsable() Obtain Whether the instance supports being added to the cluster (TRUE: support; FALSE: not support).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsable(boolean $Usable) Set Whether the instance supports being added to the cluster (TRUE: support; FALSE: not support).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnusableReason() Obtain Reason that the instance does not support being added.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnusableReason(string $UnusableReason) Set Reason that the instance does not support being added.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlreadyInCluster() Obtain ID of the cluster in which the instance currently resides.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlreadyInCluster(string $AlreadyInCluster) Set ID of the cluster in which the instance currently resides.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID, in the format of ins-xxxxxxxx.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format of ins-xxxxxxxx.
 * @method string getInstanceName() Obtain Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrivateIpAddresses() Obtain List of private IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set List of private IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPublicIpAddresses() Obtain List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time, which follows the ISO8601 standard and uses UTC time. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time, which follows the ISO8601 standard and uses UTC time. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCPU() Obtain Instance's number of CPU cores. Unit: cores.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCPU(integer $CPU) Set Instance's number of CPU cores. Unit: cores.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain Instance's memory capacity. Unit: GB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemory(integer $Memory) Set Instance's memory capacity. Unit: GB.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOsName() Obtain Operating system name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOsName(string $OsName) Set Operating system name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Instance model.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Instance model.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAutoscalingGroupId() Obtain Auto scaling group ID
Note: This field may return null, indicating that no valid value was found.
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) Set Auto scaling group ID
Note: This field may return null, indicating that no valid value was found.
 * @method string getInstanceChargeType() Obtain Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
Note: This field may return null, indicating that no valid value was found.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
Note: This field may return null, indicating that no valid value was found.
 * @method array getIPv6Addresses() Obtain IPv6 address of the instance
Note: This field may return `null`, indicating that no valid values can be obtained.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIPv6Addresses(array $IPv6Addresses) Set IPv6 address of the instance
Note: This field may return `null`, indicating that no valid values can be obtained.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ExistedInstance extends AbstractModel
{
    /**
     * @var boolean Whether the instance supports being added to the cluster (TRUE: support; FALSE: not support).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Usable;

    /**
     * @var string Reason that the instance does not support being added.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnusableReason;

    /**
     * @var string ID of the cluster in which the instance currently resides.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlreadyInCluster;

    /**
     * @var string Instance ID, in the format of ins-xxxxxxxx.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var array List of private IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateIpAddresses;

    /**
     * @var array List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIpAddresses;

    /**
     * @var string Creation time, which follows the ISO8601 standard and uses UTC time. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var integer Instance's number of CPU cores. Unit: cores.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CPU;

    /**
     * @var integer Instance's memory capacity. Unit: GB.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var string Operating system name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OsName;

    /**
     * @var string Instance model.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Auto scaling group ID
Note: This field may return null, indicating that no valid value was found.
     */
    public $AutoscalingGroupId;

    /**
     * @var string Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
Note: This field may return null, indicating that no valid value was found.
     */
    public $InstanceChargeType;

    /**
     * @var array IPv6 address of the instance
Note: This field may return `null`, indicating that no valid values can be obtained.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IPv6Addresses;

    /**
     * @param boolean $Usable Whether the instance supports being added to the cluster (TRUE: support; FALSE: not support).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UnusableReason Reason that the instance does not support being added.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AlreadyInCluster ID of the cluster in which the instance currently resides.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID, in the format of ins-xxxxxxxx.
     * @param string $InstanceName Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PrivateIpAddresses List of private IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PublicIpAddresses List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time, which follows the ISO8601 standard and uses UTC time. Format: YYYY-MM-DDThh:mm:ssZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CPU Instance's number of CPU cores. Unit: cores.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Memory Instance's memory capacity. Unit: GB.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OsName Operating system name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Instance model.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AutoscalingGroupId Auto scaling group ID
Note: This field may return null, indicating that no valid value was found.
     * @param string $InstanceChargeType Instance billing method. Valid values: POSTPAID_BY_HOUR (pay-as-you-go hourly); CDHPAID (billed based on CDH, i.e., only CDH is billed but not the instances on CDH)
Note: This field may return null, indicating that no valid value was found.
     * @param array $IPv6Addresses IPv6 address of the instance
Note: This field may return `null`, indicating that no valid values can be obtained.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Usable",$param) and $param["Usable"] !== null) {
            $this->Usable = $param["Usable"];
        }

        if (array_key_exists("UnusableReason",$param) and $param["UnusableReason"] !== null) {
            $this->UnusableReason = $param["UnusableReason"];
        }

        if (array_key_exists("AlreadyInCluster",$param) and $param["AlreadyInCluster"] !== null) {
            $this->AlreadyInCluster = $param["AlreadyInCluster"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("IPv6Addresses",$param) and $param["IPv6Addresses"] !== null) {
            $this->IPv6Addresses = $param["IPv6Addresses"];
        }
    }
}
