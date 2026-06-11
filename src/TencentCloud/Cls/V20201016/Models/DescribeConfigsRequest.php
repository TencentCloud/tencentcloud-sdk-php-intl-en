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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigs request structure.
 *
 * @method array getFilters() Obtain configName
-Filter by [collection configuration name] using fuzzy matching.
-Type: String
-Required: No
-Example: test-config.

configId
-Filter by [collection configuration ID].
-Type: String
-Required: No
-Example: 3581a3be-aa41-423b-995a-54ec84da6264

topicId
- Filter by [log topic].
-Type: String
-Required: No
-Example: 3b83f9d6-3a4d-47f9-9b7f-285c868b2f9a
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
 * @method void setFilters(array $Filters) Set configName
-Filter by [collection configuration name] using fuzzy matching.
-Type: String
-Required: No
-Example: test-config.

configId
-Filter by [collection configuration ID].
-Type: String
-Required: No
-Example: 3581a3be-aa41-423b-995a-54ec84da6264

topicId
- Filter by [log topic].
-Type: String
-Required: No
-Example: 3b83f9d6-3a4d-47f9-9b7f-285c868b2f9a
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100
 */
class DescribeConfigsRequest extends AbstractModel
{
    /**
     * @var array configName
-Filter by [collection configuration name] using fuzzy matching.
-Type: String
-Required: No
-Example: test-config.

configId
-Filter by [collection configuration ID].
-Type: String
-Required: No
-Example: 3581a3be-aa41-423b-995a-54ec84da6264

topicId
- Filter by [log topic].
-Type: String
-Required: No
-Example: 3b83f9d6-3a4d-47f9-9b7f-285c868b2f9a
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100
     */
    public $Limit;

    /**
     * @param array $Filters configName
-Filter by [collection configuration name] using fuzzy matching.
-Type: String
-Required: No
-Example: test-config.

configId
-Filter by [collection configuration ID].
-Type: String
-Required: No
-Example: 3581a3be-aa41-423b-995a-54ec84da6264

topicId
- Filter by [log topic].
-Type: String
-Required: No
-Example: 3b83f9d6-3a4d-47f9-9b7f-285c868b2f9a
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
