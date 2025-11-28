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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Producer client details.
 *
 * @method string getClientId() Obtain Client ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientId(string $ClientId) Set Client ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientIp() Obtain Client IP.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientIp(string $ClientIp) Set Client IP.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLanguage() Obtain Specifies the client language.
JAVA((byte) 0),
    CPP((byte) 1),
    DOTNET((byte) 2),
    PYTHON((byte) 3),
    DELPHI((byte) 4),
    ERLANG((byte) 5),
    RUBY((byte) 6),
    OTHER((byte) 7),
    HTTP((byte) 8),
    GO((byte) 9),
    PHP((byte) 10),
    OMS((byte) 11);
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLanguage(string $Language) Set Specifies the client language.
JAVA((byte) 0),
    CPP((byte) 1),
    DOTNET((byte) 2),
    PYTHON((byte) 3),
    DELPHI((byte) 4),
    ERLANG((byte) 5),
    RUBY((byte) 6),
    OTHER((byte) 7),
    HTTP((byte) 8),
    GO((byte) 9),
    PHP((byte) 10),
    OMS((byte) 11);
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Client version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Client version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLastUpdateTimestamp() Obtain Last production time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTimestamp(integer $LastUpdateTimestamp) Set Last production time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProducerInfo extends AbstractModel
{
    /**
     * @var string Client ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientId;

    /**
     * @var string Client IP.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientIp;

    /**
     * @var string Specifies the client language.
JAVA((byte) 0),
    CPP((byte) 1),
    DOTNET((byte) 2),
    PYTHON((byte) 3),
    DELPHI((byte) 4),
    ERLANG((byte) 5),
    RUBY((byte) 6),
    OTHER((byte) 7),
    HTTP((byte) 8),
    GO((byte) 9),
    PHP((byte) 10),
    OMS((byte) 11);
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Language;

    /**
     * @var string Client version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var integer Last production time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTimestamp;

    /**
     * @param string $ClientId Client ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientIp Client IP.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Language Specifies the client language.
JAVA((byte) 0),
    CPP((byte) 1),
    DOTNET((byte) 2),
    PYTHON((byte) 3),
    DELPHI((byte) 4),
    ERLANG((byte) 5),
    RUBY((byte) 6),
    OTHER((byte) 7),
    HTTP((byte) 8),
    GO((byte) 9),
    PHP((byte) 10),
    OMS((byte) 11);
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Client version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LastUpdateTimestamp Last production time.
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

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LastUpdateTimestamp",$param) and $param["LastUpdateTimestamp"] !== null) {
            $this->LastUpdateTimestamp = $param["LastUpdateTimestamp"];
        }
    }
}
