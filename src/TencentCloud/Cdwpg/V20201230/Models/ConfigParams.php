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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters
 *
 * @method string getParameterName() Obtain Name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParameterName(string $ParameterName) Set Name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParameterValue() Obtain Value.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParameterValue(string $ParameterValue) Set Value.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParameterOldValue() Obtain Value before modification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParameterOldValue(string $ParameterOldValue) Set Value before modification.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConfigParams extends AbstractModel
{
    /**
     * @var string Name.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParameterName;

    /**
     * @var string Value.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParameterValue;

    /**
     * @var string Value before modification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParameterOldValue;

    /**
     * @param string $ParameterName Name.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParameterValue Value.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParameterOldValue Value before modification.
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
        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }

        if (array_key_exists("ParameterValue",$param) and $param["ParameterValue"] !== null) {
            $this->ParameterValue = $param["ParameterValue"];
        }

        if (array_key_exists("ParameterOldValue",$param) and $param["ParameterOldValue"] !== null) {
            $this->ParameterOldValue = $param["ParameterOldValue"];
        }
    }
}
