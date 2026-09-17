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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method HeadTailConfigureInfoForUpdate getHeadTailConfigure() Obtain 
 * @method void setHeadTailConfigure(HeadTailConfigureInfoForUpdate $HeadTailConfigure) Set 
 * @method SegmentConfigureInfoForUpdate getSegmentConfigure() Obtain 
 * @method void setSegmentConfigure(SegmentConfigureInfoForUpdate $SegmentConfigure) Set 
 * @method FaceConfigureInfoForUpdate getFaceConfigure() Obtain 
 * @method void setFaceConfigure(FaceConfigureInfoForUpdate $FaceConfigure) Set 
 * @method OcrFullTextConfigureInfoForUpdate getOcrFullTextConfigure() Obtain 
 * @method void setOcrFullTextConfigure(OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure) Set 
 * @method OcrWordsConfigureInfoForUpdate getOcrWordsConfigure() Obtain 
 * @method void setOcrWordsConfigure(OcrWordsConfigureInfoForUpdate $OcrWordsConfigure) Set 
 * @method AsrFullTextConfigureInfoForUpdate getAsrFullTextConfigure() Obtain 
 * @method void setAsrFullTextConfigure(AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure) Set 
 * @method AsrWordsConfigureInfoForUpdate getAsrWordsConfigure() Obtain 
 * @method void setAsrWordsConfigure(AsrWordsConfigureInfoForUpdate $AsrWordsConfigure) Set 
 * @method AsrTranslateConfigureInfoForUpdate getAsrTranslateConfigure() Obtain 
 * @method void setAsrTranslateConfigure(AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure) Set 
 * @method ObjectConfigureInfoForUpdate getObjectConfigure() Obtain 
 * @method void setObjectConfigure(ObjectConfigureInfoForUpdate $ObjectConfigure) Set 
 * @method float getScreenshotInterval() Obtain 
 * @method void setScreenshotInterval(float $ScreenshotInterval) Set 
 */
class ModifyAIRecognitionTemplateRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

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
     * @var HeadTailConfigureInfoForUpdate 
     */
    public $HeadTailConfigure;

    /**
     * @var SegmentConfigureInfoForUpdate 
     */
    public $SegmentConfigure;

    /**
     * @var FaceConfigureInfoForUpdate 
     */
    public $FaceConfigure;

    /**
     * @var OcrFullTextConfigureInfoForUpdate 
     */
    public $OcrFullTextConfigure;

    /**
     * @var OcrWordsConfigureInfoForUpdate 
     */
    public $OcrWordsConfigure;

    /**
     * @var AsrFullTextConfigureInfoForUpdate 
     */
    public $AsrFullTextConfigure;

    /**
     * @var AsrWordsConfigureInfoForUpdate 
     */
    public $AsrWordsConfigure;

    /**
     * @var AsrTranslateConfigureInfoForUpdate 
     */
    public $AsrTranslateConfigure;

    /**
     * @var ObjectConfigureInfoForUpdate 
     */
    public $ObjectConfigure;

    /**
     * @var float 
     */
    public $ScreenshotInterval;

    /**
     * @param integer $Definition 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param HeadTailConfigureInfoForUpdate $HeadTailConfigure 
     * @param SegmentConfigureInfoForUpdate $SegmentConfigure 
     * @param FaceConfigureInfoForUpdate $FaceConfigure 
     * @param OcrFullTextConfigureInfoForUpdate $OcrFullTextConfigure 
     * @param OcrWordsConfigureInfoForUpdate $OcrWordsConfigure 
     * @param AsrFullTextConfigureInfoForUpdate $AsrFullTextConfigure 
     * @param AsrWordsConfigureInfoForUpdate $AsrWordsConfigure 
     * @param AsrTranslateConfigureInfoForUpdate $AsrTranslateConfigure 
     * @param ObjectConfigureInfoForUpdate $ObjectConfigure 
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
