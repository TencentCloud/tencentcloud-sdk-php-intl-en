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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateResourceTagValue request structure.
 *
 * @method string getTagKey() Obtain Tag key associated with the resource.
 * @method void setTagKey(string $TagKey) Set Tag key associated with the resource.
 * @method string getTagValue() Obtain Modified tag value.
 * @method void setTagValue(string $TagValue) Set Modified tag value.
 * @method string getResource() Obtain [Six-segment resource description](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
 * @method void setResource(string $Resource) Set [Six-segment resource description](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
 */
class UpdateResourceTagValueRequest extends AbstractModel
{
    /**
     * @var string Tag key associated with the resource.
     */
    public $TagKey;

    /**
     * @var string Modified tag value.
     */
    public $TagValue;

    /**
     * @var string [Six-segment resource description](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
     */
    public $Resource;

    /**
     * @param string $TagKey Tag key associated with the resource.
     * @param string $TagValue Modified tag value.
     * @param string $Resource [Six-segment resource description](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
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
