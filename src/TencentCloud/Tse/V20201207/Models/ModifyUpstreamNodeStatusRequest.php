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
 * ModifyUpstreamNodeStatus request structure.
 *
 * @method string getGatewayId() Obtain Gateway instance ID
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID
 * @method string getServiceName() Obtain Service name
 * @method void setServiceName(string $ServiceName) Set Service name
 * @method string getHost() Obtain Access IP address or domain name
 * @method void setHost(string $Host) Set Access IP address or domain name
 * @method integer getPort() Obtain Access Port
 * @method void setPort(integer $Port) Set Access Port
 * @method string getStatus() Obtain HEALTHY or UNHEALTHY
 * @method void setStatus(string $Status) Set HEALTHY or UNHEALTHY
 */
class ModifyUpstreamNodeStatusRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayId;

    /**
     * @var string Service name
     */
    public $ServiceName;

    /**
     * @var string Access IP address or domain name
     */
    public $Host;

    /**
     * @var integer Access Port
     */
    public $Port;

    /**
     * @var string HEALTHY or UNHEALTHY
     */
    public $Status;

    /**
     * @param string $GatewayId Gateway instance ID
     * @param string $ServiceName Service name
     * @param string $Host Access IP address or domain name
     * @param integer $Port Access Port
     * @param string $Status HEALTHY or UNHEALTHY
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
