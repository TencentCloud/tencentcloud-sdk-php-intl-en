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
 * Custom bot rules
 *
 * @method string getRuleName() Obtain 
 * @method void setRuleName(string $RuleName) Set 
 * @method string getAction() Obtain Action. Valid values: 
<li>`drop`: Block;</li>
<li>`monitor`: Observe;</li>
<li>`trans`: Allow;</li>
<li>`alg`: JavaScript challenge;</li>
<li>`captcha`: Managed challenge;</li>
<li>`random`: Random action;</li>
<li>`silence`: Silence;</li>
<li>`shortdelay`: Add short latency;</li>
<li>`longdelay`: Add long latency.</li>
 * @method void setAction(string $Action) Set Action. Valid values: 
<li>`drop`: Block;</li>
<li>`monitor`: Observe;</li>
<li>`trans`: Allow;</li>
<li>`alg`: JavaScript challenge;</li>
<li>`captcha`: Managed challenge;</li>
<li>`random`: Random action;</li>
<li>`silence`: Silence;</li>
<li>`shortdelay`: Add short latency;</li>
<li>`longdelay`: Add long latency.</li>
 * @method string getRuleStatus() Obtain The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
 * @method void setRuleStatus(string $RuleStatus) Set The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
 * @method array getAclConditions() Obtain Details of the rule.
 * @method void setAclConditions(array $AclConditions) Set Details of the rule.
 * @method integer getRulePriority() Obtain The rule weight. Value range: 0-100.
 * @method void setRulePriority(integer $RulePriority) Set The rule weight. Value range: 0-100.
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getExtendActions() Obtain [Currently unavailable] Specify the random action and percentage.
 * @method void setExtendActions(array $ExtendActions) Set [Currently unavailable] Specify the random action and percentage.
 * @method array getFreqFields() Obtain The filter. Values:
<li>`sip`: Client IP</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFreqFields(array $FreqFields) Set The filter. Values:
<li>`sip`: Client IP</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Updated time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Updated time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getFreqScope() Obtain The statistical dimension. Values:
<li>`source_to_eo`: Responses from the origin server to EdgeOne</li>
<li>`client_to_eo`: Requests from the client to EdgeOne</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFreqScope(array $FreqScope) Set The statistical dimension. Values:
<li>`source_to_eo`: Responses from the origin server to EdgeOne</li>
<li>`client_to_eo`: Requests from the client to EdgeOne</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class BotUserRule extends AbstractModel
{
    /**
     * @var string 
     */
    public $RuleName;

    /**
     * @var string Action. Valid values: 
<li>`drop`: Block;</li>
<li>`monitor`: Observe;</li>
<li>`trans`: Allow;</li>
<li>`alg`: JavaScript challenge;</li>
<li>`captcha`: Managed challenge;</li>
<li>`random`: Random action;</li>
<li>`silence`: Silence;</li>
<li>`shortdelay`: Add short latency;</li>
<li>`longdelay`: Add long latency.</li>
     */
    public $Action;

    /**
     * @var string The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
     */
    public $RuleStatus;

    /**
     * @var array Details of the rule.
     */
    public $AclConditions;

    /**
     * @var integer The rule weight. Value range: 0-100.
     */
    public $RulePriority;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RuleID;

    /**
     * @var array [Currently unavailable] Specify the random action and percentage.
     */
    public $ExtendActions;

    /**
     * @var array The filter. Values:
<li>`sip`: Client IP</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $FreqFields;

    /**
     * @var string Updated time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var array The statistical dimension. Values:
<li>`source_to_eo`: Responses from the origin server to EdgeOne</li>
<li>`client_to_eo`: Requests from the client to EdgeOne</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $FreqScope;

    /**
     * @param string $RuleName 
     * @param string $Action Action. Valid values: 
<li>`drop`: Block;</li>
<li>`monitor`: Observe;</li>
<li>`trans`: Allow;</li>
<li>`alg`: JavaScript challenge;</li>
<li>`captcha`: Managed challenge;</li>
<li>`random`: Random action;</li>
<li>`silence`: Silence;</li>
<li>`shortdelay`: Add short latency;</li>
<li>`longdelay`: Add long latency.</li>
     * @param string $RuleStatus The rule status. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>Default value: `on`
     * @param array $AclConditions Details of the rule.
     * @param integer $RulePriority The rule weight. Value range: 0-100.
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $ExtendActions [Currently unavailable] Specify the random action and percentage.
     * @param array $FreqFields The filter. Values:
<li>`sip`: Client IP</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $UpdateTime Updated time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $FreqScope The statistical dimension. Values:
<li>`source_to_eo`: Responses from the origin server to EdgeOne</li>
<li>`client_to_eo`: Requests from the client to EdgeOne</li>
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("AclConditions",$param) and $param["AclConditions"] !== null) {
            $this->AclConditions = [];
            foreach ($param["AclConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AclConditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("ExtendActions",$param) and $param["ExtendActions"] !== null) {
            $this->ExtendActions = [];
            foreach ($param["ExtendActions"] as $key => $value){
                $obj = new BotExtendAction();
                $obj->deserialize($value);
                array_push($this->ExtendActions, $obj);
            }
        }

        if (array_key_exists("FreqFields",$param) and $param["FreqFields"] !== null) {
            $this->FreqFields = $param["FreqFields"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FreqScope",$param) and $param["FreqScope"] !== null) {
            $this->FreqScope = $param["FreqScope"];
        }
    }
}
