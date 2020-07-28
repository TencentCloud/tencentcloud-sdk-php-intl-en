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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySnapshotByTimeOffsetTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of a time point screencapturing template.
 * @method void setDefinition(integer $Definition) Set Unique ID of a time point screencapturing template.
 * @method string getName() Obtain Name of a time point screencapturing template. Length limit: 64 characters.
 * @method void setName(string $Name) Set Name of a time point screencapturing template. Length limit: 64 characters.
 * @method integer getWidth() Obtain Image width in px. Value range: [128, 4,096].
 * @method void setWidth(integer $Width) Set Image width in px. Value range: [128, 4,096].
 * @method integer getHeight() Obtain Image height in px. Value range: [128, 4,096].
 * @method void setHeight(integer $Height) Set Image height in px. Value range: [128, 4,096].
 * @method string getResolutionAdaptive() Obtain 
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set 
 * @method string getFormat() Obtain Image format. Valid values: jpg, png.
 * @method void setFormat(string $Format) Set Image format. Valid values: jpg, png.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method string getFillType() Obtain 
 * @method void setFillType(string $FillType) Set 
 */
class ModifySnapshotByTimeOffsetTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of a time point screencapturing template.
     */
    public $Definition;

    /**
     * @var string Name of a time point screencapturing template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var integer Image width in px. Value range: [128, 4,096].
     */
    public $Width;

    /**
     * @var integer Image height in px. Value range: [128, 4,096].
     */
    public $Height;

    /**
     * @var string 
     */
    public $ResolutionAdaptive;

    /**
     * @var string Image format. Valid values: jpg, png.
     */
    public $Format;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var string 
     */
    public $FillType;

    /**
     * @param integer $Definition Unique ID of a time point screencapturing template.
     * @param string $Name Name of a time point screencapturing template. Length limit: 64 characters.
     * @param integer $Width Image width in px. Value range: [128, 4,096].
     * @param integer $Height Image height in px. Value range: [128, 4,096].
     * @param string $ResolutionAdaptive 
     * @param string $Format Image format. Valid values: jpg, png.
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param string $FillType 
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }
    }
}
