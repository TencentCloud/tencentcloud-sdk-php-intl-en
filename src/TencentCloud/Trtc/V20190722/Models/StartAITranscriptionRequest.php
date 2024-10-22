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
 * StartAITranscription request structure.
 *
 * @method integer getSdkAppId() Obtain TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the transcription task.
 * @method void setSdkAppId(integer $SdkAppId) Set TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the transcription task.
 * @method string getRoomId() Obtain TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the transcription task is started.
 * @method void setRoomId(string $RoomId) Set TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the transcription task is started.
 * @method TranscriptionParams getTranscriptionParams() Obtain Parameters of the transcription robot.
 * @method void setTranscriptionParams(TranscriptionParams $TranscriptionParams) Set Parameters of the transcription robot.
 * @method string getSessionId() Obtain The unique ID passed by the caller is used by the server to deduplicate. Note: If this parameter is passed, the server will use it first to deduplicate. If this parameter is not passed, the server's deduplication strategy is as follows: 
- If the TranscriptionMode field is 0, only one task can be opened in a room
- If the TranscriptionMode field is 1, only one task can be opened in a TargetUserId
 * @method void setSessionId(string $SessionId) Set The unique ID passed by the caller is used by the server to deduplicate. Note: If this parameter is passed, the server will use it first to deduplicate. If this parameter is not passed, the server's deduplication strategy is as follows: 
- If the TranscriptionMode field is 0, only one task can be opened in a room
- If the TranscriptionMode field is 1, only one task can be opened in a TargetUserId
 * @method integer getRoomIdType() Obtain The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
 * @method void setRoomIdType(integer $RoomIdType) Set The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
 * @method RecognizeConfig getRecognizeConfig() Obtain Speech recognition configuration.
 * @method void setRecognizeConfig(RecognizeConfig $RecognizeConfig) Set Speech recognition configuration.
 */
class StartAITranscriptionRequest extends AbstractModel
{
    /**
     * @var integer TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the transcription task.
     */
    public $SdkAppId;

    /**
     * @var string TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the transcription task is started.
     */
    public $RoomId;

    /**
     * @var TranscriptionParams Parameters of the transcription robot.
     */
    public $TranscriptionParams;

    /**
     * @var string The unique ID passed by the caller is used by the server to deduplicate. Note: If this parameter is passed, the server will use it first to deduplicate. If this parameter is not passed, the server's deduplication strategy is as follows: 
- If the TranscriptionMode field is 0, only one task can be opened in a room
- If the TranscriptionMode field is 1, only one task can be opened in a TargetUserId
     */
    public $SessionId;

    /**
     * @var integer The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
     */
    public $RoomIdType;

    /**
     * @var RecognizeConfig Speech recognition configuration.
     */
    public $RecognizeConfig;

    /**
     * @param integer $SdkAppId TRTC's [SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid) is the same as the SdkAppId used by the room that starts the transcription task.
     * @param string $RoomId TRTC's [RoomId](https://cloud.tencent.com/document/product/647/46351#roomid), which indicates the room number where the transcription task is started.
     * @param TranscriptionParams $TranscriptionParams Parameters of the transcription robot.
     * @param string $SessionId The unique ID passed by the caller is used by the server to deduplicate. Note: If this parameter is passed, the server will use it first to deduplicate. If this parameter is not passed, the server's deduplication strategy is as follows: 
- If the TranscriptionMode field is 0, only one task can be opened in a room
- If the TranscriptionMode field is 1, only one task can be opened in a TargetUserId
     * @param integer $RoomIdType The type of TRTC room number. 0 represents a numeric room number, and 1 represents a string room number. If not filled in, the default is a numeric room number.
     * @param RecognizeConfig $RecognizeConfig Speech recognition configuration.
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

        if (array_key_exists("TranscriptionParams",$param) and $param["TranscriptionParams"] !== null) {
            $this->TranscriptionParams = new TranscriptionParams();
            $this->TranscriptionParams->deserialize($param["TranscriptionParams"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("RecognizeConfig",$param) and $param["RecognizeConfig"] !== null) {
            $this->RecognizeConfig = new RecognizeConfig();
            $this->RecognizeConfig->deserialize($param["RecognizeConfig"]);
        }
    }
}
