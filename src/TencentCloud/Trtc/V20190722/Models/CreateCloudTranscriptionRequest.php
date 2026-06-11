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
 * @method integer getSdkAppId() Obtain <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC is the same as the SdkAppId corresponding to the transcribe room.</p>
 * @method void setSdkAppId(integer $SdkAppId) Set <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC is the same as the SdkAppId corresponding to the transcribe room.</p>
 * @method string getRoomId() Obtain <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid">RoomId</a> of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it through RoomIdType.</p>
 * @method void setRoomId(string $RoomId) Set <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid">RoomId</a> of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it through RoomIdType.</p>
 * @method integer getRoomIdType() Obtain <p>The room information RoomType must be identical to the data type of the RoomId corresponding to the transcribed room. 0 indicates an integer room number, and 1 indicates a string Room Number.</p>
 * @method void setRoomIdType(integer $RoomIdType) Set <p>The room information RoomType must be identical to the data type of the RoomId corresponding to the transcribed room. 0 indicates an integer room number, and 1 indicates a string Room Number.</p>
 * @method TranscriptionParam getTranscriptionParam() Obtain <p>Parameters for the transcribe service to join TRTC room.</p>
 * @method void setTranscriptionParam(TranscriptionParam $TranscriptionParam) Set <p>Parameters for the transcribe service to join TRTC room.</p>
 * @method AsrParam getAsrParam() Obtain <p>Parameters used by the ASR transcribe service.</p>
 * @method void setAsrParam(AsrParam $AsrParam) Set <p>Parameters used by the ASR transcribe service.</p>
 * @method TranslationParam getTranslationParam() Obtain <p>Parameters used to transcribe the translation service.</p>
 * @method void setTranslationParam(TranslationParam $TranslationParam) Set <p>Parameters used to transcribe the translation service.</p>
 * @method array getTTSParam() Obtain <p>Parameters used by the TTS transcribe service.</p>
 * @method void setTTSParam(array $TTSParam) Set <p>Parameters used by the TTS transcribe service.</p>
 */
class CreateCloudTranscriptionRequest extends AbstractModel
{
    /**
     * @var integer <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC is the same as the SdkAppId corresponding to the transcribe room.</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid">RoomId</a> of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it through RoomIdType.</p>
     */
    public $RoomId;

    /**
     * @var integer <p>The room information RoomType must be identical to the data type of the RoomId corresponding to the transcribed room. 0 indicates an integer room number, and 1 indicates a string Room Number.</p>
     */
    public $RoomIdType;

    /**
     * @var TranscriptionParam <p>Parameters for the transcribe service to join TRTC room.</p>
     */
    public $TranscriptionParam;

    /**
     * @var AsrParam <p>Parameters used by the ASR transcribe service.</p>
     */
    public $AsrParam;

    /**
     * @var TranslationParam <p>Parameters used to transcribe the translation service.</p>
     */
    public $TranslationParam;

    /**
     * @var array <p>Parameters used by the TTS transcribe service.</p>
     */
    public $TTSParam;

    /**
     * @param integer $SdkAppId <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid">SdkAppId</a> of TRTC is the same as the SdkAppId corresponding to the transcribe room.</p>
     * @param string $RoomId <p>The <a href="https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid">RoomId</a> of TRTC, which is the RoomId corresponding to the transcribed TRTC room. Note: The room ID type defaults to integer. If the room ID type is string, specify it through RoomIdType.</p>
     * @param integer $RoomIdType <p>The room information RoomType must be identical to the data type of the RoomId corresponding to the transcribed room. 0 indicates an integer room number, and 1 indicates a string Room Number.</p>
     * @param TranscriptionParam $TranscriptionParam <p>Parameters for the transcribe service to join TRTC room.</p>
     * @param AsrParam $AsrParam <p>Parameters used by the ASR transcribe service.</p>
     * @param TranslationParam $TranslationParam <p>Parameters used to transcribe the translation service.</p>
     * @param array $TTSParam <p>Parameters used by the TTS transcribe service.</p>
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

        if (array_key_exists("TTSParam",$param) and $param["TTSParam"] !== null) {
            $this->TTSParam = [];
            foreach ($param["TTSParam"] as $key => $value){
                $obj = new TTSParam();
                $obj->deserialize($value);
                array_push($this->TTSParam, $obj);
            }
        }
    }
}
