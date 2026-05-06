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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudNativeAPIGatewayPublicNetwork request structure.
 *
 * @method string getGatewayId() Obtain Cloud native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud native API gateway instance ID.
 * @method string getGroupId() Obtain group id, required for kong event type
 * @method void setGroupId(string $GroupId) Set group id, required for kong event type
 * @method string getInternetAddressVersion() Obtain public network type
-IPV4 (default value)
- IPV6
 * @method void setInternetAddressVersion(string $InternetAddressVersion) Set public network type
-IPV4 (default value)
- IPV6
 * @method string getVip() Obtain Public IP address. Required when public IP addresses exist across multiple public networks.
 * @method void setVip(string $Vip) Set Public IP address. Required when public IP addresses exist across multiple public networks.
 */
class DeleteCloudNativeAPIGatewayPublicNetworkRequest extends AbstractModel
{
    /**
     * @var string Cloud native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var string group id, required for kong event type
     */
    public $GroupId;

    /**
     * @var string public network type
-IPV4 (default value)
- IPV6
     */
    public $InternetAddressVersion;

    /**
     * @var string Public IP address. Required when public IP addresses exist across multiple public networks.
     */
    public $Vip;

    /**
     * @param string $GatewayId Cloud native API gateway instance ID.
     * @param string $GroupId group id, required for kong event type
     * @param string $InternetAddressVersion public network type
-IPV4 (default value)
- IPV6
     * @param string $Vip Public IP address. Required when public IP addresses exist across multiple public networks.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("InternetAddressVersion",$param) and $param["InternetAddressVersion"] !== null) {
            $this->InternetAddressVersion = $param["InternetAddressVersion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
