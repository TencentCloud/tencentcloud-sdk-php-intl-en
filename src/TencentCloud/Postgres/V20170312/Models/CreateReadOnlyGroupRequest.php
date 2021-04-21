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
 * CreateReadOnlyGroup request structure.
 *
 * @method string getMasterDBInstanceId() Obtain Primary instance ID
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set Primary instance ID
 * @method string getName() Obtain RO group name
 * @method void setName(string $Name) Set RO group name
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getReplayLagEliminate() Obtain Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) Set Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method integer getReplayLatencyEliminate() Obtain Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) Set Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method integer getMaxReplayLag() Obtain Delay threshold in ms
 * @method void setMaxReplayLag(integer $MaxReplayLag) Set Delay threshold in ms
 * @method integer getMaxReplayLatency() Obtain Delayed log size threshold in MB
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) Set Delayed log size threshold in MB
 * @method integer getMinDelayEliminateReserve() Obtain The minimum number of read-only replicas that must be retained in an RO group
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) Set The minimum number of read-only replicas that must be retained in an RO group
 * @method array getSecurityGroupIds() Obtain Security group ID
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID
 */
class CreateReadOnlyGroupRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID
     */
    public $MasterDBInstanceId;

    /**
     * @var string RO group name
     */
    public $Name;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     */
    public $ReplayLagEliminate;

    /**
     * @var integer Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     */
    public $ReplayLatencyEliminate;

    /**
     * @var integer Delay threshold in ms
     */
    public $MaxReplayLag;

    /**
     * @var integer Delayed log size threshold in MB
     */
    public $MaxReplayLatency;

    /**
     * @var integer The minimum number of read-only replicas that must be retained in an RO group
     */
    public $MinDelayEliminateReserve;

    /**
     * @var array Security group ID
     */
    public $SecurityGroupIds;

    /**
     * @param string $MasterDBInstanceId Primary instance ID
     * @param string $Name RO group name
     * @param integer $ProjectId Project ID
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param integer $ReplayLagEliminate Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param integer $ReplayLatencyEliminate Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param integer $MaxReplayLag Delay threshold in ms
     * @param integer $MaxReplayLatency Delayed log size threshold in MB
     * @param integer $MinDelayEliminateReserve The minimum number of read-only replicas that must be retained in an RO group
     * @param array $SecurityGroupIds Security group ID
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
        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ReplayLagEliminate",$param) and $param["ReplayLagEliminate"] !== null) {
            $this->ReplayLagEliminate = $param["ReplayLagEliminate"];
        }

        if (array_key_exists("ReplayLatencyEliminate",$param) and $param["ReplayLatencyEliminate"] !== null) {
            $this->ReplayLatencyEliminate = $param["ReplayLatencyEliminate"];
        }

        if (array_key_exists("MaxReplayLag",$param) and $param["MaxReplayLag"] !== null) {
            $this->MaxReplayLag = $param["MaxReplayLag"];
        }

        if (array_key_exists("MaxReplayLatency",$param) and $param["MaxReplayLatency"] !== null) {
            $this->MaxReplayLatency = $param["MaxReplayLatency"];
        }

        if (array_key_exists("MinDelayEliminateReserve",$param) and $param["MinDelayEliminateReserve"] !== null) {
            $this->MinDelayEliminateReserve = $param["MinDelayEliminateReserve"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
