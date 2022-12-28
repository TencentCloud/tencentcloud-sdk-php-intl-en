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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchProxyVpc request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getUniqVpcId() Obtain VPC ID in string
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID in string
 * @method string getUniqSubnetId() Obtain Subnet ID in string
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID in string
 * @method integer getOldIpReserveHours() Obtain Valid hours of old IP
 * @method void setOldIpReserveHours(integer $OldIpReserveHours) Set Valid hours of old IP
 * @method string getProxyGroupId() Obtain Database proxy group ID (required), which can be obtained through the `DescribeProxies` API.
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy group ID (required), which can be obtained through the `DescribeProxies` API.
 */
class SwitchProxyVpcRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string VPC ID in string
     */
    public $UniqVpcId;

    /**
     * @var string Subnet ID in string
     */
    public $UniqSubnetId;

    /**
     * @var integer Valid hours of old IP
     */
    public $OldIpReserveHours;

    /**
     * @var string Database proxy group ID (required), which can be obtained through the `DescribeProxies` API.
     */
    public $ProxyGroupId;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $UniqVpcId VPC ID in string
     * @param string $UniqSubnetId Subnet ID in string
     * @param integer $OldIpReserveHours Valid hours of old IP
     * @param string $ProxyGroupId Database proxy group ID (required), which can be obtained through the `DescribeProxies` API.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("OldIpReserveHours",$param) and $param["OldIpReserveHours"] !== null) {
            $this->OldIpReserveHours = $param["OldIpReserveHours"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }
    }
}
