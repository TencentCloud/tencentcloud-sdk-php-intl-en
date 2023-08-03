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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Location information of the client IP carried in origin-pull. It is formatted as a two-letter ISO-3166-1 country/region code.
 *
 * @method string getSwitch() Obtain Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method string getHeaderName() Obtain Name of the request header that contains the client IP region. It is valid when `Switch=on`. 
The default value `EO-Client-IPCountry` is used when it is not specified.
 * @method void setHeaderName(string $HeaderName) Set Name of the request header that contains the client IP region. It is valid when `Switch=on`. 
The default value `EO-Client-IPCountry` is used when it is not specified.
 */
class ClientIpCountry extends AbstractModel
{
    /**
     * @var string Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var string Name of the request header that contains the client IP region. It is valid when `Switch=on`. 
The default value `EO-Client-IPCountry` is used when it is not specified.
     */
    public $HeaderName;

    /**
     * @param string $Switch Whether to enable configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param string $HeaderName Name of the request header that contains the client IP region. It is valid when `Switch=on`. 
The default value `EO-Client-IPCountry` is used when it is not specified.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}
