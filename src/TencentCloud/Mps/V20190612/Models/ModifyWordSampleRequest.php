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
 * ModifyWordSample request structure.
 *
 * @method string getKeyword() Obtain Keyword. Length limit: 128 characters.
 * @method void setKeyword(string $Keyword) Set Keyword. Length limit: 128 characters.
 * @method array getUsages() Obtain <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
7. All: ASR-based and OCR-based content recognition and audit, which is equivalent to 1+2+3+4 above;
 * @method void setUsages(array $Usages) Set <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
7. All: ASR-based and OCR-based content recognition and audit, which is equivalent to 1+2+3+4 above;
 * @method AiSampleTagOperation getTagOperationInfo() Obtain Tag operation information.
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) Set Tag operation information.
 */
class ModifyWordSampleRequest extends AbstractModel
{
    /**
     * @var string Keyword. Length limit: 128 characters.
     */
    public $Keyword;

    /**
     * @var array <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
7. All: ASR-based and OCR-based content recognition and audit, which is equivalent to 1+2+3+4 above;
     */
    public $Usages;

    /**
     * @var AiSampleTagOperation Tag operation information.
     */
    public $TagOperationInfo;

    /**
     * @param string $Keyword Keyword. Length limit: 128 characters.
     * @param array $Usages <b>Keyword use case. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
7. All: ASR-based and OCR-based content recognition and audit, which is equivalent to 1+2+3+4 above;
     * @param AiSampleTagOperation $TagOperationInfo Tag operation information.
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("TagOperationInfo",$param) and $param["TagOperationInfo"] !== null) {
            $this->TagOperationInfo = new AiSampleTagOperation();
            $this->TagOperationInfo->deserialize($param["TagOperationInfo"]);
        }
    }
}
