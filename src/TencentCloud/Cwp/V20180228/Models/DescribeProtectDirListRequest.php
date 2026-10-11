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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProtectDirList request structure.
 *
 * @method integer getLimit() Obtain Number of entries on each page. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries on each page. Maximum value: 100.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method array getFilters() Obtain Website name of DirName
DirPath: Website protection directory address
 * @method void setFilters(array $Filters) Set Website name of DirName
DirPath: Website protection directory address
 * @method string getOrder() Obtain asc: in ascending order/desc: in descending order
 * @method void setOrder(string $Order) Set asc: in ascending order/desc: in descending order
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 */
class DescribeProtectDirListRequest extends AbstractModel
{
    /**
     * @var integer Number of entries on each page. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var array Website name of DirName
DirPath: Website protection directory address
     */
    public $Filters;

    /**
     * @var string asc: in ascending order/desc: in descending order
     */
    public $Order;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @param integer $Limit Number of entries on each page. Maximum value: 100.
     * @param integer $Offset Offset.
     * @param array $Filters Website name of DirName
DirPath: Website protection directory address
     * @param string $Order asc: in ascending order/desc: in descending order
     * @param string $By Sorting field
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
