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
 * K8sApi abnormal request rule details
 *
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method boolean getStatus() Obtain Status
 * @method void setStatus(boolean $Status) Set Status
 * @method array getRuleInfoList() Obtain Rule information list
 * @method void setRuleInfoList(array $RuleInfoList) Set Rule information list
 * @method array getEffectClusterIDSet() Obtain Effective cluster IDSet
 * @method void setEffectClusterIDSet(array $EffectClusterIDSet) Set Effective cluster IDSet
 * @method string getRuleType() Obtain Rule type
RT_SYSTEM: System rules
RT_USER: User-defined rules
 * @method void setRuleType(string $RuleType) Set Rule type
RT_SYSTEM: System rules
RT_USER: User-defined rules
 * @method boolean getEffectAllCluster() Obtain Whether all clusters are effective
 * @method void setEffectAllCluster(boolean $EffectAllCluster) Set Whether all clusters are effective
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 */
class K8sApiAbnormalRuleInfo extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var boolean Status
     */
    public $Status;

    /**
     * @var array Rule information list
     */
    public $RuleInfoList;

    /**
     * @var array Effective cluster IDSet
     */
    public $EffectClusterIDSet;

    /**
     * @var string Rule type
RT_SYSTEM: System rules
RT_USER: User-defined rules
     */
    public $RuleType;

    /**
     * @var boolean Whether all clusters are effective
     */
    public $EffectAllCluster;

    /**
     * @var string Rule ID
     */
    public $RuleID;

    /**
     * @param string $RuleName Rule name
     * @param boolean $Status Status
     * @param array $RuleInfoList Rule information list
     * @param array $EffectClusterIDSet Effective cluster IDSet
     * @param string $RuleType Rule type
RT_SYSTEM: System rules
RT_USER: User-defined rules
     * @param boolean $EffectAllCluster Whether all clusters are effective
     * @param string $RuleID Rule ID
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleInfoList",$param) and $param["RuleInfoList"] !== null) {
            $this->RuleInfoList = [];
            foreach ($param["RuleInfoList"] as $key => $value){
                $obj = new K8sApiAbnormalRuleScopeInfo();
                $obj->deserialize($value);
                array_push($this->RuleInfoList, $obj);
            }
        }

        if (array_key_exists("EffectClusterIDSet",$param) and $param["EffectClusterIDSet"] !== null) {
            $this->EffectClusterIDSet = $param["EffectClusterIDSet"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("EffectAllCluster",$param) and $param["EffectAllCluster"] !== null) {
            $this->EffectAllCluster = $param["EffectAllCluster"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }
    }
}
