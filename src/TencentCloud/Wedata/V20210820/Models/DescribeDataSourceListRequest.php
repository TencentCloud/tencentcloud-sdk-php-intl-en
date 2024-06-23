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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataSourceList request structure.
 *
 * @method integer getPageNumber() Obtain Page Number
 * @method void setPageNumber(integer $PageNumber) Set Page Number
 * @method integer getPageSize() Obtain Number of returns
 * @method void setPageSize(integer $PageSize) Set Number of returns
 * @method array getOrderFields() Obtain Sorting Configuration
 * @method void setOrderFields(array $OrderFields) Set Sorting Configuration
 * @method array getFilters() Obtain Optional Filter Criteria, Filter optional configurations (reference): "Name": { "type": "string", "description": "Data Source Name" }, "Type": { "type": "string", "description": "Type" }, "ClusterId": { "type": "string", "description": "Cluster ID" }, "CategoryId": { "type": "string", "description": "Classification, Project or Space ID" }
 * @method void setFilters(array $Filters) Set Optional Filter Criteria, Filter optional configurations (reference): "Name": { "type": "string", "description": "Data Source Name" }, "Type": { "type": "string", "description": "Type" }, "ClusterId": { "type": "string", "description": "Cluster ID" }, "CategoryId": { "type": "string", "description": "Classification, Project or Space ID" }
 */
class DescribeDataSourceListRequest extends AbstractModel
{
    /**
     * @var integer Page Number
     */
    public $PageNumber;

    /**
     * @var integer Number of returns
     */
    public $PageSize;

    /**
     * @var array Sorting Configuration
     */
    public $OrderFields;

    /**
     * @var array Optional Filter Criteria, Filter optional configurations (reference): "Name": { "type": "string", "description": "Data Source Name" }, "Type": { "type": "string", "description": "Type" }, "ClusterId": { "type": "string", "description": "Cluster ID" }, "CategoryId": { "type": "string", "description": "Classification, Project or Space ID" }
     */
    public $Filters;

    /**
     * @param integer $PageNumber Page Number
     * @param integer $PageSize Number of returns
     * @param array $OrderFields Sorting Configuration
     * @param array $Filters Optional Filter Criteria, Filter optional configurations (reference): "Name": { "type": "string", "description": "Data Source Name" }, "Type": { "type": "string", "description": "Type" }, "ClusterId": { "type": "string", "description": "Cluster ID" }, "CategoryId": { "type": "string", "description": "Classification, Project or Space ID" }
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
