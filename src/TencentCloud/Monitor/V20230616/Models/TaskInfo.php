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
 * Task entity
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getName() Obtain <p>Task name</p>
 * @method void setName(string $Name) Set <p>Task name</p>
 * @method string getDescription() Obtain <p>Task description</p>
 * @method void setDescription(string $Description) Set <p>Task description</p>
 * @method string getAgentId() Obtain <p>Associated Agent ID</p>
 * @method void setAgentId(string $AgentId) Set <p>Associated Agent ID</p>
 * @method string getPromptTemplate() Obtain <p>Prompt Template</p>
 * @method void setPromptTemplate(string $PromptTemplate) Set <p>Prompt Template</p>
 * @method string getOutputFormat() Obtain <p>Output format: markdown / json</p>
 * @method void setOutputFormat(string $OutputFormat) Set <p>Output format: markdown / json</p>
 * @method string getTriggerType() Obtain <p>Trigger type: manual / cron / webhook</p>
 * @method void setTriggerType(string $TriggerType) Set <p>Trigger type: manual / cron / webhook</p>
 * @method string getCronExpr() Obtain <p>Cron expression</p>
 * @method void setCronExpr(string $CronExpr) Set <p>Cron expression</p>
 * @method string getCronTimezone() Obtain <p>Cron time zone</p>
 * @method void setCronTimezone(string $CronTimezone) Set <p>Cron time zone</p>
 * @method array getSkillIds() Obtain <p>List of associated skill IDs.</p>
 * @method void setSkillIds(array $SkillIds) Set <p>List of associated skill IDs.</p>
 * @method array getMcpEndpointIds() Obtain <p>Associated MCP endpoint ID list</p>
 * @method void setMcpEndpointIds(array $McpEndpointIds) Set <p>Associated MCP endpoint ID list</p>
 * @method integer getTimeoutSec() Obtain <p>Timeout (seconds)</p>
 * @method void setTimeoutSec(integer $TimeoutSec) Set <p>Timeout (seconds)</p>
 * @method integer getRetryCount() Obtain <p>Retry count</p>
 * @method void setRetryCount(integer $RetryCount) Set <p>Retry count</p>
 * @method array getNotifyIds() Obtain <p>Notification id</p>
 * @method void setNotifyIds(array $NotifyIds) Set <p>Notification id</p>
 * @method boolean getEnabled() Obtain <p>Whether to enable</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable</p>
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task name</p>
     */
    public $Name;

    /**
     * @var string <p>Task description</p>
     */
    public $Description;

    /**
     * @var string <p>Associated Agent ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Prompt Template</p>
     */
    public $PromptTemplate;

    /**
     * @var string <p>Output format: markdown / json</p>
     */
    public $OutputFormat;

    /**
     * @var string <p>Trigger type: manual / cron / webhook</p>
     */
    public $TriggerType;

    /**
     * @var string <p>Cron expression</p>
     */
    public $CronExpr;

    /**
     * @var string <p>Cron time zone</p>
     */
    public $CronTimezone;

    /**
     * @var array <p>List of associated skill IDs.</p>
     */
    public $SkillIds;

    /**
     * @var array <p>Associated MCP endpoint ID list</p>
     */
    public $McpEndpointIds;

    /**
     * @var integer <p>Timeout (seconds)</p>
     */
    public $TimeoutSec;

    /**
     * @var integer <p>Retry count</p>
     */
    public $RetryCount;

    /**
     * @var array <p>Notification id</p>
     */
    public $NotifyIds;

    /**
     * @var boolean <p>Whether to enable</p>
     */
    public $Enabled;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $Name <p>Task name</p>
     * @param string $Description <p>Task description</p>
     * @param string $AgentId <p>Associated Agent ID</p>
     * @param string $PromptTemplate <p>Prompt Template</p>
     * @param string $OutputFormat <p>Output format: markdown / json</p>
     * @param string $TriggerType <p>Trigger type: manual / cron / webhook</p>
     * @param string $CronExpr <p>Cron expression</p>
     * @param string $CronTimezone <p>Cron time zone</p>
     * @param array $SkillIds <p>List of associated skill IDs.</p>
     * @param array $McpEndpointIds <p>Associated MCP endpoint ID list</p>
     * @param integer $TimeoutSec <p>Timeout (seconds)</p>
     * @param integer $RetryCount <p>Retry count</p>
     * @param array $NotifyIds <p>Notification id</p>
     * @param boolean $Enabled <p>Whether to enable</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("PromptTemplate",$param) and $param["PromptTemplate"] !== null) {
            $this->PromptTemplate = $param["PromptTemplate"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("CronExpr",$param) and $param["CronExpr"] !== null) {
            $this->CronExpr = $param["CronExpr"];
        }

        if (array_key_exists("CronTimezone",$param) and $param["CronTimezone"] !== null) {
            $this->CronTimezone = $param["CronTimezone"];
        }

        if (array_key_exists("SkillIds",$param) and $param["SkillIds"] !== null) {
            $this->SkillIds = $param["SkillIds"];
        }

        if (array_key_exists("McpEndpointIds",$param) and $param["McpEndpointIds"] !== null) {
            $this->McpEndpointIds = $param["McpEndpointIds"];
        }

        if (array_key_exists("TimeoutSec",$param) and $param["TimeoutSec"] !== null) {
            $this->TimeoutSec = $param["TimeoutSec"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("NotifyIds",$param) and $param["NotifyIds"] !== null) {
            $this->NotifyIds = $param["NotifyIds"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
