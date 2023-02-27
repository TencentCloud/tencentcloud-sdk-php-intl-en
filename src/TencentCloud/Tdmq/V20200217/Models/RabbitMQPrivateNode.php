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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for RabbitMQ node information
 *
 * @method string getNodeName() Obtain Node name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeName(string $NodeName) Set Node name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNodeStatus() Obtain Node status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNodeStatus(string $NodeStatus) Set Node status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCPUUsage() Obtain CPU utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCPUUsage(string $CPUUsage) Set CPU utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain Memory usage in MB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemory(integer $Memory) Set Memory usage in MB
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskUsage() Obtain Disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskUsage(string $DiskUsage) Set Disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProcessNumber() Obtain The number of RabbitMQ Erlang processes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessNumber(integer $ProcessNumber) Set The number of RabbitMQ Erlang processes
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RabbitMQPrivateNode extends AbstractModel
{
    /**
     * @var string Node name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeName;

    /**
     * @var string Node status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NodeStatus;

    /**
     * @var string CPU utilization
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CPUUsage;

    /**
     * @var integer Memory usage in MB
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var string Disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskUsage;

    /**
     * @var integer The number of RabbitMQ Erlang processes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessNumber;

    /**
     * @param string $NodeName Node name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $NodeStatus Node status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CPUUsage CPU utilization
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Memory Memory usage in MB
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskUsage Disk utilization
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProcessNumber The number of RabbitMQ Erlang processes
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
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeStatus",$param) and $param["NodeStatus"] !== null) {
            $this->NodeStatus = $param["NodeStatus"];
        }

        if (array_key_exists("CPUUsage",$param) and $param["CPUUsage"] !== null) {
            $this->CPUUsage = $param["CPUUsage"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("ProcessNumber",$param) and $param["ProcessNumber"] !== null) {
            $this->ProcessNumber = $param["ProcessNumber"];
        }
    }
}
