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
 * ModifyZoneCustomVariables request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method array getCustomVariables() Obtain <p>List of site-level custom variables. CustomVariable.Name must use user.zone. as a prefix. Variables are initialized sequentially in array order. InitialValue can only reference variables before the current variable. It does not support referencing the current variable itself or variables after it.</p>
 * @method void setCustomVariables(array $CustomVariables) Set <p>List of site-level custom variables. CustomVariable.Name must use user.zone. as a prefix. Variables are initialized sequentially in array order. InitialValue can only reference variables before the current variable. It does not support referencing the current variable itself or variables after it.</p>
 * @method array getCustomVariableOperations() Obtain <p>Site-level custom variable calculation rules. The calculation supports references to defined site-level custom variables. This list currently only supports filling in one rule; additional entries are invalid.</p>
 * @method void setCustomVariableOperations(array $CustomVariableOperations) Set <p>Site-level custom variable calculation rules. The calculation supports references to defined site-level custom variables. This list currently only supports filling in one rule; additional entries are invalid.</p>
 */
class ModifyZoneCustomVariablesRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var array <p>List of site-level custom variables. CustomVariable.Name must use user.zone. as a prefix. Variables are initialized sequentially in array order. InitialValue can only reference variables before the current variable. It does not support referencing the current variable itself or variables after it.</p>
     */
    public $CustomVariables;

    /**
     * @var array <p>Site-level custom variable calculation rules. The calculation supports references to defined site-level custom variables. This list currently only supports filling in one rule; additional entries are invalid.</p>
     */
    public $CustomVariableOperations;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param array $CustomVariables <p>List of site-level custom variables. CustomVariable.Name must use user.zone. as a prefix. Variables are initialized sequentially in array order. InitialValue can only reference variables before the current variable. It does not support referencing the current variable itself or variables after it.</p>
     * @param array $CustomVariableOperations <p>Site-level custom variable calculation rules. The calculation supports references to defined site-level custom variables. This list currently only supports filling in one rule; additional entries are invalid.</p>
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

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = [];
            foreach ($param["CustomVariables"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariables, $obj);
            }
        }

        if (array_key_exists("CustomVariableOperations",$param) and $param["CustomVariableOperations"] !== null) {
            $this->CustomVariableOperations = [];
            foreach ($param["CustomVariableOperations"] as $key => $value){
                $obj = new CustomVariableOperation();
                $obj->deserialize($value);
                array_push($this->CustomVariableOperations, $obj);
            }
        }
    }
}
