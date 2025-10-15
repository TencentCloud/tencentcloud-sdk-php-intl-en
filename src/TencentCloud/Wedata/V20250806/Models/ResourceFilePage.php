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
 * Resource file pagination.
 *
 * @method array getItems() Obtain Task collection information.
 * @method void setItems(array $Items) Set Task collection information.
 * @method integer getTotalPageNumber() Obtain Total page number
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total page number
 * @method integer getTotalCount() Obtain Total file count.
 * @method void setTotalCount(integer $TotalCount) Set Total file count.
 * @method integer getPageNumber() Obtain Current Page number

 * @method void setPageNumber(integer $PageNumber) Set Current Page number

 * @method integer getPageSize() Obtain Items per Page
 * @method void setPageSize(integer $PageSize) Set Items per Page
 */
class ResourceFilePage extends AbstractModel
{
    /**
     * @var array Task collection information.
     */
    public $Items;

    /**
     * @var integer Total page number
     */
    public $TotalPageNumber;

    /**
     * @var integer Total file count.
     */
    public $TotalCount;

    /**
     * @var integer Current Page number

     */
    public $PageNumber;

    /**
     * @var integer Items per Page
     */
    public $PageSize;

    /**
     * @param array $Items Task collection information.
     * @param integer $TotalPageNumber Total page number
     * @param integer $TotalCount Total file count.
     * @param integer $PageNumber Current Page number

     * @param integer $PageSize Items per Page
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
                $obj = new ResourceFileItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
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
