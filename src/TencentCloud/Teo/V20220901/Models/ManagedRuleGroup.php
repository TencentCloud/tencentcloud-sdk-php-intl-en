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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed rule group configuration.
 *
 * @method string getGroupId() Obtain Name of the managed rule group, if the configuration for the rule group is not specified, it will be processed by default, refer to product documentation for the specific value of GroupId.
 * @method void setGroupId(string $GroupId) Set Name of the managed rule group, if the configuration for the rule group is not specified, it will be processed by default, refer to product documentation for the specific value of GroupId.
 * @method string getSensitivityLevel() Obtain Protection level of the managed rule group. Values: <li>`loose`: lenient, only contain ultra-high risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`normal`: normal, contain ultra-high risk and high-risk rules, at this point,Action parameter needs configured instead of RuleActions parameter;</li> <li>`strict`: strict, contains ultra-high risk, high-risk and medium-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`extreme`: super strict, contains ultra-high risk, high-risk, medium-risk and low-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`custom`: custom, refined strategy, configure the RuleActions parameter for each individual rule, at this point, the Action field is invalid, use RuleActions to configure the refined strategy for each individual rule.</li>.
 * @method void setSensitivityLevel(string $SensitivityLevel) Set Protection level of the managed rule group. Values: <li>`loose`: lenient, only contain ultra-high risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`normal`: normal, contain ultra-high risk and high-risk rules, at this point,Action parameter needs configured instead of RuleActions parameter;</li> <li>`strict`: strict, contains ultra-high risk, high-risk and medium-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`extreme`: super strict, contains ultra-high risk, high-risk, medium-risk and low-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`custom`: custom, refined strategy, configure the RuleActions parameter for each individual rule, at this point, the Action field is invalid, use RuleActions to configure the refined strategy for each individual rule.</li>.
 * @method SecurityAction getAction() Obtain Action for ManagedRuleGroup. the Name parameter value of SecurityAction supports: <li>`Deny`: block and respond with a block page;</li> <li>`Monitor`: observe, do not process requests and record security events in logs;</li> <li>`Disabled`: not enabled, do not scan requests and skip this rule.</li>.
 * @method void setAction(SecurityAction $Action) Set Action for ManagedRuleGroup. the Name parameter value of SecurityAction supports: <li>`Deny`: block and respond with a block page;</li> <li>`Monitor`: observe, do not process requests and record security events in logs;</li> <li>`Disabled`: not enabled, do not scan requests and skip this rule.</li>.
 * @method array getRuleActions() Obtain Specific configuration of rule items under the managed rule group, valid only when SensitivityLevel is custom.
 * @method void setRuleActions(array $RuleActions) Set Specific configuration of rule items under the managed rule group, valid only when SensitivityLevel is custom.
 * @method ManagedRuleGroupMeta getMetaData() Obtain ManagedRuleGroup detailed information, output parameter only.
 * @method void setMetaData(ManagedRuleGroupMeta $MetaData) Set ManagedRuleGroup detailed information, output parameter only.
 */
class ManagedRuleGroup extends AbstractModel
{
    /**
     * @var string Name of the managed rule group, if the configuration for the rule group is not specified, it will be processed by default, refer to product documentation for the specific value of GroupId.
     */
    public $GroupId;

    /**
     * @var string Protection level of the managed rule group. Values: <li>`loose`: lenient, only contain ultra-high risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`normal`: normal, contain ultra-high risk and high-risk rules, at this point,Action parameter needs configured instead of RuleActions parameter;</li> <li>`strict`: strict, contains ultra-high risk, high-risk and medium-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`extreme`: super strict, contains ultra-high risk, high-risk, medium-risk and low-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`custom`: custom, refined strategy, configure the RuleActions parameter for each individual rule, at this point, the Action field is invalid, use RuleActions to configure the refined strategy for each individual rule.</li>.
     */
    public $SensitivityLevel;

    /**
     * @var SecurityAction Action for ManagedRuleGroup. the Name parameter value of SecurityAction supports: <li>`Deny`: block and respond with a block page;</li> <li>`Monitor`: observe, do not process requests and record security events in logs;</li> <li>`Disabled`: not enabled, do not scan requests and skip this rule.</li>.
     */
    public $Action;

    /**
     * @var array Specific configuration of rule items under the managed rule group, valid only when SensitivityLevel is custom.
     */
    public $RuleActions;

    /**
     * @var ManagedRuleGroupMeta ManagedRuleGroup detailed information, output parameter only.
     */
    public $MetaData;

    /**
     * @param string $GroupId Name of the managed rule group, if the configuration for the rule group is not specified, it will be processed by default, refer to product documentation for the specific value of GroupId.
     * @param string $SensitivityLevel Protection level of the managed rule group. Values: <li>`loose`: lenient, only contain ultra-high risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`normal`: normal, contain ultra-high risk and high-risk rules, at this point,Action parameter needs configured instead of RuleActions parameter;</li> <li>`strict`: strict, contains ultra-high risk, high-risk and medium-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`extreme`: super strict, contains ultra-high risk, high-risk, medium-risk and low-risk rules, at this point, Action parameter needs configured instead of RuleActions parameter;</li> <li>`custom`: custom, refined strategy, configure the RuleActions parameter for each individual rule, at this point, the Action field is invalid, use RuleActions to configure the refined strategy for each individual rule.</li>.
     * @param SecurityAction $Action Action for ManagedRuleGroup. the Name parameter value of SecurityAction supports: <li>`Deny`: block and respond with a block page;</li> <li>`Monitor`: observe, do not process requests and record security events in logs;</li> <li>`Disabled`: not enabled, do not scan requests and skip this rule.</li>.
     * @param array $RuleActions Specific configuration of rule items under the managed rule group, valid only when SensitivityLevel is custom.
     * @param ManagedRuleGroupMeta $MetaData ManagedRuleGroup detailed information, output parameter only.
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
