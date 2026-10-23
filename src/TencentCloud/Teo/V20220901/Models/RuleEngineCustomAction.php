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
 * Rule engine manipulates custom configuration.
 *
 * @method string getActionId() Obtain <p>Unique ID of the custom configuration.</p>
 * @method void setActionId(string $ActionId) Set <p>Unique ID of the custom configuration.</p>
 * @method string getName() Obtain <p>Custom configuration name.</p>
 * @method void setName(string $Name) Set <p>Custom configuration name.</p>
 * @method string getDescription() Obtain <p>Custom configuration description.</p>
 * @method void setDescription(string $Description) Set <p>Custom configuration description.</p>
 * @method array getParameters() Obtain <p>Custom configuration parameter definition list.</p>
 * @method void setParameters(array $Parameters) Set <p>Custom configuration parameter definition list.</p>
 * @method array getSupportedConditions() Obtain <p>Match conditions supported by custom configuration.</p><p>For supported match conditions, refer to the official documentation <a href="https://www.tencentcloud.com/document/product/1552/125344?from_cn_redirect=1">General Reference - Configuration Syntax - Variables</a>.</p>
 * @method void setSupportedConditions(array $SupportedConditions) Set <p>Match conditions supported by custom configuration.</p><p>For supported match conditions, refer to the official documentation <a href="https://www.tencentcloud.com/document/product/1552/125344?from_cn_redirect=1">General Reference - Configuration Syntax - Variables</a>.</p>
 */
class RuleEngineCustomAction extends AbstractModel
{
    /**
     * @var string <p>Unique ID of the custom configuration.</p>
     */
    public $ActionId;

    /**
     * @var string <p>Custom configuration name.</p>
     */
    public $Name;

    /**
     * @var string <p>Custom configuration description.</p>
     */
    public $Description;

    /**
     * @var array <p>Custom configuration parameter definition list.</p>
     */
    public $Parameters;

    /**
     * @var array <p>Match conditions supported by custom configuration.</p><p>For supported match conditions, refer to the official documentation <a href="https://www.tencentcloud.com/document/product/1552/125344?from_cn_redirect=1">General Reference - Configuration Syntax - Variables</a>.</p>
     */
    public $SupportedConditions;

    /**
     * @param string $ActionId <p>Unique ID of the custom configuration.</p>
     * @param string $Name <p>Custom configuration name.</p>
     * @param string $Description <p>Custom configuration description.</p>
     * @param array $Parameters <p>Custom configuration parameter definition list.</p>
     * @param array $SupportedConditions <p>Match conditions supported by custom configuration.</p><p>For supported match conditions, refer to the official documentation <a href="https://www.tencentcloud.com/document/product/1552/125344?from_cn_redirect=1">General Reference - Configuration Syntax - Variables</a>.</p>
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
        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new RuleEngineCustomActionParameterSchema();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("SupportedConditions",$param) and $param["SupportedConditions"] !== null) {
            $this->SupportedConditions = $param["SupportedConditions"];
        }
    }
}
