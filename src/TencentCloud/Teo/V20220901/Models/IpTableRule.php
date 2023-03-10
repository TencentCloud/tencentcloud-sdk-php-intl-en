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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP blocklist/allowlist rule details
 *
 * @method string getAction() Obtain The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
 * @method void setAction(string $Action) Set The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
 * @method string getMatchFrom() Obtain The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
 * @method void setMatchFrom(string $MatchFrom) Set The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
 * @method string getOperator() Obtain Matching method. It defaults to `equal` if it’s left empty.
Values: 
<li>`is_empty`: The field is empty.</li>
<li>`not_exists`: The configuration item does not exist.</li>
<li>`include`: Include</li>
<li>`not_include`: Do not include</li>
<li>`equal`: Equal to</li>
<li>`not_equal`: Not equal to</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperator(string $Operator) Set Matching method. It defaults to `equal` if it’s left empty.
Values: 
<li>`is_empty`: The field is empty.</li>
<li>`not_exists`: The configuration item does not exist.</li>
<li>`include`: Include</li>
<li>`not_include`: Do not include</li>
<li>`equal`: Equal to</li>
<li>`not_equal`: Not equal to</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
 * @method string getUpdateTime() Obtain The update time, which is only used as an output parameter.
 * @method void setUpdateTime(string $UpdateTime) Set The update time, which is only used as an output parameter.
 * @method string getStatus() Obtain The rule status. A null value indicates that the rule is enabled. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set The rule status. A null value indicates that the rule is enabled. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleName() Obtain The rule name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set The rule name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMatchContent() Obtain Matching content. It’s not required when `Operator` is `is_emty` or `not_exists`. 
 * @method void setMatchContent(string $MatchContent) Set Matching content. It’s not required when `Operator` is `is_emty` or `not_exists`. 
 */
class IpTableRule extends AbstractModel
{
    /**
     * @var string The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
     */
    public $Action;

    /**
     * @var string The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
     */
    public $MatchFrom;

    /**
     * @var string Matching method. It defaults to `equal` if it’s left empty.
Values: 
<li>`is_empty`: The field is empty.</li>
<li>`not_exists`: The configuration item does not exist.</li>
<li>`include`: Include</li>
<li>`not_include`: Do not include</li>
<li>`equal`: Equal to</li>
<li>`not_equal`: Not equal to</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operator;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
     */
    public $RuleID;

    /**
     * @var string The update time, which is only used as an output parameter.
     */
    public $UpdateTime;

    /**
     * @var string The rule status. A null value indicates that the rule is enabled. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string The rule name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var string Matching content. It’s not required when `Operator` is `is_emty` or `not_exists`. 
     */
    public $MatchContent;

    /**
     * @param string $Action The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
     * @param string $MatchFrom The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
     * @param string $Operator Matching method. It defaults to `equal` if it’s left empty.
Values: 
<li>`is_empty`: The field is empty.</li>
<li>`not_exists`: The configuration item does not exist.</li>
<li>`include`: Include</li>
<li>`not_include`: Do not include</li>
<li>`equal`: Equal to</li>
<li>`not_equal`: Not equal to</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
     * @param string $UpdateTime The update time, which is only used as an output parameter.
     * @param string $Status The rule status. A null value indicates that the rule is enabled. Values:
<li>`on`: Enabled</li>
<li>`off`: Disabled</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleName The rule name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MatchContent Matching content. It’s not required when `Operator` is `is_emty` or `not_exists`. 
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
