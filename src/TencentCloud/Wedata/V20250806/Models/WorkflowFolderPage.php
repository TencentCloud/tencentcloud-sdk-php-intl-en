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
 * Paginate resource files.
 *
 * @method integer getPageNumber() Obtain Data page number, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNumber(integer $PageNumber) Set Data page number, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Specifies the number of data records displayed per page. value range: 10 to 200.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of data records displayed per page. value range: 10 to 200.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number of folders.
 * @method void setTotalCount(integer $TotalCount) Set Total number of folders.
 * @method integer getTotalPageNumber() Obtain Total pages
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total pages
 * @method array getItems() Obtain Folder list.
 * @method void setItems(array $Items) Set Folder list.
 */
class WorkflowFolderPage extends AbstractModel
{
    /**
     * @var integer Data page number, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of data records displayed per page. value range: 10 to 200.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageSize;

    /**
     * @var integer Total number of folders.
     */
    public $TotalCount;

    /**
     * @var integer Total pages
     */
    public $TotalPageNumber;

    /**
     * @var array Folder list.
     */
    public $Items;

    /**
     * @param integer $PageNumber Data page number, equal to or greater than 1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Specifies the number of data records displayed per page. value range: 10 to 200.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number of folders.
     * @param integer $TotalPageNumber Total pages
     * @param array $Items Folder list.
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
                $obj = new WorkflowFolder();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
