<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method array getFilters() Obtain Filtering conditions.
<li> auto-scaling-group-id - String - Required or not: No - (Filtering conditions) Filters by scaling group ID. </li>
<li> refresh-activity-status-code - String - Required or not: No - (Filtering conditions) Filters by refresh activity status. (INIT: Initializing. | RUNNING: In progress. | SUCCESSFUL: Activity successful. | FAILED_PAUSE: Failed paused. | AUTO_PAUSE: Automatic pause. | MANUAL_PAUSE: Manual pause. | CANCELLED: Activity canceled. | FAILED: Activity failed.)</li>
<li> refresh-activity-type - String - Required or not: No - (Filtering conditions) Filters by refresh activity type. (NORMAL: Normal refresh activity. | ROLLBACK: Rollback refresh activity.)</li>
<li> refresh-activity-id - String - Required or not: No - (Filtering conditions) Filters by refresh activity ID. </li>
<li> The maximum limit for Filters per request is 10, and the upper limit for Filter.Values is 5. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
 * @method void setFilters(array $Filters) Set Filtering conditions.
<li> auto-scaling-group-id - String - Required or not: No - (Filtering conditions) Filters by scaling group ID. </li>
<li> refresh-activity-status-code - String - Required or not: No - (Filtering conditions) Filters by refresh activity status. (INIT: Initializing. | RUNNING: In progress. | SUCCESSFUL: Activity successful. | FAILED_PAUSE: Failed paused. | AUTO_PAUSE: Automatic pause. | MANUAL_PAUSE: Manual pause. | CANCELLED: Activity canceled. | FAILED: Activity failed.)</li>
<li> refresh-activity-type - String - Required or not: No - (Filtering conditions) Filters by refresh activity type. (NORMAL: Normal refresh activity. | ROLLBACK: Rollback refresh activity.)</li>
<li> refresh-activity-id - String - Required or not: No - (Filtering conditions) Filters by refresh activity ID. </li>
<li> The maximum limit for Filters per request is 10, and the upper limit for Filter.Values is 5. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
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
     * @var array Filtering conditions.
<li> auto-scaling-group-id - String - Required or not: No - (Filtering conditions) Filters by scaling group ID. </li>
<li> refresh-activity-status-code - String - Required or not: No - (Filtering conditions) Filters by refresh activity status. (INIT: Initializing. | RUNNING: In progress. | SUCCESSFUL: Activity successful. | FAILED_PAUSE: Failed paused. | AUTO_PAUSE: Automatic pause. | MANUAL_PAUSE: Manual pause. | CANCELLED: Activity canceled. | FAILED: Activity failed.)</li>
<li> refresh-activity-type - String - Required or not: No - (Filtering conditions) Filters by refresh activity type. (NORMAL: Normal refresh activity. | ROLLBACK: Rollback refresh activity.)</li>
<li> refresh-activity-id - String - Required or not: No - (Filtering conditions) Filters by refresh activity ID. </li>
<li> The maximum limit for Filters per request is 10, and the upper limit for Filter.Values is 5. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
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
     * @param array $Filters Filtering conditions.
<li> auto-scaling-group-id - String - Required or not: No - (Filtering conditions) Filters by scaling group ID. </li>
<li> refresh-activity-status-code - String - Required or not: No - (Filtering conditions) Filters by refresh activity status. (INIT: Initializing. | RUNNING: In progress. | SUCCESSFUL: Activity successful. | FAILED_PAUSE: Failed paused. | AUTO_PAUSE: Automatic pause. | MANUAL_PAUSE: Manual pause. | CANCELLED: Activity canceled. | FAILED: Activity failed.)</li>
<li> refresh-activity-type - String - Required or not: No - (Filtering conditions) Filters by refresh activity type. (NORMAL: Normal refresh activity. | ROLLBACK: Rollback refresh activity.)</li>
<li> refresh-activity-id - String - Required or not: No - (Filtering conditions) Filters by refresh activity ID. </li>
<li> The maximum limit for Filters per request is 10, and the upper limit for Filter.Values is 5. Parameters do not support specifying both RefreshActivityIds and Filters simultaneously.
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
