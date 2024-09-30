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
 * Details of a video content recognition template
 *
 * @method integer getDefinition() Obtain Unique ID of a video content recognition template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a video content recognition template.
 * @method string getName() Obtain Name of a video content recognition template.
 * @method void setName(string $Name) Set Name of a video content recognition template.
 * @method string getComment() Obtain Description of a video content recognition template.
 * @method void setComment(string $Comment) Set Description of a video content recognition template.
 * @method FaceConfigureInfo getFaceConfigure() Obtain Face recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set Face recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain Full text recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set Full text recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain Text keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set Text keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain Full speech recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set Full speech recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain Speech keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set Speech keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TranslateConfigureInfo getTranslateConfigure() Obtain Voice translation control parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranslateConfigure(TranslateConfigureInfo $TranslateConfigure) Set Voice translation control parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getUpdateTime() Obtain Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getType() Obtain The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class AIRecognitionTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique ID of a video content recognition template.
     */
    public $Definition;

    /**
     * @var string Name of a video content recognition template.
     */
    public $Name;

    /**
     * @var string Description of a video content recognition template.
     */
    public $Comment;

    /**
     * @var FaceConfigureInfo Face recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo Full text recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo Text keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo Full speech recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo Speech keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrWordsConfigure;

    /**
     * @var TranslateConfigureInfo Voice translation control parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranslateConfigure;

    /**
     * @var string Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $UpdateTime;

    /**
     * @var string The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @param integer $Definition Unique ID of a video content recognition template.
     * @param string $Name Name of a video content recognition template.
     * @param string $Comment Description of a video content recognition template.
     * @param FaceConfigureInfo $FaceConfigure Face recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure Full text recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param OcrWordsConfigureInfo $OcrWordsConfigure Text keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure Full speech recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AsrWordsConfigureInfo $AsrWordsConfigure Speech keyword recognition control parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TranslateConfigureInfo $TranslateConfigure Voice translation control parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $UpdateTime Last modified time of a template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $Type The template type. Valid values:
* Preset
* Custom
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
