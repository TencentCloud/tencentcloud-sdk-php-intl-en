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
 * Control parameter of terrorism information detection task.
 *
 * @method TerrorismImgReviewTemplateInfoForUpdate getImgReviewInfo() Obtain Control parameter of terrorism information detection in video image task.
 * @method void setImgReviewInfo(TerrorismImgReviewTemplateInfoForUpdate $ImgReviewInfo) Set Control parameter of terrorism information detection in video image task.
 * @method TerrorismOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Control parameter of terrorism information detection in text task.
 * @method void setOcrReviewInfo(TerrorismOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Control parameter of terrorism information detection in text task.
 */
class TerrorismConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var TerrorismImgReviewTemplateInfoForUpdate Control parameter of terrorism information detection in video image task.
     */
    public $ImgReviewInfo;

    /**
     * @var TerrorismOcrReviewTemplateInfoForUpdate Control parameter of terrorism information detection in text task.
     */
    public $OcrReviewInfo;

    /**
     * @param TerrorismImgReviewTemplateInfoForUpdate $ImgReviewInfo Control parameter of terrorism information detection in video image task.
     * @param TerrorismOcrReviewTemplateInfoForUpdate $OcrReviewInfo Control parameter of terrorism information detection in text task.
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
