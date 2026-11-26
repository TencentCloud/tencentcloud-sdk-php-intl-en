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
 * Supports the standard debug struct
 *
 * @method string getSwitch() Obtain Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method array getAllowClientIPList() Obtain Allowed client sources. Supports filling in IPv4 and IPv6 IPs or IP ranges. 0.0.0.0/0 indicates that all IPv4 clients are allowed for debugging, and ::/0 indicates that all IPv6 clients are allowed for debugging.
 * @method void setAllowClientIPList(array $AllowClientIPList) Set Allowed client sources. Supports filling in IPv4 and IPv6 IPs or IP ranges. 0.0.0.0/0 indicates that all IPv4 clients are allowed for debugging, and ::/0 indicates that all IPv6 clients are allowed for debugging.
 * @method string getExpireTime() Obtain Debug feature expiration time. If the set time is exceeded, the feature becomes invalid.
 * @method void setExpireTime(string $ExpireTime) Set Debug feature expiration time. If the set time is exceeded, the feature becomes invalid.
 */
class StandardDebug extends AbstractModel
{
    /**
     * @var string Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var array Allowed client sources. Supports filling in IPv4 and IPv6 IPs or IP ranges. 0.0.0.0/0 indicates that all IPv4 clients are allowed for debugging, and ::/0 indicates that all IPv6 clients are allowed for debugging.
     */
    public $AllowClientIPList;

    /**
     * @var string Debug feature expiration time. If the set time is exceeded, the feature becomes invalid.
     */
    public $ExpireTime;

    /**
     * @param string $Switch Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param array $AllowClientIPList Allowed client sources. Supports filling in IPv4 and IPv6 IPs or IP ranges. 0.0.0.0/0 indicates that all IPv4 clients are allowed for debugging, and ::/0 indicates that all IPv6 clients are allowed for debugging.
     * @param string $ExpireTime Debug feature expiration time. If the set time is exceeded, the feature becomes invalid.
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
