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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAIRecognitionTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of video content recognition template.
 * @method void setDefinition(integer $Definition) Set Unique ID of video content recognition template.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Video content recognition template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Video content recognition template name. Length limit: 64 characters.
 * @method string getComment() Obtain Description of video content recognition template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of video content recognition template. Length limit: 256 characters.
 * @method HeadTailConfigureInfoForUpdate getHeadTailConfigure() Obtain Control parameter of video opening and ending credits recognition.
 * @method void setHeadTailConfigure(HeadTailConfigureInfoForUpdate $HeadTailConfigure) Set Control parameter of video opening and ending credits recognition.
 * @method SegmentConfigureInfoForUpdate getSegmentConfigure() Obtain Control parameter of video splitting recognition.
 * @method void setSegmentConfigure(SegmentConfigureInfoForUpdate $SegmentConfigure) Set Control parameter of video splitting recognition.
 * @method FaceConfigureInfoForUpdate getFaceConfigure() Obtain Control parameter of face recognition.
 * @method void setFaceConfigure(FaceConfigureInfoForUpdate $FaceConfigure) Set Control parameter of face recognition.
 * @method OcrFullTextConfigureInfoForUpdate getOcrFullTextConfigure() Obtain Control parameter of full text recognition.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure) Set Control parameter of full text recognition.
 * @method OcrWordsConfigureInfoForUpdate getOcrWordsConfigure() Obtain Control parameter of text keyword recognition.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfoForUpdate $OcrWordsConfigure) Set Control parameter of text keyword recognition.
 * @method AsrFullTextConfigureInfoForUpdate getAsrFullTextConfigure() Obtain Control parameter of full speech recognition.
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure) Set Control parameter of full speech recognition.
 * @method AsrWordsConfigureInfoForUpdate getAsrWordsConfigure() Obtain Control parameter of speech keyword recognition.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfoForUpdate $AsrWordsConfigure) Set Control parameter of speech keyword recognition.
 * @method AsrTranslateConfigureInfoForUpdate getAsrTranslateConfigure() Obtain Control parameter of voice translation.
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure) Set Control parameter of voice translation.
 * @method ObjectConfigureInfoForUpdate getObjectConfigure() Obtain Control parameter of object recognition.
 * @method void setObjectConfigure(ObjectConfigureInfoForUpdate $ObjectConfigure) Set Control parameter of object recognition.
 * @method float getScreenshotInterval() Obtain Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame capturing interval in seconds. Minimum value: 0.5 seconds.
 */
class ModifyAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of video content recognition template.
     */
    public $Definition;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Video content recognition template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of video content recognition template. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfoForUpdate Control parameter of video opening and ending credits recognition.
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfoForUpdate Control parameter of video splitting recognition.
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfoForUpdate Control parameter of face recognition.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfoForUpdate Control parameter of full text recognition.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfoForUpdate Control parameter of text keyword recognition.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfoForUpdate Control parameter of full speech recognition.
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfoForUpdate Control parameter of speech keyword recognition.
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfoForUpdate Control parameter of voice translation.
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfoForUpdate Control parameter of object recognition.
     */
    public $ObjectConfigure;

    /**
     * @var float Frame capturing interval in seconds. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @param integer $Definition Unique ID of video content recognition template.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Video content recognition template name. Length limit: 64 characters.
     * @param string $Comment Description of video content recognition template. Length limit: 256 characters.
     * @param HeadTailConfigureInfoForUpdate $HeadTailConfigure Control parameter of video opening and ending credits recognition.
     * @param SegmentConfigureInfoForUpdate $SegmentConfigure Control parameter of video splitting recognition.
     * @param FaceConfigureInfoForUpdate $FaceConfigure Control parameter of face recognition.
     * @param OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure Control parameter of full text recognition.
     * @param OcrWordsConfigureInfoForUpdate $OcrWordsConfigure Control parameter of text keyword recognition.
     * @param AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure Control parameter of full speech recognition.
     * @param AsrWordsConfigureInfoForUpdate $AsrWordsConfigure Control parameter of speech keyword recognition.
     * @param AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure Control parameter of voice translation.
     * @param ObjectConfigureInfoForUpdate $ObjectConfigure Control parameter of object recognition.
     * @param float $ScreenshotInterval Frame capturing interval in seconds. Minimum value: 0.5 seconds.
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

        if (array_key_exists("HeadTailConfigure",$param) and $param["HeadTailConfigure"] !== null) {
            $this->HeadTailConfigure = new HeadTailConfigureInfoForUpdate();
            $this->HeadTailConfigure->deserialize($param["HeadTailConfigure"]);
        }

        if (array_key_exists("SegmentConfigure",$param) and $param["SegmentConfigure"] !== null) {
            $this->SegmentConfigure = new SegmentConfigureInfoForUpdate();
            $this->SegmentConfigure->deserialize($param["SegmentConfigure"]);
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

        if (array_key_exists("AsrTranslateConfigure",$param) and $param["AsrTranslateConfigure"] !== null) {
            $this->AsrTranslateConfigure = new AsrTranslateConfigureInfoForUpdate();
            $this->AsrTranslateConfigure->deserialize($param["AsrTranslateConfigure"]);
        }

        if (array_key_exists("ObjectConfigure",$param) and $param["ObjectConfigure"] !== null) {
            $this->ObjectConfigure = new ObjectConfigureInfoForUpdate();
            $this->ObjectConfigure->deserialize($param["ObjectConfigure"]);
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }
    }
}
