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
 * @method string getListenerName() 获取Listener name
 * @method void setListenerName(string $ListenerName) 设置Listener name
 * @method integer getPort() 获取Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method void setPort(integer $Port) 设置Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method string getProxyId() 获取Connection ID
 * @method void setProxyId(string $ProxyId) 设置Connection ID
 */

/**
 *CreateHTTPListener request structure.
 */
class CreateHTTPListenerRequest extends AbstractModel
{
    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var integer Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
     */
    public $Port;

    /**
     * @var string Connection ID
     */
    public $ProxyId;
    /**
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
     * @param string $ProxyId Connection ID
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
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }
    }
}
