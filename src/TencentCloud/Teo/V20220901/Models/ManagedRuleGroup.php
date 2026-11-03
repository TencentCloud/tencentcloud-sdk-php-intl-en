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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed rule group configuration.
 *
 * @method string getGroupId() Obtain Group name of the managed rule. If no rule group is specified, the default configuration is used. For the specific value of GroupId, refer to the product documentation.
 * @method void setGroupId(string $GroupId) Set Group name of the managed rule. If no rule group is specified, the default configuration is used. For the specific value of GroupId, refer to the product documentation.
 * @method string getSensitivityLevel() Obtain Protection level of the managed rule group. Valid values: <li>loose: Loose. It only contains ultra-high risk rules. At this point, Action is required and RuleActions is invalid.</li><li>normal: Normal. It contains ultra-high risk and high-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>strict: Strict. It contains ultra-high risk, high-risk, and medium-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>extreme: Ultra-strict. It contains ultra-high risk, high-risk, medium-risk, and low-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>custom: Custom. Refined strategy. Configure the disposal method for each individual rule. At this point, the Action field is invalid. Use RuleActions to configure the refined strategy for individual rules.</li>	
 * @method void setSensitivityLevel(string $SensitivityLevel) Set Protection level of the managed rule group. Valid values: <li>loose: Loose. It only contains ultra-high risk rules. At this point, Action is required and RuleActions is invalid.</li><li>normal: Normal. It contains ultra-high risk and high-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>strict: Strict. It contains ultra-high risk, high-risk, and medium-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>extreme: Ultra-strict. It contains ultra-high risk, high-risk, medium-risk, and low-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>custom: Custom. Refined strategy. Configure the disposal method for each individual rule. At this point, the Action field is invalid. Use RuleActions to configure the refined strategy for individual rules.</li>	
 * @method SecurityAction getAction() Obtain Handling action of the managed rule group. Supported values for SecurityAction Name: <li>Deny: Block. Respond with an interception page;</li><li>Monitor: Observe. Do not process requests, log security events in logs;</li><li>Disabled: Not activated. Do not scan requests, skip this rule.</li>
 * @method void setAction(SecurityAction $Action) Set Handling action of the managed rule group. Supported values for SecurityAction Name: <li>Deny: Block. Respond with an interception page;</li><li>Monitor: Observe. Do not process requests, log security events in logs;</li><li>Disabled: Not activated. Do not scan requests, skip this rule.</li>
 * @method array getRuleActions() Obtain Specific configuration of rule items in the managed rule group. This configuration is effective only when SensitivityLevel is custom.
 * @method void setRuleActions(array $RuleActions) Set Specific configuration of rule items in the managed rule group. This configuration is effective only when SensitivityLevel is custom.
 * @method ManagedRuleGroupMeta getMetaData() Obtain Managed rule group information. This is an output-only parameter.	
 * @method void setMetaData(ManagedRuleGroupMeta $MetaData) Set Managed rule group information. This is an output-only parameter.	
 */
class ManagedRuleGroup extends AbstractModel
{
    /**
     * @var string Group name of the managed rule. If no rule group is specified, the default configuration is used. For the specific value of GroupId, refer to the product documentation.
     */
    public $GroupId;

    /**
     * @var string Protection level of the managed rule group. Valid values: <li>loose: Loose. It only contains ultra-high risk rules. At this point, Action is required and RuleActions is invalid.</li><li>normal: Normal. It contains ultra-high risk and high-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>strict: Strict. It contains ultra-high risk, high-risk, and medium-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>extreme: Ultra-strict. It contains ultra-high risk, high-risk, medium-risk, and low-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>custom: Custom. Refined strategy. Configure the disposal method for each individual rule. At this point, the Action field is invalid. Use RuleActions to configure the refined strategy for individual rules.</li>	
     */
    public $SensitivityLevel;

    /**
     * @var SecurityAction Handling action of the managed rule group. Supported values for SecurityAction Name: <li>Deny: Block. Respond with an interception page;</li><li>Monitor: Observe. Do not process requests, log security events in logs;</li><li>Disabled: Not activated. Do not scan requests, skip this rule.</li>
     */
    public $Action;

    /**
     * @var array Specific configuration of rule items in the managed rule group. This configuration is effective only when SensitivityLevel is custom.
     */
    public $RuleActions;

    /**
     * @var ManagedRuleGroupMeta Managed rule group information. This is an output-only parameter.	
     */
    public $MetaData;

    /**
     * @param string $GroupId Group name of the managed rule. If no rule group is specified, the default configuration is used. For the specific value of GroupId, refer to the product documentation.
     * @param string $SensitivityLevel Protection level of the managed rule group. Valid values: <li>loose: Loose. It only contains ultra-high risk rules. At this point, Action is required and RuleActions is invalid.</li><li>normal: Normal. It contains ultra-high risk and high-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>strict: Strict. It contains ultra-high risk, high-risk, and medium-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>extreme: Ultra-strict. It contains ultra-high risk, high-risk, medium-risk, and low-risk rules. At this point, Action is required and RuleActions is invalid.</li><li>custom: Custom. Refined strategy. Configure the disposal method for each individual rule. At this point, the Action field is invalid. Use RuleActions to configure the refined strategy for individual rules.</li>	
     * @param SecurityAction $Action Handling action of the managed rule group. Supported values for SecurityAction Name: <li>Deny: Block. Respond with an interception page;</li><li>Monitor: Observe. Do not process requests, log security events in logs;</li><li>Disabled: Not activated. Do not scan requests, skip this rule.</li>
     * @param array $RuleActions Specific configuration of rule items in the managed rule group. This configuration is effective only when SensitivityLevel is custom.
     * @param ManagedRuleGroupMeta $MetaData Managed rule group information. This is an output-only parameter.	
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SensitivityLevel",$param) and $param["SensitivityLevel"] !== null) {
            $this->SensitivityLevel = $param["SensitivityLevel"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = [];
            foreach ($param["RuleActions"] as $key => $value){
                $obj = new ManagedRuleAction();
                $obj->deserialize($value);
                array_push($this->RuleActions, $obj);
            }
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new ManagedRuleGroupMeta();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
