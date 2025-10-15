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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query Task Info (Paginated)
 *
 * @method array getItems() Obtain Task Array

 * @method void setItems(array $Items) Set Task Array

 * @method integer getPageNumber() Obtain Current request data page number.

 * @method void setPageNumber(integer $PageNumber) Set Current request data page number.

 * @method integer getPageSize() Obtain Number of entries in the current request.

 * @method void setPageSize(integer $PageSize) Set Number of entries in the current request.

 * @method integer getTotalCount() Obtain Total number of data entries that meet the query condition.
 * @method void setTotalCount(integer $TotalCount) Set Total number of data entries that meet the query condition.
 * @method integer getTotalPageNumber() Obtain Total number of pages that meet the query condition.

 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total number of pages that meet the query condition.
 */
class ListTaskInfo extends AbstractModel
{
    /**
     * @var array Task Array

     */
    public $Items;

    /**
     * @var integer Current request data page number.

     */
    public $PageNumber;

    /**
     * @var integer Number of entries in the current request.

     */
    public $PageSize;

    /**
     * @var integer Total number of data entries that meet the query condition.
     */
    public $TotalCount;

    /**
     * @var integer Total number of pages that meet the query condition.

     */
    public $TotalPageNumber;

    /**
     * @param array $Items Task Array

     * @param integer $PageNumber Current request data page number.

     * @param integer $PageSize Number of entries in the current request.

     * @param integer $TotalCount Total number of data entries that meet the query condition.
     * @param integer $TotalPageNumber Total number of pages that meet the query condition.
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TaskBaseAttribute();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }
    }
}
