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
 * DescribeTopics request structure.
 *
 * @method array getFilters() Obtain <ul><li>Filter topicName by [topic name]. The default is fuzzy matching. You can set the PreciseSearch parameter to exact match. Type: String. Required: No</li>
<li>logsetName filters by [logset name], defaults to fuzzy matching, and can be set to exact match using the PreciseSearch parameter. Type: String. Required: No</li>
<li>topicId filters by [topic ID]. Type: String. Required: No</li>
<li>logsetId filters by [logset ID]. You can call the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">DescribeLogsets</a> API to query the list of created logsets or log in to the console to view. You can also call the <a href="https://www.tencentcloud.com/document/product/614/58626?from_cn_redirect=1">CreateLogset</a> API to create logset. Type: String. Required: No</li>
<li>tagKey Filter by [tag key]. Type: String. Required: No</li>
<li>tag:tagKey - filter by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String. Required: no</li>
<li>storageType filters by [storage type of the topic]. Value range: hot (standard storage), cold (infrequent storage). Type: String. Required: No</li></ul>
Note: Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method void setFilters(array $Filters) Set <ul><li>Filter topicName by [topic name]. The default is fuzzy matching. You can set the PreciseSearch parameter to exact match. Type: String. Required: No</li>
<li>logsetName filters by [logset name], defaults to fuzzy matching, and can be set to exact match using the PreciseSearch parameter. Type: String. Required: No</li>
<li>topicId filters by [topic ID]. Type: String. Required: No</li>
<li>logsetId filters by [logset ID]. You can call the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">DescribeLogsets</a> API to query the list of created logsets or log in to the console to view. You can also call the <a href="https://www.tencentcloud.com/document/product/614/58626?from_cn_redirect=1">CreateLogset</a> API to create logset. Type: String. Required: No</li>
<li>tagKey Filter by [tag key]. Type: String. Required: No</li>
<li>tag:tagKey - filter by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String. Required: no</li>
<li>storageType filters by [storage type of the topic]. Value range: hot (standard storage), cold (infrequent storage). Type: String. Required: No</li></ul>
Note: Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method integer getOffset() Obtain Page offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method integer getPreciseSearch() Obtain Control whether the related fields in Filters are exact matches.
<ul><li>0: Default value. topicName and logsetName use fuzzy matching</li>
<li>1: topicName   Exact match</li>
<li>2: Exact match by logsetName</li>
<li>3: Exact match by both topicName and logsetName</li></ul>
 * @method void setPreciseSearch(integer $PreciseSearch) Set Control whether the related fields in Filters are exact matches.
<ul><li>0: Default value. topicName and logsetName use fuzzy matching</li>
<li>1: topicName   Exact match</li>
<li>2: Exact match by logsetName</li>
<li>3: Exact match by both topicName and logsetName</li></ul>
 * @method integer getBizType() Obtain Topic type
-0: Log topic, default value
-Metric topic
 * @method void setBizType(integer $BizType) Set Topic type
-0: Log topic, default value
-Metric topic
 */
class DescribeTopicsRequest extends AbstractModel
{
    /**
     * @var array <ul><li>Filter topicName by [topic name]. The default is fuzzy matching. You can set the PreciseSearch parameter to exact match. Type: String. Required: No</li>
<li>logsetName filters by [logset name], defaults to fuzzy matching, and can be set to exact match using the PreciseSearch parameter. Type: String. Required: No</li>
<li>topicId filters by [topic ID]. Type: String. Required: No</li>
<li>logsetId filters by [logset ID]. You can call the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">DescribeLogsets</a> API to query the list of created logsets or log in to the console to view. You can also call the <a href="https://www.tencentcloud.com/document/product/614/58626?from_cn_redirect=1">CreateLogset</a> API to create logset. Type: String. Required: No</li>
<li>tagKey Filter by [tag key]. Type: String. Required: No</li>
<li>tag:tagKey - filter by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String. Required: no</li>
<li>storageType filters by [storage type of the topic]. Value range: hot (standard storage), cold (infrequent storage). Type: String. Required: No</li></ul>
Note: Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Control whether the related fields in Filters are exact matches.
<ul><li>0: Default value. topicName and logsetName use fuzzy matching</li>
<li>1: topicName   Exact match</li>
<li>2: Exact match by logsetName</li>
<li>3: Exact match by both topicName and logsetName</li></ul>
     */
    public $PreciseSearch;

    /**
     * @var integer Topic type
-0: Log topic, default value
-Metric topic
     */
    public $BizType;

    /**
     * @param array $Filters <ul><li>Filter topicName by [topic name]. The default is fuzzy matching. You can set the PreciseSearch parameter to exact match. Type: String. Required: No</li>
<li>logsetName filters by [logset name], defaults to fuzzy matching, and can be set to exact match using the PreciseSearch parameter. Type: String. Required: No</li>
<li>topicId filters by [topic ID]. Type: String. Required: No</li>
<li>logsetId filters by [logset ID]. You can call the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">DescribeLogsets</a> API to query the list of created logsets or log in to the console to view. You can also call the <a href="https://www.tencentcloud.com/document/product/614/58626?from_cn_redirect=1">CreateLogset</a> API to create logset. Type: String. Required: No</li>
<li>tagKey Filter by [tag key]. Type: String. Required: No</li>
<li>tag:tagKey - filter by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String. Required: no</li>
<li>storageType filters by [storage type of the topic]. Value range: hot (standard storage), cold (infrequent storage). Type: String. Required: No</li></ul>
Note: Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     * @param integer $Offset Page offset. Default value: 0.
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
     * @param integer $PreciseSearch Control whether the related fields in Filters are exact matches.
<ul><li>0: Default value. topicName and logsetName use fuzzy matching</li>
<li>1: topicName   Exact match</li>
<li>2: Exact match by logsetName</li>
<li>3: Exact match by both topicName and logsetName</li></ul>
     * @param integer $BizType Topic type
-0: Log topic, default value
-Metric topic
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

        if (array_key_exists("PreciseSearch",$param) and $param["PreciseSearch"] !== null) {
            $this->PreciseSearch = $param["PreciseSearch"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }
    }
}
