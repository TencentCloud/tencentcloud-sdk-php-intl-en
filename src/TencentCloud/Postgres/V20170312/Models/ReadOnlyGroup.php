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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RO group information
 *
 * @method string getReadOnlyGroupId() Obtain RO group identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getReadOnlyGroupName() Obtain RO group name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set RO group name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getMasterDBInstanceId() Obtain Primary instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set Primary instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMinDelayEliminateReserve() Obtain The minimum number of read-only replicas that must be retained in an RO group
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) Set The minimum number of read-only replicas that must be retained in an RO group
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxReplayLatency() Obtain Delayed log size threshold
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) Set Delayed log size threshold
 * @method integer getReplayLatencyEliminate() Obtain Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) Set Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method float getMaxReplayLag() Obtain Delay threshold
 * @method void setMaxReplayLag(float $MaxReplayLag) Set Delay threshold
 * @method integer getReplayLagEliminate() Obtain Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) Set Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region ID
 * @method void setRegion(string $Region) Set Region ID
 * @method string getZone() Obtain Availability zone ID
 * @method void setZone(string $Zone) Set Availability zone ID
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method array getReadOnlyDBInstanceList() Obtain Instance details
 * @method void setReadOnlyDBInstanceList(array $ReadOnlyDBInstanceList) Set Instance details
 * @method integer getRebalance() Obtain Whether to enable automatic load balancing
 * @method void setRebalance(integer $Rebalance) Set Whether to enable automatic load balancing
 * @method array getDBInstanceNetInfo() Obtain Network information
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) Set Network information
 * @method array getNetworkAccessList() Obtain Network access list of the RO group (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNetworkAccessList(array $NetworkAccessList) Set Network access list of the RO group (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ReadOnlyGroup extends AbstractModel
{
    /**
     * @var string RO group identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReadOnlyGroupId;

    /**
     * @var string RO group name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Primary instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MasterDBInstanceId;

    /**
     * @var integer The minimum number of read-only replicas that must be retained in an RO group
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MinDelayEliminateReserve;

    /**
     * @var integer Delayed log size threshold
     */
    public $MaxReplayLatency;

    /**
     * @var integer Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     */
    public $ReplayLatencyEliminate;

    /**
     * @var float Delay threshold
     */
    public $MaxReplayLag;

    /**
     * @var integer Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     */
    public $ReplayLagEliminate;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Region ID
     */
    public $Region;

    /**
     * @var string Availability zone ID
     */
    public $Zone;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var array Instance details
     */
    public $ReadOnlyDBInstanceList;

    /**
     * @var integer Whether to enable automatic load balancing
     */
    public $Rebalance;

    /**
     * @var array Network information
     */
    public $DBInstanceNetInfo;

    /**
     * @var array Network access list of the RO group (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NetworkAccessList;

    /**
     * @param string $ReadOnlyGroupId RO group identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ReadOnlyGroupName RO group name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $MasterDBInstanceId Primary instance ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MinDelayEliminateReserve The minimum number of read-only replicas that must be retained in an RO group
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxReplayLatency Delayed log size threshold
     * @param integer $ReplayLatencyEliminate Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param float $MaxReplayLag Delay threshold
     * @param integer $ReplayLagEliminate Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Region Region ID
     * @param string $Zone Availability zone ID
     * @param string $Status Status
     * @param array $ReadOnlyDBInstanceList Instance details
     * @param integer $Rebalance Whether to enable automatic load balancing
     * @param array $DBInstanceNetInfo Network information
     * @param array $NetworkAccessList Network access list of the RO group (this field has been deprecated)
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("MinDelayEliminateReserve",$param) and $param["MinDelayEliminateReserve"] !== null) {
            $this->MinDelayEliminateReserve = $param["MinDelayEliminateReserve"];
        }

        if (array_key_exists("MaxReplayLatency",$param) and $param["MaxReplayLatency"] !== null) {
            $this->MaxReplayLatency = $param["MaxReplayLatency"];
        }

        if (array_key_exists("ReplayLatencyEliminate",$param) and $param["ReplayLatencyEliminate"] !== null) {
            $this->ReplayLatencyEliminate = $param["ReplayLatencyEliminate"];
        }

        if (array_key_exists("MaxReplayLag",$param) and $param["MaxReplayLag"] !== null) {
            $this->MaxReplayLag = $param["MaxReplayLag"];
        }

        if (array_key_exists("ReplayLagEliminate",$param) and $param["ReplayLagEliminate"] !== null) {
            $this->ReplayLagEliminate = $param["ReplayLagEliminate"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReadOnlyDBInstanceList",$param) and $param["ReadOnlyDBInstanceList"] !== null) {
            $this->ReadOnlyDBInstanceList = [];
            foreach ($param["ReadOnlyDBInstanceList"] as $key => $value){
                $obj = new DBInstance();
                $obj->deserialize($value);
                array_push($this->ReadOnlyDBInstanceList, $obj);
            }
        }

        if (array_key_exists("Rebalance",$param) and $param["Rebalance"] !== null) {
            $this->Rebalance = $param["Rebalance"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new DBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("NetworkAccessList",$param) and $param["NetworkAccessList"] !== null) {
            $this->NetworkAccessList = [];
            foreach ($param["NetworkAccessList"] as $key => $value){
                $obj = new NetworkAccess();
                $obj->deserialize($value);
                array_push($this->NetworkAccessList, $obj);
            }
        }
    }
}
