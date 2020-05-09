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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceOperations request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getStartTime() Obtain Start time, such as "2019-03-07 16:30:39"
 * @method void setStartTime(string $StartTime) Set Start time, such as "2019-03-07 16:30:39"
 * @method string getEndTime() Obtain End time, such as "2019-03-30 20:18:03"
 * @method void setEndTime(string $EndTime) Set End time, such as "2019-03-30 20:18:03"
 * @method integer getOffset() Obtain Pagination start value
 * @method void setOffset(integer $Offset) Set Pagination start value
 * @method integer getLimit() Obtain Number of entries per page
 * @method void setLimit(integer $Limit) Set Number of entries per page
 */
class DescribeInstanceOperationsRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var string Start time, such as "2019-03-07 16:30:39"
     */
    public $StartTime;

    /**
     * @var string End time, such as "2019-03-30 20:18:03"
     */
    public $EndTime;

    /**
     * @var integer Pagination start value
     */
    public $Offset;

    /**
     * @var integer Number of entries per page
     */
    public $Limit;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param string $StartTime Start time, such as "2019-03-07 16:30:39"
     * @param string $EndTime End time, such as "2019-03-30 20:18:03"
     * @param integer $Offset Pagination start value
     * @param integer $Limit Number of entries per page
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
