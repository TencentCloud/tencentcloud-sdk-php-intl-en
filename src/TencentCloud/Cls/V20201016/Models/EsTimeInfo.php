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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Import time field information for Es
 *
 * @method integer getType() Obtain Time type 1: Log collection time 2: Specify log fields
 * @method void setType(integer $Type) Set Time type 1: Log collection time 2: Specify log fields
 * @method string getTimeKey() Obtain Log time field.

Time type is 2: Required when specifying log fields
 * @method void setTimeKey(string $TimeKey) Set Log time field.

Time type is 2: Required when specifying log fields
 * @method string getTimeFormat() Obtain Log time format.

Time type is 2: Required when specifying log fields
 * @method void setTimeFormat(string $TimeFormat) Set Log time format.

Time type is 2: Required when specifying log fields
 * @method string getTimeZone() Obtain Time field time zone.

Time type is 2: Required when specifying log fields
 * @method void setTimeZone(string $TimeZone) Set Time field time zone.

Time type is 2: Required when specifying log fields
 */
class EsTimeInfo extends AbstractModel
{
    /**
     * @var integer Time type 1: Log collection time 2: Specify log fields
     */
    public $Type;

    /**
     * @var string Log time field.

Time type is 2: Required when specifying log fields
     */
    public $TimeKey;

    /**
     * @var string Log time format.

Time type is 2: Required when specifying log fields
     */
    public $TimeFormat;

    /**
     * @var string Time field time zone.

Time type is 2: Required when specifying log fields
     */
    public $TimeZone;

    /**
     * @param integer $Type Time type 1: Log collection time 2: Specify log fields
     * @param string $TimeKey Log time field.

Time type is 2: Required when specifying log fields
     * @param string $TimeFormat Log time format.

Time type is 2: Required when specifying log fields
     * @param string $TimeZone Time field time zone.

Time type is 2: Required when specifying log fields
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

        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
