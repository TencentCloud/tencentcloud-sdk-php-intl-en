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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag.
 *
 * @method string getType() Obtain Tag type.
 * @method void setType(string $Type) Set Tag type.
 * @method string getKey() Obtain Tag key.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Tag key.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Tag value
.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Tag value
.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SpanTag extends AbstractModel
{
    /**
     * @var string Tag type.
     */
    public $Type;

    /**
     * @var string Tag key.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string Tag value
.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param string $Type Tag type.
     * @param string $Key Tag key.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Value Tag value
.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
