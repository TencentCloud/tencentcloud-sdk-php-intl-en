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
 * LLM audit alarm data structure
 *
 * @method integer getID() Obtain <p>Alarm record ID</p>
 * @method void setID(integer $ID) Set <p>Alarm record ID</p>
 * @method string getBelongAssetType() Obtain <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method void setBelongAssetType(string $BelongAssetType) Set <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
 * @method integer getRuleID() Obtain <p>ID of the hit user rule</p>
 * @method void setRuleID(integer $RuleID) Set <p>ID of the hit user rule</p>
 * @method string getRuleName() Obtain <p>Name of the hit user rule</p>
 * @method void setRuleName(string $RuleName) Set <p>Name of the hit user rule</p>
 * @method string getSystemRuleName() Obtain <p>Name of the hit LLM audit system rule</p>
 * @method void setSystemRuleName(string $SystemRuleName) Set <p>Name of the hit LLM audit system rule</p>
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getContainerId() Obtain <p>Container ID</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container ID</p>
 * @method string getContainerName() Obtain <p>Container name</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name</p>
 * @method string getHitPayload() Obtain <p>Risk description of the hit</p>
 * @method void setHitPayload(string $HitPayload) Set <p>Risk description of the hit</p>
 * @method string getRuleAction() Obtain <p>Hit action<br>Enumeration values:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
 * @method void setRuleAction(string $RuleAction) Set <p>Hit action<br>Enumeration values:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
 * @method string getLevel() Obtain <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
 * @method void setLevel(string $Level) Set <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
 * @method string getStatus() Obtain <p>Processing status<br>Enumeration values:<br>PENDING: unprocessed<br>HANDLED: processed<br>IGNORE: ignored<br>PASS: allowlisted<br>BLOCK: blocked</p>
 * @method void setStatus(string $Status) Set <p>Processing status<br>Enumeration values:<br>PENDING: unprocessed<br>HANDLED: processed<br>IGNORE: ignored<br>PASS: allowlisted<br>BLOCK: blocked</p>
 * @method string getFirstAlertTime() Obtain <p>First alarm time</p>
 * @method void setFirstAlertTime(string $FirstAlertTime) Set <p>First alarm time</p>
 * @method string getLastAlertTime() Obtain <p>Last alarm time</p>
 * @method void setLastAlertTime(string $LastAlertTime) Set <p>Last alarm time</p>
 */
class TrafficSandboxLLMAuditAlertInfo extends AbstractModel
{
    /**
     * @var integer <p>Alarm record ID</p>
     */
    public $ID;

    /**
     * @var string <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     */
    public $BelongAssetType;

    /**
     * @var integer <p>ID of the hit user rule</p>
     */
    public $RuleID;

    /**
     * @var string <p>Name of the hit user rule</p>
     */
    public $RuleName;

    /**
     * @var string <p>Name of the hit LLM audit system rule</p>
     */
    public $SystemRuleName;

    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Container ID</p>
     */
    public $ContainerId;

    /**
     * @var string <p>Container name</p>
     */
    public $ContainerName;

    /**
     * @var string <p>Risk description of the hit</p>
     */
    public $HitPayload;

    /**
     * @var string <p>Hit action<br>Enumeration values:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
     */
    public $RuleAction;

    /**
     * @var string <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
     */
    public $Level;

    /**
     * @var string <p>Processing status<br>Enumeration values:<br>PENDING: unprocessed<br>HANDLED: processed<br>IGNORE: ignored<br>PASS: allowlisted<br>BLOCK: blocked</p>
     */
    public $Status;

    /**
     * @var string <p>First alarm time</p>
     */
    public $FirstAlertTime;

    /**
     * @var string <p>Last alarm time</p>
     */
    public $LastAlertTime;

    /**
     * @param integer $ID <p>Alarm record ID</p>
     * @param string $BelongAssetType <p>Affiliated asset type<br>Enumeration values:<br>HOST: Host<br>CONTAINER: Container</p>
     * @param integer $RuleID <p>ID of the hit user rule</p>
     * @param string $RuleName <p>Name of the hit user rule</p>
     * @param string $SystemRuleName <p>Name of the hit LLM audit system rule</p>
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ContainerId <p>Container ID</p>
     * @param string $ContainerName <p>Container name</p>
     * @param string $HitPayload <p>Risk description of the hit</p>
     * @param string $RuleAction <p>Hit action<br>Enumeration values:<br>PASS: allowlist<br>BLOCK: block and alarm<br>MONITOR: alarm</p>
     * @param string $Level <p>Alarm level<br>Enumeration values:<br>INFO: notification<br>LOW: low risk<br>MEDIUM: medium risk<br>HIGH: high risk<br>CRITICAL: critical</p>
     * @param string $Status <p>Processing status<br>Enumeration values:<br>PENDING: unprocessed<br>HANDLED: processed<br>IGNORE: ignored<br>PASS: allowlisted<br>BLOCK: blocked</p>
     * @param string $FirstAlertTime <p>First alarm time</p>
     * @param string $LastAlertTime <p>Last alarm time</p>
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

        if (array_key_exists("SystemRuleName",$param) and $param["SystemRuleName"] !== null) {
            $this->SystemRuleName = $param["SystemRuleName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("HitPayload",$param) and $param["HitPayload"] !== null) {
            $this->HitPayload = $param["HitPayload"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FirstAlertTime",$param) and $param["FirstAlertTime"] !== null) {
            $this->FirstAlertTime = $param["FirstAlertTime"];
        }

        if (array_key_exists("LastAlertTime",$param) and $param["LastAlertTime"] !== null) {
            $this->LastAlertTime = $param["LastAlertTime"];
        }
    }
}
