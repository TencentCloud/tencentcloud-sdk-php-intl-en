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
 * ModifySubtitleEmbedTemplate request structure.
 *
 * @method integer getDefinition() Obtain <p>Unique identifier of the subtitle suppression template</p>
 * @method void setDefinition(integer $Definition) Set <p>Unique identifier of the subtitle suppression template</p>
 * @method string getName() Obtain <p>Subtitle suppression name<br>Length limit: 64 characters.</p>
 * @method void setName(string $Name) Set <p>Subtitle suppression name<br>Length limit: 64 characters.</p>
 * @method string getComment() Obtain <p>Subtitle suppression template description information<br>Length limit: 256 characters.</p>
 * @method void setComment(string $Comment) Set <p>Subtitle suppression template description information<br>Length limit: 256 characters.</p>
 * @method SubtitleEmbedConfig getSubtitleEmbedConfig() Obtain <p>Subtitle suppression configuration</p>
 * @method void setSubtitleEmbedConfig(SubtitleEmbedConfig $SubtitleEmbedConfig) Set <p>Subtitle suppression configuration</p>
 */
class ModifySubtitleEmbedTemplateRequest extends AbstractModel
{
    /**
     * @var integer <p>Unique identifier of the subtitle suppression template</p>
     */
    public $Definition;

    /**
     * @var string <p>Subtitle suppression name<br>Length limit: 64 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Subtitle suppression template description information<br>Length limit: 256 characters.</p>
     */
    public $Comment;

    /**
     * @var SubtitleEmbedConfig <p>Subtitle suppression configuration</p>
     */
    public $SubtitleEmbedConfig;

    /**
     * @param integer $Definition <p>Unique identifier of the subtitle suppression template</p>
     * @param string $Name <p>Subtitle suppression name<br>Length limit: 64 characters.</p>
     * @param string $Comment <p>Subtitle suppression template description information<br>Length limit: 256 characters.</p>
     * @param SubtitleEmbedConfig $SubtitleEmbedConfig <p>Subtitle suppression configuration</p>
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

        if (array_key_exists("SubtitleEmbedConfig",$param) and $param["SubtitleEmbedConfig"] !== null) {
            $this->SubtitleEmbedConfig = new SubtitleEmbedConfig();
            $this->SubtitleEmbedConfig->deserialize($param["SubtitleEmbedConfig"]);
        }
    }
}
