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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取Listener ID
 * @method void setListenerId(string $ListenerId) 设置Listener ID
 * @method string getListenerName() 获取Listener name
 * @method void setListenerName(string $ListenerName) 设置Listener name
 * @method integer getPort() 获取Listener port
 * @method void setPort(integer $Port) 设置Listener port
 * @method integer getCreateTime() 获取Listener creation time; using UNIX timestamp.
 * @method void setCreateTime(integer $CreateTime) 设置Listener creation time; using UNIX timestamp.
 * @method string getProtocol() 获取Listener protocol
 * @method void setProtocol(string $Protocol) 设置Listener protocol
 * @method integer getListenerStatus() 获取Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
 * @method void setListenerStatus(integer $ListenerStatus) 设置Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
 */

/**
 *HTTP listener information
 */
class HTTPListener extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var integer Listener port
     */
    public $Port;

    /**
     * @var integer Listener creation time; using UNIX timestamp.
     */
    public $CreateTime;

    /**
     * @var string Listener protocol
     */
    public $Protocol;

    /**
     * @var integer Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
     */
    public $ListenerStatus;
    /**
     * @param string $ListenerId Listener ID
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port
     * @param integer $CreateTime Listener creation time; using UNIX timestamp.
     * @param string $Protocol Listener protocol
     * @param integer $ListenerStatus Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }
    }
}
