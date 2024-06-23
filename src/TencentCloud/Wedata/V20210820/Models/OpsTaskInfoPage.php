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
 * Task Pagination Query
 *
 * @method integer getPageNumber() Obtain Page Number
 * @method void setPageNumber(integer $PageNumber) Set Page Number
 * @method integer getPageSize() Obtain Page Size
 * @method void setPageSize(integer $PageSize) Set Page Size
 * @method array getItems() Obtain Task List Information
 * @method void setItems(array $Items) Set Task List Information
 * @method integer getTotalPage() Obtain Total Pages
 * @method void setTotalPage(integer $TotalPage) Set Total Pages
 * @method integer getPageCount() Obtain Page Number
 * @method void setPageCount(integer $PageCount) Set Page Number
 * @method integer getTotalCount() Obtain Total number of items
 * @method void setTotalCount(integer $TotalCount) Set Total number of items
 */
class OpsTaskInfoPage extends AbstractModel
{
    /**
     * @var integer Page Number
     */
    public $PageNumber;

    /**
     * @var integer Page Size
     */
    public $PageSize;

    /**
     * @var array Task List Information
     */
    public $Items;

    /**
     * @var integer Total Pages
     */
    public $TotalPage;

    /**
     * @var integer Page Number
     */
    public $PageCount;

    /**
     * @var integer Total number of items
     */
    public $TotalCount;

    /**
     * @param integer $PageNumber Page Number
     * @param integer $PageSize Page Size
     * @param array $Items Task List Information
     * @param integer $TotalPage Total Pages
     * @param integer $PageCount Page Number
     * @param integer $TotalCount Total number of items
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

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TaskOpsDto();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
