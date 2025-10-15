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
 * Paginated Query of Upstream Task Dependency Details
 *
 * @method integer getTotalCount() Obtain Total number of records matching the query conditions.
 * @method void setTotalCount(integer $TotalCount) Set Total number of records matching the query conditions.
 * @method integer getTotalPageNumber() Obtain Total number of pages matching the query conditions.
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total number of pages matching the query conditions.
 * @method integer getPageNumber() Obtain The page number of the current request.
 * @method void setPageNumber(integer $PageNumber) Set The page number of the current request.
 * @method integer getPageSize() Obtain The number of entries in the current request data page.
 * @method void setPageSize(integer $PageSize) Set The number of entries in the current request data page.
 * @method array getItems() Obtain Paginated Data
 * @method void setItems(array $Items) Set Paginated Data
 */
class DependencyConfigPage extends AbstractModel
{
    /**
     * @var integer Total number of records matching the query conditions.
     */
    public $TotalCount;

    /**
     * @var integer Total number of pages matching the query conditions.
     */
    public $TotalPageNumber;

    /**
     * @var integer The page number of the current request.
     */
    public $PageNumber;

    /**
     * @var integer The number of entries in the current request data page.
     */
    public $PageSize;

    /**
     * @var array Paginated Data
     */
    public $Items;

    /**
     * @param integer $TotalCount Total number of records matching the query conditions.
     * @param integer $TotalPageNumber Total number of pages matching the query conditions.
     * @param integer $PageNumber The page number of the current request.
     * @param integer $PageSize The number of entries in the current request data page.
     * @param array $Items Paginated Data
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TaskDependDto();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
