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
 * Task file page.
 *
 * @method integer getPageNumber() Obtain Number of data pages, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNumber(integer $PageNumber) Set Number of data pages, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Number of records to display per page. valid values: `10` to `200`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageSize(integer $PageSize) Set Number of records to display per page. valid values: `10` to `200`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of folders.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of folders.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPageNumber() Obtain Total pages
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total pages
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getItems() Obtain Folder list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItems(array $Items) Set Folder list.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskFolderPage extends AbstractModel
{
    /**
     * @var integer Number of data pages, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNumber;

    /**
     * @var integer Number of records to display per page. valid values: `10` to `200`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageSize;

    /**
     * @var integer Total number of folders.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Total pages
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPageNumber;

    /**
     * @var array Folder list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Items;

    /**
     * @param integer $PageNumber Number of data pages, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Number of records to display per page. valid values: `10` to `200`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of folders.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPageNumber Total pages
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Items Folder list.
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

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TaskFolder();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
