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
 * CreateReadOnlyGroup request structure.
 *
 * @method string getMasterDBInstanceId() Obtain Primary instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set Primary instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getName() Obtain Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
 * @method void setName(string $Name) Set Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
 * @method integer getProjectId() Obtain Project ID. default value is 0, means it belongs to the default project.
 * @method void setProjectId(integer $ProjectId) Set Project ID. default value is 0, means it belongs to the default project.
 * @method string getVpcId() Obtain VPC ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
 * @method void setVpcId(string $VpcId) Set VPC ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
 * @method string getSubnetId() Obtain Subnet ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
 * @method integer getReplayLagEliminate() Obtain Delay time size switch: 0 for off, 1 for on. this parameter is required.
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) Set Delay time size switch: 0 for off, 1 for on. this parameter is required.
 * @method integer getReplayLatencyEliminate() Obtain Delay space size switch: 0 for off, 1 for on. this parameter must match ReplayLagEliminate.
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) Set Delay space size switch: 0 for off, 1 for on. this parameter must match ReplayLagEliminate.
 * @method integer getMaxReplayLag() Obtain The size threshold of the delay time, a positive integer with unit: s. this parameter is required when ReplayLagEliminate is 1 and must be set to 0 when ReplayLagEliminate is 0.
 * @method void setMaxReplayLag(integer $MaxReplayLag) Set The size threshold of the delay time, a positive integer with unit: s. this parameter is required when ReplayLagEliminate is 1 and must be set to 0 when ReplayLagEliminate is 0.
 * @method integer getMaxReplayLatency() Obtain Delay threshold for space size, a positive integer in MB. this parameter is required when ReplayLatencyEliminate is 1 and must be set to 0 when ReplayLatencyEliminate is 0.
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) Set Delay threshold for space size, a positive integer in MB. this parameter is required when ReplayLatencyEliminate is 1 and must be set to 0 when ReplayLatencyEliminate is 0.
 * @method integer getMinDelayEliminateReserve() Obtain Specifies the minimum number of instances to retain with delay removal. value range [0,100]. this parameter is required when ReplayLatencyEliminate is 1 and invalid when ReplayLagEliminate is 0.
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) Set Specifies the minimum number of instances to retain with delay removal. value range [0,100]. this parameter is required when ReplayLatencyEliminate is 1 and invalid when ReplayLagEliminate is 0.
 * @method array getSecurityGroupIds() Obtain Security group ID
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID
 */
class CreateReadOnlyGroupRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $MasterDBInstanceId;

    /**
     * @var string Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
     */
    public $Name;

    /**
     * @var integer Project ID. default value is 0, means it belongs to the default project.
     */
    public $ProjectId;

    /**
     * @var string VPC ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
     */
    public $VpcId;

    /**
     * @var string Subnet ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
     */
    public $SubnetId;

    /**
     * @var integer Delay time size switch: 0 for off, 1 for on. this parameter is required.
     */
    public $ReplayLagEliminate;

    /**
     * @var integer Delay space size switch: 0 for off, 1 for on. this parameter must match ReplayLagEliminate.
     */
    public $ReplayLatencyEliminate;

    /**
     * @var integer The size threshold of the delay time, a positive integer with unit: s. this parameter is required when ReplayLagEliminate is 1 and must be set to 0 when ReplayLagEliminate is 0.
     */
    public $MaxReplayLag;

    /**
     * @var integer Delay threshold for space size, a positive integer in MB. this parameter is required when ReplayLatencyEliminate is 1 and must be set to 0 when ReplayLatencyEliminate is 0.
     */
    public $MaxReplayLatency;

    /**
     * @var integer Specifies the minimum number of instances to retain with delay removal. value range [0,100]. this parameter is required when ReplayLatencyEliminate is 1 and invalid when ReplayLagEliminate is 0.
     */
    public $MinDelayEliminateReserve;

    /**
     * @var array Security group ID
     */
    public $SecurityGroupIds;

    /**
     * @param string $MasterDBInstanceId Primary instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $Name Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
     * @param integer $ProjectId Project ID. default value is 0, means it belongs to the default project.
     * @param string $VpcId VPC ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
     * @param string $SubnetId Subnet ID. note: uses classic networks by default. currently, basic networks are not supported, so this parameter is required.
     * @param integer $ReplayLagEliminate Delay time size switch: 0 for off, 1 for on. this parameter is required.
     * @param integer $ReplayLatencyEliminate Delay space size switch: 0 for off, 1 for on. this parameter must match ReplayLagEliminate.
     * @param integer $MaxReplayLag The size threshold of the delay time, a positive integer with unit: s. this parameter is required when ReplayLagEliminate is 1 and must be set to 0 when ReplayLagEliminate is 0.
     * @param integer $MaxReplayLatency Delay threshold for space size, a positive integer in MB. this parameter is required when ReplayLatencyEliminate is 1 and must be set to 0 when ReplayLatencyEliminate is 0.
     * @param integer $MinDelayEliminateReserve Specifies the minimum number of instances to retain with delay removal. value range [0,100]. this parameter is required when ReplayLatencyEliminate is 1 and invalid when ReplayLagEliminate is 0.
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
