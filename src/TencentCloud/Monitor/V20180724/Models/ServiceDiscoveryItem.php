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
 * Prometheus scrape configuration information
 *
 * @method string getName() Obtain Scrape configuration name
 * @method void setName(string $Name) Set Scrape configuration name
 * @method string getNamespace() Obtain Namespace of the scrape configuration
 * @method void setNamespace(string $Namespace) Set Namespace of the scrape configuration
 * @method string getKind() Obtain Scrape configuration type: ServiceMonitor/PodMonitor
 * @method void setKind(string $Kind) Set Scrape configuration type: ServiceMonitor/PodMonitor
 * @method string getNamespaceSelector() Obtain Namespace selection method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceSelector(string $NamespaceSelector) Set Namespace selection method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSelector() Obtain Label selection method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSelector(string $Selector) Set Label selection method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndpoints() Obtain `Endpoints` information (PodMonitor does not have this parameter)
 * @method void setEndpoints(string $Endpoints) Set `Endpoints` information (PodMonitor does not have this parameter)
 * @method string getYaml() Obtain Scrape configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setYaml(string $Yaml) Set Scrape configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServiceDiscoveryItem extends AbstractModel
{
    /**
     * @var string Scrape configuration name
     */
    public $Name;

    /**
     * @var string Namespace of the scrape configuration
     */
    public $Namespace;

    /**
     * @var string Scrape configuration type: ServiceMonitor/PodMonitor
     */
    public $Kind;

    /**
     * @var string Namespace selection method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceSelector;

    /**
     * @var string Label selection method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Selector;

    /**
     * @var string `Endpoints` information (PodMonitor does not have this parameter)
     */
    public $Endpoints;

    /**
     * @var string Scrape configuration information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Yaml;

    /**
     * @param string $Name Scrape configuration name
     * @param string $Namespace Namespace of the scrape configuration
     * @param string $Kind Scrape configuration type: ServiceMonitor/PodMonitor
     * @param string $NamespaceSelector Namespace selection method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Selector Label selection method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Endpoints `Endpoints` information (PodMonitor does not have this parameter)
     * @param string $Yaml Scrape configuration information
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("NamespaceSelector",$param) and $param["NamespaceSelector"] !== null) {
            $this->NamespaceSelector = $param["NamespaceSelector"];
        }

        if (array_key_exists("Selector",$param) and $param["Selector"] !== null) {
            $this->Selector = $param["Selector"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = $param["Endpoints"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }
    }
}
