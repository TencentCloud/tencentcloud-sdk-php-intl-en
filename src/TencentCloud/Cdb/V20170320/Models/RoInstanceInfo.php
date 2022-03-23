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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RO instance details
 *
 * @method string getMasterInstanceId() Obtain Master instance ID corresponding to the RO group
 * @method void setMasterInstanceId(string $MasterInstanceId) Set Master instance ID corresponding to the RO group
 * @method string getRoStatus() Obtain RO instance status in the RO group. Value range: online, offline
 * @method void setRoStatus(string $RoStatus) Set RO instance status in the RO group. Value range: online, offline
 * @method string getOfflineTime() Obtain Last deactivation time of a RO instance in the RO group
 * @method void setOfflineTime(string $OfflineTime) Set Last deactivation time of a RO instance in the RO group
 * @method integer getWeight() Obtain RO instance weight in the RO group
 * @method void setWeight(integer $Weight) Set RO instance weight in the RO group
 * @method string getRegion() Obtain RO instance region name, such as ap-shanghai
 * @method void setRegion(string $Region) Set RO instance region name, such as ap-shanghai
 * @method string getZone() Obtain Name of RO AZ, such as ap-shanghai-1
 * @method void setZone(string $Zone) Set Name of RO AZ, such as ap-shanghai-1
 * @method string getInstanceId() Obtain RO instance ID in the format of cdbro-c1nl9rpv
 * @method void setInstanceId(string $InstanceId) Set RO instance ID in the format of cdbro-c1nl9rpv
 * @method integer getStatus() Obtain RO instance status. Valid values: `0` (creating), `1` (running), `3` (remote RO), `4` (deleting). When the `DescribeDBInstances` API is used to query the information of the source instance, if the source instance is associated with a remote read-only instance, the returned status value of the remote read-only instance always shows 3.
 * @method void setStatus(integer $Status) Set RO instance status. Valid values: `0` (creating), `1` (running), `3` (remote RO), `4` (deleting). When the `DescribeDBInstances` API is used to query the information of the source instance, if the source instance is associated with a remote read-only instance, the returned status value of the remote read-only instance always shows 3.
 * @method integer getInstanceType() Obtain Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
 * @method void setInstanceType(integer $InstanceType) Set Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
 * @method string getInstanceName() Obtain RO instance name
 * @method void setInstanceName(string $InstanceName) Set RO instance name
 * @method integer getHourFeeStatus() Obtain Pay-as-you-go billing status. Value range: 1 (normal), 2 (in arrears)
 * @method void setHourFeeStatus(integer $HourFeeStatus) Set Pay-as-you-go billing status. Value range: 1 (normal), 2 (in arrears)
 * @method integer getTaskStatus() Obtain RO instance task status. Value range: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - activating secondary <br>4 - public network access enabled <br>5 - batch operation in progress <br>6 - rolling back <br>7 - public network access not enabled <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built instance <br>13 - dropping table <br>14 - creating and syncing disaster recovery instance
 * @method void setTaskStatus(integer $TaskStatus) Set RO instance task status. Value range: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - activating secondary <br>4 - public network access enabled <br>5 - batch operation in progress <br>6 - rolling back <br>7 - public network access not enabled <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built instance <br>13 - dropping table <br>14 - creating and syncing disaster recovery instance
 * @method integer getMemory() Obtain RO instance memory size in MB
 * @method void setMemory(integer $Memory) Set RO instance memory size in MB
 * @method integer getVolume() Obtain RO instance disk size in GB
 * @method void setVolume(integer $Volume) Set RO instance disk size in GB
 * @method integer getQps() Obtain Queries per second
 * @method void setQps(integer $Qps) Set Queries per second
 * @method string getVip() Obtain Private IP address of the RO instance
 * @method void setVip(string $Vip) Set Private IP address of the RO instance
 * @method integer getVport() Obtain Access port of the RO instance
 * @method void setVport(integer $Vport) Set Access port of the RO instance
 * @method integer getVpcId() Obtain VPC ID of the RO instance
 * @method void setVpcId(integer $VpcId) Set VPC ID of the RO instance
 * @method integer getSubnetId() Obtain VPC subnet ID of the RO instance
 * @method void setSubnetId(integer $SubnetId) Set VPC subnet ID of the RO instance
 * @method string getDeviceType() Obtain RO instance specification description. Value range: CUSTOM
 * @method void setDeviceType(string $DeviceType) Set RO instance specification description. Value range: CUSTOM
 * @method string getEngineVersion() Obtain Database engine version of the read-only replica. Valid values: `5.1`, `5.5`, `5.6`, `5.7`, `8.0`
 * @method void setEngineVersion(string $EngineVersion) Set Database engine version of the read-only replica. Valid values: `5.1`, `5.5`, `5.6`, `5.7`, `8.0`
 * @method string getDeadlineTime() Obtain RO instance expiration time in the format of yyyy-mm-dd hh:mm:ss. If it is a pay-as-you-go instance, the value of this field is 0000-00-00 00:00:00
 * @method void setDeadlineTime(string $DeadlineTime) Set RO instance expiration time in the format of yyyy-mm-dd hh:mm:ss. If it is a pay-as-you-go instance, the value of this field is 0000-00-00 00:00:00
 * @method integer getPayType() Obtain RO instance billing method. Value range: 0 (monthly subscribed), 1 (pay-as-you-go), 2 (monthly postpaid)
 * @method void setPayType(integer $PayType) Set RO instance billing method. Value range: 0 (monthly subscribed), 1 (pay-as-you-go), 2 (monthly postpaid)
 */
class RoInstanceInfo extends AbstractModel
{
    /**
     * @var string Master instance ID corresponding to the RO group
     */
    public $MasterInstanceId;

    /**
     * @var string RO instance status in the RO group. Value range: online, offline
     */
    public $RoStatus;

    /**
     * @var string Last deactivation time of a RO instance in the RO group
     */
    public $OfflineTime;

    /**
     * @var integer RO instance weight in the RO group
     */
    public $Weight;

    /**
     * @var string RO instance region name, such as ap-shanghai
     */
    public $Region;

    /**
     * @var string Name of RO AZ, such as ap-shanghai-1
     */
    public $Zone;

    /**
     * @var string RO instance ID in the format of cdbro-c1nl9rpv
     */
    public $InstanceId;

    /**
     * @var integer RO instance status. Valid values: `0` (creating), `1` (running), `3` (remote RO), `4` (deleting). When the `DescribeDBInstances` API is used to query the information of the source instance, if the source instance is associated with a remote read-only instance, the returned status value of the remote read-only instance always shows 3.
     */
    public $Status;

    /**
     * @var integer Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
     */
    public $InstanceType;

    /**
     * @var string RO instance name
     */
    public $InstanceName;

    /**
     * @var integer Pay-as-you-go billing status. Value range: 1 (normal), 2 (in arrears)
     */
    public $HourFeeStatus;

    /**
     * @var integer RO instance task status. Value range: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - activating secondary <br>4 - public network access enabled <br>5 - batch operation in progress <br>6 - rolling back <br>7 - public network access not enabled <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built instance <br>13 - dropping table <br>14 - creating and syncing disaster recovery instance
     */
    public $TaskStatus;

    /**
     * @var integer RO instance memory size in MB
     */
    public $Memory;

    /**
     * @var integer RO instance disk size in GB
     */
    public $Volume;

    /**
     * @var integer Queries per second
     */
    public $Qps;

    /**
     * @var string Private IP address of the RO instance
     */
    public $Vip;

    /**
     * @var integer Access port of the RO instance
     */
    public $Vport;

    /**
     * @var integer VPC ID of the RO instance
     */
    public $VpcId;

    /**
     * @var integer VPC subnet ID of the RO instance
     */
    public $SubnetId;

    /**
     * @var string RO instance specification description. Value range: CUSTOM
     */
    public $DeviceType;

    /**
     * @var string Database engine version of the read-only replica. Valid values: `5.1`, `5.5`, `5.6`, `5.7`, `8.0`
     */
    public $EngineVersion;

    /**
     * @var string RO instance expiration time in the format of yyyy-mm-dd hh:mm:ss. If it is a pay-as-you-go instance, the value of this field is 0000-00-00 00:00:00
     */
    public $DeadlineTime;

    /**
     * @var integer RO instance billing method. Value range: 0 (monthly subscribed), 1 (pay-as-you-go), 2 (monthly postpaid)
     */
    public $PayType;

    /**
     * @param string $MasterInstanceId Master instance ID corresponding to the RO group
     * @param string $RoStatus RO instance status in the RO group. Value range: online, offline
     * @param string $OfflineTime Last deactivation time of a RO instance in the RO group
     * @param integer $Weight RO instance weight in the RO group
     * @param string $Region RO instance region name, such as ap-shanghai
     * @param string $Zone Name of RO AZ, such as ap-shanghai-1
     * @param string $InstanceId RO instance ID in the format of cdbro-c1nl9rpv
     * @param integer $Status RO instance status. Valid values: `0` (creating), `1` (running), `3` (remote RO), `4` (deleting). When the `DescribeDBInstances` API is used to query the information of the source instance, if the source instance is associated with a remote read-only instance, the returned status value of the remote read-only instance always shows 3.
     * @param integer $InstanceType Instance type. Value range: 1 (primary), 2 (disaster recovery), 3 (read-only)
     * @param string $InstanceName RO instance name
     * @param integer $HourFeeStatus Pay-as-you-go billing status. Value range: 1 (normal), 2 (in arrears)
     * @param integer $TaskStatus RO instance task status. Value range: <br>0 - no task <br>1 - upgrading <br>2 - importing data <br>3 - activating secondary <br>4 - public network access enabled <br>5 - batch operation in progress <br>6 - rolling back <br>7 - public network access not enabled <br>8 - modifying password <br>9 - renaming instance <br>10 - restarting <br>12 - migrating self-built instance <br>13 - dropping table <br>14 - creating and syncing disaster recovery instance
     * @param integer $Memory RO instance memory size in MB
     * @param integer $Volume RO instance disk size in GB
     * @param integer $Qps Queries per second
     * @param string $Vip Private IP address of the RO instance
     * @param integer $Vport Access port of the RO instance
     * @param integer $VpcId VPC ID of the RO instance
     * @param integer $SubnetId VPC subnet ID of the RO instance
     * @param string $DeviceType RO instance specification description. Value range: CUSTOM
     * @param string $EngineVersion Database engine version of the read-only replica. Valid values: `5.1`, `5.5`, `5.6`, `5.7`, `8.0`
     * @param string $DeadlineTime RO instance expiration time in the format of yyyy-mm-dd hh:mm:ss. If it is a pay-as-you-go instance, the value of this field is 0000-00-00 00:00:00
     * @param integer $PayType RO instance billing method. Value range: 0 (monthly subscribed), 1 (pay-as-you-go), 2 (monthly postpaid)
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
        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("RoStatus",$param) and $param["RoStatus"] !== null) {
            $this->RoStatus = $param["RoStatus"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("HourFeeStatus",$param) and $param["HourFeeStatus"] !== null) {
            $this->HourFeeStatus = $param["HourFeeStatus"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }
    }
}
