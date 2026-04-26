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
 * DescribeAllocationBillConditions request structure.
 *
 * @method string getMonth() Obtain Bill month, in the format of 2024-02, which is the current month by default if not provided
 * @method void setMonth(string $Month) Set Bill month, in the format of 2024-02, which is the current month by default if not provided
 * @method array getTreeNodeUniqKeys() Obtain Unique identifier of a billing unit, used for filtering
 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) Set Unique identifier of a billing unit, used for filtering
 * @method array getBillDates() Obtain Date
 * @method void setBillDates(array $BillDates) Set Date
 * @method array getBusinessCodes() Obtain Product code
 * @method void setBusinessCodes(array $BusinessCodes) Set Product code
 * @method array getOwnerUins() Obtain User UIN
 * @method void setOwnerUins(array $OwnerUins) Set User UIN
 * @method array getOperateUins() Obtain Operator UIN
 * @method void setOperateUins(array $OperateUins) Set Operator UIN
 * @method array getPayModes() Obtain Billing mode code
 * @method void setPayModes(array $PayModes) Set Billing mode code
 * @method array getActionTypes() Obtain Transaction type code
 * @method void setActionTypes(array $ActionTypes) Set Transaction type code
 * @method array getProductCodes() Obtain Subproduct code
 * @method void setProductCodes(array $ProductCodes) Set Subproduct code
 * @method array getRegionIds() Obtain Region ID
 * @method void setRegionIds(array $RegionIds) Set Region ID
 * @method array getZoneIds() Obtain AZ ID
 * @method void setZoneIds(array $ZoneIds) Set AZ ID
 * @method array getInstanceTypes() Obtain Instance type code
 * @method void setInstanceTypes(array $InstanceTypes) Set Instance type code
 * @method array getTag() Obtain Tag
 * @method void setTag(array $Tag) Set Tag
 * @method array getComponentCodes() Obtain Component type code
 * @method void setComponentCodes(array $ComponentCodes) Set Component type code
 * @method array getItemCodes() Obtain Component name code
 * @method void setItemCodes(array $ItemCodes) Set Component name code
 * @method string getSearchKey() Obtain Fuzzy search criteria
 * @method void setSearchKey(string $SearchKey) Set Fuzzy search criteria
 * @method array getProjectIds() Obtain Project ID
 * @method void setProjectIds(array $ProjectIds) Set Project ID
 * @method array getAllocationType() Obtain Cost collection type
 * @method void setAllocationType(array $AllocationType) Set Cost collection type
 */
class DescribeAllocationBillConditionsRequest extends AbstractModel
{
    /**
     * @var string Bill month, in the format of 2024-02, which is the current month by default if not provided
     */
    public $Month;

    /**
     * @var array Unique identifier of a billing unit, used for filtering
     */
    public $TreeNodeUniqKeys;

    /**
     * @var array Date
     */
    public $BillDates;

    /**
     * @var array Product code
     */
    public $BusinessCodes;

    /**
     * @var array User UIN
     */
    public $OwnerUins;

    /**
     * @var array Operator UIN
     */
    public $OperateUins;

    /**
     * @var array Billing mode code
     */
    public $PayModes;

    /**
     * @var array Transaction type code
     */
    public $ActionTypes;

    /**
     * @var array Subproduct code
     */
    public $ProductCodes;

    /**
     * @var array Region ID
     */
    public $RegionIds;

    /**
     * @var array AZ ID
     */
    public $ZoneIds;

    /**
     * @var array Instance type code
     */
    public $InstanceTypes;

    /**
     * @var array Tag
     */
    public $Tag;

    /**
     * @var array Component type code
     */
    public $ComponentCodes;

    /**
     * @var array Component name code
     */
    public $ItemCodes;

    /**
     * @var string Fuzzy search criteria
     */
    public $SearchKey;

    /**
     * @var array Project ID
     */
    public $ProjectIds;

    /**
     * @var array Cost collection type
     */
    public $AllocationType;

    /**
     * @param string $Month Bill month, in the format of 2024-02, which is the current month by default if not provided
     * @param array $TreeNodeUniqKeys Unique identifier of a billing unit, used for filtering
     * @param array $BillDates Date
     * @param array $BusinessCodes Product code
     * @param array $OwnerUins User UIN
     * @param array $OperateUins Operator UIN
     * @param array $PayModes Billing mode code
     * @param array $ActionTypes Transaction type code
     * @param array $ProductCodes Subproduct code
     * @param array $RegionIds Region ID
     * @param array $ZoneIds AZ ID
     * @param array $InstanceTypes Instance type code
     * @param array $Tag Tag
     * @param array $ComponentCodes Component type code
     * @param array $ItemCodes Component name code
     * @param string $SearchKey Fuzzy search criteria
     * @param array $ProjectIds Project ID
     * @param array $AllocationType Cost collection type
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
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
