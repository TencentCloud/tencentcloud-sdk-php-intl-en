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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forwarding type
 *
 * @method array getProxyPorts() Obtain List of forwarding listening ports. Value range: 1–65535.
 * @method void setProxyPorts(array $ProxyPorts) Set List of forwarding listening ports. Value range: 1–65535.
 * @method string getProxyType() Obtain Forwarding protocol:
`http`: HTTP protocol
`https`: HTTPS protocol
]
 * @method void setProxyType(string $ProxyType) Set Forwarding protocol:
`http`: HTTP protocol
`https`: HTTPS protocol
]
 */
class ProxyTypeInfo extends AbstractModel
{
    /**
     * @var array List of forwarding listening ports. Value range: 1–65535.
     */
    public $ProxyPorts;

    /**
     * @var string Forwarding protocol:
`http`: HTTP protocol
`https`: HTTPS protocol
]
     */
    public $ProxyType;

    /**
     * @param array $ProxyPorts List of forwarding listening ports. Value range: 1–65535.
     * @param string $ProxyType Forwarding protocol:
`http`: HTTP protocol
`https`: HTTPS protocol
]
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
        if (array_key_exists("ProxyPorts",$param) and $param["ProxyPorts"] !== null) {
            $this->ProxyPorts = $param["ProxyPorts"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }
    }
}
