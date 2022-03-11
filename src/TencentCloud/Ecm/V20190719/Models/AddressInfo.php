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
 * IP address information structure.
 *
 * @method PublicIPAddressInfo getPublicIPAddressInfo() Obtain Public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIPAddressInfo(PublicIPAddressInfo $PublicIPAddressInfo) Set Public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method PrivateIPAddressInfo getPrivateIPAddressInfo() Obtain Private IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIPAddressInfo(PrivateIPAddressInfo $PrivateIPAddressInfo) Set Private IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method PublicIPAddressInfo getPublicIPv6AddressInfo() Obtain Public IPv6 information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIPv6AddressInfo(PublicIPAddressInfo $PublicIPv6AddressInfo) Set Public IPv6 information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AddressInfo extends AbstractModel
{
    /**
     * @var PublicIPAddressInfo Public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIPAddressInfo;

    /**
     * @var PrivateIPAddressInfo Private IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateIPAddressInfo;

    /**
     * @var PublicIPAddressInfo Public IPv6 information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIPv6AddressInfo;

    /**
     * @param PublicIPAddressInfo $PublicIPAddressInfo Public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param PrivateIPAddressInfo $PrivateIPAddressInfo Private IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param PublicIPAddressInfo $PublicIPv6AddressInfo Public IPv6 information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PublicIPAddressInfo",$param) and $param["PublicIPAddressInfo"] !== null) {
            $this->PublicIPAddressInfo = new PublicIPAddressInfo();
            $this->PublicIPAddressInfo->deserialize($param["PublicIPAddressInfo"]);
        }

        if (array_key_exists("PrivateIPAddressInfo",$param) and $param["PrivateIPAddressInfo"] !== null) {
            $this->PrivateIPAddressInfo = new PrivateIPAddressInfo();
            $this->PrivateIPAddressInfo->deserialize($param["PrivateIPAddressInfo"]);
        }

        if (array_key_exists("PublicIPv6AddressInfo",$param) and $param["PublicIPv6AddressInfo"] !== null) {
            $this->PublicIPv6AddressInfo = new PublicIPAddressInfo();
            $this->PublicIPv6AddressInfo->deserialize($param["PublicIPv6AddressInfo"]);
        }
    }
}
