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
 * LLM audit user rule data structure
 *
 * @method integer getID() Obtain Rule ID
 * @method void setID(integer $ID) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getLevel() Obtain Rule level
Enumeration value:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
 * @method void setLevel(string $Level) Set Rule level
Enumeration value:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
 * @method string getStatus() Obtain Rule status
Enumeration value:
ON: enabled.
OFF: disabled.
 * @method void setStatus(string $Status) Set Rule status
Enumeration value:
ON: enabled.
OFF: disabled.
 * @method string getBelongAssetType() Obtain Asset type of the affiliation
Enumeration value:
HOST: host
CONTAINER: container
 * @method void setBelongAssetType(string $BelongAssetType) Set Asset type of the affiliation
Enumeration value:
HOST: host
CONTAINER: container
 * @method array getSystemRuleRefs() Obtain List of referenced system rules (including system rule names)
 * @method void setSystemRuleRefs(array $SystemRuleRefs) Set List of referenced system rules (including system rule names)
 * @method TrafficSandboxEffectScope getEffectScope() Obtain Effective scope of the rule
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set Effective scope of the rule
 * @method array getInactiveAssets() Obtain List of ineffective assets: AI Agent assets in the policy association targets' effective assets where the traffic sandbox plug-in is not installed (TrafficPluginState.InstallStatus is not INSTALLED). Returns the InstanceId / ContainerId and TrafficPluginState of the machines. Returns an empty array if there are no ineffective assets.
 * @method void setInactiveAssets(array $InactiveAssets) Set List of ineffective assets: AI Agent assets in the policy association targets' effective assets where the traffic sandbox plug-in is not installed (TrafficPluginState.InstallStatus is not INSTALLED). Returns the InstanceId / ContainerId and TrafficPluginState of the machines. Returns an empty array if there are no ineffective assets.
 * @method string getInsertTime() Obtain Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO 8601 format)
 * @method void setInsertTime(string $InsertTime) Set Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO 8601 format)
 * @method string getUpdateTime() Obtain Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method string getRuleAction() Obtain Rule Action
Enumeration value:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
 * @method void setRuleAction(string $RuleAction) Set Rule Action
Enumeration value:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
 */
class TrafficSandboxLLMAuditRuleInfo extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $ID;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule level
Enumeration value:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
     */
    public $Level;

    /**
     * @var string Rule status
Enumeration value:
ON: enabled.
OFF: disabled.
     */
    public $Status;

    /**
     * @var string Asset type of the affiliation
Enumeration value:
HOST: host
CONTAINER: container
     */
    public $BelongAssetType;

    /**
     * @var array List of referenced system rules (including system rule names)
     */
    public $SystemRuleRefs;

    /**
     * @var TrafficSandboxEffectScope Effective scope of the rule
     */
    public $EffectScope;

    /**
     * @var array List of ineffective assets: AI Agent assets in the policy association targets' effective assets where the traffic sandbox plug-in is not installed (TrafficPluginState.InstallStatus is not INSTALLED). Returns the InstanceId / ContainerId and TrafficPluginState of the machines. Returns an empty array if there are no ineffective assets.
     */
    public $InactiveAssets;

    /**
     * @var string Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO 8601 format)
     */
    public $InsertTime;

    /**
     * @var string Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     */
    public $UpdateTime;

    /**
     * @var string Rule Action
Enumeration value:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
     */
    public $RuleAction;

    /**
     * @param integer $ID Rule ID
     * @param string $RuleName Rule name
     * @param string $Level Rule level
Enumeration value:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
     * @param string $Status Rule status
Enumeration value:
ON: enabled.
OFF: disabled.
     * @param string $BelongAssetType Asset type of the affiliation
Enumeration value:
HOST: host
CONTAINER: container
     * @param array $SystemRuleRefs List of referenced system rules (including system rule names)
     * @param TrafficSandboxEffectScope $EffectScope Effective scope of the rule
     * @param array $InactiveAssets List of ineffective assets: AI Agent assets in the policy association targets' effective assets where the traffic sandbox plug-in is not installed (TrafficPluginState.InstallStatus is not INSTALLED). Returns the InstanceId / ContainerId and TrafficPluginState of the machines. Returns an empty array if there are no ineffective assets.
     * @param string $InsertTime Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO 8601 format)
     * @param string $UpdateTime Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     * @param string $RuleAction Rule Action
Enumeration value:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("SystemRuleRefs",$param) and $param["SystemRuleRefs"] !== null) {
            $this->SystemRuleRefs = [];
            foreach ($param["SystemRuleRefs"] as $key => $value){
                $obj = new TrafficSandboxLLMAuditRuleRef();
                $obj->deserialize($value);
                array_push($this->SystemRuleRefs, $obj);
            }
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("InactiveAssets",$param) and $param["InactiveAssets"] !== null) {
            $this->InactiveAssets = [];
            foreach ($param["InactiveAssets"] as $key => $value){
                $obj = new TrafficSandboxInactiveAsset();
                $obj->deserialize($value);
                array_push($this->InactiveAssets, $obj);
            }
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }
    }
}
