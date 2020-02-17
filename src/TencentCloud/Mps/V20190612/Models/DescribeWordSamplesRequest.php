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
 * @method array getUsages() Obtain <b>Keyword use case filter. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
Multiple elements can be selected, and the relationship between them is "or", i.e., any keyword use case that contains any element in this field set will be deemed eligible.
 * @method void setUsages(array $Usages) Set <b>Keyword use case filter. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
Multiple elements can be selected, and the relationship between them is "or", i.e., any keyword use case that contains any element in this field set will be deemed eligible.
 * @method array getKeywords() Obtain Keyword filter. Array length limit: 100 words.
 * @method void setKeywords(array $Keywords) Set Keyword filter. Array length limit: 100 words.
 * @method array getTags() Obtain Tag filter. Array length limit: 20 words.
 * @method void setTags(array $Tags) Set Tag filter. Array length limit: 20 words.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 100. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 100. Maximum value: 100.
 */

/**
 *DescribeWordSamples request structure.
 */
class DescribeWordSamplesRequest extends AbstractModel
{
    /**
     * @var array <b>Keyword use case filter. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
Multiple elements can be selected, and the relationship between them is "or", i.e., any keyword use case that contains any element in this field set will be deemed eligible.
     */
    public $Usages;

    /**
     * @var array Keyword filter. Array length limit: 100 words.
     */
    public $Keywords;

    /**
     * @var array Tag filter. Array length limit: 20 words.
     */
    public $Tags;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 100. Maximum value: 100.
     */
    public $Limit;
    /**
     * @param array $Usages <b>Keyword use case filter. Valid values:</b>
1. Recognition.Ocr: OCR-based content recognition;
2. Recognition.Asr: ASR-based content recognition;
3. Review.Ocr: OCR-based content audit;
4. Review.Asr: ASR-based content audit;
<b>These values can be merged as follows:</b>
5. Recognition: ASR-based and OCR-based content recognition, which is equivalent to 1+2 above;
6. Review: ASR-based and OCR-based content audit, which is equivalent to 3+4 above;
Multiple elements can be selected, and the relationship between them is "or", i.e., any keyword use case that contains any element in this field set will be deemed eligible.
     * @param array $Keywords Keyword filter. Array length limit: 100 words.
     * @param array $Tags Tag filter. Array length limit: 20 words.
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 100. Maximum value: 100.
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
        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
