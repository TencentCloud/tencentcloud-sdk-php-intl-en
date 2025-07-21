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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoScalingGroups request structure.
 *
 * @method array getAutoScalingGroupIds() Obtain Queries by one or more auto scaling group IDs in the format of `asg-nkdwoui0`. The maximum quantity per request is 100. This parameter does not support specifying both `AutoScalingGroupIds` and `Filters` at the same time.
 * @method void setAutoScalingGroupIds(array $AutoScalingGroupIds) Set Queries by one or more auto scaling group IDs in the format of `asg-nkdwoui0`. The maximum quantity per request is 100. This parameter does not support specifying both `AutoScalingGroupIds` and `Filters` at the same time.
 * @method array getFilters() Obtain Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
Specifies the scaling group ID obtained by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.
<li> auto-scaling-group-name - String - required: no - (filter) filter by auto scaling group name.</li>.
<li> vague-auto-scaling-group-name - String - required: no - (filter) filter by scaling group name fuzzy search.</li>.
<li>launch-configuration-id - String - required: no - (filter condition) filter by launch configuration id. you can obtain the launch configuration id by logging in to the console (https://console.cloud.tencent.com/autoscaling/config) or calling the api DescribeLaunchConfigurations (https://intl.cloud.tencent.com/document/api/377/20445?from_cn_redirect=1) and retrieving the LaunchConfigurationId from the returned information.</li>.
<li> `tag-key` - String - optional - filter by the tag key. you can call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the tag key from the returned information.</li>.
<li>tag-value - String - required: no - (filter condition) filter by tag value. you can obtain the tag value by calling the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) and retrieving the TagValue from the returned information.</li>.
<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key. see example 2 for reference. call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the TagKey from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingGroupIds` and `Filters` parameters cannot be specified simultaneously.
 * @method void setFilters(array $Filters) Set Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
Specifies the scaling group ID obtained by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.
<li> auto-scaling-group-name - String - required: no - (filter) filter by auto scaling group name.</li>.
<li> vague-auto-scaling-group-name - String - required: no - (filter) filter by scaling group name fuzzy search.</li>.
<li>launch-configuration-id - String - required: no - (filter condition) filter by launch configuration id. you can obtain the launch configuration id by logging in to the console (https://console.cloud.tencent.com/autoscaling/config) or calling the api DescribeLaunchConfigurations (https://intl.cloud.tencent.com/document/api/377/20445?from_cn_redirect=1) and retrieving the LaunchConfigurationId from the returned information.</li>.
<li> `tag-key` - String - optional - filter by the tag key. you can call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the tag key from the returned information.</li>.
<li>tag-value - String - required: no - (filter condition) filter by tag value. you can obtain the tag value by calling the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) and retrieving the TagValue from the returned information.</li>.
<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key. see example 2 for reference. call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the TagKey from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingGroupIds` and `Filters` parameters cannot be specified simultaneously.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeAutoScalingGroupsRequest extends AbstractModel
{
    /**
     * @var array Queries by one or more auto scaling group IDs in the format of `asg-nkdwoui0`. The maximum quantity per request is 100. This parameter does not support specifying both `AutoScalingGroupIds` and `Filters` at the same time.
     */
    public $AutoScalingGroupIds;

    /**
     * @var array Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
Specifies the scaling group ID obtained by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.
<li> auto-scaling-group-name - String - required: no - (filter) filter by auto scaling group name.</li>.
<li> vague-auto-scaling-group-name - String - required: no - (filter) filter by scaling group name fuzzy search.</li>.
<li>launch-configuration-id - String - required: no - (filter condition) filter by launch configuration id. you can obtain the launch configuration id by logging in to the console (https://console.cloud.tencent.com/autoscaling/config) or calling the api DescribeLaunchConfigurations (https://intl.cloud.tencent.com/document/api/377/20445?from_cn_redirect=1) and retrieving the LaunchConfigurationId from the returned information.</li>.
<li> `tag-key` - String - optional - filter by the tag key. you can call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the tag key from the returned information.</li>.
<li>tag-value - String - required: no - (filter condition) filter by tag value. you can obtain the tag value by calling the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) and retrieving the TagValue from the returned information.</li>.
<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key. see example 2 for reference. call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the TagKey from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingGroupIds` and `Filters` parameters cannot be specified simultaneously.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @param array $AutoScalingGroupIds Queries by one or more auto scaling group IDs in the format of `asg-nkdwoui0`. The maximum quantity per request is 100. This parameter does not support specifying both `AutoScalingGroupIds` and `Filters` at the same time.
     * @param array $Filters Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id.</li>.
Specifies the scaling group ID obtained by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the return information.
<li> auto-scaling-group-name - String - required: no - (filter) filter by auto scaling group name.</li>.
<li> vague-auto-scaling-group-name - String - required: no - (filter) filter by scaling group name fuzzy search.</li>.
<li>launch-configuration-id - String - required: no - (filter condition) filter by launch configuration id. you can obtain the launch configuration id by logging in to the console (https://console.cloud.tencent.com/autoscaling/config) or calling the api DescribeLaunchConfigurations (https://intl.cloud.tencent.com/document/api/377/20445?from_cn_redirect=1) and retrieving the LaunchConfigurationId from the returned information.</li>.
<li> `tag-key` - String - optional - filter by the tag key. you can call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the tag key from the returned information.</li>.
<li>tag-value - String - required: no - (filter condition) filter by tag value. you can obtain the tag value by calling the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) and retrieving the TagValue from the returned information.</li>.
<li>tag:tag-key - String - required: no - (filter condition) filter by tag key-value pair. replace tag-key with a specific tag key. see example 2 for reference. call the API [GetTags](https://intl.cloud.tencent.com/document/product/651/72275?from_cn_redirect=1) to obtain the TagKey from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingGroupIds` and `Filters` parameters cannot be specified simultaneously.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("AutoScalingGroupIds",$param) and $param["AutoScalingGroupIds"] !== null) {
            $this->AutoScalingGroupIds = $param["AutoScalingGroupIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
