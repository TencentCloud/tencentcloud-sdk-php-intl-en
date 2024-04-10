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
 * Filters
 *
 * @method string getKey() Obtain Metric NameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set Metric NameNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Metric content Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Metric content Note: This field may return null, indicating that no valid values can be obtained.
 */
class MetricLabel extends AbstractModel
{
    /**
     * @var string Metric NameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string Metric content Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param string $Key Metric NameNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Metric content Note: This field may return null, indicating that no valid values can be obtained.
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
