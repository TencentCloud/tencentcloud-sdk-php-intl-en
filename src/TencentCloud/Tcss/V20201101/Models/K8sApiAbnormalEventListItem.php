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
 * Items in the K8sApi abnormal event list
 *
 * @method integer getID() Obtain Event ID
 * @method void setID(integer $ID) Set Event ID
 * @method string getMatchRuleType() Obtain Hit rule type
 * @method void setMatchRuleType(string $MatchRuleType) Set Hit rule type
 * @method string getRiskLevel() Obtain Threat level
 * @method void setRiskLevel(string $RiskLevel) Set Threat level
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
 * @method void setStatus(string $Status) Set Status
 * @method string getRuleType() Obtain Rule type
 * @method void setRuleType(string $RuleType) Set Rule type
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getSuggestion() Obtain Solution
 * @method void setSuggestion(string $Suggestion) Set Solution
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method K8sApiAbnormalRuleScopeInfo getMatchRule() Obtain Hit rule
 * @method void setMatchRule(K8sApiAbnormalRuleScopeInfo $MatchRule) Set Hit rule
 */
class K8sApiAbnormalEventListItem extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $ID;

    /**
     * @var string Hit rule type
     */
    public $MatchRuleType;

    /**
     * @var string Threat level
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
     */
    public $Status;

    /**
     * @var string Rule type
     */
    public $RuleType;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string Solution
     */
    public $Suggestion;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var K8sApiAbnormalRuleScopeInfo Hit rule
     */
    public $MatchRule;

    /**
     * @param integer $ID Event ID
     * @param string $MatchRuleType Hit rule type
     * @param string $RiskLevel Threat level
     * @param string $ClusterID Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $ClusterRunningStatus Cluster running status
     * @param string $FirstCreateTime First creation time
     * @param string $LastCreateTime Last creation time
     * @param integer $AlarmCount Number of alarms
     * @param string $Status Status
     * @param string $RuleType Rule type
     * @param string $Desc Description
     * @param string $Suggestion Solution
     * @param string $RuleName Rule name
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = new K8sApiAbnormalRuleScopeInfo();
            $this->MatchRule->deserialize($param["MatchRule"]);
        }
    }
}
