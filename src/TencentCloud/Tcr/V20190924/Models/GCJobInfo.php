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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GC execution information
 *
 * @method integer getID() Obtain Job ID
 * @method void setID(integer $ID) Set Job ID
 * @method string getJobStatus() Obtain Job status
 * @method void setJobStatus(string $JobStatus) Set Job status
 * @method string getCreationTime() Obtain Creation time
 * @method void setCreationTime(string $CreationTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method Schedule getSchedule() Obtain Scheduling information
 * @method void setSchedule(Schedule $Schedule) Set Scheduling information
 */
class GCJobInfo extends AbstractModel
{
    /**
     * @var integer Job ID
     */
    public $ID;

    /**
     * @var string Job status
     */
    public $JobStatus;

    /**
     * @var string Creation time
     */
    public $CreationTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var Schedule Scheduling information
     */
    public $Schedule;

    /**
     * @param integer $ID Job ID
     * @param string $JobStatus Job status
     * @param string $CreationTime Creation time
     * @param string $UpdateTime Update time
     * @param Schedule $Schedule Scheduling information
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new Schedule();
            $this->Schedule->deserialize($param["Schedule"]);
        }
    }
}
