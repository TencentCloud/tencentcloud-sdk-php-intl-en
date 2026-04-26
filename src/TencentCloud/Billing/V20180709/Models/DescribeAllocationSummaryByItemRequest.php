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
 * DescribeAllocationSummaryByItem request structure.
 *
 * @method integer getLimit() Obtain Quantity, with the maximum value of 1,000


 * @method void setLimit(integer $Limit) Set Quantity, with the maximum value of 1,000


 * @method integer getOffset() Obtain Pagination offset. If Offset is 0, it indicates the first page. If Limit is 100, then Offset is 100, and it indicates the second page. If Offset is 200, it indicates the third page, and so on.
 * @method void setOffset(integer $Offset) Set Pagination offset. If Offset is 0, it indicates the first page. If Limit is 100, then Offset is 100, and it indicates the second page. If Offset is 200, it indicates the third page, and so on.
 * @method string getMonth() Obtain Bill month, in the format of 2024-02, which is the current month by default if not provided


 * @method void setMonth(string $Month) Set Bill month, in the format of 2024-02, which is the current month by default if not provided


 * @method string getPeriodType() Obtain Statistical period, with the enumerated values as follows:
month - Month
day - Day
 * @method void setPeriodType(string $PeriodType) Set Statistical period, with the enumerated values as follows:
month - Month
day - Day
 * @method array getTreeNodeUniqKeys() Obtain Unique identifier of a billing unit, used for filtering


 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) Set Unique identifier of a billing unit, used for filtering


 * @method string getSort() Obtain Sorting field, with the enumerated values as follows:
RiTimeSpan - Deduction duration of a reserved instance
ExtendPayAmount1 - Original price for the deduction duration of a reserved instance
RealCost - Discounted total
CashPayAmount - Cash amount
VoucherPayAmount - Amount of promo voucher
IncentivePayAmount - Amount of free credit
TransferPayAmount - Royalty amount
Cost - Original price of a component
 * @method void setSort(string $Sort) Set Sorting field, with the enumerated values as follows:
RiTimeSpan - Deduction duration of a reserved instance
ExtendPayAmount1 - Original price for the deduction duration of a reserved instance
RealCost - Discounted total
CashPayAmount - Cash amount
VoucherPayAmount - Amount of promo voucher
IncentivePayAmount - Amount of free credit
TransferPayAmount - Royalty amount
Cost - Original price of a component
 * @method string getSortType() Obtain Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
 * @method void setSortType(string $SortType) Set Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
 * @method array getBillDates() Obtain Date, used for filtering


 * @method void setBillDates(array $BillDates) Set Date, used for filtering


 * @method array getBusinessCodes() Obtain Product code, used for filtering


 * @method void setBusinessCodes(array $BusinessCodes) Set Product code, used for filtering


 * @method array getOwnerUins() Obtain User UIN, used for filtering


 * @method void setOwnerUins(array $OwnerUins) Set User UIN, used for filtering


 * @method array getOperateUins() Obtain Operator UIN, used for filtering


 * @method void setOperateUins(array $OperateUins) Set Operator UIN, used for filtering


 * @method array getPayModes() Obtain Billing mode code, used for filtering


 * @method void setPayModes(array $PayModes) Set Billing mode code, used for filtering


 * @method array getActionTypes() Obtain Transaction type code, used for filtering


 * @method void setActionTypes(array $ActionTypes) Set Transaction type code, used for filtering


 * @method array getProductCodes() Obtain Subproduct code, used for filtering


 * @method void setProductCodes(array $ProductCodes) Set Subproduct code, used for filtering


 * @method array getRegionIds() Obtain Region ID, used for filtering


 * @method void setRegionIds(array $RegionIds) Set Region ID, used for filtering


 * @method array getZoneIds() Obtain Availability Zone (AZ) ID, used for filtering


 * @method void setZoneIds(array $ZoneIds) Set Availability Zone (AZ) ID, used for filtering


 * @method array getInstanceTypes() Obtain Instance type code, used for filtering


 * @method void setInstanceTypes(array $InstanceTypes) Set Instance type code, used for filtering


 * @method array getTag() Obtain Tag, used for filtering


 * @method void setTag(array $Tag) Set Tag, used for filtering


 * @method array getComponentCodes() Obtain Component type code, used for filtering
 * @method void setComponentCodes(array $ComponentCodes) Set Component type code, used for filtering
 * @method array getItemCodes() Obtain Component name code, used for filtering
 * @method void setItemCodes(array $ItemCodes) Set Component name code, used for filtering
 * @method string getSearchKey() Obtain Fuzzy search: supports tag, resource ID, and resource alias.
 * @method void setSearchKey(string $SearchKey) Set Fuzzy search: supports tag, resource ID, and resource alias.
 * @method array getProjectIds() Obtain Project ID, used for filtering


 * @method void setProjectIds(array $ProjectIds) Set Project ID, used for filtering


 * @method array getAllocationType() Obtain Cost collection type, with the enumerated values as follows:
0 - Allocation
1 - Collection
-1 - Unallocated
 * @method void setAllocationType(array $AllocationType) Set Cost collection type, with the enumerated values as follows:
0 - Allocation
1 - Collection
-1 - Unallocated
 */
class DescribeAllocationSummaryByItemRequest extends AbstractModel
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
     * @var string Bill month, in the format of 2024-02, which is the current month by default if not provided


     */
    public $Month;

    /**
     * @var string Statistical period, with the enumerated values as follows:
month - Month
day - Day
     */
    public $PeriodType;

    /**
     * @var array Unique identifier of a billing unit, used for filtering


     */
    public $TreeNodeUniqKeys;

    /**
     * @var string Sorting field, with the enumerated values as follows:
RiTimeSpan - Deduction duration of a reserved instance
ExtendPayAmount1 - Original price for the deduction duration of a reserved instance
RealCost - Discounted total
CashPayAmount - Cash amount
VoucherPayAmount - Amount of promo voucher
IncentivePayAmount - Amount of free credit
TransferPayAmount - Royalty amount
Cost - Original price of a component
     */
    public $Sort;

    /**
     * @var string Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
     */
    public $SortType;

    /**
     * @var array Date, used for filtering


     */
    public $BillDates;

    /**
     * @var array Product code, used for filtering


     */
    public $BusinessCodes;

    /**
     * @var array User UIN, used for filtering


     */
    public $OwnerUins;

    /**
     * @var array Operator UIN, used for filtering


     */
    public $OperateUins;

    /**
     * @var array Billing mode code, used for filtering


     */
    public $PayModes;

    /**
     * @var array Transaction type code, used for filtering


     */
    public $ActionTypes;

    /**
     * @var array Subproduct code, used for filtering


     */
    public $ProductCodes;

    /**
     * @var array Region ID, used for filtering


     */
    public $RegionIds;

    /**
     * @var array Availability Zone (AZ) ID, used for filtering


     */
    public $ZoneIds;

    /**
     * @var array Instance type code, used for filtering


     */
    public $InstanceTypes;

    /**
     * @var array Tag, used for filtering


     */
    public $Tag;

    /**
     * @var array Component type code, used for filtering
     */
    public $ComponentCodes;

    /**
     * @var array Component name code, used for filtering
     */
    public $ItemCodes;

    /**
     * @var string Fuzzy search: supports tag, resource ID, and resource alias.
     */
    public $SearchKey;

    /**
     * @var array Project ID, used for filtering


     */
    public $ProjectIds;

    /**
     * @var array Cost collection type, with the enumerated values as follows:
0 - Allocation
1 - Collection
-1 - Unallocated
     */
    public $AllocationType;

    /**
     * @param integer $Limit Quantity, with the maximum value of 1,000


     * @param integer $Offset Pagination offset. If Offset is 0, it indicates the first page. If Limit is 100, then Offset is 100, and it indicates the second page. If Offset is 200, it indicates the third page, and so on.
     * @param string $Month Bill month, in the format of 2024-02, which is the current month by default if not provided


     * @param string $PeriodType Statistical period, with the enumerated values as follows:
month - Month
day - Day
     * @param array $TreeNodeUniqKeys Unique identifier of a billing unit, used for filtering


     * @param string $Sort Sorting field, with the enumerated values as follows:
RiTimeSpan - Deduction duration of a reserved instance
ExtendPayAmount1 - Original price for the deduction duration of a reserved instance
RealCost - Discounted total
CashPayAmount - Cash amount
VoucherPayAmount - Amount of promo voucher
IncentivePayAmount - Amount of free credit
TransferPayAmount - Royalty amount
Cost - Original price of a component
     * @param string $SortType Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
     * @param array $BillDates Date, used for filtering


     * @param array $BusinessCodes Product code, used for filtering


     * @param array $OwnerUins User UIN, used for filtering


     * @param array $OperateUins Operator UIN, used for filtering


     * @param array $PayModes Billing mode code, used for filtering


     * @param array $ActionTypes Transaction type code, used for filtering


     * @param array $ProductCodes Subproduct code, used for filtering


     * @param array $RegionIds Region ID, used for filtering


     * @param array $ZoneIds Availability Zone (AZ) ID, used for filtering


     * @param array $InstanceTypes Instance type code, used for filtering


     * @param array $Tag Tag, used for filtering


     * @param array $ComponentCodes Component type code, used for filtering
     * @param array $ItemCodes Component name code, used for filtering
     * @param string $SearchKey Fuzzy search: supports tag, resource ID, and resource alias.
     * @param array $ProjectIds Project ID, used for filtering


     * @param array $AllocationType Cost collection type, with the enumerated values as follows:
0 - Allocation
1 - Collection
-1 - Unallocated
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

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("BillDates",$param) and $param["BillDates"] !== null) {
            $this->BillDates = $param["BillDates"];
        }

        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("OperateUins",$param) and $param["OperateUins"] !== null) {
            $this->OperateUins = $param["OperateUins"];
        }

        if (array_key_exists("PayModes",$param) and $param["PayModes"] !== null) {
            $this->PayModes = $param["PayModes"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("ComponentCodes",$param) and $param["ComponentCodes"] !== null) {
            $this->ComponentCodes = $param["ComponentCodes"];
        }

        if (array_key_exists("ItemCodes",$param) and $param["ItemCodes"] !== null) {
            $this->ItemCodes = $param["ItemCodes"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("AllocationType",$param) and $param["AllocationType"] !== null) {
            $this->AllocationType = $param["AllocationType"];
        }
    }
}
