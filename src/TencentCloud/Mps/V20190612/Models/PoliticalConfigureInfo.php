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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method PoliticalImgReviewTemplateInfo getImgReviewInfo() Obtain Control parameter of politically sensitive information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImgReviewInfo(PoliticalImgReviewTemplateInfo $ImgReviewInfo) Set Control parameter of politically sensitive information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PoliticalAsrReviewTemplateInfo getAsrReviewInfo() Obtain Control parameter of politically sensitive information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrReviewInfo(PoliticalAsrReviewTemplateInfo $AsrReviewInfo) Set Control parameter of politically sensitive information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PoliticalOcrReviewTemplateInfo getOcrReviewInfo() Obtain Control parameter of politically sensitive information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcrReviewInfo(PoliticalOcrReviewTemplateInfo $OcrReviewInfo) Set Control parameter of politically sensitive information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Control parameter of a politically sensitive information detection task
 */
class PoliticalConfigureInfo extends AbstractModel
{
    /**
     * @var PoliticalImgReviewTemplateInfo Control parameter of politically sensitive information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImgReviewInfo;

    /**
     * @var PoliticalAsrReviewTemplateInfo Control parameter of politically sensitive information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrReviewInfo;

    /**
     * @var PoliticalOcrReviewTemplateInfo Control parameter of politically sensitive information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcrReviewInfo;
    /**
     * @param PoliticalImgReviewTemplateInfo $ImgReviewInfo Control parameter of politically sensitive information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PoliticalAsrReviewTemplateInfo $AsrReviewInfo Control parameter of politically sensitive information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PoliticalOcrReviewTemplateInfo $OcrReviewInfo Control parameter of politically sensitive information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ImgReviewInfo",$param) and $param["ImgReviewInfo"] !== null) {
            $this->ImgReviewInfo = new PoliticalImgReviewTemplateInfo();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new PoliticalAsrReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new PoliticalOcrReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
