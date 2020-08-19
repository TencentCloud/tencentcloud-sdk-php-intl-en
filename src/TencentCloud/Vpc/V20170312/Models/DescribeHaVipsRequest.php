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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHaVips request structure.
 *
 * @method array getHaVipIds() Obtain The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
 * @method void setHaVipIds(array $HaVipIds) Set The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
 * @method array getFilters() Obtain Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
li>havip-id - String - The unique ID of the HAVIP, such as `havip-9o233uri`.</li>
<li>havip-name - String - HAVIP name.</li>
<li>vpc-id - String - VPC ID of the HAVIP.</li>
<li>subnet-id - String - Subnet ID of the HAVIP.</li>
<li>vip - String - Virtual IP address of the HAVIP.</li>
<li>address-ip - String - Bound EIP.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
li>havip-id - String - The unique ID of the HAVIP, such as `havip-9o233uri`.</li>
<li>havip-name - String - HAVIP name.</li>
<li>vpc-id - String - VPC ID of the HAVIP.</li>
<li>subnet-id - String - Subnet ID of the HAVIP.</li>
<li>vip - String - Virtual IP address of the HAVIP.</li>
<li>address-ip - String - Bound EIP.</li>
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The returned quantity
 * @method void setLimit(integer $Limit) Set The returned quantity
 */
class DescribeHaVipsRequest extends AbstractModel
{
    /**
     * @var array The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
     */
    public $HaVipIds;

    /**
     * @var array Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
li>havip-id - String - The unique ID of the HAVIP, such as `havip-9o233uri`.</li>
<li>havip-name - String - HAVIP name.</li>
<li>vpc-id - String - VPC ID of the HAVIP.</li>
<li>subnet-id - String - Subnet ID of the HAVIP.</li>
<li>vip - String - Virtual IP address of the HAVIP.</li>
<li>address-ip - String - Bound EIP.</li>
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The returned quantity
     */
    public $Limit;

    /**
     * @param array $HaVipIds The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
     * @param array $Filters Filter condition. `HaVipIds` and `Filters` cannot be specified at the same time.
li>havip-id - String - The unique ID of the HAVIP, such as `havip-9o233uri`.</li>
<li>havip-name - String - HAVIP name.</li>
<li>vpc-id - String - VPC ID of the HAVIP.</li>
<li>subnet-id - String - Subnet ID of the HAVIP.</li>
<li>vip - String - Virtual IP address of the HAVIP.</li>
<li>address-ip - String - Bound EIP.</li>
     * @param integer $Offset Offset
     * @param integer $Limit The returned quantity
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
        if (array_key_exists("HaVipIds",$param) and $param["HaVipIds"] !== null) {
            $this->HaVipIds = $param["HaVipIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
