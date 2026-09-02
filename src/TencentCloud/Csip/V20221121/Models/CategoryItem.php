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
 * Point deduction and to-do information for sub-items.
 *
 * @method string getCategoryId() Obtain <p>Sub-item ID<br>Enumeration values:<br>vulnerability: Vulnerability governance<br>cloud_config: Cloud product configuration governance<br>system_baseline: System baseline risk<br>intrusion_alert: Intrusion threat alarm<br>cloud_api_alert: Cloud API alarm<br>ai_agent_alert: AI Agent security alarm<br>object_storage_alert: Object storage exception alarm<br>database_alert: Database security alarm<br>protection_config: Recommended protection configuration not enabled<br>edition_coverage: Insufficient Pro/Ultimate edition coverage<br>product_expiry: Product expires within 7 days</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Sub-item ID<br>Enumeration values:<br>vulnerability: Vulnerability governance<br>cloud_config: Cloud product configuration governance<br>system_baseline: System baseline risk<br>intrusion_alert: Intrusion threat alarm<br>cloud_api_alert: Cloud API alarm<br>ai_agent_alert: AI Agent security alarm<br>object_storage_alert: Object storage exception alarm<br>database_alert: Database security alarm<br>protection_config: Recommended protection configuration not enabled<br>edition_coverage: Insufficient Pro/Ultimate edition coverage<br>product_expiry: Product expires within 7 days</p>
 * @method string getCategoryName() Obtain <p>Sub-item name</p>
 * @method void setCategoryName(string $CategoryName) Set <p>Sub-item name</p>
 * @method string getCategoryDesc() Obtain <p>Subclass description</p>
 * @method void setCategoryDesc(string $CategoryDesc) Set <p>Subclass description</p>
 * @method integer getMaxDeductScore() Obtain <p>Sub-item deduction limit</p>
 * @method void setMaxDeductScore(integer $MaxDeductScore) Set <p>Sub-item deduction limit</p>
 * @method integer getDeductScore() Obtain <p>Actual point deduction for sub-items</p>
 * @method void setDeductScore(integer $DeductScore) Set <p>Actual point deduction for sub-items</p>
 * @method integer getRiskCount() Obtain <p>Total number of risks</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Total number of risks</p>
 * @method array getSeverityItems() Obtain <p>Level details, sub-items of risk/threat type have values</p>
 * @method void setSeverityItems(array $SeverityItems) Set <p>Level details, sub-items of risk/threat type have values</p>
 * @method string getDeductReason() Obtain <p>Reason for deduction description</p>
 * @method void setDeductReason(string $DeductReason) Set <p>Reason for deduction description</p>
 * @method string getActionText() Obtain <p>Handling suggestion copywriting</p>
 * @method void setActionText(string $ActionText) Set <p>Handling suggestion copywriting</p>
 * @method ProtectionDetail getProtectionDetail() Obtain <p>Protection configuration detail, returned only for protection configuration dimension sub-items</p>
 * @method void setProtectionDetail(ProtectionDetail $ProtectionDetail) Set <p>Protection configuration detail, returned only for protection configuration dimension sub-items</p>
 */
class CategoryItem extends AbstractModel
{
    /**
     * @var string <p>Sub-item ID<br>Enumeration values:<br>vulnerability: Vulnerability governance<br>cloud_config: Cloud product configuration governance<br>system_baseline: System baseline risk<br>intrusion_alert: Intrusion threat alarm<br>cloud_api_alert: Cloud API alarm<br>ai_agent_alert: AI Agent security alarm<br>object_storage_alert: Object storage exception alarm<br>database_alert: Database security alarm<br>protection_config: Recommended protection configuration not enabled<br>edition_coverage: Insufficient Pro/Ultimate edition coverage<br>product_expiry: Product expires within 7 days</p>
     */
    public $CategoryId;

    /**
     * @var string <p>Sub-item name</p>
     */
    public $CategoryName;

    /**
     * @var string <p>Subclass description</p>
     */
    public $CategoryDesc;

    /**
     * @var integer <p>Sub-item deduction limit</p>
     */
    public $MaxDeductScore;

    /**
     * @var integer <p>Actual point deduction for sub-items</p>
     */
    public $DeductScore;

    /**
     * @var integer <p>Total number of risks</p>
     */
    public $RiskCount;

    /**
     * @var array <p>Level details, sub-items of risk/threat type have values</p>
     */
    public $SeverityItems;

    /**
     * @var string <p>Reason for deduction description</p>
     */
    public $DeductReason;

    /**
     * @var string <p>Handling suggestion copywriting</p>
     */
    public $ActionText;

    /**
     * @var ProtectionDetail <p>Protection configuration detail, returned only for protection configuration dimension sub-items</p>
     */
    public $ProtectionDetail;

    /**
     * @param string $CategoryId <p>Sub-item ID<br>Enumeration values:<br>vulnerability: Vulnerability governance<br>cloud_config: Cloud product configuration governance<br>system_baseline: System baseline risk<br>intrusion_alert: Intrusion threat alarm<br>cloud_api_alert: Cloud API alarm<br>ai_agent_alert: AI Agent security alarm<br>object_storage_alert: Object storage exception alarm<br>database_alert: Database security alarm<br>protection_config: Recommended protection configuration not enabled<br>edition_coverage: Insufficient Pro/Ultimate edition coverage<br>product_expiry: Product expires within 7 days</p>
     * @param string $CategoryName <p>Sub-item name</p>
     * @param string $CategoryDesc <p>Subclass description</p>
     * @param integer $MaxDeductScore <p>Sub-item deduction limit</p>
     * @param integer $DeductScore <p>Actual point deduction for sub-items</p>
     * @param integer $RiskCount <p>Total number of risks</p>
     * @param array $SeverityItems <p>Level details, sub-items of risk/threat type have values</p>
     * @param string $DeductReason <p>Reason for deduction description</p>
     * @param string $ActionText <p>Handling suggestion copywriting</p>
     * @param ProtectionDetail $ProtectionDetail <p>Protection configuration detail, returned only for protection configuration dimension sub-items</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("CategoryDesc",$param) and $param["CategoryDesc"] !== null) {
            $this->CategoryDesc = $param["CategoryDesc"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductScore",$param) and $param["DeductScore"] !== null) {
            $this->DeductScore = $param["DeductScore"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("SeverityItems",$param) and $param["SeverityItems"] !== null) {
            $this->SeverityItems = [];
            foreach ($param["SeverityItems"] as $key => $value){
                $obj = new SeverityItem();
                $obj->deserialize($value);
                array_push($this->SeverityItems, $obj);
            }
        }

        if (array_key_exists("DeductReason",$param) and $param["DeductReason"] !== null) {
            $this->DeductReason = $param["DeductReason"];
        }

        if (array_key_exists("ActionText",$param) and $param["ActionText"] !== null) {
            $this->ActionText = $param["ActionText"];
        }

        if (array_key_exists("ProtectionDetail",$param) and $param["ProtectionDetail"] !== null) {
            $this->ProtectionDetail = new ProtectionDetail();
            $this->ProtectionDetail->deserialize($param["ProtectionDetail"]);
        }
    }
}
