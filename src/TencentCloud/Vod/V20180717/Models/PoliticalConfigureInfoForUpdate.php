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
 * Control parameters for authentication involving inappropriate information.
 *
 * @method PoliticalImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain Control parameters for image recognition involving inappropriate information.
 * @method void setImgReviewInfo(PoliticalImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set Control parameters for image recognition involving inappropriate information.
 * @method PoliticalAsrReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Control parameters for ASR-based recognition involving inappropriate information.
 * @method void setAsrReviewInfo(PoliticalAsrReviewTemplateInfoForUpdate $AsrReviewInfo) Set Control parameters for ASR-based recognition involving inappropriate information.
 * @method PoliticalOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Control parameters for text recognition involving inappropriate information.
 * @method void setOcrReviewInfo(PoliticalOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Control parameters for text recognition involving inappropriate information.
 */
class PoliticalConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var PoliticalImgReviewTemplateInfoForUpdate Control parameters for image recognition involving inappropriate information.
     */
    public $ImgReviewInfo;

    /**
     * @var PoliticalAsrReviewTemplateInfoForUpdate Control parameters for ASR-based recognition involving inappropriate information.
     */
    public $AsrReviewInfo;

    /**
     * @var PoliticalOcrReviewTemplateInfoForUpdate Control parameters for text recognition involving inappropriate information.
     */
    public $OcrReviewInfo;

    /**
     * @param PoliticalImgReviewTemplateInfoForUpdate $ImgReviewInfo Control parameters for image recognition involving inappropriate information.
     * @param PoliticalAsrReviewTemplateInfoForUpdate $AsrReviewInfo Control parameters for ASR-based recognition involving inappropriate information.
     * @param PoliticalOcrReviewTemplateInfoForUpdate $OcrReviewInfo Control parameters for text recognition involving inappropriate information.
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
