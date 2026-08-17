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
 * ModifyAIRecognitionTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of a video content recognition template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of a video content recognition template.
 * @method string getName() Obtain Video content recognition template name, length limited to 64 characters.
 * @method void setName(string $Name) Set Video content recognition template name, length limited to 64 characters.
 * @method string getComment() Obtain Video Content Recognition template description, length limited to 256 characters.
 * @method void setComment(string $Comment) Set Video Content Recognition template description, length limited to 256 characters.
 * @method FaceConfigureInfoForUpdate getFaceConfigure() Obtain Face Recognition Control Parameter.
 * @method void setFaceConfigure(FaceConfigureInfoForUpdate $FaceConfigure) Set Face Recognition Control Parameter.
 * @method OcrFullTextConfigureInfoForUpdate getOcrFullTextConfigure() Obtain Text Full-text Recognition Control Parameters.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure) Set Text Full-text Recognition Control Parameters.
 * @method OcrWordsConfigureInfoForUpdate getOcrWordsConfigure() Obtain Text keyword recognition control parameters.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfoForUpdate $OcrWordsConfigure) Set Text keyword recognition control parameters.
 * @method AsrFullTextConfigureInfoForUpdate getAsrFullTextConfigure() Obtain Voice full-text recognition control parameters.
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure) Set Voice full-text recognition control parameters.
 * @method AsrWordsConfigureInfoForUpdate getAsrWordsConfigure() Obtain Voice keyword recognition control parameters.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfoForUpdate $AsrWordsConfigure) Set Voice keyword recognition control parameters.
 * @method TranslateConfigureInfoForUpdate getTranslateConfigure() Obtain Voice translation control parameters.
 * @method void setTranslateConfigure(TranslateConfigureInfoForUpdate $TranslateConfigure) Set Voice translation control parameters.
 */
class ModifyAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of a video content recognition template.
     */
    public $Definition;

    /**
     * @var string Video content recognition template name, length limited to 64 characters.
     */
    public $Name;

    /**
     * @var string Video Content Recognition template description, length limited to 256 characters.
     */
    public $Comment;

    /**
     * @var FaceConfigureInfoForUpdate Face Recognition Control Parameter.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfoForUpdate Text Full-text Recognition Control Parameters.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfoForUpdate Text keyword recognition control parameters.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfoForUpdate Voice full-text recognition control parameters.
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfoForUpdate Voice keyword recognition control parameters.
     */
    public $AsrWordsConfigure;

    /**
     * @var TranslateConfigureInfoForUpdate Voice translation control parameters.
     */
    public $TranslateConfigure;

    /**
     * @param integer $Definition Unique identifier of a video content recognition template.
     * @param string $Name Video content recognition template name, length limited to 64 characters.
     * @param string $Comment Video Content Recognition template description, length limited to 256 characters.
     * @param FaceConfigureInfoForUpdate $FaceConfigure Face Recognition Control Parameter.
     * @param OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure Text Full-text Recognition Control Parameters.
     * @param OcrWordsConfigureInfoForUpdate $OcrWordsConfigure Text keyword recognition control parameters.
     * @param AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure Voice full-text recognition control parameters.
     * @param AsrWordsConfigureInfoForUpdate $AsrWordsConfigure Voice keyword recognition control parameters.
     * @param TranslateConfigureInfoForUpdate $TranslateConfigure Voice translation control parameters.
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

        if (array_key_exists("FaceConfigure",$param) and $param["FaceConfigure"] !== null) {
            $this->FaceConfigure = new FaceConfigureInfoForUpdate();
            $this->FaceConfigure->deserialize($param["FaceConfigure"]);
        }

        if (array_key_exists("OcrFullTextConfigure",$param) and $param["OcrFullTextConfigure"] !== null) {
            $this->OcrFullTextConfigure = new OcrFullTextConfigureInfoForUpdate();
            $this->OcrFullTextConfigure->deserialize($param["OcrFullTextConfigure"]);
        }

        if (array_key_exists("OcrWordsConfigure",$param) and $param["OcrWordsConfigure"] !== null) {
            $this->OcrWordsConfigure = new OcrWordsConfigureInfoForUpdate();
            $this->OcrWordsConfigure->deserialize($param["OcrWordsConfigure"]);
        }

        if (array_key_exists("AsrFullTextConfigure",$param) and $param["AsrFullTextConfigure"] !== null) {
            $this->AsrFullTextConfigure = new AsrFullTextConfigureInfoForUpdate();
            $this->AsrFullTextConfigure->deserialize($param["AsrFullTextConfigure"]);
        }

        if (array_key_exists("AsrWordsConfigure",$param) and $param["AsrWordsConfigure"] !== null) {
            $this->AsrWordsConfigure = new AsrWordsConfigureInfoForUpdate();
            $this->AsrWordsConfigure->deserialize($param["AsrWordsConfigure"]);
        }

        if (array_key_exists("TranslateConfigure",$param) and $param["TranslateConfigure"] !== null) {
            $this->TranslateConfigure = new TranslateConfigureInfoForUpdate();
            $this->TranslateConfigure->deserialize($param["TranslateConfigure"]);
        }
    }
}
