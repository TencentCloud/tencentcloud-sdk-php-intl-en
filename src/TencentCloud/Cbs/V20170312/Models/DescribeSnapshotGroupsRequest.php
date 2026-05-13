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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotGroups request structure.
 *
 * @method array getFilters() Obtain Filter criteria.<br><li>snapshot-group-id - Array of String - Required: No - (Filter criteria) Filter by snapshot group ID.<br><li>snapshot-group-state - Array of String - Required: No - (Filter criteria) Filter by snapshot group state. (NORMAL: Normal | CREATING: Creating | ROLLBACKING: Rolling back)<br><li>snapshot-group-name - Array of String - Required: No - (Filter criteria) Filter by snapshot group name.<br><li>snapshot-id - Array of String - Required: No - (Filter criteria) Filter by snapshot ID within the snapshot group.
 * @method void setFilters(array $Filters) Set Filter criteria.<br><li>snapshot-group-id - Array of String - Required: No - (Filter criteria) Filter by snapshot group ID.<br><li>snapshot-group-state - Array of String - Required: No - (Filter criteria) Filter by snapshot group state. (NORMAL: Normal | CREATING: Creating | ROLLBACKING: Rolling back)<br><li>snapshot-group-name - Array of String - Required: No - (Filter criteria) Filter by snapshot group name.<br><li>snapshot-id - Array of String - Required: No - (Filter criteria) Filter by snapshot ID within the snapshot group.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returns, with a default value of 20, and a maximum value of 100.
 * @method void setLimit(integer $Limit) Set Number of returns, with a default value of 20, and a maximum value of 100.
 */
class DescribeSnapshotGroupsRequest extends AbstractModel
{
    /**
     * @var array Filter criteria.<br><li>snapshot-group-id - Array of String - Required: No - (Filter criteria) Filter by snapshot group ID.<br><li>snapshot-group-state - Array of String - Required: No - (Filter criteria) Filter by snapshot group state. (NORMAL: Normal | CREATING: Creating | ROLLBACKING: Rolling back)<br><li>snapshot-group-name - Array of String - Required: No - (Filter criteria) Filter by snapshot group name.<br><li>snapshot-id - Array of String - Required: No - (Filter criteria) Filter by snapshot ID within the snapshot group.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns, with a default value of 20, and a maximum value of 100.
     */
    public $Limit;

    /**
     * @param array $Filters Filter criteria.<br><li>snapshot-group-id - Array of String - Required: No - (Filter criteria) Filter by snapshot group ID.<br><li>snapshot-group-state - Array of String - Required: No - (Filter criteria) Filter by snapshot group state. (NORMAL: Normal | CREATING: Creating | ROLLBACKING: Rolling back)<br><li>snapshot-group-name - Array of String - Required: No - (Filter criteria) Filter by snapshot group name.<br><li>snapshot-id - Array of String - Required: No - (Filter criteria) Filter by snapshot ID within the snapshot group.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returns, with a default value of 20, and a maximum value of 100.
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
    }
}
