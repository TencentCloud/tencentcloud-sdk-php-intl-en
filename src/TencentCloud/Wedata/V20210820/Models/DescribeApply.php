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
 * Application List
 *
 * @method array getRows() Obtain Application List Details
 * @method void setRows(array $Rows) Set Application List Details
 * @method integer getTotalPageNumber() Obtain Total Pagination Pages
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total Pagination Pages
 * @method integer getTotalCount() Obtain Total Count
 * @method void setTotalCount(integer $TotalCount) Set Total Count
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 */
class DescribeApply extends AbstractModel
{
    /**
     * @var array Application List Details
     */
    public $Rows;

    /**
     * @var integer Total Pagination Pages
     */
    public $TotalPageNumber;

    /**
     * @var integer Total Count
     */
    public $TotalCount;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @param array $Rows Application List Details
     * @param integer $TotalPageNumber Total Pagination Pages
     * @param integer $TotalCount Total Count
     * @param integer $PageNumber Page number
     * @param integer $PageSize Page size
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
                $obj = new Apply();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
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
    }
}
