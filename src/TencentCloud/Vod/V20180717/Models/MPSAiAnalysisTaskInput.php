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
 * AI smart video analysis input parameter type
 *
 * @method integer getDefinition() Obtain <p>ID of the video analysis template.</p>
 * @method void setDefinition(integer $Definition) Set <p>ID of the video analysis template.</p>
 * @method string getExtendedParameter() Obtain <p>Additional parameters, whose value is a serialized json string. Note: This parameter is for customization requirements. See the following: <a href="https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1">Intelligent Erasure</a><a href="https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1">Intelligent Splitting</a><a href="https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1">Highlight</a><a href="https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1">Intelligent Landscape-to-Portrait</a></p>
 * @method void setExtendedParameter(string $ExtendedParameter) Set <p>Additional parameters, whose value is a serialized json string. Note: This parameter is for customization requirements. See the following: <a href="https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1">Intelligent Erasure</a><a href="https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1">Intelligent Splitting</a><a href="https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1">Highlight</a><a href="https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1">Intelligent Landscape-to-Portrait</a></p>
 */
class MPSAiAnalysisTaskInput extends AbstractModel
{
    /**
     * @var integer <p>ID of the video analysis template.</p>
     */
    public $Definition;

    /**
     * @var string <p>Additional parameters, whose value is a serialized json string. Note: This parameter is for customization requirements. See the following: <a href="https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1">Intelligent Erasure</a><a href="https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1">Intelligent Splitting</a><a href="https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1">Highlight</a><a href="https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1">Intelligent Landscape-to-Portrait</a></p>
     */
    public $ExtendedParameter;

    /**
     * @param integer $Definition <p>ID of the video analysis template.</p>
     * @param string $ExtendedParameter <p>Additional parameters, whose value is a serialized json string. Note: This parameter is for customization requirements. See the following: <a href="https://www.tencentcloud.com/document/product/862/101530?from_cn_redirect=1">Intelligent Erasure</a><a href="https://www.tencentcloud.com/document/product/862/112098?from_cn_redirect=1">Intelligent Splitting</a><a href="https://www.tencentcloud.com/document/product/862/107280?from_cn_redirect=1">Highlight</a><a href="https://www.tencentcloud.com/document/product/862/112112?from_cn_redirect=1">Intelligent Landscape-to-Portrait</a></p>
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
