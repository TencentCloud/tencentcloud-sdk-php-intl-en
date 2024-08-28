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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Java Memory Trojan Plugin Information
 *
 * @method integer getPid() Obtain Injection Process PID
 * @method void setPid(integer $Pid) Set Injection Process PID
 * @method string getMainClass() Obtain Injection Process Main Class
 * @method void setMainClass(string $MainClass) Set Injection Process Main Class
 * @method integer getStatus() Obtain Injection Status. 0: Injecting; 1: Injection Succeeded; 2: Plugin Timeout; 3: Plugin Exits; 4: Injection Failed; 5: Soft-delete
 * @method void setStatus(integer $Status) Set Injection Status. 0: Injecting; 1: Injection Succeeded; 2: Plugin Timeout; 3: Plugin Exits; 4: Injection Failed; 5: Soft-delete
 * @method string getErrorLog() Obtain Error logs
 * @method void setErrorLog(string $ErrorLog) Set Error logs
 */
class JavaMemShellPluginInfo extends AbstractModel
{
    /**
     * @var integer Injection Process PID
     */
    public $Pid;

    /**
     * @var string Injection Process Main Class
     */
    public $MainClass;

    /**
     * @var integer Injection Status. 0: Injecting; 1: Injection Succeeded; 2: Plugin Timeout; 3: Plugin Exits; 4: Injection Failed; 5: Soft-delete
     */
    public $Status;

    /**
     * @var string Error logs
     */
    public $ErrorLog;

    /**
     * @param integer $Pid Injection Process PID
     * @param string $MainClass Injection Process Main Class
     * @param integer $Status Injection Status. 0: Injecting; 1: Injection Succeeded; 2: Plugin Timeout; 3: Plugin Exits; 4: Injection Failed; 5: Soft-delete
     * @param string $ErrorLog Error logs
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
        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
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
    }
}
