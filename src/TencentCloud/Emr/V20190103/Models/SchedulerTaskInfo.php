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
 * Yarn resource scheduling history
 *
 * @method string getSchedulerName() Obtain Scheduler type
 * @method void setSchedulerName(string $SchedulerName) Set Scheduler type
 * @method string getOperatorName() Obtain Operation type
 * @method void setOperatorName(string $OperatorName) Set Operation type
 * @method string getCreateTime() Obtain Start time.
 * @method void setCreateTime(string $CreateTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method integer getState() Obtain Status.
 * @method void setState(integer $State) Set Status.
 * @method array getDetails() Obtain Details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetails(array $Details) Set Details.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SchedulerTaskInfo extends AbstractModel
{
    /**
     * @var string Scheduler type
     */
    public $SchedulerName;

    /**
     * @var string Operation type
     */
    public $OperatorName;

    /**
     * @var string Start time.
     */
    public $CreateTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var integer Status.
     */
    public $State;

    /**
     * @var array Details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Details;

    /**
     * @param string $SchedulerName Scheduler type
     * @param string $OperatorName Operation type
     * @param string $CreateTime Start time.
     * @param string $EndTime End time.
     * @param integer $State Status.
     * @param array $Details Details.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SchedulerName",$param) and $param["SchedulerName"] !== null) {
            $this->SchedulerName = $param["SchedulerName"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new SchedulerTaskDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
