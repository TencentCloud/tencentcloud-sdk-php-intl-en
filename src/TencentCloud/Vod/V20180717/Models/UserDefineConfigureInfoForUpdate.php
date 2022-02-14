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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameters for custom recognition
 *
 * @method UserDefineFaceReviewTemplateInfoForUpdate getFaceReviewInfo() Obtain Parameters for custom facial recognition
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo) Set Parameters for custom facial recognition
 * @method UserDefineAsrTextReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Parameters for custom ASR-based recognition
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo) Set Parameters for custom ASR-based recognition
 * @method UserDefineOcrTextReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Parameters for custom OCR-based recognition
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo) Set Parameters for custom OCR-based recognition
 */
class UserDefineConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfoForUpdate Parameters for custom facial recognition
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfoForUpdate Parameters for custom ASR-based recognition
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfoForUpdate Parameters for custom OCR-based recognition
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo Parameters for custom facial recognition
     * @param UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo Parameters for custom ASR-based recognition
     * @param UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo Parameters for custom OCR-based recognition
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
