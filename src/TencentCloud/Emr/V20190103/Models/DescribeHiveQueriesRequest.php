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
 * DescribeHiveQueries request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Start time (s).
 * @method void setStartTime(integer $StartTime) Set Start time (s).
 * @method integer getEndTime() Obtain End time (s). The difference between the values of EndTime and StartTime cannot exceed 86,400 seconds (one day).
 * @method void setEndTime(integer $EndTime) Set End time (s). The difference between the values of EndTime and StartTime cannot exceed 86,400 seconds (one day).
 * @method integer getOffset() Obtain Starting offset for pages, starting from 0.
 * @method void setOffset(integer $Offset) Set Starting offset for pages, starting from 0.
 * @method integer getLimit() Obtain Number of entries per page. Value range: [1, 100].
 * @method void setLimit(integer $Limit) Set Number of entries per page. Value range: [1, 100].
 * @method array getState() Obtain Execution status, for example, ERROR.
 * @method void setState(array $State) Set Execution status, for example, ERROR.
 * @method integer getEndTimeGte() Obtain Time point earlier than the end time.
 * @method void setEndTimeGte(integer $EndTimeGte) Set Time point earlier than the end time.
 * @method integer getEndTimeLte() Obtain Time point later than the end time.
 * @method void setEndTimeLte(integer $EndTimeLte) Set Time point later than the end time.
 */
class DescribeHiveQueriesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Start time (s).
     */
    public $StartTime;

    /**
     * @var integer End time (s). The difference between the values of EndTime and StartTime cannot exceed 86,400 seconds (one day).
     */
    public $EndTime;

    /**
     * @var integer Starting offset for pages, starting from 0.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Value range: [1, 100].
     */
    public $Limit;

    /**
     * @var array Execution status, for example, ERROR.
     */
    public $State;

    /**
     * @var integer Time point earlier than the end time.
     */
    public $EndTimeGte;

    /**
     * @var integer Time point later than the end time.
     */
    public $EndTimeLte;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Start time (s).
     * @param integer $EndTime End time (s). The difference between the values of EndTime and StartTime cannot exceed 86,400 seconds (one day).
     * @param integer $Offset Starting offset for pages, starting from 0.
     * @param integer $Limit Number of entries per page. Value range: [1, 100].
     * @param array $State Execution status, for example, ERROR.
     * @param integer $EndTimeGte Time point earlier than the end time.
     * @param integer $EndTimeLte Time point later than the end time.
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("EndTimeGte",$param) and $param["EndTimeGte"] !== null) {
            $this->EndTimeGte = $param["EndTimeGte"];
        }

        if (array_key_exists("EndTimeLte",$param) and $param["EndTimeLte"] !== null) {
            $this->EndTimeLte = $param["EndTimeLte"];
        }
    }
}
