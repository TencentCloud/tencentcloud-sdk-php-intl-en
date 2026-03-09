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
 * Data exploration file permission list page.
 *
 * @method integer getPageNumber() Obtain Page number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNumber(integer $PageNumber) Set Page number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageSize(integer $PageSize) Set Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRows() Obtain Permission list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRows(array $Rows) Set Permission list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPageNumber() Obtain Total score page number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total score page number.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExploreFilePermissionsPage extends AbstractModel
{
    /**
     * @var integer Page number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNumber;

    /**
     * @var integer Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageSize;

    /**
     * @var array Permission list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rows;

    /**
     * @var integer Total number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Total score page number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPageNumber;

    /**
     * @param integer $PageNumber Page number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Pagination size.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Rows Permission list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPageNumber Total score page number.
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

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new ExploreFilePrivilegeItem();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }
    }
}
