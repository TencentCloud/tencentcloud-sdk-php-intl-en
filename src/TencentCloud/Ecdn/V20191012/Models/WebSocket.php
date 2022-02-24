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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WebSocket configuration.
 *
 * @method string getSwitch() Obtain Whether to enable custom WebSocket timeout setting. When it’s `off`: WebSocket connection is supported, and the default timeout period is 15 seconds. To change the timeout period, please set it to `on`.

* WebSocket is now only available for beta users. To use it, please submit a ticket.
 * @method void setSwitch(string $Switch) Set Whether to enable custom WebSocket timeout setting. When it’s `off`: WebSocket connection is supported, and the default timeout period is 15 seconds. To change the timeout period, please set it to `on`.

* WebSocket is now only available for beta users. To use it, please submit a ticket.
 * @method integer getTimeout() Obtain Sets timeout period in seconds. Maximum value: 65
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimeout(integer $Timeout) Set Sets timeout period in seconds. Maximum value: 65
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class WebSocket extends AbstractModel
{
    /**
     * @var string Whether to enable custom WebSocket timeout setting. When it’s `off`: WebSocket connection is supported, and the default timeout period is 15 seconds. To change the timeout period, please set it to `on`.

* WebSocket is now only available for beta users. To use it, please submit a ticket.
     */
    public $Switch;

    /**
     * @var integer Sets timeout period in seconds. Maximum value: 65
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Timeout;

    /**
     * @param string $Switch Whether to enable custom WebSocket timeout setting. When it’s `off`: WebSocket connection is supported, and the default timeout period is 15 seconds. To change the timeout period, please set it to `on`.

* WebSocket is now only available for beta users. To use it, please submit a ticket.
     * @param integer $Timeout Sets timeout period in seconds. Maximum value: 65
Note: This field may return `null`, indicating that no valid values can be obtained.
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
