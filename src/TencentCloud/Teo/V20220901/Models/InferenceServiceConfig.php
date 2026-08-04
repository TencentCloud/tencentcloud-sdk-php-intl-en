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
 * Deployment configuration for a single inference service.
 *
 * @method integer getListenPort() Obtain Ports monitored by the model service.
 * @method void setListenPort(integer $ListenPort) Set Ports monitored by the model service.
 * @method array getRequestPaths() Obtain Request path list for inference service.
 * @method void setRequestPaths(array $RequestPaths) Set Request path list for inference service.
 * @method array getContainers() Obtain Container configuration of the inference service.
 * @method void setContainers(array $Containers) Set Container configuration of the inference service.
 * @method InferenceResourceConfig getResourceConfig() Obtain Resource configuration of the inference service.
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) Set Resource configuration of the inference service.
 */
class InferenceServiceConfig extends AbstractModel
{
    /**
     * @var integer Ports monitored by the model service.
     */
    public $ListenPort;

    /**
     * @var array Request path list for inference service.
     */
    public $RequestPaths;

    /**
     * @var array Container configuration of the inference service.
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig Resource configuration of the inference service.
     */
    public $ResourceConfig;

    /**
     * @param integer $ListenPort Ports monitored by the model service.
     * @param array $RequestPaths Request path list for inference service.
     * @param array $Containers Container configuration of the inference service.
     * @param InferenceResourceConfig $ResourceConfig Resource configuration of the inference service.
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
    }
}
