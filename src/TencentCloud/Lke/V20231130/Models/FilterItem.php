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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter criteria.
 *
 * @method string getFilterKey() Obtain Filter the content.
For example, you can use "AuditStatus" to filter by review status.
 * @method void setFilterKey(string $FilterKey) Set Filter the content.
For example, you can use "AuditStatus" to filter by review status.
 * @method array getFilterValue() Obtain Filtering criteria.
For example, for the filter content "AuditStatus", use the following filtering conditions:
"ContentFailed": "Content review failed"
"PictureFailed": "Image review failed",
"ContentAndPictureFailed": "Image and content review failed",
 * @method void setFilterValue(array $FilterValue) Set Filtering criteria.
For example, for the filter content "AuditStatus", use the following filtering conditions:
"ContentFailed": "Content review failed"
"PictureFailed": "Image review failed",
"ContentAndPictureFailed": "Image and content review failed",
 */
class FilterItem extends AbstractModel
{
    /**
     * @var string Filter the content.
For example, you can use "AuditStatus" to filter by review status.
     */
    public $FilterKey;

    /**
     * @var array Filtering criteria.
For example, for the filter content "AuditStatus", use the following filtering conditions:
"ContentFailed": "Content review failed"
"PictureFailed": "Image review failed",
"ContentAndPictureFailed": "Image and content review failed",
     */
    public $FilterValue;

    /**
     * @param string $FilterKey Filter the content.
For example, you can use "AuditStatus" to filter by review status.
     * @param array $FilterValue Filtering criteria.
For example, for the filter content "AuditStatus", use the following filtering conditions:
"ContentFailed": "Content review failed"
"PictureFailed": "Image review failed",
"ContentAndPictureFailed": "Image and content review failed",
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
        if (array_key_exists("FilterKey",$param) and $param["FilterKey"] !== null) {
            $this->FilterKey = $param["FilterKey"];
        }

        if (array_key_exists("FilterValue",$param) and $param["FilterValue"] !== null) {
            $this->FilterValue = $param["FilterValue"];
        }
    }
}
