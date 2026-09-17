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
 * 
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getLevel() Obtain 
 * @method void setLevel(string $Level) Set 
 * @method LLMComprehendSummary getSummary() Obtain 
 * @method void setSummary(LLMComprehendSummary $Summary) Set 
 * @method LLMComprehendAsr getAsr() Obtain 
 * @method void setAsr(LLMComprehendAsr $Asr) Set 
 * @method LLMComprehendFaceRecognition getFaceRecognition() Obtain 
 * @method void setFaceRecognition(LLMComprehendFaceRecognition $FaceRecognition) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
 */
class LLMComprehendTemplateItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $Level;

    /**
     * @var LLMComprehendSummary 
     */
    public $Summary;

    /**
     * @var LLMComprehendAsr 
     */
    public $Asr;

    /**
     * @var LLMComprehendFaceRecognition 
     */
    public $FaceRecognition;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 
     * @param string $Name 
     * @param string $Comment 
     * @param string $Type 
     * @param string $Level 
     * @param LLMComprehendSummary $Summary 
     * @param LLMComprehendAsr $Asr 
     * @param LLMComprehendFaceRecognition $FaceRecognition 
     * @param string $CreateTime 
     * @param string $UpdateTime 
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
