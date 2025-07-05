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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud tag
 *
 * @method string getKey() Obtain Cloud tag key.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setKey(string $Key) Set Cloud tag key.Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getValue() Obtain Cloud tag value.Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValue(string $Value) Set Cloud tag value.Note: This field may return null, indicating that no valid value can be obtained.
 */
class Tag extends AbstractModel
{
    /**
     * @var string Cloud tag key.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Key;

    /**
     * @var string Cloud tag value.Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Value;

    /**
     * @param string $Key Cloud tag key.Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Value Cloud tag value.Note: This field may return null, indicating that no valid value can be obtained.
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
