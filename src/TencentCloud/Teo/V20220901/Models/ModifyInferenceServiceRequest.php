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
 * ModifyInferenceService request structure.
 *
 * @method string getZoneId() Obtain <p>Zone ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID.</p>
 * @method string getServiceId() Obtain <p>Inference service ID.</p>
 * @method void setServiceId(string $ServiceId) Set <p>Inference service ID.</p>
 * @method integer getListenPort() Obtain <p>Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.</p>
 * @method void setListenPort(integer $ListenPort) Set <p>Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.</p>
 * @method array getRequestPaths() Obtain <p>Request path list for the inference service. Supports up to 20 paths.</p>
 * @method void setRequestPaths(array $RequestPaths) Set <p>Request path list for the inference service. Supports up to 20 paths.</p>
 * @method array getContainers() Obtain <p>Container configuration for the inference service. Currently only support setting 1 container.</p>
 * @method void setContainers(array $Containers) Set <p>Container configuration for the inference service. Currently only support setting 1 container.</p>
 * @method InferenceResourceConfigForModify getResourceConfig() Obtain <p>Resource configuration of the inference service.</p>
 * @method void setResourceConfig(InferenceResourceConfigForModify $ResourceConfig) Set <p>Resource configuration of the inference service.</p>
 * @method InferenceAffinityConfig getAffinityConfig() Obtain <p>Inference service affinity configuration</p>
 * @method void setAffinityConfig(InferenceAffinityConfig $AffinityConfig) Set <p>Inference service affinity configuration</p>
 * @method string getDescription() Obtain <p>Description. Length limit: no more than 60 characters.</p>
 * @method void setDescription(string $Description) Set <p>Description. Length limit: no more than 60 characters.</p>
 */
class ModifyInferenceServiceRequest extends AbstractModel
{
    /**
     * @var string <p>Zone ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Inference service ID.</p>
     */
    public $ServiceId;

    /**
     * @var integer <p>Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.</p>
     */
    public $ListenPort;

    /**
     * @var array <p>Request path list for the inference service. Supports up to 20 paths.</p>
     */
    public $RequestPaths;

    /**
     * @var array <p>Container configuration for the inference service. Currently only support setting 1 container.</p>
     */
    public $Containers;

    /**
     * @var InferenceResourceConfigForModify <p>Resource configuration of the inference service.</p>
     */
    public $ResourceConfig;

    /**
     * @var InferenceAffinityConfig <p>Inference service affinity configuration</p>
     */
    public $AffinityConfig;

    /**
     * @var string <p>Description. Length limit: no more than 60 characters.</p>
     */
    public $Description;

    /**
     * @param string $ZoneId <p>Zone ID.</p>
     * @param string $ServiceId <p>Inference service ID.</p>
     * @param integer $ListenPort <p>Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.</p>
     * @param array $RequestPaths <p>Request path list for the inference service. Supports up to 20 paths.</p>
     * @param array $Containers <p>Container configuration for the inference service. Currently only support setting 1 container.</p>
     * @param InferenceResourceConfigForModify $ResourceConfig <p>Resource configuration of the inference service.</p>
     * @param InferenceAffinityConfig $AffinityConfig <p>Inference service affinity configuration</p>
     * @param string $Description <p>Description. Length limit: no more than 60 characters.</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
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
                $obj = new InferenceContainerConfigForModify();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new InferenceResourceConfigForModify();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("AffinityConfig",$param) and $param["AffinityConfig"] !== null) {
            $this->AffinityConfig = new InferenceAffinityConfig();
            $this->AffinityConfig->deserialize($param["AffinityConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
