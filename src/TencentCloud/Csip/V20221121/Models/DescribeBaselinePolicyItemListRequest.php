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
 * DescribeBaselinePolicyItemList request structure.
 *
 * @method integer getPolicyID() Obtain <p>Baseline policy ID.</p>
 * @method void setPolicyID(integer $PolicyID) Set <p>Baseline policy ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getParentCategoryID() Obtain <p>Baseline parent category ID for filtering detection items under the specified parent category.</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) Set <p>Baseline parent category ID for filtering detection items under the specified parent category.</p>
 * @method integer getLimit() Obtain <p>Number of entries returned per page for paging query. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of entries returned per page for paging query. Default value: 10. Maximum value: 100.</p>
 * @method integer getOffset() Obtain <p>Paginated query offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paginated query offset. Default value: 0.</p>
 * @method array getFilters() Obtain <p>List of Universal Filter Criteria. Supported filter fields:</p><ul><li>CategoryID: subcategory ID, exact matching</li><li>Name: detection item name, fuzzy matching</li><li>RiskLevel: risk level, exact matching. Value: LOW, MEDIUM, HIGH, CRITICAL</li><li>SupportCustomValue: whether editing is supported, exact matching. Value: true, false</li></ul>
 * @method void setFilters(array $Filters) Set <p>List of Universal Filter Criteria. Supported filter fields:</p><ul><li>CategoryID: subcategory ID, exact matching</li><li>Name: detection item name, fuzzy matching</li><li>RiskLevel: risk level, exact matching. Value: LOW, MEDIUM, HIGH, CRITICAL</li><li>SupportCustomValue: whether editing is supported, exact matching. Value: true, false</li></ul>
 */
class DescribeBaselinePolicyItemListRequest extends AbstractModel
{
    /**
     * @var integer <p>Baseline policy ID.</p>
     */
    public $PolicyID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Baseline parent category ID for filtering detection items under the specified parent category.</p>
     */
    public $ParentCategoryID;

    /**
     * @var integer <p>Number of entries returned per page for paging query. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paginated query offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var array <p>List of Universal Filter Criteria. Supported filter fields:</p><ul><li>CategoryID: subcategory ID, exact matching</li><li>Name: detection item name, fuzzy matching</li><li>RiskLevel: risk level, exact matching. Value: LOW, MEDIUM, HIGH, CRITICAL</li><li>SupportCustomValue: whether editing is supported, exact matching. Value: true, false</li></ul>
     */
    public $Filters;

    /**
     * @param integer $PolicyID <p>Baseline policy ID.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $ParentCategoryID <p>Baseline parent category ID for filtering detection items under the specified parent category.</p>
     * @param integer $Limit <p>Number of entries returned per page for paging query. Default value: 10. Maximum value: 100.</p>
     * @param integer $Offset <p>Paginated query offset. Default value: 0.</p>
     * @param array $Filters <p>List of Universal Filter Criteria. Supported filter fields:</p><ul><li>CategoryID: subcategory ID, exact matching</li><li>Name: detection item name, fuzzy matching</li><li>RiskLevel: risk level, exact matching. Value: LOW, MEDIUM, HIGH, CRITICAL</li><li>SupportCustomValue: whether editing is supported, exact matching. Value: true, false</li></ul>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
