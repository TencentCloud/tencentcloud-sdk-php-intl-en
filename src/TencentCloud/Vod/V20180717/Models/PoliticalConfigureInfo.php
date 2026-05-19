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
 * Parameters for recognition of politically sensitive content
 *
 * @method PoliticalImgReviewTemplateInfo getImgReviewInfo() Obtain Image recognition involves control parameters for inappropriate information.
 * @method void setImgReviewInfo(PoliticalImgReviewTemplateInfo $ImgReviewInfo) Set Image recognition involves control parameters for inappropriate information.
 * @method PoliticalAsrReviewTemplateInfo getAsrReviewInfo() Obtain ASR-based recognition involves control parameters for inappropriate information.
 * @method void setAsrReviewInfo(PoliticalAsrReviewTemplateInfo $AsrReviewInfo) Set ASR-based recognition involves control parameters for inappropriate information.
 * @method PoliticalOcrReviewTemplateInfo getOcrReviewInfo() Obtain Text recognition involves control parameters for inappropriate information.
 * @method void setOcrReviewInfo(PoliticalOcrReviewTemplateInfo $OcrReviewInfo) Set Text recognition involves control parameters for inappropriate information.
 */
class PoliticalConfigureInfo extends AbstractModel
{
    /**
     * @var PoliticalImgReviewTemplateInfo Image recognition involves control parameters for inappropriate information.
     */
    public $ImgReviewInfo;

    /**
     * @var PoliticalAsrReviewTemplateInfo ASR-based recognition involves control parameters for inappropriate information.
     */
    public $AsrReviewInfo;

    /**
     * @var PoliticalOcrReviewTemplateInfo Text recognition involves control parameters for inappropriate information.
     */
    public $OcrReviewInfo;

    /**
     * @param PoliticalImgReviewTemplateInfo $ImgReviewInfo Image recognition involves control parameters for inappropriate information.
     * @param PoliticalAsrReviewTemplateInfo $AsrReviewInfo ASR-based recognition involves control parameters for inappropriate information.
     * @param PoliticalOcrReviewTemplateInfo $OcrReviewInfo Text recognition involves control parameters for inappropriate information.
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
