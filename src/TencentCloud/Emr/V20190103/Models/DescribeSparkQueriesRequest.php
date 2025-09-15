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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkQueries request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Start time.
 * @method void setStartTime(integer $StartTime) Set Start time.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 * @method integer getOffset() Obtain Starting offset for pages, starting from 0.
 * @method void setOffset(integer $Offset) Set Starting offset for pages, starting from 0.
 * @method integer getLimit() Obtain Page size. Valid range: [1,100].
 * @method void setLimit(integer $Limit) Set Page size. Valid range: [1,100].
 * @method array getStatus() Obtain Execution status: RUNNING,COMPLETED, FAILED.
 * @method void setStatus(array $Status) Set Execution status: RUNNING,COMPLETED, FAILED.
 */
class DescribeSparkQueriesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Start time.
     */
    public $StartTime;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @var integer Starting offset for pages, starting from 0.
     */
    public $Offset;

    /**
     * @var integer Page size. Valid range: [1,100].
     */
    public $Limit;

    /**
     * @var array Execution status: RUNNING,COMPLETED, FAILED.
     */
    public $Status;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Start time.
     * @param integer $EndTime End time.
     * @param integer $Offset Starting offset for pages, starting from 0.
     * @param integer $Limit Page size. Valid range: [1,100].
     * @param array $Status Execution status: RUNNING,COMPLETED, FAILED.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
