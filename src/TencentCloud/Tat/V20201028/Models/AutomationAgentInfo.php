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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TAT agent information
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getVersion() Obtain Agent version.
 * @method void setVersion(string $Version) Set Agent version.
 * @method string getLastHeartbeatTime() Obtain Last heartbeat time
 * @method void setLastHeartbeatTime(string $LastHeartbeatTime) Set Last heartbeat time
 * @method string getAgentStatus() Obtain Agent status. Valid values:
<li> `Online`
<li> `Offline`
 * @method void setAgentStatus(string $AgentStatus) Set Agent status. Valid values:
<li> `Online`
<li> `Offline`
 * @method string getEnvironment() Obtain Agent runtime environment. Valid values:
<li> `Linux`: Linux instance
<li> `Windows`: Windows instance
 * @method void setEnvironment(string $Environment) Set Agent runtime environment. Valid values:
<li> `Linux`: Linux instance
<li> `Windows`: Windows instance
 * @method array getSupportFeatures() Obtain Features supported by the TAT agent.
 * @method void setSupportFeatures(array $SupportFeatures) Set Features supported by the TAT agent.
 */
class AutomationAgentInfo extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Agent version.
     */
    public $Version;

    /**
     * @var string Last heartbeat time
     */
    public $LastHeartbeatTime;

    /**
     * @var string Agent status. Valid values:
<li> `Online`
<li> `Offline`
     */
    public $AgentStatus;

    /**
     * @var string Agent runtime environment. Valid values:
<li> `Linux`: Linux instance
<li> `Windows`: Windows instance
     */
    public $Environment;

    /**
     * @var array Features supported by the TAT agent.
     */
    public $SupportFeatures;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $Version Agent version.
     * @param string $LastHeartbeatTime Last heartbeat time
     * @param string $AgentStatus Agent status. Valid values:
<li> `Online`
<li> `Offline`
     * @param string $Environment Agent runtime environment. Valid values:
<li> `Linux`: Linux instance
<li> `Windows`: Windows instance
     * @param array $SupportFeatures Features supported by the TAT agent.
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LastHeartbeatTime",$param) and $param["LastHeartbeatTime"] !== null) {
            $this->LastHeartbeatTime = $param["LastHeartbeatTime"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("SupportFeatures",$param) and $param["SupportFeatures"] !== null) {
            $this->SupportFeatures = $param["SupportFeatures"];
        }
    }
}
