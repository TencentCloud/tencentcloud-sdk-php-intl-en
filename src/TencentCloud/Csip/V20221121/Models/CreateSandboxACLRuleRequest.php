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
 * CreateSandboxACLRule request structure.
 *
 * @method string getRuleName() Obtain Rule name
Input parameter limit: length 1-128
 * @method void setRuleName(string $RuleName) Set Rule name
Input parameter limit: length 1-128
 * @method string getLevel() Obtain Rule level
Enumeration values:
INFO: Notification.
LOW: low-risk
MEDIUM: Medium risk
HIGH: HIGH risk
CRITICAL: Critical
 * @method void setLevel(string $Level) Set Rule level
Enumeration values:
INFO: Notification.
LOW: low-risk
MEDIUM: Medium risk
HIGH: HIGH risk
CRITICAL: Critical
 * @method string getBelongAssetType() Obtain Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
 * @method void setBelongAssetType(string $BelongAssetType) Set Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
 * @method TrafficSandboxEffectScope getEffectScope() Obtain Effective scope
Input limitation: if EffectScope.EffectType is INCLUDE, EffectAssets must be non-empty.
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set Effective scope
Input limitation: if EffectScope.EffectType is INCLUDE, EffectAssets must be non-empty.
 * @method string getStatus() Obtain Initial status
Enumeration values:
ON: enable
OFF: disabled.
 * @method void setStatus(string $Status) Set Initial status
Enumeration values:
ON: enable
OFF: disabled.
 * @method string getRuleAction() Obtain Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
 * @method void setRuleAction(string $RuleAction) Set Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
 * @method array getSystemRuleIDList() Obtain List of referenced system rule IDs
Input limit: up to 100; provide at least one of this parameter and UserRuleContent
 * @method void setSystemRuleIDList(array $SystemRuleIDList) Set List of referenced system rule IDs
Input limit: up to 100; provide at least one of this parameter and UserRuleContent
 * @method array getUserRuleContent() Obtain Content of user-defined rules
Input parameter limit: up to 100 sub-rules; provide at least one of this parameter or SystemRuleIDList.
 * @method void setUserRuleContent(array $UserRuleContent) Set Content of user-defined rules
Input parameter limit: up to 100 sub-rules; provide at least one of this parameter or SystemRuleIDList.
 */
class CreateSandboxACLRuleRequest extends AbstractModel
{
    /**
     * @var string Rule name
Input parameter limit: length 1-128
     */
    public $RuleName;

    /**
     * @var string Rule level
Enumeration values:
INFO: Notification.
LOW: low-risk
MEDIUM: Medium risk
HIGH: HIGH risk
CRITICAL: Critical
     */
    public $Level;

    /**
     * @var string Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope Effective scope
Input limitation: if EffectScope.EffectType is INCLUDE, EffectAssets must be non-empty.
     */
    public $EffectScope;

    /**
     * @var string Initial status
Enumeration values:
ON: enable
OFF: disabled.
     */
    public $Status;

    /**
     * @var string Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
     */
    public $RuleAction;

    /**
     * @var array List of referenced system rule IDs
Input limit: up to 100; provide at least one of this parameter and UserRuleContent
     */
    public $SystemRuleIDList;

    /**
     * @var array Content of user-defined rules
Input parameter limit: up to 100 sub-rules; provide at least one of this parameter or SystemRuleIDList.
     */
    public $UserRuleContent;

    /**
     * @param string $RuleName Rule name
Input parameter limit: length 1-128
     * @param string $Level Rule level
Enumeration values:
INFO: Notification.
LOW: low-risk
MEDIUM: Medium risk
HIGH: HIGH risk
CRITICAL: Critical
     * @param string $BelongAssetType Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
     * @param TrafficSandboxEffectScope $EffectScope Effective scope
Input limitation: if EffectScope.EffectType is INCLUDE, EffectAssets must be non-empty.
     * @param string $Status Initial status
Enumeration values:
ON: enable
OFF: disabled.
     * @param string $RuleAction Rule action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: Alarm
     * @param array $SystemRuleIDList List of referenced system rule IDs
Input limit: up to 100; provide at least one of this parameter and UserRuleContent
     * @param array $UserRuleContent Content of user-defined rules
Input parameter limit: up to 100 sub-rules; provide at least one of this parameter or SystemRuleIDList.
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
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
    }
}
