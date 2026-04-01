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
 * CreateLLMComprehendTemplate request structure.
 *
 * @method string getLevel() Obtain <p>Resolution level. Available values are:</p><ul><li>Audio: Audio-level comprehension</li><li>Video: Video-level comprehension</li></ul>
 * @method void setLevel(string $Level) Set <p>Resolution level. Available values are:</p><ul><li>Audio: Audio-level comprehension</li><li>Video: Video-level comprehension</li></ul>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
 * @method string getName() Obtain <p>Large model comprehend template name. The length cannot exceed 64 characters.</p>
 * @method void setName(string $Name) Set <p>Large model comprehend template name. The length cannot exceed 64 characters.</p>
 * @method string getComment() Obtain <p>Large model comprehend template description information. The length cannot exceed 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Large model comprehend template description information. The length cannot exceed 256 characters.</p>
 * @method LLMComprehendSummary getSummary() Obtain <p>Segment summary parsing configuration</p>
 * @method void setSummary(LLMComprehendSummary $Summary) Set <p>Segment summary parsing configuration</p>
 * @method LLMComprehendAsr getAsr() Obtain <p>Text transcription parsing configuration</p>
 * @method void setAsr(LLMComprehendAsr $Asr) Set <p>Text transcription parsing configuration</p>
 * @method LLMComprehendFaceRecognition getFaceRecognition() Obtain <p>Face identification configuration</p>
 * @method void setFaceRecognition(LLMComprehendFaceRecognition $FaceRecognition) Set <p>Face identification configuration</p>
 */
class CreateLLMComprehendTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Resolution level. Available values are:</p><ul><li>Audio: Audio-level comprehension</li><li>Video: Video-level comprehension</li></ul>
     */
    public $Level;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Large model comprehend template name. The length cannot exceed 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Large model comprehend template description information. The length cannot exceed 256 characters.</p>
     */
    public $Comment;

    /**
     * @var LLMComprehendSummary <p>Segment summary parsing configuration</p>
     */
    public $Summary;

    /**
     * @var LLMComprehendAsr <p>Text transcription parsing configuration</p>
     */
    public $Asr;

    /**
     * @var LLMComprehendFaceRecognition <p>Face identification configuration</p>
     */
    public $FaceRecognition;

    /**
     * @param string $Level <p>Resolution level. Available values are:</p><ul><li>Audio: Audio-level comprehension</li><li>Video: Video-level comprehension</li></ul>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b></p>
     * @param string $Name <p>Large model comprehend template name. The length cannot exceed 64 characters.</p>
     * @param string $Comment <p>Large model comprehend template description information. The length cannot exceed 256 characters.</p>
     * @param LLMComprehendSummary $Summary <p>Segment summary parsing configuration</p>
     * @param LLMComprehendAsr $Asr <p>Text transcription parsing configuration</p>
     * @param LLMComprehendFaceRecognition $FaceRecognition <p>Face identification configuration</p>
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
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

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new LLMComprehendSummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Asr",$param) and $param["Asr"] !== null) {
            $this->Asr = new LLMComprehendAsr();
            $this->Asr->deserialize($param["Asr"]);
        }

        if (array_key_exists("FaceRecognition",$param) and $param["FaceRecognition"] !== null) {
            $this->FaceRecognition = new LLMComprehendFaceRecognition();
            $this->FaceRecognition->deserialize($param["FaceRecognition"]);
        }
    }
}
