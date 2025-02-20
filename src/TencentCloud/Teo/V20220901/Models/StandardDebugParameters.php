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
 * Debug structure.
 *
 * @method string getSwitch() Obtain Whether to enable standard debugging. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable standard debugging. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method array getAllowClientIPList() Obtain The client ip to allow. it can be an ipv4/ipv6 address or a cidr block. 0.0.0.0/0 means to allow all ipv4 clients for debugging; ::/0 means to allow all ipv6 clients for debugging; 127.0.0.1 is not allowed. <br>note: this field is required when `switch=on` and the number of entries should be 1-100. when `switch=off`, this field is not required and any value specified will not take effect.
 * @method void setAllowClientIPList(array $AllowClientIPList) Set The client ip to allow. it can be an ipv4/ipv6 address or a cidr block. 0.0.0.0/0 means to allow all ipv4 clients for debugging; ::/0 means to allow all ipv6 clients for debugging; 127.0.0.1 is not allowed. <br>note: this field is required when `switch=on` and the number of entries should be 1-100. when `switch=off`, this field is not required and any value specified will not take effect.
 * @method string getExpires() Obtain Debug feature expiration time. the feature will be disabled after the set time. <br>note: this field is required when `switch=on`. when `switch=off`, this field is not required and any value specified will not take effect.
 * @method void setExpires(string $Expires) Set Debug feature expiration time. the feature will be disabled after the set time. <br>note: this field is required when `switch=on`. when `switch=off`, this field is not required and any value specified will not take effect.
 */
class StandardDebugParameters extends AbstractModel
{
    /**
     * @var string Whether to enable standard debugging. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var array The client ip to allow. it can be an ipv4/ipv6 address or a cidr block. 0.0.0.0/0 means to allow all ipv4 clients for debugging; ::/0 means to allow all ipv6 clients for debugging; 127.0.0.1 is not allowed. <br>note: this field is required when `switch=on` and the number of entries should be 1-100. when `switch=off`, this field is not required and any value specified will not take effect.
     */
    public $AllowClientIPList;

    /**
     * @var string Debug feature expiration time. the feature will be disabled after the set time. <br>note: this field is required when `switch=on`. when `switch=off`, this field is not required and any value specified will not take effect.
     */
    public $Expires;

    /**
     * @param string $Switch Whether to enable standard debugging. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param array $AllowClientIPList The client ip to allow. it can be an ipv4/ipv6 address or a cidr block. 0.0.0.0/0 means to allow all ipv4 clients for debugging; ::/0 means to allow all ipv6 clients for debugging; 127.0.0.1 is not allowed. <br>note: this field is required when `switch=on` and the number of entries should be 1-100. when `switch=off`, this field is not required and any value specified will not take effect.
     * @param string $Expires Debug feature expiration time. the feature will be disabled after the set time. <br>note: this field is required when `switch=on`. when `switch=off`, this field is not required and any value specified will not take effect.
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

        if (array_key_exists("AllowClientIPList",$param) and $param["AllowClientIPList"] !== null) {
            $this->AllowClientIPList = $param["AllowClientIPList"];
        }

        if (array_key_exists("Expires",$param) and $param["Expires"] !== null) {
            $this->Expires = $param["Expires"];
        }
    }
}
