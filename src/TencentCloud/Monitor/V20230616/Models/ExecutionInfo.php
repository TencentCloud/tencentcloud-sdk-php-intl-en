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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Execution record entity
 *
 * @method string getName() Obtain <p>Task name</p>
 * @method void setName(string $Name) Set <p>Task name</p>
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getExecutionId() Obtain <p>Execution ID</p>
 * @method void setExecutionId(string $ExecutionId) Set <p>Execution ID</p>
 * @method string getAgentId() Obtain <p>Agent ID</p>
 * @method void setAgentId(string $AgentId) Set <p>Agent ID</p>
 * @method string getSessionId() Obtain <p>Session ID</p>
 * @method void setSessionId(string $SessionId) Set <p>Session ID</p>
 * @method string getTriggerType() Obtain <p>Trigger type: manual / cron / webhook</p>
 * @method void setTriggerType(string $TriggerType) Set <p>Trigger type: manual / cron / webhook</p>
 * @method string getStatus() Obtain <p>Status: pending/running/completed/failed/timeout/cancelled</p>
 * @method void setStatus(string $Status) Set <p>Status: pending/running/completed/failed/timeout/cancelled</p>
 * @method string getSummary() Obtain <p>Execution Abstract</p>
 * @method void setSummary(string $Summary) Set <p>Execution Abstract</p>
 * @method integer getDurationMs() Obtain <p>Execution time (ms)</p>
 * @method void setDurationMs(integer $DurationMs) Set <p>Execution time (ms)</p>
 */
class ExecutionInfo extends AbstractModel
{
    /**
     * @var string <p>Task name</p>
     */
    public $Name;

    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Execution ID</p>
     */
    public $ExecutionId;

    /**
     * @var string <p>Agent ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Session ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Trigger type: manual / cron / webhook</p>
     */
    public $TriggerType;

    /**
     * @var string <p>Status: pending/running/completed/failed/timeout/cancelled</p>
     */
    public $Status;

    /**
     * @var string <p>Execution Abstract</p>
     */
    public $Summary;

    /**
     * @var integer <p>Execution time (ms)</p>
     */
    public $DurationMs;

    /**
     * @param string $Name <p>Task name</p>
     * @param string $TaskId <p>Task ID.</p>
     * @param string $ExecutionId <p>Execution ID</p>
     * @param string $AgentId <p>Agent ID</p>
     * @param string $SessionId <p>Session ID</p>
     * @param string $TriggerType <p>Trigger type: manual / cron / webhook</p>
     * @param string $Status <p>Status: pending/running/completed/failed/timeout/cancelled</p>
     * @param string $Summary <p>Execution Abstract</p>
     * @param integer $DurationMs <p>Execution time (ms)</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }
    }
}
