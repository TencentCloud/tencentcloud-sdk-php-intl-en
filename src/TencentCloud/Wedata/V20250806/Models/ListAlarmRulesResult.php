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
 * Query Alarm rule list.
 *
 * @method integer getPageNumber() Obtain Page number for pagination. current page number.
 * @method void setPageNumber(integer $PageNumber) Set Page number for pagination. current page number.
 * @method integer getPageSize() Obtain Specifies the number of items to display per page.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of items to display per page.
 * @method integer getTotalPageNumber() Obtain Total number of pages.
 * @method void setTotalPageNumber(integer $TotalPageNumber) Set Total number of pages.
 * @method integer getTotalCount() Obtain Count of all Alarm rules.
 * @method void setTotalCount(integer $TotalCount) Set Count of all Alarm rules.
 * @method array getItems() Obtain Alert rule information list.
 * @method void setItems(array $Items) Set Alert rule information list.
 */
class ListAlarmRulesResult extends AbstractModel
{
    /**
     * @var integer Page number for pagination. current page number.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of items to display per page.
     */
    public $PageSize;

    /**
     * @var integer Total number of pages.
     */
    public $TotalPageNumber;

    /**
     * @var integer Count of all Alarm rules.
     */
    public $TotalCount;

    /**
     * @var array Alert rule information list.
     */
    public $Items;

    /**
     * @param integer $PageNumber Page number for pagination. current page number.
     * @param integer $PageSize Specifies the number of items to display per page.
     * @param integer $TotalPageNumber Total number of pages.
     * @param integer $TotalCount Count of all Alarm rules.
     * @param array $Items Alert rule information list.
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

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new AlarmRuleData();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
