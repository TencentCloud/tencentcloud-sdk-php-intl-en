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
 * AllocateAddresses request structure.
 *
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method integer getAddressCount() Obtain Number of EIPs. Default value: 1.
 * @method void setAddressCount(integer $AddressCount) Set Number of EIPs. Default value: 1.
 * @method string getInternetServiceProvider() Obtain CMCC: China Mobile
CTCC: China Telecom
CUCC: China Unicom
 * @method void setInternetServiceProvider(string $InternetServiceProvider) Set CMCC: China Mobile
CTCC: China Telecom
CUCC: China Unicom
 * @method integer getInternetMaxBandwidthOut() Obtain 1–5000 Mbps. Default value: 1 Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set 1–5000 Mbps. Default value: 1 Mbps.
 * @method array getTags() Obtain List of tags to be bound.
 * @method void setTags(array $Tags) Set List of tags to be bound.
 * @method string getInstanceId() Obtain ID of the instance to be bound.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be bound.
 * @method string getNetworkInterfaceId() Obtain ID of the ENI to be bound, such as `eni-11112222`. `NetworkInterfaceId` and `InstanceId` cannot be specified at the same time. The ENI ID can be obtained from the `networkInterfaceId` field in the returned value of the `DescribeNetworkInterfaces` API.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ID of the ENI to be bound, such as `eni-11112222`. `NetworkInterfaceId` and `InstanceId` cannot be specified at the same time. The ENI ID can be obtained from the `networkInterfaceId` field in the returned value of the `DescribeNetworkInterfaces` API.
 * @method string getPrivateIpAddress() Obtain Private IP to be bound. If you specify `NetworkInterfaceId`, you must also specify `PrivateIpAddress`, which means to bind the EIP to the specified private IP of the specified ENI. You must also make sure that the specified `PrivateIpAddress` is a private IP of the specified `NetworkInterfaceId`. The private IP of the specified ENI can be obtained from the `privateIpAddress` field in the returned value of the `DescribeNetworkInterfaces` API.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set Private IP to be bound. If you specify `NetworkInterfaceId`, you must also specify `PrivateIpAddress`, which means to bind the EIP to the specified private IP of the specified ENI. You must also make sure that the specified `PrivateIpAddress` is a private IP of the specified `NetworkInterfaceId`. The private IP of the specified ENI can be obtained from the `privateIpAddress` field in the returned value of the `DescribeNetworkInterfaces` API.
 */
class AllocateAddressesRequest extends AbstractModel
{
    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var integer Number of EIPs. Default value: 1.
     */
    public $AddressCount;

    /**
     * @var string CMCC: China Mobile
CTCC: China Telecom
CUCC: China Unicom
     */
    public $InternetServiceProvider;

    /**
     * @var integer 1–5000 Mbps. Default value: 1 Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var array List of tags to be bound.
     */
    public $Tags;

    /**
     * @var string ID of the instance to be bound.
     */
    public $InstanceId;

    /**
     * @var string ID of the ENI to be bound, such as `eni-11112222`. `NetworkInterfaceId` and `InstanceId` cannot be specified at the same time. The ENI ID can be obtained from the `networkInterfaceId` field in the returned value of the `DescribeNetworkInterfaces` API.
     */
    public $NetworkInterfaceId;

    /**
     * @var string Private IP to be bound. If you specify `NetworkInterfaceId`, you must also specify `PrivateIpAddress`, which means to bind the EIP to the specified private IP of the specified ENI. You must also make sure that the specified `PrivateIpAddress` is a private IP of the specified `NetworkInterfaceId`. The private IP of the specified ENI can be obtained from the `privateIpAddress` field in the returned value of the `DescribeNetworkInterfaces` API.
     */
    public $PrivateIpAddress;

    /**
     * @param string $EcmRegion ECM region
     * @param integer $AddressCount Number of EIPs. Default value: 1.
     * @param string $InternetServiceProvider CMCC: China Mobile
CTCC: China Telecom
CUCC: China Unicom
     * @param integer $InternetMaxBandwidthOut 1–5000 Mbps. Default value: 1 Mbps.
     * @param array $Tags List of tags to be bound.
     * @param string $InstanceId ID of the instance to be bound.
     * @param string $NetworkInterfaceId ID of the ENI to be bound, such as `eni-11112222`. `NetworkInterfaceId` and `InstanceId` cannot be specified at the same time. The ENI ID can be obtained from the `networkInterfaceId` field in the returned value of the `DescribeNetworkInterfaces` API.
     * @param string $PrivateIpAddress Private IP to be bound. If you specify `NetworkInterfaceId`, you must also specify `PrivateIpAddress`, which means to bind the EIP to the specified private IP of the specified ENI. You must also make sure that the specified `PrivateIpAddress` is a private IP of the specified `NetworkInterfaceId`. The private IP of the specified ENI can be obtained from the `privateIpAddress` field in the returned value of the `DescribeNetworkInterfaces` API.
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }
    }
}
