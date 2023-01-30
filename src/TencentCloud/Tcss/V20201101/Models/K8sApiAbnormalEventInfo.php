<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getMatchRuleName() Obtain Hit rule name
 * @method void setMatchRuleName(string $MatchRuleName) Set Hit rule name
 * @method string getMatchRuleType() Obtain Hit rule type
 * @method void setMatchRuleType(string $MatchRuleType) Set Hit rule type
 * @method string getRiskLevel() Obtain Alarm level
 * @method void setRiskLevel(string $RiskLevel) Set Alarm level
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getClusterRunningStatus() Obtain Cluster running status
 * @method void setClusterRunningStatus(string $ClusterRunningStatus) Set Cluster running status
 * @method string getFirstCreateTime() Obtain First creation time
 * @method void setFirstCreateTime(string $FirstCreateTime) Set First creation time
 * @method string getLastCreateTime() Obtain Last creation time
 * @method void setLastCreateTime(string $LastCreateTime) Set Last creation time
 * @method integer getAlarmCount() Obtain Number of alarms
 * @method void setAlarmCount(integer $AlarmCount) Set Number of alarms
 * @method string getStatus() Obtain Status
`EVENT_UNDEAL`: Unhandled
`EVENT_DEALED`: Handled
`EVENT_IGNORE`: Ignored
`EVENT_DEL`: Deleted
`EVENT_ADD_WHITE`: Added to an allowlist
 * @method void setStatus(string $Status) Set Status
`EVENT_UNDEAL`: Unhandled
`EVENT_DEALED`: Handled
`EVENT_IGNORE`: Ignored
`EVENT_DEL`: Deleted
`EVENT_ADD_WHITE`: Added to an allowlist
 * @method string getClusterMasterIP() Obtain The master IP of a cluster
 * @method void setClusterMasterIP(string $ClusterMasterIP) Set The master IP of a cluster
 * @method string getK8sVersion() Obtain K8s version
 * @method void setK8sVersion(string $K8sVersion) Set K8s version
 * @method array getRunningComponent() Obtain Runtime component
 * @method void setRunningComponent(array $RunningComponent) Set Runtime component
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getSuggestion() Obtain Suggestion
 * @method void setSuggestion(string $Suggestion) Set Suggestion
 * @method string getInfo() Obtain Request information
 * @method void setInfo(string $Info) Set Request information
 * @method string getMatchRuleID() Obtain Rule ID
 * @method void setMatchRuleID(string $MatchRuleID) Set Rule ID
 * @method array getHighLightFields() Obtain An array of highlighted fields
 * @method void setHighLightFields(array $HighLightFields) Set An array of highlighted fields
 * @method K8sApiAbnormalRuleScopeInfo getMatchRule() Obtain Hit rule
 * @method void setMatchRule(K8sApiAbnormalRuleScopeInfo $MatchRule) Set Hit rule
 */
class K8sApiAbnormalEventInfo extends AbstractModel
{
    /**
     * @var string Hit rule name
     */
    public $MatchRuleName;

    /**
     * @var string Hit rule type
     */
    public $MatchRuleType;

    /**
     * @var string Alarm level
     */
    public $RiskLevel;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster running status
     */
    public $ClusterRunningStatus;

    /**
     * @var string First creation time
     */
    public $FirstCreateTime;

    /**
     * @var string Last creation time
     */
    public $LastCreateTime;

    /**
     * @var integer Number of alarms
     */
    public $AlarmCount;

    /**
     * @var string Status
`EVENT_UNDEAL`: Unhandled
`EVENT_DEALED`: Handled
`EVENT_IGNORE`: Ignored
`EVENT_DEL`: Deleted
`EVENT_ADD_WHITE`: Added to an allowlist
     */
    public $Status;

    /**
     * @var string The master IP of a cluster
     */
    public $ClusterMasterIP;

    /**
     * @var string K8s version
     */
    public $K8sVersion;

    /**
     * @var array Runtime component
     */
    public $RunningComponent;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Suggestion
     */
    public $Suggestion;

    /**
     * @var string Request information
     */
    public $Info;

    /**
     * @var string Rule ID
     */
    public $MatchRuleID;

    /**
     * @var array An array of highlighted fields
     */
    public $HighLightFields;

    /**
     * @var K8sApiAbnormalRuleScopeInfo Hit rule
     */
    public $MatchRule;

    /**
     * @param string $MatchRuleName Hit rule name
     * @param string $MatchRuleType Hit rule type
     * @param string $RiskLevel Alarm level
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $ClusterRunningStatus Cluster running status
     * @param string $FirstCreateTime First creation time
     * @param string $LastCreateTime Last creation time
     * @param integer $AlarmCount Number of alarms
     * @param string $Status Status
`EVENT_UNDEAL`: Unhandled
`EVENT_DEALED`: Handled
`EVENT_IGNORE`: Ignored
`EVENT_DEL`: Deleted
`EVENT_ADD_WHITE`: Added to an allowlist
     * @param string $ClusterMasterIP The master IP of a cluster
     * @param string $K8sVersion K8s version
     * @param array $RunningComponent Runtime component
     * @param string $Desc Description
     * @param string $Suggestion Suggestion
     * @param string $Info Request information
     * @param string $MatchRuleID Rule ID
     * @param array $HighLightFields An array of highlighted fields
     * @param K8sApiAbnormalRuleScopeInfo $MatchRule Hit rule
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
    }
}
