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
 * prometheus agent
 *
 * @method string getName() Obtain Agent name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Agent name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAgentId() Obtain Agent ID
 * @method void setAgentId(string $AgentId) Set Agent ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getIpv4() Obtain Agent IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpv4(string $Ipv4) Set Agent IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHeartbeatTime() Obtain Heartbeat time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeartbeatTime(string $HeartbeatTime) Set Heartbeat time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastError() Obtain Last error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastError(string $LastError) Set Last error
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAgentVersion() Obtain Agent version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAgentVersion(string $AgentVersion) Set Agent version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Agent status
 * @method void setStatus(integer $Status) Set Agent status
 */
class PrometheusAgent extends AbstractModel
{
    /**
     * @var string Agent name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Agent ID
     */
    public $AgentId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Agent IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv4;

    /**
     * @var string Heartbeat time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HeartbeatTime;

    /**
     * @var string Last error
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastError;

    /**
     * @var string Agent version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AgentVersion;

    /**
     * @var integer Agent status
     */
    public $Status;

    /**
     * @param string $Name Agent name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AgentId Agent ID
     * @param string $InstanceId Instance ID
     * @param string $Ipv4 Agent IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HeartbeatTime Heartbeat time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastError Last error
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AgentVersion Agent version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Agent status
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ipv4",$param) and $param["Ipv4"] !== null) {
            $this->Ipv4 = $param["Ipv4"];
        }

        if (array_key_exists("HeartbeatTime",$param) and $param["HeartbeatTime"] !== null) {
            $this->HeartbeatTime = $param["HeartbeatTime"];
        }

        if (array_key_exists("LastError",$param) and $param["LastError"] !== null) {
            $this->LastError = $param["LastError"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
