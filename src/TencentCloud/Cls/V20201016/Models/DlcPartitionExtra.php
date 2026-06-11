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
 * Data Lake Computing Service (Data Lake Compute, abbreviation DLC) partitioning additional information
 *
 * @method string getTimeFormat() Obtain Time format, e.g.: %Y-%m-%d %H:%m:%S.%f
 * @method void setTimeFormat(string $TimeFormat) Set Time format, e.g.: %Y-%m-%d %H:%m:%S.%f
 * @method string getTimeZone() Obtain Time zone
 * @method void setTimeZone(string $TimeZone) Set Time zone
 */
class DlcPartitionExtra extends AbstractModel
{
    /**
     * @var string Time format, e.g.: %Y-%m-%d %H:%m:%S.%f
     */
    public $TimeFormat;

    /**
     * @var string Time zone
     */
    public $TimeZone;

    /**
     * @param string $TimeFormat Time format, e.g.: %Y-%m-%d %H:%m:%S.%f
     * @param string $TimeZone Time zone
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
        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
