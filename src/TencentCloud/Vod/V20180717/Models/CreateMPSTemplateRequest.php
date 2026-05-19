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
 * CreateMPSTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
 * @method string getTemplateType() Obtain <p>Type of the MPS template to create. Value:</p><li>AIAnalysis: Create an intelligent analysis template.</li><li>SmartSubtitle: Create an intelligent subtitle template.</li><li>SmartErase: Create an intelligent erasure template.</li>
 * @method void setTemplateType(string $TemplateType) Set <p>Type of the MPS template to create. Value:</p><li>AIAnalysis: Create an intelligent analysis template.</li><li>SmartSubtitle: Create an intelligent subtitle template.</li><li>SmartErase: Create an intelligent erasure template.</li>
 * @method string getMPSCreateTemplateParams() Obtain <p>MPS template creation parameters. This parameter is used for transparent transmission to the media processing service (MPS) to create user-defined MPS task templates from the VOD side.<br>Currently only supports creating templates of the following task types through this method:</p><ol><li>AI analysis: only supports filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40249?from_cn_redirect=1">create content analysis template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only supports filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117004?from_cn_redirect=1">create intelligent caption template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only supports filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123735?from_cn_redirect=1">create intelligent erasure template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol><p>Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them. The above pass-through parameters are represented in JSON format.</p>
 * @method void setMPSCreateTemplateParams(string $MPSCreateTemplateParams) Set <p>MPS template creation parameters. This parameter is used for transparent transmission to the media processing service (MPS) to create user-defined MPS task templates from the VOD side.<br>Currently only supports creating templates of the following task types through this method:</p><ol><li>AI analysis: only supports filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40249?from_cn_redirect=1">create content analysis template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only supports filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117004?from_cn_redirect=1">create intelligent caption template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only supports filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123735?from_cn_redirect=1">create intelligent erasure template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol><p>Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them. The above pass-through parameters are represented in JSON format.</p>
 * @method MPSAIAnalysisTemplate getAIAnalysisTemplate() Obtain <p>Intelligent analysis template parameter. Valid when MPSCreateTemplateParams is empty.</p>
 * @method void setAIAnalysisTemplate(MPSAIAnalysisTemplate $AIAnalysisTemplate) Set <p>Intelligent analysis template parameter. Valid when MPSCreateTemplateParams is empty.</p>
 * @method MPSSmartSubtitleTemplate getSmartSubtitleTemplate() Obtain <p>Parameter of the intelligent subtitle template. Valid when MPSCreateTemplateParams is empty.</p>
 * @method void setSmartSubtitleTemplate(MPSSmartSubtitleTemplate $SmartSubtitleTemplate) Set <p>Parameter of the intelligent subtitle template. Valid when MPSCreateTemplateParams is empty.</p>
 * @method MPSSmartEraseTemplate getSmartEraseTemplate() Obtain <p>Intelligent erasure template parameter. Valid when MPSCreateTemplateParams is empty.</p>
 * @method void setSmartEraseTemplate(MPSSmartEraseTemplate $SmartEraseTemplate) Set <p>Intelligent erasure template parameter. Valid when MPSCreateTemplateParams is empty.</p>
 */
class CreateMPSTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Type of the MPS template to create. Value:</p><li>AIAnalysis: Create an intelligent analysis template.</li><li>SmartSubtitle: Create an intelligent subtitle template.</li><li>SmartErase: Create an intelligent erasure template.</li>
     */
    public $TemplateType;

    /**
     * @var string <p>MPS template creation parameters. This parameter is used for transparent transmission to the media processing service (MPS) to create user-defined MPS task templates from the VOD side.<br>Currently only supports creating templates of the following task types through this method:</p><ol><li>AI analysis: only supports filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40249?from_cn_redirect=1">create content analysis template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only supports filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117004?from_cn_redirect=1">create intelligent caption template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only supports filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123735?from_cn_redirect=1">create intelligent erasure template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol><p>Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them. The above pass-through parameters are represented in JSON format.</p>
     */
    public $MPSCreateTemplateParams;

    /**
     * @var MPSAIAnalysisTemplate <p>Intelligent analysis template parameter. Valid when MPSCreateTemplateParams is empty.</p>
     */
    public $AIAnalysisTemplate;

    /**
     * @var MPSSmartSubtitleTemplate <p>Parameter of the intelligent subtitle template. Valid when MPSCreateTemplateParams is empty.</p>
     */
    public $SmartSubtitleTemplate;

    /**
     * @var MPSSmartEraseTemplate <p>Intelligent erasure template parameter. Valid when MPSCreateTemplateParams is empty.</p>
     */
    public $SmartEraseTemplate;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
     * @param string $TemplateType <p>Type of the MPS template to create. Value:</p><li>AIAnalysis: Create an intelligent analysis template.</li><li>SmartSubtitle: Create an intelligent subtitle template.</li><li>SmartErase: Create an intelligent erasure template.</li>
     * @param string $MPSCreateTemplateParams <p>MPS template creation parameters. This parameter is used for transparent transmission to the media processing service (MPS) to create user-defined MPS task templates from the VOD side.<br>Currently only supports creating templates of the following task types through this method:</p><ol><li>AI analysis: only supports filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40249?from_cn_redirect=1">create content analysis template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only supports filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117004?from_cn_redirect=1">create intelligent caption template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only supports filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123735?from_cn_redirect=1">create intelligent erasure template</a>" API. Currently only supports configuring the above parameters in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol><p>Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them. The above pass-through parameters are represented in JSON format.</p>
     * @param MPSAIAnalysisTemplate $AIAnalysisTemplate <p>Intelligent analysis template parameter. Valid when MPSCreateTemplateParams is empty.</p>
     * @param MPSSmartSubtitleTemplate $SmartSubtitleTemplate <p>Parameter of the intelligent subtitle template. Valid when MPSCreateTemplateParams is empty.</p>
     * @param MPSSmartEraseTemplate $SmartEraseTemplate <p>Intelligent erasure template parameter. Valid when MPSCreateTemplateParams is empty.</p>
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

        if (array_key_exists("MPSCreateTemplateParams",$param) and $param["MPSCreateTemplateParams"] !== null) {
            $this->MPSCreateTemplateParams = $param["MPSCreateTemplateParams"];
        }

        if (array_key_exists("AIAnalysisTemplate",$param) and $param["AIAnalysisTemplate"] !== null) {
            $this->AIAnalysisTemplate = new MPSAIAnalysisTemplate();
            $this->AIAnalysisTemplate->deserialize($param["AIAnalysisTemplate"]);
        }

        if (array_key_exists("SmartSubtitleTemplate",$param) and $param["SmartSubtitleTemplate"] !== null) {
            $this->SmartSubtitleTemplate = new MPSSmartSubtitleTemplate();
            $this->SmartSubtitleTemplate->deserialize($param["SmartSubtitleTemplate"]);
        }

        if (array_key_exists("SmartEraseTemplate",$param) and $param["SmartEraseTemplate"] !== null) {
            $this->SmartEraseTemplate = new MPSSmartEraseTemplate();
            $this->SmartEraseTemplate->deserialize($param["SmartEraseTemplate"]);
        }
    }
}
