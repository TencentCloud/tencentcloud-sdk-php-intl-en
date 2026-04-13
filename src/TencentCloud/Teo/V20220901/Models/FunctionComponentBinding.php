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
 * Edge function component binding configuration is used to create a relationship between edge functions and components (such as KV namespace). Through bind configuration, function code can access bound resources at runtime via the specified variable name.
 *
 * @method string getType() Obtain Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

 * @method void setType(string $Type) Set Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

 * @method string getVariableName() Obtain Variable name for binding. Limited to 1-50 characters. Allowed characters are letters, digits, and underscores. Digits cannot be at the beginning. Access the bound component via this variable name in the edge function code. Based on the Type value, the usage is as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through the variable name, for example, when setting it to "MY_KV", you can perform read-write operations via MY_KV.get("key").</li>

 * @method void setVariableName(string $VariableName) Set Variable name for binding. Limited to 1-50 characters. Allowed characters are letters, digits, and underscores. Digits cannot be at the beginning. Access the bound component via this variable name in the edge function code. Based on the Type value, the usage is as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through the variable name, for example, when setting it to "MY_KV", you can perform read-write operations via MY_KV.get("key").</li>

 * @method KVNamespaceParameters getKVNamespaceParameters() Obtain KV namespace configuration parameter. Used for designated binding namespace details. Required when Type is kv_namespace.


Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setKVNamespaceParameters(KVNamespaceParameters $KVNamespaceParameters) Set KV namespace configuration parameter. Used for designated binding namespace details. Required when Type is kv_namespace.


Note: This field may return null, which indicates a failure to obtain a valid value.
 */
class FunctionComponentBinding extends AbstractModel
{
    /**
     * @var string Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

     */
    public $Type;

    /**
     * @var string Variable name for binding. Limited to 1-50 characters. Allowed characters are letters, digits, and underscores. Digits cannot be at the beginning. Access the bound component via this variable name in the edge function code. Based on the Type value, the usage is as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through the variable name, for example, when setting it to "MY_KV", you can perform read-write operations via MY_KV.get("key").</li>

     */
    public $VariableName;

    /**
     * @var KVNamespaceParameters KV namespace configuration parameter. Used for designated binding namespace details. Required when Type is kv_namespace.


Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $KVNamespaceParameters;

    /**
     * @param string $Type Bound component type. Valid values:
<li>kv_namespace: KV namespace.</li>

     * @param string $VariableName Variable name for binding. Limited to 1-50 characters. Allowed characters are letters, digits, and underscores. Digits cannot be at the beginning. Access the bound component via this variable name in the edge function code. Based on the Type value, the usage is as follows:
<li>When Type is kv_namespace: In code, you can access the KV namespace through the variable name, for example, when setting it to "MY_KV", you can perform read-write operations via MY_KV.get("key").</li>

     * @param KVNamespaceParameters $KVNamespaceParameters KV namespace configuration parameter. Used for designated binding namespace details. Required when Type is kv_namespace.


Note: This field may return null, which indicates a failure to obtain a valid value.
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
