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
 * Permission information for data development pagination.
 *
 * @method integer getPageNumber() Obtain Number of data pages, at least 1.
 * @method void setPageNumber(integer $PageNumber) Set Number of data pages, at least 1.
 * @method integer getPageSize() Obtain Number of records per page. the minimum value is `10`. the maximum value is `200`.
 * @method void setPageSize(integer $PageSize) Set Number of records per page. the minimum value is `10`. the maximum value is `200`.
 * @method integer getTotalCount() Obtain Total number of authorized data.
 * @method void setTotalCount(integer $TotalCount) Set Total number of authorized data.
 * @method integer getTotalPageNumber() Obtain Total pages
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total pages
 * @method array getItems() Obtain Authorization information list.
 * @method void setItems(array $Items) Set Authorization information list.
 */
class WorkflowPermissionPage extends AbstractModel
{
    /**
     * @var integer Number of data pages, at least 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of records per page. the minimum value is `10`. the maximum value is `200`.
     */
    public $PageSize;

    /**
     * @var integer Total number of authorized data.
     */
    public $TotalCount;

    /**
     * @var integer Total pages
     */
    public $TotalPageNumber;

    /**
     * @var array Authorization information list.
     */
    public $Items;

    /**
     * @param integer $PageNumber Number of data pages, at least 1.
     * @param integer $PageSize Number of records per page. the minimum value is `10`. the maximum value is `200`.
     * @param integer $TotalCount Total number of authorized data.
     * @param integer $TotalPageNumber Total pages
     * @param array $Items Authorization information list.
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
                $obj = new WorkflowPermission();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
