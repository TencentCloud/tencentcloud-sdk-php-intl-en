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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whiteboard room data returned for log queries.
 *
 * @method string getRoomId() Obtain Room ID.
 * @method void setRoomId(string $RoomId) Set Room ID.
 * @method integer getStartTime() Obtain The first time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 * @method void setStartTime(integer $StartTime) Set The first time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 * @method integer getEndTime() Obtain The last time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 * @method void setEndTime(integer $EndTime) Set The last time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
 * @method integer getUserNumber() Obtain Number of users in the room.
 * @method void setUserNumber(integer $UserNumber) Set Number of users in the room.
 */
class RoomListItem extends AbstractModel
{
    /**
     * @var string Room ID.
     */
    public $RoomId;

    /**
     * @var integer The first time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
     */
    public $StartTime;

    /**
     * @var integer The last time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
     */
    public $EndTime;

    /**
     * @var integer Number of users in the room.
     */
    public $UserNumber;

    /**
     * @param string $RoomId Room ID.
     * @param integer $StartTime The first time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
     * @param integer $EndTime The last time when the room ID appeared during the queried period, which is a Unix timestamp in milliseconds.
     * @param integer $UserNumber Number of users in the room.
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserNumber",$param) and $param["UserNumber"] !== null) {
            $this->UserNumber = $param["UserNumber"];
        }
    }
}
