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
 * SetUserBlockedByStrRoomId request structure.
 *
 * @method integer getSdkAppId() Obtain The application ID.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID.
 * @method string getStrRoomId() Obtain The room ID (string).
 * @method void setStrRoomId(string $StrRoomId) Set The room ID (string).
 * @method string getUserId() Obtain The user ID.
 * @method void setUserId(string $UserId) Set The user ID.
 * @method integer getIsMute() Obtain Controls the activation state of audio and video.
0: Enable audio and video,
1: Disable audio and video,
2: Disable audio only,
3: Disable video only.
 * @method void setIsMute(integer $IsMute) Set Controls the activation state of audio and video.
0: Enable audio and video,
1: Disable audio and video,
2: Disable audio only,
3: Disable video only.
 */
class SetUserBlockedByStrRoomIdRequest extends AbstractModel
{
    /**
     * @var integer The application ID.
     */
    public $SdkAppId;

    /**
     * @var string The room ID (string).
     */
    public $StrRoomId;

    /**
     * @var string The user ID.
     */
    public $UserId;

    /**
     * @var integer Controls the activation state of audio and video.
0: Enable audio and video,
1: Disable audio and video,
2: Disable audio only,
3: Disable video only.
     */
    public $IsMute;

    /**
     * @param integer $SdkAppId The application ID.
     * @param string $StrRoomId The room ID (string).
     * @param string $UserId The user ID.
     * @param integer $IsMute Controls the activation state of audio and video.
0: Enable audio and video,
1: Disable audio and video,
2: Disable audio only,
3: Disable video only.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StrRoomId",$param) and $param["StrRoomId"] !== null) {
            $this->StrRoomId = $param["StrRoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsMute",$param) and $param["IsMute"] !== null) {
            $this->IsMute = $param["IsMute"];
        }
    }
}
