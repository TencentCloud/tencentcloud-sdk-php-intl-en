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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TMP v2 instance overview
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getInstanceStatus() Obtain Running status. Valid values: `1` (creating); `2` (running); `3` (abnormal); `4` (restarting); `5` (terminating); `6` (stopped); `7` (deleted).
 * @method void setInstanceStatus(integer $InstanceStatus) Set Running status. Valid values: `1` (creating); `2` (running); `3` (abnormal); `4` (restarting); `5` (terminating); `6` (stopped); `7` (deleted).
 * @method integer getChargeStatus() Obtain Billing status. Valid values: `1` (normal); `2` (expired); `3` (terminated); `4` (assigning); `5` (failed to assign)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeStatus(integer $ChargeStatus) Set Billing status. Valid values: `1` (normal); `2` (expired); `3` (terminated); `4` (assigning); `5` (failed to assign)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableGrafana() Obtain Whether Grafana is enabled. Valid values: `0` (no); `1` (yes).
 * @method void setEnableGrafana(integer $EnableGrafana) Set Whether Grafana is enabled. Valid values: `0` (no); `1` (yes).
 * @method string getGrafanaURL() Obtain Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrafanaURL(string $GrafanaURL) Set Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceChargeType() Obtain Instance payment type. Valid values: `1` (trial edition); `2` (prepaid)
 * @method void setInstanceChargeType(integer $InstanceChargeType) Set Instance payment type. Valid values: `1` (trial edition); `2` (prepaid)
 * @method string getSpecName() Obtain Specification name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecName(string $SpecName) Set Specification name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataRetentionTime() Obtain Storage period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataRetentionTime(integer $DataRetentionTime) Set Storage period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values: `0` (auto-renewal not enabled); `1` (auto-renewal enabled); `2` (auto-renewal prohibited); `-1` (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values: `0` (auto-renewal not enabled); `1` (auto-renewal enabled); `2` (auto-renewal prohibited); `-1` (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBoundTotal() Obtain Total number of bound clusters
 * @method void setBoundTotal(integer $BoundTotal) Set Total number of bound clusters
 * @method integer getBoundNormal() Obtain Total number of bound clusters in the normal status
 * @method void setBoundNormal(integer $BoundNormal) Set Total number of bound clusters in the normal status
 * @method integer getResourcePackageStatus() Obtain Resource pack status (`0`: Unavailable; `1`: Available)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourcePackageStatus(integer $ResourcePackageStatus) Set Resource pack status (`0`: Unavailable; `1`: Available)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourcePackageSpecName() Obtain Resource pack specification name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourcePackageSpecName(string $ResourcePackageSpecName) Set Resource pack specification name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusInstancesOverview extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Running status. Valid values: `1` (creating); `2` (running); `3` (abnormal); `4` (restarting); `5` (terminating); `6` (stopped); `7` (deleted).
     */
    public $InstanceStatus;

    /**
     * @var integer Billing status. Valid values: `1` (normal); `2` (expired); `3` (terminated); `4` (assigning); `5` (failed to assign)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeStatus;

    /**
     * @var integer Whether Grafana is enabled. Valid values: `0` (no); `1` (yes).
     */
    public $EnableGrafana;

    /**
     * @var string Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GrafanaURL;

    /**
     * @var integer Instance payment type. Valid values: `1` (trial edition); `2` (prepaid)
     */
    public $InstanceChargeType;

    /**
     * @var string Specification name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecName;

    /**
     * @var integer Storage period
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataRetentionTime;

    /**
     * @var string Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var integer Auto-renewal flag. Valid values: `0` (auto-renewal not enabled); `1` (auto-renewal enabled); `2` (auto-renewal prohibited); `-1` (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Total number of bound clusters
     */
    public $BoundTotal;

    /**
     * @var integer Total number of bound clusters in the normal status
     */
    public $BoundNormal;

    /**
     * @var integer Resource pack status (`0`: Unavailable; `1`: Available)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourcePackageStatus;

    /**
     * @var string Resource pack specification name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourcePackageSpecName;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param integer $InstanceStatus Running status. Valid values: `1` (creating); `2` (running); `3` (abnormal); `4` (restarting); `5` (terminating); `6` (stopped); `7` (deleted).
     * @param integer $ChargeStatus Billing status. Valid values: `1` (normal); `2` (expired); `3` (terminated); `4` (assigning); `5` (failed to assign)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableGrafana Whether Grafana is enabled. Valid values: `0` (no); `1` (yes).
     * @param string $GrafanaURL Grafana dashboard URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceChargeType Instance payment type. Valid values: `1` (trial edition); `2` (prepaid)
     * @param string $SpecName Specification name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataRetentionTime Storage period
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time of the purchased instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values: `0` (auto-renewal not enabled); `1` (auto-renewal enabled); `2` (auto-renewal prohibited); `-1` (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BoundTotal Total number of bound clusters
     * @param integer $BoundNormal Total number of bound clusters in the normal status
     * @param integer $ResourcePackageStatus Resource pack status (`0`: Unavailable; `1`: Available)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourcePackageSpecName Resource pack specification name
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("EnableGrafana",$param) and $param["EnableGrafana"] !== null) {
            $this->EnableGrafana = $param["EnableGrafana"];
        }

        if (array_key_exists("GrafanaURL",$param) and $param["GrafanaURL"] !== null) {
            $this->GrafanaURL = $param["GrafanaURL"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("BoundTotal",$param) and $param["BoundTotal"] !== null) {
            $this->BoundTotal = $param["BoundTotal"];
        }

        if (array_key_exists("BoundNormal",$param) and $param["BoundNormal"] !== null) {
            $this->BoundNormal = $param["BoundNormal"];
        }

        if (array_key_exists("ResourcePackageStatus",$param) and $param["ResourcePackageStatus"] !== null) {
            $this->ResourcePackageStatus = $param["ResourcePackageStatus"];
        }

        if (array_key_exists("ResourcePackageSpecName",$param) and $param["ResourcePackageSpecName"] !== null) {
            $this->ResourcePackageSpecName = $param["ResourcePackageSpecName"];
        }
    }
}
