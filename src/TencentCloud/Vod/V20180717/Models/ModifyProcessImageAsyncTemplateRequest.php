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
 * ModifyProcessImageAsyncTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique identifier of the image asynchronous processing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the image asynchronous processing template.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Image async processing template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Image async processing template name. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
 * @method void setComment(string $Comment) Set Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
 * @method ProcessImageAsyncTask getProcessImageConfigure() Obtain Image asynchronous processing configuration.
 * @method void setProcessImageConfigure(ProcessImageAsyncTask $ProcessImageConfigure) Set Image asynchronous processing configuration.
 */
class ModifyProcessImageAsyncTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique identifier of the image asynchronous processing template.
     */
    public $Definition;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Image async processing template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
     */
    public $Comment;

    /**
     * @var ProcessImageAsyncTask Image asynchronous processing configuration.
     */
    public $ProcessImageConfigure;

    /**
     * @param integer $Definition Unique identifier of the image asynchronous processing template.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Image async processing template name. The length cannot exceed 64 characters.
     * @param string $Comment Description information of the image asynchronous processing template. The length cannot exceed 256 characters.
     * @param ProcessImageAsyncTask $ProcessImageConfigure Image asynchronous processing configuration.
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ProcessImageConfigure",$param) and $param["ProcessImageConfigure"] !== null) {
            $this->ProcessImageConfigure = new ProcessImageAsyncTask();
            $this->ProcessImageConfigure->deserialize($param["ProcessImageConfigure"]);
        }
    }
}
