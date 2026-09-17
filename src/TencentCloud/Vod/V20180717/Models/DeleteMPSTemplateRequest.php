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
 * DeleteMPSTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
 * @method string getTemplateType() Obtain <p>Type of MPS template that needs to be deleted. Parameter Value:</p><li>AIAnalysis: create intelligent analysis template.</li><li>SmartSubtitle: create intelligent subtitle template.</li><li>SmartErase: create intelligent erasure template.</li><li>EmbedSubtitle: subtitle suppression template.</li>
 * @method void setTemplateType(string $TemplateType) Set <p>Type of MPS template that needs to be deleted. Parameter Value:</p><li>AIAnalysis: create intelligent analysis template.</li><li>SmartSubtitle: create intelligent subtitle template.</li><li>SmartErase: create intelligent erasure template.</li><li>EmbedSubtitle: subtitle suppression template.</li>
 * @method integer getDefinition() Obtain <p>Unique identifier of the MPS task template.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the MPS task template.</p>
 */
class DeleteMPSTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Type of MPS template that needs to be deleted. Parameter Value:</p><li>AIAnalysis: create intelligent analysis template.</li><li>SmartSubtitle: create intelligent subtitle template.</li><li>SmartErase: create intelligent erasure template.</li><li>EmbedSubtitle: subtitle suppression template.</li>
     */
    public $TemplateType;

    /**
     * @var integer <p>Unique identifier of the MPS task template.</p>
     */
    public $Definition;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574">application</a> ID.</b></p>
     * @param string $TemplateType <p>Type of MPS template that needs to be deleted. Parameter Value:</p><li>AIAnalysis: create intelligent analysis template.</li><li>SmartSubtitle: create intelligent subtitle template.</li><li>SmartErase: create intelligent erasure template.</li><li>EmbedSubtitle: subtitle suppression template.</li>
     * @param integer $Definition <p>Unique identifier of the MPS task template.</p>
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
