<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIRecognitionTemplate request structure.
 *
 * @method string getName() Obtain Name of a video content recognition template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of a video content recognition template. Length limit: 64 characters.
 * @method string getComment() Obtain Description of a video content recognition template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of a video content recognition template. Length limit: 256 characters.
 * @method FaceConfigureInfo getFaceConfigure() Obtain Face recognition control parameter.
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set Face recognition control parameter.
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain Full text recognition control parameter.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set Full text recognition control parameter.
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain Text keyword recognition control parameter.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set Text keyword recognition control parameter.
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain Full speech recognition control parameter.
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set Full speech recognition control parameter.
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain Speech keyword recognition control parameter.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set Speech keyword recognition control parameter.
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var string Name of a video content recognition template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of a video content recognition template. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var FaceConfigureInfo Face recognition control parameter.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo Full text recognition control parameter.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo Text keyword recognition control parameter.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo Full speech recognition control parameter.
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo Speech keyword recognition control parameter.
     */
    public $AsrWordsConfigure;

    /**
     * @param string $Name Name of a video content recognition template. Length limit: 64 characters.
     * @param string $Comment Description of a video content recognition template. Length limit: 256 characters.
     * @param FaceConfigureInfo $FaceConfigure Face recognition control parameter.
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure Full text recognition control parameter.
     * @param OcrWordsConfigureInfo $OcrWordsConfigure Text keyword recognition control parameter.
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure Full speech recognition control parameter.
     * @param AsrWordsConfigureInfo $AsrWordsConfigure Speech keyword recognition control parameter.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("FaceConfigure",$param) and $param["FaceConfigure"] !== null) {
            $this->FaceConfigure = new FaceConfigureInfo();
            $this->FaceConfigure->deserialize($param["FaceConfigure"]);
        }

        if (array_key_exists("OcrFullTextConfigure",$param) and $param["OcrFullTextConfigure"] !== null) {
            $this->OcrFullTextConfigure = new OcrFullTextConfigureInfo();
            $this->OcrFullTextConfigure->deserialize($param["OcrFullTextConfigure"]);
        }

        if (array_key_exists("OcrWordsConfigure",$param) and $param["OcrWordsConfigure"] !== null) {
            $this->OcrWordsConfigure = new OcrWordsConfigureInfo();
            $this->OcrWordsConfigure->deserialize($param["OcrWordsConfigure"]);
        }

        if (array_key_exists("AsrFullTextConfigure",$param) and $param["AsrFullTextConfigure"] !== null) {
            $this->AsrFullTextConfigure = new AsrFullTextConfigureInfo();
            $this->AsrFullTextConfigure->deserialize($param["AsrFullTextConfigure"]);
        }

        if (array_key_exists("AsrWordsConfigure",$param) and $param["AsrWordsConfigure"] !== null) {
            $this->AsrWordsConfigure = new AsrWordsConfigureInfo();
            $this->AsrWordsConfigure->deserialize($param["AsrWordsConfigure"]);
        }
    }
}
