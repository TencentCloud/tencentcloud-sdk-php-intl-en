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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Important Period Guarantee Protection License Plugin Details
 *
 * @method integer getPID() Obtain java Process pid
 * @method void setPID(integer $PID) Set java Process pid
 * @method string getMainClass() Obtain Java Main Class
 * @method void setMainClass(string $MainClass) Set Java Main Class
 * @method integer getStatus() Obtain 0: Injecting, 1: Injection successful, 2: Plugin timed out, 3: Plug-in exit, 4: Injection failure
 * @method void setStatus(integer $Status) Set 0: Injecting, 1: Injection successful, 2: Plugin timed out, 3: Plug-in exit, 4: Injection failure
 * @method string getErrorLog() Obtain Error details
 * @method void setErrorLog(string $ErrorLog) Set Error details
 * @method string getReason() Obtain Failure reason of injection
 * @method void setReason(string $Reason) Set Failure reason of injection
 * @method string getInjectTime() Obtain Injection duration
 * @method void setInjectTime(string $InjectTime) Set Injection duration
 */
class RaspLicensePlugin extends AbstractModel
{
    /**
     * @var integer java Process pid
     */
    public $PID;

    /**
     * @var string Java Main Class
     */
    public $MainClass;

    /**
     * @var integer 0: Injecting, 1: Injection successful, 2: Plugin timed out, 3: Plug-in exit, 4: Injection failure
     */
    public $Status;

    /**
     * @var string Error details
     */
    public $ErrorLog;

    /**
     * @var string Failure reason of injection
     */
    public $Reason;

    /**
     * @var string Injection duration
     */
    public $InjectTime;

    /**
     * @param integer $PID java Process pid
     * @param string $MainClass Java Main Class
     * @param integer $Status 0: Injecting, 1: Injection successful, 2: Plugin timed out, 3: Plug-in exit, 4: Injection failure
     * @param string $ErrorLog Error details
     * @param string $Reason Failure reason of injection
     * @param string $InjectTime Injection duration
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
        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("InjectTime",$param) and $param["InjectTime"] !== null) {
            $this->InjectTime = $param["InjectTime"];
        }
    }
}
