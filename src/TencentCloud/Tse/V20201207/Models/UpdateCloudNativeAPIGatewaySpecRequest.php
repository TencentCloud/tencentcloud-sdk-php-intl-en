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
 * UpdateCloudNativeAPIGatewaySpec request structure.
 *
 * @method string getGatewayId() Obtain Cloud Native API gateway instance ID.
Only supports postpaid instances
 * @method void setGatewayId(string $GatewayId) Set Cloud Native API gateway instance ID.
Only supports postpaid instances
 * @method string getGroupId() Obtain Gateway group id
 * @method void setGroupId(string $GroupId) Set Gateway group id
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() Obtain Gateway grouping node specification configuration.
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) Set Gateway grouping node specification configuration.
 */
class UpdateCloudNativeAPIGatewaySpecRequest extends AbstractModel
{
    /**
     * @var string Cloud Native API gateway instance ID.
Only supports postpaid instances
     */
    public $GatewayId;

    /**
     * @var string Gateway group id
     */
    public $GroupId;

    /**
     * @var CloudNativeAPIGatewayNodeConfig Gateway grouping node specification configuration.
     */
    public $NodeConfig;

    /**
     * @param string $GatewayId Cloud Native API gateway instance ID.
Only supports postpaid instances
     * @param string $GroupId Gateway group id
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig Gateway grouping node specification configuration.
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

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }
    }
}
