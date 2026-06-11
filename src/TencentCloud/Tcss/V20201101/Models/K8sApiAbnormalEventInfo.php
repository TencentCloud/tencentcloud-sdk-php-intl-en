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
 * K8sApi api abnormal event details
 *
 * @method string getMatchRuleName() Obtain <p>Hit rule name.</p>
 * @method void setMatchRuleName(string $MatchRuleName) Set <p>Hit rule name.</p>
 * @method string getMatchRuleType() Obtain <p>Hit rule type.</p>
 * @method void setMatchRuleType(string $MatchRuleType) Set <p>Hit rule type.</p>
 * @method string getRiskLevel() Obtain <p>Alarm level.</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Alarm level.</p>
 * @method string getClusterID() Obtain <p>Cluster ID.</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getClusterRunningStatus() Obtain <p>Cluster running status: CSR_RUNNING, CSR_EXCEPTION, and CSR_CREATING</p>
 * @method void setClusterRunningStatus(string $ClusterRunningStatus) Set <p>Cluster running status: CSR_RUNNING, CSR_EXCEPTION, and CSR_CREATING</p>
 * @method string getFirstCreateTime() Obtain <p>Initial generation time.</p>
 * @method void setFirstCreateTime(string $FirstCreateTime) Set <p>Initial generation time.</p>
 * @method string getLastCreateTime() Obtain <p>Last generation time.</p>
 * @method void setLastCreateTime(string $LastCreateTime) Set <p>Last generation time.</p>
 * @method integer getAlarmCount() Obtain <p>Number of alarms.</p>
 * @method void setAlarmCount(integer $AlarmCount) Set <p>Number of alarms.</p>
 * @method string getStatus() Obtain <p>Status.<br>&quot;EVENT_UNDEAL&quot;: unhandled<br>&quot;EVENT_DEALED&quot;: handled<br>&quot;EVENT_IGNORE&quot;: ignored<br>&quot;EVENT_DEL&quot;: deleted<br>&quot;EVENT_ADD_WHITE&quot;: allowlisted</p>
 * @method void setStatus(string $Status) Set <p>Status.<br>&quot;EVENT_UNDEAL&quot;: unhandled<br>&quot;EVENT_DEALED&quot;: handled<br>&quot;EVENT_IGNORE&quot;: ignored<br>&quot;EVENT_DEL&quot;: deleted<br>&quot;EVENT_ADD_WHITE&quot;: allowlisted</p>
 * @method string getClusterMasterIP() Obtain <p>Cluster master IP address.</p>
 * @method void setClusterMasterIP(string $ClusterMasterIP) Set <p>Cluster master IP address.</p>
 * @method string getK8sVersion() Obtain <p>K8s version.</p>
 * @method void setK8sVersion(string $K8sVersion) Set <p>K8s version.</p>
 * @method array getRunningComponent() Obtain <p>Runtime component.</p>
 * @method void setRunningComponent(array $RunningComponent) Set <p>Runtime component.</p>
 * @method string getDesc() Obtain <p>Description.</p>
 * @method void setDesc(string $Desc) Set <p>Description.</p>
 * @method string getSuggestion() Obtain <p>Suggestion.</p>
 * @method void setSuggestion(string $Suggestion) Set <p>Suggestion.</p>
 * @method string getInfo() Obtain <p>Request information.</p>
 * @method void setInfo(string $Info) Set <p>Request information.</p>
 * @method string getMatchRuleID() Obtain <p>Rule ID.</p>
 * @method void setMatchRuleID(string $MatchRuleID) Set <p>Rule ID.</p>
 * @method array getHighLightFields() Obtain <p>Array of highlighted fields.</p>
 * @method void setHighLightFields(array $HighLightFields) Set <p>Array of highlighted fields.</p>
 * @method K8sApiAbnormalRuleScopeInfo getMatchRule() Obtain <p>Hit rule.</p>
 * @method void setMatchRule(K8sApiAbnormalRuleScopeInfo $MatchRule) Set <p>Hit rule.</p>
 * @method string getHighLightFieldsVal() Obtain <p>Hit rule content corresponding to highlighted fields (JSON string, such as {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>Parameter format: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
 * @method void setHighLightFieldsVal(string $HighLightFieldsVal) Set <p>Hit rule content corresponding to highlighted fields (JSON string, such as {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>Parameter format: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
 * @method string getRuleTypeZH() Obtain <p>Rule type.</p>
 * @method void setRuleTypeZH(string $RuleTypeZH) Set <p>Rule type.</p>
 */
class K8sApiAbnormalEventInfo extends AbstractModel
{
    /**
     * @var string <p>Hit rule name.</p>
     */
    public $MatchRuleName;

    /**
     * @var string <p>Hit rule type.</p>
     */
    public $MatchRuleType;

    /**
     * @var string <p>Alarm level.</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster running status: CSR_RUNNING, CSR_EXCEPTION, and CSR_CREATING</p>
     */
    public $ClusterRunningStatus;

    /**
     * @var string <p>Initial generation time.</p>
     */
    public $FirstCreateTime;

    /**
     * @var string <p>Last generation time.</p>
     */
    public $LastCreateTime;

    /**
     * @var integer <p>Number of alarms.</p>
     */
    public $AlarmCount;

    /**
     * @var string <p>Status.<br>&quot;EVENT_UNDEAL&quot;: unhandled<br>&quot;EVENT_DEALED&quot;: handled<br>&quot;EVENT_IGNORE&quot;: ignored<br>&quot;EVENT_DEL&quot;: deleted<br>&quot;EVENT_ADD_WHITE&quot;: allowlisted</p>
     */
    public $Status;

    /**
     * @var string <p>Cluster master IP address.</p>
     */
    public $ClusterMasterIP;

    /**
     * @var string <p>K8s version.</p>
     */
    public $K8sVersion;

    /**
     * @var array <p>Runtime component.</p>
     */
    public $RunningComponent;

    /**
     * @var string <p>Description.</p>
     */
    public $Desc;

    /**
     * @var string <p>Suggestion.</p>
     */
    public $Suggestion;

    /**
     * @var string <p>Request information.</p>
     */
    public $Info;

    /**
     * @var string <p>Rule ID.</p>
     */
    public $MatchRuleID;

    /**
     * @var array <p>Array of highlighted fields.</p>
     */
    public $HighLightFields;

    /**
     * @var K8sApiAbnormalRuleScopeInfo <p>Hit rule.</p>
     */
    public $MatchRule;

    /**
     * @var string <p>Hit rule content corresponding to highlighted fields (JSON string, such as {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>Parameter format: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
     */
    public $HighLightFieldsVal;

    /**
     * @var string <p>Rule type.</p>
     */
    public $RuleTypeZH;

    /**
     * @param string $MatchRuleName <p>Hit rule name.</p>
     * @param string $MatchRuleType <p>Hit rule type.</p>
     * @param string $RiskLevel <p>Alarm level.</p>
     * @param string $ClusterID <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $ClusterRunningStatus <p>Cluster running status: CSR_RUNNING, CSR_EXCEPTION, and CSR_CREATING</p>
     * @param string $FirstCreateTime <p>Initial generation time.</p>
     * @param string $LastCreateTime <p>Last generation time.</p>
     * @param integer $AlarmCount <p>Number of alarms.</p>
     * @param string $Status <p>Status.<br>&quot;EVENT_UNDEAL&quot;: unhandled<br>&quot;EVENT_DEALED&quot;: handled<br>&quot;EVENT_IGNORE&quot;: ignored<br>&quot;EVENT_DEL&quot;: deleted<br>&quot;EVENT_ADD_WHITE&quot;: allowlisted</p>
     * @param string $ClusterMasterIP <p>Cluster master IP address.</p>
     * @param string $K8sVersion <p>K8s version.</p>
     * @param array $RunningComponent <p>Runtime component.</p>
     * @param string $Desc <p>Description.</p>
     * @param string $Suggestion <p>Suggestion.</p>
     * @param string $Info <p>Request information.</p>
     * @param string $MatchRuleID <p>Rule ID.</p>
     * @param array $HighLightFields <p>Array of highlighted fields.</p>
     * @param K8sApiAbnormalRuleScopeInfo $MatchRule <p>Hit rule.</p>
     * @param string $HighLightFieldsVal <p>Hit rule content corresponding to highlighted fields (JSON string, such as {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;})</p><p>Parameter format: {&quot;field1&quot;:&quot;value1&quot;,&quot;field2&quot;:&quot;value2&quot;}</p>
     * @param string $RuleTypeZH <p>Rule type.</p>
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
        if (array_key_exists("MatchRuleName",$param) and $param["MatchRuleName"] !== null) {
            $this->MatchRuleName = $param["MatchRuleName"];
        }

        if (array_key_exists("MatchRuleType",$param) and $param["MatchRuleType"] !== null) {
            $this->MatchRuleType = $param["MatchRuleType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterRunningStatus",$param) and $param["ClusterRunningStatus"] !== null) {
            $this->ClusterRunningStatus = $param["ClusterRunningStatus"];
        }

        if (array_key_exists("FirstCreateTime",$param) and $param["FirstCreateTime"] !== null) {
            $this->FirstCreateTime = $param["FirstCreateTime"];
        }

        if (array_key_exists("LastCreateTime",$param) and $param["LastCreateTime"] !== null) {
            $this->LastCreateTime = $param["LastCreateTime"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterMasterIP",$param) and $param["ClusterMasterIP"] !== null) {
            $this->ClusterMasterIP = $param["ClusterMasterIP"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("RunningComponent",$param) and $param["RunningComponent"] !== null) {
            $this->RunningComponent = $param["RunningComponent"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("MatchRuleID",$param) and $param["MatchRuleID"] !== null) {
            $this->MatchRuleID = $param["MatchRuleID"];
        }

        if (array_key_exists("HighLightFields",$param) and $param["HighLightFields"] !== null) {
            $this->HighLightFields = $param["HighLightFields"];
        }

        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = new K8sApiAbnormalRuleScopeInfo();
            $this->MatchRule->deserialize($param["MatchRule"]);
        }

        if (array_key_exists("HighLightFieldsVal",$param) and $param["HighLightFieldsVal"] !== null) {
            $this->HighLightFieldsVal = $param["HighLightFieldsVal"];
        }

        if (array_key_exists("RuleTypeZH",$param) and $param["RuleTypeZH"] !== null) {
            $this->RuleTypeZH = $param["RuleTypeZH"];
        }
    }
}
