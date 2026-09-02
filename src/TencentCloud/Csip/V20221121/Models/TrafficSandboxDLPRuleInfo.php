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
 * Data structure of the DLP user rule
 *
 * @method integer getID() Obtain Rule ID
 * @method void setID(integer $ID) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getLevel() Obtain Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
 * @method void setLevel(string $Level) Set Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
 * @method string getStatus() Obtain Rule status
Enumeration values:
ON: enable
OFF: disabled.
 * @method void setStatus(string $Status) Set Rule status
Enumeration values:
ON: enable
OFF: disabled.
 * @method string getBelongAssetType() Obtain Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
 * @method void setBelongAssetType(string $BelongAssetType) Set Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
 * @method array getSystemRuleContent() Obtain Snapshot of the referenced system rule content
 * @method void setSystemRuleContent(array $SystemRuleContent) Set Snapshot of the referenced system rule content
 * @method array getUserRuleContent() Obtain Content of the user-defined rule
 * @method void setUserRuleContent(array $UserRuleContent) Set Content of the user-defined rule
 * @method TrafficSandboxDLPUserRuleInfo getUserRuleInfo() Obtain Structured view of user rules, returning rule content by detection dimension, making it easy for the frontend to render partitions by file name, file size, file format, outbound domain name, and outbound content. Read-only output fields do not affect Create/Modify input parameters.
 * @method void setUserRuleInfo(TrafficSandboxDLPUserRuleInfo $UserRuleInfo) Set Structured view of user rules, returning rule content by detection dimension, making it easy for the frontend to render partitions by file name, file size, file format, outbound domain name, and outbound content. Read-only output fields do not affect Create/Modify input parameters.
 * @method TrafficSandboxEffectScope getEffectScope() Obtain Rule effective scope
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set Rule effective scope
 * @method array getInactiveAssets() Obtain List of ineffective assets: AI Agent assets in the traffic sandbox plug-in not installed (TrafficPluginState.InstallStatus not INSTALLED) among the policy association targets' effective assets. Returns the InstanceId/ContainerId and TrafficPluginState of the machines. Returns an empty array when there are no ineffective assets.
 * @method void setInactiveAssets(array $InactiveAssets) Set List of ineffective assets: AI Agent assets in the traffic sandbox plug-in not installed (TrafficPluginState.InstallStatus not INSTALLED) among the policy association targets' effective assets. Returns the InstanceId/ContainerId and TrafficPluginState of the machines. Returns an empty array when there are no ineffective assets.
 * @method string getInsertTime() Obtain Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method void setInsertTime(string $InsertTime) Set Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method string getUpdateTime() Obtain Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
 * @method string getRuleAction() Obtain Rule Action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
 * @method void setRuleAction(string $RuleAction) Set Rule Action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
 */
class TrafficSandboxDLPRuleInfo extends AbstractModel
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
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
     */
    public $Level;

    /**
     * @var string Rule status
Enumeration values:
ON: enable
OFF: disabled.
     */
    public $Status;

    /**
     * @var string Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
     */
    public $BelongAssetType;

    /**
     * @var array Snapshot of the referenced system rule content
     */
    public $SystemRuleContent;

    /**
     * @var array Content of the user-defined rule
     */
    public $UserRuleContent;

    /**
     * @var TrafficSandboxDLPUserRuleInfo Structured view of user rules, returning rule content by detection dimension, making it easy for the frontend to render partitions by file name, file size, file format, outbound domain name, and outbound content. Read-only output fields do not affect Create/Modify input parameters.
     */
    public $UserRuleInfo;

    /**
     * @var TrafficSandboxEffectScope Rule effective scope
     */
    public $EffectScope;

    /**
     * @var array List of ineffective assets: AI Agent assets in the traffic sandbox plug-in not installed (TrafficPluginState.InstallStatus not INSTALLED) among the policy association targets' effective assets. Returns the InstanceId/ContainerId and TrafficPluginState of the machines. Returns an empty array when there are no ineffective assets.
     */
    public $InactiveAssets;

    /**
     * @var string Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     */
    public $InsertTime;

    /**
     * @var string Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     */
    public $UpdateTime;

    /**
     * @var string Rule Action
Enumeration values:
PASS: allowlist
BLOCK: Block and alarm
MONITOR: alarm
     */
    public $RuleAction;

    /**
     * @param integer $ID Rule ID
     * @param string $RuleName Rule name
     * @param string $Level Rule level
Enumeration values:
INFO: Notification
LOW: low-risk
MEDIUM: Medium risk
HIGH: high risk
CRITICAL: Critical
     * @param string $Status Rule status
Enumeration values:
ON: enable
OFF: disabled.
     * @param string $BelongAssetType Asset type to which it belongs
Enumeration values:
HOST: Host
CONTAINER: Container
     * @param array $SystemRuleContent Snapshot of the referenced system rule content
     * @param array $UserRuleContent Content of the user-defined rule
     * @param TrafficSandboxDLPUserRuleInfo $UserRuleInfo Structured view of user rules, returning rule content by detection dimension, making it easy for the frontend to render partitions by file name, file size, file format, outbound domain name, and outbound content. Read-only output fields do not affect Create/Modify input parameters.
     * @param TrafficSandboxEffectScope $EffectScope Rule effective scope
     * @param array $InactiveAssets List of ineffective assets: AI Agent assets in the traffic sandbox plug-in not installed (TrafficPluginState.InstallStatus not INSTALLED) among the policy association targets' effective assets. Returns the InstanceId/ContainerId and TrafficPluginState of the machines. Returns an empty array when there are no ineffective assets.
     * @param string $InsertTime Creation time.
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     * @param string $UpdateTime Update time
Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)
     * @param string $RuleAction Rule Action
Enumeration values:
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

        if (array_key_exists("SystemRuleContent",$param) and $param["SystemRuleContent"] !== null) {
            $this->SystemRuleContent = [];
            foreach ($param["SystemRuleContent"] as $key => $value){
                $obj = new TrafficSandboxDLPRuleContentItem();
                $obj->deserialize($value);
                array_push($this->SystemRuleContent, $obj);
            }
        }

        if (array_key_exists("UserRuleContent",$param) and $param["UserRuleContent"] !== null) {
            $this->UserRuleContent = [];
            foreach ($param["UserRuleContent"] as $key => $value){
                $obj = new TrafficSandboxDLPRuleContentItem();
                $obj->deserialize($value);
                array_push($this->UserRuleContent, $obj);
            }
        }

        if (array_key_exists("UserRuleInfo",$param) and $param["UserRuleInfo"] !== null) {
            $this->UserRuleInfo = new TrafficSandboxDLPUserRuleInfo();
            $this->UserRuleInfo->deserialize($param["UserRuleInfo"]);
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
