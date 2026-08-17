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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIRecognitionTemplate request structure.
 *
 * @method string getName() Obtain Video content recognition template name, length limited to 64 characters.
 * @method void setName(string $Name) Set Video content recognition template name, length limited to 64 characters.
 * @method string getComment() Obtain Video Content Recognition template description, length limited to 256 characters.
 * @method void setComment(string $Comment) Set Video Content Recognition template description, length limited to 256 characters.
 * @method FaceConfigureInfo getFaceConfigure() Obtain Face Recognition Control Parameter.
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set Face Recognition Control Parameter.
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain Full Text Recognition Control Parameter.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set Full Text Recognition Control Parameter.
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain Text keyword recognition control.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set Text keyword recognition control.
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain Speech Full-text Recognition Control Parameter.
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set Speech Full-text Recognition Control Parameter.
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain Voice keyword recognition control parameters.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set Voice keyword recognition control parameters.
 * @method TranslateConfigureInfo getTranslateConfigure() Obtain Voice translation control parameters.
 * @method void setTranslateConfigure(TranslateConfigureInfo $TranslateConfigure) Set Voice translation control parameters.
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var string Video content recognition template name, length limited to 64 characters.
     */
    public $Name;

    /**
     * @var string Video Content Recognition template description, length limited to 256 characters.
     */
    public $Comment;

    /**
     * @var FaceConfigureInfo Face Recognition Control Parameter.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo Full Text Recognition Control Parameter.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo Text keyword recognition control.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo Speech Full-text Recognition Control Parameter.
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo Voice keyword recognition control parameters.
     */
    public $AsrWordsConfigure;

    /**
     * @var TranslateConfigureInfo Voice translation control parameters.
     */
    public $TranslateConfigure;

    /**
     * @param string $Name Video content recognition template name, length limited to 64 characters.
     * @param string $Comment Video Content Recognition template description, length limited to 256 characters.
     * @param FaceConfigureInfo $FaceConfigure Face Recognition Control Parameter.
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure Full Text Recognition Control Parameter.
     * @param OcrWordsConfigureInfo $OcrWordsConfigure Text keyword recognition control.
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure Speech Full-text Recognition Control Parameter.
     * @param AsrWordsConfigureInfo $AsrWordsConfigure Voice keyword recognition control parameters.
     * @param TranslateConfigureInfo $TranslateConfigure Voice translation control parameters.
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

        if (array_key_exists("TranslateConfigure",$param) and $param["TranslateConfigure"] !== null) {
            $this->TranslateConfigure = new TranslateConfigureInfo();
            $this->TranslateConfigure->deserialize($param["TranslateConfigure"]);
        }
    }
}
