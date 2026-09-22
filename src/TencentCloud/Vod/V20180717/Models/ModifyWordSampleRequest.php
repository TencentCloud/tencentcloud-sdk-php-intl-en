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
 * ModifyWordSample request structure.
 *
 * @method string getKeyword() Obtain Keyword. Length limited to 128 characters.
 * @method void setKeyword(string $Keyword) Set Keyword. Length limited to 128 characters.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method array getUsages() Obtain <b>Keyword application scenario. Available values:</b>
1. Recognition.Ocr: Perform content recognition through OCR.
2. Recognition.Asr: perform content recognition through audio recognition technology;
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition through OCR and audio recognition technology, equivalent to 1+2;
6. Review: Perform inappropriate content recognition through OCR and audio recognition technology, equivalent to 3+4.
7. All: include all of the above, equivalent to 1+2+3+4.
 * @method void setUsages(array $Usages) Set <b>Keyword application scenario. Available values:</b>
1. Recognition.Ocr: Perform content recognition through OCR.
2. Recognition.Asr: perform content recognition through audio recognition technology;
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition through OCR and audio recognition technology, equivalent to 1+2;
6. Review: Perform inappropriate content recognition through OCR and audio recognition technology, equivalent to 3+4.
7. All: include all of the above, equivalent to 1+2+3+4.
 * @method AiSampleTagOperation getTagOperationInfo() Obtain Tag operation information.
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) Set Tag operation information.
 */
class ModifyWordSampleRequest extends AbstractModel
{
    /**
     * @var string Keyword. Length limited to 128 characters.
     */
    public $Keyword;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var array <b>Keyword application scenario. Available values:</b>
1. Recognition.Ocr: Perform content recognition through OCR.
2. Recognition.Asr: perform content recognition through audio recognition technology;
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition through OCR and audio recognition technology, equivalent to 1+2;
6. Review: Perform inappropriate content recognition through OCR and audio recognition technology, equivalent to 3+4.
7. All: include all of the above, equivalent to 1+2+3+4.
     */
    public $Usages;

    /**
     * @var AiSampleTagOperation Tag operation information.
     */
    public $TagOperationInfo;

    /**
     * @param string $Keyword Keyword. Length limited to 128 characters.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param array $Usages <b>Keyword application scenario. Available values:</b>
1. Recognition.Ocr: Perform content recognition through OCR.
2. Recognition.Asr: perform content recognition through audio recognition technology;
3. Review.Ocr: Perform inappropriate content recognition using OCR.
4. Review.Asr: Perform inappropriate content recognition through audio recognition technology.
<b>Can be abbreviated as:</b>
5. Recognition: Perform content recognition through OCR and audio recognition technology, equivalent to 1+2;
6. Review: Perform inappropriate content recognition through OCR and audio recognition technology, equivalent to 3+4.
7. All: include all of the above, equivalent to 1+2+3+4.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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
