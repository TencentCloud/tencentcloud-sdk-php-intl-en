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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAggregateConfigRules request structure.
 *
 * @method integer getLimit() Obtain Specifies the limit per page.
 * @method void setLimit(integer $Limit) Set Specifies the limit per page.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getAccountGroupId() Obtain Account group ID
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID
 * @method string getOrderType() Obtain Sort type, descending: desc, ascending: asc.
 * @method void setOrderType(string $OrderType) Set Sort type, descending: desc, ascending: asc.
 * @method array getRiskLevel() Obtain Risk level

1: High risk.
2: Medium risk.
3: Low risk.
 * @method void setRiskLevel(array $RiskLevel) Set Risk level

1: High risk.
2: Medium risk.
3: Low risk.
 * @method string getState() Obtain Rule status
 * @method void setState(string $State) Set Rule status
 * @method array getComplianceResult() Obtain Evaluation result
 * @method void setComplianceResult(array $ComplianceResult) Set Evaluation result
 * @method string getRuleName() Obtain Name of the rule
 * @method void setRuleName(string $RuleName) Set Name of the rule
 * @method integer getRuleOwnerId() Obtain Rule ownership account ID
 * @method void setRuleOwnerId(integer $RuleOwnerId) Set Rule ownership account ID
 */
class ListAggregateConfigRulesRequest extends AbstractModel
{
    /**
     * @var integer Specifies the limit per page.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Account group ID
     */
    public $AccountGroupId;

    /**
     * @var string Sort type, descending: desc, ascending: asc.
     */
    public $OrderType;

    /**
     * @var array Risk level

1: High risk.
2: Medium risk.
3: Low risk.
     */
    public $RiskLevel;

    /**
     * @var string Rule status
     */
    public $State;

    /**
     * @var array Evaluation result
     */
    public $ComplianceResult;

    /**
     * @var string Name of the rule
     */
    public $RuleName;

    /**
     * @var integer Rule ownership account ID
     */
    public $RuleOwnerId;

    /**
     * @param integer $Limit Specifies the limit per page.
     * @param integer $Offset Offset.
     * @param string $AccountGroupId Account group ID
     * @param string $OrderType Sort type, descending: desc, ascending: asc.
     * @param array $RiskLevel Risk level

1: High risk.
2: Medium risk.
3: Low risk.
     * @param string $State Rule status
     * @param array $ComplianceResult Evaluation result
     * @param string $RuleName Name of the rule
     * @param integer $RuleOwnerId Rule ownership account ID
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleOwnerId",$param) and $param["RuleOwnerId"] !== null) {
            $this->RuleOwnerId = $param["RuleOwnerId"];
        }
    }
}
