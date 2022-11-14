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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Getting started on scanning information  
 *
 * @method ScanResultInfo getScanResultInfo() Obtain Scanning result information
 * @method void setScanResultInfo(ScanResultInfo $ScanResultInfo) Set Scanning result information
 * @method integer getScanStatus() Obtain Scanning status. 0: scanning; 1: completed; 2: auto scanning unselected
 * @method void setScanStatus(integer $ScanStatus) Set Scanning status. 0: scanning; 1: completed; 2: auto scanning unselected
 * @method float getScanPercent() Obtain Progress
 * @method void setScanPercent(float $ScanPercent) Set Progress
 * @method string getScanTime() Obtain Estimated completion time
 * @method void setScanTime(string $ScanTime) Set Estimated completion time
 */
class ScanInfo extends AbstractModel
{
    /**
     * @var ScanResultInfo Scanning result information
     */
    public $ScanResultInfo;

    /**
     * @var integer Scanning status. 0: scanning; 1: completed; 2: auto scanning unselected
     */
    public $ScanStatus;

    /**
     * @var float Progress
     */
    public $ScanPercent;

    /**
     * @var string Estimated completion time
     */
    public $ScanTime;

    /**
     * @param ScanResultInfo $ScanResultInfo Scanning result information
     * @param integer $ScanStatus Scanning status. 0: scanning; 1: completed; 2: auto scanning unselected
     * @param float $ScanPercent Progress
     * @param string $ScanTime Estimated completion time
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
        if (array_key_exists("ScanResultInfo",$param) and $param["ScanResultInfo"] !== null) {
            $this->ScanResultInfo = new ScanResultInfo();
            $this->ScanResultInfo->deserialize($param["ScanResultInfo"]);
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("ScanPercent",$param) and $param["ScanPercent"] !== null) {
            $this->ScanPercent = $param["ScanPercent"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }
    }
}
