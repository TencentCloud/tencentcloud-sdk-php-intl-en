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
 * CreateReviewTemplate request structure.
 *
 * @method array getLabels() Obtain The violation labels to use. Valid values: <li>`Porn`: Pornographic content</li> <li>`Terror`: Terrorist content</li> <li>`Moan`: Moaning</li>
 * @method void setLabels(array $Labels) Set The violation labels to use. Valid values: <li>`Porn`: Pornographic content</li> <li>`Terror`: Terrorist content</li> <li>`Moan`: Moaning</li>
 * @method string getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(string $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Review template name. The length cannot exceed 64 characters.
 * @method void setName(string $Name) Set Review template name. The length cannot exceed 64 characters.
 * @method string getComment() Obtain Review template description information, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Review template description information, with a length limit of 256 characters.
 */
class CreateReviewTemplateRequest extends AbstractModel
{
    /**
     * @var array The violation labels to use. Valid values: <li>`Porn`: Pornographic content</li> <li>`Terror`: Terrorist content</li> <li>`Moan`: Moaning</li>
     */
    public $Labels;

    /**
     * @var string <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Review template name. The length cannot exceed 64 characters.
     */
    public $Name;

    /**
     * @var string Review template description information, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @param array $Labels The violation labels to use. Valid values: <li>`Porn`: Pornographic content</li> <li>`Terror`: Terrorist content</li> <li>`Moan`: Moaning</li>
     * @param string $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Review template name. The length cannot exceed 64 characters.
     * @param string $Comment Review template description information, with a length limit of 256 characters.
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
        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
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
