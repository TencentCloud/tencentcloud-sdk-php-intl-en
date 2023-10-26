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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bill details configuration descriptions
 *
 * @method string getName() Obtain Configuration description name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Configuration description name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Configuration description value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Configuration description value
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BillDetailComponentConfig extends AbstractModel
{
    /**
     * @var string Configuration description name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Configuration description value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param string $Name Configuration description name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Configuration description value
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
