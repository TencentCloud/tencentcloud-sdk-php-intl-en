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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A recorded time shifting session.
 *
 * @method string getSid() Obtain The session ID.
 * @method void setSid(string $Sid) Set The session ID.
 * @method integer getStartTime() Obtain The recording start time, which is a Unix timestamp.
 * @method void setStartTime(integer $StartTime) Set The recording start time, which is a Unix timestamp.
 * @method integer getEndTime() Obtain The recording end time, which is a Unix timestamp.
 * @method void setEndTime(integer $EndTime) Set The recording end time, which is a Unix timestamp.
 */
class TimeShiftRecord extends AbstractModel
{
    /**
     * @var string The session ID.
     */
    public $Sid;

    /**
     * @var integer The recording start time, which is a Unix timestamp.
     */
    public $StartTime;

    /**
     * @var integer The recording end time, which is a Unix timestamp.
     */
    public $EndTime;

    /**
     * @param string $Sid The session ID.
     * @param integer $StartTime The recording start time, which is a Unix timestamp.
     * @param integer $EndTime The recording end time, which is a Unix timestamp.
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
