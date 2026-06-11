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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Abnormal process policy list extension (standalone flat structure with rule content and execution action)
 *
 * @method array getChildRules() Obtain Sub-rule list of the user-defined policy. Has a value when IsDefault=false.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChildRules(array $ChildRules) Set Sub-rule list of the user-defined policy. Has a value when IsDefault=false.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEditUserName() Obtain Edit username
 * @method void setEditUserName(string $EditUserName) Set Edit username
 * @method integer getEffectImageCount() Obtain Policy enforcement image count
 * @method void setEffectImageCount(integer $EffectImageCount) Set Policy enforcement image count
 * @method boolean getIsDefault() Obtain true: default policy, false: custom policy
 * @method void setIsDefault(boolean $IsDefault) Set true: default policy, false: custom policy
 * @method boolean getIsGlobal() Obtain Whether the rule applies to all images. true indicates it takes effect on all images.
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether the rule applies to all images. true indicates it takes effect on all images.
 * @method boolean getIsEnable() Obtain true: Policy activation, false: Policy deactivation
 * @method void setIsEnable(boolean $IsEnable) Set true: Policy activation, false: Policy deactivation
 * @method array getRuleActions() Obtain Deduplicated list of ALL execution actions in the rule group. RULE_MODE_ALERT: Alert RULE_MODE_HOLDUP: Block
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleActions(array $RuleActions) Set Deduplicated list of ALL execution actions in the rule group. RULE_MODE_ALERT: Alert RULE_MODE_HOLDUP: Block
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleId() Obtain Policy ID
 * @method void setRuleId(string $RuleId) Set Policy ID
 * @method string getRuleName() Obtain Policy name
 * @method void setRuleName(string $RuleName) Set Policy name
 * @method array getSystemChildRules() Obtain Sub-rule list of system policy. Has value when IsDefault=true.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSystemChildRules(array $SystemChildRules) Set Sub-rule list of system policy. Has value when IsDefault=true.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Policy update time. May be empty.
 * @method void setUpdateTime(string $UpdateTime) Set Policy update time. May be empty.
 */
class AbnormalProcessRuleExtSetItem extends AbstractModel
{
    /**
     * @var array Sub-rule list of the user-defined policy. Has a value when IsDefault=false.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChildRules;

    /**
     * @var string Edit username
     */
    public $EditUserName;

    /**
     * @var integer Policy enforcement image count
     */
    public $EffectImageCount;

    /**
     * @var boolean true: default policy, false: custom policy
     */
    public $IsDefault;

    /**
     * @var boolean Whether the rule applies to all images. true indicates it takes effect on all images.
     */
    public $IsGlobal;

    /**
     * @var boolean true: Policy activation, false: Policy deactivation
     */
    public $IsEnable;

    /**
     * @var array Deduplicated list of ALL execution actions in the rule group. RULE_MODE_ALERT: Alert RULE_MODE_HOLDUP: Block
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleActions;

    /**
     * @var string Policy ID
     */
    public $RuleId;

    /**
     * @var string Policy name
     */
    public $RuleName;

    /**
     * @var array Sub-rule list of system policy. Has value when IsDefault=true.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SystemChildRules;

    /**
     * @var string Policy update time. May be empty.
     */
    public $UpdateTime;

    /**
     * @param array $ChildRules Sub-rule list of the user-defined policy. Has a value when IsDefault=false.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EditUserName Edit username
     * @param integer $EffectImageCount Policy enforcement image count
     * @param boolean $IsDefault true: default policy, false: custom policy
     * @param boolean $IsGlobal Whether the rule applies to all images. true indicates it takes effect on all images.
     * @param boolean $IsEnable true: Policy activation, false: Policy deactivation
     * @param array $RuleActions Deduplicated list of ALL execution actions in the rule group. RULE_MODE_ALERT: Alert RULE_MODE_HOLDUP: Block
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleId Policy ID
     * @param string $RuleName Policy name
     * @param array $SystemChildRules Sub-rule list of system policy. Has value when IsDefault=true.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Policy update time. May be empty.
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
        if (array_key_exists("ChildRules",$param) and $param["ChildRules"] !== null) {
            $this->ChildRules = [];
            foreach ($param["ChildRules"] as $key => $value){
                $obj = new AbnormalProcessChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->ChildRules, $obj);
            }
        }

        if (array_key_exists("EditUserName",$param) and $param["EditUserName"] !== null) {
            $this->EditUserName = $param["EditUserName"];
        }

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = $param["RuleActions"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("SystemChildRules",$param) and $param["SystemChildRules"] !== null) {
            $this->SystemChildRules = [];
            foreach ($param["SystemChildRules"] as $key => $value){
                $obj = new AbnormalProcessSystemChildRuleInfo();
                $obj->deserialize($value);
                array_push($this->SystemChildRules, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
