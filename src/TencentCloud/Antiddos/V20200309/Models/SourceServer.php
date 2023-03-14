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
 * Real server details
 *
 * @method string getRealServer() Obtain Types of the real server address, such as IP or domain name.
 * @method void setRealServer(string $RealServer) Set Types of the real server address, such as IP or domain name.
 * @method integer getRsType() Obtain Types of the real server address:
`1`: domain name
`2`: IP
]
 * @method void setRsType(integer $RsType) Set Types of the real server address:
`1`: domain name
`2`: IP
]
 * @method integer getWeight() Obtain Forward weight of the real server. Value range: 1–100.
 * @method void setWeight(integer $Weight) Set Forward weight of the real server. Value range: 1–100.
 * @method integer getPort() Obtain Port number. Value range: 0-65535.
 * @method void setPort(integer $Port) Set Port number. Value range: 0-65535.
 */
class SourceServer extends AbstractModel
{
    /**
     * @var string Types of the real server address, such as IP or domain name.
     */
    public $RealServer;

    /**
     * @var integer Types of the real server address:
`1`: domain name
`2`: IP
]
     */
    public $RsType;

    /**
     * @var integer Forward weight of the real server. Value range: 1–100.
     */
    public $Weight;

    /**
     * @var integer Port number. Value range: 0-65535.
     */
    public $Port;

    /**
     * @param string $RealServer Types of the real server address, such as IP or domain name.
     * @param integer $RsType Types of the real server address:
`1`: domain name
`2`: IP
]
     * @param integer $Weight Forward weight of the real server. Value range: 1–100.
     * @param integer $Port Port number. Value range: 0-65535.
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
        if (array_key_exists("RealServer",$param) and $param["RealServer"] !== null) {
            $this->RealServer = $param["RealServer"];
        }

        if (array_key_exists("RsType",$param) and $param["RsType"] !== null) {
            $this->RsType = $param["RsType"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
