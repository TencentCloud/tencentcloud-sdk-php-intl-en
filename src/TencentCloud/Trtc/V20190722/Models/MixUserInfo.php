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
 * The user information.
 *
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getRoomId() Obtain If a dynamic layout is used, the value of this parameter should be the ID of the main room. If a custom layout is used, the value of this parameter should be the same as the room ID in `MixLayoutList`.
 * @method void setRoomId(string $RoomId) Set If a dynamic layout is used, the value of this parameter should be the ID of the main room. If a custom layout is used, the value of this parameter should be the same as the room ID in `MixLayoutList`.
 * @method integer getRoomIdType() Obtain The type of the `RoomId` parameter. 0: integer; 1: string.
 * @method void setRoomIdType(integer $RoomIdType) Set The type of the `RoomId` parameter. 0: integer; 1: string.
 */
class MixUserInfo extends AbstractModel
{
    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string If a dynamic layout is used, the value of this parameter should be the ID of the main room. If a custom layout is used, the value of this parameter should be the same as the room ID in `MixLayoutList`.
     */
    public $RoomId;

    /**
     * @var integer The type of the `RoomId` parameter. 0: integer; 1: string.
     */
    public $RoomIdType;

    /**
     * @param string $UserId User ID.
     * @param string $RoomId If a dynamic layout is used, the value of this parameter should be the ID of the main room. If a custom layout is used, the value of this parameter should be the same as the room ID in `MixLayoutList`.
     * @param integer $RoomIdType The type of the `RoomId` parameter. 0: integer; 1: string.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }
    }
}
