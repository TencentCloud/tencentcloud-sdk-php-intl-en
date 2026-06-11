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
 * Items in the list of K8sApi abnormal request rules
 *
 * @method boolean getEffectAllCluster() Obtain Whether take effect on all clusters. true indicates all clusters take effect. false indicates only specified clusters take effect.
 * @method void setEffectAllCluster(boolean $EffectAllCluster) Set Whether take effect on all clusters. true indicates all clusters take effect. false indicates only specified clusters take effect.
 * @method integer getEffectClusterCount() Obtain Total number of affected clusters
 * @method void setEffectClusterCount(integer $EffectClusterCount) Set Total number of affected clusters
 * @method string getOprUin() Obtain Edit account
 * @method void setOprUin(string $OprUin) Set Edit account
 * @method array getRuleActions() Obtain Deduplicated list of ALL execution actions in the rule group. The present blocklist contains only RULE_MODE_ALERT (Alert).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleActions(array $RuleActions) Set Deduplicated list of ALL execution actions in the rule group. The present blocklist contains only RULE_MODE_ALERT (Alert).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 * @method array getRuleInfoList() Obtain Subrule content list, deserialized from rule_details JSON
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleInfoList(array $RuleInfoList) Set Subrule content list, deserialized from rule_details JSON
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleType() Obtain Rule type
RT_SYSTEM System rules
RT_USER User defined
 * @method void setRuleType(string $RuleType) Set Rule type
RT_SYSTEM System rules
RT_USER User defined
 * @method boolean getStatus() Obtain Status
 * @method void setStatus(boolean $Status) Set Status
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class K8sApiAbnormalRuleListItem extends AbstractModel
{
    /**
     * @var boolean Whether take effect on all clusters. true indicates all clusters take effect. false indicates only specified clusters take effect.
     */
    public $EffectAllCluster;

    /**
     * @var integer Total number of affected clusters
     */
    public $EffectClusterCount;

    /**
     * @var string Edit account
     */
    public $OprUin;

    /**
     * @var array Deduplicated list of ALL execution actions in the rule group. The present blocklist contains only RULE_MODE_ALERT (Alert).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleActions;

    /**
     * @var string Rule ID
     */
    public $RuleID;

    /**
     * @var array Subrule content list, deserialized from rule_details JSON
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleInfoList;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule type
RT_SYSTEM System rules
RT_USER User defined
     */
    public $RuleType;

    /**
     * @var boolean Status
     */
    public $Status;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @param boolean $EffectAllCluster Whether take effect on all clusters. true indicates all clusters take effect. false indicates only specified clusters take effect.
     * @param integer $EffectClusterCount Total number of affected clusters
     * @param string $OprUin Edit account
     * @param array $RuleActions Deduplicated list of ALL execution actions in the rule group. The present blocklist contains only RULE_MODE_ALERT (Alert).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleID Rule ID
     * @param array $RuleInfoList Subrule content list, deserialized from rule_details JSON
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleName Rule name
     * @param string $RuleType Rule type
RT_SYSTEM System rules
RT_USER User defined
     * @param boolean $Status Status
     * @param string $UpdateTime Update time
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
        if (array_key_exists("EffectAllCluster",$param) and $param["EffectAllCluster"] !== null) {
            $this->EffectAllCluster = $param["EffectAllCluster"];
        }

        if (array_key_exists("EffectClusterCount",$param) and $param["EffectClusterCount"] !== null) {
            $this->EffectClusterCount = $param["EffectClusterCount"];
        }

        if (array_key_exists("OprUin",$param) and $param["OprUin"] !== null) {
            $this->OprUin = $param["OprUin"];
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = $param["RuleActions"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleInfoList",$param) and $param["RuleInfoList"] !== null) {
            $this->RuleInfoList = [];
            foreach ($param["RuleInfoList"] as $key => $value){
                $obj = new K8sApiAbnormalRuleScopeInfo();
                $obj->deserialize($value);
                array_push($this->RuleInfoList, $obj);
            }
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
