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
 * @method PornImgReviewTemplateInfo getImgReviewInfo() Obtain Image recognition involves control parameters for offensive information.
 * @method void setImgReviewInfo(PornImgReviewTemplateInfo $ImgReviewInfo) Set Image recognition involves control parameters for offensive information.
 * @method PornAsrReviewTemplateInfo getAsrReviewInfo() Obtain ASR-based recognition involves control parameters for offensive information.
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfo $AsrReviewInfo) Set ASR-based recognition involves control parameters for offensive information.
 * @method PornOcrReviewTemplateInfo getOcrReviewInfo() Obtain Text recognition involves control parameters for offensive information.
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfo $OcrReviewInfo) Set Text recognition involves control parameters for offensive information.
 */
class PornConfigureInfo extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfo Image recognition involves control parameters for offensive information.
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfo ASR-based recognition involves control parameters for offensive information.
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfo Text recognition involves control parameters for offensive information.
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfo $ImgReviewInfo Image recognition involves control parameters for offensive information.
     * @param PornAsrReviewTemplateInfo $AsrReviewInfo ASR-based recognition involves control parameters for offensive information.
     * @param PornOcrReviewTemplateInfo $OcrReviewInfo Text recognition involves control parameters for offensive information.
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
