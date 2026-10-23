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
 * Custom Variable rule operation.
 *
 * @method string getName() Obtain <p>Operation name. The name should correspond to the parameter structure. For example, if Name=Set, SetParameters is required. Currently only support filling in Set.</p><li>Set: custom variable settings;</li>
 * @method void setName(string $Name) Set <p>Operation name. The name should correspond to the parameter structure. For example, if Name=Set, SetParameters is required. Currently only support filling in Set.</p><li>Set: custom variable settings;</li>
 * @method SetParameters getSetParameters() Obtain <p>Custom Variable parameter settings. If there are multiple operations in this parameter, they are executed in sequence according to the array order. When the value of Name is Set, this parameter is required.</p>
 * @method void setSetParameters(SetParameters $SetParameters) Set <p>Custom Variable parameter settings. If there are multiple operations in this parameter, they are executed in sequence according to the array order. When the value of Name is Set, this parameter is required.</p>
 */
class CustomVariableOperationRuleAction extends AbstractModel
{
    /**
     * @var string <p>Operation name. The name should correspond to the parameter structure. For example, if Name=Set, SetParameters is required. Currently only support filling in Set.</p><li>Set: custom variable settings;</li>
     */
    public $Name;

    /**
     * @var SetParameters <p>Custom Variable parameter settings. If there are multiple operations in this parameter, they are executed in sequence according to the array order. When the value of Name is Set, this parameter is required.</p>
     */
    public $SetParameters;

    /**
     * @param string $Name <p>Operation name. The name should correspond to the parameter structure. For example, if Name=Set, SetParameters is required. Currently only support filling in Set.</p><li>Set: custom variable settings;</li>
     * @param SetParameters $SetParameters <p>Custom Variable parameter settings. If there are multiple operations in this parameter, they are executed in sequence according to the array order. When the value of Name is Set, this parameter is required.</p>
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

        if (array_key_exists("SetParameters",$param) and $param["SetParameters"] !== null) {
            $this->SetParameters = new SetParameters();
            $this->SetParameters->deserialize($param["SetParameters"]);
        }
    }
}
