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
 * Prohibited task control parameter
 *
 * @method ProhibitedAsrReviewTemplateInfoForUpdate getAsrReviewInfo() Obtain Voice prohibition control parameters.
 * @method void setAsrReviewInfo(ProhibitedAsrReviewTemplateInfoForUpdate $AsrReviewInfo) Set Voice prohibition control parameters.
 * @method ProhibitedOcrReviewTemplateInfoForUpdate getOcrReviewInfo() Obtain Prohibited control parameters for text.
 * @method void setOcrReviewInfo(ProhibitedOcrReviewTemplateInfoForUpdate $OcrReviewInfo) Set Prohibited control parameters for text.
 */
class ProhibitedConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var ProhibitedAsrReviewTemplateInfoForUpdate Voice prohibition control parameters.
     */
    public $AsrReviewInfo;

    /**
     * @var ProhibitedOcrReviewTemplateInfoForUpdate Prohibited control parameters for text.
     */
    public $OcrReviewInfo;

    /**
     * @param ProhibitedAsrReviewTemplateInfoForUpdate $AsrReviewInfo Voice prohibition control parameters.
     * @param ProhibitedOcrReviewTemplateInfoForUpdate $OcrReviewInfo Prohibited control parameters for text.
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
        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new ProhibitedAsrReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new ProhibitedOcrReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
