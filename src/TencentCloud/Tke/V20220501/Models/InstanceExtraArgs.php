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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node custom parameters
 *
 * @method array getKubelet() Obtain kubelet custom parameters, whose format is ["k1=v1", "k1=v2"], for example ["root-dir=/var/lib/kubelet","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setKubelet(array $Kubelet) Set kubelet custom parameters, whose format is ["k1=v1", "k1=v2"], for example ["root-dir=/var/lib/kubelet","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class InstanceExtraArgs extends AbstractModel
{
    /**
     * @var array kubelet custom parameters, whose format is ["k1=v1", "k1=v2"], for example ["root-dir=/var/lib/kubelet","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Kubelet;

    /**
     * @param array $Kubelet kubelet custom parameters, whose format is ["k1=v1", "k1=v2"], for example ["root-dir=/var/lib/kubelet","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("Kubelet",$param) and $param["Kubelet"] !== null) {
            $this->Kubelet = $param["Kubelet"];
        }
    }
}
