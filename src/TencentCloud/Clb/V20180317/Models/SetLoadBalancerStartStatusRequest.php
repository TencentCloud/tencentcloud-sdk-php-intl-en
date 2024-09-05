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
 * SetLoadBalancerStartStatus request structure.
 *
 * @method string getOperationType() Obtain Operation type. Start: Start the instance; Stop: Stop the instance.
 * @method void setOperationType(string $OperationType) Set Operation type. Start: Start the instance; Stop: Stop the instance.
 * @method string getLoadBalancerId() Obtain CLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID.
 * @method array getListenerIds() Obtain Listener ID. If this field is empty, it indicates operating the CLB instance; if not empty, it indicates operating the listener.
 * @method void setListenerIds(array $ListenerIds) Set Listener ID. If this field is empty, it indicates operating the CLB instance; if not empty, it indicates operating the listener.
 */
class SetLoadBalancerStartStatusRequest extends AbstractModel
{
    /**
     * @var string Operation type. Start: Start the instance; Stop: Stop the instance.
     */
    public $OperationType;

    /**
     * @var string CLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var array Listener ID. If this field is empty, it indicates operating the CLB instance; if not empty, it indicates operating the listener.
     */
    public $ListenerIds;

    /**
     * @param string $OperationType Operation type. Start: Start the instance; Stop: Stop the instance.
     * @param string $LoadBalancerId CLB instance ID.
     * @param array $ListenerIds Listener ID. If this field is empty, it indicates operating the CLB instance; if not empty, it indicates operating the listener.
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }
    }
}
