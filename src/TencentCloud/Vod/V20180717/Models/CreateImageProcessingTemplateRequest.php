<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * CreateImageProcessingTemplate request structure.
 *
 * @method array getOperations() Obtain An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
 * @method void setOperations(array $Operations) Set An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
 * @method integer getSubAppId() Obtain <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
 * @method string getName() Obtain The name of the image processing template. Length limit: 64 characters.
 * @method void setName(string $Name) Set The name of the image processing template. Length limit: 64 characters.
 * @method string getComment() Obtain The template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set The template description. Length limit: 256 characters.
 */
class CreateImageProcessingTemplateRequest extends AbstractModel
{
    /**
     * @var array An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
     */
    public $Operations;

    /**
     * @var integer <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     */
    public $SubAppId;

    /**
     * @var string The name of the image processing template. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string The template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @param array $Operations An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
     * @param integer $SubAppId <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.</b>
     * @param string $Name The name of the image processing template. Length limit: 64 characters.
     * @param string $Comment The template description. Length limit: 256 characters.
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
        if (array_key_exists("Operations",$param) and $param["Operations"] !== null) {
            $this->Operations = [];
            foreach ($param["Operations"] as $key => $value){
                $obj = new ImageOperation();
                $obj->deserialize($value);
                array_push($this->Operations, $obj);
            }
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
