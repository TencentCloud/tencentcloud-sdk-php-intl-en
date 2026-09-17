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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getTemplateType() Obtain 
 * @method void setTemplateType(string $TemplateType) Set 
 * @method string getMPSModifyTemplateParams() Obtain 
 * @method void setMPSModifyTemplateParams(string $MPSModifyTemplateParams) Set 
 * @method MPSAIAnalysisTemplateForUpdate getAIAnalysisTemplate() Obtain 
 * @method void setAIAnalysisTemplate(MPSAIAnalysisTemplateForUpdate $AIAnalysisTemplate) Set 
 * @method MPSSmartSubtitleTemplateForUpdate getSmartSubtitleTemplate() Obtain 
 * @method void setSmartSubtitleTemplate(MPSSmartSubtitleTemplateForUpdate $SmartSubtitleTemplate) Set 
 * @method MPSSmartEraseTemplateForUpdate getSmartEraseTemplate() Obtain 
 * @method void setSmartEraseTemplate(MPSSmartEraseTemplateForUpdate $SmartEraseTemplate) Set 
 * @method MPSEmbedSubtitleTemplateForUpdate getEmbedSubtitleTemplate() Obtain 
 * @method void setEmbedSubtitleTemplate(MPSEmbedSubtitleTemplateForUpdate $EmbedSubtitleTemplate) Set 
 */
class ModifyMPSTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $TemplateType;

    /**
     * @var string 
     */
    public $MPSModifyTemplateParams;

    /**
     * @var MPSAIAnalysisTemplateForUpdate 
     */
    public $AIAnalysisTemplate;

    /**
     * @var MPSSmartSubtitleTemplateForUpdate 
     */
    public $SmartSubtitleTemplate;

    /**
     * @var MPSSmartEraseTemplateForUpdate 
     */
    public $SmartEraseTemplate;

    /**
     * @var MPSEmbedSubtitleTemplateForUpdate 
     */
    public $EmbedSubtitleTemplate;

    /**
     * @param integer $SubAppId 
     * @param string $TemplateType 
     * @param string $MPSModifyTemplateParams 
     * @param MPSAIAnalysisTemplateForUpdate $AIAnalysisTemplate 
     * @param MPSSmartSubtitleTemplateForUpdate $SmartSubtitleTemplate 
     * @param MPSSmartEraseTemplateForUpdate $SmartEraseTemplate 
     * @param MPSEmbedSubtitleTemplateForUpdate $EmbedSubtitleTemplate 
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
