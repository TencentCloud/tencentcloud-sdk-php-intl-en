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
 * Prometheus configuration
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getConfig() Obtain Configuration content
 * @method void setConfig(string $Config) Set Configuration content
 * @method string getTemplateId() Obtain If the configuration comes from a template, this parameter is the template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateId(string $TemplateId) Set If the configuration comes from a template, this parameter is the template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Targets getTargets() Obtain Number of targets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(Targets $Targets) Set Number of targets
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusConfigItem extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Configuration content
     */
    public $Config;

    /**
     * @var string If the configuration comes from a template, this parameter is the template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateId;

    /**
     * @var Targets Number of targets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @param string $Name Name
     * @param string $Config Configuration content
     * @param string $TemplateId If the configuration comes from a template, this parameter is the template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Targets $Targets Number of targets
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = new Targets();
            $this->Targets->deserialize($param["Targets"]);
        }
    }
}
