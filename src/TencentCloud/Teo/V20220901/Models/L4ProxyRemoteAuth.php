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
 * L4 remote authentication information.
 *
 * @method string getSwitch() Obtain Whether to enable L4 remote authentication. Valid values:
<li>on: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Whether to enable L4 remote authentication. Valid values:
<li>on: Enable;</li>
<li>off: Disable.</li>
 * @method string getAddress() Obtain Remote authentication service address, in the format of domain/ip:port, such as example.auth.com:8888.

 * @method void setAddress(string $Address) Set Remote authentication service address, in the format of domain/ip:port, such as example.auth.com:8888.

 * @method string getServerFaultyBehavior() Obtain Default origin-pull behavior based on L4 forwarding rules after the remote authentication service is disabled. Valid values:
<li>reject: Block and deny access;</li>
<li>allow: Allow access.</li>
 * @method void setServerFaultyBehavior(string $ServerFaultyBehavior) Set Default origin-pull behavior based on L4 forwarding rules after the remote authentication service is disabled. Valid values:
<li>reject: Block and deny access;</li>
<li>allow: Allow access.</li>
 */
class L4ProxyRemoteAuth extends AbstractModel
{
    /**
     * @var string Whether to enable L4 remote authentication. Valid values:
<li>on: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var string Remote authentication service address, in the format of domain/ip:port, such as example.auth.com:8888.

     */
    public $Address;

    /**
     * @var string Default origin-pull behavior based on L4 forwarding rules after the remote authentication service is disabled. Valid values:
<li>reject: Block and deny access;</li>
<li>allow: Allow access.</li>
     */
    public $ServerFaultyBehavior;

    /**
     * @param string $Switch Whether to enable L4 remote authentication. Valid values:
<li>on: Enable;</li>
<li>off: Disable.</li>
     * @param string $Address Remote authentication service address, in the format of domain/ip:port, such as example.auth.com:8888.

     * @param string $ServerFaultyBehavior Default origin-pull behavior based on L4 forwarding rules after the remote authentication service is disabled. Valid values:
<li>reject: Block and deny access;</li>
<li>allow: Allow access.</li>
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

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ServerFaultyBehavior",$param) and $param["ServerFaultyBehavior"] !== null) {
            $this->ServerFaultyBehavior = $param["ServerFaultyBehavior"];
        }
    }
}
