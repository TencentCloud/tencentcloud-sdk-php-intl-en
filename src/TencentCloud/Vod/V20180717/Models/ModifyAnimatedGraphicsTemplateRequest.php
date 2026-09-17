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
 * ModifyAnimatedGraphicsTemplate request structure.
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getWidth() Obtain 
 * @method void setWidth(integer $Width) Set 
 * @method integer getHeight() Obtain 
 * @method void setHeight(integer $Height) Set 
 * @method string getResolutionAdaptive() Obtain 
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set 
 * @method string getFormat() Obtain 
 * @method void setFormat(string $Format) Set 
 * @method integer getFps() Obtain 
 * @method void setFps(integer $Fps) Set 
 * @method float getQuality() Obtain 
 * @method void setQuality(float $Quality) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 */
class ModifyAnimatedGraphicsTemplateRequest extends AbstractModel
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
     * @var integer 
     */
    public $Width;

    /**
     * @var integer 
     */
    public $Height;

    /**
     * @var string 
     */
    public $ResolutionAdaptive;

    /**
     * @var string 
     */
    public $Format;

    /**
     * @var integer 
     */
    public $Fps;

    /**
     * @var float 
     */
    public $Quality;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @param integer $Definition 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param integer $Width 
     * @param integer $Height 
     * @param string $ResolutionAdaptive 
     * @param string $Format 
     * @param integer $Fps 
     * @param float $Quality 
     * @param string $Comment 
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
