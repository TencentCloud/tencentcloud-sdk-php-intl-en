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
 * CreateAIWorkbenchTask request structure.
 *
 * @method string getName() Obtain <p>Task Name</p>
 * @method void setName(string $Name) Set <p>Task Name</p>
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
 * @method string getResourceMapId() Obtain <p>Associated resource map ID</p>
 * @method void setResourceMapId(string $ResourceMapId) Set <p>Associated resource map ID</p>
 * @method array getSkillIds() Obtain <p>Skill ID list</p>
 * @method void setSkillIds(array $SkillIds) Set <p>Skill ID list</p>
 * @method array getMcpEndpointIds() Obtain <p>MCP endpoint ID list</p>
 * @method void setMcpEndpointIds(array $McpEndpointIds) Set <p>MCP endpoint ID list</p>
 * @method integer getTimeoutSec() Obtain <p>Timeout (seconds)</p>
 * @method void setTimeoutSec(integer $TimeoutSec) Set <p>Timeout (seconds)</p>
 * @method integer getRetryCount() Obtain <p>Retry count</p>
 * @method void setRetryCount(integer $RetryCount) Set <p>Retry count</p>
 * @method boolean getEnabled() Obtain <p>Whether to enable</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable</p>
 */
class CreateAIWorkbenchTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Task Name</p>
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
     * @var string <p>Associated resource map ID</p>
     */
    public $ResourceMapId;

    /**
     * @var array <p>Skill ID list</p>
     */
    public $SkillIds;

    /**
     * @var array <p>MCP endpoint ID list</p>
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
     * @var boolean <p>Whether to enable</p>
     */
    public $Enabled;

    /**
     * @param string $Name <p>Task Name</p>
     * @param string $Description <p>Task description</p>
     * @param string $AgentId <p>Associated Agent ID</p>
     * @param string $PromptTemplate <p>Prompt Template</p>
     * @param string $OutputFormat <p>Output format: markdown / json</p>
     * @param string $TriggerType <p>Trigger type: manual / cron / webhook</p>
     * @param string $CronExpr <p>Cron expression</p>
     * @param string $CronTimezone <p>Cron time zone</p>
     * @param string $ResourceMapId <p>Associated resource map ID</p>
     * @param array $SkillIds <p>Skill ID list</p>
     * @param array $McpEndpointIds <p>MCP endpoint ID list</p>
     * @param integer $TimeoutSec <p>Timeout (seconds)</p>
     * @param integer $RetryCount <p>Retry count</p>
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

        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
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

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
