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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User-customized control parameters for audio/video moderation tasks
 *
 * @method UserDefineFaceReviewTemplateInfo getFaceReviewInfo() Obtain Control parameter for user-defined character audio/video moderation.
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfo $FaceReviewInfo) Set Control parameter for user-defined character audio/video moderation.
 * @method UserDefineAsrTextReviewTemplateInfo getAsrReviewInfo() Obtain User-customized voice audio and video review control parameter.
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo) Set User-customized voice audio and video review control parameter.
 * @method UserDefineOcrTextReviewTemplateInfo getOcrReviewInfo() Obtain User-customized text, audio, and video moderation control parameters.
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo) Set User-customized text, audio, and video moderation control parameters.
 */
class UserDefineConfigureInfo extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfo Control parameter for user-defined character audio/video moderation.
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfo User-customized voice audio and video review control parameter.
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfo User-customized text, audio, and video moderation control parameters.
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfo $FaceReviewInfo Control parameter for user-defined character audio/video moderation.
     * @param UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo User-customized voice audio and video review control parameter.
     * @param UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo User-customized text, audio, and video moderation control parameters.
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
        if (array_key_exists("FaceReviewInfo",$param) and $param["FaceReviewInfo"] !== null) {
            $this->FaceReviewInfo = new UserDefineFaceReviewTemplateInfo();
            $this->FaceReviewInfo->deserialize($param["FaceReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new UserDefineAsrTextReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new UserDefineOcrTextReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
