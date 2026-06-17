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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargetHealth request structure.
 *
 * @method array getLoadBalancerIds() Obtain <p>List of Cloud Load Balancer instance IDs to query. The array size supports up to 30.</p>
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set <p>List of Cloud Load Balancer instance IDs to query. The array size supports up to 30.</p>
 * @method array getListenerIds() Obtain <p>Listener ID list to query.</p>
 * @method void setListenerIds(array $ListenerIds) Set <p>Listener ID list to query.</p>
 * @method array getLocationIds() Obtain <p>List of forwarding rule IDs to query.</p>
 * @method void setLocationIds(array $LocationIds) Set <p>List of forwarding rule IDs to query.</p>
 */
class DescribeTargetHealthRequest extends AbstractModel
{
    /**
     * @var array <p>List of Cloud Load Balancer instance IDs to query. The array size supports up to 30.</p>
     */
    public $LoadBalancerIds;

    /**
     * @var array <p>Listener ID list to query.</p>
     */
    public $ListenerIds;

    /**
     * @var array <p>List of forwarding rule IDs to query.</p>
     */
    public $LocationIds;

    /**
     * @param array $LoadBalancerIds <p>List of Cloud Load Balancer instance IDs to query. The array size supports up to 30.</p>
     * @param array $ListenerIds <p>Listener ID list to query.</p>
     * @param array $LocationIds <p>List of forwarding rule IDs to query.</p>
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("LocationIds",$param) and $param["LocationIds"] !== null) {
            $this->LocationIds = $param["LocationIds"];
        }
    }
}
