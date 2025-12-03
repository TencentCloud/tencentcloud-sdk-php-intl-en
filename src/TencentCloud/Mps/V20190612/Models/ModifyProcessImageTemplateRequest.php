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
 * ModifyProcessImageTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the image processing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the image processing template.
 * @method string getName() Obtain Image processing template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Image processing template name. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Template description information. The length cannot exceed 256 characters.
 * @method void setComment(string $Comment) Set Template description information. The length cannot exceed 256 characters.
 * @method ImageTaskInput getProcessImageTemplate() Obtain Image processing template parameter.
 * @method void setProcessImageTemplate(ImageTaskInput $ProcessImageTemplate) Set Image processing template parameter.
 */
class ModifyProcessImageTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the image processing template.
     */
    public $Definition;

    /**
     * @var string Image processing template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Template description information. The length cannot exceed 256 characters.
     */
    public $Comment;

    /**
     * @var ImageTaskInput Image processing template parameter.
     */
    public $ProcessImageTemplate;

    /**
     * @param integer $Definition Unique identifier of the image processing template.
     * @param string $Name Image processing template name. The length cannot exceed 64 characters.
     * @param string $Comment Template description information. The length cannot exceed 256 characters.
     * @param ImageTaskInput $ProcessImageTemplate Image processing template parameter.
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

        if (array_key_exists("ProcessImageTemplate",$param) and $param["ProcessImageTemplate"] !== null) {
            $this->ProcessImageTemplate = new ImageTaskInput();
            $this->ProcessImageTemplate->deserialize($param["ProcessImageTemplate"]);
        }
    }
}
