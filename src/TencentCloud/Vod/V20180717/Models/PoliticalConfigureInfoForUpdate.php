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
 * Parameters for recognition of politically sensitive content
 *
 * @method PoliticalImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain Parameters for recognition of politically sensitive content in images
 * @method void setImgReviewInfo(PoliticalImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set Parameters for recognition of politically sensitive content in images
 * @method PoliticalAsrReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Parameters for ASR-based recognition of politically sensitive content
 * @method void setAsrReviewInfo(PoliticalAsrReviewTemplateInfoForUpdate $AsrReviewInfo) Set Parameters for ASR-based recognition of politically sensitive content
 * @method PoliticalOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Parameters for OCR-based recognition of politically sensitive content
 * @method void setOcrReviewInfo(PoliticalOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Parameters for OCR-based recognition of politically sensitive content
 */
class PoliticalConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var PoliticalImgReviewTemplateInfoForUpdate Parameters for recognition of politically sensitive content in images
     */
    public $ImgReviewInfo;

    /**
     * @var PoliticalAsrReviewTemplateInfoForUpdate Parameters for ASR-based recognition of politically sensitive content
     */
    public $AsrReviewInfo;

    /**
     * @var PoliticalOcrReviewTemplateInfoForUpdate Parameters for OCR-based recognition of politically sensitive content
     */
    public $OcrReviewInfo;

    /**
     * @param PoliticalImgReviewTemplateInfoForUpdate $ImgReviewInfo Parameters for recognition of politically sensitive content in images
     * @param PoliticalAsrReviewTemplateInfoForUpdate $AsrReviewInfo Parameters for ASR-based recognition of politically sensitive content
     * @param PoliticalOcrReviewTemplateInfoForUpdate $OcrReviewInfo Parameters for OCR-based recognition of politically sensitive content
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
            $this->ImgReviewInfo = new PoliticalImgReviewTemplateInfoForUpdate();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new PoliticalAsrReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new PoliticalOcrReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
