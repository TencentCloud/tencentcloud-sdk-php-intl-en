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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Field information of key value or metafield index
 *
 * @method string getKey() Obtain Name of the field for which you want to configure a key-value or metadata field index. The name can contain letters, digits, underscores, and symbols -./@ and cannot start with an underscore.

Note:
For a metadata field, set its `Key` to be consistent with the one for log uploading, without prefixing it with `__TAG__.`. `__TAG__.` will be prefixed automatically for display in the console.
2. The total number of keys in key-value indexes (`KeyValue`) and metadata field indexes (`Tag`) cannot exceed 300.
3. The number of levels in `Key` cannot exceed 10. Example: a.b.c.d.e.f.g.h.j.k
4. JSON parent and child fields (such as “a” and “a.b”) cannot be contained at the same time.
 * @method void setKey(string $Key) Set Name of the field for which you want to configure a key-value or metadata field index. The name can contain letters, digits, underscores, and symbols -./@ and cannot start with an underscore.

Note:
For a metadata field, set its `Key` to be consistent with the one for log uploading, without prefixing it with `__TAG__.`. `__TAG__.` will be prefixed automatically for display in the console.
2. The total number of keys in key-value indexes (`KeyValue`) and metadata field indexes (`Tag`) cannot exceed 300.
3. The number of levels in `Key` cannot exceed 10. Example: a.b.c.d.e.f.g.h.j.k
4. JSON parent and child fields (such as “a” and “a.b”) cannot be contained at the same time.
 * @method ValueInfo getValue() Obtain Field index description information
 * @method void setValue(ValueInfo $Value) Set Field index description information
 */
class KeyValueInfo extends AbstractModel
{
    /**
     * @var string Name of the field for which you want to configure a key-value or metadata field index. The name can contain letters, digits, underscores, and symbols -./@ and cannot start with an underscore.

Note:
For a metadata field, set its `Key` to be consistent with the one for log uploading, without prefixing it with `__TAG__.`. `__TAG__.` will be prefixed automatically for display in the console.
2. The total number of keys in key-value indexes (`KeyValue`) and metadata field indexes (`Tag`) cannot exceed 300.
3. The number of levels in `Key` cannot exceed 10. Example: a.b.c.d.e.f.g.h.j.k
4. JSON parent and child fields (such as “a” and “a.b”) cannot be contained at the same time.
     */
    public $Key;

    /**
     * @var ValueInfo Field index description information
     */
    public $Value;

    /**
     * @param string $Key Name of the field for which you want to configure a key-value or metadata field index. The name can contain letters, digits, underscores, and symbols -./@ and cannot start with an underscore.

Note:
For a metadata field, set its `Key` to be consistent with the one for log uploading, without prefixing it with `__TAG__.`. `__TAG__.` will be prefixed automatically for display in the console.
2. The total number of keys in key-value indexes (`KeyValue`) and metadata field indexes (`Tag`) cannot exceed 300.
3. The number of levels in `Key` cannot exceed 10. Example: a.b.c.d.e.f.g.h.j.k
4. JSON parent and child fields (such as “a” and “a.b”) cannot be contained at the same time.
     * @param ValueInfo $Value Field index description information
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new ValueInfo();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
