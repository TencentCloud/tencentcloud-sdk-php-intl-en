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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ignore query string parameters for DNS data
 *
 * @method string getName() Obtain Parameter name. Valid values:
`zone`: Site name
`host`: Domain name
`type`: DNS resolution type
`code`: DNS response code
`area`: Region of the resolution server
 * @method void setName(string $Name) Set Parameter name. Valid values:
`zone`: Site name
`host`: Domain name
`type`: DNS resolution type
`code`: DNS response code
`area`: Region of the resolution server
 * @method string getValue() Obtain Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
 * @method void setValue(string $Value) Set Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
 * @method array getValues() Obtain Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
 * @method void setValues(array $Values) Set Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
 */
class DnsDataFilter extends AbstractModel
{
    /**
     * @var string Parameter name. Valid values:
`zone`: Site name
`host`: Domain name
`type`: DNS resolution type
`code`: DNS response code
`area`: Region of the resolution server
     */
    public $Name;

    /**
     * @var string Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
     */
    public $Value;

    /**
     * @var array Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
     */
    public $Values;

    /**
     * @param string $Name Parameter name. Valid values:
`zone`: Site name
`host`: Domain name
`type`: DNS resolution type
`code`: DNS response code
`area`: Region of the resolution server
     * @param string $Value Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
     * @param array $Values Parameter value
When `Name=area`, valid values:
`Asia`
`Europe`
`Africa`
`Oceania`
`Americas`

When `Name=code`, valid values:
`NoError`: Successful response.
`NXDomain`: Non-existent domain in the request. It is only valid when the response is from the authoritative name server.
`NotImp`: Request type not supported.
`Refused`: The name server refuses to perform the requested operation for policy reasons.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
