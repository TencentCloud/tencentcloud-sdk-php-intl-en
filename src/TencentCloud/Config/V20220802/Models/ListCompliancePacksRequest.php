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
 * ListCompliancePacks request structure.
 *
 * @method integer getLimit() Obtain <p>Quantity.</p>
 * @method void setLimit(integer $Limit) Set <p>Quantity.</p>
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method string getCompliancePackName() Obtain <p>Compliance package name.</p>
 * @method void setCompliancePackName(string $CompliancePackName) Set <p>Compliance package name.</p>
 * @method array getRiskLevel() Obtain <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method void setRiskLevel(array $RiskLevel) Set <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
 * @method string getStatus() Obtain <p>Compliance package status. Valid values: ACTIVE (active) and NO_ACTIVE (inactive).</p>
 * @method void setStatus(string $Status) Set <p>Compliance package status. Valid values: ACTIVE (active) and NO_ACTIVE (inactive).</p>
 * @method array getComplianceResult() Obtain <p>Evaluation status. Valid values: &#39;COMPLIANT&#39 (compliant)<br>&#39;NON_COMPLIANT&#39 (non-compliant)</p>
 * @method void setComplianceResult(array $ComplianceResult) Set <p>Evaluation status. Valid values: &#39;COMPLIANT&#39 (compliant)<br>&#39;NON_COMPLIANT&#39 (non-compliant)</p>
 * @method string getOrderType() Obtain <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
 * @method string getIncludeCompliancePackRuleResult() Obtain <p>Contains compliance pack rule statistical information</p><p>Enumeration values:</p><ul><li>1: Yes</li></ul>
 * @method void setIncludeCompliancePackRuleResult(string $IncludeCompliancePackRuleResult) Set <p>Contains compliance pack rule statistical information</p><p>Enumeration values:</p><ul><li>1: Yes</li></ul>
 */
class ListCompliancePacksRequest extends AbstractModel
{
    /**
     * @var integer <p>Quantity.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var string <p>Compliance package name.</p>
     */
    public $CompliancePackName;

    /**
     * @var array <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Compliance package status. Valid values: ACTIVE (active) and NO_ACTIVE (inactive).</p>
     */
    public $Status;

    /**
     * @var array <p>Evaluation status. Valid values: &#39;COMPLIANT&#39 (compliant)<br>&#39;NON_COMPLIANT&#39 (non-compliant)</p>
     */
    public $ComplianceResult;

    /**
     * @var string <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
     */
    public $OrderType;

    /**
     * @var string <p>Contains compliance pack rule statistical information</p><p>Enumeration values:</p><ul><li>1: Yes</li></ul>
     */
    public $IncludeCompliancePackRuleResult;

    /**
     * @param integer $Limit <p>Quantity.</p>
     * @param integer $Offset <p>Offset.</p>
     * @param string $CompliancePackName <p>Compliance package name.</p>
     * @param array $RiskLevel <p>Risk level. Valid values:<br>1: high-risk<br>2: medium-risk<br>3: low risk</p>
     * @param string $Status <p>Compliance package status. Valid values: ACTIVE (active) and NO_ACTIVE (inactive).</p>
     * @param array $ComplianceResult <p>Evaluation status. Valid values: &#39;COMPLIANT&#39 (compliant)<br>&#39;NON_COMPLIANT&#39 (non-compliant)</p>
     * @param string $OrderType <p>Sorting type. Valid values: desc (descending) and asc (ascending).</p>
     * @param string $IncludeCompliancePackRuleResult <p>Contains compliance pack rule statistical information</p><p>Enumeration values:</p><ul><li>1: Yes</li></ul>
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

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("IncludeCompliancePackRuleResult",$param) and $param["IncludeCompliancePackRuleResult"] !== null) {
            $this->IncludeCompliancePackRuleResult = $param["IncludeCompliancePackRuleResult"];
        }
    }
}
