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
 * DescribeDashboards request structure.
 *
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain -dashboardId filter by [dashboard id], type: String, required: No.
-Example value: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5
-dashboardName: Filter by fuzzy search as dashboard name. Type: String. Required: No.
-Example value: Business dashboard
-dashboardRegion filter by dashboard region (compatible with legacy dashboards). This property for dashboards created via cloud API, type: String, required: No.
-See [Regions and Availability Zones](https://www.tencentcloud.com/document/product/614/18940?from_cn_redirect=1)
-Example: ap-guangzhou
- tagKey - String - Required: No - Filter by the tag key.
-Example value:
    ```
    "Filters":[
        {
            "Key": "tagKey",
            "Values": [
                "tag-key-test"
            ]
        }
    ]
    ```

-tag:tagKey Filter by [tag key-value pair]. Replace tagKey with a specific tag key. Type: String. Required: No.
-Refer to [Example 1](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1#4.-.E7.A4.BA.E4.BE.8B) for usage.
    ```
    "Filters": [
        {
            "Key": "tag:tag-key-test",
            "Values": [
                "12"
            ]
        }
    ]
    ```

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method void setFilters(array $Filters) Set -dashboardId filter by [dashboard id], type: String, required: No.
-Example value: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5
-dashboardName: Filter by fuzzy search as dashboard name. Type: String. Required: No.
-Example value: Business dashboard
-dashboardRegion filter by dashboard region (compatible with legacy dashboards). This property for dashboards created via cloud API, type: String, required: No.
-See [Regions and Availability Zones](https://www.tencentcloud.com/document/product/614/18940?from_cn_redirect=1)
-Example: ap-guangzhou
- tagKey - String - Required: No - Filter by the tag key.
-Example value:
    ```
    "Filters":[
        {
            "Key": "tagKey",
            "Values": [
                "tag-key-test"
            ]
        }
    ]
    ```

-tag:tagKey Filter by [tag key-value pair]. Replace tagKey with a specific tag key. Type: String. Required: No.
-Refer to [Example 1](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1#4.-.E7.A4.BA.E4.BE.8B) for usage.
    ```
    "Filters": [
        {
            "Key": "tag:tag-key-test",
            "Values": [
                "12"
            ]
        }
    ]
    ```

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method array getTopicIdRegionFilter() Obtain Filter is performed by topicId and regionId.
-topicId: Log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/42783).
-Example value: 439a5304-08f9-484b-9c4d-46ff57133816
- regionId
- 1: Guangzhou
-4: Shanghai
-5: Hong Kong (China)
- 7: Shanghai Finance
- 8: Beijing
-9: Singapore
- 11: Shenzhen Finance
- 15: Silicon Valley
- 16: Chengdu
- 17: Frankfurt
- 18: Seoul
- 19: Chongqing
- 22: Virginia
- 23: Bangkok
- 25: Tokyo
- 33: Nanjing
- 36: Tianjin
-39: Taipei (China)
- 46: Beijing Finance
-72: Jakarta
-74: Sao Paulo
-78: Shanghai Autonomous Driving Cloud

 * @method void setTopicIdRegionFilter(array $TopicIdRegionFilter) Set Filter is performed by topicId and regionId.
-topicId: Log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/42783).
-Example value: 439a5304-08f9-484b-9c4d-46ff57133816
- regionId
- 1: Guangzhou
-4: Shanghai
-5: Hong Kong (China)
- 7: Shanghai Finance
- 8: Beijing
-9: Singapore
- 11: Shenzhen Finance
- 15: Silicon Valley
- 16: Chengdu
- 17: Frankfurt
- 18: Seoul
- 19: Chongqing
- 22: Virginia
- 23: Bangkok
- 25: Tokyo
- 33: Nanjing
- 36: Tianjin
-39: Taipei (China)
- 46: Beijing Finance
-72: Jakarta
-74: Sao Paulo
-78: Shanghai Autonomous Driving Cloud
 */
class DescribeDashboardsRequest extends AbstractModel
{
    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array -dashboardId filter by [dashboard id], type: String, required: No.
-Example value: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5
-dashboardName: Filter by fuzzy search as dashboard name. Type: String. Required: No.
-Example value: Business dashboard
-dashboardRegion filter by dashboard region (compatible with legacy dashboards). This property for dashboards created via cloud API, type: String, required: No.
-See [Regions and Availability Zones](https://www.tencentcloud.com/document/product/614/18940?from_cn_redirect=1)
-Example: ap-guangzhou
- tagKey - String - Required: No - Filter by the tag key.
-Example value:
    ```
    "Filters":[
        {
            "Key": "tagKey",
            "Values": [
                "tag-key-test"
            ]
        }
    ]
    ```

-tag:tagKey Filter by [tag key-value pair]. Replace tagKey with a specific tag key. Type: String. Required: No.
-Refer to [Example 1](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1#4.-.E7.A4.BA.E4.BE.8B) for usage.
    ```
    "Filters": [
        {
            "Key": "tag:tag-key-test",
            "Values": [
                "12"
            ]
        }
    ]
    ```

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     */
    public $Filters;

    /**
     * @var array Filter is performed by topicId and regionId.
-topicId: Log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/42783).
-Example value: 439a5304-08f9-484b-9c4d-46ff57133816
- regionId
- 1: Guangzhou
-4: Shanghai
-5: Hong Kong (China)
- 7: Shanghai Finance
- 8: Beijing
-9: Singapore
- 11: Shenzhen Finance
- 15: Silicon Valley
- 16: Chengdu
- 17: Frankfurt
- 18: Seoul
- 19: Chongqing
- 22: Virginia
- 23: Bangkok
- 25: Tokyo
- 33: Nanjing
- 36: Tianjin
-39: Taipei (China)
- 46: Beijing Finance
-72: Jakarta
-74: Sao Paulo
-78: Shanghai Autonomous Driving Cloud

     */
    public $TopicIdRegionFilter;

    /**
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
     * @param array $Filters -dashboardId filter by [dashboard id], type: String, required: No.
-Example value: dashboard-522a5609-1f41-4b11-8086-5afd1d7574f5
-dashboardName: Filter by fuzzy search as dashboard name. Type: String. Required: No.
-Example value: Business dashboard
-dashboardRegion filter by dashboard region (compatible with legacy dashboards). This property for dashboards created via cloud API, type: String, required: No.
-See [Regions and Availability Zones](https://www.tencentcloud.com/document/product/614/18940?from_cn_redirect=1)
-Example: ap-guangzhou
- tagKey - String - Required: No - Filter by the tag key.
-Example value:
    ```
    "Filters":[
        {
            "Key": "tagKey",
            "Values": [
                "tag-key-test"
            ]
        }
    ]
    ```

-tag:tagKey Filter by [tag key-value pair]. Replace tagKey with a specific tag key. Type: String. Required: No.
-Refer to [Example 1](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1#4.-.E7.A4.BA.E4.BE.8B) for usage.
    ```
    "Filters": [
        {
            "Key": "tag:tag-key-test",
            "Values": [
                "12"
            ]
        }
    ]
    ```

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     * @param array $TopicIdRegionFilter Filter is performed by topicId and regionId.
-topicId: Log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/42783).
-Example value: 439a5304-08f9-484b-9c4d-46ff57133816
- regionId
- 1: Guangzhou
-4: Shanghai
-5: Hong Kong (China)
- 7: Shanghai Finance
- 8: Beijing
-9: Singapore
- 11: Shenzhen Finance
- 15: Silicon Valley
- 16: Chengdu
- 17: Frankfurt
- 18: Seoul
- 19: Chongqing
- 22: Virginia
- 23: Bangkok
- 25: Tokyo
- 33: Nanjing
- 36: Tianjin
-39: Taipei (China)
- 46: Beijing Finance
-72: Jakarta
-74: Sao Paulo
-78: Shanghai Autonomous Driving Cloud
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TopicIdRegionFilter",$param) and $param["TopicIdRegionFilter"] !== null) {
            $this->TopicIdRegionFilter = [];
            foreach ($param["TopicIdRegionFilter"] as $key => $value){
                $obj = new TopicIdAndRegion();
                $obj->deserialize($value);
                array_push($this->TopicIdRegionFilter, $obj);
            }
        }
    }
}
