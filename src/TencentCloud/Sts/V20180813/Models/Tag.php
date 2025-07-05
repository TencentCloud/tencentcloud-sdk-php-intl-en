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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on tags
 *
 * @method string getKey() Obtain Tag key. It’s up to 128 characters and case-sensitive.
 * @method void setKey(string $Key) Set Tag key. It’s up to 128 characters and case-sensitive.
 * @method string getValue() Obtain Tag value. It’s up to 256 characters and case-sensitive.
 * @method void setValue(string $Value) Set Tag value. It’s up to 256 characters and case-sensitive.
 */
class Tag extends AbstractModel
{
    /**
     * @var string Tag key. It’s up to 128 characters and case-sensitive.
     */
    public $Key;

    /**
     * @var string Tag value. It’s up to 256 characters and case-sensitive.
     */
    public $Value;

    /**
     * @param string $Key Tag key. It’s up to 128 characters and case-sensitive.
     * @param string $Value Tag value. It’s up to 256 characters and case-sensitive.
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
