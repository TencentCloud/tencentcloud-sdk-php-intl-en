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
 * Instance list pagination entity.
 *
 * @method integer getTotalCount() Obtain **Total number of entries**.

 * @method void setTotalCount(integer $TotalCount) Set **Total number of entries**.

 * @method integer getTotalPageNumber() Obtain **Total number of pages.**

 * @method void setTotalPageNumber(integer $TotalPageNumber) Set **Total number of pages.**

 * @method integer getPageNumber() Obtain Page number.


 * @method void setPageNumber(integer $PageNumber) Set Page number.


 * @method integer getPageSize() Obtain Specifies the number of entries per page.

 * @method void setPageSize(integer $PageSize) Set Specifies the number of entries per page.

 * @method array getItems() Obtain Data List


 * @method void setItems(array $Items) Set Data List
 */
class TaskInstancePage extends AbstractModel
{
    /**
     * @var integer **Total number of entries**.

     */
    public $TotalCount;

    /**
     * @var integer **Total number of pages.**

     */
    public $TotalPageNumber;

    /**
     * @var integer Page number.


     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of entries per page.

     */
    public $PageSize;

    /**
     * @var array Data List


     */
    public $Items;

    /**
     * @param integer $TotalCount **Total number of entries**.

     * @param integer $TotalPageNumber **Total number of pages.**

     * @param integer $PageNumber Page number.


     * @param integer $PageSize Specifies the number of entries per page.

     * @param array $Items Data List
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
                $obj = new TaskInstance();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
