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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data items in a DNS request curve
 *
 * @method string getTime() Obtain Time
 * @method void setTime(string $Time) Set Time
 * @method integer getValue() Obtain Value
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setValue(integer $Value) Set Value
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DataItem extends AbstractModel
{
    /**
     * @var string Time
     */
    public $Time;

    /**
     * @var integer Value
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Value;

    /**
     * @param string $Time Time
     * @param integer $Value Value
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
