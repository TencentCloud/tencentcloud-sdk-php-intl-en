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
 * CreateProcessImageAsyncTemplate request structure.
 *
 * @method ProcessImageAsyncTask getProcessImageConfigure() Obtain Image asynchronous processing task configuration.
 * @method void setProcessImageConfigure(ProcessImageAsyncTask $ProcessImageConfigure) Set Image asynchronous processing task configuration.
 * @method integer getSubAppId() Obtain <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getName() Obtain Name of the image async processing template. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Name of the image async processing template. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
 * @method void setComment(string $Comment) Set Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
 */
class CreateProcessImageAsyncTemplateRequest extends AbstractModel
{
    /**
     * @var ProcessImageAsyncTask Image asynchronous processing task configuration.
     */
    public $ProcessImageConfigure;

    /**
     * @var integer <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Name of the image async processing template. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
     */
    public $Comment;

    /**
     * @param ProcessImageAsyncTask $ProcessImageConfigure Image asynchronous processing task configuration.
     * @param integer $SubAppId <b>ID of the VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Name Name of the image async processing template. The length cannot exceed 64 characters.
     * @param string $Comment Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
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
        if (array_key_exists("ProcessImageConfigure",$param) and $param["ProcessImageConfigure"] !== null) {
            $this->ProcessImageConfigure = new ProcessImageAsyncTask();
            $this->ProcessImageConfigure->deserialize($param["ProcessImageConfigure"]);
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
    }
}
