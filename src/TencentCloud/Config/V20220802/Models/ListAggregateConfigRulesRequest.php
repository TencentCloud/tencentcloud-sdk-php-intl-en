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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAggregateConfigRules request structure.
 *
 * @method integer getLimit() Obtain <p>Number of items per page.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page.</p>
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method string getAccountGroupId() Obtain <p>Account group ID.</p>
 * @method void setAccountGroupId(string $AccountGroupId) Set <p>Account group ID.</p>
 * @method string getOrderType() Obtain <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
 * @method array getRiskLevel() Obtain <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method void setRiskLevel(array $RiskLevel) Set <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method string getState() Obtain <p>Rule status.</p>
 * @method void setState(string $State) Set <p>Rule status.</p>
 * @method array getComplianceResult() Obtain <p>Evaluation results.</p>
 * @method void setComplianceResult(array $ComplianceResult) Set <p>Evaluation results.</p>
 * @method string getRuleName() Obtain <p>Rule name.</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name.</p>
 * @method integer getRuleOwnerId() Obtain <p>ID of the account to which the rule belongs.</p>
 * @method void setRuleOwnerId(integer $RuleOwnerId) Set <p>ID of the account to which the rule belongs.</p>
 */
class ListAggregateConfigRulesRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of items per page.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var string <p>Account group ID.</p>
     */
    public $AccountGroupId;

    /**
     * @var string <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
     */
    public $OrderType;

    /**
     * @var array <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Rule status.</p>
     */
    public $State;

    /**
     * @var array <p>Evaluation results.</p>
     */
    public $ComplianceResult;

    /**
     * @var string <p>Rule name.</p>
     */
    public $RuleName;

    /**
     * @var integer <p>ID of the account to which the rule belongs.</p>
     */
    public $RuleOwnerId;

    /**
     * @param integer $Limit <p>Number of items per page.</p>
     * @param integer $Offset <p>Offset.</p>
     * @param string $AccountGroupId <p>Account group ID.</p>
     * @param string $OrderType <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
     * @param array $RiskLevel <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     * @param string $State <p>Rule status.</p>
     * @param array $ComplianceResult <p>Evaluation results.</p>
     * @param string $RuleName <p>Rule name.</p>
     * @param integer $RuleOwnerId <p>ID of the account to which the rule belongs.</p>
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
