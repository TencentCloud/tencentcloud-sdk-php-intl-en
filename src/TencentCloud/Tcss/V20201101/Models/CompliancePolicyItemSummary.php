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
 * Aggregated information of a check item
 *
 * @method integer getCustomerPolicyItemId() Obtain Unique ID of the customer check item
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) Set Unique ID of the customer check item
 * @method integer getBasePolicyItemId() Obtain Original ID of the check item
 * @method void setBasePolicyItemId(integer $BasePolicyItemId) Set Original ID of the check item
 * @method string getName() Obtain Check item name
 * @method void setName(string $Name) Set Check item name
 * @method string getCategory() Obtain Category of the check item, which is an enumerated string.
 * @method void setCategory(string $Category) Set Category of the check item, which is an enumerated string.
 * @method string getBenchmarkStandardName() Obtain Compliance standard
 * @method void setBenchmarkStandardName(string $BenchmarkStandardName) Set Compliance standard
 * @method string getRiskLevel() Obtain Severity. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
 * @method void setRiskLevel(string $RiskLevel) Set Severity. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
 * @method string getAssetType() Obtain Asset type of the check item
 * @method void setAssetType(string $AssetType) Set Asset type of the check item
 * @method string getLastCheckTime() Obtain Last detection time
 * @method void setLastCheckTime(string $LastCheckTime) Set Last detection time
 * @method string getCheckStatus() Obtain Check status

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
 * @method void setCheckStatus(string $CheckStatus) Set Check status

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
 * @method string getCheckResult() Obtain Detection result. RESULT_PASSED: Passed.

RESULT_FAILED: failed
 * @method void setCheckResult(string $CheckResult) Set Detection result. RESULT_PASSED: Passed.

RESULT_FAILED: failed
 * @method integer getPassedAssetCount() Obtain Number of assets passed detection
 * @method void setPassedAssetCount(integer $PassedAssetCount) Set Number of assets passed detection
 * @method integer getFailedAssetCount() Obtain Number of assets with detection failed
 * @method void setFailedAssetCount(integer $FailedAssetCount) Set Number of assets with detection failed
 * @method integer getWhitelistId() Obtain ID of the allowlist item corresponding to the detection item. If it exists and is not 0, it means the detection item is ignored by the user.
 * @method void setWhitelistId(integer $WhitelistId) Set ID of the allowlist item corresponding to the detection item. If it exists and is not 0, it means the detection item is ignored by the user.
 * @method string getFixSuggestion() Obtain Handling suggestion
 * @method void setFixSuggestion(string $FixSuggestion) Set Handling suggestion
 * @method integer getBenchmarkStandardId() Obtain Compliance standard ID
 * @method void setBenchmarkStandardId(integer $BenchmarkStandardId) Set Compliance standard ID
 * @method string getApplicableVersion() Obtain Applicable Version for Check Items
 * @method void setApplicableVersion(string $ApplicableVersion) Set Applicable Version for Check Items
 * @method string getDescription() Obtain Check Item Description
 * @method void setDescription(string $Description) Set Check Item Description
 * @method string getAuditProcedure() Obtain Check Item Audit Method
 * @method void setAuditProcedure(string $AuditProcedure) Set Check Item Audit Method
 * @method integer getIsEnable() Obtain Whether enabled
<li>0 Off</li>
<li>1 Enable</li>
 * @method void setIsEnable(integer $IsEnable) Set Whether enabled
<li>0 Off</li>
<li>1 Enable</li>
 */
class CompliancePolicyItemSummary extends AbstractModel
{
    /**
     * @var integer Unique ID of the customer check item
     */
    public $CustomerPolicyItemId;

    /**
     * @var integer Original ID of the check item
     */
    public $BasePolicyItemId;

    /**
     * @var string Check item name
     */
    public $Name;

    /**
     * @var string Category of the check item, which is an enumerated string.
     */
    public $Category;

    /**
     * @var string Compliance standard
     */
    public $BenchmarkStandardName;

    /**
     * @var string Severity. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
     */
    public $RiskLevel;

    /**
     * @var string Asset type of the check item
     */
    public $AssetType;

    /**
     * @var string Last detection time
     */
    public $LastCheckTime;

    /**
     * @var string Check status

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
     */
    public $CheckStatus;

    /**
     * @var string Detection result. RESULT_PASSED: Passed.

RESULT_FAILED: failed
     */
    public $CheckResult;

    /**
     * @var integer Number of assets passed detection
     */
    public $PassedAssetCount;

    /**
     * @var integer Number of assets with detection failed
     */
    public $FailedAssetCount;

    /**
     * @var integer ID of the allowlist item corresponding to the detection item. If it exists and is not 0, it means the detection item is ignored by the user.
     */
    public $WhitelistId;

    /**
     * @var string Handling suggestion
     */
    public $FixSuggestion;

    /**
     * @var integer Compliance standard ID
     */
    public $BenchmarkStandardId;

    /**
     * @var string Applicable Version for Check Items
     */
    public $ApplicableVersion;

    /**
     * @var string Check Item Description
     */
    public $Description;

    /**
     * @var string Check Item Audit Method
     */
    public $AuditProcedure;

    /**
     * @var integer Whether enabled
<li>0 Off</li>
<li>1 Enable</li>
     */
    public $IsEnable;

    /**
     * @param integer $CustomerPolicyItemId Unique ID of the customer check item
     * @param integer $BasePolicyItemId Original ID of the check item
     * @param string $Name Check item name
     * @param string $Category Category of the check item, which is an enumerated string.
     * @param string $BenchmarkStandardName Compliance standard
     * @param string $RiskLevel Severity. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
     * @param string $AssetType Asset type of the check item
     * @param string $LastCheckTime Last detection time
     * @param string $CheckStatus Check status

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
     * @param string $CheckResult Detection result. RESULT_PASSED: Passed.

RESULT_FAILED: failed
     * @param integer $PassedAssetCount Number of assets passed detection
     * @param integer $FailedAssetCount Number of assets with detection failed
     * @param integer $WhitelistId ID of the allowlist item corresponding to the detection item. If it exists and is not 0, it means the detection item is ignored by the user.
     * @param string $FixSuggestion Handling suggestion
     * @param integer $BenchmarkStandardId Compliance standard ID
     * @param string $ApplicableVersion Applicable Version for Check Items
     * @param string $Description Check Item Description
     * @param string $AuditProcedure Check Item Audit Method
     * @param integer $IsEnable Whether enabled
<li>0 Off</li>
<li>1 Enable</li>
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
        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("BasePolicyItemId",$param) and $param["BasePolicyItemId"] !== null) {
            $this->BasePolicyItemId = $param["BasePolicyItemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("BenchmarkStandardName",$param) and $param["BenchmarkStandardName"] !== null) {
            $this->BenchmarkStandardName = $param["BenchmarkStandardName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("PassedAssetCount",$param) and $param["PassedAssetCount"] !== null) {
            $this->PassedAssetCount = $param["PassedAssetCount"];
        }

        if (array_key_exists("FailedAssetCount",$param) and $param["FailedAssetCount"] !== null) {
            $this->FailedAssetCount = $param["FailedAssetCount"];
        }

        if (array_key_exists("WhitelistId",$param) and $param["WhitelistId"] !== null) {
            $this->WhitelistId = $param["WhitelistId"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }

        if (array_key_exists("BenchmarkStandardId",$param) and $param["BenchmarkStandardId"] !== null) {
            $this->BenchmarkStandardId = $param["BenchmarkStandardId"];
        }

        if (array_key_exists("ApplicableVersion",$param) and $param["ApplicableVersion"] !== null) {
            $this->ApplicableVersion = $param["ApplicableVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AuditProcedure",$param) and $param["AuditProcedure"] !== null) {
            $this->AuditProcedure = $param["AuditProcedure"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }
    }
}
