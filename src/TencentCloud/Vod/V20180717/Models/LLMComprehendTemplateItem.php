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
 * Large model parses template detail.
 *
 * @method integer getDefinition() Obtain <p>Unique identifier of the image asynchronous processing template.</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the image asynchronous processing template.</p>
 * @method string getName() Obtain <p>Image asynchronous processing template name.</p>
 * @method void setName(string $Name) Set <p>Image asynchronous processing template name.</p>
 * @method string getComment() Obtain <p>Description information of the image asynchronous processing template.</p>
 * @method void setComment(string $Comment) Set <p>Description information of the image asynchronous processing template.</p>
 * @method string getLevel() Obtain <p>Resolution level, optional values:</p><ul><li>Audio: Audio-level resolution</li><li>Video: Video-level resolution</li></ul>
 * @method void setLevel(string $Level) Set <p>Resolution level, optional values:</p><ul><li>Audio: Audio-level resolution</li><li>Video: Video-level resolution</li></ul>
 * @method LLMComprehendSummary getSummary() Obtain <p>Segment summary parse configuration</p>
 * @method void setSummary(LLMComprehendSummary $Summary) Set <p>Segment summary parse configuration</p>
 * @method LLMComprehendAsr getAsr() Obtain <p>Text transcription parse configuration</p>
 * @method void setAsr(LLMComprehendAsr $Asr) Set <p>Text transcription parse configuration</p>
 * @method LLMComprehendFaceRecognition getFaceRecognition() Obtain <p>Face recognition parse configuration</p>
 * @method void setFaceRecognition(LLMComprehendFaceRecognition $FaceRecognition) Set <p>Face recognition parse configuration</p>
 * @method string getCreateTime() Obtain <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 */
class LLMComprehendTemplateItem extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of the image asynchronous processing template.</p>
     */
    public $Definition;

    /**
     * @var string <p>Image asynchronous processing template name.</p>
     */
    public $Name;

    /**
     * @var string <p>Description information of the image asynchronous processing template.</p>
     */
    public $Comment;

    /**
     * @var string <p>Resolution level, optional values:</p><ul><li>Audio: Audio-level resolution</li><li>Video: Video-level resolution</li></ul>
     */
    public $Level;

    /**
     * @var LLMComprehendSummary <p>Segment summary parse configuration</p>
     */
    public $Summary;

    /**
     * @var LLMComprehendAsr <p>Text transcription parse configuration</p>
     */
    public $Asr;

    /**
     * @var LLMComprehendFaceRecognition <p>Face recognition parse configuration</p>
     */
    public $FaceRecognition;

    /**
     * @var string <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @param integer $Definition <p>Unique identifier of the image asynchronous processing template.</p>
     * @param string $Name <p>Image asynchronous processing template name.</p>
     * @param string $Comment <p>Description information of the image asynchronous processing template.</p>
     * @param string $Level <p>Resolution level, optional values:</p><ul><li>Audio: Audio-level resolution</li><li>Video: Video-level resolution</li></ul>
     * @param LLMComprehendSummary $Summary <p>Segment summary parse configuration</p>
     * @param LLMComprehendAsr $Asr <p>Text transcription parse configuration</p>
     * @param LLMComprehendFaceRecognition $FaceRecognition <p>Face recognition parse configuration</p>
     * @param string $CreateTime <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
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
