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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method HeadTailConfigureInfo getHeadTailConfigure() Obtain 
 * @method void setHeadTailConfigure(HeadTailConfigureInfo $HeadTailConfigure) Set 
 * @method SegmentConfigureInfo getSegmentConfigure() Obtain 
 * @method void setSegmentConfigure(SegmentConfigureInfo $SegmentConfigure) Set 
 * @method FaceConfigureInfo getFaceConfigure() Obtain 
 * @method void setFaceConfigure(FaceConfigureInfo $FaceConfigure) Set 
 * @method OcrFullTextConfigureInfo getOcrFullTextConfigure() Obtain 
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfo $OcrFullTextConfigure) Set 
 * @method OcrWordsConfigureInfo getOcrWordsConfigure() Obtain 
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfo $OcrWordsConfigure) Set 
 * @method AsrFullTextConfigureInfo getAsrFullTextConfigure() Obtain 
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfo $AsrFullTextConfigure) Set 
 * @method AsrWordsConfigureInfo getAsrWordsConfigure() Obtain 
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfo $AsrWordsConfigure) Set 
 * @method AsrTranslateConfigureInfo getAsrTranslateConfigure() Obtain 
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfo $AsrTranslateConfigure) Set 
 * @method ObjectConfigureInfo getObjectConfigure() Obtain 
 * @method void setObjectConfigure(ObjectConfigureInfo $ObjectConfigure) Set 
 * @method float getScreenshotInterval() Obtain 
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set 
 */
class CreateAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var HeadTailConfigureInfo 
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfo 
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfo 
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfo 
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfo 
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfo 
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfo 
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfo 
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfo 
     */
    public $ObjectConfigure;

    /**
     * @var float 
     */
    public $ScreenshotInterval;

    /**
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param HeadTailConfigureInfo $HeadTailConfigure 
     * @param SegmentConfigureInfo $SegmentConfigure 
     * @param FaceConfigureInfo $FaceConfigure 
     * @param OcrFullTextConfigureInfo $OcrFullTextConfigure 
     * @param OcrWordsConfigureInfo $OcrWordsConfigure 
     * @param AsrFullTextConfigureInfo $AsrFullTextConfigure 
     * @param AsrWordsConfigureInfo $AsrWordsConfigure 
     * @param AsrTranslateConfigureInfo $AsrTranslateConfigure 
     * @param ObjectConfigureInfo $ObjectConfigure 
     * @param float $ScreenshotInterval 
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
