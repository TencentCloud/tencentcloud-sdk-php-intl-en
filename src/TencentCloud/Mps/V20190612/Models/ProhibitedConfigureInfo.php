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
 * 
 *
 * @method ProhibitedAsrReviewTemplateInfo getAsrReviewInfo() Obtain 
 * @method void setAsrReviewInfo(ProhibitedAsrReviewTemplateInfo $AsrReviewInfo) Set 
 * @method ProhibitedOcrReviewTemplateInfo getOcrReviewInfo() Obtain 
 * @method void setOcrReviewInfo(ProhibitedOcrReviewTemplateInfo $OcrReviewInfo) Set 
 */
class ProhibitedConfigureInfo extends AbstractModel
{
    /**
     * @var ProhibitedAsrReviewTemplateInfo 
     */
    public $AsrReviewInfo;

    /**
     * @var ProhibitedOcrReviewTemplateInfo 
     */
    public $OcrReviewInfo;

    /**
     * @param ProhibitedAsrReviewTemplateInfo $AsrReviewInfo 
     * @param ProhibitedOcrReviewTemplateInfo $OcrReviewInfo 
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