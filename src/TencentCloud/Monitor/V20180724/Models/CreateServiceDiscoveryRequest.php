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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceDiscovery request structure.
 *
 * @method string getInstanceId() Obtain Prometheus instance ID
 * @method void setInstanceId(string $InstanceId) Set Prometheus instance ID
 * @method string getKubeClusterId() Obtain <li>TKE: ID of the integrated TKE cluster</li>
 * @method void setKubeClusterId(string $KubeClusterId) Set <li>TKE: ID of the integrated TKE cluster</li>
 * @method integer getKubeType() Obtain Kubernetes cluster type:
<li> 1 = TKE </li>
 * @method void setKubeType(integer $KubeType) Set Kubernetes cluster type:
<li> 1 = TKE </li>
 * @method integer getType() Obtain Scrape configuration type. Valid values:
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
 * @method void setType(integer $Type) Set Scrape configuration type. Valid values:
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
 * @method string getYaml() Obtain Scrape configuration information
 * @method void setYaml(string $Yaml) Set Scrape configuration information
 */
class CreateServiceDiscoveryRequest extends AbstractModel
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
     * @var integer Scrape configuration type. Valid values:
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
     */
    public $Type;

    /**
     * @var string Scrape configuration information
     */
    public $Yaml;

    /**
     * @param string $InstanceId Prometheus instance ID
     * @param string $KubeClusterId <li>TKE: ID of the integrated TKE cluster</li>
     * @param integer $KubeType Kubernetes cluster type:
<li> 1 = TKE </li>
     * @param integer $Type Scrape configuration type. Valid values:
<li> 1 = ServiceMonitor</li>
<li> 2 = PodMonitor</li>
<li> 3 = JobMonitor</li>
     * @param string $Yaml Scrape configuration information
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }
    }
}
