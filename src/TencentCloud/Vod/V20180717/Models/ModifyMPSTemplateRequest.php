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
 * ModifyMPSTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
 * @method string getTemplateType() Obtain <p>Type of the MPS template that needs to be modified.</p><p>Enumeration value:</p><ul><li>AIAnalysis: Intelligent analysis template</li><li>SmartSubtitle: Intelligent subtitle template</li><li>SmartErase: Intelligent erasure template</li></ul>
 * @method void setTemplateType(string $TemplateType) Set <p>Type of the MPS template that needs to be modified.</p><p>Enumeration value:</p><ul><li>AIAnalysis: Intelligent analysis template</li><li>SmartSubtitle: Intelligent subtitle template</li><li>SmartErase: Intelligent erasure template</li></ul>
 * @method string getMPSModifyTemplateParams() Obtain <p>MPS modifies template parameters. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently only support modifying templates of the following task types in this way:</p><ol><li>Audio and video enhancement: Only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: Only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent caption: Only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify intelligent caption template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: Only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
 * @method void setMPSModifyTemplateParams(string $MPSModifyTemplateParams) Set <p>MPS modifies template parameters. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently only support modifying templates of the following task types in this way:</p><ol><li>Audio and video enhancement: Only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: Only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent caption: Only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify intelligent caption template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: Only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
 * @method MPSAIAnalysisTemplateForUpdate getAIAnalysisTemplate() Obtain <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method void setAIAnalysisTemplate(MPSAIAnalysisTemplateForUpdate $AIAnalysisTemplate) Set <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method MPSSmartSubtitleTemplateForUpdate getSmartSubtitleTemplate() Obtain <p>Intelligent subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method void setSmartSubtitleTemplate(MPSSmartSubtitleTemplateForUpdate $SmartSubtitleTemplate) Set <p>Intelligent subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method MPSSmartEraseTemplateForUpdate getSmartEraseTemplate() Obtain <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method void setSmartEraseTemplate(MPSSmartEraseTemplateForUpdate $SmartEraseTemplate) Set <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 */
class ModifyMPSTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Type of the MPS template that needs to be modified.</p><p>Enumeration value:</p><ul><li>AIAnalysis: Intelligent analysis template</li><li>SmartSubtitle: Intelligent subtitle template</li><li>SmartErase: Intelligent erasure template</li></ul>
     */
    public $TemplateType;

    /**
     * @var string <p>MPS modifies template parameters. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently only support modifying templates of the following task types in this way:</p><ol><li>Audio and video enhancement: Only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: Only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent caption: Only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify intelligent caption template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: Only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
     */
    public $MPSModifyTemplateParams;

    /**
     * @var MPSAIAnalysisTemplateForUpdate <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     */
    public $AIAnalysisTemplate;

    /**
     * @var MPSSmartSubtitleTemplateForUpdate <p>Intelligent subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     */
    public $SmartSubtitleTemplate;

    /**
     * @var MPSSmartEraseTemplateForUpdate <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     */
    public $SmartEraseTemplate;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
     * @param string $TemplateType <p>Type of the MPS template that needs to be modified.</p><p>Enumeration value:</p><ul><li>AIAnalysis: Intelligent analysis template</li><li>SmartSubtitle: Intelligent subtitle template</li><li>SmartErase: Intelligent erasure template</li></ul>
     * @param string $MPSModifyTemplateParams <p>MPS modifies template parameters. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently only support modifying templates of the following task types in this way:</p><ol><li>Audio and video enhancement: Only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: Only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the "<a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent caption: Only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the "<a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify intelligent caption template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: Only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the "<a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a>" interface. Currently only support configuring the above parameters in the template, other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
     * @param MPSAIAnalysisTemplateForUpdate $AIAnalysisTemplate <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     * @param MPSSmartSubtitleTemplateForUpdate $SmartSubtitleTemplate <p>Intelligent subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     * @param MPSSmartEraseTemplateForUpdate $SmartEraseTemplate <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
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

        if (array_key_exists("MPSModifyTemplateParams",$param) and $param["MPSModifyTemplateParams"] !== null) {
            $this->MPSModifyTemplateParams = $param["MPSModifyTemplateParams"];
        }

        if (array_key_exists("AIAnalysisTemplate",$param) and $param["AIAnalysisTemplate"] !== null) {
            $this->AIAnalysisTemplate = new MPSAIAnalysisTemplateForUpdate();
            $this->AIAnalysisTemplate->deserialize($param["AIAnalysisTemplate"]);
        }

        if (array_key_exists("SmartSubtitleTemplate",$param) and $param["SmartSubtitleTemplate"] !== null) {
            $this->SmartSubtitleTemplate = new MPSSmartSubtitleTemplateForUpdate();
            $this->SmartSubtitleTemplate->deserialize($param["SmartSubtitleTemplate"]);
        }

        if (array_key_exists("SmartEraseTemplate",$param) and $param["SmartEraseTemplate"] !== null) {
            $this->SmartEraseTemplate = new MPSSmartEraseTemplateForUpdate();
            $this->SmartEraseTemplate->deserialize($param["SmartEraseTemplate"]);
        }
    }
}
