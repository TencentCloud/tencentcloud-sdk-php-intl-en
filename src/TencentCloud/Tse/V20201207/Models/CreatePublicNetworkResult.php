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
 * Create a public network result for the kong client
 *
 * @method string getGatewayId() Obtain Gateway instance ID
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID
 * @method string getGroupId() Obtain group ID
 * @method void setGroupId(string $GroupId) Set group ID
 * @method string getNetworkId() Obtain Client public network ID
 * @method void setNetworkId(string $NetworkId) Set Client public network ID
 */
class CreatePublicNetworkResult extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayId;

    /**
     * @var string group ID
     */
    public $GroupId;

    /**
     * @var string Client public network ID
     */
    public $NetworkId;

    /**
     * @param string $GatewayId Gateway instance ID
     * @param string $GroupId group ID
     * @param string $NetworkId Client public network ID
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

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }
    }
}
