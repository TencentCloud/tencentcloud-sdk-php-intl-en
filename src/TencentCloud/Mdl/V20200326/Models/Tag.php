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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Console tag, documentation link: https://www.tencentcloud.com/document/product/651.?from_cn_redirect=1
 *
 * @method string getTagKey() Obtain Tag key. Refer to the tag document (https://www.tencentcloud.com/document/product/651/13354?from_cn_redirect=1) for limits.
 * @method void setTagKey(string $TagKey) Set Tag key. Refer to the tag document (https://www.tencentcloud.com/document/product/651/13354?from_cn_redirect=1) for limits.
 * @method string getTagValue() Obtain Tag value. For reference, see the tag document at https://www.tencentcloud.com/document/product/651/13354.?from_cn_redirect=1
 * @method void setTagValue(string $TagValue) Set Tag value. For reference, see the tag document at https://www.tencentcloud.com/document/product/651/13354.?from_cn_redirect=1
 * @method string getCategory() Obtain Tag type, optional. See the tag document for reference (https://www.tencentcloud.com/document/product/651/35327?from_cn_redirect=1#Tag).
 * @method void setCategory(string $Category) Set Tag type, optional. See the tag document for reference (https://www.tencentcloud.com/document/product/651/35327?from_cn_redirect=1#Tag).
 */
class Tag extends AbstractModel
{
    /**
     * @var string Tag key. Refer to the tag document (https://www.tencentcloud.com/document/product/651/13354?from_cn_redirect=1) for limits.
     */
    public $TagKey;

    /**
     * @var string Tag value. For reference, see the tag document at https://www.tencentcloud.com/document/product/651/13354.?from_cn_redirect=1
     */
    public $TagValue;

    /**
     * @var string Tag type, optional. See the tag document for reference (https://www.tencentcloud.com/document/product/651/35327?from_cn_redirect=1#Tag).
     */
    public $Category;

    /**
     * @param string $TagKey Tag key. Refer to the tag document (https://www.tencentcloud.com/document/product/651/13354?from_cn_redirect=1) for limits.
     * @param string $TagValue Tag value. For reference, see the tag document at https://www.tencentcloud.com/document/product/651/13354.?from_cn_redirect=1
     * @param string $Category Tag type, optional. See the tag document for reference (https://www.tencentcloud.com/document/product/651/35327?from_cn_redirect=1#Tag).
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
