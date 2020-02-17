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
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method array getListenerIds() Obtain Array of IDs of the CLB listeners to be queried
 * @method void setListenerIds(array $ListenerIds) Set Array of IDs of the CLB listeners to be queried
 * @method string getProtocol() Obtain Type of the listener protocol to be queried. Value range: TCP, UDP, HTTP, HTTPS, TCP_SSL
 * @method void setProtocol(string $Protocol) Set Type of the listener protocol to be queried. Value range: TCP, UDP, HTTP, HTTPS, TCP_SSL
 * @method integer getPort() Obtain Port of the listener to be queried
 * @method void setPort(integer $Port) Set Port of the listener to be queried
 */

/**
 *DescribeListeners request structure.
 */
class DescribeListenersRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array Array of IDs of the CLB listeners to be queried
     */
    public $ListenerIds;

    /**
     * @var string Type of the listener protocol to be queried. Value range: TCP, UDP, HTTP, HTTPS, TCP_SSL
     */
    public $Protocol;

    /**
     * @var integer Port of the listener to be queried
     */
    public $Port;
    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $ListenerIds Array of IDs of the CLB listeners to be queried
     * @param string $Protocol Type of the listener protocol to be queried. Value range: TCP, UDP, HTTP, HTTPS, TCP_SSL
     * @param integer $Port Port of the listener to be queried
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
