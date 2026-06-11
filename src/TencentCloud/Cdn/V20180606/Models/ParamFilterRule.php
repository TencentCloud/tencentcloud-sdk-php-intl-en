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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter blocklist rule.
 *
 * @method string getKey() Obtain Parameter name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Parameter name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getValues() Obtain Numeric array. value range: less than 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValues(array $Values) Set Numeric array. value range: less than 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReturnCode() Obtain http status code (only supports 403).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReturnCode(string $ReturnCode) Set http status code (only supports 403).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamFilterRule extends AbstractModel
{
    /**
     * @var string Parameter name.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var array Numeric array. value range: less than 10.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Values;

    /**
     * @var string http status code (only supports 403).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReturnCode;

    /**
     * @param string $Key Parameter name.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Values Numeric array. value range: less than 10.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReturnCode http status code (only supports 403).
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
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }
    }
}
