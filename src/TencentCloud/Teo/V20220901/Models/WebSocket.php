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
 * WebSocket configuration
 *
 * @method string getSwitch() Obtain WebSocket timeout configuration switch. Valid values:
<li>on: Use Timeout as the WebSocket timeout;</li>
<li>off: The platform still supports WebSocket connections, using the system default 15 seconds as the timeout period.</li>
 * @method void setSwitch(string $Switch) Set WebSocket timeout configuration switch. Valid values:
<li>on: Use Timeout as the WebSocket timeout;</li>
<li>off: The platform still supports WebSocket connections, using the system default 15 seconds as the timeout period.</li>
 * @method integer getTimeout() Obtain Timeout period in seconds. Maximum timeout time: 120 seconds.
 * @method void setTimeout(integer $Timeout) Set Timeout period in seconds. Maximum timeout time: 120 seconds.
 */
class WebSocket extends AbstractModel
{
    /**
     * @var string WebSocket timeout configuration switch. Valid values:
<li>on: Use Timeout as the WebSocket timeout;</li>
<li>off: The platform still supports WebSocket connections, using the system default 15 seconds as the timeout period.</li>
     */
    public $Switch;

    /**
     * @var integer Timeout period in seconds. Maximum timeout time: 120 seconds.
     */
    public $Timeout;

    /**
     * @param string $Switch WebSocket timeout configuration switch. Valid values:
<li>on: Use Timeout as the WebSocket timeout;</li>
<li>off: The platform still supports WebSocket connections, using the system default 15 seconds as the timeout period.</li>
     * @param integer $Timeout Timeout period in seconds. Maximum timeout time: 120 seconds.
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
