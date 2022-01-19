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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application CLB IDs
 *
 * @method string getLoadBalancerId() Obtain ID of the CLB
 * @method void setLoadBalancerId(string $LoadBalancerId) Set ID of the CLB
 * @method string getListenerId() Obtain Application CLB listener ID
 * @method void setListenerId(string $ListenerId) Set Application CLB listener ID
 * @method string getLocationId() Obtain ID of a forwarding rule. This parameter is required for layer-7 listeners.
 * @method void setLocationId(string $LocationId) Set ID of a forwarding rule. This parameter is required for layer-7 listeners.
 */
class ForwardLoadBalancerIdentification extends AbstractModel
{
    /**
     * @var string ID of the CLB
     */
    public $LoadBalancerId;

    /**
     * @var string Application CLB listener ID
     */
    public $ListenerId;

    /**
     * @var string ID of a forwarding rule. This parameter is required for layer-7 listeners.
     */
    public $LocationId;

    /**
     * @param string $LoadBalancerId ID of the CLB
     * @param string $ListenerId Application CLB listener ID
     * @param string $LocationId ID of a forwarding rule. This parameter is required for layer-7 listeners.
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }
    }
}
