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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General parameters
 *
 * @method string getKey() Obtain key
 * @method void setKey(string $Key) Set key
 * @method array getValues() Obtain Value List

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValues(array $Values) Set Value List

Note: This field may return null, indicating that no valid values can be obtained.
 */
class Arg extends AbstractModel
{
    /**
     * @var string key
     */
    public $Key;

    /**
     * @var array Value List

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Values;

    /**
     * @param string $Key key
     * @param array $Values Value List

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
    }
}
