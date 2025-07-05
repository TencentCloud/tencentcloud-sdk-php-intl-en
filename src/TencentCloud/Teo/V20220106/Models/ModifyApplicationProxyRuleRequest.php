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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplicationProxyRule request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getProxyId() Obtain Proxy ID
 * @method void setProxyId(string $ProxyId) Set Proxy ID
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getProto() Obtain Protocol. Valid values: `TCP` and `UDP`.
 * @method void setProto(string $Proto) Set Protocol. Valid values: `TCP` and `UDP`.
 * @method array getPort() Obtain Port. Valid values:
`80`: Port 80
`81-90`: Port range 81-90
 * @method void setPort(array $Port) Set Port. Valid values:
`80`: Port 80
`81-90`: Port range 81-90
 * @method string getOriginType() Obtain Origin server type. Valid values:
`custom`: Specified origins
`origins`: Origin group
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
`custom`: Specified origins
`origins`: Origin group
 * @method array getOriginValue() Obtain Origin server information:
When `OriginType=custom`, it indicates one or more origin servers. Example:
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

When `OriginType=origins`, it indicates an origin group ID. Example:
OriginValue=["origin-xxx"]
 * @method void setOriginValue(array $OriginValue) Set Origin server information:
When `OriginType=custom`, it indicates one or more origin servers. Example:
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

When `OriginType=origins`, it indicates an origin group ID. Example:
OriginValue=["origin-xxx"]
 * @method string getForwardClientIp() Obtain Passes the client IP. When `Proto=TCP`, valid values:
`TOA`: Pass the client IP via TOA.
`PPV1`: Pass the client IP via Proxy Protocol V1.
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
When `Proto=UDP`, valid values:
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
 * @method void setForwardClientIp(string $ForwardClientIp) Set Passes the client IP. When `Proto=TCP`, valid values:
`TOA`: Pass the client IP via TOA.
`PPV1`: Pass the client IP via Proxy Protocol V1.
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
When `Proto=UDP`, valid values:
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
 * @method boolean getSessionPersist() Obtain Specifies whether to enable session persistence
 * @method void setSessionPersist(boolean $SessionPersist) Set Specifies whether to enable session persistence
 */
class ModifyApplicationProxyRuleRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Proxy ID
     */
    public $ProxyId;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Protocol. Valid values: `TCP` and `UDP`.
     */
    public $Proto;

    /**
     * @var array Port. Valid values:
`80`: Port 80
`81-90`: Port range 81-90
     */
    public $Port;

    /**
     * @var string Origin server type. Valid values:
`custom`: Specified origins
`origins`: Origin group
     */
    public $OriginType;

    /**
     * @var array Origin server information:
When `OriginType=custom`, it indicates one or more origin servers. Example:
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

When `OriginType=origins`, it indicates an origin group ID. Example:
OriginValue=["origin-xxx"]
     */
    public $OriginValue;

    /**
     * @var string Passes the client IP. When `Proto=TCP`, valid values:
`TOA`: Pass the client IP via TOA.
`PPV1`: Pass the client IP via Proxy Protocol V1.
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
When `Proto=UDP`, valid values:
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
     */
    public $ForwardClientIp;

    /**
     * @var boolean Specifies whether to enable session persistence
     */
    public $SessionPersist;

    /**
     * @param string $ZoneId Site ID
     * @param string $ProxyId Proxy ID
     * @param string $RuleId Rule ID
     * @param string $Proto Protocol. Valid values: `TCP` and `UDP`.
     * @param array $Port Port. Valid values:
`80`: Port 80
`81-90`: Port range 81-90
     * @param string $OriginType Origin server type. Valid values:
`custom`: Specified origins
`origins`: Origin group
     * @param array $OriginValue Origin server information:
When `OriginType=custom`, it indicates one or more origin servers. Example:
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

When `OriginType=origins`, it indicates an origin group ID. Example:
OriginValue=["origin-xxx"]
     * @param string $ForwardClientIp Passes the client IP. When `Proto=TCP`, valid values:
`TOA`: Pass the client IP via TOA.
`PPV1`: Pass the client IP via Proxy Protocol V1.
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
When `Proto=UDP`, valid values:
`PPV2`: Pass the client IP via Proxy Protocol V2.
`OFF`: Do not pass the client IP.
     * @param boolean $SessionPersist Specifies whether to enable session persistence
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }
    }
}
