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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Historical scale information
 *
 * @method integer getTime() Obtain Start time for each day
 * @method void setTime(integer $Time) Set Start time for each day
 * @method integer getUserNumber() Obtain Number of users in room
 * @method void setUserNumber(integer $UserNumber) Set Number of users in room
 * @method integer getUserCount() Obtain Number of times a room has been entered
 * @method void setUserCount(integer $UserCount) Set Number of times a room has been entered
 * @method integer getRoomNumbers() Obtain Number of rooms.
 * @method void setRoomNumbers(integer $RoomNumbers) Set Number of rooms.
 */
class ScaleInfomation extends AbstractModel
{
    /**
     * @var integer Start time for each day
     */
    public $Time;

    /**
     * @var integer Number of users in room
     */
    public $UserNumber;

    /**
     * @var integer Number of times a room has been entered
     */
    public $UserCount;

    /**
     * @var integer Number of rooms.
     */
    public $RoomNumbers;

    /**
     * @param integer $Time Start time for each day
     * @param integer $UserNumber Number of users in room
     * @param integer $UserCount Number of times a room has been entered
     * @param integer $RoomNumbers Number of rooms.
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

        if (array_key_exists("UserNumber",$param) and $param["UserNumber"] !== null) {
            $this->UserNumber = $param["UserNumber"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("RoomNumbers",$param) and $param["RoomNumbers"] !== null) {
            $this->RoomNumbers = $param["RoomNumbers"];
        }
    }
}
