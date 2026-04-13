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
 * ModifyFunctionComponentBindings request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getFunctionId() Obtain Function ID.
 * @method void setFunctionId(string $FunctionId) Set Function ID.
 * @method string getOperation() Obtain Operation type. Valid values:
<li>bind: bind component;</li>
<li>bind-override: Bind a component. If the binding already exists, it is a rebind action; otherwise, it is a bind action.</li>
<li>unbind: Unbind a component;</li>
<li>rebind: Reset the binding relationship. Clear all existing bindings and set to the passed in bound list. If an empty list is passed in, clear all bindings.</li>

 * @method void setOperation(string $Operation) Set Operation type. Valid values:
<li>bind: bind component;</li>
<li>bind-override: Bind a component. If the binding already exists, it is a rebind action; otherwise, it is a bind action.</li>
<li>unbind: Unbind a component;</li>
<li>rebind: Reset the binding relationship. Clear all existing bindings and set to the passed in bound list. If an empty list is passed in, clear all bindings.</li>

 * @method array getFunctionComponentBindings() Obtain Bound list of function components to operate. When Operation is rebind and an empty list is input, it means to clear ALL bindings.
 * @method void setFunctionComponentBindings(array $FunctionComponentBindings) Set Bound list of function components to operate. When Operation is rebind and an empty list is input, it means to clear ALL bindings.
 */
class ModifyFunctionComponentBindingsRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Function ID.
     */
    public $FunctionId;

    /**
     * @var string Operation type. Valid values:
<li>bind: bind component;</li>
<li>bind-override: Bind a component. If the binding already exists, it is a rebind action; otherwise, it is a bind action.</li>
<li>unbind: Unbind a component;</li>
<li>rebind: Reset the binding relationship. Clear all existing bindings and set to the passed in bound list. If an empty list is passed in, clear all bindings.</li>

     */
    public $Operation;

    /**
     * @var array Bound list of function components to operate. When Operation is rebind and an empty list is input, it means to clear ALL bindings.
     */
    public $FunctionComponentBindings;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $FunctionId Function ID.
     * @param string $Operation Operation type. Valid values:
<li>bind: bind component;</li>
<li>bind-override: Bind a component. If the binding already exists, it is a rebind action; otherwise, it is a bind action.</li>
<li>unbind: Unbind a component;</li>
<li>rebind: Reset the binding relationship. Clear all existing bindings and set to the passed in bound list. If an empty list is passed in, clear all bindings.</li>

     * @param array $FunctionComponentBindings Bound list of function components to operate. When Operation is rebind and an empty list is input, it means to clear ALL bindings.
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

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("FunctionComponentBindings",$param) and $param["FunctionComponentBindings"] !== null) {
            $this->FunctionComponentBindings = [];
            foreach ($param["FunctionComponentBindings"] as $key => $value){
                $obj = new FunctionComponentBinding();
                $obj->deserialize($value);
                array_push($this->FunctionComponentBindings, $obj);
            }
        }
    }
}
