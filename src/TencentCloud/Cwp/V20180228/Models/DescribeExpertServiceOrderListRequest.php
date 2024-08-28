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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExpertServiceOrderList request structure.
 *
 * @method array getFilters() Obtain <li>InquireType- String - required: no - order type for filtering,</li>
 * @method void setFilters(array $Filters) Set <li>InquireType- String - required: no - order type for filtering,</li>
 * @method integer getLimit() Obtain Number of entries on each page. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries on each page. Maximum value: 100.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 */
class DescribeExpertServiceOrderListRequest extends AbstractModel
{
    /**
     * @var array <li>InquireType- String - required: no - order type for filtering,</li>
     */
    public $Filters;

    /**
     * @var integer Number of entries on each page. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @param array $Filters <li>InquireType- String - required: no - order type for filtering,</li>
     * @param integer $Limit Number of entries on each page. Maximum value: 100.
     * @param integer $Offset Offset
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
