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
 * The room information.
 *
 * @method string getCommId() Obtain The call ID, which uniquely identifies a call.
 * @method void setCommId(string $CommId) Set The call ID, which uniquely identifies a call.
 * @method string getRoomString() Obtain The room ID.
 * @method void setRoomString(string $RoomString) Set The room ID.
 * @method integer getCreateTime() Obtain The room creation time.
 * @method void setCreateTime(integer $CreateTime) Set The room creation time.
 * @method integer getDestroyTime() Obtain The room termination time.
 * @method void setDestroyTime(integer $DestroyTime) Set The room termination time.
 * @method boolean getIsFinished() Obtain Whether the room is terminated.
 * @method void setIsFinished(boolean $IsFinished) Set Whether the room is terminated.
 * @method string getUserId() Obtain The user ID of the room creator.
 * @method void setUserId(string $UserId) Set The user ID of the room creator.
 */
class RoomState extends AbstractModel
{
    /**
     * @var string The call ID, which uniquely identifies a call.
     */
    public $CommId;

    /**
     * @var string The room ID.
     */
    public $RoomString;

    /**
     * @var integer The room creation time.
     */
    public $CreateTime;

    /**
     * @var integer The room termination time.
     */
    public $DestroyTime;

    /**
     * @var boolean Whether the room is terminated.
     */
    public $IsFinished;

    /**
     * @var string The user ID of the room creator.
     */
    public $UserId;

    /**
     * @param string $CommId The call ID, which uniquely identifies a call.
     * @param string $RoomString The room ID.
     * @param integer $CreateTime The room creation time.
     * @param integer $DestroyTime The room termination time.
     * @param boolean $IsFinished Whether the room is terminated.
     * @param string $UserId The user ID of the room creator.
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
