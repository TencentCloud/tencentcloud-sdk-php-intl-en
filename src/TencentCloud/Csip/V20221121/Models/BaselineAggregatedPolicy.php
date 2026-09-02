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
 * Baseline policy aggregation results, for summary display of the current scan pass/fail status by policy dimension.
 *
 * @method integer getParentCategoryID() Obtain <p>Parent category ID of the system policy (only for aggregation when PolicyType=SYSTEM; 0 for custom policy).</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) Set <p>Parent category ID of the system policy (only for aggregation when PolicyType=SYSTEM; 0 for custom policy).</p>
 * @method array getPolicyID() Obtain <p>List of baseline policy IDs involved in this aggregation.</p>
 * @method void setPolicyID(array $PolicyID) Set <p>List of baseline policy IDs involved in this aggregation.</p>
 * @method string getName() Obtain <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
 * @method void setName(string $Name) Set <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
 * @method string getDescription() Obtain <p>Policy description.</p>
 * @method void setDescription(string $Description) Set <p>Policy description.</p>
 * @method integer getConfItemCount() Obtain <p>Number of detection items configured in the policy.</p>
 * @method void setConfItemCount(integer $ConfItemCount) Set <p>Number of detection items configured in the policy.</p>
 * @method integer getPassItemCount() Obtain <p>Number of detection items with a result of PASS under this policy.</p>
 * @method void setPassItemCount(integer $PassItemCount) Set <p>Number of detection items with a result of PASS under this policy.</p>
 * @method integer getNotPassItemCount() Obtain <p>Number of detection items with result NOT_PASS under this policy.</p>
 * @method void setNotPassItemCount(integer $NotPassItemCount) Set <p>Number of detection items with result NOT_PASS under this policy.</p>
 * @method array getNotPassItemRiskLevelStatistic() Obtain <p>Distribution statistics of detection failed items by risk level (LOW/MEDIUM/HIGH/CRITICAL).</p>
 * @method void setNotPassItemRiskLevelStatistic(array $NotPassItemRiskLevelStatistic) Set <p>Distribution statistics of detection failed items by risk level (LOW/MEDIUM/HIGH/CRITICAL).</p>
 * @method float getPassRate() Obtain <p>Passing rate of the last scan of this policy, unit: percentage (0-100), rounded to two decimal places.</p>
 * @method void setPassRate(float $PassRate) Set <p>Passing rate of the last scan of this policy, unit: percentage (0-100), rounded to two decimal places.</p>
 * @method array getCategoryStatistic() Obtain <p>Scanning result statistics details of each subcategory under this policy.</p>
 * @method void setCategoryStatistic(array $CategoryStatistic) Set <p>Scanning result statistics details of each subcategory under this policy.</p>
 * @method string getPolicyType() Obtain <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method void setPolicyType(string $PolicyType) Set <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method string getCheckAssetType() Obtain <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) Set <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 * @method boolean getScanned() Obtain <p>Whether the baseline category has been scanned</p>
 * @method void setScanned(boolean $Scanned) Set <p>Whether the baseline category has been scanned</p>
 */
class BaselineAggregatedPolicy extends AbstractModel
{
    /**
     * @var integer <p>Parent category ID of the system policy (only for aggregation when PolicyType=SYSTEM; 0 for custom policy).</p>
     */
    public $ParentCategoryID;

    /**
     * @var array <p>List of baseline policy IDs involved in this aggregation.</p>
     */
    public $PolicyID;

    /**
     * @var string <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
     */
    public $Name;

    /**
     * @var string <p>Policy description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Number of detection items configured in the policy.</p>
     */
    public $ConfItemCount;

    /**
     * @var integer <p>Number of detection items with a result of PASS under this policy.</p>
     */
    public $PassItemCount;

    /**
     * @var integer <p>Number of detection items with result NOT_PASS under this policy.</p>
     */
    public $NotPassItemCount;

    /**
     * @var array <p>Distribution statistics of detection failed items by risk level (LOW/MEDIUM/HIGH/CRITICAL).</p>
     */
    public $NotPassItemRiskLevelStatistic;

    /**
     * @var float <p>Passing rate of the last scan of this policy, unit: percentage (0-100), rounded to two decimal places.</p>
     */
    public $PassRate;

    /**
     * @var array <p>Scanning result statistics details of each subcategory under this policy.</p>
     */
    public $CategoryStatistic;

    /**
     * @var string <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     */
    public $PolicyType;

    /**
     * @var string <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var boolean <p>Whether the baseline category has been scanned</p>
     */
    public $Scanned;

    /**
     * @param integer $ParentCategoryID <p>Parent category ID of the system policy (only for aggregation when PolicyType=SYSTEM; 0 for custom policy).</p>
     * @param array $PolicyID <p>List of baseline policy IDs involved in this aggregation.</p>
     * @param string $Name <p>Policy Name (custom policy is user input, and system policy is a built-in classification name).</p>
     * @param string $Description <p>Policy description.</p>
     * @param integer $ConfItemCount <p>Number of detection items configured in the policy.</p>
     * @param integer $PassItemCount <p>Number of detection items with a result of PASS under this policy.</p>
     * @param integer $NotPassItemCount <p>Number of detection items with result NOT_PASS under this policy.</p>
     * @param array $NotPassItemRiskLevelStatistic <p>Distribution statistics of detection failed items by risk level (LOW/MEDIUM/HIGH/CRITICAL).</p>
     * @param float $PassRate <p>Passing rate of the last scan of this policy, unit: percentage (0-100), rounded to two decimal places.</p>
     * @param array $CategoryStatistic <p>Scanning result statistics details of each subcategory under this policy.</p>
     * @param string $PolicyType <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     * @param string $CheckAssetType <p>Detect asset major category, case-sensitive host baseline and container cluster baseline. Parameter values:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
     * @param boolean $Scanned <p>Whether the baseline category has been scanned</p>
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
        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConfItemCount",$param) and $param["ConfItemCount"] !== null) {
            $this->ConfItemCount = $param["ConfItemCount"];
        }

        if (array_key_exists("PassItemCount",$param) and $param["PassItemCount"] !== null) {
            $this->PassItemCount = $param["PassItemCount"];
        }

        if (array_key_exists("NotPassItemCount",$param) and $param["NotPassItemCount"] !== null) {
            $this->NotPassItemCount = $param["NotPassItemCount"];
        }

        if (array_key_exists("NotPassItemRiskLevelStatistic",$param) and $param["NotPassItemRiskLevelStatistic"] !== null) {
            $this->NotPassItemRiskLevelStatistic = [];
            foreach ($param["NotPassItemRiskLevelStatistic"] as $key => $value){
                $obj = new BaselineRiskLevelStatistic();
                $obj->deserialize($value);
                array_push($this->NotPassItemRiskLevelStatistic, $obj);
            }
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("CategoryStatistic",$param) and $param["CategoryStatistic"] !== null) {
            $this->CategoryStatistic = [];
            foreach ($param["CategoryStatistic"] as $key => $value){
                $obj = new BaselineAggregatedCategory();
                $obj->deserialize($value);
                array_push($this->CategoryStatistic, $obj);
            }
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("Scanned",$param) and $param["Scanned"] !== null) {
            $this->Scanned = $param["Scanned"];
        }
    }
}
