<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method integer getSdkAppId() Obtain [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
 * @method void setSdkAppId(integer $SdkAppId) Set [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
 * @method string getRoomId() Obtain [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the transcription task.
 * @method void setRoomId(string $RoomId) Set [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the transcription task.
 * @method TranscriptionParams getTranscriptionParams() Obtain Transcription robot parameters.
 * @method void setTranscriptionParams(TranscriptionParams $TranscriptionParams) Set Transcription robot parameters.
 * @method string getSessionId() Obtain Unique Id passed by the caller, used by the server for task deduplication. duplicate tasks will fail to initiate. the server uses SdkAppId+RoomId+RoomIdType+RobotUserId for deduplication by default. if SessionId is provided, it will also be used for deduplication.
Note:.
When TranscriptionMode is 0, ensure only one task is initiated in a room. if multiple tasks are initiated, robots will subscribe to each other. unless the task is stopped proactively, it will timeout exit after 10 hours. in such cases, it is advisable to fill in SessionId to ensure subsequent repeated tasks fail.
 * @method void setSessionId(string $SessionId) Set Unique Id passed by the caller, used by the server for task deduplication. duplicate tasks will fail to initiate. the server uses SdkAppId+RoomId+RoomIdType+RobotUserId for deduplication by default. if SessionId is provided, it will also be used for deduplication.
Note:.
When TranscriptionMode is 0, ensure only one task is initiated in a room. if multiple tasks are initiated, robots will subscribe to each other. unless the task is stopped proactively, it will timeout exit after 10 hours. in such cases, it is advisable to fill in SessionId to ensure subsequent repeated tasks fail.
 * @method integer getRoomIdType() Obtain Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
 * @method void setRoomIdType(integer $RoomIdType) Set Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
 * @method RecognizeConfig getRecognizeConfig() Obtain Speech recognition configuration.
 * @method void setRecognizeConfig(RecognizeConfig $RecognizeConfig) Set Speech recognition configuration.
 * @method TranslationConfig getTranslationConfig() Obtain Translate configuration details.
 * @method void setTranslationConfig(TranslationConfig $TranslationConfig) Set Translate configuration details.
 */
class StartAITranscriptionRequest extends AbstractModel
{
    /**
     * @var integer [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
     */
    public $SdkAppId;

    /**
     * @var string [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the transcription task.
     */
    public $RoomId;

    /**
     * @var TranscriptionParams Transcription robot parameters.
     */
    public $TranscriptionParams;

    /**
     * @var string Unique Id passed by the caller, used by the server for task deduplication. duplicate tasks will fail to initiate. the server uses SdkAppId+RoomId+RoomIdType+RobotUserId for deduplication by default. if SessionId is provided, it will also be used for deduplication.
Note:.
When TranscriptionMode is 0, ensure only one task is initiated in a room. if multiple tasks are initiated, robots will subscribe to each other. unless the task is stopped proactively, it will timeout exit after 10 hours. in such cases, it is advisable to fill in SessionId to ensure subsequent repeated tasks fail.
     */
    public $SessionId;

    /**
     * @var integer Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
     */
    public $RoomIdType;

    /**
     * @var RecognizeConfig Speech recognition configuration.
     */
    public $RecognizeConfig;

    /**
     * @var TranslationConfig Translate configuration details.
     */
    public $TranslationConfig;

    /**
     * @param integer $SdkAppId [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId used by the room with transcription task enabled.
     * @param string $RoomId [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#RoomId) of TRTC refers to the room number that enables the transcription task.
     * @param TranscriptionParams $TranscriptionParams Transcription robot parameters.
     * @param string $SessionId Unique Id passed by the caller, used by the server for task deduplication. duplicate tasks will fail to initiate. the server uses SdkAppId+RoomId+RoomIdType+RobotUserId for deduplication by default. if SessionId is provided, it will also be used for deduplication.
Note:.
When TranscriptionMode is 0, ensure only one task is initiated in a room. if multiple tasks are initiated, robots will subscribe to each other. unless the task is stopped proactively, it will timeout exit after 10 hours. in such cases, it is advisable to fill in SessionId to ensure subsequent repeated tasks fail.
     * @param integer $RoomIdType Type of the TRTC room number. 0 indicates digit room number, 1 indicates string room number. by default if left blank, it is digit room number.
     * @param RecognizeConfig $RecognizeConfig Speech recognition configuration.
     * @param TranslationConfig $TranslationConfig Translate configuration details.
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

        if (array_key_exists("TranslationConfig",$param) and $param["TranslationConfig"] !== null) {
            $this->TranslationConfig = new TranslationConfig();
            $this->TranslationConfig->deserialize($param["TranslationConfig"]);
        }
    }
}
