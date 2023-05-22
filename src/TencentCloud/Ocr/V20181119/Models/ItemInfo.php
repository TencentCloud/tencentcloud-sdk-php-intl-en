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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Structured element group
 *
 * @method Key getKey() Obtain The key information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(Key $Key) Set The key information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Value getValue() Obtain The value information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(Value $Value) Set The value information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ItemInfo extends AbstractModel
{
    /**
     * @var Key The key information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var Value The value information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param Key $Key The key information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Value $Value The value information.
Note: This field may return null, indicating that no valid values can be obtained.
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
            $this->Key = new Key();
            $this->Key->deserialize($param["Key"]);
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new Value();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
