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
 * DescribeRefreshActivities request structure.
 *
 * @method array getRefreshActivityIds() Obtain List of refresh activity IDs. IDs are formatted like: 'asr-5l2ejpfo'. The upper limit per request is 100. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
 * @method void setRefreshActivityIds(array $RefreshActivityIds) Set List of refresh activity IDs. IDs are formatted like: 'asr-5l2ejpfo'. The upper limit per request is 100. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
 * @method array getFilters() Obtain Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
<li> refresh-activity-status-code - String - required: no - (filter criteria) filters by refresh activity status. (INIT: initializing | RUNNING: RUNNING | SUCCESSFUL: activity SUCCESSFUL | FAILED_PAUSE: PAUSE on failure | AUTO_PAUSE: AUTO PAUSE | MANUAL_PAUSE: manually PAUSE | CANCELLED: activity CANCELLED | FAILED: activity FAILED)</li>.
<li> refresh-activity-type - String - required: no - (filter) filter by refresh activity types. (NORMAL: regular refresh activity | ROLLBACK: ROLLBACK refresh activity)</li>.
<li> refresh-activity-id - String - required: no - (filter) filter by refresh activity id.</li>.
<li>The upper limit of Filters per request is 10, and that of Filter.Values is 5. The RefreshActivityIds and Filters parameters cannot be specified at the same time.</li>
 * @method void setFilters(array $Filters) Set Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
<li> refresh-activity-status-code - String - required: no - (filter criteria) filters by refresh activity status. (INIT: initializing | RUNNING: RUNNING | SUCCESSFUL: activity SUCCESSFUL | FAILED_PAUSE: PAUSE on failure | AUTO_PAUSE: AUTO PAUSE | MANUAL_PAUSE: manually PAUSE | CANCELLED: activity CANCELLED | FAILED: activity FAILED)</li>.
<li> refresh-activity-type - String - required: no - (filter) filter by refresh activity types. (NORMAL: regular refresh activity | ROLLBACK: ROLLBACK refresh activity)</li>.
<li> refresh-activity-id - String - required: no - (filter) filter by refresh activity id.</li>.
<li>The upper limit of Filters per request is 10, and that of Filter.Values is 5. The RefreshActivityIds and Filters parameters cannot be specified at the same time.</li>
 * @method integer getLimit() Obtain Number of returned pieces. Default value: 20. Maximum value: 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned pieces. Default value: 20. Maximum value: 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset, 0 by default. For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset, 0 by default. For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeRefreshActivitiesRequest extends AbstractModel
{
    /**
     * @var array List of refresh activity IDs. IDs are formatted like: 'asr-5l2ejpfo'. The upper limit per request is 100. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
     */
    public $RefreshActivityIds;

    /**
     * @var array Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
<li> refresh-activity-status-code - String - required: no - (filter criteria) filters by refresh activity status. (INIT: initializing | RUNNING: RUNNING | SUCCESSFUL: activity SUCCESSFUL | FAILED_PAUSE: PAUSE on failure | AUTO_PAUSE: AUTO PAUSE | MANUAL_PAUSE: manually PAUSE | CANCELLED: activity CANCELLED | FAILED: activity FAILED)</li>.
<li> refresh-activity-type - String - required: no - (filter) filter by refresh activity types. (NORMAL: regular refresh activity | ROLLBACK: ROLLBACK refresh activity)</li>.
<li> refresh-activity-id - String - required: no - (filter) filter by refresh activity id.</li>.
<li>The upper limit of Filters per request is 10, and that of Filter.Values is 5. The RefreshActivityIds and Filters parameters cannot be specified at the same time.</li>
     */
    public $Filters;

    /**
     * @var integer Number of returned pieces. Default value: 20. Maximum value: 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var integer Offset, 0 by default. For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @param array $RefreshActivityIds List of refresh activity IDs. IDs are formatted like: 'asr-5l2ejpfo'. The upper limit per request is 100. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
     * @param array $Filters Filter criteria

<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or calling the api [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
<li> refresh-activity-status-code - String - required: no - (filter criteria) filters by refresh activity status. (INIT: initializing | RUNNING: RUNNING | SUCCESSFUL: activity SUCCESSFUL | FAILED_PAUSE: PAUSE on failure | AUTO_PAUSE: AUTO PAUSE | MANUAL_PAUSE: manually PAUSE | CANCELLED: activity CANCELLED | FAILED: activity FAILED)</li>.
<li> refresh-activity-type - String - required: no - (filter) filter by refresh activity types. (NORMAL: regular refresh activity | ROLLBACK: ROLLBACK refresh activity)</li>.
<li> refresh-activity-id - String - required: no - (filter) filter by refresh activity id.</li>.
<li>The upper limit of Filters per request is 10, and that of Filter.Values is 5. The RefreshActivityIds and Filters parameters cannot be specified at the same time.</li>
     * @param integer $Limit Number of returned pieces. Default value: 20. Maximum value: 100. For further information on Limit, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Offset Offset, 0 by default. For further information on Offset, please refer to relevant sections in API [Overview] (https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("RefreshActivityIds",$param) and $param["RefreshActivityIds"] !== null) {
            $this->RefreshActivityIds = $param["RefreshActivityIds"];
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
