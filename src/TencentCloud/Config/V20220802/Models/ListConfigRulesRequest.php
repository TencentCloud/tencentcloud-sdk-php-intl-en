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
 * ListConfigRules request structure.
 *
 * @method integer getLimit() Obtain Number of entries per page.
Valid values: 1-200
 * @method void setLimit(integer $Limit) Set Number of entries per page.
Valid values: 1-200
 * @method integer getOffset() Obtain Offset.
Value range: minimum value is 0
 * @method void setOffset(integer $Offset) Set Offset.
Value range: minimum value is 0
 * @method string getOrderType() Obtain Sorting type (rule name).
- desc: descending order.
asc: ascending order.
 * @method void setOrderType(string $OrderType) Set Sorting type (rule name).
- desc: descending order.
asc: ascending order.
 * @method array getRiskLevel() Obtain Risk level.
1: High-risk
2: Medium-risk,
3: Low risk.
 * @method void setRiskLevel(array $RiskLevel) Set Risk level.
1: High-risk
2: Medium-risk,
3: Low risk.
 * @method string getState() Obtain Rule Status.
ACTIVE: enable
UN_ACTIVE: Disabled

 * @method void setState(string $State) Set Rule Status.
ACTIVE: enable
UN_ACTIVE: Disabled

 * @method array getComplianceResult() Obtain Assessment result.
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
 * @method void setComplianceResult(array $ComplianceResult) Set Assessment result.
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
 * @method string getRuleName() Obtain Rule Name
 * @method void setRuleName(string $RuleName) Set Rule Name
 */
class ListConfigRulesRequest extends AbstractModel
{
    /**
     * @var integer Number of entries per page.
Valid values: 1-200
     */
    public $Limit;

    /**
     * @var integer Offset.
Value range: minimum value is 0
     */
    public $Offset;

    /**
     * @var string Sorting type (rule name).
- desc: descending order.
asc: ascending order.
     */
    public $OrderType;

    /**
     * @var array Risk level.
1: High-risk
2: Medium-risk,
3: Low risk.
     */
    public $RiskLevel;

    /**
     * @var string Rule Status.
ACTIVE: enable
UN_ACTIVE: Disabled

     */
    public $State;

    /**
     * @var array Assessment result.
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
     */
    public $ComplianceResult;

    /**
     * @var string Rule Name
     */
    public $RuleName;

    /**
     * @param integer $Limit Number of entries per page.
Valid values: 1-200
     * @param integer $Offset Offset.
Value range: minimum value is 0
     * @param string $OrderType Sorting type (rule name).
- desc: descending order.
asc: ascending order.
     * @param array $RiskLevel Risk level.
1: High-risk
2: Medium-risk,
3: Low risk.
     * @param string $State Rule Status.
ACTIVE: enable
UN_ACTIVE: Disabled

     * @param array $ComplianceResult Assessment result.
COMPLIANT: compliant
NON_COMPLIANT: non-compliance
     * @param string $RuleName Rule Name
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
    }
}
