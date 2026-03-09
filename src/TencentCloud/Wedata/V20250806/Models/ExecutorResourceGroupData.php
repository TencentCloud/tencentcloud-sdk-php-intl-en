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
 * ExecutorResourceGroup pagination object.
 *
 * @method array getItems() Obtain Result list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItems(array $Items) Set Result list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageNumber() Obtain Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNumber(integer $PageNumber) Set Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Page size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageSize(integer $PageSize) Set Page size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPageNumber() Obtain Page number of total score.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Page number of total score.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExecutorResourceGroupData extends AbstractModel
{
    /**
     * @var array Result list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Items;

    /**
     * @var integer Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNumber;

    /**
     * @var integer Page size.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageSize;

    /**
     * @var integer Page number of total score.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPageNumber;

    /**
     * @param array $Items Result list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageNumber Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Page size.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPageNumber Page number of total score.
Note: This field may return null, indicating that no valid values can be obtained.
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
                $obj = new ExecutorResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }
    }
}
