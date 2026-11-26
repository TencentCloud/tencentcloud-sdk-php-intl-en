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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Deployment configuration of a single inference service.
 *
 * @method integer getListenPort() Obtain <p>Ports monitored by the model service.</p>
 * @method void setListenPort(integer $ListenPort) Set <p>Ports monitored by the model service.</p>
 * @method array getRequestPaths() Obtain <p>Request path list of the inference service.</p>
 * @method void setRequestPaths(array $RequestPaths) Set <p>Request path list of the inference service.</p>
 * @method array getContainers() Obtain <p>Container configuration for the inference service.</p>
 * @method void setContainers(array $Containers) Set <p>Container configuration for the inference service.</p>
 * @method InferenceResourceConfig getResourceConfig() Obtain <p>Resource configuration of the inference service.</p>
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) Set <p>Resource configuration of the inference service.</p>
 * @method InferenceAffinityConfig getAffinityConfig() Obtain <p>Inference service affinity configuration.</p>
 * @method void setAffinityConfig(InferenceAffinityConfig $AffinityConfig) Set <p>Inference service affinity configuration.</p>
 */
class InferenceServiceConfig extends AbstractModel
{
    /**
     * @var integer <p>Ports monitored by the model service.</p>
     */
    public $ListenPort;

    /**
     * @var array <p>Request path list of the inference service.</p>
     */
    public $RequestPaths;

    /**
     * @var array <p>Container configuration for the inference service.</p>
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig <p>Resource configuration of the inference service.</p>
     */
    public $ResourceConfig;

    /**
     * @var InferenceAffinityConfig <p>Inference service affinity configuration.</p>
     */
    public $AffinityConfig;

    /**
     * @param integer $ListenPort <p>Ports monitored by the model service.</p>
     * @param array $RequestPaths <p>Request path list of the inference service.</p>
     * @param array $Containers <p>Container configuration for the inference service.</p>
     * @param InferenceResourceConfig $ResourceConfig <p>Resource configuration of the inference service.</p>
     * @param InferenceAffinityConfig $AffinityConfig <p>Inference service affinity configuration.</p>
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
        if (array_key_exists("ListenPort",$param) and $param["ListenPort"] !== null) {
            $this->ListenPort = $param["ListenPort"];
        }

        if (array_key_exists("RequestPaths",$param) and $param["RequestPaths"] !== null) {
            $this->RequestPaths = $param["RequestPaths"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new InferenceContainerConfig();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new InferenceResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("AffinityConfig",$param) and $param["AffinityConfig"] !== null) {
            $this->AffinityConfig = new InferenceAffinityConfig();
            $this->AffinityConfig->deserialize($param["AffinityConfig"]);
        }
    }
}
