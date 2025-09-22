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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Extended information of CDZ resource water level data, including availability zone local time and wait for data.
 *
 * @method string getThisMondayLocalDate() Obtain Cloud dedicated zone local time this monday date.
 * @method void setThisMondayLocalDate(string $ThisMondayLocalDate) Set Cloud dedicated zone local time this monday date.
 * @method string getLastMondayLocalDate() Obtain Cloud dedicated zone local time last monday date.
 * @method void setLastMondayLocalDate(string $LastMondayLocalDate) Set Cloud dedicated zone local time last monday date.
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var string Cloud dedicated zone local time this monday date.
     */
    public $ThisMondayLocalDate;

    /**
     * @var string Cloud dedicated zone local time last monday date.
     */
    public $LastMondayLocalDate;

    /**
     * @param string $ThisMondayLocalDate Cloud dedicated zone local time this monday date.
     * @param string $LastMondayLocalDate Cloud dedicated zone local time last monday date.
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
        if (array_key_exists("ThisMondayLocalDate",$param) and $param["ThisMondayLocalDate"] !== null) {
            $this->ThisMondayLocalDate = $param["ThisMondayLocalDate"];
        }

        if (array_key_exists("LastMondayLocalDate",$param) and $param["LastMondayLocalDate"] !== null) {
            $this->LastMondayLocalDate = $param["LastMondayLocalDate"];
        }
    }
}
