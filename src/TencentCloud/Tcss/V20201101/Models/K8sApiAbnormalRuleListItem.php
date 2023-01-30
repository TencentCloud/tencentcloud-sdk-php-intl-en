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
 * Items in the list of K8sApi abnormal request rules
 *
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleType() Obtain Rule type
RT_SYSTEM System rules
RT_USER User defined
 * @method void setRuleType(string $RuleType) Set Rule type
RT_SYSTEM System rules
RT_USER User defined
 * @method integer getEffectClusterCount() Obtain Total number of affected clusters
 * @method void setEffectClusterCount(integer $EffectClusterCount) Set Total number of affected clusters
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getOprUin() Obtain Edit account
 * @method void setOprUin(string $OprUin) Set Edit account
 * @method boolean getStatus() Obtain Status
 * @method void setStatus(boolean $Status) Set Status
 */
class K8sApiAbnormalRuleListItem extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleID;

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
     * @var integer Total number of affected clusters
     */
    public $EffectClusterCount;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Edit account
     */
    public $OprUin;

    /**
     * @var boolean Status
     */
    public $Status;

    /**
     * @param string $RuleID Rule ID
     * @param string $RuleName Rule name
     * @param string $RuleType Rule type
RT_SYSTEM System rules
RT_USER User defined
     * @param integer $EffectClusterCount Total number of affected clusters
     * @param string $UpdateTime Update time
     * @param string $OprUin Edit account
     * @param boolean $Status Status
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("EffectClusterCount",$param) and $param["EffectClusterCount"] !== null) {
            $this->EffectClusterCount = $param["EffectClusterCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OprUin",$param) and $param["OprUin"] !== null) {
            $this->OprUin = $param["OprUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
