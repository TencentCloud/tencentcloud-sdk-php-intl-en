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
 * MigrateClassicalLoadBalancers request structure.
 *
 * @method array getLoadBalancerIds() Obtain Array of classic CLB instance IDs
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set Array of classic CLB instance IDs
 * @method ExclusiveCluster getExclusiveCluster() Obtain Exclusive cluster information
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) Set Exclusive cluster information
 */
class MigrateClassicalLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array Array of classic CLB instance IDs
     */
    public $LoadBalancerIds;

    /**
     * @var ExclusiveCluster Exclusive cluster information
     */
    public $ExclusiveCluster;

    /**
     * @param array $LoadBalancerIds Array of classic CLB instance IDs
     * @param ExclusiveCluster $ExclusiveCluster Exclusive cluster information
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

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }
    }
}
