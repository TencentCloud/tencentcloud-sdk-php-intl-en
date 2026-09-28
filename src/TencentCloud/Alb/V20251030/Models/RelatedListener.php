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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Listener information associated
 *
 * @method string getListenerId() Obtain Listener ID, format: lst- followed by 8 alphanumeric characters.
 * @method void setListenerId(string $ListenerId) Set Listener ID, format: lst- followed by 8 alphanumeric characters.
 * @method integer getListenerPort() Obtain Listener port.
 * @method void setListenerPort(integer $ListenerPort) Set Listener port.
 * @method string getListenerProtocol() Obtain Listener protocol.
 * @method void setListenerProtocol(string $ListenerProtocol) Set Listener protocol.
 * @method string getLoadBalancerId() Obtain CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 */
class RelatedListener extends AbstractModel
{
    /**
     * @var string Listener ID, format: lst- followed by 8 alphanumeric characters.
     */
    public $ListenerId;

    /**
     * @var integer Listener port.
     */
    public $ListenerPort;

    /**
     * @var string Listener protocol.
     */
    public $ListenerProtocol;

    /**
     * @var string CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @param string $ListenerId Listener ID, format: lst- followed by 8 alphanumeric characters.
     * @param integer $ListenerPort Listener port.
     * @param string $ListenerProtocol Listener protocol.
     * @param string $LoadBalancerId CLB instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }
    }
}
