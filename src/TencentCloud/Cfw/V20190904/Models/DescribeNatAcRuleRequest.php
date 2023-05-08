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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatAcRule request structure.
 *
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method integer getOffset() Obtain Page offset.
 * @method void setOffset(integer $Offset) Set Page offset.
 * @method string getIndex() Obtain Index to be queried. This parameter is optional, and is used only in specific cases.
 * @method void setIndex(string $Index) Set Index to be queried. This parameter is optional, and is used only in specific cases.
 * @method array getFilters() Obtain Filter condition combination.
 * @method void setFilters(array $Filters) Set Filter condition combination.
 * @method string getStartTime() Obtain Start time for search. This parameter is optional.
 * @method void setStartTime(string $StartTime) Set Start time for search. This parameter is optional.
 * @method string getEndTime() Obtain End time for search. This parameter is optional.
 * @method void setEndTime(string $EndTime) Set End time for search. This parameter is optional.
 * @method string getOrder() Obtain Valid values: desc: descending; asc: ascending. The returned results are sorted by the value of By. If this parameter is specified, By is also required.
 * @method void setOrder(string $Order) Set Valid values: desc: descending; asc: ascending. The returned results are sorted by the value of By. If this parameter is specified, By is also required.
 * @method string getBy() Obtain Field by which the returned results are sorted.
 * @method void setBy(string $By) Set Field by which the returned results are sorted.
 */
class DescribeNatAcRuleRequest extends AbstractModel
{
    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @var integer Page offset.
     */
    public $Offset;

    /**
     * @var string Index to be queried. This parameter is optional, and is used only in specific cases.
     */
    public $Index;

    /**
     * @var array Filter condition combination.
     */
    public $Filters;

    /**
     * @var string Start time for search. This parameter is optional.
     */
    public $StartTime;

    /**
     * @var string End time for search. This parameter is optional.
     */
    public $EndTime;

    /**
     * @var string Valid values: desc: descending; asc: ascending. The returned results are sorted by the value of By. If this parameter is specified, By is also required.
     */
    public $Order;

    /**
     * @var string Field by which the returned results are sorted.
     */
    public $By;

    /**
     * @param integer $Limit Number of entries per page.
     * @param integer $Offset Page offset.
     * @param string $Index Index to be queried. This parameter is optional, and is used only in specific cases.
     * @param array $Filters Filter condition combination.
     * @param string $StartTime Start time for search. This parameter is optional.
     * @param string $EndTime End time for search. This parameter is optional.
     * @param string $Order Valid values: desc: descending; asc: ascending. The returned results are sorted by the value of By. If this parameter is specified, By is also required.
     * @param string $By Field by which the returned results are sorted.
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

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
