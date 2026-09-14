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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin-pull Header information
 *
 * @method string getKey() Obtain <p>Key.</p><p>Parameter format: 1. The string literal only contains printable ASCII characters. 2. Cannot contain these characters ()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>Input parameter limitation: length 1-40.</p>
 * @method void setKey(string $Key) Set <p>Key.</p><p>Parameter format: 1. The string literal only contains printable ASCII characters. 2. Cannot contain these characters ()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>Input parameter limitation: length 1-40.</p>
 * @method string getValue() Obtain <p>Value.</p><p>Input parameter limit: length cannot exceed 128.</p><p>If the string contains $, you can only configure '$remote_addr', '$remote_port'; otherwise, it is not supported.</p>
 * @method void setValue(string $Value) Set <p>Value.</p><p>Input parameter limit: length cannot exceed 128.</p><p>If the string contains $, you can only configure '$remote_addr', '$remote_port'; otherwise, it is not supported.</p>
 */
class OriginHeader extends AbstractModel
{
    /**
     * @var string <p>Key.</p><p>Parameter format: 1. The string literal only contains printable ASCII characters. 2. Cannot contain these characters ()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>Input parameter limitation: length 1-40.</p>
     */
    public $Key;

    /**
     * @var string <p>Value.</p><p>Input parameter limit: length cannot exceed 128.</p><p>If the string contains $, you can only configure '$remote_addr', '$remote_port'; otherwise, it is not supported.</p>
     */
    public $Value;

    /**
     * @param string $Key <p>Key.</p><p>Parameter format: 1. The string literal only contains printable ASCII characters. 2. Cannot contain these characters ()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>Input parameter limitation: length 1-40.</p>
     * @param string $Value <p>Value.</p><p>Input parameter limit: length cannot exceed 128.</p><p>If the string contains $, you can only configure '$remote_addr', '$remote_port'; otherwise, it is not supported.</p>
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
            $this->Value = $param["Value"];
        }
    }
}
