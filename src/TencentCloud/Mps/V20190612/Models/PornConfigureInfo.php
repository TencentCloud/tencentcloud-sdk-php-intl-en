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
 * Control parameter of a porn information detection task
 *
 * @method PornImgReviewTemplateInfo getImgReviewInfo() Obtain Control parameter of porn information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImgReviewInfo(PornImgReviewTemplateInfo $ImgReviewInfo) Set Control parameter of porn information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PornAsrReviewTemplateInfo getAsrReviewInfo() Obtain Control parameter of porn information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfo $AsrReviewInfo) Set Control parameter of porn information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PornOcrReviewTemplateInfo getOcrReviewInfo() Obtain Control parameter of porn information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfo $OcrReviewInfo) Set Control parameter of porn information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PornConfigureInfo extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfo Control parameter of porn information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfo Control parameter of porn information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfo Control parameter of porn information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfo $ImgReviewInfo Control parameter of porn information detection in image.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PornAsrReviewTemplateInfo $AsrReviewInfo Control parameter of porn information detection in speech.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PornOcrReviewTemplateInfo $OcrReviewInfo Control parameter of porn information detection in text.
Note: This field may return null, indicating that no valid values can be obtained.
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
