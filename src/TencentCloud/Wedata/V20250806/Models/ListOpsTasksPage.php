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
 * Task list pagination.
 *
 * @method integer getTotalCount() Obtain Total number of results

 * @method void setTotalCount(integer $TotalCount) Set Total number of results

 * @method integer getTotalPageNumber() Obtain Total pages

 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total pages

 * @method array getItems() Obtain Record list	
	

 * @method void setItems(array $Items) Set Record list	
	

 * @method integer getPageNumber() Obtain Page number.

 * @method void setPageNumber(integer $PageNumber) Set Page number.

 * @method integer getPageSize() Obtain Pagination size.

 * @method void setPageSize(integer $PageSize) Set Pagination size.
 */
class ListOpsTasksPage extends AbstractModel
{
    /**
     * @var integer Total number of results

     */
    public $TotalCount;

    /**
     * @var integer Total pages

     */
    public $TotalPageNumber;

    /**
     * @var array Record list	
	

     */
    public $Items;

    /**
     * @var integer Page number.

     */
    public $PageNumber;

    /**
     * @var integer Pagination size.

     */
    public $PageSize;

    /**
     * @param integer $TotalCount Total number of results

     * @param integer $TotalPageNumber Total pages

     * @param array $Items Record list	
	

     * @param integer $PageNumber Page number.

     * @param integer $PageSize Pagination size.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TaskOpsInfo();
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
    }
}
