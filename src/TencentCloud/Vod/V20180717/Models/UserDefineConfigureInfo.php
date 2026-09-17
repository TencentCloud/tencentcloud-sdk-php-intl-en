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
 * 
 *
 * @method UserDefineFaceReviewTemplateInfo getFaceReviewInfo() Obtain 
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfo $FaceReviewInfo) Set 
 * @method UserDefineAsrTextReviewTemplateInfo getAsrReviewInfo() Obtain 
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo) Set 
 * @method UserDefineOcrTextReviewTemplateInfo getOcrReviewInfo() Obtain 
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo) Set 
 */
class UserDefineConfigureInfo extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfo 
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfo 
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfo 
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfo $FaceReviewInfo 
     * @param UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo 
     * @param UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo 
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
