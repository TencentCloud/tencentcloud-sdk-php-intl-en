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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegisterInstances request structure.
 *
 * @method array getInstanceIds() Obtain Managed instance id.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.

 * @method void setInstanceIds(array $InstanceIds) Set Managed instance id.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.

 * @method array getFilters() Obtain Filter list. the maximum number of `Filters` is 10 per request, and the maximum number of `Filter.Values` is 5. parameters must not be specified simultaneously for `InstanceIds` and `Filters`.


- instance-name

Filter by [managed instance name].
Type: String.
Required: No

- instance-id

Filter by [managed instance ID].
Type: String.
Required: No

- register-status

Filter by [managed instance status]. valid values: Online | Offline.
Type: String.
Required: No

- local-ip

Filter by [managed instance nic IP].
Type: String.
Required: No

- register-code-id

Filter by [managed instance registration code ID]. call the [DescribeRegisterCodes](https://www.tencentcloud.comom/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
Type: String.
Required: No

- sys-name

Filter by [operating system type]. valid values: Linux | Windows.
Type: String.
Required: No

- tag-key

Filter by [tag key].
Type: String.
Required: No

- tag-value

Filter by [tag value].
Type: String.
Required: No

- tag:tag-key

Filter by [tag key-value pair]. replace tag-key with a specific Tag key.
Type: String.
Required: No

For example, the Filter is {"Name": "tag:key1", "Values": ["v1", "v2"] }, which queries all resources belonging to tag key1:v1 or key1:v2.


 * @method void setFilters(array $Filters) Set Filter list. the maximum number of `Filters` is 10 per request, and the maximum number of `Filter.Values` is 5. parameters must not be specified simultaneously for `InstanceIds` and `Filters`.


- instance-name

Filter by [managed instance name].
Type: String.
Required: No

- instance-id

Filter by [managed instance ID].
Type: String.
Required: No

- register-status

Filter by [managed instance status]. valid values: Online | Offline.
Type: String.
Required: No

- local-ip

Filter by [managed instance nic IP].
Type: String.
Required: No

- register-code-id

Filter by [managed instance registration code ID]. call the [DescribeRegisterCodes](https://www.tencentcloud.comom/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
Type: String.
Required: No

- sys-name

Filter by [operating system type]. valid values: Linux | Windows.
Type: String.
Required: No

- tag-key

Filter by [tag key].
Type: String.
Required: No

- tag-value

Filter by [tag value].
Type: String.
Required: No

- tag:tag-key

Filter by [tag key-value pair]. replace tag-key with a specific Tag key.
Type: String.
Required: No

For example, the Filter is {"Name": "tag:key1", "Values": ["v1", "v2"] }, which queries all resources belonging to tag key1:v1 or key1:v2.


 * @method integer getOffset() Obtain Offset. default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. default value: 0.
 * @method integer getLimit() Obtain Number of returned results, defaults to 20, maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returned results, defaults to 20, maximum value is 100.
 */
class DescribeRegisterInstancesRequest extends AbstractModel
{
    /**
     * @var array Managed instance id.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.

     */
    public $InstanceIds;

    /**
     * @var array Filter list. the maximum number of `Filters` is 10 per request, and the maximum number of `Filter.Values` is 5. parameters must not be specified simultaneously for `InstanceIds` and `Filters`.


- instance-name

Filter by [managed instance name].
Type: String.
Required: No

- instance-id

Filter by [managed instance ID].
Type: String.
Required: No

- register-status

Filter by [managed instance status]. valid values: Online | Offline.
Type: String.
Required: No

- local-ip

Filter by [managed instance nic IP].
Type: String.
Required: No

- register-code-id

Filter by [managed instance registration code ID]. call the [DescribeRegisterCodes](https://www.tencentcloud.comom/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
Type: String.
Required: No

- sys-name

Filter by [operating system type]. valid values: Linux | Windows.
Type: String.
Required: No

- tag-key

Filter by [tag key].
Type: String.
Required: No

- tag-value

Filter by [tag value].
Type: String.
Required: No

- tag:tag-key

Filter by [tag key-value pair]. replace tag-key with a specific Tag key.
Type: String.
Required: No

For example, the Filter is {"Name": "tag:key1", "Values": ["v1", "v2"] }, which queries all resources belonging to tag key1:v1 or key1:v2.


     */
    public $Filters;

    /**
     * @var integer Offset. default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results, defaults to 20, maximum value is 100.
     */
    public $Limit;

    /**
     * @param array $InstanceIds Managed instance id.

The maximum per request is 100.

Parameters must not be specified simultaneously `InstanceIds` and `Filters`.

     * @param array $Filters Filter list. the maximum number of `Filters` is 10 per request, and the maximum number of `Filter.Values` is 5. parameters must not be specified simultaneously for `InstanceIds` and `Filters`.


- instance-name

Filter by [managed instance name].
Type: String.
Required: No

- instance-id

Filter by [managed instance ID].
Type: String.
Required: No

- register-status

Filter by [managed instance status]. valid values: Online | Offline.
Type: String.
Required: No

- local-ip

Filter by [managed instance nic IP].
Type: String.
Required: No

- register-code-id

Filter by [managed instance registration code ID]. call the [DescribeRegisterCodes](https://www.tencentcloud.comom/document/api/1340/96925?from_cn_redirect=1) api to query registration codes.
Type: String.
Required: No

- sys-name

Filter by [operating system type]. valid values: Linux | Windows.
Type: String.
Required: No

- tag-key

Filter by [tag key].
Type: String.
Required: No

- tag-value

Filter by [tag value].
Type: String.
Required: No

- tag:tag-key

Filter by [tag key-value pair]. replace tag-key with a specific Tag key.
Type: String.
Required: No

For example, the Filter is {"Name": "tag:key1", "Values": ["v1", "v2"] }, which queries all resources belonging to tag key1:v1 or key1:v2.


     * @param integer $Offset Offset. default value: 0.
     * @param integer $Limit Number of returned results, defaults to 20, maximum value is 100.
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
