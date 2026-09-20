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
 * CreateAIRecognitionTemplate request structure.
 *
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getName() Obtain Video content recognition template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Video content recognition template name. Length limit: 64 characters.
 * @method string getComment() Obtain Description of the audio/video content recognition template, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Description of the audio/video content recognition template, with a length limit of 256 characters.
 * @method HeadTailConfigureInfo getHeadTailConfigure() Obtain Control parameters for video opening and closing recognition.
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) Set Control parameters for video opening and closing recognition.
 * @method SegmentConfigureInfo getSegmentConfigure() Obtain Video split recognition control parameters.
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) Set Video split recognition control parameters.
 * @method FaceConfigureInfo getFaceConfigure() Obtain Control parameters for face recognition.
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set Control parameters for face recognition.
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain Text Full-text Recognition Control Parameters.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set Text Full-text Recognition Control Parameters.
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain Text keyword recognition control parameters.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set Text keyword recognition control parameters.
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to initiate speech translation recognition (when DstLanguage is not filled in or is an empty string, no translation is performed, and the billing item is the same as full text speech recognition).</font>
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to initiate speech translation recognition (when DstLanguage is not filled in or is an empty string, no translation is performed, and the billing item is the same as full text speech recognition).</font>
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain Voice keyword recognition control parameters.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set Voice keyword recognition control parameters.
 * @method AsrTranslateConfigureInfo getAsrTranslateConfigure() Obtain Speech translation recognition control parameters.
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfo $AsrTranslateConfigure) Set Speech translation recognition control parameters.
 * @method ObjectConfigureInfo getObjectConfigure() Obtain Control parameters for object recognition.
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) Set Control parameters for object recognition.
 * @method float getScreenshotInterval() Obtain Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Video content recognition template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Description of the audio/video content recognition template, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfo Control parameters for video opening and closing recognition.
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo Video split recognition control parameters.
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfo Control parameters for face recognition.
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo Text Full-text Recognition Control Parameters.
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo Text keyword recognition control parameters.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to initiate speech translation recognition (when DstLanguage is not filled in or is an empty string, no translation is performed, and the billing item is the same as full text speech recognition).</font>
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo Voice keyword recognition control parameters.
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfo Speech translation recognition control parameters.
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfo Control parameters for object recognition.
     */
    public $ObjectConfigure;

    /**
     * @var float Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Name Video content recognition template name. Length limit: 64 characters.
     * @param string $Comment Description of the audio/video content recognition template, with a length limit of 256 characters.
     * @param HeadTailConfigureInfo $HeadTailConfigure Control parameters for video opening and closing recognition.
     * @param SegmentConfigureInfo $SegmentConfigure Video split recognition control parameters.
     * @param FaceConfigureInfo $FaceConfigure Control parameters for face recognition.
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure Text Full-text Recognition Control Parameters.
     * @param OcrWordsConfigureInfo $OcrWordsConfigure Text keyword recognition control parameters.
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to initiate speech translation recognition (when DstLanguage is not filled in or is an empty string, no translation is performed, and the billing item is the same as full text speech recognition).</font>
     * @param AsrWordsConfigureInfo $AsrWordsConfigure Voice keyword recognition control parameters.
     * @param AsrTranslateConfigureInfo $AsrTranslateConfigure Speech translation recognition control parameters.
     * @param ObjectConfigureInfo $ObjectConfigure Control parameters for object recognition.
     * @param float $ScreenshotInterval Frame interception interval in seconds. If not specified, the default frame interval is 1 second, with a minimum value of 0.5 seconds.
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
