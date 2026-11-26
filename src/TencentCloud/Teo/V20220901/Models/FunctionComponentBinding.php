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
 * Bind configuration of the edge function component, used to establish the relationship between edge functions and components (such as KV namespaces). With bind configuration, edge function code can access bound resources at runtime through the specified variable name.
 *
 * @method string getType() Obtain Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

 * @method void setType(string $Type) Set Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

 * @method string getVariableName() Obtain Variable name for binding. It can contain 1-50 characters, including letters, digits, and underscores. It cannot start with a digit. In edge function code, access the bound component through this variable name. Usage varies based on the value of Type as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through this variable name. For example, when setting it to "MY_KV", you can perform read-write operations through MY_KV.get("key").</li>

 * @method void setVariableName(string $VariableName) Set Variable name for binding. It can contain 1-50 characters, including letters, digits, and underscores. It cannot start with a digit. In edge function code, access the bound component through this variable name. Usage varies based on the value of Type as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through this variable name. For example, when setting it to "MY_KV", you can perform read-write operations through MY_KV.get("key").</li>

 * @method KVNamespaceParameters getKVNamespaceParameters() Obtain KV namespace configuration parameter. Used to specify the bound KV namespace details. Required when Type is kv_namespace.


 * @method void setKVNamespaceParameters(KVNamespaceParameters $KVNamespaceParameters) Set KV namespace configuration parameter. Used to specify the bound KV namespace details. Required when Type is kv_namespace.
 */
class FunctionComponentBinding extends AbstractModel
{
    /**
     * @var string Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

     */
    public $Type;

    /**
     * @var string Variable name for binding. It can contain 1-50 characters, including letters, digits, and underscores. It cannot start with a digit. In edge function code, access the bound component through this variable name. Usage varies based on the value of Type as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through this variable name. For example, when setting it to "MY_KV", you can perform read-write operations through MY_KV.get("key").</li>

     */
    public $VariableName;

    /**
     * @var KVNamespaceParameters KV namespace configuration parameter. Used to specify the bound KV namespace details. Required when Type is kv_namespace.


     */
    public $KVNamespaceParameters;

    /**
     * @param string $Type Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

     * @param string $VariableName Variable name for binding. It can contain 1-50 characters, including letters, digits, and underscores. It cannot start with a digit. In edge function code, access the bound component through this variable name. Usage varies based on the value of Type as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through this variable name. For example, when setting it to "MY_KV", you can perform read-write operations through MY_KV.get("key").</li>

     * @param KVNamespaceParameters $KVNamespaceParameters KV namespace configuration parameter. Used to specify the bound KV namespace details. Required when Type is kv_namespace.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VariableName",$param) and $param["VariableName"] !== null) {
            $this->VariableName = $param["VariableName"];
        }

        if (array_key_exists("KVNamespaceParameters",$param) and $param["KVNamespaceParameters"] !== null) {
            $this->KVNamespaceParameters = new KVNamespaceParameters();
            $this->KVNamespaceParameters->deserialize($param["KVNamespaceParameters"]);
        }
    }
}
