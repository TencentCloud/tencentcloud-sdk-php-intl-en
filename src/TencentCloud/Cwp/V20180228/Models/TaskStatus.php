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
 * Scan status list
 *
 * @method string getScanning() Obtain Scanning (including initializing)
 * @method void setScanning(string $Scanning) Set Scanning (including initializing)
 * @method string getOk() Obtain Scan terminated (including terminating)
 * @method void setOk(string $Ok) Set Scan terminated (including terminating)
 * @method string getFail() Obtain Scan failed
 * @method void setFail(string $Fail) Set Scan failed
 * @method string getStop() Obtain Scan failed, with specific reason displayed: scan timeout, low client version, or client offline
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStop(string $Stop) Set Scan failed, with specific reason displayed: scan timeout, low client version, or client offline
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var string Scanning (including initializing)
     */
    public $Scanning;

    /**
     * @var string Scan terminated (including terminating)
     */
    public $Ok;

    /**
     * @var string Scan failed
     */
    public $Fail;

    /**
     * @var string Scan failed, with specific reason displayed: scan timeout, low client version, or client offline
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Stop;

    /**
     * @param string $Scanning Scanning (including initializing)
     * @param string $Ok Scan terminated (including terminating)
     * @param string $Fail Scan failed
     * @param string $Stop Scan failed, with specific reason displayed: scan timeout, low client version, or client offline
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
        if (array_key_exists("Scanning",$param) and $param["Scanning"] !== null) {
            $this->Scanning = $param["Scanning"];
        }

        if (array_key_exists("Ok",$param) and $param["Ok"] !== null) {
            $this->Ok = $param["Ok"];
        }

        if (array_key_exists("Fail",$param) and $param["Fail"] !== null) {
            $this->Fail = $param["Fail"];
        }

        if (array_key_exists("Stop",$param) and $param["Stop"] !== null) {
            $this->Stop = $param["Stop"];
        }
    }
}
