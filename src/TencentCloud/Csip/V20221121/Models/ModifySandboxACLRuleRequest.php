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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySandboxACLRule request structure.
 *
 * @method integer getID() Obtain Rule ID
 * @method void setID(integer $ID) Set Rule ID
 * @method string getRuleName() Obtain Rule name
Input parameter limits: 1-128 in length
Default value: No modification if not specified.
 * @method void setRuleName(string $RuleName) Set Rule name
Input parameter limits: 1-128 in length
Default value: No modification if not specified.
 * @method string getLevel() Obtain Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
Default value: No modification if not specified.
 * @method void setLevel(string $Level) Set Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
Default value: No modification if not specified.
 * @method array getSystemRuleIDList() Obtain List of referenced system rule IDs.
Input parameter limits: pass an empty array to clear; omit it to skip modification.
 * @method void setSystemRuleIDList(array $SystemRuleIDList) Set List of referenced system rule IDs.
Input parameter limits: pass an empty array to clear; omit it to skip modification.
 * @method array getUserRuleContent() Obtain Content of user-defined rules
Input parameter limits: pass an empty array to clear; omit it to skip modification.
 * @method void setUserRuleContent(array $UserRuleContent) Set Content of user-defined rules
Input parameter limits: pass an empty array to clear; omit it to skip modification.
 * @method TrafficSandboxEffectScope getEffectScope() Obtain Effective scope
Default value: No modification if not specified.
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set Effective scope
Default value: No modification if not specified.
 * @method string getRuleAction() Obtain Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
Default value: No modification if not specified.
 * @method void setRuleAction(string $RuleAction) Set Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
Default value: No modification if not specified.
 * @method string getStatus() Obtain Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: No modification if not specified.
 * @method void setStatus(string $Status) Set Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: No modification if not specified.
 */
class ModifySandboxACLRuleRequest extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $ID;

    /**
     * @var string Rule name
Input parameter limits: 1-128 in length
Default value: No modification if not specified.
     */
    public $RuleName;

    /**
     * @var string Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
Default value: No modification if not specified.
     */
    public $Level;

    /**
     * @var array List of referenced system rule IDs.
Input parameter limits: pass an empty array to clear; omit it to skip modification.
     */
    public $SystemRuleIDList;

    /**
     * @var array Content of user-defined rules
Input parameter limits: pass an empty array to clear; omit it to skip modification.
     */
    public $UserRuleContent;

    /**
     * @var TrafficSandboxEffectScope Effective scope
Default value: No modification if not specified.
     */
    public $EffectScope;

    /**
     * @var string Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
Default value: No modification if not specified.
     */
    public $RuleAction;

    /**
     * @var string Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: No modification if not specified.
     */
    public $Status;

    /**
     * @param integer $ID Rule ID
     * @param string $RuleName Rule name
Input parameter limits: 1-128 in length
Default value: No modification if not specified.
     * @param string $Level Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
Default value: No modification if not specified.
     * @param array $SystemRuleIDList List of referenced system rule IDs.
Input parameter limits: pass an empty array to clear; omit it to skip modification.
     * @param array $UserRuleContent Content of user-defined rules
Input parameter limits: pass an empty array to clear; omit it to skip modification.
     * @param TrafficSandboxEffectScope $EffectScope Effective scope
Default value: No modification if not specified.
     * @param string $RuleAction Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
Default value: No modification if not specified.
     * @param string $Status Target Status
Enumeration values:
ON: enable
OFF: disabled.
Default value: No modification if not specified.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SystemRuleIDList",$param) and $param["SystemRuleIDList"] !== null) {
            $this->SystemRuleIDList = $param["SystemRuleIDList"];
        }

        if (array_key_exists("UserRuleContent",$param) and $param["UserRuleContent"] !== null) {
            $this->UserRuleContent = [];
            foreach ($param["UserRuleContent"] as $key => $value){
                $obj = new TrafficSandboxACLRuleContentItem();
                $obj->deserialize($value);
                array_push($this->UserRuleContent, $obj);
            }
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
