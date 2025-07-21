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
 * DescribeNotificationConfigurations request structure.
 *
 * @method array getAutoScalingNotificationIds() Obtain Query by one or more notification ids. the list length limit is 100. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). parameters AutoScalingNotificationIds and Filters must not be specified simultaneously.
 * @method void setAutoScalingNotificationIds(array $AutoScalingNotificationIds) Set Query by one or more notification ids. the list length limit is 100. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). parameters AutoScalingNotificationIds and Filters must not be specified simultaneously.
 * @method array getFilters() Obtain Filter criteria

<li> auto-scaling-notification-id - String - required: no - (filter) filter by notification id.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingNotificationIds` and `Filters` parameters cannot be specified simultaneously.
 * @method void setFilters(array $Filters) Set Filter criteria

<li> auto-scaling-notification-id - String - required: no - (filter) filter by notification id.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingNotificationIds` and `Filters` parameters cannot be specified simultaneously.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeNotificationConfigurationsRequest extends AbstractModel
{
    /**
     * @var array Query by one or more notification ids. the list length limit is 100. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). parameters AutoScalingNotificationIds and Filters must not be specified simultaneously.
     */
    public $AutoScalingNotificationIds;

    /**
     * @var array Filter criteria

<li> auto-scaling-notification-id - String - required: no - (filter) filter by notification id.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingNotificationIds` and `Filters` parameters cannot be specified simultaneously.
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
     * @param array $AutoScalingNotificationIds Query by one or more notification ids. the list length limit is 100. you can obtain the notification ID by logging in to the console (https://console.cloud.tencent.com/autoscaling/group). parameters AutoScalingNotificationIds and Filters must not be specified simultaneously.
     * @param array $Filters Filter criteria

<li> auto-scaling-notification-id - String - required: no - (filter) filter by notification id.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the console (https://console.cloud.tencent.com/autoscaling/group) or calling the api DescribeAutoScalingGroups (https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and that of `Filter.Values` is 5. the `AutoScalingNotificationIds` and `Filters` parameters cannot be specified simultaneously.
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
        if (array_key_exists("AutoScalingNotificationIds",$param) and $param["AutoScalingNotificationIds"] !== null) {
            $this->AutoScalingNotificationIds = $param["AutoScalingNotificationIds"];
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
