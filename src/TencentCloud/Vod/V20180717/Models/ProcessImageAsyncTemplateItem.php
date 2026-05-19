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
 * Image asynchronous processing template details.
 *
 * @method integer getDefinition() Obtain Unique identifier of the image asynchronous processing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the image asynchronous processing template.
 * @method string getType() Obtain Template type.
 * @method void setType(string $Type) Set Template type.
 * @method string getName() Obtain Image asynchronous processing template name.
 * @method void setName(string $Name) Set Image asynchronous processing template name.
 * @method string getComment() Obtain Description information of the image asynchronous processing template.
 * @method void setComment(string $Comment) Set Description information of the image asynchronous processing template.
 * @method string getCreateTime() Obtain <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method ProcessImageAsyncTask getProcessImageConfigure() Obtain Image asynchronous processing template configuration.
 * @method void setProcessImageConfigure(ProcessImageAsyncTask $ProcessImageConfigure) Set Image asynchronous processing template configuration.
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
     * @var string Image asynchronous processing template name.
     */
    public $Name;

    /**
     * @var string Description information of the image asynchronous processing template.
     */
    public $Comment;

    /**
     * @var string <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @var ProcessImageAsyncTask Image asynchronous processing template configuration.
     */
    public $ProcessImageConfigure;

    /**
     * @param integer $Definition Unique identifier of the image asynchronous processing template.
     * @param string $Type Template type.
     * @param string $Name Image asynchronous processing template name.
     * @param string $Comment Description information of the image asynchronous processing template.
     * @param string $CreateTime <p>Template creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last template modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param ProcessImageAsyncTask $ProcessImageConfigure Image asynchronous processing template configuration.
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
