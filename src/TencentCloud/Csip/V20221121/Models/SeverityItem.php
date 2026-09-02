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
 * Deduction detail by severity
 *
 * @method string getSeverity() Obtain Risk level
Enumeration values:
critical: severe
high: high risk
Medium: medium risk
low: low-risk
 * @method void setSeverity(string $Severity) Set Risk level
Enumeration values:
critical: severe
high: high risk
Medium: medium risk
low: low-risk
 * @method string getSeverityName() Obtain Risk level name in Chinese
 * @method void setSeverityName(string $SeverityName) Set Risk level name in Chinese
 * @method integer getRiskCount() Obtain Number of risks at this level
 * @method void setRiskCount(integer $RiskCount) Set Number of risks at this level
 * @method integer getDeductPerItem() Obtain Points deducted per time.
 * @method void setDeductPerItem(integer $DeductPerItem) Set Points deducted per time.
 * @method integer getMaxDeductScore() Obtain Severity deduction limit
 * @method void setMaxDeductScore(integer $MaxDeductScore) Set Severity deduction limit
 * @method integer getDeductScore() Obtain Actual point deduction
 * @method void setDeductScore(integer $DeductScore) Set Actual point deduction
 */
class SeverityItem extends AbstractModel
{
    /**
     * @var string Risk level
Enumeration values:
critical: severe
high: high risk
Medium: medium risk
low: low-risk
     */
    public $Severity;

    /**
     * @var string Risk level name in Chinese
     */
    public $SeverityName;

    /**
     * @var integer Number of risks at this level
     */
    public $RiskCount;

    /**
     * @var integer Points deducted per time.
     */
    public $DeductPerItem;

    /**
     * @var integer Severity deduction limit
     */
    public $MaxDeductScore;

    /**
     * @var integer Actual point deduction
     */
    public $DeductScore;

    /**
     * @param string $Severity Risk level
Enumeration values:
critical: severe
high: high risk
Medium: medium risk
low: low-risk
     * @param string $SeverityName Risk level name in Chinese
     * @param integer $RiskCount Number of risks at this level
     * @param integer $DeductPerItem Points deducted per time.
     * @param integer $MaxDeductScore Severity deduction limit
     * @param integer $DeductScore Actual point deduction
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
        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("SeverityName",$param) and $param["SeverityName"] !== null) {
            $this->SeverityName = $param["SeverityName"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("DeductPerItem",$param) and $param["DeductPerItem"] !== null) {
            $this->DeductPerItem = $param["DeductPerItem"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductScore",$param) and $param["DeductScore"] !== null) {
            $this->DeductScore = $param["DeductScore"];
        }
    }
}
