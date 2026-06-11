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
 * Image blocking rule
 *
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleType() Obtain Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
 * @method void setRuleType(string $RuleType) Set Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
 * @method integer getEffectImageCount() Obtain Number of Effective Images
 * @method void setEffectImageCount(integer $EffectImageCount) Set Number of Effective Images
 * @method integer getIsEffectAllImage() Obtain Application to All Scanned Images. 0: Select All Images; 1: Custom Images
 * @method void setIsEffectAllImage(integer $IsEffectAllImage) Set Application to All Scanned Images. 0: Select All Images; 1: Custom Images
 * @method string getEffectTime() Obtain Rule Effective Start Time
 * @method void setEffectTime(string $EffectTime) Set Rule Effective Start Time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getOperationUin() Obtain Operator
 * @method void setOperationUin(string $OperationUin) Set Operator
 * @method integer getStatus() Obtain Enabled status
 * @method void setStatus(integer $Status) Set Enabled status
 * @method string getEffectStatus() Obtain Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
 * @method void setEffectStatus(string $EffectStatus) Set Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
 * @method integer getID() Obtain Rule ID
 * @method void setID(integer $ID) Set Rule ID
 */
class ImageDenyRule extends AbstractModel
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
     * @var string Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
     */
    public $RuleType;

    /**
     * @var integer Number of Effective Images
     */
    public $EffectImageCount;

    /**
     * @var integer Application to All Scanned Images. 0: Select All Images; 1: Custom Images
     */
    public $IsEffectAllImage;

    /**
     * @var string Rule Effective Start Time
     */
    public $EffectTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Operator
     */
    public $OperationUin;

    /**
     * @var integer Enabled status
     */
    public $Status;

    /**
     * @var string Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
     */
    public $EffectStatus;

    /**
     * @var integer Rule ID
     */
    public $ID;

    /**
     * @param string $RuleID Rule ID
     * @param string $RuleName Rule name
     * @param string $RuleType Rule Type. RULE_RISK: Risk; RULE_PRIVILEGE: Privilege
     * @param integer $EffectImageCount Number of Effective Images
     * @param integer $IsEffectAllImage Application to All Scanned Images. 0: Select All Images; 1: Custom Images
     * @param string $EffectTime Rule Effective Start Time
     * @param string $UpdateTime Update time
     * @param string $OperationUin Operator
     * @param integer $Status Enabled status
     * @param string $EffectStatus Effective Status. IN_THE_TEST: Observing; IN_EFFECT: Effective
     * @param integer $ID Rule ID
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

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("IsEffectAllImage",$param) and $param["IsEffectAllImage"] !== null) {
            $this->IsEffectAllImage = $param["IsEffectAllImage"];
        }

        if (array_key_exists("EffectTime",$param) and $param["EffectTime"] !== null) {
            $this->EffectTime = $param["EffectTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperationUin",$param) and $param["OperationUin"] !== null) {
            $this->OperationUin = $param["OperationUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EffectStatus",$param) and $param["EffectStatus"] !== null) {
            $this->EffectStatus = $param["EffectStatus"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
