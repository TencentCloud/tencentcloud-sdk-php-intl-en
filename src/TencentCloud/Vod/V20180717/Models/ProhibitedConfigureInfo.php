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
 * Control parameter of prohibited information detection task
 *
 * @method ProhibitedAsrReviewTemplateInfo getAsrReviewInfo() Obtain Voice prohibition control parameter.
 * @method void setAsrReviewInfo(ProhibitedAsrReviewTemplateInfo $AsrReviewInfo) Set Voice prohibition control parameter.
 * @method ProhibitedOcrReviewTemplateInfo getOcrReviewInfo() Obtain Text prohibited control parameters.
 * @method void setOcrReviewInfo(ProhibitedOcrReviewTemplateInfo $OcrReviewInfo) Set Text prohibited control parameters.
 */
class ProhibitedConfigureInfo extends AbstractModel
{
    /**
     * @var ProhibitedAsrReviewTemplateInfo Voice prohibition control parameter.
     */
    public $AsrReviewInfo;

    /**
     * @var ProhibitedOcrReviewTemplateInfo Text prohibited control parameters.
     */
    public $OcrReviewInfo;

    /**
     * @param ProhibitedAsrReviewTemplateInfo $AsrReviewInfo Voice prohibition control parameter.
     * @param ProhibitedOcrReviewTemplateInfo $OcrReviewInfo Text prohibited control parameters.
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
            $this->AsrReviewInfo = new ProhibitedAsrReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new ProhibitedOcrReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
