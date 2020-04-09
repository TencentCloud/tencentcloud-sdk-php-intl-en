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
 * Control parameter of a custom audit task.
 *
 * @method UserDefineFaceReviewTemplateInfoForUpdate getFaceReviewInfo() Obtain Control parameter of custom figure audit.
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo) Set Control parameter of custom figure audit.
 * @method UserDefineAsrTextReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Control parameter of custom speech audit.
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo) Set Control parameter of custom speech audit.
 * @method UserDefineOcrTextReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Control parameter of custom text audit.
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo) Set Control parameter of custom text audit.
 */
class UserDefineConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfoForUpdate Control parameter of custom figure audit.
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfoForUpdate Control parameter of custom speech audit.
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfoForUpdate Control parameter of custom text audit.
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo Control parameter of custom figure audit.
     * @param UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo Control parameter of custom speech audit.
     * @param UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo Control parameter of custom text audit.
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
            $this->FaceReviewInfo = new UserDefineFaceReviewTemplateInfoForUpdate();
            $this->FaceReviewInfo->deserialize($param["FaceReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new UserDefineAsrTextReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new UserDefineOcrTextReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
