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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dimensions of events returned by the DescribeProductEventList API
 *
 * @method string getKey() Obtain Dimension name in English.
Note: This field may return null, indicating that no valid value was found.
 * @method void setKey(string $Key) Set Dimension name in English.
Note: This field may return null, indicating that no valid value was found.
 * @method string getName() Obtain Dimension name in Chinese.
Note: This field may return null, indicating that no valid value was found.
 * @method void setName(string $Name) Set Dimension name in Chinese.
Note: This field may return null, indicating that no valid value was found.
 * @method string getValue() Obtain Dimension value.
Note: This field may return null, indicating that no valid value was found.
 * @method void setValue(string $Value) Set Dimension value.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribeProductEventListEventsDimensions extends AbstractModel
{
    /**
     * @var string Dimension name in English.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Key;

    /**
     * @var string Dimension name in Chinese.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Name;

    /**
     * @var string Dimension value.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Value;

    /**
     * @param string $Key Dimension name in English.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Name Dimension name in Chinese.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Value Dimension value.
Note: This field may return null, indicating that no valid value was found.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
