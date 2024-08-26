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
 * Attribute information of databases, tables, indexes, etc.
 *
 * @method string getPropertyKey() Obtain Attribute key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPropertyKey(string $PropertyKey) Set Attribute key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPropertyValue() Obtain Attribute value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPropertyValue(string $PropertyValue) Set Attribute value
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Property extends AbstractModel
{
    /**
     * @var string Attribute key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PropertyKey;

    /**
     * @var string Attribute value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PropertyValue;

    /**
     * @param string $PropertyKey Attribute key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PropertyValue Attribute value
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
