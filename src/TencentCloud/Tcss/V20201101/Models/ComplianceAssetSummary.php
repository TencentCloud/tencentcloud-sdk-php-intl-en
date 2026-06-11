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
 * Asset overview
 *
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method boolean getIsCustomerFirstCheck() Obtain Whether it is the first check. This parameter is used together with `CheckStatus`.
 * @method void setIsCustomerFirstCheck(boolean $IsCustomerFirstCheck) Set Whether it is the first check. This parameter is used together with `CheckStatus`.
 * @method string getCheckStatus() Obtain Check status

`CHECK_UNINIT`: Feature not enabled.

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
 * @method void setCheckStatus(string $CheckStatus) Set Check status

`CHECK_UNINIT`: Feature not enabled.

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
 * @method float getCheckProgress() Obtain The detection progress of this category is a number between 0 and 100. If not in progress, field not found.
 * @method void setCheckProgress(float $CheckProgress) Set The detection progress of this category is a number between 0 and 100. If not in progress, field not found.
 * @method integer getPassedPolicyItemCount() Obtain Number of check items that the asset passed
 * @method void setPassedPolicyItemCount(integer $PassedPolicyItemCount) Set Number of check items that the asset passed
 * @method integer getFailedPolicyItemCount() Obtain Number of check items that the asset failed
 * @method void setFailedPolicyItemCount(integer $FailedPolicyItemCount) Set Number of check items that the asset failed
 * @method integer getFailedCriticalPolicyItemCount() Obtain Number of critical check items that the asset failed
 * @method void setFailedCriticalPolicyItemCount(integer $FailedCriticalPolicyItemCount) Set Number of critical check items that the asset failed
 * @method integer getFailedHighRiskPolicyItemCount() Obtain Number of high-risk check items that the asset failed
 * @method void setFailedHighRiskPolicyItemCount(integer $FailedHighRiskPolicyItemCount) Set Number of high-risk check items that the asset failed
 * @method integer getFailedMediumRiskPolicyItemCount() Obtain Number of medium-risk check items that the asset failed
 * @method void setFailedMediumRiskPolicyItemCount(integer $FailedMediumRiskPolicyItemCount) Set Number of medium-risk check items that the asset failed
 * @method integer getFailedLowRiskPolicyItemCount() Obtain Number of low-risk check items that the asset failed
 * @method void setFailedLowRiskPolicyItemCount(integer $FailedLowRiskPolicyItemCount) Set Number of low-risk check items that the asset failed
 * @method integer getNoticePolicyItemCount() Obtain Number of prompt check items of the asset
 * @method void setNoticePolicyItemCount(integer $NoticePolicyItemCount) Set Number of prompt check items of the asset
 * @method integer getPassedAssetCount() Obtain Number of assets that passed the check
 * @method void setPassedAssetCount(integer $PassedAssetCount) Set Number of assets that passed the check
 * @method integer getFailedAssetCount() Obtain Number of assets that failed the check
 * @method void setFailedAssetCount(integer $FailedAssetCount) Set Number of assets that failed the check
 * @method float getAssetPassedRate() Obtain Asset compliance rate. Value range: 0-100.
 * @method void setAssetPassedRate(float $AssetPassedRate) Set Asset compliance rate. Value range: 0-100.
 * @method integer getScanFailedAssetCount() Obtain Number of assets that failed the check
 * @method void setScanFailedAssetCount(integer $ScanFailedAssetCount) Set Number of assets that failed the check
 * @method float getCheckCostTime() Obtain Time taken for last detection, in seconds.
 * @method void setCheckCostTime(float $CheckCostTime) Set Time taken for last detection, in seconds.
 * @method string getLastCheckTime() Obtain Last detection time.
 * @method void setLastCheckTime(string $LastCheckTime) Set Last detection time.
 * @method CompliancePeriodTaskRule getPeriodRule() Obtain Scheduled check rule
 * @method void setPeriodRule(CompliancePeriodTaskRule $PeriodRule) Set Scheduled check rule
 * @method integer getOpenPolicyItemCount() Obtain Total Number of Enabled Check Items
 * @method void setOpenPolicyItemCount(integer $OpenPolicyItemCount) Set Total Number of Enabled Check Items
 * @method integer getIgnoredPolicyItemCount() Obtain Total Number of Ignored Check Items
 * @method void setIgnoredPolicyItemCount(integer $IgnoredPolicyItemCount) Set Total Number of Ignored Check Items
 * @method integer getTotalPolicyItemCount() Obtain Total number of detection items.
 * @method void setTotalPolicyItemCount(integer $TotalPolicyItemCount) Set Total number of detection items.
 * @method integer getDetectHostCount() Obtain Detection hosts
 * @method void setDetectHostCount(integer $DetectHostCount) Set Detection hosts
 * @method integer getLeftTime() Obtain Remaining time of the current task, in seconds.
 * @method void setLeftTime(integer $LeftTime) Set Remaining time of the current task, in seconds.
 */
class ComplianceAssetSummary extends AbstractModel
{
    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var boolean Whether it is the first check. This parameter is used together with `CheckStatus`.
     */
    public $IsCustomerFirstCheck;

    /**
     * @var string Check status

`CHECK_UNINIT`: Feature not enabled.

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
     */
    public $CheckStatus;

    /**
     * @var float The detection progress of this category is a number between 0 and 100. If not in progress, field not found.
     */
    public $CheckProgress;

    /**
     * @var integer Number of check items that the asset passed
     */
    public $PassedPolicyItemCount;

    /**
     * @var integer Number of check items that the asset failed
     */
    public $FailedPolicyItemCount;

    /**
     * @var integer Number of critical check items that the asset failed
     */
    public $FailedCriticalPolicyItemCount;

    /**
     * @var integer Number of high-risk check items that the asset failed
     */
    public $FailedHighRiskPolicyItemCount;

    /**
     * @var integer Number of medium-risk check items that the asset failed
     */
    public $FailedMediumRiskPolicyItemCount;

    /**
     * @var integer Number of low-risk check items that the asset failed
     */
    public $FailedLowRiskPolicyItemCount;

    /**
     * @var integer Number of prompt check items of the asset
     */
    public $NoticePolicyItemCount;

    /**
     * @var integer Number of assets that passed the check
     */
    public $PassedAssetCount;

    /**
     * @var integer Number of assets that failed the check
     */
    public $FailedAssetCount;

    /**
     * @var float Asset compliance rate. Value range: 0-100.
     */
    public $AssetPassedRate;

    /**
     * @var integer Number of assets that failed the check
     */
    public $ScanFailedAssetCount;

    /**
     * @var float Time taken for last detection, in seconds.
     */
    public $CheckCostTime;

    /**
     * @var string Last detection time.
     */
    public $LastCheckTime;

    /**
     * @var CompliancePeriodTaskRule Scheduled check rule
     */
    public $PeriodRule;

    /**
     * @var integer Total Number of Enabled Check Items
     */
    public $OpenPolicyItemCount;

    /**
     * @var integer Total Number of Ignored Check Items
     */
    public $IgnoredPolicyItemCount;

    /**
     * @var integer Total number of detection items.
     */
    public $TotalPolicyItemCount;

    /**
     * @var integer Detection hosts
     */
    public $DetectHostCount;

    /**
     * @var integer Remaining time of the current task, in seconds.
     */
    public $LeftTime;

    /**
     * @param string $AssetType Asset type
     * @param boolean $IsCustomerFirstCheck Whether it is the first check. This parameter is used together with `CheckStatus`.
     * @param string $CheckStatus Check status

`CHECK_UNINIT`: Feature not enabled.

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
     * @param float $CheckProgress The detection progress of this category is a number between 0 and 100. If not in progress, field not found.
     * @param integer $PassedPolicyItemCount Number of check items that the asset passed
     * @param integer $FailedPolicyItemCount Number of check items that the asset failed
     * @param integer $FailedCriticalPolicyItemCount Number of critical check items that the asset failed
     * @param integer $FailedHighRiskPolicyItemCount Number of high-risk check items that the asset failed
     * @param integer $FailedMediumRiskPolicyItemCount Number of medium-risk check items that the asset failed
     * @param integer $FailedLowRiskPolicyItemCount Number of low-risk check items that the asset failed
     * @param integer $NoticePolicyItemCount Number of prompt check items of the asset
     * @param integer $PassedAssetCount Number of assets that passed the check
     * @param integer $FailedAssetCount Number of assets that failed the check
     * @param float $AssetPassedRate Asset compliance rate. Value range: 0-100.
     * @param integer $ScanFailedAssetCount Number of assets that failed the check
     * @param float $CheckCostTime Time taken for last detection, in seconds.
     * @param string $LastCheckTime Last detection time.
     * @param CompliancePeriodTaskRule $PeriodRule Scheduled check rule
     * @param integer $OpenPolicyItemCount Total Number of Enabled Check Items
     * @param integer $IgnoredPolicyItemCount Total Number of Ignored Check Items
     * @param integer $TotalPolicyItemCount Total number of detection items.
     * @param integer $DetectHostCount Detection hosts
     * @param integer $LeftTime Remaining time of the current task, in seconds.
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("IsCustomerFirstCheck",$param) and $param["IsCustomerFirstCheck"] !== null) {
            $this->IsCustomerFirstCheck = $param["IsCustomerFirstCheck"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CheckProgress",$param) and $param["CheckProgress"] !== null) {
            $this->CheckProgress = $param["CheckProgress"];
        }

        if (array_key_exists("PassedPolicyItemCount",$param) and $param["PassedPolicyItemCount"] !== null) {
            $this->PassedPolicyItemCount = $param["PassedPolicyItemCount"];
        }

        if (array_key_exists("FailedPolicyItemCount",$param) and $param["FailedPolicyItemCount"] !== null) {
            $this->FailedPolicyItemCount = $param["FailedPolicyItemCount"];
        }

        if (array_key_exists("FailedCriticalPolicyItemCount",$param) and $param["FailedCriticalPolicyItemCount"] !== null) {
            $this->FailedCriticalPolicyItemCount = $param["FailedCriticalPolicyItemCount"];
        }

        if (array_key_exists("FailedHighRiskPolicyItemCount",$param) and $param["FailedHighRiskPolicyItemCount"] !== null) {
            $this->FailedHighRiskPolicyItemCount = $param["FailedHighRiskPolicyItemCount"];
        }

        if (array_key_exists("FailedMediumRiskPolicyItemCount",$param) and $param["FailedMediumRiskPolicyItemCount"] !== null) {
            $this->FailedMediumRiskPolicyItemCount = $param["FailedMediumRiskPolicyItemCount"];
        }

        if (array_key_exists("FailedLowRiskPolicyItemCount",$param) and $param["FailedLowRiskPolicyItemCount"] !== null) {
            $this->FailedLowRiskPolicyItemCount = $param["FailedLowRiskPolicyItemCount"];
        }

        if (array_key_exists("NoticePolicyItemCount",$param) and $param["NoticePolicyItemCount"] !== null) {
            $this->NoticePolicyItemCount = $param["NoticePolicyItemCount"];
        }

        if (array_key_exists("PassedAssetCount",$param) and $param["PassedAssetCount"] !== null) {
            $this->PassedAssetCount = $param["PassedAssetCount"];
        }

        if (array_key_exists("FailedAssetCount",$param) and $param["FailedAssetCount"] !== null) {
            $this->FailedAssetCount = $param["FailedAssetCount"];
        }

        if (array_key_exists("AssetPassedRate",$param) and $param["AssetPassedRate"] !== null) {
            $this->AssetPassedRate = $param["AssetPassedRate"];
        }

        if (array_key_exists("ScanFailedAssetCount",$param) and $param["ScanFailedAssetCount"] !== null) {
            $this->ScanFailedAssetCount = $param["ScanFailedAssetCount"];
        }

        if (array_key_exists("CheckCostTime",$param) and $param["CheckCostTime"] !== null) {
            $this->CheckCostTime = $param["CheckCostTime"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("PeriodRule",$param) and $param["PeriodRule"] !== null) {
            $this->PeriodRule = new CompliancePeriodTaskRule();
            $this->PeriodRule->deserialize($param["PeriodRule"]);
        }

        if (array_key_exists("OpenPolicyItemCount",$param) and $param["OpenPolicyItemCount"] !== null) {
            $this->OpenPolicyItemCount = $param["OpenPolicyItemCount"];
        }

        if (array_key_exists("IgnoredPolicyItemCount",$param) and $param["IgnoredPolicyItemCount"] !== null) {
            $this->IgnoredPolicyItemCount = $param["IgnoredPolicyItemCount"];
        }

        if (array_key_exists("TotalPolicyItemCount",$param) and $param["TotalPolicyItemCount"] !== null) {
            $this->TotalPolicyItemCount = $param["TotalPolicyItemCount"];
        }

        if (array_key_exists("DetectHostCount",$param) and $param["DetectHostCount"] !== null) {
            $this->DetectHostCount = $param["DetectHostCount"];
        }

        if (array_key_exists("LeftTime",$param) and $param["LeftTime"] !== null) {
            $this->LeftTime = $param["LeftTime"];
        }
    }
}
