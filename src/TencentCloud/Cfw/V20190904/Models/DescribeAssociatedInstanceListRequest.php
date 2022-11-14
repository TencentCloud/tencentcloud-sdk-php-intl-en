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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssociatedInstanceList request structure.
 *
 * @method integer getOffset() Obtain List offset
 * @method void setOffset(integer $Offset) Set List offset
 * @method integer getLimit() Obtain Number of records per page
 * @method void setLimit(integer $Limit) Set Number of records per page
 * @method string getArea() Obtain Region code (e.g. ap-guangzhou). All Tencent Cloud regions are supported.
 * @method void setArea(string $Area) Set Region code (e.g. ap-guangzhou). All Tencent Cloud regions are supported.
 * @method string getSearchValue() Obtain Additional search criteria (JSON string)
 * @method void setSearchValue(string $SearchValue) Set Additional search criteria (JSON string)
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Sort order. asc: ascending; desc: descending
 * @method void setOrder(string $Order) Set Sort order. asc: ascending; desc: descending
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 * @method string getType() Obtain Instance type. '3': CVM instance; '4': CLB instance; '5': ENI instance; '6': Cloud database
 * @method void setType(string $Type) Set Instance type. '3': CVM instance; '4': CLB instance; '5': ENI instance; '6': Cloud database
 */
class DescribeAssociatedInstanceListRequest extends AbstractModel
{
    /**
     * @var integer List offset
     */
    public $Offset;

    /**
     * @var integer Number of records per page
     */
    public $Limit;

    /**
     * @var string Region code (e.g. ap-guangzhou). All Tencent Cloud regions are supported.
     */
    public $Area;

    /**
     * @var string Additional search criteria (JSON string)
     */
    public $SearchValue;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Sort order. asc: ascending; desc: descending
     */
    public $Order;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupId;

    /**
     * @var string Instance type. '3': CVM instance; '4': CLB instance; '5': ENI instance; '6': Cloud database
     */
    public $Type;

    /**
     * @param integer $Offset List offset
     * @param integer $Limit Number of records per page
     * @param string $Area Region code (e.g. ap-guangzhou). All Tencent Cloud regions are supported.
     * @param string $SearchValue Additional search criteria (JSON string)
     * @param string $By Sorting field
     * @param string $Order Sort order. asc: ascending; desc: descending
     * @param string $SecurityGroupId Security group ID
     * @param string $Type Instance type. '3': CVM instance; '4': CLB instance; '5': ENI instance; '6': Cloud database
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
