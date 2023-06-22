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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCdbProxyAddressVipAndVPort request structure.
 *
 * @method string getProxyGroupId() Obtain Proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID
 * @method string getProxyAddressId() Obtain Address ID of the proxy group
 * @method void setProxyAddressId(string $ProxyAddressId) Set Address ID of the proxy group
 * @method string getUniqVpcId() Obtain VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
 * @method string getUniqSubnetId() Obtain VPC subnet ID
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID
 * @method string getVip() Obtain IP address
 * @method void setVip(string $Vip) Set IP address
 * @method integer getVPort() Obtain Port
 * @method void setVPort(integer $VPort) Set Port
 * @method integer getReleaseDuration() Obtain Valid Hours of Old IP
 * @method void setReleaseDuration(integer $ReleaseDuration) Set Valid Hours of Old IP
 */
class ModifyCdbProxyAddressVipAndVPortRequest extends AbstractModel
{
    /**
     * @var string Proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var string Address ID of the proxy group
     */
    public $ProxyAddressId;

    /**
     * @var string VPC ID
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID
     */
    public $UniqSubnetId;

    /**
     * @var string IP address
     */
    public $Vip;

    /**
     * @var integer Port
     */
    public $VPort;

    /**
     * @var integer Valid Hours of Old IP
     */
    public $ReleaseDuration;

    /**
     * @param string $ProxyGroupId Proxy group ID
     * @param string $ProxyAddressId Address ID of the proxy group
     * @param string $UniqVpcId VPC ID
     * @param string $UniqSubnetId VPC subnet ID
     * @param string $Vip IP address
     * @param integer $VPort Port
     * @param integer $ReleaseDuration Valid Hours of Old IP
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("ReleaseDuration",$param) and $param["ReleaseDuration"] !== null) {
            $this->ReleaseDuration = $param["ReleaseDuration"];
        }
    }
}
