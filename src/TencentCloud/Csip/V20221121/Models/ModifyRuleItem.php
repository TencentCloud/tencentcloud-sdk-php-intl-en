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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modifies a rule item
 *
 * @method string getRuleType() Obtain Rule type
Enumeration values:
Dimension: dimension-level rule
category: Subitem-level rule
Severity: severity-level rule
 * @method void setRuleType(string $RuleType) Set Rule type
Enumeration values:
Dimension: dimension-level rule
category: Subitem-level rule
Severity: severity-level rule
 * @method string getDimensionId() Obtain Dimension ID
 * @method void setDimensionId(string $DimensionId) Set Dimension ID
 * @method string getCategoryId() Obtain Sub-item ID, category, and severity level are required.
 * @method void setCategoryId(string $CategoryId) Set Sub-item ID, category, and severity level are required.
 * @method string getSeverity() Obtain severity level. Required.
Enumeration values:
critical: severe
High: high risk
Medium: medium-risk
low: low-risk
 * @method void setSeverity(string $Severity) Set severity level. Required.
Enumeration values:
critical: severe
High: high risk
Medium: medium-risk
low: low-risk
 * @method integer getMaxDeductScore() Obtain Deduction limit
 * @method void setMaxDeductScore(integer $MaxDeductScore) Set Deduction limit
 * @method integer getDeductPerItem() Obtain Points deducted per time.
 * @method void setDeductPerItem(integer $DeductPerItem) Set Points deducted per time.
 */
class ModifyRuleItem extends AbstractModel
{
    /**
     * @var string Rule type
Enumeration values:
Dimension: dimension-level rule
category: Subitem-level rule
Severity: severity-level rule
     */
    public $RuleType;

    /**
     * @var string Dimension ID
     */
    public $DimensionId;

    /**
     * @var string Sub-item ID, category, and severity level are required.
     */
    public $CategoryId;

    /**
     * @var string severity level. Required.
Enumeration values:
critical: severe
High: high risk
Medium: medium-risk
low: low-risk
     */
    public $Severity;

    /**
     * @var integer Deduction limit
     */
    public $MaxDeductScore;

    /**
     * @var integer Points deducted per time.
     */
    public $DeductPerItem;

    /**
     * @param string $RuleType Rule type
Enumeration values:
Dimension: dimension-level rule
category: Subitem-level rule
Severity: severity-level rule
     * @param string $DimensionId Dimension ID
     * @param string $CategoryId Sub-item ID, category, and severity level are required.
     * @param string $Severity severity level. Required.
Enumeration values:
critical: severe
High: high risk
Medium: medium-risk
low: low-risk
     * @param integer $MaxDeductScore Deduction limit
     * @param integer $DeductPerItem Points deducted per time.
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("DimensionId",$param) and $param["DimensionId"] !== null) {
            $this->DimensionId = $param["DimensionId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductPerItem",$param) and $param["DeductPerItem"] !== null) {
            $this->DeductPerItem = $param["DeductPerItem"];
        }
    }
}
