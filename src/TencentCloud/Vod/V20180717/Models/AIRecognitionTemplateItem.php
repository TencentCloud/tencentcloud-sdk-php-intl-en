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
 * Video content recognition template details.
 *
 * @method integer getDefinition() Obtain Unique ID of video content recognition template.
 * @method void setDefinition(integer $Definition) Set Unique ID of video content recognition template.
 * @method string getName() Obtain Video content recognition template name.
 * @method void setName(string $Name) Set Video content recognition template name.
 * @method string getComment() Obtain Video content recognition template description.
 * @method void setComment(string $Comment) Set Video content recognition template description.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
 * @method HeadTailConfigureInfo getHeadTailConfigure() Obtain Head and tail recognition control parameter.
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) Set Head and tail recognition control parameter.
 * @method SegmentConfigureInfo getSegmentConfigure() Obtain Segmentation recognition control parameter.
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) Set Segmentation recognition control parameter.
 * @method FaceConfigureInfo getFaceConfigure() Obtain Face recognition control parameter.
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set Face recognition control parameter.
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain Text Full-text Recognition Control Parameters.
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set Text Full-text Recognition Control Parameters.
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain Text keyword recognition control parameter.
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set Text keyword recognition control parameter.
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger speech translation recognition (when DstLanguage is empty or a fill-in string, no translation is performed, and the billing item is the same as full speech recognition).</font>
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger speech translation recognition (when DstLanguage is empty or a fill-in string, no translation is performed, and the billing item is the same as full speech recognition).</font>
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain Voice keyword recognition control parameters.
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set Voice keyword recognition control parameters.
 * @method AsrTranslateConfigureInfo getAsrTranslateConfigure() Obtain Voice translation recognition control parameters.
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfo $AsrTranslateConfigure) Set Voice translation recognition control parameters.
 * @method ObjectConfigureInfo getObjectConfigure() Obtain Object recognition control parameter.
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) Set Object recognition control parameter.
 * @method float getScreenshotInterval() Obtain Screencapturing interval in seconds.
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set Screencapturing interval in seconds.
 * @method string getCreateTime() Obtain Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AIRecognitionTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique ID of video content recognition template.
     */
    public $Definition;

    /**
     * @var string Video content recognition template name.
     */
    public $Name;

    /**
     * @var string Video content recognition template description.
     */
    public $Comment;

    /**
     * @var string Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
     */
    public $Type;

    /**
     * @var HeadTailConfigureInfo Head and tail recognition control parameter.
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo Segmentation recognition control parameter.
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
     * @var OcrWordsConfigureInfo Text keyword recognition control parameter.
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger speech translation recognition (when DstLanguage is empty or a fill-in string, no translation is performed, and the billing item is the same as full speech recognition).</font>
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
     * @var ObjectConfigureInfo Object recognition control parameter.
     */
    public $ObjectConfigure;

    /**
     * @var float Screencapturing interval in seconds.
     */
    public $ScreenshotInterval;

    /**
     * @var string Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique ID of video content recognition template.
     * @param string $Name Video content recognition template name.
     * @param string $Comment Video content recognition template description.
     * @param string $Type Template type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
     * @param HeadTailConfigureInfo $HeadTailConfigure Head and tail recognition control parameter.
     * @param SegmentConfigureInfo $SegmentConfigure Segmentation recognition control parameter.
     * @param FaceConfigureInfo $FaceConfigure Face recognition control parameter.
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure Text Full-text Recognition Control Parameters.
     * @param OcrWordsConfigureInfo $OcrWordsConfigure Text keyword recognition control parameter.
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure Voice full-text recognition control parameters.
<font color=red>Note: This parameter is no longer maintained. Use the AsrTranslateConfigure parameter to trigger speech translation recognition (when DstLanguage is empty or a fill-in string, no translation is performed, and the billing item is the same as full speech recognition).</font>
     * @param AsrWordsConfigureInfo $AsrWordsConfigure Voice keyword recognition control parameters.
     * @param AsrTranslateConfigureInfo $AsrTranslateConfigure Voice translation recognition control parameters.
     * @param ObjectConfigureInfo $ObjectConfigure Object recognition control parameter.
     * @param float $ScreenshotInterval Screencapturing interval in seconds.
     * @param string $CreateTime Creation time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Last modified time of template in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
