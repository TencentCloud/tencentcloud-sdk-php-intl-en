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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk assessment extended attribute key-value pairs.
 *
 * @method string getKey() Obtain Key.
Note: This field may return null, indicating that no valid value is found.
 * @method void setKey(string $Key) Set Key.
Note: This field may return null, indicating that no valid value is found.
 * @method string getValue() Obtain Value.
Note: This field may return null, indicating that no valid value is found.
 * @method void setValue(string $Value) Set Value.
Note: This field may return null, indicating that no valid value is found.
 */
class OutputRiskAssessmentExtraInfoPair extends AbstractModel
{
    /**
     * @var string Key.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Key;

    /**
     * @var string Value.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Value;

    /**
     * @param string $Key Key.
Note: This field may return null, indicating that no valid value is found.
     * @param string $Value Value.
Note: This field may return null, indicating that no valid value is found.
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
