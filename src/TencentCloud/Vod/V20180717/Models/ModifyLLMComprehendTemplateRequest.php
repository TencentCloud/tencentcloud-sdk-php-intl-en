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
 * ModifyLLMComprehendTemplate request structure.
 *
 * @method integer getDefinition() Obtain <p>Unique identifier of the Large Model Understanding template.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the Large Model Understanding template.</p>
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
 * @method string getName() Obtain <p>Large model parsing template name. Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Large model parsing template name. Length limit: 64 characters.</p>
 * @method string getComment() Obtain <p>Large model parsing template description. Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Large model parsing template description. Length limit: 256 characters.</p>
 * @method string getModel() Obtain <p>Parsing model. Available values are:</p><ul><li>Basic: Base Model</li><li>Pro: Optimization Model</li></ul>
 * @method void setModel(string $Model) Set <p>Parsing model. Available values are:</p><ul><li>Basic: Base Model</li><li>Pro: Optimization Model</li></ul>
 * @method LLMComprehendSummaryForUpdate getSummary() Obtain <p>Segment summary parsing configuration</p>
 * @method void setSummary(LLMComprehendSummaryForUpdate $Summary) Set <p>Segment summary parsing configuration</p>
 * @method LLMComprehendAsrForUpdate getAsr() Obtain <p>Text transcription parsing configuration</p>
 * @method void setAsr(LLMComprehendAsrForUpdate $Asr) Set <p>Text transcription parsing configuration</p>
 * @method LLMComprehendFaceRecognitionForUpdate getFaceRecognition() Obtain <p>Facial recognition configuration</p>
 * @method void setFaceRecognition(LLMComprehendFaceRecognitionForUpdate $FaceRecognition) Set <p>Facial recognition configuration</p>
 */
class ModifyLLMComprehendTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of the Large Model Understanding template.</p>
     */
    public $Definition;

    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Large model parsing template name. Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Large model parsing template description. Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var string <p>Parsing model. Available values are:</p><ul><li>Basic: Base Model</li><li>Pro: Optimization Model</li></ul>
     */
    public $Model;

    /**
     * @var LLMComprehendSummaryForUpdate <p>Segment summary parsing configuration</p>
     */
    public $Summary;

    /**
     * @var LLMComprehendAsrForUpdate <p>Text transcription parsing configuration</p>
     */
    public $Asr;

    /**
     * @var LLMComprehendFaceRecognitionForUpdate <p>Facial recognition configuration</p>
     */
    public $FaceRecognition;

    /**
     * @param integer $Definition <p>Unique identifier of the Large Model Understanding template.</p>
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
     * @param string $Name <p>Large model parsing template name. Length limit: 64 characters.</p>
     * @param string $Comment <p>Large model parsing template description. Length limit: 256 characters.</p>
     * @param string $Model <p>Parsing model. Available values are:</p><ul><li>Basic: Base Model</li><li>Pro: Optimization Model</li></ul>
     * @param LLMComprehendSummaryForUpdate $Summary <p>Segment summary parsing configuration</p>
     * @param LLMComprehendAsrForUpdate $Asr <p>Text transcription parsing configuration</p>
     * @param LLMComprehendFaceRecognitionForUpdate $FaceRecognition <p>Facial recognition configuration</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new LLMComprehendSummaryForUpdate();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Asr",$param) and $param["Asr"] !== null) {
            $this->Asr = new LLMComprehendAsrForUpdate();
            $this->Asr->deserialize($param["Asr"]);
        }

        if (array_key_exists("FaceRecognition",$param) and $param["FaceRecognition"] !== null) {
            $this->FaceRecognition = new LLMComprehendFaceRecognitionForUpdate();
            $this->FaceRecognition->deserialize($param["FaceRecognition"]);
        }
    }
}
