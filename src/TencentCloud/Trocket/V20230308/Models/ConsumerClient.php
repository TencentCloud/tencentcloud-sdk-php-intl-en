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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consumer client
 *
 * @method string getClientId() Obtain Client ID
 * @method void setClientId(string $ClientId) Set Client ID
 * @method string getClientAddr() Obtain Client address.
 * @method void setClientAddr(string $ClientAddr) Set Client address.
 * @method string getLanguage() Obtain Client SDK language
 * @method void setLanguage(string $Language) Set Client SDK language
 * @method string getVersion() Obtain Client SDK version
 * @method void setVersion(string $Version) Set Client SDK version
 * @method integer getConsumerLag() Obtain Client consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerLag(integer $ConsumerLag) Set Client consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChannelProtocol() Obtain Consumer client type. valid values:.

-Specifies the grpc protocol.
-remoting protocol.
-http protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChannelProtocol(string $ChannelProtocol) Set Consumer client type. valid values:.

-Specifies the grpc protocol.
-remoting protocol.
-http protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConsumerClient extends AbstractModel
{
    /**
     * @var string Client ID
     */
    public $ClientId;

    /**
     * @var string Client address.
     */
    public $ClientAddr;

    /**
     * @var string Client SDK language
     */
    public $Language;

    /**
     * @var string Client SDK version
     */
    public $Version;

    /**
     * @var integer Client consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerLag;

    /**
     * @var string Consumer client type. valid values:.

-Specifies the grpc protocol.
-remoting protocol.
-http protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChannelProtocol;

    /**
     * @param string $ClientId Client ID
     * @param string $ClientAddr Client address.
     * @param string $Language Client SDK language
     * @param string $Version Client SDK version
     * @param integer $ConsumerLag Client consumption heap

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChannelProtocol Consumer client type. valid values:.

-Specifies the grpc protocol.
-remoting protocol.
-http protocol.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("ChannelProtocol",$param) and $param["ChannelProtocol"] !== null) {
            $this->ChannelProtocol = $param["ChannelProtocol"];
        }
    }
}
