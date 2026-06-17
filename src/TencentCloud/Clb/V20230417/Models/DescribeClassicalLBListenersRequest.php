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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClassicalLBListeners request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method array getListenerIds() Obtain CLB listener ID list.
 * @method void setListenerIds(array $ListenerIds) Set CLB listener ID list.
 * @method string getProtocol() Obtain Protocols for Cloud Load Balancer listeners: 'TCP', 'UDP', 'HTTP', 'HTTPS'.
 * @method void setProtocol(string $Protocol) Set Protocols for Cloud Load Balancer listeners: 'TCP', 'UDP', 'HTTP', 'HTTPS'.
 * @method integer getListenerPort() Obtain CLB listening port, range [1-65535].
 * @method void setListenerPort(integer $ListenerPort) Set CLB listening port, range [1-65535].
 * @method integer getStatus() Obtain Listener status. 0: Creating; 1: Running.
 * @method void setStatus(integer $Status) Set Listener status. 0: Creating; 1: Running.
 */
class DescribeClassicalLBListenersRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var array CLB listener ID list.
     */
    public $ListenerIds;

    /**
     * @var string Protocols for Cloud Load Balancer listeners: 'TCP', 'UDP', 'HTTP', 'HTTPS'.
     */
    public $Protocol;

    /**
     * @var integer CLB listening port, range [1-65535].
     */
    public $ListenerPort;

    /**
     * @var integer Listener status. 0: Creating; 1: Running.
     */
    public $Status;

    /**
     * @param string $LoadBalancerId CLB instance ID.
     * @param array $ListenerIds CLB listener ID list.
     * @param string $Protocol Protocols for Cloud Load Balancer listeners: 'TCP', 'UDP', 'HTTP', 'HTTPS'.
     * @param integer $ListenerPort CLB listening port, range [1-65535].
     * @param integer $Status Listener status. 0: Creating; 1: Running.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
