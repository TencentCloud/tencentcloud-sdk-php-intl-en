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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceNetworkAddress request structure.
 *
 * @method string getInstanceId() Obtain Specifies the ID of the instance for modifying the network. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

 * @method void setInstanceId(string $InstanceId) Set Specifies the ID of the instance for modifying the network. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

 * @method integer getOldIpExpiredTime() Obtain Retention period of the original IP address.
 - Unit: minutes. 0 means that the IP address is immediately repossessed.
 - The original IP address will be released after a scheduled period. Both the original and new IP addresses are accessible before release.

 * @method void setOldIpExpiredTime(integer $OldIpExpiredTime) Set Retention period of the original IP address.
 - Unit: minutes. 0 means that the IP address is immediately repossessed.
 - The original IP address will be released after a scheduled period. Both the original and new IP addresses are accessible before release.

 * @method string getNewUniqVpcId() Obtain VPC ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the VPC ID.
 * @method void setNewUniqVpcId(string $NewUniqVpcId) Set VPC ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the VPC ID.
 * @method string getNewUniqSubnetId() Obtain VPC subnet ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the subnet ID of the VPC.
 * @method void setNewUniqSubnetId(string $NewUniqSubnetId) Set VPC subnet ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the subnet ID of the VPC.
 * @method array getNetworkAddresses() Obtain IP address information, including the new IP address and the original IP address.
 * @method void setNetworkAddresses(array $NetworkAddresses) Set IP address information, including the new IP address and the original IP address.
 */
class ModifyDBInstanceNetworkAddressRequest extends AbstractModel
{
    /**
     * @var string Specifies the ID of the instance for modifying the network. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

     */
    public $InstanceId;

    /**
     * @var integer Retention period of the original IP address.
 - Unit: minutes. 0 means that the IP address is immediately repossessed.
 - The original IP address will be released after a scheduled period. Both the original and new IP addresses are accessible before release.

     */
    public $OldIpExpiredTime;

    /**
     * @var string VPC ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the VPC ID.
     */
    public $NewUniqVpcId;

    /**
     * @var string VPC subnet ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the subnet ID of the VPC.
     */
    public $NewUniqSubnetId;

    /**
     * @var array IP address information, including the new IP address and the original IP address.
     */
    public $NetworkAddresses;

    /**
     * @param string $InstanceId Specifies the ID of the instance for modifying the network. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

     * @param integer $OldIpExpiredTime Retention period of the original IP address.
 - Unit: minutes. 0 means that the IP address is immediately repossessed.
 - The original IP address will be released after a scheduled period. Both the original and new IP addresses are accessible before release.

     * @param string $NewUniqVpcId VPC ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the VPC ID.
     * @param string $NewUniqSubnetId VPC subnet ID after the switch. If the instance is using a basic network, this field is not required. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/240/38568?from_cn_redirect=1) API can be called to obtain the subnet ID of the VPC.
     * @param array $NetworkAddresses IP address information, including the new IP address and the original IP address.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OldIpExpiredTime",$param) and $param["OldIpExpiredTime"] !== null) {
            $this->OldIpExpiredTime = $param["OldIpExpiredTime"];
        }

        if (array_key_exists("NewUniqVpcId",$param) and $param["NewUniqVpcId"] !== null) {
            $this->NewUniqVpcId = $param["NewUniqVpcId"];
        }

        if (array_key_exists("NewUniqSubnetId",$param) and $param["NewUniqSubnetId"] !== null) {
            $this->NewUniqSubnetId = $param["NewUniqSubnetId"];
        }

        if (array_key_exists("NetworkAddresses",$param) and $param["NetworkAddresses"] !== null) {
            $this->NetworkAddresses = [];
            foreach ($param["NetworkAddresses"] as $key => $value){
                $obj = new ModifyNetworkAddress();
                $obj->deserialize($value);
                array_push($this->NetworkAddresses, $obj);
            }
        }
    }
}
