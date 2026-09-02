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
 * CreateSandboxDLPRule request structure.
 *
 * @method string getRuleName() Obtain <p>Rule name<br>Input parameter limit: length 1-128</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name<br>Input parameter limit: length 1-128</p>
 * @method string getLevel() Obtain <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
 * @method void setLevel(string $Level) Set <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
 * @method string getRuleAction() Obtain <p>Rule action<br>Enumeration value:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
 * @method void setRuleAction(string $RuleAction) Set <p>Rule action<br>Enumeration value:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
 * @method string getBelongAssetType() Obtain <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method void setBelongAssetType(string $BelongAssetType) Set <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method TrafficSandboxEffectScope getEffectScope() Obtain <p>Effective scope</p>
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set <p>Effective scope</p>
 * @method string getStatus() Obtain <p>Initial status<br>Enumeration values:<br>ON: Enable<br>OFF: Disable</p>
 * @method void setStatus(string $Status) Set <p>Initial status<br>Enumeration values:<br>ON: Enable<br>OFF: Disable</p>
 * @method array getSystemRuleIDList() Obtain <p>Referenced system rule ID list<br>Input limit: up to 1000; at least one of this or UserRuleContent must be provided</p>
 * @method void setSystemRuleIDList(array $SystemRuleIDList) Set <p>Referenced system rule ID list<br>Input limit: up to 1000; at least one of this or UserRuleContent must be provided</p>
 * @method array getUserRuleContent() Obtain <p>User-defined rule content<br>Input limits: up to 100 sub-rules; import either this or UserRuleInfo. If both are imported at the same time, UserRuleInfo takes precedence</p>
 * @method void setUserRuleContent(array $UserRuleContent) Set <p>User-defined rule content<br>Input limits: up to 100 sub-rules; import either this or UserRuleInfo. If both are imported at the same time, UserRuleInfo takes precedence</p>
 * @method TrafficSandboxDLPUserRuleInfo getUserRuleInfo() Obtain <p>Newly-added selectable structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable and at least one must be hit. It will override when passed at the same time as UserRuleContent.</p>
 * @method void setUserRuleInfo(TrafficSandboxDLPUserRuleInfo $UserRuleInfo) Set <p>Newly-added selectable structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable and at least one must be hit. It will override when passed at the same time as UserRuleContent.</p>
 */
class CreateSandboxDLPRuleRequest extends AbstractModel
{
    /**
     * @var string <p>Rule name<br>Input parameter limit: length 1-128</p>
     */
    public $RuleName;

    /**
     * @var string <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
     */
    public $Level;

    /**
     * @var string <p>Rule action<br>Enumeration value:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
     */
    public $RuleAction;

    /**
     * @var string <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope <p>Effective scope</p>
     */
    public $EffectScope;

    /**
     * @var string <p>Initial status<br>Enumeration values:<br>ON: Enable<br>OFF: Disable</p>
     */
    public $Status;

    /**
     * @var array <p>Referenced system rule ID list<br>Input limit: up to 1000; at least one of this or UserRuleContent must be provided</p>
     */
    public $SystemRuleIDList;

    /**
     * @var array <p>User-defined rule content<br>Input limits: up to 100 sub-rules; import either this or UserRuleInfo. If both are imported at the same time, UserRuleInfo takes precedence</p>
     */
    public $UserRuleContent;

    /**
     * @var TrafficSandboxDLPUserRuleInfo <p>Newly-added selectable structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable and at least one must be hit. It will override when passed at the same time as UserRuleContent.</p>
     */
    public $UserRuleInfo;

    /**
     * @param string $RuleName <p>Rule name<br>Input parameter limit: length 1-128</p>
     * @param string $Level <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
     * @param string $RuleAction <p>Rule action<br>Enumeration value:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
     * @param string $BelongAssetType <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     * @param TrafficSandboxEffectScope $EffectScope <p>Effective scope</p>
     * @param string $Status <p>Initial status<br>Enumeration values:<br>ON: Enable<br>OFF: Disable</p>
     * @param array $SystemRuleIDList <p>Referenced system rule ID list<br>Input limit: up to 1000; at least one of this or UserRuleContent must be provided</p>
     * @param array $UserRuleContent <p>User-defined rule content<br>Input limits: up to 100 sub-rules; import either this or UserRuleInfo. If both are imported at the same time, UserRuleInfo takes precedence</p>
     * @param TrafficSandboxDLPUserRuleInfo $UserRuleInfo <p>Newly-added selectable structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable and at least one must be hit. It will override when passed at the same time as UserRuleContent.</p>
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

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
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

        if (array_key_exists("SystemRuleIDList",$param) and $param["SystemRuleIDList"] !== null) {
            $this->SystemRuleIDList = $param["SystemRuleIDList"];
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
    }
}
