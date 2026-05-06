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
 * Protocol port list of the gateway instance
 *
 * @method string getScheme() Obtain Port protocol, selectable HTTP, HTTPS, TCP, and UDP.
 * @method void setScheme(string $Scheme) Set Port protocol, selectable HTTP, HTTPS, TCP, and UDP.
 * @method array getPortList() Obtain port list
 * @method void setPortList(array $PortList) Set port list
 */
class GatewayInstanceSchemeAndPorts extends AbstractModel
{
    /**
     * @var string Port protocol, selectable HTTP, HTTPS, TCP, and UDP.
     */
    public $Scheme;

    /**
     * @var array port list
     */
    public $PortList;

    /**
     * @param string $Scheme Port protocol, selectable HTTP, HTTPS, TCP, and UDP.
     * @param array $PortList port list
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
        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("PortList",$param) and $param["PortList"] !== null) {
            $this->PortList = $param["PortList"];
        }
    }
}
