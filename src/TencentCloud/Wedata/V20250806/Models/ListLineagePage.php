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
 * ListLineagePage
 *
 * @method array getItems() Obtain Lineage record list.
 * @method void setItems(array $Items) Set Lineage record list.
 * @method integer getPageCount() Obtain Total number of pages.
 * @method void setPageCount(integer $PageCount) Set Total number of pages.
 * @method integer getPageSize() Obtain Pagination size.
 * @method void setPageSize(integer $PageSize) Set Pagination size.
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getTotalCount() Obtain Total number of records
 * @method void setTotalCount(integer $TotalCount) Set Total number of records
 */
class ListLineagePage extends AbstractModel
{
    /**
     * @var array Lineage record list.
     */
    public $Items;

    /**
     * @var integer Total number of pages.
     */
    public $PageCount;

    /**
     * @var integer Pagination size.
     */
    public $PageSize;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Total number of records
     */
    public $TotalCount;

    /**
     * @param array $Items Lineage record list.
     * @param integer $PageCount Total number of pages.
     * @param integer $PageSize Pagination size.
     * @param integer $PageNumber Page number
     * @param integer $TotalCount Total number of records
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
                $obj = new LineageNodeInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
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

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
