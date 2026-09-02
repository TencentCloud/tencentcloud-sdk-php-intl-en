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
 * Scoring rule item
 *
 * @method string getRuleType() Obtain <p>Rule type<br>Enumeration value:<br>dimension: dimensional rule<br>category: category-level rule<br>severity: severity-level rule</p>
 * @method void setRuleType(string $RuleType) Set <p>Rule type<br>Enumeration value:<br>dimension: dimensional rule<br>category: category-level rule<br>severity: severity-level rule</p>
 * @method string getDimensionId() Obtain <p>Dimension ID</p>
 * @method void setDimensionId(string $DimensionId) Set <p>Dimension ID</p>
 * @method string getDimensionName() Obtain <p>Dimension name</p>
 * @method void setDimensionName(string $DimensionName) Set <p>Dimension name</p>
 * @method string getCategoryId() Obtain <p>Sub-item ID.</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Sub-item ID.</p>
 * @method string getCategoryDesc() Obtain <p>Sub-item point deduction rule description</p>
 * @method void setCategoryDesc(string $CategoryDesc) Set <p>Sub-item point deduction rule description</p>
 * @method string getCategoryName() Obtain <p>Sub-item name.</p>
 * @method void setCategoryName(string $CategoryName) Set <p>Sub-item name.</p>
 * @method string getSeverity() Obtain <p>Severity<br>Enumeration values:<br>critical: Critical<br>high: High risk<br>medium: Medium risk<br>low: Low risk</p>
 * @method void setSeverity(string $Severity) Set <p>Severity<br>Enumeration values:<br>critical: Critical<br>high: High risk<br>medium: Medium risk<br>low: Low risk</p>
 * @method integer getMaxDeductScore() Obtain <p>Deduction limit</p>
 * @method void setMaxDeductScore(integer $MaxDeductScore) Set <p>Deduction limit</p>
 * @method integer getDeductPerItem() Obtain <p>Points deducted per time.</p>
 * @method void setDeductPerItem(integer $DeductPerItem) Set <p>Points deducted per time.</p>
 * @method boolean getDeductPerItemDisabled() Obtain <p>Whether individual deduction is non-editable (true for sub-items under Protection Configuration Dimension)</p>
 * @method void setDeductPerItemDisabled(boolean $DeductPerItemDisabled) Set <p>Whether individual deduction is non-editable (true for sub-items under Protection Configuration Dimension)</p>
 * @method integer getSortOrder() Obtain <p>Sorting serial number</p>
 * @method void setSortOrder(integer $SortOrder) Set <p>Sorting serial number</p>
 */
class ScoreRuleItem extends AbstractModel
{
    /**
     * @var string <p>Rule type<br>Enumeration value:<br>dimension: dimensional rule<br>category: category-level rule<br>severity: severity-level rule</p>
     */
    public $RuleType;

    /**
     * @var string <p>Dimension ID</p>
     */
    public $DimensionId;

    /**
     * @var string <p>Dimension name</p>
     */
    public $DimensionName;

    /**
     * @var string <p>Sub-item ID.</p>
     */
    public $CategoryId;

    /**
     * @var string <p>Sub-item point deduction rule description</p>
     */
    public $CategoryDesc;

    /**
     * @var string <p>Sub-item name.</p>
     */
    public $CategoryName;

    /**
     * @var string <p>Severity<br>Enumeration values:<br>critical: Critical<br>high: High risk<br>medium: Medium risk<br>low: Low risk</p>
     */
    public $Severity;

    /**
     * @var integer <p>Deduction limit</p>
     */
    public $MaxDeductScore;

    /**
     * @var integer <p>Points deducted per time.</p>
     */
    public $DeductPerItem;

    /**
     * @var boolean <p>Whether individual deduction is non-editable (true for sub-items under Protection Configuration Dimension)</p>
     */
    public $DeductPerItemDisabled;

    /**
     * @var integer <p>Sorting serial number</p>
     */
    public $SortOrder;

    /**
     * @param string $RuleType <p>Rule type<br>Enumeration value:<br>dimension: dimensional rule<br>category: category-level rule<br>severity: severity-level rule</p>
     * @param string $DimensionId <p>Dimension ID</p>
     * @param string $DimensionName <p>Dimension name</p>
     * @param string $CategoryId <p>Sub-item ID.</p>
     * @param string $CategoryDesc <p>Sub-item point deduction rule description</p>
     * @param string $CategoryName <p>Sub-item name.</p>
     * @param string $Severity <p>Severity<br>Enumeration values:<br>critical: Critical<br>high: High risk<br>medium: Medium risk<br>low: Low risk</p>
     * @param integer $MaxDeductScore <p>Deduction limit</p>
     * @param integer $DeductPerItem <p>Points deducted per time.</p>
     * @param boolean $DeductPerItemDisabled <p>Whether individual deduction is non-editable (true for sub-items under Protection Configuration Dimension)</p>
     * @param integer $SortOrder <p>Sorting serial number</p>
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

        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryDesc",$param) and $param["CategoryDesc"] !== null) {
            $this->CategoryDesc = $param["CategoryDesc"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
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

        if (array_key_exists("DeductPerItemDisabled",$param) and $param["DeductPerItemDisabled"] !== null) {
            $this->DeductPerItemDisabled = $param["DeductPerItemDisabled"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
