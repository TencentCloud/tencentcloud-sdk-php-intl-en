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
 * CreateWordSamples request structure.
 *
 * @method array getUsages() Obtain <b>Keyword application scenario, available values: </b>
1. Recognition.Ocr: Perform content recognition using OCR.
2. Recognition.Asr: Perform content recognition using audio recognition technology.
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition using OCR and audio recognition technology, equivalent to 1+2.
6. Review: Perform inappropriate content recognition using OCR and audio recognition technology, equivalent to 3+4.
7. All: Perform content recognition and inappropriate content recognition through OCR and audio recognition technology, equivalent to 1+2+3+4.
 * @method void setUsages(array $Usages) Set <b>Keyword application scenario, available values: </b>
1. Recognition.Ocr: Perform content recognition using OCR.
2. Recognition.Asr: Perform content recognition using audio recognition technology.
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition using OCR and audio recognition technology, equivalent to 1+2.
6. Review: Perform inappropriate content recognition using OCR and audio recognition technology, equivalent to 3+4.
7. All: Perform content recognition and inappropriate content recognition through OCR and audio recognition technology, equivalent to 1+2+3+4.
 * @method array getWords() Obtain Keyword, array length limit: 100.
 * @method void setWords(array $Words) Set Keyword, array length limit: 100.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 */
class CreateWordSamplesRequest extends AbstractModel
{
    /**
     * @var array <b>Keyword application scenario, available values: </b>
1. Recognition.Ocr: Perform content recognition using OCR.
2. Recognition.Asr: Perform content recognition using audio recognition technology.
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition using OCR and audio recognition technology, equivalent to 1+2.
6. Review: Perform inappropriate content recognition using OCR and audio recognition technology, equivalent to 3+4.
7. All: Perform content recognition and inappropriate content recognition through OCR and audio recognition technology, equivalent to 1+2+3+4.
     */
    public $Usages;

    /**
     * @var array Keyword, array length limit: 100.
     */
    public $Words;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @param array $Usages <b>Keyword application scenario, available values: </b>
1. Recognition.Ocr: Perform content recognition using OCR.
2. Recognition.Asr: Perform content recognition using audio recognition technology.
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition using OCR and audio recognition technology, equivalent to 1+2.
6. Review: Perform inappropriate content recognition using OCR and audio recognition technology, equivalent to 3+4.
7. All: Perform content recognition and inappropriate content recognition through OCR and audio recognition technology, equivalent to 1+2+3+4.
     * @param array $Words Keyword, array length limit: 100.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
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

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new AiSampleWordInfo();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
