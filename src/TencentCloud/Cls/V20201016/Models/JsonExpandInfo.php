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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * **JsonExpandInfo data structure description**:
```
JSON nest unfold configuration
```

**Field description**:

| Field | Description |
|------|------|
Switch | Whether JSON nested unfold is enabled
Fields | Field list of JSON to unfold, 1-3
DropOriginal | Whether to drop the raw field after unfolding, default true
| ConflictPolicy | Field conflict policy. keep_outer: Keep the outer layer (default). keep_inner: Keep the inner-layer. |

**LogRechargeRuleInfo add field**:

| Field | Description |
|------|------|
JsonExpand | JSON nest unfold configuration. This parameter is valid only when RechargeType is json_log.
 *
 * @method boolean getSwitch() Obtain <p>Whether to enable the JSON nested unfold functionality. Once enabled, it will flatten and process the specified JSON field.</p><p>Default value: None (Required parameter)</p>
 * @method void setSwitch(boolean $Switch) Set <p>Whether to enable the JSON nested unfold functionality. Once enabled, it will flatten and process the specified JSON field.</p><p>Default value: None (Required parameter)</p>
 * @method array getFields() Obtain <p>List of JSON field names to be unfolded, supporting 1 to 3 fields. Field names cannot be empty strings and cannot be repeated.</p><p>Input parameter limits: 1. Number of fields: 1 to 3. 2. Length of each field name not exceeding 128 characters. 3. Field names cannot be empty strings. 4. Field names cannot be repeated.</p><p>Default value: None (required parameter)</p><p>Value for reference: Value: message; Description: Example field name</p><p>Example: ["message", "data", "content"]</p>
 * @method void setFields(array $Fields) Set <p>List of JSON field names to be unfolded, supporting 1 to 3 fields. Field names cannot be empty strings and cannot be repeated.</p><p>Input parameter limits: 1. Number of fields: 1 to 3. 2. Length of each field name not exceeding 128 characters. 3. Field names cannot be empty strings. 4. Field names cannot be repeated.</p><p>Default value: None (required parameter)</p><p>Value for reference: Value: message; Description: Example field name</p><p>Example: ["message", "data", "content"]</p>
 * @method boolean getDropOriginal() Obtain <p>Whether to discard the original nested field after unfolding. true: discard the original field and keep only the flattened field after unfolding; false: keep the original field and add the flattened field after unfolding.</p><p>Enumeration value:</p><ul><li>true / false: discard the original field / keep the original field</li></ul><p>Default value: true</p><p>Optional. Default is true if not provided.</p>
 * @method void setDropOriginal(boolean $DropOriginal) Set <p>Whether to discard the original nested field after unfolding. true: discard the original field and keep only the flattened field after unfolding; false: keep the original field and add the flattened field after unfolding.</p><p>Enumeration value:</p><ul><li>true / false: discard the original field / keep the original field</li></ul><p>Default value: true</p><p>Optional. Default is true if not provided.</p>
 * @method string getConflictPolicy() Obtain <p>Processing policy when the unfolded field conflicts with an existing field</p><p>Enumeration value:</p><ul><li>keep_outer / keep_inner: Keep the outer (existing) field / Keep the inner (newly unfolded) field</li></ul><p>Default value: keep_outer</p><p>Optional. Defaults to keep_outer if not passed.</p>
 * @method void setConflictPolicy(string $ConflictPolicy) Set <p>Processing policy when the unfolded field conflicts with an existing field</p><p>Enumeration value:</p><ul><li>keep_outer / keep_inner: Keep the outer (existing) field / Keep the inner (newly unfolded) field</li></ul><p>Default value: keep_outer</p><p>Optional. Defaults to keep_outer if not passed.</p>
 */
class JsonExpandInfo extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable the JSON nested unfold functionality. Once enabled, it will flatten and process the specified JSON field.</p><p>Default value: None (Required parameter)</p>
     */
    public $Switch;

    /**
     * @var array <p>List of JSON field names to be unfolded, supporting 1 to 3 fields. Field names cannot be empty strings and cannot be repeated.</p><p>Input parameter limits: 1. Number of fields: 1 to 3. 2. Length of each field name not exceeding 128 characters. 3. Field names cannot be empty strings. 4. Field names cannot be repeated.</p><p>Default value: None (required parameter)</p><p>Value for reference: Value: message; Description: Example field name</p><p>Example: ["message", "data", "content"]</p>
     */
    public $Fields;

    /**
     * @var boolean <p>Whether to discard the original nested field after unfolding. true: discard the original field and keep only the flattened field after unfolding; false: keep the original field and add the flattened field after unfolding.</p><p>Enumeration value:</p><ul><li>true / false: discard the original field / keep the original field</li></ul><p>Default value: true</p><p>Optional. Default is true if not provided.</p>
     */
    public $DropOriginal;

    /**
     * @var string <p>Processing policy when the unfolded field conflicts with an existing field</p><p>Enumeration value:</p><ul><li>keep_outer / keep_inner: Keep the outer (existing) field / Keep the inner (newly unfolded) field</li></ul><p>Default value: keep_outer</p><p>Optional. Defaults to keep_outer if not passed.</p>
     */
    public $ConflictPolicy;

    /**
     * @param boolean $Switch <p>Whether to enable the JSON nested unfold functionality. Once enabled, it will flatten and process the specified JSON field.</p><p>Default value: None (Required parameter)</p>
     * @param array $Fields <p>List of JSON field names to be unfolded, supporting 1 to 3 fields. Field names cannot be empty strings and cannot be repeated.</p><p>Input parameter limits: 1. Number of fields: 1 to 3. 2. Length of each field name not exceeding 128 characters. 3. Field names cannot be empty strings. 4. Field names cannot be repeated.</p><p>Default value: None (required parameter)</p><p>Value for reference: Value: message; Description: Example field name</p><p>Example: ["message", "data", "content"]</p>
     * @param boolean $DropOriginal <p>Whether to discard the original nested field after unfolding. true: discard the original field and keep only the flattened field after unfolding; false: keep the original field and add the flattened field after unfolding.</p><p>Enumeration value:</p><ul><li>true / false: discard the original field / keep the original field</li></ul><p>Default value: true</p><p>Optional. Default is true if not provided.</p>
     * @param string $ConflictPolicy <p>Processing policy when the unfolded field conflicts with an existing field</p><p>Enumeration value:</p><ul><li>keep_outer / keep_inner: Keep the outer (existing) field / Keep the inner (newly unfolded) field</li></ul><p>Default value: keep_outer</p><p>Optional. Defaults to keep_outer if not passed.</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }

        if (array_key_exists("DropOriginal",$param) and $param["DropOriginal"] !== null) {
            $this->DropOriginal = $param["DropOriginal"];
        }

        if (array_key_exists("ConflictPolicy",$param) and $param["ConflictPolicy"] !== null) {
            $this->ConflictPolicy = $param["ConflictPolicy"];
        }
    }
}
