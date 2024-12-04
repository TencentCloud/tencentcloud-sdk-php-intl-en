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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group inbound/outbound rules
 *
 * @method string getAction() Obtain Whether the inbound and outbound IP addresses and ports of the database are allowed.
- ACCEPT: allowed.
- DROP: disallowed.
 * @method void setAction(string $Action) Set Whether the inbound and outbound IP addresses and ports of the database are allowed.
- ACCEPT: allowed.
- DROP: disallowed.
 * @method string getIp() Obtain IP address for accessing the database
 * @method void setIp(string $Ip) Set IP address for accessing the database
 * @method string getPort() Obtain Port number
 * @method void setPort(string $Port) Set Port number
 * @method string getProto() Obtain Protocol type
 * @method void setProto(string $Proto) Set Protocol type
 */
class SecurityGroupsInboundAndOutbound extends AbstractModel
{
    /**
     * @var string Whether the inbound and outbound IP addresses and ports of the database are allowed.
- ACCEPT: allowed.
- DROP: disallowed.
     */
    public $Action;

    /**
     * @var string IP address for accessing the database
     */
    public $Ip;

    /**
     * @var string Port number
     */
    public $Port;

    /**
     * @var string Protocol type
     */
    public $Proto;

    /**
     * @param string $Action Whether the inbound and outbound IP addresses and ports of the database are allowed.
- ACCEPT: allowed.
- DROP: disallowed.
     * @param string $Ip IP address for accessing the database
     * @param string $Port Port number
     * @param string $Proto Protocol type
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }
    }
}
