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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RO group information
 *
 * @method string getReadOnlyGroupId() Obtain RO group identifier.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group identifier.
 * @method string getReadOnlyGroupName() Obtain Specifies the read-only group name.
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set Specifies the read-only group name.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getMasterDBInstanceId() Obtain Primary instance id.
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set Primary instance id.
 * @method integer getMinDelayEliminateReserve() Obtain Specifies the minimum number of instances to retain.
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) Set Specifies the minimum number of instances to retain.
 * @method integer getMaxReplayLatency() Obtain Specifies the delay threshold for space size in MB.
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) Set Specifies the delay threshold for space size in MB.
 * @method integer getReplayLatencyEliminate() Obtain Specifies the delay size switch. valid values: 0 - turn off; 1 - turn on.
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) Set Specifies the delay size switch. valid values: 0 - turn off; 1 - turn on.
 * @method float getMaxReplayLag() Obtain Delay time size threshold, in seconds.
 * @method void setMaxReplayLag(float $MaxReplayLag) Set Delay time size threshold, in seconds.
 * @method integer getReplayLagEliminate() Obtain Delay time switch. 0 - turn off. 1 - turn on.
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) Set Delay time switch. 0 - turn off. 1 - turn on.
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getRegion() Obtain Region ID
 * @method void setRegion(string $Region) Set Region ID
 * @method string getZone() Obtain Availability zone ID
 * @method void setZone(string $Zone) Set Availability zone ID
 * @method string getStatus() Obtain Status. valid values: creating, ok, modifying, deleting, deleted.
 * @method void setStatus(string $Status) Set Status. valid values: creating, ok, modifying, deleting, deleted.
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
     * @var string RO group identifier.
     */
    public $ReadOnlyGroupId;

    /**
     * @var string Specifies the read-only group name.
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string Primary instance id.
     */
    public $MasterDBInstanceId;

    /**
     * @var integer Specifies the minimum number of instances to retain.
     */
    public $MinDelayEliminateReserve;

    /**
     * @var integer Specifies the delay threshold for space size in MB.
     */
    public $MaxReplayLatency;

    /**
     * @var integer Specifies the delay size switch. valid values: 0 - turn off; 1 - turn on.
     */
    public $ReplayLatencyEliminate;

    /**
     * @var float Delay time size threshold, in seconds.
     */
    public $MaxReplayLag;

    /**
     * @var integer Delay time switch. 0 - turn off. 1 - turn on.
     */
    public $ReplayLagEliminate;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
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
     * @var string Status. valid values: creating, ok, modifying, deleting, deleted.
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
     * @param string $ReadOnlyGroupId RO group identifier.
     * @param string $ReadOnlyGroupName Specifies the read-only group name.
     * @param integer $ProjectId Project ID.
     * @param string $MasterDBInstanceId Primary instance id.
     * @param integer $MinDelayEliminateReserve Specifies the minimum number of instances to retain.
     * @param integer $MaxReplayLatency Specifies the delay threshold for space size in MB.
     * @param integer $ReplayLatencyEliminate Specifies the delay size switch. valid values: 0 - turn off; 1 - turn on.
     * @param float $MaxReplayLag Delay time size threshold, in seconds.
     * @param integer $ReplayLagEliminate Delay time switch. 0 - turn off. 1 - turn on.
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $Region Region ID
     * @param string $Zone Availability zone ID
     * @param string $Status Status. valid values: creating, ok, modifying, deleting, deleted.
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
