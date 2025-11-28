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
 * @method array getLoadBalancerIds() Obtain List of IDs of CLB instances to be queried
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set List of IDs of CLB instances to be queried
 * @method array getListenerIds() Obtain Specifies the listener ID list to query.
 * @method void setListenerIds(array $ListenerIds) Set Specifies the listener ID list to query.
 * @method array getLocationIds() Obtain Specifies the list of rule ids to be queried.
 * @method void setLocationIds(array $LocationIds) Set Specifies the list of rule ids to be queried.
 */
class DescribeTargetHealthRequest extends AbstractModel
{
    /**
     * @var array List of IDs of CLB instances to be queried
     */
    public $LoadBalancerIds;

    /**
     * @var array Specifies the listener ID list to query.
     */
    public $ListenerIds;

    /**
     * @var array Specifies the list of rule ids to be queried.
     */
    public $LocationIds;

    /**
     * @param array $LoadBalancerIds List of IDs of CLB instances to be queried
     * @param array $ListenerIds Specifies the listener ID list to query.
     * @param array $LocationIds Specifies the list of rule ids to be queried.
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
