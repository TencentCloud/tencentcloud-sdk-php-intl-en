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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Property attribute
 *
 * @method string getPropertyKey() Obtain key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPropertyKey(string $PropertyKey) Set key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPropertyValue() Obtain value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPropertyValue(string $PropertyValue) Set value
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PropertiesMap extends AbstractModel
{
    /**
     * @var string key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PropertyKey;

    /**
     * @var string value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PropertyValue;

    /**
     * @param string $PropertyKey key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PropertyValue value
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
        if (array_key_exists("PropertyKey",$param) and $param["PropertyKey"] !== null) {
            $this->PropertyKey = $param["PropertyKey"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }
    }
}
