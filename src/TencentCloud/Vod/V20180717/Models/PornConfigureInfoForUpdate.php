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
 * Task control parameters for authentication involving offensive content.
 *
 * @method PornImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain Image recognition involves control parameters for offensive information.
 * @method void setImgReviewInfo(PornImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set Image recognition involves control parameters for offensive information.
 * @method PornAsrReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Control parameters for offensive information involved in ASR-based recognition.
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo) Set Control parameters for offensive information involved in ASR-based recognition.
 * @method PornOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Control parameters for text recognition involving offensive content.
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Control parameters for text recognition involving offensive content.
 */
class PornConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfoForUpdate Image recognition involves control parameters for offensive information.
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfoForUpdate Control parameters for offensive information involved in ASR-based recognition.
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfoForUpdate Control parameters for text recognition involving offensive content.
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfoForUpdate $ImgReviewInfo Image recognition involves control parameters for offensive information.
     * @param PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo Control parameters for offensive information involved in ASR-based recognition.
     * @param PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo Control parameters for text recognition involving offensive content.
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
            $this->ImgReviewInfo = new PornImgReviewTemplateInfoForUpdate();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new PornAsrReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new PornOcrReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
