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
 * CreateImageRegistryTimedScanTaskConfig request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getName() Obtain <p>Task name</p>
 * @method void setName(string $Name) Set <p>Task name</p>
 * @method boolean getEnable() Obtain <p>Whether to enable</p><p>Enumeration values:</p><ul><li>true: enable</li><li>false: disable</li></ul>
 * @method void setEnable(boolean $Enable) Set <p>Whether to enable</p><p>Enumeration values:</p><ul><li>true: enable</li><li>false: disable</li></ul>
 * @method array getScanType() Obtain <p>Scan category</p><p>Enumeration values:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
 * @method void setScanType(array $ScanType) Set <p>Scan category</p><p>Enumeration values:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
 * @method ImageScanScheduleConfig getSchedule() Obtain <p>Scheduled task scheduling configuration</p>
 * @method void setSchedule(ImageScanScheduleConfig $Schedule) Set <p>Scheduled task scheduling configuration</p>
 * @method ImageScanAssetTarget getTarget() Obtain <p>Filtering configuration for scan target image</p>
 * @method void setTarget(ImageScanAssetTarget $Target) Set <p>Filtering configuration for scan target image</p>
 * @method ImageScanRegistryFilter getFilter() Obtain <p>Mirror filter configuration</p>
 * @method void setFilter(ImageScanRegistryFilter $Filter) Set <p>Mirror filter configuration</p>
 * @method integer getTimeout() Obtain <p>CreateImageRegistryTimedScanTaskConfig</p>
 * @method void setTimeout(integer $Timeout) Set <p>CreateImageRegistryTimedScanTaskConfig</p>
 */
class CreateImageRegistryTimedScanTaskConfigRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Task name</p>
     */
    public $Name;

    /**
     * @var boolean <p>Whether to enable</p><p>Enumeration values:</p><ul><li>true: enable</li><li>false: disable</li></ul>
     */
    public $Enable;

    /**
     * @var array <p>Scan category</p><p>Enumeration values:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
     */
    public $ScanType;

    /**
     * @var ImageScanScheduleConfig <p>Scheduled task scheduling configuration</p>
     */
    public $Schedule;

    /**
     * @var ImageScanAssetTarget <p>Filtering configuration for scan target image</p>
     */
    public $Target;

    /**
     * @var ImageScanRegistryFilter <p>Mirror filter configuration</p>
     */
    public $Filter;

    /**
     * @var integer <p>CreateImageRegistryTimedScanTaskConfig</p>
     */
    public $Timeout;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Name <p>Task name</p>
     * @param boolean $Enable <p>Whether to enable</p><p>Enumeration values:</p><ul><li>true: enable</li><li>false: disable</li></ul>
     * @param array $ScanType <p>Scan category</p><p>Enumeration values:</p><ul><li>VUL: Vulnerability</li><li>VIRUS: Trojan</li><li>RISK: Sensitive information</li></ul>
     * @param ImageScanScheduleConfig $Schedule <p>Scheduled task scheduling configuration</p>
     * @param ImageScanAssetTarget $Target <p>Filtering configuration for scan target image</p>
     * @param ImageScanRegistryFilter $Filter <p>Mirror filter configuration</p>
     * @param integer $Timeout <p>CreateImageRegistryTimedScanTaskConfig</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new ImageScanAssetTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new ImageScanRegistryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
