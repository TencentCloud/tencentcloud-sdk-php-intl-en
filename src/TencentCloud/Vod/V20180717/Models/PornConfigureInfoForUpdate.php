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
 * @method PornImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain 
 * @method void setImgReviewInfo(PornImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set 
 * @method PornAsrReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain 
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo) Set 
 * @method PornOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain 
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set 
 */
class PornConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfoForUpdate 
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfoForUpdate 
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfoForUpdate 
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfoForUpdate $ImgReviewInfo 
     * @param PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo 
     * @param PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo 
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
