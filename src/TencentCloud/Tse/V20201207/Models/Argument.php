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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Routing rule request from source service configuration detail
 *
 * @method string getType() Obtain Type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKey() Obtain Key value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Key value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ArgumentValue getValue() Obtain Matching condition parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(ArgumentValue $Value) Set Matching condition parameter
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Argument extends AbstractModel
{
    /**
     * @var string Type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Key value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var ArgumentValue Matching condition parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param string $Type Type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Key Key value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ArgumentValue $Value Matching condition parameter
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new ArgumentValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
