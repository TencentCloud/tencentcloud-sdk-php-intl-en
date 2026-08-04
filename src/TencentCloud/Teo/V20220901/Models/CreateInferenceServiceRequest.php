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
 * CreateInferenceService request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getName() Obtain <p>Service name. Length limit is no more than 30 characters, only lowercase letters, digits, and hyphens are supported, must start with a letter, ends with a digit or letter, duplicates are not supported.</p>
 * @method void setName(string $Name) Set <p>Service name. Length limit is no more than 30 characters, only lowercase letters, digits, and hyphens are supported, must start with a letter, ends with a digit or letter, duplicates are not supported.</p>
 * @method integer getListenPort() Obtain <p>Ports monitored by the model service. Only integers between 1 and 65535 are supported.</p>
 * @method void setListenPort(integer $ListenPort) Set <p>Ports monitored by the model service. Only integers between 1 and 65535 are supported.</p>
 * @method array getContainers() Obtain <p>Container configuration of the inference service. Currently only support setting 1 container.</p>
 * @method void setContainers(array $Containers) Set <p>Container configuration of the inference service. Currently only support setting 1 container.</p>
 * @method InferenceResourceConfig getResourceConfig() Obtain <p>Resource configuration of the inference service.</p>
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) Set <p>Resource configuration of the inference service.</p>
 * @method array getRequestPaths() Obtain <p>Request path list for inference service. Supports up to 20 paths.</p>
 * @method void setRequestPaths(array $RequestPaths) Set <p>Request path list for inference service. Supports up to 20 paths.</p>
 * @method string getDescription() Obtain <p>Description. Length limit: no more than 60 characters.</p>
 * @method void setDescription(string $Description) Set <p>Description. Length limit: no more than 60 characters.</p>
 */
class CreateInferenceServiceRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Service name. Length limit is no more than 30 characters, only lowercase letters, digits, and hyphens are supported, must start with a letter, ends with a digit or letter, duplicates are not supported.</p>
     */
    public $Name;

    /**
     * @var integer <p>Ports monitored by the model service. Only integers between 1 and 65535 are supported.</p>
     */
    public $ListenPort;

    /**
     * @var array <p>Container configuration of the inference service. Currently only support setting 1 container.</p>
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig <p>Resource configuration of the inference service.</p>
     */
    public $ResourceConfig;

    /**
     * @var array <p>Request path list for inference service. Supports up to 20 paths.</p>
     */
    public $RequestPaths;

    /**
     * @var string <p>Description. Length limit: no more than 60 characters.</p>
     */
    public $Description;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Name <p>Service name. Length limit is no more than 30 characters, only lowercase letters, digits, and hyphens are supported, must start with a letter, ends with a digit or letter, duplicates are not supported.</p>
     * @param integer $ListenPort <p>Ports monitored by the model service. Only integers between 1 and 65535 are supported.</p>
     * @param array $Containers <p>Container configuration of the inference service. Currently only support setting 1 container.</p>
     * @param InferenceResourceConfig $ResourceConfig <p>Resource configuration of the inference service.</p>
     * @param array $RequestPaths <p>Request path list for inference service. Supports up to 20 paths.</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ListenPort",$param) and $param["ListenPort"] !== null) {
            $this->ListenPort = $param["ListenPort"];
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

        if (array_key_exists("RequestPaths",$param) and $param["RequestPaths"] !== null) {
            $this->RequestPaths = $param["RequestPaths"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
