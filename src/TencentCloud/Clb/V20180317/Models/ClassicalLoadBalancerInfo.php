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
 * CLB information
 *
 * @method string getInstanceId() Obtain Real server ID
 * @method void setInstanceId(string $InstanceId) Set Real server ID
 * @method array getLoadBalancerIds() Obtain List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClassicalLoadBalancerInfo extends AbstractModel
{
    /**
     * @var string Real server ID
     */
    public $InstanceId;

    /**
     * @var array List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancerIds;

    /**
     * @param string $InstanceId Real server ID
     * @param array $LoadBalancerIds List of CLB instance IDs
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
