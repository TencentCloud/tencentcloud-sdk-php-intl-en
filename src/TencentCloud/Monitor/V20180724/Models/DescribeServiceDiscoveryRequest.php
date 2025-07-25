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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceDiscovery request structure.
 *
 * @method string getInstanceId() Obtain Prometheus instance ID
 * @method void setInstanceId(string $InstanceId) Set Prometheus instance ID
 * @method string getKubeClusterId() Obtain <li>TKE: ID of the integrated TKE cluster</li>
 * @method void setKubeClusterId(string $KubeClusterId) Set <li>TKE: ID of the integrated TKE cluster</li>
 * @method integer getKubeType() Obtain Kubernetes cluster type:
<li> 1 = TKE </li>
 * @method void setKubeType(integer $KubeType) Set Kubernetes cluster type:
<li> 1 = TKE </li>
 */
class DescribeServiceDiscoveryRequest extends AbstractModel
{
    /**
     * @var string Prometheus instance ID
     */
    public $InstanceId;

    /**
     * @var string <li>TKE: ID of the integrated TKE cluster</li>
     */
    public $KubeClusterId;

    /**
     * @var integer Kubernetes cluster type:
<li> 1 = TKE </li>
     */
    public $KubeType;

    /**
     * @param string $InstanceId Prometheus instance ID
     * @param string $KubeClusterId <li>TKE: ID of the integrated TKE cluster</li>
     * @param integer $KubeType Kubernetes cluster type:
<li> 1 = TKE </li>
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

        if (array_key_exists("KubeClusterId",$param) and $param["KubeClusterId"] !== null) {
            $this->KubeClusterId = $param["KubeClusterId"];
        }

        if (array_key_exists("KubeType",$param) and $param["KubeType"] !== null) {
            $this->KubeType = $param["KubeType"];
        }
    }
}
