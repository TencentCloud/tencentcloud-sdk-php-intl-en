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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceOperations request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method integer getOffset() Obtain Pagination parameter, offset, starting from 0
 * @method void setOffset(integer $Offset) Set Pagination parameter, offset, starting from 0
 * @method integer getLimit() Obtain Pagination parameter, page size, default 10
 * @method void setLimit(integer $Limit) Set Pagination parameter, page size, default 10
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End Time
 * @method void setEndTime(string $EndTime) Set End Time
 */
class DescribeInstanceOperationsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var integer Pagination parameter, offset, starting from 0
     */
    public $Offset;

    /**
     * @var integer Pagination parameter, page size, default 10
     */
    public $Limit;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End Time
     */
    public $EndTime;

    /**
     * @param string $InstanceId Cluster ID
     * @param integer $Offset Pagination parameter, offset, starting from 0
     * @param integer $Limit Pagination parameter, page size, default 10
     * @param string $StartTime Start Time
     * @param string $EndTime End Time
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
