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
 * DescribeSplunkDelivers request structure.
 *
 * @method string getTopicId() Obtain <p>Log topic Id</p><ul><li>Get the log topic Id by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>Log topic Id</p><ul><li>Get the log topic Id by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
 * @method array getFilters() Obtain <ul><li>taskId Filter by [task id]. Type: String Required: No</li><li>name Filter by [task name]. Type: String Required: No</li><li>statusFlag Filter by [status]. Type: String Required: No<br>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</li></ul>
 * @method void setFilters(array $Filters) Set <ul><li>taskId Filter by [task id]. Type: String Required: No</li><li>name Filter by [task name]. Type: String Required: No</li><li>statusFlag Filter by [status]. Type: String Required: No<br>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</li></ul>
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
 */
class DescribeSplunkDeliversRequest extends AbstractModel
{
    /**
     * @var string <p>Log topic Id</p><ul><li>Get the log topic Id by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
     */
    public $TopicId;

    /**
     * @var array <ul><li>taskId Filter by [task id]. Type: String Required: No</li><li>name Filter by [task name]. Type: String Required: No</li><li>statusFlag Filter by [status]. Type: String Required: No<br>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>Paging offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @param string $TopicId <p>Log topic Id</p><ul><li>Get the log topic Id by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
     * @param array $Filters <ul><li>taskId Filter by [task id]. Type: String Required: No</li><li>name Filter by [task name]. Type: String Required: No</li><li>statusFlag Filter by [status]. Type: String Required: No<br>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</li></ul>
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of entries per page. Default value: 20. Maximum value: 100.</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
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
