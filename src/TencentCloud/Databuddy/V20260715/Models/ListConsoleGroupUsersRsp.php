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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * for querying the console user group member list
 *
 * @method array getItems() Obtain User group member list
 * @method void setItems(array $Items) Set User group member list
 * @method integer getPageNumber() Obtain Current page
 * @method void setPageNumber(integer $PageNumber) Set Current page
 * @method integer getPageSize() Obtain Page Size
 * @method void setPageSize(integer $PageSize) Set Page Size
 * @method integer getTotalCount() Obtain Total number of records
 * @method void setTotalCount(integer $TotalCount) Set Total number of records
 * @method integer getTotalPageNumber() Obtain Total pages
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total pages
 */
class ListConsoleGroupUsersRsp extends AbstractModel
{
    /**
     * @var array User group member list
     */
    public $Items;

    /**
     * @var integer Current page
     */
    public $PageNumber;

    /**
     * @var integer Page Size
     */
    public $PageSize;

    /**
     * @var integer Total number of records
     */
    public $TotalCount;

    /**
     * @var integer Total pages
     */
    public $TotalPageNumber;

    /**
     * @param array $Items User group member list
     * @param integer $PageNumber Current page
     * @param integer $PageSize Page Size
     * @param integer $TotalCount Total number of records
     * @param integer $TotalPageNumber Total pages
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
                $obj = new ConsoleGroupUserInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
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
