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
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
 * @method string getTemplateType() Obtain <p>Type of the MPS template that needs to be modified.</p><p>Enumeration values:</p><ul><li>AIAnalysis: intelligent analysis template</li><li>SmartSubtitle: intelligent subtitle template</li><li>SmartErase: intelligent erasure template</li><li>EmbedSubtitle: subtitle suppression template</li></ul>
 * @method void setTemplateType(string $TemplateType) Set <p>Type of the MPS template that needs to be modified.</p><p>Enumeration values:</p><ul><li>AIAnalysis: intelligent analysis template</li><li>SmartSubtitle: intelligent subtitle template</li><li>SmartErase: intelligent erasure template</li><li>EmbedSubtitle: subtitle suppression template</li></ul>
 * @method string getMPSModifyTemplateParams() Obtain <p>MPS template parameter modification. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently, only the following task types support template modification in this way:</p><ol><li>Audio and video enhancement: only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the <a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the <a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify smart subtitling template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
 * @method void setMPSModifyTemplateParams(string $MPSModifyTemplateParams) Set <p>MPS template parameter modification. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently, only the following task types support template modification in this way:</p><ol><li>Audio and video enhancement: only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the <a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the <a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify smart subtitling template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
 * @method MPSAIAnalysisTemplateForUpdate getAIAnalysisTemplate() Obtain <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method void setAIAnalysisTemplate(MPSAIAnalysisTemplateForUpdate $AIAnalysisTemplate) Set <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method MPSSmartSubtitleTemplateForUpdate getSmartSubtitleTemplate() Obtain <p>Smart subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method void setSmartSubtitleTemplate(MPSSmartSubtitleTemplateForUpdate $SmartSubtitleTemplate) Set <p>Smart subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method MPSSmartEraseTemplateForUpdate getSmartEraseTemplate() Obtain <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method void setSmartEraseTemplate(MPSSmartEraseTemplateForUpdate $SmartEraseTemplate) Set <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method MPSEmbedSubtitleTemplateForUpdate getEmbedSubtitleTemplate() Obtain <p>Subtitle suppression template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 * @method void setEmbedSubtitleTemplate(MPSEmbedSubtitleTemplateForUpdate $EmbedSubtitleTemplate) Set <p>Subtitle suppression template parameter. Valid when MPSModifyTemplateParams is empty.</p>
 */
class ModifyMPSTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Type of the MPS template that needs to be modified.</p><p>Enumeration values:</p><ul><li>AIAnalysis: intelligent analysis template</li><li>SmartSubtitle: intelligent subtitle template</li><li>SmartErase: intelligent erasure template</li><li>EmbedSubtitle: subtitle suppression template</li></ul>
     */
    public $TemplateType;

    /**
     * @var string <p>MPS template parameter modification. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently, only the following task types support template modification in this way:</p><ol><li>Audio and video enhancement: only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the <a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the <a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify smart subtitling template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
     */
    public $MPSModifyTemplateParams;

    /**
     * @var MPSAIAnalysisTemplateForUpdate <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     */
    public $AIAnalysisTemplate;

    /**
     * @var MPSSmartSubtitleTemplateForUpdate <p>Smart subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     */
    public $SmartSubtitleTemplate;

    /**
     * @var MPSSmartEraseTemplateForUpdate <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     */
    public $SmartEraseTemplate;

    /**
     * @var MPSEmbedSubtitleTemplateForUpdate <p>Subtitle suppression template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     */
    public $EmbedSubtitleTemplate;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
     * @param string $TemplateType <p>Type of the MPS template that needs to be modified.</p><p>Enumeration values:</p><ul><li>AIAnalysis: intelligent analysis template</li><li>SmartSubtitle: intelligent subtitle template</li><li>SmartErase: intelligent erasure template</li><li>EmbedSubtitle: subtitle suppression template</li></ul>
     * @param string $MPSModifyTemplateParams <p>MPS template parameter modification. This parameter is used for passing through to the media processing service (MPS) to modify user-defined MPS task templates from the VOD side.<br> Currently, only the following task types support template modification in this way:</p><ol><li>Audio and video enhancement: only support filling in the content of Name, Comment, RemoveVideo, RemoveAudio, VideoTemplate, AudioTemplate, and EnhanceConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/37578?from_cn_redirect=1">modify transcoding template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>AI analysis: only support filling in the content of Name, Comment, ClassificationConfigure, TagConfigure, CoverConfigure, and FrameTagConfigure parameters in the <a href="https://www.tencentcloud.com/document/api/862/40246?from_cn_redirect=1">modify content analysis template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Smart subtitling: only support filling in the content of Name, Comment, TranslateSwitch, VideoSrcLanguage, SubtitleFormat, SubtitleType, AsrHotWordsConfigure, TranslateDstLanguage, and ProcessType parameters in the <a href="https://www.tencentcloud.com/document/api/862/117001?from_cn_redirect=1">modify smart subtitling template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li><li>Intelligent erasure: only support filling in the content of Name, Comment, EraseType, EraseSubtitleConfig, EraseWatermarkConfig, and ErasePrivacyConfig parameters in the <a href="https://www.tencentcloud.com/document/api/862/123732?from_cn_redirect=1">modify intelligent erasure template</a> API. Currently, only the above parameters can be configured in the template. Other parameters are not required. If other parameters are included, the system will automatically ignore them.</li></ol>
     * @param MPSAIAnalysisTemplateForUpdate $AIAnalysisTemplate <p>Intelligent analysis template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     * @param MPSSmartSubtitleTemplateForUpdate $SmartSubtitleTemplate <p>Smart subtitle template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     * @param MPSSmartEraseTemplateForUpdate $SmartEraseTemplate <p>Intelligent erasure template parameter. Valid when MPSModifyTemplateParams is empty.</p>
     * @param MPSEmbedSubtitleTemplateForUpdate $EmbedSubtitleTemplate <p>Subtitle suppression template parameter. Valid when MPSModifyTemplateParams is empty.</p>
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

        if (array_key_exists("EmbedSubtitleTemplate",$param) and $param["EmbedSubtitleTemplate"] !== null) {
            $this->EmbedSubtitleTemplate = new MPSEmbedSubtitleTemplateForUpdate();
            $this->EmbedSubtitleTemplate->deserialize($param["EmbedSubtitleTemplate"]);
        }
    }
}
