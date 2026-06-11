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
 * Regular Expression Rule List Item
 *
 * @method string getRuleID() Obtain Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleID(string $RuleID) Set Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectiveExpression() Obtain Number of Effective Expressions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectiveExpression(integer $EffectiveExpression) Set Number of Effective Expressions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Latest edit time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Latest edit time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperatorUin() Obtain most recently edited account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperatorUin(string $OperatorUin) Set most recently edited account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getStatus() Obtain Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(boolean $Status) Set Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegexpRuleListItem extends AbstractModel
{
    /**
     * @var string Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleID;

    /**
     * @var string Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var integer Number of Effective Expressions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectiveExpression;

    /**
     * @var string Latest edit time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string most recently edited account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperatorUin;

    /**
     * @var boolean Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $RuleID Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleName Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectiveExpression Number of Effective Expressions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Latest edit time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OperatorUin most recently edited account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Status Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("EffectiveExpression",$param) and $param["EffectiveExpression"] !== null) {
            $this->EffectiveExpression = $param["EffectiveExpression"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
