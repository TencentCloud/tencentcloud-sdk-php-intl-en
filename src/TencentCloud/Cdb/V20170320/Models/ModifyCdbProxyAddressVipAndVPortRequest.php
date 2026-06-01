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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCdbProxyAddressVipAndVPort request structure.
 *
 * @method string getProxyGroupId() Obtain Proxy group ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
 * @method string getProxyAddressId() Obtain Proxy group address ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
 * @method void setProxyAddressId(string $ProxyAddressId) Set Proxy group address ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
 * @method string getUniqVpcId() Obtain VPC ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getUniqSubnetId() Obtain Private subnet ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Private subnet ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getVip() Obtain IP. If not specified, the system will assign an available IP under subnet.
 * @method void setVip(string $Vip) Set IP. If not specified, the system will assign an available IP under subnet.
 * @method integer getVPort() Obtain Port. Default value 3306, value ranges from 1024 to 65535.
 * @method void setVPort(integer $VPort) Set Port. Default value 3306, value ranges from 1024 to 65535.
 * @method integer getReleaseDuration() Obtain Old IP valid hours. Measurement unit: hr, default value: 24, value ranges from 0 to 168.
 * @method void setReleaseDuration(integer $ReleaseDuration) Set Old IP valid hours. Measurement unit: hr, default value: 24, value ranges from 0 to 168.
 */
class ModifyCdbProxyAddressVipAndVPortRequest extends AbstractModel
{
    /**
     * @var string Proxy group ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
     */
    public $ProxyGroupId;

    /**
     * @var string Proxy group address ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
     */
    public $ProxyAddressId;

    /**
     * @var string VPC ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $UniqVpcId;

    /**
     * @var string Private subnet ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $UniqSubnetId;

    /**
     * @var string IP. If not specified, the system will assign an available IP under subnet.
     */
    public $Vip;

    /**
     * @var integer Port. Default value 3306, value ranges from 1024 to 65535.
     */
    public $VPort;

    /**
     * @var integer Old IP valid hours. Measurement unit: hr, default value: 24, value ranges from 0 to 168.
     */
    public $ReleaseDuration;

    /**
     * @param string $ProxyGroupId Proxy group ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
     * @param string $ProxyAddressId Proxy group address ID. Obtain through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
     * @param string $UniqVpcId VPC ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $UniqSubnetId Private subnet ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $Vip IP. If not specified, the system will assign an available IP under subnet.
     * @param integer $VPort Port. Default value 3306, value ranges from 1024 to 65535.
     * @param integer $ReleaseDuration Old IP valid hours. Measurement unit: hr, default value: 24, value ranges from 0 to 168.
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
