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
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Audio and video content recognition template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Audio and video content recognition template name. Length limit: 64 characters.
 * @method string getComment() Obtain Audio/video content recognition template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Audio/video content recognition template description. Length limit: 256 characters.
 * @method HeadTailConfigureInfo getHeadTailConfigure() Obtain Video opening and closing recognition control parameters.
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) Set Video opening and closing recognition control parameters.
 * @method SegmentConfigureInfo getSegmentConfigure() Obtain Video split recognition control parameters.
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) Set Video split recognition control parameters.
 * @method FaceConfigureInfo getFaceConfigure() Obtain Face recognition control parameter.
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set Face recognition control parameter.
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain Text Full-text Recognition Control Parameters.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set Text Full-text Recognition Control Parameters.
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain Text keyword recognition control parameters.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set Text keyword recognition control parameters.
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left empty or filled with an empty string, no translation is performed, and the billing item matches that of full speech recognition).</font>
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left empty or filled with an empty string, no translation is performed, and the billing item matches that of full speech recognition).</font>
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain Voice keyword recognition control parameters.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set Voice keyword recognition control parameters.
 * @method AsrTranslateConfigureInfo getAsrTranslateConfigure() Obtain Voice translation recognition control parameters.
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfo $AsrTranslateConfigure) Set Voice translation recognition control parameters.
 * @method ObjectConfigureInfo getObjectConfigure() Obtain Object recognition control parameters.
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) Set Object recognition control parameters.
 * @method float getScreenshotInterval() Obtain Frame interception interval in seconds. If left empty, the default frame interval is 1 second with a minimum value of 0.5 seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval in seconds. If left empty, the default frame interval is 1 second with a minimum value of 0.5 seconds.
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Audio and video content recognition template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Audio/video content recognition template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfo Video opening and closing recognition control parameters.
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo Video split recognition control parameters.
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfo Face recognition control parameter.
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
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left empty or filled with an empty string, no translation is performed, and the billing item matches that of full speech recognition).</font>
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo Voice keyword recognition control parameters.
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfo Voice translation recognition control parameters.
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfo Object recognition control parameters.
     */
    public $ObjectConfigure;

    /**
     * @var float Frame interception interval in seconds. If left empty, the default frame interval is 1 second with a minimum value of 0.5 seconds.
     */
    public $ScreenshotInterval;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Audio and video content recognition template name. Length limit: 64 characters.
     * @param string $Comment Audio/video content recognition template description. Length limit: 256 characters.
     * @param HeadTailConfigureInfo $HeadTailConfigure Video opening and closing recognition control parameters.
     * @param SegmentConfigureInfo $SegmentConfigure Video split recognition control parameters.
     * @param FaceConfigureInfo $FaceConfigure Face recognition control parameter.
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure Text Full-text Recognition Control Parameters.
     * @param OcrWordsConfigureInfo $OcrWordsConfigure Text keyword recognition control parameters.
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left empty or filled with an empty string, no translation is performed, and the billing item matches that of full speech recognition).</font>
     * @param AsrWordsConfigureInfo $AsrWordsConfigure Voice keyword recognition control parameters.
     * @param AsrTranslateConfigureInfo $AsrTranslateConfigure Voice translation recognition control parameters.
     * @param ObjectConfigureInfo $ObjectConfigure Object recognition control parameters.
     * @param float $ScreenshotInterval Frame interception interval in seconds. If left empty, the default frame interval is 1 second with a minimum value of 0.5 seconds.
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
