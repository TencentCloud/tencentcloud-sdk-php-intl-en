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
 * DescribeComplianceWhitelistItemList request structure.
 *
 * @method integer getOffset() Obtain Initial offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Initial offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of results to be obtained. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be obtained. Default value: `10`. Maximum value: `100`.
 * @method array getAssetTypeSet() Obtain List of asset types
 * @method void setAssetTypeSet(array $AssetTypeSet) Set List of asset types
 * @method array getFilters() Obtain Query filter
 * @method void setFilters(array $Filters) Set Query filter
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Sorting order. Valid values: `desc`, `asc`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `desc`, `asc`.
 */
class DescribeComplianceWhitelistItemListRequest extends AbstractModel
{
    /**
     * @var integer Initial offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of results to be obtained. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var array List of asset types
     */
    public $AssetTypeSet;

    /**
     * @var array Query filter
     */
    public $Filters;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Sorting order. Valid values: `desc`, `asc`.
     */
    public $Order;

    /**
     * @param integer $Offset Initial offset. Default value: `0`.
     * @param integer $Limit Number of results to be obtained. Default value: `10`. Maximum value: `100`.
     * @param array $AssetTypeSet List of asset types
     * @param array $Filters Query filter
     * @param string $By Sorting field
     * @param string $Order Sorting order. Valid values: `desc`, `asc`.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AssetTypeSet",$param) and $param["AssetTypeSet"] !== null) {
            $this->AssetTypeSet = $param["AssetTypeSet"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
