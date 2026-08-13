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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI video intelligent analysis input parameter types
 *
 * @method integer getDefinition() Obtain Video content analysis template ID.
 * @method void setDefinition(integer $Definition) Set Video content analysis template ID.
 * @method string getExtendedParameter() Obtain Additional parameters, whose value is a serialized json string.
Note: This parameter is used to meet customization requirements. See the following:
[Smart Erase Tutorial](https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1)
[Video Splitting (Long Videos to Short Videos) Tutorial](https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1)
[Intelligent Highlights Tutorial](https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1)
[Horizontal-to-Video Transformation](https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1)
 * @method void setExtendedParameter(string $ExtendedParameter) Set Additional parameters, whose value is a serialized json string.
Note: This parameter is used to meet customization requirements. See the following:
[Smart Erase Tutorial](https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1)
[Video Splitting (Long Videos to Short Videos) Tutorial](https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1)
[Intelligent Highlights Tutorial](https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1)
[Horizontal-to-Video Transformation](https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1)
 */
class AiAnalysisTaskInput extends AbstractModel
{
    /**
     * @var integer Video content analysis template ID.
     */
    public $Definition;

    /**
     * @var string Additional parameters, whose value is a serialized json string.
Note: This parameter is used to meet customization requirements. See the following:
[Smart Erase Tutorial](https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1)
[Video Splitting (Long Videos to Short Videos) Tutorial](https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1)
[Intelligent Highlights Tutorial](https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1)
[Horizontal-to-Video Transformation](https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1)
     */
    public $ExtendedParameter;

    /**
     * @param integer $Definition Video content analysis template ID.
     * @param string $ExtendedParameter Additional parameters, whose value is a serialized json string.
Note: This parameter is used to meet customization requirements. See the following:
[Smart Erase Tutorial](https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1)
[Video Splitting (Long Videos to Short Videos) Tutorial](https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1)
[Intelligent Highlights Tutorial](https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1)
[Horizontal-to-Video Transformation](https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1)
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }
    }
}
