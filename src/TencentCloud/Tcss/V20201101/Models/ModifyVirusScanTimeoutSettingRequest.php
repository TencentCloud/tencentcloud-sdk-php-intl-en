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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVirusScanTimeoutSetting request structure.
 *
 * @method integer getTimeout() Obtain Timeout period in hours. Value range: 5-24.
 * @method void setTimeout(integer $Timeout) Set Timeout period in hours. Value range: 5-24.
 * @method integer getScanType() Obtain Scan type. Valid values: `0` (quick scan); `1` (scheduled scan).
 * @method void setScanType(integer $ScanType) Set Scan type. Valid values: `0` (quick scan); `1` (scheduled scan).
 */
class ModifyVirusScanTimeoutSettingRequest extends AbstractModel
{
    /**
     * @var integer Timeout period in hours. Value range: 5-24.
     */
    public $Timeout;

    /**
     * @var integer Scan type. Valid values: `0` (quick scan); `1` (scheduled scan).
     */
    public $ScanType;

    /**
     * @param integer $Timeout Timeout period in hours. Value range: 5-24.
     * @param integer $ScanType Scan type. Valid values: `0` (quick scan); `1` (scheduled scan).
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
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }
    }
}
