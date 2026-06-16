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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Empty value display style configuration structure
 *
 * @method EmptyValue getNumber() Obtain Numeric value field null style configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNumber(EmptyValue $Number) Set Numeric value field null style configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EmptyValue getString() Obtain Style configuration for empty string fields
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setString(EmptyValue $String) Set Style configuration for empty string fields
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EmptyValueConfig extends AbstractModel
{
    /**
     * @var EmptyValue Numeric value field null style configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Number;

    /**
     * @var EmptyValue Style configuration for empty string fields
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $String;

    /**
     * @param EmptyValue $Number Numeric value field null style configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EmptyValue $String Style configuration for empty string fields
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = new EmptyValue();
            $this->Number->deserialize($param["Number"]);
        }

        if (array_key_exists("String",$param) and $param["String"] !== null) {
            $this->String = new EmptyValue();
            $this->String->deserialize($param["String"]);
        }
    }
}
