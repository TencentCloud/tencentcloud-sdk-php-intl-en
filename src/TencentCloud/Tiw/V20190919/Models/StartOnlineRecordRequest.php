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
 * StartOnlineRecord request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the customer
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the customer
 * @method integer getRoomId() Obtain ID of the room for recording. Value range: (1, 4294967295)
 * @method void setRoomId(integer $RoomId) Set ID of the room for recording. Value range: (1, 4294967295)
 * @method string getRecordUserId() Obtain User ID used by the recording service for entering a room. The ID cannot exceed 60 bytes in length. Its format is `tic_record_user_${RoomId}_${Random}`, where `${RoomId}` indicates the ID of the room for recording and `${Random}` is a random string.
The ID must be an unused ID in the SDK. The recording service uses the user ID to enter the room for audio, video, and whiteboard recording. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the recording operation.
 * @method void setRecordUserId(string $RecordUserId) Set User ID used by the recording service for entering a room. The ID cannot exceed 60 bytes in length. Its format is `tic_record_user_${RoomId}_${Random}`, where `${RoomId}` indicates the ID of the room for recording and `${Random}` is a random string.
The ID must be an unused ID in the SDK. The recording service uses the user ID to enter the room for audio, video, and whiteboard recording. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the recording operation.
 * @method string getRecordUserSig() Obtain Signature corresponding to RecordUserId
 * @method void setRecordUserSig(string $RecordUserSig) Set Signature corresponding to RecordUserId
 * @method string getGroupId() Obtain (Disused) IM group ID of the whiteboard. By default, it is the same as the room ID.
 * @method void setGroupId(string $GroupId) Set (Disused) IM group ID of the whiteboard. By default, it is the same as the room ID.
 * @method Concat getConcat() Obtain Real-time recording video splicing parameter
 * @method void setConcat(Concat $Concat) Set Real-time recording video splicing parameter
 * @method Whiteboard getWhiteboard() Obtain Real-time recording whiteboard parameter, such as the whiteboard width and height
 * @method void setWhiteboard(Whiteboard $Whiteboard) Set Real-time recording whiteboard parameter, such as the whiteboard width and height
 * @method MixStream getMixStream() Obtain Real-time recording stream mixing parameter
Notes:
1. The stream mixing feature needs to be enabled separately. If you need the feature, contact TIW customer service.
2. To use the stream mixing feature, the Extras parameter is required and must contain "MIX_STREAM".
 * @method void setMixStream(MixStream $MixStream) Set Real-time recording stream mixing parameter
Notes:
1. The stream mixing feature needs to be enabled separately. If you need the feature, contact TIW customer service.
2. To use the stream mixing feature, the Extras parameter is required and must contain "MIX_STREAM".
 * @method array getExtras() Obtain List of advanced features used
List of possible values:
MIX_STREAM - Stream mixing feature
 * @method void setExtras(array $Extras) Set List of advanced features used
List of possible values:
MIX_STREAM - Stream mixing feature
 * @method boolean getAudioFileNeeded() Obtain Whether to return the audio-only recording file of different streams in the result callback. The file format is mp3.
 * @method void setAudioFileNeeded(boolean $AudioFileNeeded) Set Whether to return the audio-only recording file of different streams in the result callback. The file format is mp3.
 * @method RecordControl getRecordControl() Obtain A group of real-time recording parameters. It specifies the streams to be recorded, whether to disable the audio recording, and whether to record only low-resolution videos, etc.
 * @method void setRecordControl(RecordControl $RecordControl) Set A group of real-time recording parameters. It specifies the streams to be recorded, whether to disable the audio recording, and whether to record only low-resolution videos, etc.
 * @method string getRecordMode() Obtain 
 * @method void setRecordMode(string $RecordMode) Set 
 * @method string getChatGroupId() Obtain 
 * @method void setChatGroupId(string $ChatGroupId) Set 
 * @method integer getAutoStopTimeout() Obtain Recording timeout. Unit: seconds. Valid range: [300,86400]. Default value: 300.

If no upstream audio/video exists or no operation is performed on the whiteboard for the specified period of time, the recording service automatically stops the recording task.
 * @method void setAutoStopTimeout(integer $AutoStopTimeout) Set Recording timeout. Unit: seconds. Valid range: [300,86400]. Default value: 300.

If no upstream audio/video exists or no operation is performed on the whiteboard for the specified period of time, the recording service automatically stops the recording task.
 * @method string getExtraData() Obtain Internal parameter. You can ignore this parameter.
 * @method void setExtraData(string $ExtraData) Set Internal parameter. You can ignore this parameter.
 */
class StartOnlineRecordRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the customer
     */
    public $SdkAppId;

    /**
     * @var integer ID of the room for recording. Value range: (1, 4294967295)
     */
    public $RoomId;

    /**
     * @var string User ID used by the recording service for entering a room. The ID cannot exceed 60 bytes in length. Its format is `tic_record_user_${RoomId}_${Random}`, where `${RoomId}` indicates the ID of the room for recording and `${Random}` is a random string.
The ID must be an unused ID in the SDK. The recording service uses the user ID to enter the room for audio, video, and whiteboard recording. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the recording operation.
     */
    public $RecordUserId;

    /**
     * @var string Signature corresponding to RecordUserId
     */
    public $RecordUserSig;

    /**
     * @var string (Disused) IM group ID of the whiteboard. By default, it is the same as the room ID.
     */
    public $GroupId;

    /**
     * @var Concat Real-time recording video splicing parameter
     */
    public $Concat;

    /**
     * @var Whiteboard Real-time recording whiteboard parameter, such as the whiteboard width and height
     */
    public $Whiteboard;

    /**
     * @var MixStream Real-time recording stream mixing parameter
Notes:
1. The stream mixing feature needs to be enabled separately. If you need the feature, contact TIW customer service.
2. To use the stream mixing feature, the Extras parameter is required and must contain "MIX_STREAM".
     */
    public $MixStream;

    /**
     * @var array List of advanced features used
List of possible values:
MIX_STREAM - Stream mixing feature
     */
    public $Extras;

    /**
     * @var boolean Whether to return the audio-only recording file of different streams in the result callback. The file format is mp3.
     */
    public $AudioFileNeeded;

    /**
     * @var RecordControl A group of real-time recording parameters. It specifies the streams to be recorded, whether to disable the audio recording, and whether to record only low-resolution videos, etc.
     */
    public $RecordControl;

    /**
     * @var string 
     */
    public $RecordMode;

    /**
     * @var string 
     */
    public $ChatGroupId;

    /**
     * @var integer Recording timeout. Unit: seconds. Valid range: [300,86400]. Default value: 300.

If no upstream audio/video exists or no operation is performed on the whiteboard for the specified period of time, the recording service automatically stops the recording task.
     */
    public $AutoStopTimeout;

    /**
     * @var string Internal parameter. You can ignore this parameter.
     */
    public $ExtraData;

    /**
     * @param integer $SdkAppId SdkAppId of the customer
     * @param integer $RoomId ID of the room for recording. Value range: (1, 4294967295)
     * @param string $RecordUserId User ID used by the recording service for entering a room. The ID cannot exceed 60 bytes in length. Its format is `tic_record_user_${RoomId}_${Random}`, where `${RoomId}` indicates the ID of the room for recording and `${Random}` is a random string.
The ID must be an unused ID in the SDK. The recording service uses the user ID to enter the room for audio, video, and whiteboard recording. If this ID is already used in the SDK, the SDK and recording service will conflict, affecting the recording operation.
     * @param string $RecordUserSig Signature corresponding to RecordUserId
     * @param string $GroupId (Disused) IM group ID of the whiteboard. By default, it is the same as the room ID.
     * @param Concat $Concat Real-time recording video splicing parameter
     * @param Whiteboard $Whiteboard Real-time recording whiteboard parameter, such as the whiteboard width and height
     * @param MixStream $MixStream Real-time recording stream mixing parameter
Notes:
1. The stream mixing feature needs to be enabled separately. If you need the feature, contact TIW customer service.
2. To use the stream mixing feature, the Extras parameter is required and must contain "MIX_STREAM".
     * @param array $Extras List of advanced features used
List of possible values:
MIX_STREAM - Stream mixing feature
     * @param boolean $AudioFileNeeded Whether to return the audio-only recording file of different streams in the result callback. The file format is mp3.
     * @param RecordControl $RecordControl A group of real-time recording parameters. It specifies the streams to be recorded, whether to disable the audio recording, and whether to record only low-resolution videos, etc.
     * @param string $RecordMode 
     * @param string $ChatGroupId 
     * @param integer $AutoStopTimeout Recording timeout. Unit: seconds. Valid range: [300,86400]. Default value: 300.

If no upstream audio/video exists or no operation is performed on the whiteboard for the specified period of time, the recording service automatically stops the recording task.
     * @param string $ExtraData Internal parameter. You can ignore this parameter.
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

        if (array_key_exists("RecordUserId",$param) and $param["RecordUserId"] !== null) {
            $this->RecordUserId = $param["RecordUserId"];
        }

        if (array_key_exists("RecordUserSig",$param) and $param["RecordUserSig"] !== null) {
            $this->RecordUserSig = $param["RecordUserSig"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Concat",$param) and $param["Concat"] !== null) {
            $this->Concat = new Concat();
            $this->Concat->deserialize($param["Concat"]);
        }

        if (array_key_exists("Whiteboard",$param) and $param["Whiteboard"] !== null) {
            $this->Whiteboard = new Whiteboard();
            $this->Whiteboard->deserialize($param["Whiteboard"]);
        }

        if (array_key_exists("MixStream",$param) and $param["MixStream"] !== null) {
            $this->MixStream = new MixStream();
            $this->MixStream->deserialize($param["MixStream"]);
        }

        if (array_key_exists("Extras",$param) and $param["Extras"] !== null) {
            $this->Extras = $param["Extras"];
        }

        if (array_key_exists("AudioFileNeeded",$param) and $param["AudioFileNeeded"] !== null) {
            $this->AudioFileNeeded = $param["AudioFileNeeded"];
        }

        if (array_key_exists("RecordControl",$param) and $param["RecordControl"] !== null) {
            $this->RecordControl = new RecordControl();
            $this->RecordControl->deserialize($param["RecordControl"]);
        }

        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("ChatGroupId",$param) and $param["ChatGroupId"] !== null) {
            $this->ChatGroupId = $param["ChatGroupId"];
        }

        if (array_key_exists("AutoStopTimeout",$param) and $param["AutoStopTimeout"] !== null) {
            $this->AutoStopTimeout = $param["AutoStopTimeout"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }
    }
}
