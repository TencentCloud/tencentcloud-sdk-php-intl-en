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
 * Parameters for recognition of terrorism content
 *
 * @method TerrorismImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain Parameters for recognition of terrorism content in images
 * @method void setImgReviewInfo(TerrorismImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set Parameters for recognition of terrorism content in images
 * @method TerrorismOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Parameters for OCR-based recognition of terrorism content
 * @method void setOcrReviewInfo(TerrorismOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Parameters for OCR-based recognition of terrorism content
 */
class TerrorismConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var TerrorismImgReviewTemplateInfoForUpdate Parameters for recognition of terrorism content in images
     */
    public $ImgReviewInfo;

    /**
     * @var TerrorismOcrReviewTemplateInfoForUpdate Parameters for OCR-based recognition of terrorism content
     */
    public $OcrReviewInfo;

    /**
     * @param TerrorismImgReviewTemplateInfoForUpdate $ImgReviewInfo Parameters for recognition of terrorism content in images
     * @param TerrorismOcrReviewTemplateInfoForUpdate $OcrReviewInfo Parameters for OCR-based recognition of terrorism content
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
            $this->ImgReviewInfo = new TerrorismImgReviewTemplateInfoForUpdate();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new TerrorismOcrReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
