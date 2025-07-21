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
 * DescribeAutoScalingInstances request structure.
 *
 * @method array getInstanceIds() Obtain IDs of the CVM instances to query. the instance ID list has a length limit of 100. `InstanceIds` and `Filters` cannot be specified simultaneously.
You can get available instance ids in the following ways:.
<li>Query instance ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/index">console</a>.</li>.
<li>Get the instance ID by calling the api [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.</li>.
 * @method void setInstanceIds(array $InstanceIds) Set IDs of the CVM instances to query. the instance ID list has a length limit of 100. `InstanceIds` and `Filters` cannot be specified simultaneously.
You can get available instance ids in the following ways:.
<li>Query instance ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/index">console</a>.</li>.
<li>Get the instance ID by calling the api [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.</li>.
 * @method array getFilters() Obtain Filter criteria

<li> instance-id - String - required: no - (filter condition) filter by instance id. get the instance id by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1), and retrieve the `InstanceId` from the returned information.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or making an api call to [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. parameters do not support specifying both `InstanceIds` and `Filters`.
 * @method void setFilters(array $Filters) Set Filter criteria

<li> instance-id - String - required: no - (filter condition) filter by instance id. get the instance id by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1), and retrieve the `InstanceId` from the returned information.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or making an api call to [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. parameters do not support specifying both `InstanceIds` and `Filters`.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 */
class DescribeAutoScalingInstancesRequest extends AbstractModel
{
    /**
     * @var array IDs of the CVM instances to query. the instance ID list has a length limit of 100. `InstanceIds` and `Filters` cannot be specified simultaneously.
You can get available instance ids in the following ways:.
<li>Query instance ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/index">console</a>.</li>.
<li>Get the instance ID by calling the api [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.</li>.
     */
    public $InstanceIds;

    /**
     * @var array Filter criteria

<li> instance-id - String - required: no - (filter condition) filter by instance id. get the instance id by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1), and retrieve the `InstanceId` from the returned information.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or making an api call to [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. parameters do not support specifying both `InstanceIds` and `Filters`.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @param array $InstanceIds IDs of the CVM instances to query. the instance ID list has a length limit of 100. `InstanceIds` and `Filters` cannot be specified simultaneously.
You can get available instance ids in the following ways:.
<li>Query instance ID by logging in to the <a href="https://console.cloud.tencent.com/cvm/index">console</a>.</li>.
<li>Get the instance ID by calling the api [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and retrieving the `InstanceId` from the returned information.</li>.
     * @param array $Filters Filter criteria

<li> instance-id - String - required: no - (filter condition) filter by instance id. get the instance id by logging in to the [console](https://console.cloud.tencent.com/cvm/index) or making an api call to [DescribeInstances](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1), and retrieve the `InstanceId` from the returned information.</li>.
<li> auto-scaling-group-id - String - required: no - (filter) filter by auto scaling group id. you can obtain the scaling group id by logging in to the [console](https://console.cloud.tencent.com/autoscaling/group) or making an api call to [DescribeAutoScalingGroups](https://intl.cloud.tencent.com/document/api/377/20438?from_cn_redirect=1) and retrieving the AutoScalingGroupId from the returned information.</li>.
The maximum number of `Filters` per request is 10, and the maximum number of `Filter.Values` is 5. parameters do not support specifying both `InstanceIds` and `Filters`.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section in the API [overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit The number of returned results. Default value: `20`. Maximum value: `100`. For more information on `Limit`, see the relevant sections in API [Introduction](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
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
