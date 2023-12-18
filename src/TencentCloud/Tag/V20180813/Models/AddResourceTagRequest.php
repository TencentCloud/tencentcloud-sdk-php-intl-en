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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddResourceTag request structure.
 *
 * @method string getTagKey() Obtain The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method void setTagKey(string $TagKey) Set The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method string getTagValue() Obtain The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method void setTagValue(string $TagValue) Set The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
 * @method string getResource() Obtain Resource to be associated, represented in the standard six-segment resource format. For the correct format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
 * @method void setResource(string $Resource) Set Resource to be associated, represented in the standard six-segment resource format. For the correct format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
 */
class AddResourceTagRequest extends AbstractModel
{
    /**
     * @var string The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     */
    public $TagKey;

    /**
     * @var string The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     */
    public $TagValue;

    /**
     * @var string Resource to be associated, represented in the standard six-segment resource format. For the correct format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
     */
    public $Resource;

    /**
     * @param string $TagKey The tag key that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     * @param string $TagValue The tag value that needs to be bound. For the requirements, refer to: https://intl.cloud.tencent.com/document/product/651/13354?from_cn_redirect=1
     * @param string $Resource Resource to be associated, represented in the standard six-segment resource format. For the correct format, see https://intl.cloud.tencent.com/document/product/651/89122?from_cn_redirect=1
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }
    }
}
