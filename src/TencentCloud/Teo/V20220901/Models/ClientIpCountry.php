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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Carry the regional information of the client IP during origin-pull. The value format is an ISO-3166-1 two-letter code.
 *
 * @method string getSwitch() Obtain Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method string getHeaderName() Obtain Request header name for storing the region of the client IP. Valid when Switch is on.
If it is empty, use the default value: EO-Client-IPCountry.
 * @method void setHeaderName(string $HeaderName) Set Request header name for storing the region of the client IP. Valid when Switch is on.
If it is empty, use the default value: EO-Client-IPCountry.
 */
class ClientIpCountry extends AbstractModel
{
    /**
     * @var string Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var string Request header name for storing the region of the client IP. Valid when Switch is on.
If it is empty, use the default value: EO-Client-IPCountry.
     */
    public $HeaderName;

    /**
     * @param string $Switch Configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param string $HeaderName Request header name for storing the region of the client IP. Valid when Switch is on.
If it is empty, use the default value: EO-Client-IPCountry.
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
