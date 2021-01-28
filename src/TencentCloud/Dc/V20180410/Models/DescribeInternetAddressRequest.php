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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInternetAddress request structure.
 *
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain Filter conditions:
<li>AddrType, address type. Valid values: 0: BGP; 1: China Telecom; 2: China Mobile; 3: China Unicom</li>
<li>AddrProto, address protocol. Valid values: 0: IPv4; 1: IPv6</li>
<li>Status, address status. Valid values: 0: in use; 1: disabled; 2: returned</li>
<li>Subnet, public IP address array</li>
<InstanceIds>Public IP address ID array</li>
 * @method void setFilters(array $Filters) Set Filter conditions:
<li>AddrType, address type. Valid values: 0: BGP; 1: China Telecom; 2: China Mobile; 3: China Unicom</li>
<li>AddrProto, address protocol. Valid values: 0: IPv4; 1: IPv6</li>
<li>Status, address status. Valid values: 0: in use; 1: disabled; 2: returned</li>
<li>Subnet, public IP address array</li>
<InstanceIds>Public IP address ID array</li>
 */
class DescribeInternetAddressRequest extends AbstractModel
{
    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Filter conditions:
<li>AddrType, address type. Valid values: 0: BGP; 1: China Telecom; 2: China Mobile; 3: China Unicom</li>
<li>AddrProto, address protocol. Valid values: 0: IPv4; 1: IPv6</li>
<li>Status, address status. Valid values: 0: in use; 1: disabled; 2: returned</li>
<li>Subnet, public IP address array</li>
<InstanceIds>Public IP address ID array</li>
     */
    public $Filters;

    /**
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param array $Filters Filter conditions:
<li>AddrType, address type. Valid values: 0: BGP; 1: China Telecom; 2: China Mobile; 3: China Unicom</li>
<li>AddrProto, address protocol. Valid values: 0: IPv4; 1: IPv6</li>
<li>Status, address status. Valid values: 0: in use; 1: disabled; 2: returned</li>
<li>Subnet, public IP address array</li>
<InstanceIds>Public IP address ID array</li>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
