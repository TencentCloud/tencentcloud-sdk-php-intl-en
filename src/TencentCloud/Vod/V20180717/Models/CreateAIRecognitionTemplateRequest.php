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
 * CreateAIRecognitionTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Video content recognition template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Video content recognition template name. Length limit: 64 characters.
 * @method string getComment() Obtain Description of video content recognition template. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Description of video content recognition template. Length limit: 256 characters.
 * @method HeadTailConfigureInfo getHeadTailConfigure() Obtain Control parameter of video opening and ending credits recognition.
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) Set Control parameter of video opening and ending credits recognition.
 * @method SegmentConfigureInfo getSegmentConfigure() Obtain Control parameter of video splitting recognition.
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) Set Control parameter of video splitting recognition.
 * @method FaceConfigureInfo getFaceConfigure() Obtain Control parameter of face recognition.
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set Control parameter of face recognition.
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain Control parameter of full text recognition.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set Control parameter of full text recognition.
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain Control parameter of text keyword recognition.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set Control parameter of text keyword recognition.
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain Control parameter of full speech recognition.
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set Control parameter of full speech recognition.
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain Control parameter of speech keyword recognition.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set Control parameter of speech keyword recognition.
 * @method AsrTranslateConfigureInfo getAsrTranslateConfigure() Obtain Control parameter of voice translation.
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfo $AsrTranslateConfigure) Set Control parameter of voice translation.
 * @method ObjectConfigureInfo getObjectConfigure() Obtain Control parameter of object recognition.
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) Set Control parameter of object recognition.
 * @method float getScreenshotInterval() Obtain Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
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
     * @var HeadTailConfigureInfo Control parameter of video opening and ending credits recognition.
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo Control parameter of video splitting recognition.
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfo Control parameter of face recognition.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo Control parameter of full text recognition.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo Control parameter of text keyword recognition.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo Control parameter of full speech recognition.
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo Control parameter of speech keyword recognition.
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfo Control parameter of voice translation.
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfo Control parameter of object recognition.
     */
    public $ObjectConfigure;

    /**
     * @var float Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Video content recognition template name. Length limit: 64 characters.
     * @param string $Comment Description of video content recognition template. Length limit: 256 characters.
     * @param HeadTailConfigureInfo $HeadTailConfigure Control parameter of video opening and ending credits recognition.
     * @param SegmentConfigureInfo $SegmentConfigure Control parameter of video splitting recognition.
     * @param FaceConfigureInfo $FaceConfigure Control parameter of face recognition.
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure Control parameter of full text recognition.
     * @param OcrWordsConfigureInfo $OcrWordsConfigure Control parameter of text keyword recognition.
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure Control parameter of full speech recognition.
     * @param AsrWordsConfigureInfo $AsrWordsConfigure Control parameter of speech keyword recognition.
     * @param AsrTranslateConfigureInfo $AsrTranslateConfigure Control parameter of voice translation.
     * @param ObjectConfigureInfo $ObjectConfigure Control parameter of object recognition.
     * @param float $ScreenshotInterval Frame capturing interval in seconds. If this parameter is left empty, 1 second will be used by default. Minimum value: 0.5 seconds.
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
            $this->HeadTailConfigure = new HeadTailConfigureInfo();
            $this->HeadTailConfigure->deserialize($param["HeadTailConfigure"]);
        }

        if (array_key_exists("SegmentConfigure",$param) and $param["SegmentConfigure"] !== null) {
            $this->SegmentConfigure = new SegmentConfigureInfo();
            $this->SegmentConfigure->deserialize($param["SegmentConfigure"]);
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

        if (array_key_exists("AsrTranslateConfigure",$param) and $param["AsrTranslateConfigure"] !== null) {
            $this->AsrTranslateConfigure = new AsrTranslateConfigureInfo();
            $this->AsrTranslateConfigure->deserialize($param["AsrTranslateConfigure"]);
        }

        if (array_key_exists("ObjectConfigure",$param) and $param["ObjectConfigure"] !== null) {
            $this->ObjectConfigure = new ObjectConfigureInfo();
            $this->ObjectConfigure->deserialize($param["ObjectConfigure"]);
        }

        if (array_key_exists("ScreenshotInterval",$param) and $param["ScreenshotInterval"] !== null) {
            $this->ScreenshotInterval = $param["ScreenshotInterval"];
        }
    }
}
