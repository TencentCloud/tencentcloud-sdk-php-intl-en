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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus agent management command line
 *
 * @method string getInstall() Obtain Agent installation command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstall(string $Install) Set Agent installation command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRestart() Obtain Agent restart command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestart(string $Restart) Set Agent restart command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStop() Obtain Agent stop command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStop(string $Stop) Set Agent stop command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusCheck() Obtain Agent status detection command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusCheck(string $StatusCheck) Set Agent status detection command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogCheck() Obtain Agent log detection command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogCheck(string $LogCheck) Set Agent log detection command
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ManagementCommand extends AbstractModel
{
    /**
     * @var string Agent installation command
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Install;

    /**
     * @var string Agent restart command
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Restart;

    /**
     * @var string Agent stop command
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Stop;

    /**
     * @var string Agent status detection command
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusCheck;

    /**
     * @var string Agent log detection command
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogCheck;

    /**
     * @param string $Install Agent installation command
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Restart Agent restart command
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Stop Agent stop command
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusCheck Agent status detection command
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogCheck Agent log detection command
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
        if (array_key_exists("Install",$param) and $param["Install"] !== null) {
            $this->Install = $param["Install"];
        }

        if (array_key_exists("Restart",$param) and $param["Restart"] !== null) {
            $this->Restart = $param["Restart"];
        }

        if (array_key_exists("Stop",$param) and $param["Stop"] !== null) {
            $this->Stop = $param["Stop"];
        }

        if (array_key_exists("StatusCheck",$param) and $param["StatusCheck"] !== null) {
            $this->StatusCheck = $param["StatusCheck"];
        }

        if (array_key_exists("LogCheck",$param) and $param["LogCheck"] !== null) {
            $this->LogCheck = $param["LogCheck"];
        }
    }
}
