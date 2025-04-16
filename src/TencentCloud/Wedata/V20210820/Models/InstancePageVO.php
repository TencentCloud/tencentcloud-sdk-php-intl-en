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
 * Instance list pagination entity.
 *
 * @method integer getTotalCount() Obtain Total number of entries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPage() Obtain Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPage(integer $TotalPage) Set Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageNumber() Obtain Page number

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageNumber(integer $PageNumber) Set Page number

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageSize() Obtain Entries per page.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageSize(integer $PageSize) Set Entries per page.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageCount() Obtain Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageCount(integer $PageCount) Set Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getItems() Obtain Data List

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItems(array $Items) Set Data List

Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstancePageVO extends AbstractModel
{
    /**
     * @var integer Total number of entries.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPage;

    /**
     * @var integer Page number

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageNumber;

    /**
     * @var integer Entries per page.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageSize;

    /**
     * @var integer Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageCount;

    /**
     * @var array Data List

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Items;

    /**
     * @param integer $TotalCount Total number of entries.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPage Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageNumber Page number

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageSize Entries per page.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageCount Total number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Items Data List

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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InstanceVO();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
