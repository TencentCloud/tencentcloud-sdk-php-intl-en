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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag key-value pair
 *
 * @method string getKey() Obtain Tag key
Note: This field may return null, indicating no valid value.
 * @method void setKey(string $Key) Set Tag key
Note: This field may return null, indicating no valid value.
 * @method string getValue() Obtain Tag value
Note: This field may return null, indicating no valid value.
 * @method void setValue(string $Value) Set Tag value
Note: This field may return null, indicating no valid value.
 */
class Tag extends AbstractModel
{
    /**
     * @var string Tag key
Note: This field may return null, indicating no valid value.
     */
    public $Key;

    /**
     * @var string Tag value
Note: This field may return null, indicating no valid value.
     */
    public $Value;

    /**
     * @param string $Key Tag key
Note: This field may return null, indicating no valid value.
     * @param string $Value Tag value
Note: This field may return null, indicating no valid value.
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
