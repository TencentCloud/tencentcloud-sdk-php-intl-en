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
 * CreateWatermarkTemplate request structure.
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method string getCoordinateOrigin() Obtain 
 * @method void setCoordinateOrigin(string $CoordinateOrigin) Set 
 * @method string getXPos() Obtain 
 * @method void setXPos(string $XPos) Set 
 * @method string getYPos() Obtain 
 * @method void setYPos(string $YPos) Set 
 * @method ImageWatermarkInput getImageTemplate() Obtain 
 * @method void setImageTemplate(ImageWatermarkInput $ImageTemplate) Set 
 * @method TextWatermarkTemplateInput getTextTemplate() Obtain 
 * @method void setTextTemplate(TextWatermarkTemplateInput $TextTemplate) Set 
 * @method SvgWatermarkInput getSvgTemplate() Obtain 
 * @method void setSvgTemplate(SvgWatermarkInput $SvgTemplate) Set 
 */
class CreateWatermarkTemplateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

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
     * @var string 
     */
    public $CoordinateOrigin;

    /**
     * @var string 
     */
    public $XPos;

    /**
     * @var string 
     */
    public $YPos;

    /**
     * @var ImageWatermarkInput 
     */
    public $ImageTemplate;

    /**
     * @var TextWatermarkTemplateInput 
     */
    public $TextTemplate;

    /**
     * @var SvgWatermarkInput 
     */
    public $SvgTemplate;

    /**
     * @param string $Type 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Comment 
     * @param string $CoordinateOrigin 
     * @param string $XPos 
     * @param string $YPos 
     * @param ImageWatermarkInput $ImageTemplate 
     * @param TextWatermarkTemplateInput $TextTemplate 
     * @param SvgWatermarkInput $SvgTemplate 
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("CoordinateOrigin",$param) and $param["CoordinateOrigin"] !== null) {
            $this->CoordinateOrigin = $param["CoordinateOrigin"];
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("ImageTemplate",$param) and $param["ImageTemplate"] !== null) {
            $this->ImageTemplate = new ImageWatermarkInput();
            $this->ImageTemplate->deserialize($param["ImageTemplate"]);
        }

        if (array_key_exists("TextTemplate",$param) and $param["TextTemplate"] !== null) {
            $this->TextTemplate = new TextWatermarkTemplateInput();
            $this->TextTemplate->deserialize($param["TextTemplate"]);
        }

        if (array_key_exists("SvgTemplate",$param) and $param["SvgTemplate"] !== null) {
            $this->SvgTemplate = new SvgWatermarkInput();
            $this->SvgTemplate->deserialize($param["SvgTemplate"]);
        }
    }
}
