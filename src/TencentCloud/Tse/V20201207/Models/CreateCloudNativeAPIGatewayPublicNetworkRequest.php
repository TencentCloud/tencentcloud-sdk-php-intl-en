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
 * CreateCloudNativeAPIGatewayPublicNetwork request structure.
 *
 * @method string getGatewayId() Obtain Cloud native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud native API gateway instance ID.
 * @method string getGroupId() Obtain group id.
 * @method void setGroupId(string $GroupId) Set group id.
 * @method InternetConfig getInternetConfig() Obtain Public network CLB configuration.
 * @method void setInternetConfig(InternetConfig $InternetConfig) Set Public network CLB configuration.
 */
class CreateCloudNativeAPIGatewayPublicNetworkRequest extends AbstractModel
{
    /**
     * @var string Cloud native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var string group id.
     */
    public $GroupId;

    /**
     * @var InternetConfig Public network CLB configuration.
     */
    public $InternetConfig;

    /**
     * @param string $GatewayId Cloud native API gateway instance ID.
     * @param string $GroupId group id.
     * @param InternetConfig $InternetConfig Public network CLB configuration.
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

        if (array_key_exists("InternetConfig",$param) and $param["InternetConfig"] !== null) {
            $this->InternetConfig = new InternetConfig();
            $this->InternetConfig->deserialize($param["InternetConfig"]);
        }
    }
}
