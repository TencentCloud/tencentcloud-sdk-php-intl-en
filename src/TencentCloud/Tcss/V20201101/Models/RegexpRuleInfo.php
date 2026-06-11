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
 * Regular Expression Rule Details
 *
 * @method string getRuleName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getStatus() Obtain Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(boolean $Status) Set Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExpressionList() Obtain Regular Expression List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpressionList(array $ExpressionList) Set Regular Expression List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleID() Obtain Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleID(string $RuleID) Set Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Latest update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Latest update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperatorUIN() Obtain Latest Operating Account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperatorUIN(string $OperatorUIN) Set Latest Operating Account
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegexpRuleInfo extends AbstractModel
{
    /**
     * @var string Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var boolean Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var array Regular Expression List
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpressionList;

    /**
     * @var string Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleID;

    /**
     * @var string Latest update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Latest Operating Account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperatorUIN;

    /**
     * @param string $RuleName Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Status Enabled status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExpressionList Regular Expression List
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleID Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Latest update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OperatorUIN Latest Operating Account
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpressionList",$param) and $param["ExpressionList"] !== null) {
            $this->ExpressionList = [];
            foreach ($param["ExpressionList"] as $key => $value){
                $obj = new WhiteListRegexpExpressionInfo();
                $obj->deserialize($value);
                array_push($this->ExpressionList, $obj);
            }
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperatorUIN",$param) and $param["OperatorUIN"] !== null) {
            $this->OperatorUIN = $param["OperatorUIN"];
        }
    }
}
