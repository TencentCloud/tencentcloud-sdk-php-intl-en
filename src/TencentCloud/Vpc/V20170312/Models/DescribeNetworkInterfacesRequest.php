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
 * @method array getFilters() Obtain Filter condition. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>subnet-id - String - (Filter condition) Subnet instance ID, such as `subnet-f49l6u0z`.</li>
<li>network-interface-id - String - (Filter condition) ENI instance ID, such as `eni-5k56k7k7`.</li>
<li>attachment.instance-id - String - (Filter condition) CVM instance ID, such as `ins-3nqpdn3i`.</li>
<li>groups.security-group-id - String - (Filter condition) Instance ID of the security group, such as `sg-f9ekbxeq`.</li>
<li>network-interface-name - String - (Filter condition) ENI instance name.</li>
<li>network-interface-description - String - (Filter condition) ENI instance description.</li>
<li>address-ip - String - (Filter condition) Private IPv4 address.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>subnet-id - String - (Filter condition) Subnet instance ID, such as `subnet-f49l6u0z`.</li>
<li>network-interface-id - String - (Filter condition) ENI instance ID, such as `eni-5k56k7k7`.</li>
<li>attachment.instance-id - String - (Filter condition) CVM instance ID, such as `ins-3nqpdn3i`.</li>
<li>groups.security-group-id - String - (Filter condition) Instance ID of the security group, such as `sg-f9ekbxeq`.</li>
<li>network-interface-name - String - (Filter condition) ENI instance name.</li>
<li>network-interface-description - String - (Filter condition) ENI instance description.</li>
<li>address-ip - String - (Filter condition) Private IPv4 address.</li>
 * @method integer getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0.
 * @method integer getLimit() Obtain Number of values to be returned. The default value is 20. Maximum is 100.
 * @method void setLimit(integer $Limit) Set Number of values to be returned. The default value is 20. Maximum is 100.
 */
class DescribeNetworkInterfacesRequest extends AbstractModel
{
    /**
     * @var array Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request can have a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
     */
    public $NetworkInterfaceIds;

    /**
     * @var array Filter condition. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>subnet-id - String - (Filter condition) Subnet instance ID, such as `subnet-f49l6u0z`.</li>
<li>network-interface-id - String - (Filter condition) ENI instance ID, such as `eni-5k56k7k7`.</li>
<li>attachment.instance-id - String - (Filter condition) CVM instance ID, such as `ins-3nqpdn3i`.</li>
<li>groups.security-group-id - String - (Filter condition) Instance ID of the security group, such as `sg-f9ekbxeq`.</li>
<li>network-interface-name - String - (Filter condition) ENI instance name.</li>
<li>network-interface-description - String - (Filter condition) ENI instance description.</li>
<li>address-ip - String - (Filter condition) Private IPv4 address.</li>
     */
    public $Filters;

    /**
     * @var integer Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of values to be returned. The default value is 20. Maximum is 100.
     */
    public $Limit;

    /**
     * @param array $NetworkInterfaceIds Queries the ID of the ENI instance, such as `eni-pxir56ns`. Each request can have a maximum of 100 instances. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter condition. `NetworkInterfaceIds` and `Filters` cannot be specified at the same time.
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>subnet-id - String - (Filter condition) Subnet instance ID, such as `subnet-f49l6u0z`.</li>
<li>network-interface-id - String - (Filter condition) ENI instance ID, such as `eni-5k56k7k7`.</li>
<li>attachment.instance-id - String - (Filter condition) CVM instance ID, such as `ins-3nqpdn3i`.</li>
<li>groups.security-group-id - String - (Filter condition) Instance ID of the security group, such as `sg-f9ekbxeq`.</li>
<li>network-interface-name - String - (Filter condition) ENI instance name.</li>
<li>network-interface-description - String - (Filter condition) ENI instance description.</li>
<li>address-ip - String - (Filter condition) Private IPv4 address.</li>
     * @param integer $Offset Offset. The default value is 0.
     * @param integer $Limit Number of values to be returned. The default value is 20. Maximum is 100.
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
