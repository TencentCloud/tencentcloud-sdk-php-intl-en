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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow log statistics in specified time range
 *
 * @method integer getCount() Obtain Total number
 * @method void setCount(integer $Count) Set Total number
 * @method integer getTimestamp() Obtain Statistics start time
 * @method void setTimestamp(integer $Timestamp) Set Statistics start time
 */
class TimeSlice extends AbstractModel
{
    /**
     * @var integer Total number
     */
    public $Count;

    /**
     * @var integer Statistics start time
     */
    public $Timestamp;

    /**
     * @param integer $Count Total number
     * @param integer $Timestamp Statistics start time
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
