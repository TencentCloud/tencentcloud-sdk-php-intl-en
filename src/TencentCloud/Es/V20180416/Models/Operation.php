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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed ES cluster operation information
 *
 * @method integer getId() Obtain <p>Unique id of the operation</p>
 * @method void setId(integer $Id) Set <p>Unique id of the operation</p>
 * @method string getStartTime() Obtain <p>Operation start time.</p>
 * @method void setStartTime(string $StartTime) Set <p>Operation start time.</p>
 * @method string getType() Obtain <p>Operation type.</p>
 * @method void setType(string $Type) Set <p>Operation type.</p>
 * @method OperationDetail getDetail() Obtain <p>Operation details.</p>
 * @method void setDetail(OperationDetail $Detail) Set <p>Operation details.</p>
 * @method string getResult() Obtain <p>Operation result.</p>
 * @method void setResult(string $Result) Set <p>Operation result.</p>
 * @method array getTasks() Obtain <p>Process task info</p>
 * @method void setTasks(array $Tasks) Set <p>Process task info</p>
 * @method float getProgress() Obtain <p>Operation progress.</p>
 * @method void setProgress(float $Progress) Set <p>Operation progress.</p>
 * @method integer getRollbackTag() Obtain <p>Rollback tag. 0: not rolled back, 1: rolling back, 2: rolled back</p>
 * @method void setRollbackTag(integer $RollbackTag) Set <p>Rollback tag. 0: not rolled back, 1: rolling back, 2: rolled back</p>
 * @method string getSubAccountUin() Obtain <p>Operator Uin</p>
 * @method void setSubAccountUin(string $SubAccountUin) Set <p>Operator Uin</p>
 * @method integer getAutoScaleTag() Obtain <p>Auto scaling flag. Valid values: 0 (non-auto) and 1 (auto).</p>
 * @method void setAutoScaleTag(integer $AutoScaleTag) Set <p>Auto scaling flag. Valid values: 0 (non-auto) and 1 (auto).</p>
 * @method string getSuspendedReason() Obtain <p>Process exception cause</p>
 * @method void setSuspendedReason(string $SuspendedReason) Set <p>Process exception cause</p>
 */
class Operation extends AbstractModel
{
    /**
     * @var integer <p>Unique id of the operation</p>
     */
    public $Id;

    /**
     * @var string <p>Operation start time.</p>
     */
    public $StartTime;

    /**
     * @var string <p>Operation type.</p>
     */
    public $Type;

    /**
     * @var OperationDetail <p>Operation details.</p>
     */
    public $Detail;

    /**
     * @var string <p>Operation result.</p>
     */
    public $Result;

    /**
     * @var array <p>Process task info</p>
     */
    public $Tasks;

    /**
     * @var float <p>Operation progress.</p>
     */
    public $Progress;

    /**
     * @var integer <p>Rollback tag. 0: not rolled back, 1: rolling back, 2: rolled back</p>
     */
    public $RollbackTag;

    /**
     * @var string <p>Operator Uin</p>
     */
    public $SubAccountUin;

    /**
     * @var integer <p>Auto scaling flag. Valid values: 0 (non-auto) and 1 (auto).</p>
     */
    public $AutoScaleTag;

    /**
     * @var string <p>Process exception cause</p>
     */
    public $SuspendedReason;

    /**
     * @param integer $Id <p>Unique id of the operation</p>
     * @param string $StartTime <p>Operation start time.</p>
     * @param string $Type <p>Operation type.</p>
     * @param OperationDetail $Detail <p>Operation details.</p>
     * @param string $Result <p>Operation result.</p>
     * @param array $Tasks <p>Process task info</p>
     * @param float $Progress <p>Operation progress.</p>
     * @param integer $RollbackTag <p>Rollback tag. 0: not rolled back, 1: rolling back, 2: rolled back</p>
     * @param string $SubAccountUin <p>Operator Uin</p>
     * @param integer $AutoScaleTag <p>Auto scaling flag. Valid values: 0 (non-auto) and 1 (auto).</p>
     * @param string $SuspendedReason <p>Process exception cause</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new OperationDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskDetail();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RollbackTag",$param) and $param["RollbackTag"] !== null) {
            $this->RollbackTag = $param["RollbackTag"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("AutoScaleTag",$param) and $param["AutoScaleTag"] !== null) {
            $this->AutoScaleTag = $param["AutoScaleTag"];
        }

        if (array_key_exists("SuspendedReason",$param) and $param["SuspendedReason"] !== null) {
            $this->SuspendedReason = $param["SuspendedReason"];
        }
    }
}
