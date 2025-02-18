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
 * AssociateIPv6Address request structure.
 *
 * @method string getIPv6AddressId() Obtain Unique ID of the EIPv6, such as eipv6-11112222.
 * @method void setIPv6AddressId(string $IPv6AddressId) Set Unique ID of the EIPv6, such as eipv6-11112222.
 * @method string getNetworkInterfaceId() Obtain ID of the ENI to be bound, such as eni-11112222. NetworkInterfaceId and InstanceId cannot be specified at the same time. The ENI ID can be queried by logging in to the console or obtained from the networkInterfaceId field in the returned value of the DescribeNetworkInterfaces API.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ID of the ENI to be bound, such as eni-11112222. NetworkInterfaceId and InstanceId cannot be specified at the same time. The ENI ID can be queried by logging in to the console or obtained from the networkInterfaceId field in the returned value of the DescribeNetworkInterfaces API.
 * @method string getPrivateIPv6Address() Obtain Private IPv6 to be bound. If NetworkInterfaceId is specified, PrivateIPv6Address must also be specified, which indicates that the EIP will be bound to the specified private IPv6 of the specified ENI. At the same time, it shall be ensured that the specified PrivateIPv6Address is a private IPv6 on the specified NetworkInterfaceId. The specified ENI's private IPv6 can be queried by logging in to the console or obtained from the Ipv6AddressSet.Address field in the returned value of the DescribeNetworkInterfaces API.
 * @method void setPrivateIPv6Address(string $PrivateIPv6Address) Set Private IPv6 to be bound. If NetworkInterfaceId is specified, PrivateIPv6Address must also be specified, which indicates that the EIP will be bound to the specified private IPv6 of the specified ENI. At the same time, it shall be ensured that the specified PrivateIPv6Address is a private IPv6 on the specified NetworkInterfaceId. The specified ENI's private IPv6 can be queried by logging in to the console or obtained from the Ipv6AddressSet.Address field in the returned value of the DescribeNetworkInterfaces API.
 */
class AssociateIPv6AddressRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the EIPv6, such as eipv6-11112222.
     */
    public $IPv6AddressId;

    /**
     * @var string ID of the ENI to be bound, such as eni-11112222. NetworkInterfaceId and InstanceId cannot be specified at the same time. The ENI ID can be queried by logging in to the console or obtained from the networkInterfaceId field in the returned value of the DescribeNetworkInterfaces API.
     */
    public $NetworkInterfaceId;

    /**
     * @var string Private IPv6 to be bound. If NetworkInterfaceId is specified, PrivateIPv6Address must also be specified, which indicates that the EIP will be bound to the specified private IPv6 of the specified ENI. At the same time, it shall be ensured that the specified PrivateIPv6Address is a private IPv6 on the specified NetworkInterfaceId. The specified ENI's private IPv6 can be queried by logging in to the console or obtained from the Ipv6AddressSet.Address field in the returned value of the DescribeNetworkInterfaces API.
     */
    public $PrivateIPv6Address;

    /**
     * @param string $IPv6AddressId Unique ID of the EIPv6, such as eipv6-11112222.
     * @param string $NetworkInterfaceId ID of the ENI to be bound, such as eni-11112222. NetworkInterfaceId and InstanceId cannot be specified at the same time. The ENI ID can be queried by logging in to the console or obtained from the networkInterfaceId field in the returned value of the DescribeNetworkInterfaces API.
     * @param string $PrivateIPv6Address Private IPv6 to be bound. If NetworkInterfaceId is specified, PrivateIPv6Address must also be specified, which indicates that the EIP will be bound to the specified private IPv6 of the specified ENI. At the same time, it shall be ensured that the specified PrivateIPv6Address is a private IPv6 on the specified NetworkInterfaceId. The specified ENI's private IPv6 can be queried by logging in to the console or obtained from the Ipv6AddressSet.Address field in the returned value of the DescribeNetworkInterfaces API.
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
        if (array_key_exists("IPv6AddressId",$param) and $param["IPv6AddressId"] !== null) {
            $this->IPv6AddressId = $param["IPv6AddressId"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("PrivateIPv6Address",$param) and $param["PrivateIPv6Address"] !== null) {
            $this->PrivateIPv6Address = $param["PrivateIPv6Address"];
        }
    }
}
