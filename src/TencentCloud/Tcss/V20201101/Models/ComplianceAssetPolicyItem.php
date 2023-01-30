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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a check item
 *
 * @method integer getCustomerPolicyItemId() Obtain Unique ID of the customer check item
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) Set Unique ID of the customer check item
 * @method integer getBasePolicyItemId() Obtain Original ID of the check item
 * @method void setBasePolicyItemId(integer $BasePolicyItemId) Set Original ID of the check item
 * @method string getName() Obtain Check item name
 * @method void setName(string $Name) Set Check item name
 * @method string getCategory() Obtain Category of the check item
 * @method void setCategory(string $Category) Set Category of the check item
 * @method integer getBenchmarkStandardId() Obtain Compliance standard ID
 * @method void setBenchmarkStandardId(integer $BenchmarkStandardId) Set Compliance standard ID
 * @method string getBenchmarkStandardName() Obtain Compliance standard name
 * @method void setBenchmarkStandardName(string $BenchmarkStandardName) Set Compliance standard name
 * @method string getRiskLevel() Obtain Severity
 * @method void setRiskLevel(string $RiskLevel) Set Severity
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
 * @method string getCheckResult() Obtain Check result
`RESULT_PASSED`: Passed.
`RESULT_FAILED`: Failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckResult(string $CheckResult) Set Check result
`RESULT_PASSED`: Passed.
`RESULT_FAILED`: Failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWhitelistId() Obtain Allowed item ID of the check item. If it exists and is not `0`, the check item is ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWhitelistId(integer $WhitelistId) Set Allowed item ID of the check item. If it exists and is not `0`, the check item is ignored.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFixSuggestion() Obtain Handling suggestion
 * @method void setFixSuggestion(string $FixSuggestion) Set Handling suggestion
 * @method string getLastCheckTime() Obtain Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastCheckTime(string $LastCheckTime) Set Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyInfo() Obtain Verification information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyInfo(string $VerifyInfo) Set Verification information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComplianceAssetPolicyItem extends AbstractModel
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
     * @var string Category of the check item
     */
    public $Category;

    /**
     * @var integer Compliance standard ID
     */
    public $BenchmarkStandardId;

    /**
     * @var string Compliance standard name
     */
    public $BenchmarkStandardName;

    /**
     * @var string Severity
     */
    public $RiskLevel;

    /**
     * @var string Check status
`CHECK_INIT`: To be checked.
`CHECK_RUNNING`: Checking.
`CHECK_FINISHED`: Checked.
`CHECK_FAILED`: Check failed.
     */
    public $CheckStatus;

    /**
     * @var string Check result
`RESULT_PASSED`: Passed.
`RESULT_FAILED`: Failed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckResult;

    /**
     * @var integer Allowed item ID of the check item. If it exists and is not `0`, the check item is ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WhitelistId;

    /**
     * @var string Handling suggestion
     */
    public $FixSuggestion;

    /**
     * @var string Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastCheckTime;

    /**
     * @var string Verification information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyInfo;

    /**
     * @param integer $CustomerPolicyItemId Unique ID of the customer check item
     * @param integer $BasePolicyItemId Original ID of the check item
     * @param string $Name Check item name
     * @param string $Category Category of the check item
     * @param integer $BenchmarkStandardId Compliance standard ID
     * @param string $BenchmarkStandardName Compliance standard name
     * @param string $RiskLevel Severity
     * @param string $CheckStatus Check status
`CHECK_INIT`: To be checked.
`CHECK_RUNNING`: Checking.
`CHECK_FINISHED`: Checked.
`CHECK_FAILED`: Check failed.
     * @param string $CheckResult Check result
`RESULT_PASSED`: Passed.
`RESULT_FAILED`: Failed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WhitelistId Allowed item ID of the check item. If it exists and is not `0`, the check item is ignored.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FixSuggestion Handling suggestion
     * @param string $LastCheckTime Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyInfo Verification information
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("BenchmarkStandardId",$param) and $param["BenchmarkStandardId"] !== null) {
            $this->BenchmarkStandardId = $param["BenchmarkStandardId"];
        }

        if (array_key_exists("BenchmarkStandardName",$param) and $param["BenchmarkStandardName"] !== null) {
            $this->BenchmarkStandardName = $param["BenchmarkStandardName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("WhitelistId",$param) and $param["WhitelistId"] !== null) {
            $this->WhitelistId = $param["WhitelistId"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("VerifyInfo",$param) and $param["VerifyInfo"] !== null) {
            $this->VerifyInfo = $param["VerifyInfo"];
        }
    }
}
