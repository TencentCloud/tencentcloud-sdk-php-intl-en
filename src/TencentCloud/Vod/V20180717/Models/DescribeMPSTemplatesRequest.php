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
 * DescribeMPSTemplates request structure.
 *
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
 * @method string getTemplateType() Obtain MPS template type. Filter results by the MPS template type you want to query. Value:
<li>Transcode: Query the transcoding template list.</li>
<li>AIAnalysis: Create intelligent analysis template.</li>
<li>SmartSubtitle: Create an intelligent subtitle template.</li>
<li>SmartErase: Create an intelligent erasure template.</li>
 * @method void setTemplateType(string $TemplateType) Set MPS template type. Filter results by the MPS template type you want to query. Value:
<li>Transcode: Query the transcoding template list.</li>
<li>AIAnalysis: Create intelligent analysis template.</li>
<li>SmartSubtitle: Create an intelligent subtitle template.</li>
<li>SmartErase: Create an intelligent erasure template.</li>
 * @method string getMPSDescribeTemplateParams() Obtain MPS queries template parameters. This parameter is used for passing through to the media processing service (MPS) to query the MPS template list from the VOD side. Currently only support querying templates of the following task types via this method:
1. Audio and video enhancement: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "retrieval transcoding template list" (https://www.tencentcloud.com/document/product/862/37593?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
2. Intelligent Analysis: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Search Intelligent Analysis Template List" (https://www.tencentcloud.com/document/product/862/40247?from_cn_redirect=1) interface. Currently only support configuring the above parameters in the Template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.
3. Smart subtitling: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Get Smart Subtitling Template List" (https://www.tencentcloud.com/document/product/862/117002?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
4. Intelligent erasure: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "Search intelligent erasure template list" (https://www.tencentcloud.com/document/product/862/123733?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template. Other parameters are not required. If other parameters are included, the system will automatically ignore.
 * @method void setMPSDescribeTemplateParams(string $MPSDescribeTemplateParams) Set MPS queries template parameters. This parameter is used for passing through to the media processing service (MPS) to query the MPS template list from the VOD side. Currently only support querying templates of the following task types via this method:
1. Audio and video enhancement: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "retrieval transcoding template list" (https://www.tencentcloud.com/document/product/862/37593?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
2. Intelligent Analysis: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Search Intelligent Analysis Template List" (https://www.tencentcloud.com/document/product/862/40247?from_cn_redirect=1) interface. Currently only support configuring the above parameters in the Template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.
3. Smart subtitling: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Get Smart Subtitling Template List" (https://www.tencentcloud.com/document/product/862/117002?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
4. Intelligent erasure: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "Search intelligent erasure template list" (https://www.tencentcloud.com/document/product/862/123733?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template. Other parameters are not required. If other parameters are included, the system will automatically ignore.
 */
class DescribeMPSTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
     */
    public $SubAppId;

    /**
     * @var string MPS template type. Filter results by the MPS template type you want to query. Value:
<li>Transcode: Query the transcoding template list.</li>
<li>AIAnalysis: Create intelligent analysis template.</li>
<li>SmartSubtitle: Create an intelligent subtitle template.</li>
<li>SmartErase: Create an intelligent erasure template.</li>
     */
    public $TemplateType;

    /**
     * @var string MPS queries template parameters. This parameter is used for passing through to the media processing service (MPS) to query the MPS template list from the VOD side. Currently only support querying templates of the following task types via this method:
1. Audio and video enhancement: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "retrieval transcoding template list" (https://www.tencentcloud.com/document/product/862/37593?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
2. Intelligent Analysis: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Search Intelligent Analysis Template List" (https://www.tencentcloud.com/document/product/862/40247?from_cn_redirect=1) interface. Currently only support configuring the above parameters in the Template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.
3. Smart subtitling: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Get Smart Subtitling Template List" (https://www.tencentcloud.com/document/product/862/117002?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
4. Intelligent erasure: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "Search intelligent erasure template list" (https://www.tencentcloud.com/document/product/862/123733?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template. Other parameters are not required. If other parameters are included, the system will automatically ignore.
     */
    public $MPSDescribeTemplateParams;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.</b>
     * @param string $TemplateType MPS template type. Filter results by the MPS template type you want to query. Value:
<li>Transcode: Query the transcoding template list.</li>
<li>AIAnalysis: Create intelligent analysis template.</li>
<li>SmartSubtitle: Create an intelligent subtitle template.</li>
<li>SmartErase: Create an intelligent erasure template.</li>
     * @param string $MPSDescribeTemplateParams MPS queries template parameters. This parameter is used for passing through to the media processing service (MPS) to query the MPS template list from the VOD side. Currently only support querying templates of the following task types via this method:
1. Audio and video enhancement: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "retrieval transcoding template list" (https://www.tencentcloud.com/document/product/862/37593?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
2. Intelligent Analysis: Only support filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Search Intelligent Analysis Template List" (https://www.tencentcloud.com/document/product/862/40247?from_cn_redirect=1) interface. Currently only support configuring the above parameters in the Template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.
3. Smart subtitling: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters from the "Get Smart Subtitling Template List" (https://www.tencentcloud.com/document/product/862/117002?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template, other parameters not required. If other parameters are included, system will automatically ignore.
4. Intelligent erasure: Only supports filling in the content of Definitions, Type, Name, Offset, and Limit parameters in the "Search intelligent erasure template list" (https://www.tencentcloud.com/document/product/862/123733?from_cn_redirect=1) interface. Currently only support configuring the above parameters in template. Other parameters are not required. If other parameters are included, the system will automatically ignore.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("MPSDescribeTemplateParams",$param) and $param["MPSDescribeTemplateParams"] !== null) {
            $this->MPSDescribeTemplateParams = $param["MPSDescribeTemplateParams"];
        }
    }
}
