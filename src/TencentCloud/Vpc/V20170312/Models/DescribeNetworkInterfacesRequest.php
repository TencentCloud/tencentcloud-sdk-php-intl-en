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
 * DescribeNetworkInterfaces request structure.
 *
 * @method array getNetworkInterfaceIds() Obtain Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request can have a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
 * @method void setNetworkInterfaceIds(array $NetworkInterfaceIds) Set Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request can have a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>`vpc-id` - String - VPC ID, such as `vpc-f49l6u0z`. </li>
<li>`subnet-id` - String - Subnet ID, such as `subnet-f49l6u0z`. </li>
<li>`network-interface-id` - String - ENI ID, such as `eni-5k56k7k7`. </li>
<li>`attachment.instance-id` - String - ID of the bound CVM instance, such as `ins-3nqpdn3i`. </li>
<li>`groups.security-group-id` - String - ID of the bound security group, such as `sg-f9ekbxeq`. </li>
<li>`network-interface-name` - String - ENI instance name. </li>
<li>`network-interface-description` - String - ENI instance description. </li>
<li>`address-ip` - String - Private IPv4 address. A single IP will be fuzzily matched with the suffix, while multiple IPs will be exactly matched. It can be used with `ip-exact-match` to query and exactly match a single IP. </li>
<li>`ip-exact-match` - Boolean - Exact match by private IPv4 address. The first value will be returned if multiple values are found. </li>
<li>`tag-key` - String - Optional - Tag key. See Example 2 to learn more details. </li>
<li>`tag:tag-key` - String - Optional - Tag key-value pair. The `tag-key` should be replaced with a specific tag key. See Example 2 to learn more details. </li>
<li>`is-primary` - Boolean - Optional - Filter based on whether it is a primary ENI. Values: `true`, `false`. If this parameter is not specified, filter the both. </li>
<li>`eni-type` - String - Optional - Filter by ENI type. Values: `0` (Secondary ENI), `1` (Primary ENI), `2` (Relayed ENI) </li>
<li>`eni-qos` - String - Optional - Filter by ENI service level. Values: `AG` (Bronze), `AU` (Silver) </li>
<li>`address-ipv6` - String - Optional - Filter by private IPv6 address. Multiple IPv6 addresses can be used for query. If this field is used together with `address-ip`, their intersection will be used. </li>
<li>`public-address-ip` - String - Public IPv4 address. It supports exact matching. </li>
 * @method void setFilters(array $Filters) Set Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>`vpc-id` - String - VPC ID, such as `vpc-f49l6u0z`. </li>
<li>`subnet-id` - String - Subnet ID, such as `subnet-f49l6u0z`. </li>
<li>`network-interface-id` - String - ENI ID, such as `eni-5k56k7k7`. </li>
<li>`attachment.instance-id` - String - ID of the bound CVM instance, such as `ins-3nqpdn3i`. </li>
<li>`groups.security-group-id` - String - ID of the bound security group, such as `sg-f9ekbxeq`. </li>
<li>`network-interface-name` - String - ENI instance name. </li>
<li>`network-interface-description` - String - ENI instance description. </li>
<li>`address-ip` - String - Private IPv4 address. A single IP will be fuzzily matched with the suffix, while multiple IPs will be exactly matched. It can be used with `ip-exact-match` to query and exactly match a single IP. </li>
<li>`ip-exact-match` - Boolean - Exact match by private IPv4 address. The first value will be returned if multiple values are found. </li>
<li>`tag-key` - String - Optional - Tag key. See Example 2 to learn more details. </li>
<li>`tag:tag-key` - String - Optional - Tag key-value pair. The `tag-key` should be replaced with a specific tag key. See Example 2 to learn more details. </li>
<li>`is-primary` - Boolean - Optional - Filter based on whether it is a primary ENI. Values: `true`, `false`. If this parameter is not specified, filter the both. </li>
<li>`eni-type` - String - Optional - Filter by ENI type. Values: `0` (Secondary ENI), `1` (Primary ENI), `2` (Relayed ENI) </li>
<li>`eni-qos` - String - Optional - Filter by ENI service level. Values: `AG` (Bronze), `AU` (Silver) </li>
<li>`address-ipv6` - String - Optional - Filter by private IPv6 address. Multiple IPv6 addresses can be used for query. If this field is used together with `address-ip`, their intersection will be used. </li>
<li>`public-address-ip` - String - Public IPv4 address. It supports exact matching. </li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 */
class DescribeNetworkInterfacesRequest extends AbstractModel
{
    /**
     * @var array Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request can have a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
     */
    public $NetworkInterfaceIds;

    /**
     * @var array Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>`vpc-id` - String - VPC ID, such as `vpc-f49l6u0z`. </li>
<li>`subnet-id` - String - Subnet ID, such as `subnet-f49l6u0z`. </li>
<li>`network-interface-id` - String - ENI ID, such as `eni-5k56k7k7`. </li>
<li>`attachment.instance-id` - String - ID of the bound CVM instance, such as `ins-3nqpdn3i`. </li>
<li>`groups.security-group-id` - String - ID of the bound security group, such as `sg-f9ekbxeq`. </li>
<li>`network-interface-name` - String - ENI instance name. </li>
<li>`network-interface-description` - String - ENI instance description. </li>
<li>`address-ip` - String - Private IPv4 address. A single IP will be fuzzily matched with the suffix, while multiple IPs will be exactly matched. It can be used with `ip-exact-match` to query and exactly match a single IP. </li>
<li>`ip-exact-match` - Boolean - Exact match by private IPv4 address. The first value will be returned if multiple values are found. </li>
<li>`tag-key` - String - Optional - Tag key. See Example 2 to learn more details. </li>
<li>`tag:tag-key` - String - Optional - Tag key-value pair. The `tag-key` should be replaced with a specific tag key. See Example 2 to learn more details. </li>
<li>`is-primary` - Boolean - Optional - Filter based on whether it is a primary ENI. Values: `true`, `false`. If this parameter is not specified, filter the both. </li>
<li>`eni-type` - String - Optional - Filter by ENI type. Values: `0` (Secondary ENI), `1` (Primary ENI), `2` (Relayed ENI) </li>
<li>`eni-qos` - String - Optional - Filter by ENI service level. Values: `AG` (Bronze), `AU` (Silver) </li>
<li>`address-ipv6` - String - Optional - Filter by private IPv6 address. Multiple IPv6 addresses can be used for query. If this field is used together with `address-ip`, their intersection will be used. </li>
<li>`public-address-ip` - String - Public IPv4 address. It supports exact matching. </li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $NetworkInterfaceIds Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request can have a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>`vpc-id` - String - VPC ID, such as `vpc-f49l6u0z`. </li>
<li>`subnet-id` - String - Subnet ID, such as `subnet-f49l6u0z`. </li>
<li>`network-interface-id` - String - ENI ID, such as `eni-5k56k7k7`. </li>
<li>`attachment.instance-id` - String - ID of the bound CVM instance, such as `ins-3nqpdn3i`. </li>
<li>`groups.security-group-id` - String - ID of the bound security group, such as `sg-f9ekbxeq`. </li>
<li>`network-interface-name` - String - ENI instance name. </li>
<li>`network-interface-description` - String - ENI instance description. </li>
<li>`address-ip` - String - Private IPv4 address. A single IP will be fuzzily matched with the suffix, while multiple IPs will be exactly matched. It can be used with `ip-exact-match` to query and exactly match a single IP. </li>
<li>`ip-exact-match` - Boolean - Exact match by private IPv4 address. The first value will be returned if multiple values are found. </li>
<li>`tag-key` - String - Optional - Tag key. See Example 2 to learn more details. </li>
<li>`tag:tag-key` - String - Optional - Tag key-value pair. The `tag-key` should be replaced with a specific tag key. See Example 2 to learn more details. </li>
<li>`is-primary` - Boolean - Optional - Filter based on whether it is a primary ENI. Values: `true`, `false`. If this parameter is not specified, filter the both. </li>
<li>`eni-type` - String - Optional - Filter by ENI type. Values: `0` (Secondary ENI), `1` (Primary ENI), `2` (Relayed ENI) </li>
<li>`eni-qos` - String - Optional - Filter by ENI service level. Values: `AG` (Bronze), `AU` (Silver) </li>
<li>`address-ipv6` - String - Optional - Filter by private IPv6 address. Multiple IPv6 addresses can be used for query. If this field is used together with `address-ip`, their intersection will be used. </li>
<li>`public-address-ip` - String - Public IPv4 address. It supports exact matching. </li>
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
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
        if (array_key_exists("NetworkInterfaceIds",$param) and $param["NetworkInterfaceIds"] !== null) {
            $this->NetworkInterfaceIds = $param["NetworkInterfaceIds"];
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
