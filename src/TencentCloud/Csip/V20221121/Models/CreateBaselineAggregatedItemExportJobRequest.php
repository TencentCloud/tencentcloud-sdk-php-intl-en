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
 * CreateBaselineAggregatedItemExportJob request structure.
 *
 * @method array getPolicyID() Obtain <p>Baseline policy ID list (you can pass multiple entries at the same time for federated statistics).</p>
 * @method void setPolicyID(array $PolicyID) Set <p>Baseline policy ID list (you can pass multiple entries at the same time for federated statistics).</p>
 * @method integer getParentCategoryID() Obtain <p>Baseline system parent category ID.</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) Set <p>Baseline system parent category ID.</p>
 * @method integer getCategoryID() Obtain <p>Baseline subcategory ID.</p>
 * @method void setCategoryID(integer $CategoryID) Set <p>Baseline subcategory ID.</p>
 * @method string getName() Obtain <p>Export task name. If not specified, it will be automatically generated.</p>
 * @method void setName(string $Name) Set <p>Export task name. If not specified, it will be automatically generated.</p>
 * @method string getExportType() Obtain <p>Export type. Default value: RISK.<br>Enumeration values:<br>STATISTIC: export statistics<br>RISK: export risk details</p>
 * @method void setExportType(string $ExportType) Set <p>Export type. Default value: RISK.<br>Enumeration values:<br>STATISTIC: export statistics<br>RISK: export risk details</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Universal Filter Criteria. Supported Name: ResultStatus (pass status: PASS/NOT_PASS), Name (detection item name, fuzzy search), RiskLevel (risk level: CRITICAL/HIGH/MEDIUM/LOW), PolicyName (associated baseline/policy name, fuzzy search).</p>
 * @method void setFilters(array $Filters) Set <p>Universal Filter Criteria. Supported Name: ResultStatus (pass status: PASS/NOT_PASS), Name (detection item name, fuzzy search), RiskLevel (risk level: CRITICAL/HIGH/MEDIUM/LOW), PolicyName (associated baseline/policy name, fuzzy search).</p>
 * @method string getCheckAssetType() Obtain <p>Deprecated.</p>
 * @method void setCheckAssetType(string $CheckAssetType) Set <p>Deprecated.</p>
 */
class CreateBaselineAggregatedItemExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Baseline policy ID list (you can pass multiple entries at the same time for federated statistics).</p>
     */
    public $PolicyID;

    /**
     * @var integer <p>Baseline system parent category ID.</p>
     */
    public $ParentCategoryID;

    /**
     * @var integer <p>Baseline subcategory ID.</p>
     */
    public $CategoryID;

    /**
     * @var string <p>Export task name. If not specified, it will be automatically generated.</p>
     */
    public $Name;

    /**
     * @var string <p>Export type. Default value: RISK.<br>Enumeration values:<br>STATISTIC: export statistics<br>RISK: export risk details</p>
     */
    public $ExportType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Universal Filter Criteria. Supported Name: ResultStatus (pass status: PASS/NOT_PASS), Name (detection item name, fuzzy search), RiskLevel (risk level: CRITICAL/HIGH/MEDIUM/LOW), PolicyName (associated baseline/policy name, fuzzy search).</p>
     */
    public $Filters;

    /**
     * @var string <p>Deprecated.</p>
     */
    public $CheckAssetType;

    /**
     * @param array $PolicyID <p>Baseline policy ID list (you can pass multiple entries at the same time for federated statistics).</p>
     * @param integer $ParentCategoryID <p>Baseline system parent category ID.</p>
     * @param integer $CategoryID <p>Baseline subcategory ID.</p>
     * @param string $Name <p>Export task name. If not specified, it will be automatically generated.</p>
     * @param string $ExportType <p>Export type. Default value: RISK.<br>Enumeration values:<br>STATISTIC: export statistics<br>RISK: export risk details</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Universal Filter Criteria. Supported Name: ResultStatus (pass status: PASS/NOT_PASS), Name (detection item name, fuzzy search), RiskLevel (risk level: CRITICAL/HIGH/MEDIUM/LOW), PolicyName (associated baseline/policy name, fuzzy search).</p>
     * @param string $CheckAssetType <p>Deprecated.</p>
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
        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }
    }
}
