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
 * Anti-DDoS access rate limit configuration
 *
 * @method integer getMode() Obtain Rate limit mode. Valid values:
`1`: rate limit based on the real server IP
`2`: rate limit based on the destination port
]
 * @method void setMode(integer $Mode) Set Rate limit mode. Valid values:
`1`: rate limit based on the real server IP
`2`: rate limit based on the destination port
]
 * @method array getSpeedValues() Obtain Rate limit value. This field contains at least one valid rate limit type. Note that only up to one value of each type is supported.
 * @method void setSpeedValues(array $SpeedValues) Set Rate limit value. This field contains at least one valid rate limit type. Note that only up to one value of each type is supported.
 * @method array getDstPortScopes() Obtain This field is replaced with a new field DstPortList.
 * @method void setDstPortScopes(array $DstPortScopes) Set This field is replaced with a new field DstPortList.
 * @method string getId() Obtain 
 * @method void setId(string $Id) Set 
 * @method string getProtocolList() Obtain IP protocol number. Valid values:
`ALL`: all protocols
`TCP`: TCP protocol
`UDP`: UDP protocol
`SMP`: SMP protocol
`1;2–100`: user-defined protocol with up to 8 ranges
]
Note: For custom protocol ranges, only protocol number is supported. Multiple ranges are separated by ";". If the value is `ALL`, any other protocol or protocol number should be excluded.
 * @method void setProtocolList(string $ProtocolList) Set IP protocol number. Valid values:
`ALL`: all protocols
`TCP`: TCP protocol
`UDP`: UDP protocol
`SMP`: SMP protocol
`1;2–100`: user-defined protocol with up to 8 ranges
]
Note: For custom protocol ranges, only protocol number is supported. Multiple ranges are separated by ";". If the value is `ALL`, any other protocol or protocol number should be excluded.
 * @method string getDstPortList() Obtain Port range list, which contains up to 8 ranges. Use ";" to separate multiple ports and "–" to indicate a range of ports, as described in the following formats: `0–65535`, `80;443;1000–2000`.
 * @method void setDstPortList(string $DstPortList) Set Port range list, which contains up to 8 ranges. Use ";" to separate multiple ports and "–" to indicate a range of ports, as described in the following formats: `0–65535`, `80;443;1000–2000`.
 */
class DDoSSpeedLimitConfig extends AbstractModel
{
    /**
     * @var integer Rate limit mode. Valid values:
`1`: rate limit based on the real server IP
`2`: rate limit based on the destination port
]
     */
    public $Mode;

    /**
     * @var array Rate limit value. This field contains at least one valid rate limit type. Note that only up to one value of each type is supported.
     */
    public $SpeedValues;

    /**
     * @var array This field is replaced with a new field DstPortList.
     */
    public $DstPortScopes;

    /**
     * @var string 
     */
    public $Id;

    /**
     * @var string IP protocol number. Valid values:
`ALL`: all protocols
`TCP`: TCP protocol
`UDP`: UDP protocol
`SMP`: SMP protocol
`1;2–100`: user-defined protocol with up to 8 ranges
]
Note: For custom protocol ranges, only protocol number is supported. Multiple ranges are separated by ";". If the value is `ALL`, any other protocol or protocol number should be excluded.
     */
    public $ProtocolList;

    /**
     * @var string Port range list, which contains up to 8 ranges. Use ";" to separate multiple ports and "–" to indicate a range of ports, as described in the following formats: `0–65535`, `80;443;1000–2000`.
     */
    public $DstPortList;

    /**
     * @param integer $Mode Rate limit mode. Valid values:
`1`: rate limit based on the real server IP
`2`: rate limit based on the destination port
]
     * @param array $SpeedValues Rate limit value. This field contains at least one valid rate limit type. Note that only up to one value of each type is supported.
     * @param array $DstPortScopes This field is replaced with a new field DstPortList.
     * @param string $Id 
     * @param string $ProtocolList IP protocol number. Valid values:
`ALL`: all protocols
`TCP`: TCP protocol
`UDP`: UDP protocol
`SMP`: SMP protocol
`1;2–100`: user-defined protocol with up to 8 ranges
]
Note: For custom protocol ranges, only protocol number is supported. Multiple ranges are separated by ";". If the value is `ALL`, any other protocol or protocol number should be excluded.
     * @param string $DstPortList Port range list, which contains up to 8 ranges. Use ";" to separate multiple ports and "–" to indicate a range of ports, as described in the following formats: `0–65535`, `80;443;1000–2000`.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("SpeedValues",$param) and $param["SpeedValues"] !== null) {
            $this->SpeedValues = [];
            foreach ($param["SpeedValues"] as $key => $value){
                $obj = new SpeedValue();
                $obj->deserialize($value);
                array_push($this->SpeedValues, $obj);
            }
        }

        if (array_key_exists("DstPortScopes",$param) and $param["DstPortScopes"] !== null) {
            $this->DstPortScopes = [];
            foreach ($param["DstPortScopes"] as $key => $value){
                $obj = new PortSegment();
                $obj->deserialize($value);
                array_push($this->DstPortScopes, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProtocolList",$param) and $param["ProtocolList"] !== null) {
            $this->ProtocolList = $param["ProtocolList"];
        }

        if (array_key_exists("DstPortList",$param) and $param["DstPortList"] !== null) {
            $this->DstPortList = $param["DstPortList"];
        }
    }
}
