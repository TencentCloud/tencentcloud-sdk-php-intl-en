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
 * ModifyAIRecognitionTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the audio/video content recognition template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the audio/video content recognition template.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Audio and video content recognition template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Audio and video content recognition template name. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Audio/video content recognition template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Audio/video content recognition template description, with a length limit of 256 characters.
 * @method HeadTailConfigureInfoForUpdate getHeadTailConfigure() Obtain Video opening and closing recognition control parameters.
 * @method void setHeadTailConfigure(HeadTailConfigureInfoForUpdate $HeadTailConfigure) Set Video opening and closing recognition control parameters.
 * @method SegmentConfigureInfoForUpdate getSegmentConfigure() Obtain Video split recognition control parameters.
 * @method void setSegmentConfigure(SegmentConfigureInfoForUpdate $SegmentConfigure) Set Video split recognition control parameters.
 * @method FaceConfigureInfoForUpdate getFaceConfigure() Obtain Face recognition control parameter.
 * @method void setFaceConfigure(FaceConfigureInfoForUpdate $FaceConfigure) Set Face recognition control parameter.
 * @method OcrFullTextConfigureInfoForUpdate getOcrFullTextConfigure() Obtain Text Full-text Recognition Control Parameters.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure) Set Text Full-text Recognition Control Parameters.
 * @method OcrWordsConfigureInfoForUpdate getOcrWordsConfigure() Obtain Text keyword recognition control parameters.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfoForUpdate $OcrWordsConfigure) Set Text keyword recognition control parameters.
 * @method AsrFullTextConfigureInfoForUpdate getAsrFullTextConfigure() Obtain Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left blank or filled with an empty string, no translation will be performed, and the billing item will match full text recognition).</font>
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure) Set Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left blank or filled with an empty string, no translation will be performed, and the billing item will match full text recognition).</font>
 * @method AsrWordsConfigureInfoForUpdate getAsrWordsConfigure() Obtain Voice keyword recognition control parameters.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfoForUpdate $AsrWordsConfigure) Set Voice keyword recognition control parameters.
 * @method AsrTranslateConfigureInfoForUpdate getAsrTranslateConfigure() Obtain Voice translation recognition control parameters.
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure) Set Voice translation recognition control parameters.
 * @method ObjectConfigureInfoForUpdate getObjectConfigure() Obtain Object recognition control parameters.
 * @method void setObjectConfigure(ObjectConfigureInfoForUpdate $ObjectConfigure) Set Object recognition control parameters.
 * @method float getScreenshotInterval() Obtain Frame interception interval, unit: seconds, minimum value 0.5.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Frame interception interval, unit: seconds, minimum value 0.5.
 */
class ModifyAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the audio/video content recognition template.
     */
    public $Definition;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Audio and video content recognition template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Audio/video content recognition template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfoForUpdate Video opening and closing recognition control parameters.
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfoForUpdate Video split recognition control parameters.
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfoForUpdate Face recognition control parameter.
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
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left blank or filled with an empty string, no translation will be performed, and the billing item will match full text recognition).</font>
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfoForUpdate Voice keyword recognition control parameters.
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfoForUpdate Voice translation recognition control parameters.
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfoForUpdate Object recognition control parameters.
     */
    public $ObjectConfigure;

    /**
     * @var float Frame interception interval, unit: seconds, minimum value 0.5.
     */
    public $ScreenshotInterval;

    /**
     * @param integer $Definition Unique identifier of the audio/video content recognition template.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Audio and video content recognition template name. The length cannot exceed 64 characters.
     * @param string $Comment Audio/video content recognition template description, with a length limit of 256 characters.
     * @param HeadTailConfigureInfoForUpdate $HeadTailConfigure Video opening and closing recognition control parameters.
     * @param SegmentConfigureInfoForUpdate $SegmentConfigure Video split recognition control parameters.
     * @param FaceConfigureInfoForUpdate $FaceConfigure Face recognition control parameter.
     * @param OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure Text Full-text Recognition Control Parameters.
     * @param OcrWordsConfigureInfoForUpdate $OcrWordsConfigure Text keyword recognition control parameters.
     * @param AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. It is recommended to use the AsrTranslateConfigure parameter to trigger voice translation recognition (when DstLanguage is left blank or filled with an empty string, no translation will be performed, and the billing item will match full text recognition).</font>
     * @param AsrWordsConfigureInfoForUpdate $AsrWordsConfigure Voice keyword recognition control parameters.
     * @param AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure Voice translation recognition control parameters.
     * @param ObjectConfigureInfoForUpdate $ObjectConfigure Object recognition control parameters.
     * @param float $ScreenshotInterval Frame interception interval, unit: seconds, minimum value 0.5.
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
