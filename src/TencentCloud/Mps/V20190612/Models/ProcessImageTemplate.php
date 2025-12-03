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
 * Image processing template.
 *
 * @method integer getDefinition() Obtain Unique identifier of the image processing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the image processing template.
 * @method string getName() Obtain Image processing template name.
 * @method void setName(string $Name) Set Image processing template name.
 * @method string getComment() Obtain Description information of the image processing template.
 * @method void setComment(string $Comment) Set Description information of the image processing template.
 * @method string getType() Obtain Template type.
 * @method void setType(string $Type) Set Template type.
 * @method ImageTaskInput getProcessImageConfig() Obtain Image processing template configuration parameter.
 * @method void setProcessImageConfig(ImageTaskInput $ProcessImageConfig) Set Image processing template configuration parameter.
 * @method string getCreateTime() Obtain Template creation time.
 * @method void setCreateTime(string $CreateTime) Set Template creation time.
 * @method string getUpdateTime() Obtain Last modification time of the template.
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time of the template.
 */
class ProcessImageTemplate extends AbstractModel
{
    /**
     * @var integer Unique identifier of the image processing template.
     */
    public $Definition;

    /**
     * @var string Image processing template name.
     */
    public $Name;

    /**
     * @var string Description information of the image processing template.
     */
    public $Comment;

    /**
     * @var string Template type.
     */
    public $Type;

    /**
     * @var ImageTaskInput Image processing template configuration parameter.
     */
    public $ProcessImageConfig;

    /**
     * @var string Template creation time.
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the template.
     */
    public $UpdateTime;

    /**
     * @param integer $Definition Unique identifier of the image processing template.
     * @param string $Name Image processing template name.
     * @param string $Comment Description information of the image processing template.
     * @param string $Type Template type.
     * @param ImageTaskInput $ProcessImageConfig Image processing template configuration parameter.
     * @param string $CreateTime Template creation time.
     * @param string $UpdateTime Last modification time of the template.
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

        if (array_key_exists("ProcessImageConfig",$param) and $param["ProcessImageConfig"] !== null) {
            $this->ProcessImageConfig = new ImageTaskInput();
            $this->ProcessImageConfig->deserialize($param["ProcessImageConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
