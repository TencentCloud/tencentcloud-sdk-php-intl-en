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
 * Details of the async image processing template.
 *
 * @method integer getDefinition() Obtain Unique identifier of the image asynchronous processing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the image asynchronous processing template.
 * @method string getType() Obtain Template type.
 * @method void setType(string $Type) Set Template type.
 * @method string getName() Obtain Image async processing template name.
 * @method void setName(string $Name) Set Image async processing template name.
 * @method string getComment() Obtain Description information of the async image processing template.
 * @method void setComment(string $Comment) Set Description information of the async image processing template.
 * @method string getCreateTime() Obtain Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method ProcessImageAsyncTask getProcessImageConfigure() Obtain Image async processing template configuration.
 * @method void setProcessImageConfigure(ProcessImageAsyncTask $ProcessImageConfigure) Set Image async processing template configuration.
 */
class ProcessImageAsyncTemplateItem extends AbstractModel
{
    /**
     * @var integer Unique identifier of the image asynchronous processing template.
     */
    public $Definition;

    /**
     * @var string Template type.
     */
    public $Type;

    /**
     * @var string Image async processing template name.
     */
    public $Name;

    /**
     * @var string Description information of the async image processing template.
     */
    public $Comment;

    /**
     * @var string Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @var ProcessImageAsyncTask Image async processing template configuration.
     */
    public $ProcessImageConfigure;

    /**
     * @param integer $Definition Unique identifier of the image asynchronous processing template.
     * @param string $Type Template type.
     * @param string $Name Image async processing template name.
     * @param string $Comment Description information of the async image processing template.
     * @param string $CreateTime Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Template last modified time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param ProcessImageAsyncTask $ProcessImageConfigure Image async processing template configuration.
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ProcessImageConfigure",$param) and $param["ProcessImageConfigure"] !== null) {
            $this->ProcessImageConfigure = new ProcessImageAsyncTask();
            $this->ProcessImageConfigure->deserialize($param["ProcessImageConfigure"]);
        }
    }
}
