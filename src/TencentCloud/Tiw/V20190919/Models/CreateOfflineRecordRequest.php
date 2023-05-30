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
 * CreateOfflineRecord request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method integer getRoomId() Obtain Room ID corresponding to the recording task.
 * @method void setRoomId(integer $RoomId) Set Room ID corresponding to the recording task.
 * @method string getGroupId() Obtain Group ID corresponding to the recording task.
 * @method void setGroupId(string $GroupId) Set Group ID corresponding to the recording task.
 * @method MixStream getMixStream() Obtain Stream mixing parameters.
The Custom parameter is not supported for offline recording tasks.
 * @method void setMixStream(MixStream $MixStream) Set Stream mixing parameters.
The Custom parameter is not supported for offline recording tasks.
 * @method Whiteboard getWhiteboard() Obtain Whiteboard parameters.
 * @method void setWhiteboard(Whiteboard $Whiteboard) Set Whiteboard parameters.
 */
class CreateOfflineRecordRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var integer Room ID corresponding to the recording task.
     */
    public $RoomId;

    /**
     * @var string Group ID corresponding to the recording task.
     */
    public $GroupId;

    /**
     * @var MixStream Stream mixing parameters.
The Custom parameter is not supported for offline recording tasks.
     */
    public $MixStream;

    /**
     * @var Whiteboard Whiteboard parameters.
     */
    public $Whiteboard;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param integer $RoomId Room ID corresponding to the recording task.
     * @param string $GroupId Group ID corresponding to the recording task.
     * @param MixStream $MixStream Stream mixing parameters.
The Custom parameter is not supported for offline recording tasks.
     * @param Whiteboard $Whiteboard Whiteboard parameters.
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MixStream",$param) and $param["MixStream"] !== null) {
            $this->MixStream = new MixStream();
            $this->MixStream->deserialize($param["MixStream"]);
        }

        if (array_key_exists("Whiteboard",$param) and $param["Whiteboard"] !== null) {
            $this->Whiteboard = new Whiteboard();
            $this->Whiteboard->deserialize($param["Whiteboard"]);
        }
    }
}
