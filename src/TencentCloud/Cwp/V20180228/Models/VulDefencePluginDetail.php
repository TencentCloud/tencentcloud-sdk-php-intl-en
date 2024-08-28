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
 * vulnerability defense plugin status of a single process
 *
 * @method integer getPid() Obtain ID of the injected process
 * @method void setPid(integer $Pid) Set ID of the injected process
 * @method string getMainClass() Obtain Main class name of the injected process
 * @method void setMainClass(string $MainClass) Set Main class name of the injected process
 * @method integer getStatus() Obtain Plugin status. 0: injecting; 1: injection successful; 2: plugin timed out, 3: plugin exited; 4: injection failed; 5: logically deleted.
 * @method void setStatus(integer $Status) Set Plugin status. 0: injecting; 1: injection successful; 2: plugin timed out, 3: plugin exited; 4: injection failed; 5: logically deleted.
 * @method string getErrorLog() Obtain Error log
 * @method void setErrorLog(string $ErrorLog) Set Error log
 * @method string getInjectLog() Obtain Injection log
 * @method void setInjectLog(string $InjectLog) Set Injection log
 */
class VulDefencePluginDetail extends AbstractModel
{
    /**
     * @var integer ID of the injected process
     */
    public $Pid;

    /**
     * @var string Main class name of the injected process
     */
    public $MainClass;

    /**
     * @var integer Plugin status. 0: injecting; 1: injection successful; 2: plugin timed out, 3: plugin exited; 4: injection failed; 5: logically deleted.
     */
    public $Status;

    /**
     * @var string Error log
     */
    public $ErrorLog;

    /**
     * @var string Injection log
     */
    public $InjectLog;

    /**
     * @param integer $Pid ID of the injected process
     * @param string $MainClass Main class name of the injected process
     * @param integer $Status Plugin status. 0: injecting; 1: injection successful; 2: plugin timed out, 3: plugin exited; 4: injection failed; 5: logically deleted.
     * @param string $ErrorLog Error log
     * @param string $InjectLog Injection log
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

        if (array_key_exists("InjectLog",$param) and $param["InjectLog"] !== null) {
            $this->InjectLog = $param["InjectLog"];
        }
    }
}
