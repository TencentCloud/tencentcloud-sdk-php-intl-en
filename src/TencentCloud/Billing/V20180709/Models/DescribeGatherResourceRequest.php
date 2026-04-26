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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGatherResource request structure.
 *
 * @method integer getLimit() Obtain Quantity, with the maximum value of 1,000
 * @method void setLimit(integer $Limit) Set Quantity, with the maximum value of 1,000
 * @method integer getOffset() Obtain Pagination offset. If Offset is 0, it indicates the first page. If Limit is 100, then Offset is 100, and it indicates the second page. If Offset is 200, it indicates the third page, and so on.
 * @method void setOffset(integer $Offset) Set Pagination offset. If Offset is 0, it indicates the first page. If Limit is 100, then Offset is 100, and it indicates the second page. If Offset is 200, it indicates the third page, and so on.
 * @method string getMonth() Obtain Bill month, in the format of 2024-02, which is the current month by default if not provided.
 * @method void setMonth(string $Month) Set Bill month, in the format of 2024-02, which is the current month by default if not provided.
 * @method string getTreeNodeUniqKey() Obtain Unique identifier of a billing unit, used for filtering
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) Set Unique identifier of a billing unit, used for filtering
 * @method string getGatherType() Obtain Resource directory category, with the enumerated values as follows:
all - All 
none - Not collected
 * @method void setGatherType(string $GatherType) Set Resource directory category, with the enumerated values as follows:
all - All 
none - Not collected
 * @method string getSort() Obtain Sorting field, with the enumerated values as follows:
realCost - Discounted total
cashPayAmount - Cash amount
voucherPayAmount - Amount of promo voucher
incentivePayAmount - Amount of free credit
transferPayAmount - Royalty amount
 * @method void setSort(string $Sort) Set Sorting field, with the enumerated values as follows:
realCost - Discounted total
cashPayAmount - Cash amount
voucherPayAmount - Amount of promo voucher
incentivePayAmount - Amount of free credit
transferPayAmount - Royalty amount
 * @method string getSortType() Obtain Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
 * @method void setSortType(string $SortType) Set Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
 * @method array getBusinessCodes() Obtain Product code, used for filtering
 * @method void setBusinessCodes(array $BusinessCodes) Set Product code, used for filtering
 * @method array getProductCodes() Obtain Subproduct code, used for filtering
 * @method void setProductCodes(array $ProductCodes) Set Subproduct code, used for filtering
 * @method array getItemCodes() Obtain Component name code, used for filtering
 * @method void setItemCodes(array $ItemCodes) Set Component name code, used for filtering
 * @method array getRegionIds() Obtain Region ID, used for filtering
 * @method void setRegionIds(array $RegionIds) Set Region ID, used for filtering
 * @method array getInstanceTypes() Obtain Instance type code, used for filtering
 * @method void setInstanceTypes(array $InstanceTypes) Set Instance type code, used for filtering
 * @method array getPayModes() Obtain Billing mode code, used for filtering
 * @method void setPayModes(array $PayModes) Set Billing mode code, used for filtering
 * @method array getOperateUins() Obtain Operator UIN, used for filtering
 * @method void setOperateUins(array $OperateUins) Set Operator UIN, used for filtering
 * @method array getOwnerUins() Obtain User UIN, used for filtering
 * @method void setOwnerUins(array $OwnerUins) Set User UIN, used for filtering
 * @method string getSearchKey() Obtain Fuzzy search: supports tag, resource ID, and resource alias.
 * @method void setSearchKey(string $SearchKey) Set Fuzzy search: supports tag, resource ID, and resource alias.
 * @method array getTag() Obtain Tag, used for filtering
 * @method void setTag(array $Tag) Set Tag, used for filtering
 * @method array getProjectIds() Obtain Project ID, used for filtering
 * @method void setProjectIds(array $ProjectIds) Set Project ID, used for filtering
 * @method array getActionTypes() Obtain Transaction type code, used for filtering
 * @method void setActionTypes(array $ActionTypes) Set Transaction type code, used for filtering
 */
class DescribeGatherResourceRequest extends AbstractModel
{
    /**
     * @var integer Quantity, with the maximum value of 1,000
     */
    public $Limit;

    /**
     * @var integer Pagination offset. If Offset is 0, it indicates the first page. If Limit is 100, then Offset is 100, and it indicates the second page. If Offset is 200, it indicates the third page, and so on.
     */
    public $Offset;

    /**
     * @var string Bill month, in the format of 2024-02, which is the current month by default if not provided.
     */
    public $Month;

    /**
     * @var string Unique identifier of a billing unit, used for filtering
     */
    public $TreeNodeUniqKey;

    /**
     * @var string Resource directory category, with the enumerated values as follows:
all - All 
none - Not collected
     */
    public $GatherType;

    /**
     * @var string Sorting field, with the enumerated values as follows:
realCost - Discounted total
cashPayAmount - Cash amount
voucherPayAmount - Amount of promo voucher
incentivePayAmount - Amount of free credit
transferPayAmount - Royalty amount
     */
    public $Sort;

    /**
     * @var string Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
     */
    public $SortType;

    /**
     * @var array Product code, used for filtering
     */
    public $BusinessCodes;

    /**
     * @var array Subproduct code, used for filtering
     */
    public $ProductCodes;

    /**
     * @var array Component name code, used for filtering
     */
    public $ItemCodes;

    /**
     * @var array Region ID, used for filtering
     */
    public $RegionIds;

    /**
     * @var array Instance type code, used for filtering
     */
    public $InstanceTypes;

    /**
     * @var array Billing mode code, used for filtering
     */
    public $PayModes;

    /**
     * @var array Operator UIN, used for filtering
     */
    public $OperateUins;

    /**
     * @var array User UIN, used for filtering
     */
    public $OwnerUins;

    /**
     * @var string Fuzzy search: supports tag, resource ID, and resource alias.
     */
    public $SearchKey;

    /**
     * @var array Tag, used for filtering
     */
    public $Tag;

    /**
     * @var array Project ID, used for filtering
     */
    public $ProjectIds;

    /**
     * @var array Transaction type code, used for filtering
     */
    public $ActionTypes;

    /**
     * @param integer $Limit Quantity, with the maximum value of 1,000
     * @param integer $Offset Pagination offset. If Offset is 0, it indicates the first page. If Limit is 100, then Offset is 100, and it indicates the second page. If Offset is 200, it indicates the third page, and so on.
     * @param string $Month Bill month, in the format of 2024-02, which is the current month by default if not provided.
     * @param string $TreeNodeUniqKey Unique identifier of a billing unit, used for filtering
     * @param string $GatherType Resource directory category, with the enumerated values as follows:
all - All 
none - Not collected
     * @param string $Sort Sorting field, with the enumerated values as follows:
realCost - Discounted total
cashPayAmount - Cash amount
voucherPayAmount - Amount of promo voucher
incentivePayAmount - Amount of free credit
transferPayAmount - Royalty amount
     * @param string $SortType Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
     * @param array $BusinessCodes Product code, used for filtering
     * @param array $ProductCodes Subproduct code, used for filtering
     * @param array $ItemCodes Component name code, used for filtering
     * @param array $RegionIds Region ID, used for filtering
     * @param array $InstanceTypes Instance type code, used for filtering
     * @param array $PayModes Billing mode code, used for filtering
     * @param array $OperateUins Operator UIN, used for filtering
     * @param array $OwnerUins User UIN, used for filtering
     * @param string $SearchKey Fuzzy search: supports tag, resource ID, and resource alias.
     * @param array $Tag Tag, used for filtering
     * @param array $ProjectIds Project ID, used for filtering
     * @param array $ActionTypes Transaction type code, used for filtering
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("GatherType",$param) and $param["GatherType"] !== null) {
            $this->GatherType = $param["GatherType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("ItemCodes",$param) and $param["ItemCodes"] !== null) {
            $this->ItemCodes = $param["ItemCodes"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("PayModes",$param) and $param["PayModes"] !== null) {
            $this->PayModes = $param["PayModes"];
        }

        if (array_key_exists("OperateUins",$param) and $param["OperateUins"] !== null) {
            $this->OperateUins = $param["OperateUins"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }
    }
}
