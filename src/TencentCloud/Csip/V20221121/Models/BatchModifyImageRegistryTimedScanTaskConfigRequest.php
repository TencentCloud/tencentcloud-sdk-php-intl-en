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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchModifyImageRegistryTimedScanTaskConfig request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getId() Obtain <p>Task ID.</p>
 * @method void setId(array $Id) Set <p>Task ID.</p>
 * @method boolean getEnable() Obtain <p>Whether to enable</p>
 * @method void setEnable(boolean $Enable) Set <p>Whether to enable</p>
 * @method array getScanType() Obtain <p>Scan category</p><p>Enumeration value:</p><ul><li>CVE: Vulnerability</li><li>RISK: Risk</li><li>VIRUS: Trojan</li></ul>
 * @method void setScanType(array $ScanType) Set <p>Scan category</p><p>Enumeration value:</p><ul><li>CVE: Vulnerability</li><li>RISK: Risk</li><li>VIRUS: Trojan</li></ul>
 * @method ImageScanScheduleConfig getSchedule() Obtain <p>Scheduled task scheduling configuration</p>
 * @method void setSchedule(ImageScanScheduleConfig $Schedule) Set <p>Scheduled task scheduling configuration</p>
 * @method integer getTimeout() Obtain <p>Timeout period, in seconds</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout period, in seconds</p>
 */
class BatchModifyImageRegistryTimedScanTaskConfigRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Task ID.</p>
     */
    public $Id;

    /**
     * @var boolean <p>Whether to enable</p>
     */
    public $Enable;

    /**
     * @var array <p>Scan category</p><p>Enumeration value:</p><ul><li>CVE: Vulnerability</li><li>RISK: Risk</li><li>VIRUS: Trojan</li></ul>
     */
    public $ScanType;

    /**
     * @var ImageScanScheduleConfig <p>Scheduled task scheduling configuration</p>
     */
    public $Schedule;

    /**
     * @var integer <p>Timeout period, in seconds</p>
     */
    public $Timeout;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Id <p>Task ID.</p>
     * @param boolean $Enable <p>Whether to enable</p>
     * @param array $ScanType <p>Scan category</p><p>Enumeration value:</p><ul><li>CVE: Vulnerability</li><li>RISK: Risk</li><li>VIRUS: Trojan</li></ul>
     * @param ImageScanScheduleConfig $Schedule <p>Scheduled task scheduling configuration</p>
     * @param integer $Timeout <p>Timeout period, in seconds</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new ImageScanScheduleConfig();
            $this->Schedule->deserialize($param["Schedule"]);
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
