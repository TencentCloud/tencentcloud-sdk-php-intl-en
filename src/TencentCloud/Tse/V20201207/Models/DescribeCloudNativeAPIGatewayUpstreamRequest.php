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
 * DescribeCloudNativeAPIGatewayUpstream request structure.
 *
 * @method string getGatewayId() Obtain gateway ID
 * @method void setGatewayId(string $GatewayId) Set gateway ID
 * @method string getServiceName() Obtain Service name.
 * @method void setServiceName(string $ServiceName) Set Service name.
 */
class DescribeCloudNativeAPIGatewayUpstreamRequest extends AbstractModel
{
    /**
     * @var string gateway ID
     */
    public $GatewayId;

    /**
     * @var string Service name.
     */
    public $ServiceName;

    /**
     * @param string $GatewayId gateway ID
     * @param string $ServiceName Service name.
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
