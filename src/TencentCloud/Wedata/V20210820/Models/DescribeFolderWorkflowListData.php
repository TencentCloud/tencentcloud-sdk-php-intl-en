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
 * Folder Pagination Information
 *
 * @method array getItems() Obtain Workflow Information List
 * @method void setItems(array $Items) Set Workflow Information List
 * @method integer getTotalCount() Obtain Total number of items
 * @method void setTotalCount(integer $TotalCount) Set Total number of items
 * @method integer getPageNumber() Obtain Page Number
 * @method void setPageNumber(integer $PageNumber) Set Page Number
 * @method integer getPageSize() Obtain Page Size
 * @method void setPageSize(integer $PageSize) Set Page Size
 */
class DescribeFolderWorkflowListData extends AbstractModel
{
    /**
     * @var array Workflow Information List
     */
    public $Items;

    /**
     * @var integer Total number of items
     */
    public $TotalCount;

    /**
     * @var integer Page Number
     */
    public $PageNumber;

    /**
     * @var integer Page Size
     */
    public $PageSize;

    /**
     * @param array $Items Workflow Information List
     * @param integer $TotalCount Total number of items
     * @param integer $PageNumber Page Number
     * @param integer $PageSize Page Size
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
                $obj = new Workflow();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
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
