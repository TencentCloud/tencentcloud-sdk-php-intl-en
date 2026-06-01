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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scaling policy by time period
 *
 * @method integer getStartTime() Obtain Expansion time started.
Description: This value is a timestamp in seconds in Integer format.
 * @method void setStartTime(integer $StartTime) Set Expansion time started.
Description: This value is a timestamp in seconds in Integer format.
 * @method integer getEndTime() Obtain Expansion time ended.
Description: This value is a timestamp in seconds in Integer format.
 * @method void setEndTime(integer $EndTime) Set Expansion time ended.
Description: This value is a timestamp in seconds in Integer format.
 */
class TimeIntervalStrategy extends AbstractModel
{
    /**
     * @var integer Expansion time started.
Description: This value is a timestamp in seconds in Integer format.
     */
    public $StartTime;

    /**
     * @var integer Expansion time ended.
Description: This value is a timestamp in seconds in Integer format.
     */
    public $EndTime;

    /**
     * @param integer $StartTime Expansion time started.
Description: This value is a timestamp in seconds in Integer format.
     * @param integer $EndTime Expansion time ended.
Description: This value is a timestamp in seconds in Integer format.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
