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
 * Describes the pagination list of query task versions.
 *
 * @method array getItems() Obtain Record list	
	

 * @method void setItems(array $Items) Set Record list	
	

 * @method integer getTotalCount() Obtain Total number of records that meet the query condition.

 * @method void setTotalCount(integer $TotalCount) Set Total number of records that meet the query condition.

 * @method integer getTotalPageNumber() Obtain Total number of pages that meet the query condition.

 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total number of pages that meet the query condition.

 * @method integer getPageCount() Obtain Number of records on current page.

 * @method void setPageCount(integer $PageCount) Set Number of records on current page.

 * @method integer getPageSize() Obtain Specifies the number of entries in the current request data page.

 * @method void setPageSize(integer $PageSize) Set Specifies the number of entries in the current request data page.

 * @method integer getPageNumber() Obtain Specifies the data page number of the current request.

 * @method void setPageNumber(integer $PageNumber) Set Specifies the data page number of the current request.
 */
class ListTaskVersions extends AbstractModel
{
    /**
     * @var array Record list	
	

     */
    public $Items;

    /**
     * @var integer Total number of records that meet the query condition.

     */
    public $TotalCount;

    /**
     * @var integer Total number of pages that meet the query condition.

     */
    public $TotalPageNumber;

    /**
     * @var integer Number of records on current page.

     */
    public $PageCount;

    /**
     * @var integer Specifies the number of entries in the current request data page.

     */
    public $PageSize;

    /**
     * @var integer Specifies the data page number of the current request.

     */
    public $PageNumber;

    /**
     * @param array $Items Record list	
	

     * @param integer $TotalCount Total number of records that meet the query condition.

     * @param integer $TotalPageNumber Total number of pages that meet the query condition.

     * @param integer $PageCount Number of records on current page.

     * @param integer $PageSize Specifies the number of entries in the current request data page.

     * @param integer $PageNumber Specifies the data page number of the current request.
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
                $obj = new TaskVersion();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
