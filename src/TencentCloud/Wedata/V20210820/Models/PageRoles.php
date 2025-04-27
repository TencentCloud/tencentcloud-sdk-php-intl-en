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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pagination information of the role list.
 *
 * @method array getRows() Obtain Role information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRows(array $Rows) Set Role information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageNumber() Obtain Page number

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNumber(integer $PageNumber) Set Page number

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Pagination size

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageSize(integer $PageSize) Set Pagination size

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPageNumber() Obtain Total pagination pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total pagination pages.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PageRoles extends AbstractModel
{
    /**
     * @var array Role information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rows;

    /**
     * @var integer Page number

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNumber;

    /**
     * @var integer Pagination size

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageSize;

    /**
     * @var integer Total number

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Total pagination pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPageNumber;

    /**
     * @param array $Rows Role information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageNumber Page number

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Pagination size

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPageNumber Total pagination pages.
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
        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new BaseRole();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
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
