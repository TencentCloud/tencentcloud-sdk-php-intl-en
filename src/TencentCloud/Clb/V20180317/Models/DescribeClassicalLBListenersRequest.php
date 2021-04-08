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
 * DescribeClassicalLBListeners request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method array getListenerIds() Obtain List of CLB listener IDs
 * @method void setListenerIds(array $ListenerIds) Set List of CLB listener IDs
 * @method string getProtocol() Obtain CLB listening protocol. Valid values: TCP, UDP, HTTP, and HTTPS.
 * @method void setProtocol(string $Protocol) Set CLB listening protocol. Valid values: TCP, UDP, HTTP, and HTTPS.
 * @method integer getListenerPort() Obtain CLB listening port. Value range: 1 - 65535.
 * @method void setListenerPort(integer $ListenerPort) Set CLB listening port. Value range: 1 - 65535.
 * @method integer getStatus() Obtain Listener status. Valid values: 0 (creating) and 1 (running).
 * @method void setStatus(integer $Status) Set Listener status. Valid values: 0 (creating) and 1 (running).
 */
class DescribeClassicalLBListenersRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array List of CLB listener IDs
     */
    public $ListenerIds;

    /**
     * @var string CLB listening protocol. Valid values: TCP, UDP, HTTP, and HTTPS.
     */
    public $Protocol;

    /**
     * @var integer CLB listening port. Value range: 1 - 65535.
     */
    public $ListenerPort;

    /**
     * @var integer Listener status. Valid values: 0 (creating) and 1 (running).
     */
    public $Status;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $ListenerIds List of CLB listener IDs
     * @param string $Protocol CLB listening protocol. Valid values: TCP, UDP, HTTP, and HTTPS.
     * @param integer $ListenerPort CLB listening port. Value range: 1 - 65535.
     * @param integer $Status Listener status. Valid values: 0 (creating) and 1 (running).
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
