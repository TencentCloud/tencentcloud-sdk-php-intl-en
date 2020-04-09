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
 * Control parameter of a politically sensitive information detection task.
 *
 * @method PoliticalImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain Control parameter of politically sensitive information detection in image.
 * @method void setImgReviewInfo(PoliticalImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set Control parameter of politically sensitive information detection in image.
 * @method PoliticalAsrReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Control parameter of politically sensitive information detection in speech.
 * @method void setAsrReviewInfo(PoliticalAsrReviewTemplateInfoForUpdate $AsrReviewInfo) Set Control parameter of politically sensitive information detection in speech.
 * @method PoliticalOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Control parameter of politically sensitive information detection in text.
 * @method void setOcrReviewInfo(PoliticalOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Control parameter of politically sensitive information detection in text.
 */
class PoliticalConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var PoliticalImgReviewTemplateInfoForUpdate Control parameter of politically sensitive information detection in image.
     */
    public $ImgReviewInfo;

    /**
     * @var PoliticalAsrReviewTemplateInfoForUpdate Control parameter of politically sensitive information detection in speech.
     */
    public $AsrReviewInfo;

    /**
     * @var PoliticalOcrReviewTemplateInfoForUpdate Control parameter of politically sensitive information detection in text.
     */
    public $OcrReviewInfo;

    /**
     * @param PoliticalImgReviewTemplateInfoForUpdate $ImgReviewInfo Control parameter of politically sensitive information detection in image.
     * @param PoliticalAsrReviewTemplateInfoForUpdate $AsrReviewInfo Control parameter of politically sensitive information detection in speech.
     * @param PoliticalOcrReviewTemplateInfoForUpdate $OcrReviewInfo Control parameter of politically sensitive information detection in text.
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
