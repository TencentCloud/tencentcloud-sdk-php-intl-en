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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of the tag pair bound to a resource instance when it is created
 *
 * @method string getKey() Obtain The tag key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set The tag key.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain The tag value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set The tag value.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Tag extends AbstractModel
{
    /**
     * @var string The tag key.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string The tag value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param string $Key The tag key.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value The tag value.
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
