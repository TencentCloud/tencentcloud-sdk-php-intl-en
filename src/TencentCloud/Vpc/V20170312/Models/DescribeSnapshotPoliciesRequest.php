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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotPolicies request structure.
 *
 * @method array getSnapshotPolicyIds() Obtain Snapshot policy IDs
 * @method void setSnapshotPolicyIds(array $SnapshotPolicyIds) Set Snapshot policy IDs
 * @method array getFilters() Obtain Filter conditions. `SnapshotPolicyIds` and `Filters` cannot be both specified.
<li>`snapshot-policy-id` - String - Snapshot policy ID</li>
<li>`snapshot-policy-name` - String - Snapshot policy name</li>
 * @method void setFilters(array $Filters) Set Filter conditions. `SnapshotPolicyIds` and `Filters` cannot be both specified.
<li>`snapshot-policy-id` - String - Snapshot policy ID</li>
<li>`snapshot-policy-name` - String - Snapshot policy name</li>
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 200.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 200.
 */
class DescribeSnapshotPoliciesRequest extends AbstractModel
{
    /**
     * @var array Snapshot policy IDs
     */
    public $SnapshotPolicyIds;

    /**
     * @var array Filter conditions. `SnapshotPolicyIds` and `Filters` cannot be both specified.
<li>`snapshot-policy-id` - String - Snapshot policy ID</li>
<li>`snapshot-policy-name` - String - Snapshot policy name</li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 200.
     */
    public $Limit;

    /**
     * @param array $SnapshotPolicyIds Snapshot policy IDs
     * @param array $Filters Filter conditions. `SnapshotPolicyIds` and `Filters` cannot be both specified.
<li>`snapshot-policy-id` - String - Snapshot policy ID</li>
<li>`snapshot-policy-name` - String - Snapshot policy name</li>
     * @param integer $Offset Offset. Default value: `0`.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 200.
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
        if (array_key_exists("SnapshotPolicyIds",$param) and $param["SnapshotPolicyIds"] !== null) {
            $this->SnapshotPolicyIds = $param["SnapshotPolicyIds"];
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
