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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getComputeNodeId() 获取Compute node ID
 * @method void setComputeNodeId(string $ComputeNodeId) 设置Compute node ID
 * @method string getComputeNodeInstanceId() 获取Compute node instance ID. In a CVM scenario, this parameter is the CVM InstanceId
 * @method void setComputeNodeInstanceId(string $ComputeNodeInstanceId) 设置Compute node instance ID. In a CVM scenario, this parameter is the CVM InstanceId
 * @method string getComputeNodeState() 获取Compute node state
 * @method void setComputeNodeState(string $ComputeNodeState) 设置Compute node state
 * @method integer getCpu() 获取Number of CPU cores
 * @method void setCpu(integer $Cpu) 设置Number of CPU cores
 * @method integer getMem() 获取Memory size in GiB
 * @method void setMem(integer $Mem) 设置Memory size in GiB
 * @method string getResourceCreatedTime() 获取Resource creation time
 * @method void setResourceCreatedTime(string $ResourceCreatedTime) 设置Resource creation time
 * @method integer getTaskInstanceNumAvailable() 获取Available capacity of the compute node when running TaskInstance. 0 means that the compute node is busy.
 * @method void setTaskInstanceNumAvailable(integer $TaskInstanceNumAvailable) 设置Available capacity of the compute node when running TaskInstance. 0 means that the compute node is busy.
 * @method string getAgentVersion() 获取BatchCompute Agent version
 * @method void setAgentVersion(string $AgentVersion) 设置BatchCompute Agent version
 * @method array getPrivateIpAddresses() 获取Private IP of the instance
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置Private IP of the instance
 * @method array getPublicIpAddresses() 获取Public IP of the instance
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置Public IP of the instance
 */

/**
 *Compute node
 */
class ComputeNode extends AbstractModel
{
    /**
     * @var string Compute node ID
     */
    public $ComputeNodeId;

    /**
     * @var string Compute node instance ID. In a CVM scenario, this parameter is the CVM InstanceId
     */
    public $ComputeNodeInstanceId;

    /**
     * @var string Compute node state
     */
    public $ComputeNodeState;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer Memory size in GiB
     */
    public $Mem;

    /**
     * @var string Resource creation time
     */
    public $ResourceCreatedTime;

    /**
     * @var integer Available capacity of the compute node when running TaskInstance. 0 means that the compute node is busy.
     */
    public $TaskInstanceNumAvailable;

    /**
     * @var string BatchCompute Agent version
     */
    public $AgentVersion;

    /**
     * @var array Private IP of the instance
     */
    public $PrivateIpAddresses;

    /**
     * @var array Public IP of the instance
     */
    public $PublicIpAddresses;
    /**
     * @param string $ComputeNodeId Compute node ID
     * @param string $ComputeNodeInstanceId Compute node instance ID. In a CVM scenario, this parameter is the CVM InstanceId
     * @param string $ComputeNodeState Compute node state
     * @param integer $Cpu Number of CPU cores
     * @param integer $Mem Memory size in GiB
     * @param string $ResourceCreatedTime Resource creation time
     * @param integer $TaskInstanceNumAvailable Available capacity of the compute node when running TaskInstance. 0 means that the compute node is busy.
     * @param string $AgentVersion BatchCompute Agent version
     * @param array $PrivateIpAddresses Private IP of the instance
     * @param array $PublicIpAddresses Public IP of the instance
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ComputeNodeId",$param) and $param["ComputeNodeId"] !== null) {
            $this->ComputeNodeId = $param["ComputeNodeId"];
        }

        if (array_key_exists("ComputeNodeInstanceId",$param) and $param["ComputeNodeInstanceId"] !== null) {
            $this->ComputeNodeInstanceId = $param["ComputeNodeInstanceId"];
        }

        if (array_key_exists("ComputeNodeState",$param) and $param["ComputeNodeState"] !== null) {
            $this->ComputeNodeState = $param["ComputeNodeState"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ResourceCreatedTime",$param) and $param["ResourceCreatedTime"] !== null) {
            $this->ResourceCreatedTime = $param["ResourceCreatedTime"];
        }

        if (array_key_exists("TaskInstanceNumAvailable",$param) and $param["TaskInstanceNumAvailable"] !== null) {
            $this->TaskInstanceNumAvailable = $param["TaskInstanceNumAvailable"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }
    }
}
