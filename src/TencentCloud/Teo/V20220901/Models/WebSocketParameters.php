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
 * @method string getSwitch() Obtain Whether to enable websocket connection timeout. values:.
<Li>On: use timeout as the websocket timeout;</li>.
<Li>Off: the platform still supports websocket connections, using the system default timeout of 15 seconds.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable websocket connection timeout. values:.
<Li>On: use timeout as the websocket timeout;</li>.
<Li>Off: the platform still supports websocket connections, using the system default timeout of 15 seconds.</li>.
 * @method integer getTimeout() Obtain Timeout, unit: seconds. maximum timeout is 120 seconds.<br>note: this field is required when switch is on; otherwise, this field will not take effect.
 * @method void setTimeout(integer $Timeout) Set Timeout, unit: seconds. maximum timeout is 120 seconds.<br>note: this field is required when switch is on; otherwise, this field will not take effect.
 */
class WebSocketParameters extends AbstractModel
{
    /**
     * @var string Whether to enable websocket connection timeout. values:.
<Li>On: use timeout as the websocket timeout;</li>.
<Li>Off: the platform still supports websocket connections, using the system default timeout of 15 seconds.</li>.
     */
    public $Switch;

    /**
     * @var integer Timeout, unit: seconds. maximum timeout is 120 seconds.<br>note: this field is required when switch is on; otherwise, this field will not take effect.
     */
    public $Timeout;

    /**
     * @param string $Switch Whether to enable websocket connection timeout. values:.
<Li>On: use timeout as the websocket timeout;</li>.
<Li>Off: the platform still supports websocket connections, using the system default timeout of 15 seconds.</li>.
     * @param integer $Timeout Timeout, unit: seconds. maximum timeout is 120 seconds.<br>note: this field is required when switch is on; otherwise, this field will not take effect.
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
