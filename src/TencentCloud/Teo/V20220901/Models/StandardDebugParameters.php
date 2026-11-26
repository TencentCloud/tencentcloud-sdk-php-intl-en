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
 * Debug struct.
 *
 * @method string getSwitch() Obtain Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method array getAllowClientIPList() Obtain Allowed client source. Supports filling in IPv4 and IPv6 IP ranges. 0.0.0.0/0 indicates permission for all IPv4 clients to debug; ::/0 indicates permission for all IPv6 clients to debug; 127.0.0.1 cannot be filled in.<br>Note: When the Switch field is on, this field is required, and the number of writes is 1–100; when Switch is off, no need to specify this field, and if filled in, it does not take effect.
 * @method void setAllowClientIPList(array $AllowClientIPList) Set Allowed client source. Supports filling in IPv4 and IPv6 IP ranges. 0.0.0.0/0 indicates permission for all IPv4 clients to debug; ::/0 indicates permission for all IPv6 clients to debug; 127.0.0.1 cannot be filled in.<br>Note: When the Switch field is on, this field is required, and the number of writes is 1–100; when Switch is off, no need to specify this field, and if filled in, it does not take effect.
 * @method string getExpires() Obtain Expiration time of the Debug feature. If the set time is exceeded, the feature becomes invalid.<br>Note: When Switch is on, this field is required; when Switch is off, this field is not required. If filled in, it does not take effect.
 * @method void setExpires(string $Expires) Set Expiration time of the Debug feature. If the set time is exceeded, the feature becomes invalid.<br>Note: When Switch is on, this field is required; when Switch is off, this field is not required. If filled in, it does not take effect.
 */
class StandardDebugParameters extends AbstractModel
{
    /**
     * @var string Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var array Allowed client source. Supports filling in IPv4 and IPv6 IP ranges. 0.0.0.0/0 indicates permission for all IPv4 clients to debug; ::/0 indicates permission for all IPv6 clients to debug; 127.0.0.1 cannot be filled in.<br>Note: When the Switch field is on, this field is required, and the number of writes is 1–100; when Switch is off, no need to specify this field, and if filled in, it does not take effect.
     */
    public $AllowClientIPList;

    /**
     * @var string Expiration time of the Debug feature. If the set time is exceeded, the feature becomes invalid.<br>Note: When Switch is on, this field is required; when Switch is off, this field is not required. If filled in, it does not take effect.
     */
    public $Expires;

    /**
     * @param string $Switch Debug feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param array $AllowClientIPList Allowed client source. Supports filling in IPv4 and IPv6 IP ranges. 0.0.0.0/0 indicates permission for all IPv4 clients to debug; ::/0 indicates permission for all IPv6 clients to debug; 127.0.0.1 cannot be filled in.<br>Note: When the Switch field is on, this field is required, and the number of writes is 1–100; when Switch is off, no need to specify this field, and if filled in, it does not take effect.
     * @param string $Expires Expiration time of the Debug feature. If the set time is exceeded, the feature becomes invalid.<br>Note: When Switch is on, this field is required; when Switch is off, this field is not required. If filled in, it does not take effect.
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
