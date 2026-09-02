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
 * The list query API adopts the new filter API, which is directly passed to the backend for query filtering.
 *
 * @method integer getLimit() Obtain Query Quantity Limit
 * @method void setLimit(integer $Limit) Set Query Quantity Limit
 * @method integer getOffset() Obtain Query Offset Position
 * @method void setOffset(integer $Offset) Set Query Offset Position
 * @method string getOrder() Obtain Sort by Ascending or Descending Order. Ascending: asc, Descending: desc.
 * @method void setOrder(string $Order) Set Sort by Ascending or Descending Order. Ascending: asc, Descending: desc.
 * @method string getBy() Obtain Fields to Sort
 * @method void setBy(string $By) Set Fields to Sort
 * @method array getFilters() Obtain Filtered Columns and Content
 * @method void setFilters(array $Filters) Set Filtered Columns and Content
 * @method string getStartTime() Obtain Can be left blank. Log usage query time.
 * @method void setStartTime(string $StartTime) Set Can be left blank. Log usage query time.
 * @method string getEndTime() Obtain Can be left blank. Log usage query time.
 * @method void setEndTime(string $EndTime) Set Can be left blank. Log usage query time.
 */
class Filter extends AbstractModel
{
    /**
     * @var integer Query Quantity Limit
     */
    public $Limit;

    /**
     * @var integer Query Offset Position
     */
    public $Offset;

    /**
     * @var string Sort by Ascending or Descending Order. Ascending: asc, Descending: desc.
     */
    public $Order;

    /**
     * @var string Fields to Sort
     */
    public $By;

    /**
     * @var array Filtered Columns and Content
     */
    public $Filters;

    /**
     * @var string Can be left blank. Log usage query time.
     */
    public $StartTime;

    /**
     * @var string Can be left blank. Log usage query time.
     */
    public $EndTime;

    /**
     * @param integer $Limit Query Quantity Limit
     * @param integer $Offset Query Offset Position
     * @param string $Order Sort by Ascending or Descending Order. Ascending: asc, Descending: desc.
     * @param string $By Fields to Sort
     * @param array $Filters Filtered Columns and Content
     * @param string $StartTime Can be left blank. Log usage query time.
     * @param string $EndTime Can be left blank. Log usage query time.
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
