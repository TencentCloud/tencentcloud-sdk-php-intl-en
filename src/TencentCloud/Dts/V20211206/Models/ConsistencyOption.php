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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data consistency check option. Data consistency check is disabled by default.
 *
 * @method string getMode() Obtain Data consistency check type. Valid values: `full`, `noCheck`, `notConfigured`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMode(string $Mode) Set Data consistency check type. Valid values: `full`, `noCheck`, `notConfigured`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConsistencyOption extends AbstractModel
{
    /**
     * @var string Data consistency check type. Valid values: `full`, `noCheck`, `notConfigured`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mode;

    /**
     * @param string $Mode Data consistency check type. Valid values: `full`, `noCheck`, `notConfigured`.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
