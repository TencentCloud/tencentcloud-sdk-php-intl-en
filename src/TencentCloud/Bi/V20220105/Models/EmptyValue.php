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
 * Empty value display style configuration value structure
 *
 * @method string getType() Obtain Empty value display style type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Empty value display style type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCustom() Obtain Display style type for null values corresponds to specific display string
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustom(string $Custom) Set Display style type for null values corresponds to specific display string
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EmptyValue extends AbstractModel
{
    /**
     * @var string Empty value display style type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Display style type for null values corresponds to specific display string
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Custom;

    /**
     * @param string $Type Empty value display style type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Custom Display style type for null values corresponds to specific display string
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

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }
    }
}
