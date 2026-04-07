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
 * CreateCloudTranscription request structure.
 *
 * @method integer getSdkAppId() Obtain [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the transcribed room.
 * @method void setSdkAppId(integer $SdkAppId) Set [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the transcribed room.
 * @method string getRoomId() Obtain [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it via RoomIdType.
 * @method void setRoomId(string $RoomId) Set [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it via RoomIdType.
 * @method integer getRoomIdType() Obtain Room information RoomType must be the same as the RoomId type of the corresponding transcribed room. 0 indicates an integer type room ID, and 1 indicates a string Room Number.
 * @method void setRoomIdType(integer $RoomIdType) Set Room information RoomType must be the same as the RoomId type of the corresponding transcribed room. 0 indicates an integer type room ID, and 1 indicates a string Room Number.
 * @method TranscriptionParam getTranscriptionParam() Obtain Parameters for transcribe service to join TRTC room.
 * @method void setTranscriptionParam(TranscriptionParam $TranscriptionParam) Set Parameters for transcribe service to join TRTC room.
 * @method AsrParam getAsrParam() Obtain Parameters used by the ASR transcribe service.
 * @method void setAsrParam(AsrParam $AsrParam) Set Parameters used by the ASR transcribe service.
 * @method TranslationParam getTranslationParam() Obtain Translation parameters used for transcription.
 * @method void setTranslationParam(TranslationParam $TranslationParam) Set Translation parameters used for transcription.
 */
class CreateCloudTranscriptionRequest extends AbstractModel
{
    /**
     * @var integer [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the transcribed room.
     */
    public $SdkAppId;

    /**
     * @var string [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it via RoomIdType.
     */
    public $RoomId;

    /**
     * @var integer Room information RoomType must be the same as the RoomId type of the corresponding transcribed room. 0 indicates an integer type room ID, and 1 indicates a string Room Number.
     */
    public $RoomIdType;

    /**
     * @var TranscriptionParam Parameters for transcribe service to join TRTC room.
     */
    public $TranscriptionParam;

    /**
     * @var AsrParam Parameters used by the ASR transcribe service.
     */
    public $AsrParam;

    /**
     * @var TranslationParam Translation parameters used for transcription.
     */
    public $TranslationParam;

    /**
     * @param integer $SdkAppId [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the transcribed room.
     * @param string $RoomId [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it via RoomIdType.
     * @param integer $RoomIdType Room information RoomType must be the same as the RoomId type of the corresponding transcribed room. 0 indicates an integer type room ID, and 1 indicates a string Room Number.
     * @param TranscriptionParam $TranscriptionParam Parameters for transcribe service to join TRTC room.
     * @param AsrParam $AsrParam Parameters used by the ASR transcribe service.
     * @param TranslationParam $TranslationParam Translation parameters used for transcription.
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

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("TranscriptionParam",$param) and $param["TranscriptionParam"] !== null) {
            $this->TranscriptionParam = new TranscriptionParam();
            $this->TranscriptionParam->deserialize($param["TranscriptionParam"]);
        }

        if (array_key_exists("AsrParam",$param) and $param["AsrParam"] !== null) {
            $this->AsrParam = new AsrParam();
            $this->AsrParam->deserialize($param["AsrParam"]);
        }

        if (array_key_exists("TranslationParam",$param) and $param["TranslationParam"] !== null) {
            $this->TranslationParam = new TranslationParam();
            $this->TranslationParam->deserialize($param["TranslationParam"]);
        }
    }
}
