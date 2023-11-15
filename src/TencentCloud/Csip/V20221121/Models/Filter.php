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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filters
 *
 * @method integer getLimit() Obtain Max number of returned results
 * @method void setLimit(integer $Limit) Set Max number of returned results
 * @method integer getOffset() Obtain Query offset
 * @method void setOffset(integer $Offset) Set Query offset
 * @method string getOrder() Obtain Sorting order. Values: `asc` (ascending), `desc` (descending).
 * @method void setOrder(string $Order) Set Sorting order. Values: `asc` (ascending), `desc` (descending).
 * @method string getBy() Obtain Specify the field used for sorting
 * @method void setBy(string $By) Set Specify the field used for sorting
 * @method array getFilters() Obtain Filtered columns and content
 * @method void setFilters(array $Filters) Set Filtered columns and content
 * @method string getStartTime() Obtain Start time of the query period. 
 * @method void setStartTime(string $StartTime) Set Start time of the query period. 
 * @method string getEndTime() Obtain End time of the query period.
 * @method void setEndTime(string $EndTime) Set End time of the query period.
 */
class Filter extends AbstractModel
{
    /**
     * @var integer Max number of returned results
     */
    public $Limit;

    /**
     * @var integer Query offset
     */
    public $Offset;

    /**
     * @var string Sorting order. Values: `asc` (ascending), `desc` (descending).
     */
    public $Order;

    /**
     * @var string Specify the field used for sorting
     */
    public $By;

    /**
     * @var array Filtered columns and content
     */
    public $Filters;

    /**
     * @var string Start time of the query period. 
     */
    public $StartTime;

    /**
     * @var string End time of the query period.
     */
    public $EndTime;

    /**
     * @param integer $Limit Max number of returned results
     * @param integer $Offset Query offset
     * @param string $Order Sorting order. Values: `asc` (ascending), `desc` (descending).
     * @param string $By Specify the field used for sorting
     * @param array $Filters Filtered columns and content
     * @param string $StartTime Start time of the query period. 
     * @param string $EndTime End time of the query period.
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new WhereFilter();
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
    }
}
