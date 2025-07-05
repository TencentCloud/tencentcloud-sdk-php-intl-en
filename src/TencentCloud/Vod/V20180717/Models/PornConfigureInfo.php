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
 * Parameters for recognition of pornographic content
 *
 * @method PornImgReviewTemplateInfo getImgReviewInfo() Obtain Parameters for recognition of pornographic content in images
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setImgReviewInfo(PornImgReviewTemplateInfo $ImgReviewInfo) Set Parameters for recognition of pornographic content in images
Note: This field may return `null`, indicating that no valid value can be found.
 * @method PornAsrReviewTemplateInfo getAsrReviewInfo() Obtain Parameters for ASR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfo $AsrReviewInfo) Set Parameters for ASR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method PornOcrReviewTemplateInfo getOcrReviewInfo() Obtain Parameters for OCR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfo $OcrReviewInfo) Set Parameters for OCR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
 */
class PornConfigureInfo extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfo Parameters for recognition of pornographic content in images
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfo Parameters for ASR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfo Parameters for OCR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfo $ImgReviewInfo Parameters for recognition of pornographic content in images
Note: This field may return `null`, indicating that no valid value can be found.
     * @param PornAsrReviewTemplateInfo $AsrReviewInfo Parameters for ASR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
     * @param PornOcrReviewTemplateInfo $OcrReviewInfo Parameters for OCR-based recognition of pornographic content
Note: This field may return `null`, indicating that no valid value can be found.
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
            $this->ImgReviewInfo = new PornImgReviewTemplateInfo();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new PornAsrReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new PornOcrReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
