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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlindWatermarkTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the digital watermark template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the digital watermark template.
 * @method string getName() Obtain Digital watermark template name, which supports Chinese, English, digits, underscores (_), hyphens (-), and periods (.). The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Digital watermark template name, which supports Chinese, English, digits, underscores (_), hyphens (-), and periods (.). The length cannot exceed 64 characters.
 * @method string getComment() Obtain Description information of the digital watermark template. The length cannot exceed 256 characters.
 * @method void setComment(string $Comment) Set Description information of the digital watermark template. The length cannot exceed 256 characters.
 * @method string getTextContent() Obtain Text content of the digital watermark. The length cannot exceed 64 characters. The text content cannot be modified for NAGRA watermark templates.
 * @method void setTextContent(string $TextContent) Set Text content of the digital watermark. The length cannot exceed 64 characters. The text content cannot be modified for NAGRA watermark templates.
 */
class ModifyBlindWatermarkTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the digital watermark template.
     */
    public $Definition;

    /**
     * @var string Digital watermark template name, which supports Chinese, English, digits, underscores (_), hyphens (-), and periods (.). The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Description information of the digital watermark template. The length cannot exceed 256 characters.
     */
    public $Comment;

    /**
     * @var string Text content of the digital watermark. The length cannot exceed 64 characters. The text content cannot be modified for NAGRA watermark templates.
     */
    public $TextContent;

    /**
     * @param integer $Definition Unique identifier of the digital watermark template.
     * @param string $Name Digital watermark template name, which supports Chinese, English, digits, underscores (_), hyphens (-), and periods (.). The length cannot exceed 64 characters.
     * @param string $Comment Description information of the digital watermark template. The length cannot exceed 256 characters.
     * @param string $TextContent Text content of the digital watermark. The length cannot exceed 64 characters. The text content cannot be modified for NAGRA watermark templates.
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

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }
    }
}
