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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getEsVersion() Obtain Target ES version. Valid values: "6.4.3", "6.8.2", "7.5.1", "7.10.1", and "7.14.2".
 * @method void setEsVersion(string $EsVersion) Set Target ES version. Valid values: "6.4.3", "6.8.2", "7.5.1", "7.10.1", and "7.14.2".
 * @method boolean getCheckOnly() Obtain Whether to perform an upgrade check only. Default value: false.
 * @method void setCheckOnly(boolean $CheckOnly) Set Whether to perform an upgrade check only. Default value: false.
 * @method string getLicenseType() Obtain Target business feature version: <li>oss open source edition</li><li>basic edition</li>Currently used only when upgrading from 5.6.4 to 6.x. Default value: basic
 * @method void setLicenseType(string $LicenseType) Set Target business feature version: <li>oss open source edition</li><li>basic edition</li>Currently used only when upgrading from 5.6.4 to 6.x. Default value: basic
 * @method integer getBasicSecurityType() Obtain Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li>
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li>
 * @method string getUpgradeMode() Obtain Upgrade method: <li>scale blue-green change</li><li>restart rolling restart</li>Default value: scale
 * @method void setUpgradeMode(string $UpgradeMode) Set Upgrade method: <li>scale blue-green change</li><li>restart rolling restart</li>Default value: scale
 * @method boolean getCosBackup() Obtain Whether to back up the cluster before upgrading the version. By default, no backup is performed.
 * @method void setCosBackup(boolean $CosBackup) Set Whether to back up the cluster before upgrading the version. By default, no backup is performed.
 * @method boolean getSkipCheckForceRestart() Obtain In rolling mode, whether to skip the check and perform a forced reboot. Default value: false
 * @method void setSkipCheckForceRestart(boolean $SkipCheckForceRestart) Set In rolling mode, whether to skip the check and perform a forced reboot. Default value: false
 * @method integer getCvmDelayOnlineTime() Obtain Parameter for delayed cvm launch
 * @method void setCvmDelayOnlineTime(integer $CvmDelayOnlineTime) Set Parameter for delayed cvm launch
 * @method integer getShardAllocationConcurrents() Obtain Number of concurrent shard migrations
 * @method void setShardAllocationConcurrents(integer $ShardAllocationConcurrents) Set Number of concurrent shard migrations
 * @method integer getShardAllocationBytes() Obtain Shard migration concurrency speed
 * @method void setShardAllocationBytes(integer $ShardAllocationBytes) Set Shard migration concurrency speed
 * @method boolean getEnableScheduleRecoverGroup() Obtain Whether to enable the placement group asynchronous task
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) Set Whether to enable the placement group asynchronous task
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() Obtain Time period of the async task for the placement group
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) Set Time period of the async task for the placement group
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Target ES version. Valid values: "6.4.3", "6.8.2", "7.5.1", "7.10.1", and "7.14.2".
     */
    public $EsVersion;

    /**
     * @var boolean Whether to perform an upgrade check only. Default value: false.
     */
    public $CheckOnly;

    /**
     * @var string Target business feature version: <li>oss open source edition</li><li>basic edition</li>Currently used only when upgrading from 5.6.4 to 6.x. Default value: basic
     */
    public $LicenseType;

    /**
     * @var integer Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li>
     */
    public $BasicSecurityType;

    /**
     * @var string Upgrade method: <li>scale blue-green change</li><li>restart rolling restart</li>Default value: scale
     */
    public $UpgradeMode;

    /**
     * @var boolean Whether to back up the cluster before upgrading the version. By default, no backup is performed.
     */
    public $CosBackup;

    /**
     * @var boolean In rolling mode, whether to skip the check and perform a forced reboot. Default value: false
     */
    public $SkipCheckForceRestart;

    /**
     * @var integer Parameter for delayed cvm launch
     */
    public $CvmDelayOnlineTime;

    /**
     * @var integer Number of concurrent shard migrations
     */
    public $ShardAllocationConcurrents;

    /**
     * @var integer Shard migration concurrency speed
     */
    public $ShardAllocationBytes;

    /**
     * @var boolean Whether to enable the placement group asynchronous task
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration Time period of the async task for the placement group
     */
    public $EnableScheduleOperationDuration;

    /**
     * @param string $InstanceId Instance ID
     * @param string $EsVersion Target ES version. Valid values: "6.4.3", "6.8.2", "7.5.1", "7.10.1", and "7.14.2".
     * @param boolean $CheckOnly Whether to perform an upgrade check only. Default value: false.
     * @param string $LicenseType Target business feature version: <li>oss open source edition</li><li>basic edition</li>Currently used only when upgrading from 5.6.4 to 6.x. Default value: basic
     * @param integer $BasicSecurityType Whether xpack security authentication is enabled for basic version 6.8 (and above versions)<li>1: not enabled</li><li>2: enabled</li>
     * @param string $UpgradeMode Upgrade method: <li>scale blue-green change</li><li>restart rolling restart</li>Default value: scale
     * @param boolean $CosBackup Whether to back up the cluster before upgrading the version. By default, no backup is performed.
     * @param boolean $SkipCheckForceRestart In rolling mode, whether to skip the check and perform a forced reboot. Default value: false
     * @param integer $CvmDelayOnlineTime Parameter for delayed cvm launch
     * @param integer $ShardAllocationConcurrents Number of concurrent shard migrations
     * @param integer $ShardAllocationBytes Shard migration concurrency speed
     * @param boolean $EnableScheduleRecoverGroup Whether to enable the placement group asynchronous task
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration Time period of the async task for the placement group
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("CheckOnly",$param) and $param["CheckOnly"] !== null) {
            $this->CheckOnly = $param["CheckOnly"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("UpgradeMode",$param) and $param["UpgradeMode"] !== null) {
            $this->UpgradeMode = $param["UpgradeMode"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = $param["CosBackup"];
        }

        if (array_key_exists("SkipCheckForceRestart",$param) and $param["SkipCheckForceRestart"] !== null) {
            $this->SkipCheckForceRestart = $param["SkipCheckForceRestart"];
        }

        if (array_key_exists("CvmDelayOnlineTime",$param) and $param["CvmDelayOnlineTime"] !== null) {
            $this->CvmDelayOnlineTime = $param["CvmDelayOnlineTime"];
        }

        if (array_key_exists("ShardAllocationConcurrents",$param) and $param["ShardAllocationConcurrents"] !== null) {
            $this->ShardAllocationConcurrents = $param["ShardAllocationConcurrents"];
        }

        if (array_key_exists("ShardAllocationBytes",$param) and $param["ShardAllocationBytes"] !== null) {
            $this->ShardAllocationBytes = $param["ShardAllocationBytes"];
        }

        if (array_key_exists("EnableScheduleRecoverGroup",$param) and $param["EnableScheduleRecoverGroup"] !== null) {
            $this->EnableScheduleRecoverGroup = $param["EnableScheduleRecoverGroup"];
        }

        if (array_key_exists("EnableScheduleOperationDuration",$param) and $param["EnableScheduleOperationDuration"] !== null) {
            $this->EnableScheduleOperationDuration = new EnableScheduleOperationDuration();
            $this->EnableScheduleOperationDuration->deserialize($param["EnableScheduleOperationDuration"]);
        }
    }
}
