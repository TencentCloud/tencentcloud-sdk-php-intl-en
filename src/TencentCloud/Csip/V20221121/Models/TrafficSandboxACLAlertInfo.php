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
 * Data structure of an ACL alert
 *
 * @method integer getID() Obtain <p>Alarm record ID</p>
 * @method void setID(integer $ID) Set <p>Alarm record ID</p>
 * @method string getBelongAssetType() Obtain <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method void setBelongAssetType(string $BelongAssetType) Set <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method integer getRuleID() Obtain <p>Hit user rule ID.</p>
 * @method void setRuleID(integer $RuleID) Set <p>Hit user rule ID.</p>
 * @method string getRuleName() Obtain <p>Name of the hit user rule</p>
 * @method void setRuleName(string $RuleName) Set <p>Name of the hit user rule</p>
 * @method string getUUID() Obtain <p>Agent UUID</p>
 * @method void setUUID(string $UUID) Set <p>Agent UUID</p>
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getExe() Obtain <p>Process exe path</p>
 * @method void setExe(string $Exe) Set <p>Process exe path</p>
 * @method string getParam() Obtain <p>Process command line parameters<br>Input parameter limit: maximum 4096 bytes. May be truncated if overly long</p>
 * @method void setParam(string $Param) Set <p>Process command line parameters<br>Input parameter limit: maximum 4096 bytes. May be truncated if overly long</p>
 * @method string getTarget() Obtain <p>Target address, such as GET http://xxxx or ip:port</p>
 * @method void setTarget(string $Target) Set <p>Target address, such as GET http://xxxx or ip:port</p>
 * @method string getProtocol() Obtain <p>Protocol type<br>Enumeration values:<br>http<br>https</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol type<br>Enumeration values:<br>http<br>https</p>
 * @method string getLevel() Obtain <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
 * @method void setLevel(string $Level) Set <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
 * @method string getStatus() Obtain <p>Processing status<br>Enumeration values:<br>PENDING: Unprocessed<br>HANDLED: Processed<br>IGNORE: Ignored<br>PASS: Allowlisted<br>BLOCK: Blocked</p>
 * @method void setStatus(string $Status) Set <p>Processing status<br>Enumeration values:<br>PENDING: Unprocessed<br>HANDLED: Processed<br>IGNORE: Ignored<br>PASS: Allowlisted<br>BLOCK: Blocked</p>
 * @method integer getCount() Obtain <p>Number of alarms</p>
 * @method void setCount(integer $Count) Set <p>Number of alarms</p>
 * @method string getFirstAlertTime() Obtain <p>Initial alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setFirstAlertTime(string $FirstAlertTime) Set <p>Initial alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getLastAlertTime() Obtain <p>Last alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setLastAlertTime(string $LastAlertTime) Set <p>Last alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getRuleAction() Obtain <p>Hit action<br>Enumeration values:<br>PASS: Allowlist<br>BLOCK: Block and alarm<br>MONITOR: Alarm</p>
 * @method void setRuleAction(string $RuleAction) Set <p>Hit action<br>Enumeration values:<br>PASS: Allowlist<br>BLOCK: Block and alarm<br>MONITOR: Alarm</p>
 */
class TrafficSandboxACLAlertInfo extends AbstractModel
{
    /**
     * @var integer <p>Alarm record ID</p>
     */
    public $ID;

    /**
     * @var string <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     */
    public $BelongAssetType;

    /**
     * @var integer <p>Hit user rule ID.</p>
     */
    public $RuleID;

    /**
     * @var string <p>Name of the hit user rule</p>
     */
    public $RuleName;

    /**
     * @var string <p>Agent UUID</p>
     */
    public $UUID;

    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Process exe path</p>
     */
    public $Exe;

    /**
     * @var string <p>Process command line parameters<br>Input parameter limit: maximum 4096 bytes. May be truncated if overly long</p>
     */
    public $Param;

    /**
     * @var string <p>Target address, such as GET http://xxxx or ip:port</p>
     */
    public $Target;

    /**
     * @var string <p>Protocol type<br>Enumeration values:<br>http<br>https</p>
     */
    public $Protocol;

    /**
     * @var string <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
     */
    public $Level;

    /**
     * @var string <p>Processing status<br>Enumeration values:<br>PENDING: Unprocessed<br>HANDLED: Processed<br>IGNORE: Ignored<br>PASS: Allowlisted<br>BLOCK: Blocked</p>
     */
    public $Status;

    /**
     * @var integer <p>Number of alarms</p>
     */
    public $Count;

    /**
     * @var string <p>Initial alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $FirstAlertTime;

    /**
     * @var string <p>Last alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $LastAlertTime;

    /**
     * @var string <p>Hit action<br>Enumeration values:<br>PASS: Allowlist<br>BLOCK: Block and alarm<br>MONITOR: Alarm</p>
     */
    public $RuleAction;

    /**
     * @param integer $ID <p>Alarm record ID</p>
     * @param string $BelongAssetType <p>Asset type affiliation<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     * @param integer $RuleID <p>Hit user rule ID.</p>
     * @param string $RuleName <p>Name of the hit user rule</p>
     * @param string $UUID <p>Agent UUID</p>
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $Exe <p>Process exe path</p>
     * @param string $Param <p>Process command line parameters<br>Input parameter limit: maximum 4096 bytes. May be truncated if overly long</p>
     * @param string $Target <p>Target address, such as GET http://xxxx or ip:port</p>
     * @param string $Protocol <p>Protocol type<br>Enumeration values:<br>http<br>https</p>
     * @param string $Level <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
     * @param string $Status <p>Processing status<br>Enumeration values:<br>PENDING: Unprocessed<br>HANDLED: Processed<br>IGNORE: Ignored<br>PASS: Allowlisted<br>BLOCK: Blocked</p>
     * @param integer $Count <p>Number of alarms</p>
     * @param string $FirstAlertTime <p>Initial alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $LastAlertTime <p>Last alarm time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $RuleAction <p>Hit action<br>Enumeration values:<br>PASS: Allowlist<br>BLOCK: Block and alarm<br>MONITOR: Alarm</p>
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

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FirstAlertTime",$param) and $param["FirstAlertTime"] !== null) {
            $this->FirstAlertTime = $param["FirstAlertTime"];
        }

        if (array_key_exists("LastAlertTime",$param) and $param["LastAlertTime"] !== null) {
            $this->LastAlertTime = $param["LastAlertTime"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }
    }
}
