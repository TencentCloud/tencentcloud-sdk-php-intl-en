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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoScalingActivities request structure.
 *
 * @method array getActivityIds() Obtain Queries by one or more scaling activity IDs in the format of `asa-5l2ejpfo`. The maximum quantity per request is 100. This parameter does not support specifying both `ActivityIds` and `Filters` at the same time.
 * @method void setActivityIds(array $ActivityIds) Set Queries by one or more scaling activity IDs in the format of `asa-5l2ejpfo`. The maximum quantity per request is 100. This parameter does not support specifying both `ActivityIds` and `Filters` at the same time.
 * @method array getFilters() Obtain Filter criteria. the filter field value ranges from...to.
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>Filter by [<strong>scaling group id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) or call the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) to obtain the scaling group id from the returned information.</li><li>type: String</li><li>required: no</li><li>example value: asg-kiju7yt5</li></ul></li>  <li><strong>activity-status-code</strong><ul><li>filter by [<strong>scaling activity status</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>INIT: initializing</li><li>RUNNING: RUNNING</li><li>SUCCESSFUL: SUCCESSFUL activity</li><li>PARTIALLY_SUCCESSFUL: PARTIALLY SUCCESSFUL activity</li><li>FAILED: activity FAILED</li><li>CANCELLED: activity CANCELLED</li></ul></ul></li>  <li><strong>activity-type</strong><ul><li>filter by [<strong>scaling activity type</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>SCALE_OUT: SCALE-OUT activity</li><li>SCALE_IN: SCALE-IN activity</li><li>ATTACH_INSTANCES: adding INSTANCES</li><li>REMOVE_INSTANCES: terminating INSTANCES</li><li>DETACH_INSTANCES: REMOVE INSTANCE</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY: TERMINATE INSTANCE IN CVM console</li><li>REPLACE_UNHEALTHY_INSTANCE: REPLACE UNHEALTHY INSTANCES</li><li>START_INSTANCES: START INSTANCES</li><li>STOP_INSTANCES: shut down INSTANCE</li><li>INVOKE_COMMAND: execute COMMAND</li></ul></ul></li>  <li><strong>activity-id</strong><ul><li>filter by [<strong>scaling activity id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) to obtain the scaling activity id.</li><li>type: String</li><li>required: no</li><li>example value: asa-hy6tr4ed</li></ul></li></ul>.
The maximum number of `Filters` per request is 10. the upper limit for `Filter.Values` is 5. parameters must not specify both `ActivityIds` and `Filters` simultaneously.
 * @method void setFilters(array $Filters) Set Filter criteria. the filter field value ranges from...to.
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>Filter by [<strong>scaling group id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) or call the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) to obtain the scaling group id from the returned information.</li><li>type: String</li><li>required: no</li><li>example value: asg-kiju7yt5</li></ul></li>  <li><strong>activity-status-code</strong><ul><li>filter by [<strong>scaling activity status</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>INIT: initializing</li><li>RUNNING: RUNNING</li><li>SUCCESSFUL: SUCCESSFUL activity</li><li>PARTIALLY_SUCCESSFUL: PARTIALLY SUCCESSFUL activity</li><li>FAILED: activity FAILED</li><li>CANCELLED: activity CANCELLED</li></ul></ul></li>  <li><strong>activity-type</strong><ul><li>filter by [<strong>scaling activity type</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>SCALE_OUT: SCALE-OUT activity</li><li>SCALE_IN: SCALE-IN activity</li><li>ATTACH_INSTANCES: adding INSTANCES</li><li>REMOVE_INSTANCES: terminating INSTANCES</li><li>DETACH_INSTANCES: REMOVE INSTANCE</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY: TERMINATE INSTANCE IN CVM console</li><li>REPLACE_UNHEALTHY_INSTANCE: REPLACE UNHEALTHY INSTANCES</li><li>START_INSTANCES: START INSTANCES</li><li>STOP_INSTANCES: shut down INSTANCE</li><li>INVOKE_COMMAND: execute COMMAND</li></ul></ul></li>  <li><strong>activity-id</strong><ul><li>filter by [<strong>scaling activity id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) to obtain the scaling activity id.</li><li>type: String</li><li>required: no</li><li>example value: asa-hy6tr4ed</li></ul></li></ul>.
The maximum number of `Filters` per request is 10. the upper limit for `Filter.Values` is 5. parameters must not specify both `ActivityIds` and `Filters` simultaneously.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method string getStartTime() Obtain The earliest start time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
 * @method void setStartTime(string $StartTime) Set The earliest start time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
 * @method string getEndTime() Obtain The latest end time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
 * @method void setEndTime(string $EndTime) Set The latest end time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
 */
class DescribeAutoScalingActivitiesRequest extends AbstractModel
{
    /**
     * @var array Queries by one or more scaling activity IDs in the format of `asa-5l2ejpfo`. The maximum quantity per request is 100. This parameter does not support specifying both `ActivityIds` and `Filters` at the same time.
     */
    public $ActivityIds;

    /**
     * @var array Filter criteria. the filter field value ranges from...to.
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>Filter by [<strong>scaling group id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) or call the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) to obtain the scaling group id from the returned information.</li><li>type: String</li><li>required: no</li><li>example value: asg-kiju7yt5</li></ul></li>  <li><strong>activity-status-code</strong><ul><li>filter by [<strong>scaling activity status</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>INIT: initializing</li><li>RUNNING: RUNNING</li><li>SUCCESSFUL: SUCCESSFUL activity</li><li>PARTIALLY_SUCCESSFUL: PARTIALLY SUCCESSFUL activity</li><li>FAILED: activity FAILED</li><li>CANCELLED: activity CANCELLED</li></ul></ul></li>  <li><strong>activity-type</strong><ul><li>filter by [<strong>scaling activity type</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>SCALE_OUT: SCALE-OUT activity</li><li>SCALE_IN: SCALE-IN activity</li><li>ATTACH_INSTANCES: adding INSTANCES</li><li>REMOVE_INSTANCES: terminating INSTANCES</li><li>DETACH_INSTANCES: REMOVE INSTANCE</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY: TERMINATE INSTANCE IN CVM console</li><li>REPLACE_UNHEALTHY_INSTANCE: REPLACE UNHEALTHY INSTANCES</li><li>START_INSTANCES: START INSTANCES</li><li>STOP_INSTANCES: shut down INSTANCE</li><li>INVOKE_COMMAND: execute COMMAND</li></ul></ul></li>  <li><strong>activity-id</strong><ul><li>filter by [<strong>scaling activity id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) to obtain the scaling activity id.</li><li>type: String</li><li>required: no</li><li>example value: asa-hy6tr4ed</li></ul></li></ul>.
The maximum number of `Filters` per request is 10. the upper limit for `Filter.Values` is 5. parameters must not specify both `ActivityIds` and `Filters` simultaneously.
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
     * @var string The earliest start time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
     */
    public $StartTime;

    /**
     * @var string The latest end time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
     */
    public $EndTime;

    /**
     * @param array $ActivityIds Queries by one or more scaling activity IDs in the format of `asa-5l2ejpfo`. The maximum quantity per request is 100. This parameter does not support specifying both `ActivityIds` and `Filters` at the same time.
     * @param array $Filters Filter criteria. the filter field value ranges from...to.
<ul>
<li><strong>auto-scaling-group-id</strong><ul><li>Filter by [<strong>scaling group id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) or call the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) to obtain the scaling group id from the returned information.</li><li>type: String</li><li>required: no</li><li>example value: asg-kiju7yt5</li></ul></li>  <li><strong>activity-status-code</strong><ul><li>filter by [<strong>scaling activity status</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>INIT: initializing</li><li>RUNNING: RUNNING</li><li>SUCCESSFUL: SUCCESSFUL activity</li><li>PARTIALLY_SUCCESSFUL: PARTIALLY SUCCESSFUL activity</li><li>FAILED: activity FAILED</li><li>CANCELLED: activity CANCELLED</li></ul></ul></li>  <li><strong>activity-type</strong><ul><li>filter by [<strong>scaling activity type</strong>]</li><li>type: String</li><li>required: no</li><li>options: </li><ul><li>SCALE_OUT: SCALE-OUT activity</li><li>SCALE_IN: SCALE-IN activity</li><li>ATTACH_INSTANCES: adding INSTANCES</li><li>REMOVE_INSTANCES: terminating INSTANCES</li><li>DETACH_INSTANCES: REMOVE INSTANCE</li><li>TERMINATE_INSTANCES_UNEXPECTEDLY: TERMINATE INSTANCE IN CVM console</li><li>REPLACE_UNHEALTHY_INSTANCE: REPLACE UNHEALTHY INSTANCES</li><li>START_INSTANCES: START INSTANCES</li><li>STOP_INSTANCES: shut down INSTANCE</li><li>INVOKE_COMMAND: execute COMMAND</li></ul></ul></li>  <li><strong>activity-id</strong><ul><li>filter by [<strong>scaling activity id</strong>]. you can log IN to the [console](https://console.cloud.tencent.com/autoscaling/group) to obtain the scaling activity id.</li><li>type: String</li><li>required: no</li><li>example value: asa-hy6tr4ed</li></ul></li></ul>.
The maximum number of `Filters` per request is 10. the upper limit for `Filter.Values` is 5. parameters must not specify both `ActivityIds` and `Filters` simultaneously.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param string $StartTime The earliest start time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
     * @param string $EndTime The latest end time of the scaling activity, which will be ignored if ActivityIds is specified. The value is in `UTC time` in the format of `YYYY-MM-DDThh:mm:ssZ` according to the `ISO8601` standard.
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
        if (array_key_exists("ActivityIds",$param) and $param["ActivityIds"] !== null) {
            $this->ActivityIds = $param["ActivityIds"];
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
