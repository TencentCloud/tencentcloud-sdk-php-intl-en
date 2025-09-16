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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelServiceGroups request structure.
 *
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. The default value is 20, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. The default value is 20, and the maximum value is 100.
 * @method string getOrder() Obtain The sorting order of the output list. Valid values: ASC (ascending order) and DESC (descending order).
 * @method void setOrder(string $Order) Set The sorting order of the output list. Valid values: ASC (ascending order) and DESC (descending order).
 * @method string getOrderField() Obtain Field to sort by. Valid values: CreateTime and UpdateTime.
 * @method void setOrderField(string $OrderField) Set Field to sort by. Valid values: CreateTime and UpdateTime.
 * @method array getFilters() Obtain Pagination parameters. Supported filterable field names include:["ClusterId", "ServiceId", "ServiceGroupName", "ServiceGroupId","Status","CreatedBy","ModelVersionId"]
 * @method void setFilters(array $Filters) Set Pagination parameters. Supported filterable field names include:["ClusterId", "ServiceId", "ServiceGroupName", "ServiceGroupId","Status","CreatedBy","ModelVersionId"]
 * @method array getTagFilters() Obtain Tag filtering parameters.
 * @method void setTagFilters(array $TagFilters) Set Tag filtering parameters.
 * @method string getServiceCategory() Obtain Service classification.
 * @method void setServiceCategory(string $ServiceCategory) Set Service classification.
 */
class DescribeModelServiceGroupsRequest extends AbstractModel
{
    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. The default value is 20, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string The sorting order of the output list. Valid values: ASC (ascending order) and DESC (descending order).
     */
    public $Order;

    /**
     * @var string Field to sort by. Valid values: CreateTime and UpdateTime.
     */
    public $OrderField;

    /**
     * @var array Pagination parameters. Supported filterable field names include:["ClusterId", "ServiceId", "ServiceGroupName", "ServiceGroupId","Status","CreatedBy","ModelVersionId"]
     */
    public $Filters;

    /**
     * @var array Tag filtering parameters.
     */
    public $TagFilters;

    /**
     * @var string Service classification.
     */
    public $ServiceCategory;

    /**
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. The default value is 20, and the maximum value is 100.
     * @param string $Order The sorting order of the output list. Valid values: ASC (ascending order) and DESC (descending order).
     * @param string $OrderField Field to sort by. Valid values: CreateTime and UpdateTime.
     * @param array $Filters Pagination parameters. Supported filterable field names include:["ClusterId", "ServiceId", "ServiceGroupName", "ServiceGroupId","Status","CreatedBy","ModelVersionId"]
     * @param array $TagFilters Tag filtering parameters.
     * @param string $ServiceCategory Service classification.
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }
    }
}
