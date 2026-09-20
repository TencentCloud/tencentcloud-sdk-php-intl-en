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
 * Control parameter for user-customized audio and video moderation tasks.
 *
 * @method UserDefineFaceReviewTemplateInfoForUpdate getFaceReviewInfo() Obtain Control parameter for user-defined character audio/video moderation.
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo) Set Control parameter for user-defined character audio/video moderation.
 * @method UserDefineAsrTextReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain User-customized control parameters for voice audio and video moderation.
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo) Set User-customized control parameters for voice audio and video moderation.
 * @method UserDefineOcrTextReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain User-defined custom text, audio, and video moderation control parameters.
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo) Set User-defined custom text, audio, and video moderation control parameters.
 */
class UserDefineConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfoForUpdate Control parameter for user-defined character audio/video moderation.
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfoForUpdate User-customized control parameters for voice audio and video moderation.
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfoForUpdate User-defined custom text, audio, and video moderation control parameters.
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo Control parameter for user-defined character audio/video moderation.
     * @param UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo User-customized control parameters for voice audio and video moderation.
     * @param UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo User-defined custom text, audio, and video moderation control parameters.
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
            $this->FaceReviewInfo = new UserDefineFaceReviewTemplateInfoForUpdate();
            $this->FaceReviewInfo->deserialize($param["FaceReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new UserDefineAsrTextReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new UserDefineOcrTextReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
