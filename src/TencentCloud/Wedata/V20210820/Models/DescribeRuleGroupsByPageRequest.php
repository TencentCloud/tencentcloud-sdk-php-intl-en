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
 * DescribeRuleGroupsByPage request structure.
 *
 * @method integer getPageNumber() Obtain Pagination Index
 * @method void setPageNumber(integer $PageNumber) Set Pagination Index
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method array getFilters() Obtain Filter criteria, each request's Filters limit is 10, Filter.Values limit is 5
 * @method void setFilters(array $Filters) Set Filter criteria, each request's Filters limit is 10, Filter.Values limit is 5
 * @method array getOrderFields() Obtain Sorting Method
 * @method void setOrderFields(array $OrderFields) Set Sorting Method
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class DescribeRuleGroupsByPageRequest extends AbstractModel
{
    /**
     * @var integer Pagination Index
     */
    public $PageNumber;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var array Filter criteria, each request's Filters limit is 10, Filter.Values limit is 5
     */
    public $Filters;

    /**
     * @var array Sorting Method
     */
    public $OrderFields;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param integer $PageNumber Pagination Index
     * @param integer $PageSize Page size
     * @param array $Filters Filter criteria, each request's Filters limit is 10, Filter.Values limit is 5
     * @param array $OrderFields Sorting Method
     * @param string $ProjectId Project ID
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
