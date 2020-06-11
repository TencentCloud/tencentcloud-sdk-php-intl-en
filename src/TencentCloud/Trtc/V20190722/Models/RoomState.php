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
 * Room information list
 *
 * @method string getCommId() Obtain Call ID (unique call ID)
 * @method void setCommId(string $CommId) Set Call ID (unique call ID)
 * @method string getRoomString() Obtain Room ID of string type
 * @method void setRoomString(string $RoomString) Set Room ID of string type
 * @method integer getCreateTime() Obtain Room creation time
 * @method void setCreateTime(integer $CreateTime) Set Room creation time
 * @method integer getDestroyTime() Obtain Room termination time
 * @method void setDestroyTime(integer $DestroyTime) Set Room termination time
 * @method boolean getIsFinished() Obtain Whether the room is terminated
 * @method void setIsFinished(boolean $IsFinished) Set Whether the room is terminated
 * @method string getUserId() Obtain Room creator ID
 * @method void setUserId(string $UserId) Set Room creator ID
 */
class RoomState extends AbstractModel
{
    /**
     * @var string Call ID (unique call ID)
     */
    public $CommId;

    /**
     * @var string Room ID of string type
     */
    public $RoomString;

    /**
     * @var integer Room creation time
     */
    public $CreateTime;

    /**
     * @var integer Room termination time
     */
    public $DestroyTime;

    /**
     * @var boolean Whether the room is terminated
     */
    public $IsFinished;

    /**
     * @var string Room creator ID
     */
    public $UserId;

    /**
     * @param string $CommId Call ID (unique call ID)
     * @param string $RoomString Room ID of string type
     * @param integer $CreateTime Room creation time
     * @param integer $DestroyTime Room termination time
     * @param boolean $IsFinished Whether the room is terminated
     * @param string $UserId Room creator ID
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
        if (array_key_exists("CommId",$param) and $param["CommId"] !== null) {
            $this->CommId = $param["CommId"];
        }

        if (array_key_exists("RoomString",$param) and $param["RoomString"] !== null) {
            $this->RoomString = $param["RoomString"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("IsFinished",$param) and $param["IsFinished"] !== null) {
            $this->IsFinished = $param["IsFinished"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
