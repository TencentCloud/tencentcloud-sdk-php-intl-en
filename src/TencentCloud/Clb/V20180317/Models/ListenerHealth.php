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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取Listener ID
 * @method void setListenerId(string $ListenerId) 设置Listener ID
 * @method string getListenerName() 获取Listener name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setListenerName(string $ListenerName) 设置Listener name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() 获取Listener protocol
 * @method void setProtocol(string $Protocol) 设置Listener protocol
 * @method integer getPort() 获取Listener port
 * @method void setPort(integer $Port) 设置Listener port
 * @method array getRules() 获取List of forwarding rules of the listener
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) 设置List of forwarding rules of the listener
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Health check information of the listener
 */
class ListenerHealth extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Listener name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ListenerName;

    /**
     * @var string Listener protocol
     */
    public $Protocol;

    /**
     * @var integer Listener port
     */
    public $Port;

    /**
     * @var array List of forwarding rules of the listener
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;
    /**
     * @param string $ListenerId Listener ID
     * @param string $ListenerName Listener name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Listener protocol
     * @param integer $Port Listener port
     * @param array $Rules List of forwarding rules of the listener
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleHealth();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
