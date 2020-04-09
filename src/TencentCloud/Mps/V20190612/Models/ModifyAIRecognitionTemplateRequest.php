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
 * ModifyAIRecognitionTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of a video content recognition template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a video content recognition template.
 * @method string getName() Obtain Name of a video content recognition template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of a video content recognition template. Length limit: 64 characters.
 * @method string getComment() Obtain Description of a video content recognition template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of a video content recognition template. Length limit: 256 characters.
 * @method FaceConfigureInfoForUpdate getFaceConfigure() Obtain Face recognition control parameter.
 * @method void setFaceConfigure(FaceConfigureInfoForUpdate $FaceConfigure) Set Face recognition control parameter.
 * @method OcrFullTextConfigureInfoForUpdate getOcrFullTextConfigure() Obtain Full text recognition control parameter.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure) Set Full text recognition control parameter.
 * @method OcrWordsConfigureInfoForUpdate getOcrWordsConfigure() Obtain Text keyword recognition control parameter.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfoForUpdate $OcrWordsConfigure) Set Text keyword recognition control parameter.
 * @method AsrFullTextConfigureInfoForUpdate getAsrFullTextConfigure() Obtain Full speech recognition control parameter.
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure) Set Full speech recognition control parameter.
 * @method AsrWordsConfigureInfoForUpdate getAsrWordsConfigure() Obtain Speech keyword recognition control parameter.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfoForUpdate $AsrWordsConfigure) Set Speech keyword recognition control parameter.
 */
class ModifyAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of a video content recognition template.
     */
    public $Definition;

    /**
     * @var string Name of a video content recognition template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of a video content recognition template. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var FaceConfigureInfoForUpdate Face recognition control parameter.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfoForUpdate Full text recognition control parameter.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfoForUpdate Text keyword recognition control parameter.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfoForUpdate Full speech recognition control parameter.
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfoForUpdate Speech keyword recognition control parameter.
     */
    public $AsrWordsConfigure;

    /**
     * @param integer $Definition Unique ID of a video content recognition template.
     * @param string $Name Name of a video content recognition template. Length limit: 64 characters.
     * @param string $Comment Description of a video content recognition template. Length limit: 256 characters.
     * @param FaceConfigureInfoForUpdate $FaceConfigure Face recognition control parameter.
     * @param OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure Full text recognition control parameter.
     * @param OcrWordsConfigureInfoForUpdate $OcrWordsConfigure Text keyword recognition control parameter.
     * @param AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure Full speech recognition control parameter.
     * @param AsrWordsConfigureInfoForUpdate $AsrWordsConfigure Speech keyword recognition control parameter.
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
    }
}
