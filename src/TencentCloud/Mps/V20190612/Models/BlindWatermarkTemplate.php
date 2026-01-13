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
 * Digital watermark template details.
 *
 * @method integer getDefinition() Obtain Unique identifier of the digital watermark template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the digital watermark template.
 * @method string getType() Obtain Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
 * @method void setType(string $Type) Set Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
 * @method string getName() Obtain Digital watermark template name.
 * @method void setName(string $Name) Set Digital watermark template name.
 * @method string getTextContent() Obtain Text content of the digital watermark template. The length cannot exceed 64 characters.
 * @method void setTextContent(string $TextContent) Set Text content of the digital watermark template. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Description information of the digital watermark template.
 * @method void setComment(string $Comment) Set Description information of the digital watermark template.
 * @method string getCreateTime() Obtain Creation time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Creation time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getUpdateTime() Obtain Last modification time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class BlindWatermarkTemplate extends AbstractModel
{
    /**
     * @var integer Unique identifier of the digital watermark template.
     */
    public $Definition;

    /**
     * @var string Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
     */
    public $Type;

    /**
     * @var string Digital watermark template name.
     */
    public $Name;

    /**
     * @var string Text content of the digital watermark template. The length cannot exceed 64 characters.
     */
    public $TextContent;

    /**
     * @var string Description information of the digital watermark template.
     */
    public $Comment;

    /**
     * @var string Creation time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique identifier of the digital watermark template.
     * @param string $Type Digital watermark type. Valid values: <li>blind-basic: basic copyright digital watermark;</li> <li>blind-nagra: NAGRA forensics watermark.</li>
     * @param string $Name Digital watermark template name.
     * @param string $TextContent Text content of the digital watermark template. The length cannot exceed 64 characters.
     * @param string $Comment Description information of the digital watermark template.
     * @param string $CreateTime Creation time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $UpdateTime Last modification time of the digital watermark template in [ISO date and time format](https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
