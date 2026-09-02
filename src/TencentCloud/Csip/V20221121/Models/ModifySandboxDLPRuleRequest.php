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
 * ModifySandboxDLPRule request structure.
 *
 * @method integer getID() Obtain <p>Rule ID.</p>
 * @method void setID(integer $ID) Set <p>Rule ID.</p>
 * @method string getRuleName() Obtain <p>Rule name<br>Input limit: length 1-128<br>Default value: no modification if not passed</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name<br>Input limit: length 1-128<br>Default value: no modification if not passed</p>
 * @method string getLevel() Obtain <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical<br>Default value: no modification if not passed in</p>
 * @method void setLevel(string $Level) Set <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical<br>Default value: no modification if not passed in</p>
 * @method string getRuleAction() Obtain <p>Rule action<br>Enumeration values:<br>PASS: blocklist<br>BLOCK: block and alarm<br>MONITOR: alarm<br>Default value: no modification if not passed in</p>
 * @method void setRuleAction(string $RuleAction) Set <p>Rule action<br>Enumeration values:<br>PASS: blocklist<br>BLOCK: block and alarm<br>MONITOR: alarm<br>Default value: no modification if not passed in</p>
 * @method array getSystemRuleIDList() Obtain <p>Referenced system rule ID list<br>Input parameter limit: up to 1000; when passed, overwrites the original collection entirely; if not passed, means no modification</p>
 * @method void setSystemRuleIDList(array $SystemRuleIDList) Set <p>Referenced system rule ID list<br>Input parameter limit: up to 1000; when passed, overwrites the original collection entirely; if not passed, means no modification</p>
 * @method array getUserRuleContent() Obtain <p>User-defined rule content<br>Input parameter limits: when passed in, the entire collection is overwritten (passing an empty array is allowed to clear it); if not passed, no modification is made</p>
 * @method void setUserRuleContent(array $UserRuleContent) Set <p>User-defined rule content<br>Input parameter limits: when passed in, the entire collection is overwritten (passing an empty array is allowed to clear it); if not passed, no modification is made</p>
 * @method TrafficSandboxDLPUserRuleInfo getUserRuleInfo() Obtain <p>Structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable, and at least one must be hit. When passed in, it overwrites the original collection as a whole; if not passed, no modification is made. It will override when passed in at the same time as UserRuleContent</p>
 * @method void setUserRuleInfo(TrafficSandboxDLPUserRuleInfo $UserRuleInfo) Set <p>Structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable, and at least one must be hit. When passed in, it overwrites the original collection as a whole; if not passed, no modification is made. It will override when passed in at the same time as UserRuleContent</p>
 * @method TrafficSandboxEffectScope getEffectScope() Obtain <p>Effective scope<br>Default value: no modification if not passed</p>
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set <p>Effective scope<br>Default value: no modification if not passed</p>
 * @method string getStatus() Obtain <p>Target status<br>Enumeration values: <br>ON: Enablement<br>OFF: Disablement<br>Default value: No modification if not passed in</p>
 * @method void setStatus(string $Status) Set <p>Target status<br>Enumeration values: <br>ON: Enablement<br>OFF: Disablement<br>Default value: No modification if not passed in</p>
 */
class ModifySandboxDLPRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>Rule ID.</p>
     */
    public $ID;

    /**
     * @var string <p>Rule name<br>Input limit: length 1-128<br>Default value: no modification if not passed</p>
     */
    public $RuleName;

    /**
     * @var string <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical<br>Default value: no modification if not passed in</p>
     */
    public $Level;

    /**
     * @var string <p>Rule action<br>Enumeration values:<br>PASS: blocklist<br>BLOCK: block and alarm<br>MONITOR: alarm<br>Default value: no modification if not passed in</p>
     */
    public $RuleAction;

    /**
     * @var array <p>Referenced system rule ID list<br>Input parameter limit: up to 1000; when passed, overwrites the original collection entirely; if not passed, means no modification</p>
     */
    public $SystemRuleIDList;

    /**
     * @var array <p>User-defined rule content<br>Input parameter limits: when passed in, the entire collection is overwritten (passing an empty array is allowed to clear it); if not passed, no modification is made</p>
     */
    public $UserRuleContent;

    /**
     * @var TrafficSandboxDLPUserRuleInfo <p>Structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable, and at least one must be hit. When passed in, it overwrites the original collection as a whole; if not passed, no modification is made. It will override when passed in at the same time as UserRuleContent</p>
     */
    public $UserRuleInfo;

    /**
     * @var TrafficSandboxEffectScope <p>Effective scope<br>Default value: no modification if not passed</p>
     */
    public $EffectScope;

    /**
     * @var string <p>Target status<br>Enumeration values: <br>ON: Enablement<br>OFF: Disablement<br>Default value: No modification if not passed in</p>
     */
    public $Status;

    /**
     * @param integer $ID <p>Rule ID.</p>
     * @param string $RuleName <p>Rule name<br>Input limit: length 1-128<br>Default value: no modification if not passed</p>
     * @param string $Level <p>Rule level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical<br>Default value: no modification if not passed in</p>
     * @param string $RuleAction <p>Rule action<br>Enumeration values:<br>PASS: blocklist<br>BLOCK: block and alarm<br>MONITOR: alarm<br>Default value: no modification if not passed in</p>
     * @param array $SystemRuleIDList <p>Referenced system rule ID list<br>Input parameter limit: up to 1000; when passed, overwrites the original collection entirely; if not passed, means no modification</p>
     * @param array $UserRuleContent <p>User-defined rule content<br>Input parameter limits: when passed in, the entire collection is overwritten (passing an empty array is allowed to clear it); if not passed, no modification is made</p>
     * @param TrafficSandboxDLPUserRuleInfo $UserRuleInfo <p>Structured input parameters support 5 detection dimensions (file name/file size/file format/outbound domain name/outbound content). Each dimension is selectable, and at least one must be hit. When passed in, it overwrites the original collection as a whole; if not passed, no modification is made. It will override when passed in at the same time as UserRuleContent</p>
     * @param TrafficSandboxEffectScope $EffectScope <p>Effective scope<br>Default value: no modification if not passed</p>
     * @param string $Status <p>Target status<br>Enumeration values: <br>ON: Enablement<br>OFF: Disablement<br>Default value: No modification if not passed in</p>
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

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
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

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
