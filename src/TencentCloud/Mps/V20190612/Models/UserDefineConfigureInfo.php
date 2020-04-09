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
 * Control parameter of a custom audit task
 *
 * @method UserDefineFaceReviewTemplateInfo getFaceReviewInfo() Obtain Control parameter of custom figure audit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfo $FaceReviewInfo) Set Control parameter of custom figure audit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method UserDefineAsrTextReviewTemplateInfo getAsrReviewInfo() Obtain Control parameter of custom speech audit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo) Set Control parameter of custom speech audit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method UserDefineOcrTextReviewTemplateInfo getOcrReviewInfo() Obtain Control parameter of custom text audit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo) Set Control parameter of custom text audit.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserDefineConfigureInfo extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfo Control parameter of custom figure audit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfo Control parameter of custom speech audit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfo Control parameter of custom text audit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfo $FaceReviewInfo Control parameter of custom figure audit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo Control parameter of custom speech audit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo Control parameter of custom text audit.
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
        if (array_key_exists("FaceReviewInfo",$param) and $param["FaceReviewInfo"] !== null) {
            $this->FaceReviewInfo = new UserDefineFaceReviewTemplateInfo();
            $this->FaceReviewInfo->deserialize($param["FaceReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new UserDefineAsrTextReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new UserDefineOcrTextReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
