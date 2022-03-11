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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetworkInterfaces request structure.
 *
 * @method array getNetworkInterfaceIds() Obtain Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request supports a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
 * @method void setNetworkInterfaceIds(array $NetworkInterfaceIds) Set Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request supports a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
subnet-id - String - (Filter) Subnet instance ID, such as `subnet-f49l6u0z`.
network-interface-id - String - (Filter) ENI instance ID, such as `eni-5k56k7k7`.
attachment.instance-id - String - (Filter) ID of the bound CVM instance, such as `ein-3nqpdn3i`.
groups.security-group-id - String - (Filter) ID of the bound security group instance, such as `sg-f9ekbxeq`.
network-interface-name - String - (Filter) ENI instance name.
network-interface-description - String - (Filter) ENI instance description.
address-ip - String - (Filter) Private IPv4 address.
tag-key - String - Required: no - (Filter) Filter by tag key. For directions, see Sample 2.
tag:tag-key - String - Required: no - (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key. For directions, see Sample 3.
is-primary - Boolean - Required: no - (Filter) Filter by whether it is a primary ENI. true: filter only by primary ENI; false: filter only by secondary ENI. If this parameter is not specified, filtering by both primary and secondary ENIs will be used.
 * @method void setFilters(array $Filters) Set Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
subnet-id - String - (Filter) Subnet instance ID, such as `subnet-f49l6u0z`.
network-interface-id - String - (Filter) ENI instance ID, such as `eni-5k56k7k7`.
attachment.instance-id - String - (Filter) ID of the bound CVM instance, such as `ein-3nqpdn3i`.
groups.security-group-id - String - (Filter) ID of the bound security group instance, such as `sg-f9ekbxeq`.
network-interface-name - String - (Filter) ENI instance name.
network-interface-description - String - (Filter) ENI instance description.
address-ip - String - (Filter) Private IPv4 address.
tag-key - String - Required: no - (Filter) Filter by tag key. For directions, see Sample 2.
tag:tag-key - String - Required: no - (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key. For directions, see Sample 3.
is-primary - Boolean - Required: no - (Filter) Filter by whether it is a primary ENI. true: filter only by primary ENI; false: filter only by secondary ENI. If this parameter is not specified, filtering by both primary and secondary ENIs will be used.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: 20. Maximum value: 100.
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 */
class DescribeNetworkInterfacesRequest extends AbstractModel
{
    /**
     * @var array Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request supports a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
     */
    public $NetworkInterfaceIds;

    /**
     * @var array Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
subnet-id - String - (Filter) Subnet instance ID, such as `subnet-f49l6u0z`.
network-interface-id - String - (Filter) ENI instance ID, such as `eni-5k56k7k7`.
attachment.instance-id - String - (Filter) ID of the bound CVM instance, such as `ein-3nqpdn3i`.
groups.security-group-id - String - (Filter) ID of the bound security group instance, such as `sg-f9ekbxeq`.
network-interface-name - String - (Filter) ENI instance name.
network-interface-description - String - (Filter) ENI instance description.
address-ip - String - (Filter) Private IPv4 address.
tag-key - String - Required: no - (Filter) Filter by tag key. For directions, see Sample 2.
tag:tag-key - String - Required: no - (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key. For directions, see Sample 3.
is-primary - Boolean - Required: no - (Filter) Filter by whether it is a primary ENI. true: filter only by primary ENI; false: filter only by secondary ENI. If this parameter is not specified, filtering by both primary and secondary ENIs will be used.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @param array $NetworkInterfaceIds Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request supports a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
subnet-id - String - (Filter) Subnet instance ID, such as `subnet-f49l6u0z`.
network-interface-id - String - (Filter) ENI instance ID, such as `eni-5k56k7k7`.
attachment.instance-id - String - (Filter) ID of the bound CVM instance, such as `ein-3nqpdn3i`.
groups.security-group-id - String - (Filter) ID of the bound security group instance, such as `sg-f9ekbxeq`.
network-interface-name - String - (Filter) ENI instance name.
network-interface-description - String - (Filter) ENI instance description.
address-ip - String - (Filter) Private IPv4 address.
tag-key - String - Required: no - (Filter) Filter by tag key. For directions, see Sample 2.
tag:tag-key - String - Required: no - (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key. For directions, see Sample 3.
is-primary - Boolean - Required: no - (Filter) Filter by whether it is a primary ENI. true: filter only by primary ENI; false: filter only by secondary ENI. If this parameter is not specified, filtering by both primary and secondary ENIs will be used.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of results to be returned. Default value: 20. Maximum value: 100.
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
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

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}
