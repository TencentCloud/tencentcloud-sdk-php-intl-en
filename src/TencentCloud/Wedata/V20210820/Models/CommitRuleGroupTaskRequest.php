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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommitRuleGroupTask request structure.
 *
 * @method integer getRuleGroupId() Obtain Rule Group ID
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
 * @method integer getTriggerType() Obtain Trigger Type 1. Manual Trigger 2. In-process Scheduling Trigger 3. Periodic Scheduling Trigger
 * @method void setTriggerType(integer $TriggerType) Set Trigger Type 1. Manual Trigger 2. In-process Scheduling Trigger 3. Periodic Scheduling Trigger
 * @method array getExecRuleConfig() Obtain Rule Configuration List
 * @method void setExecRuleConfig(array $ExecRuleConfig) Set Rule Configuration List
 * @method RuleExecConfig getExecConfig() Obtain Execution configuration
 * @method void setExecConfig(RuleExecConfig $ExecConfig) Set Execution configuration
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getEngineType() Obtain The execution engine that this rule runs. If this parameter is not passed, the default execution engine under this data source will be requested.
 * @method void setEngineType(string $EngineType) Set The execution engine that this rule runs. If this parameter is not passed, the default execution engine under this data source will be requested.
 */
class CommitRuleGroupTaskRequest extends AbstractModel
{
    /**
     * @var integer Rule Group ID
     */
    public $RuleGroupId;

    /**
     * @var integer Trigger Type 1. Manual Trigger 2. In-process Scheduling Trigger 3. Periodic Scheduling Trigger
     */
    public $TriggerType;

    /**
     * @var array Rule Configuration List
     */
    public $ExecRuleConfig;

    /**
     * @var RuleExecConfig Execution configuration
     */
    public $ExecConfig;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string The execution engine that this rule runs. If this parameter is not passed, the default execution engine under this data source will be requested.
     */
    public $EngineType;

    /**
     * @param integer $RuleGroupId Rule Group ID
     * @param integer $TriggerType Trigger Type 1. Manual Trigger 2. In-process Scheduling Trigger 3. Periodic Scheduling Trigger
     * @param array $ExecRuleConfig Rule Configuration List
     * @param RuleExecConfig $ExecConfig Execution configuration
     * @param string $ProjectId Project ID
     * @param string $EngineType The execution engine that this rule runs. If this parameter is not passed, the default execution engine under this data source will be requested.
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ExecRuleConfig",$param) and $param["ExecRuleConfig"] !== null) {
            $this->ExecRuleConfig = [];
            foreach ($param["ExecRuleConfig"] as $key => $value){
                $obj = new RuleConfig();
                $obj->deserialize($value);
                array_push($this->ExecRuleConfig, $obj);
            }
        }

        if (array_key_exists("ExecConfig",$param) and $param["ExecConfig"] !== null) {
            $this->ExecConfig = new RuleExecConfig();
            $this->ExecConfig->deserialize($param["ExecConfig"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
