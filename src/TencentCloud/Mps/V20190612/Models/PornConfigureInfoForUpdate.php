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
 * Control parameter of a porn information detection task.
 *
 * @method PornImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain Control parameter of porn information detection in image.
 * @method void setImgReviewInfo(PornImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set Control parameter of porn information detection in image.
 * @method PornAsrReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Control parameter of porn information detection in speech.
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo) Set Control parameter of porn information detection in speech.
 * @method PornOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Control parameter of porn information detection in text.
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Control parameter of porn information detection in text.
 */
class PornConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfoForUpdate Control parameter of porn information detection in image.
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfoForUpdate Control parameter of porn information detection in speech.
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfoForUpdate Control parameter of porn information detection in text.
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfoForUpdate $ImgReviewInfo Control parameter of porn information detection in image.
     * @param PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo Control parameter of porn information detection in speech.
     * @param PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo Control parameter of porn information detection in text.
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
