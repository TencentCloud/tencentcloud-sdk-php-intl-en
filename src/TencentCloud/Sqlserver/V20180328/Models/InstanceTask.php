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
 * Instance Asynchronous Task
 *
 * @method integer getId() Obtain Unique id
 * @method void setId(integer $Id) Set Unique id
 * @method integer getType() Obtain Job Type
 * @method void setType(integer $Type) Set Job Type
 * @method integer getStatus() Obtain Job Status
 * @method void setStatus(integer $Status) Set Job Status
 * @method integer getProgress() Obtain Progress Percentage 0~100
 * @method void setProgress(integer $Progress) Set Progress Percentage 0~100
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End Time
 * @method void setEndTime(string $EndTime) Set End Time
 * @method integer getErrorCode() Obtain Error Code
 * @method void setErrorCode(integer $ErrorCode) Set Error Code
 * @method string getMessage() Obtain Error Message Description
 * @method void setMessage(string $Message) Set Error Message Description
 */
class InstanceTask extends AbstractModel
{
    /**
     * @var integer Unique id
     */
    public $Id;

    /**
     * @var integer Job Type
     */
    public $Type;

    /**
     * @var integer Job Status
     */
    public $Status;

    /**
     * @var integer Progress Percentage 0~100
     */
    public $Progress;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End Time
     */
    public $EndTime;

    /**
     * @var integer Error Code
     */
    public $ErrorCode;

    /**
     * @var string Error Message Description
     */
    public $Message;

    /**
     * @param integer $Id Unique id
     * @param integer $Type Job Type
     * @param integer $Status Job Status
     * @param integer $Progress Progress Percentage 0~100
     * @param string $StartTime Start Time
     * @param string $EndTime End Time
     * @param integer $ErrorCode Error Code
     * @param string $Message Error Message Description
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
