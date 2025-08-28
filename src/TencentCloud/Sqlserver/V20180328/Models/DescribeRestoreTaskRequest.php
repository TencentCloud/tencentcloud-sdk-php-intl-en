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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRestoreTask request structure.
 *
 * @method string getInstanceId() Obtain Source Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Source Instance ID.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method integer getRestoreType() Obtain Rollback method. 0 - roll back by time point; 1 - roll back by backup set.
 * @method void setRestoreType(integer $RestoreType) Set Rollback method. 0 - roll back by time point; 1 - roll back by backup set.
 * @method string getTargetRegion() Obtain Region where the target instance is located for rollback.
 * @method void setTargetRegion(string $TargetRegion) Set Region where the target instance is located for rollback.
 * @method integer getTargetType() Obtain Type of the target instance for rollback. 0 - current instance; 1 - existing instance; 2 - new instance.
 * @method void setTargetType(integer $TargetType) Set Type of the target instance for rollback. 0 - current instance; 1 - existing instance; 2 - new instance.
 * @method integer getStatus() Obtain Rollback status, 0: initialized; 1: running; 2: successful; 3: failed.
 * @method void setStatus(integer $Status) Set Rollback status, 0: initialized; 1: running; 2: successful; 3: failed.
 * @method integer getOffset() Obtain The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
 * @method void setOffset(integer $Offset) Set The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
 * @method integer getLimit() Obtain Page number in pagination mode. The default value is 0.
 * @method void setLimit(integer $Limit) Set Page number in pagination mode. The default value is 0.
 * @method string getOrderBy() Obtain Sorting field. restoreTime - rollback time; startTime-task start time; endTime-task end time. By default, the results are sorted in descending order by task start time.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. restoreTime - rollback time; startTime-task start time; endTime-task end time. By default, the results are sorted in descending order by task start time.
 * @method string getOrderByType() Obtain Sorting rule. desc - descending order; asc - ascending order. The default value is desc.
 * @method void setOrderByType(string $OrderByType) Set Sorting rule. desc - descending order; asc - ascending order. The default value is desc.
 * @method integer getFlowId() Obtain Asynchronous rollback task ID.
 * @method void setFlowId(integer $FlowId) Set Asynchronous rollback task ID.
 */
class DescribeRestoreTaskRequest extends AbstractModel
{
    /**
     * @var string Source Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var integer Rollback method. 0 - roll back by time point; 1 - roll back by backup set.
     */
    public $RestoreType;

    /**
     * @var string Region where the target instance is located for rollback.
     */
    public $TargetRegion;

    /**
     * @var integer Type of the target instance for rollback. 0 - current instance; 1 - existing instance; 2 - new instance.
     */
    public $TargetType;

    /**
     * @var integer Rollback status, 0: initialized; 1: running; 2: successful; 3: failed.
     */
    public $Status;

    /**
     * @var integer The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
     */
    public $Offset;

    /**
     * @var integer Page number in pagination mode. The default value is 0.
     */
    public $Limit;

    /**
     * @var string Sorting field. restoreTime - rollback time; startTime-task start time; endTime-task end time. By default, the results are sorted in descending order by task start time.
     */
    public $OrderBy;

    /**
     * @var string Sorting rule. desc - descending order; asc - ascending order. The default value is desc.
     */
    public $OrderByType;

    /**
     * @var integer Asynchronous rollback task ID.
     */
    public $FlowId;

    /**
     * @param string $InstanceId Source Instance ID.
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param integer $RestoreType Rollback method. 0 - roll back by time point; 1 - roll back by backup set.
     * @param string $TargetRegion Region where the target instance is located for rollback.
     * @param integer $TargetType Type of the target instance for rollback. 0 - current instance; 1 - existing instance; 2 - new instance.
     * @param integer $Status Rollback status, 0: initialized; 1: running; 2: successful; 3: failed.
     * @param integer $Offset The number of returned entries per page in pagination mode. Value range: 1-100. The default value is 20.
     * @param integer $Limit Page number in pagination mode. The default value is 0.
     * @param string $OrderBy Sorting field. restoreTime - rollback time; startTime-task start time; endTime-task end time. By default, the results are sorted in descending order by task start time.
     * @param string $OrderByType Sorting rule. desc - descending order; asc - ascending order. The default value is desc.
     * @param integer $FlowId Asynchronous rollback task ID.
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

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
