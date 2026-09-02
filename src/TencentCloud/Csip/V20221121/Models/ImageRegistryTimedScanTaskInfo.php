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
 * Image repository periodic scan task information
 *
 * @method integer getId() Obtain <p>Task ID.</p>
 * @method void setId(integer $Id) Set <p>Task ID.</p>
 * @method string getName() Obtain <p>Task name</p>
 * @method void setName(string $Name) Set <p>Task name</p>
 * @method boolean getEnable() Obtain <p>Whether to enable</p>
 * @method void setEnable(boolean $Enable) Set <p>Whether to enable</p>
 * @method array getScanType() Obtain <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
 * @method void setScanType(array $ScanType) Set <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
 * @method ImageScanScheduleConfig getSchedule() Obtain <p>Scheduled task scheduling configuration</p>
 * @method void setSchedule(ImageScanScheduleConfig $Schedule) Set <p>Scheduled task scheduling configuration</p>
 * @method ImageScanAssetTarget getTarget() Obtain <p>Scan target image filtering configuration</p>
 * @method void setTarget(ImageScanAssetTarget $Target) Set <p>Scan target image filtering configuration</p>
 * @method ImageScanRegistryFilter getFilter() Obtain <p>Mirror filter configuration</p>
 * @method void setFilter(ImageScanRegistryFilter $Filter) Set <p>Mirror filter configuration</p>
 * @method integer getTimeout() Obtain <p>Timeout period, in seconds</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout period, in seconds</p>
 * @method string getLastScanTime() Obtain <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLastScanTime(string $LastScanTime) Set <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getOwnerAccountName() Obtain <p>Scheduled task associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Scheduled task associated account name</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the scheduled task</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the scheduled task</p>
 * @method string getOwnerUin() Obtain <p>uin of the associated account for the scheduled task</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>uin of the associated account for the scheduled task</p>
 * @method string getCreateTime() Obtain <p>Configuration creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Configuration creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getUpdateTime() Obtain <p>Configuration update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Configuration update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 */
class ImageRegistryTimedScanTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $Id;

    /**
     * @var string <p>Task name</p>
     */
    public $Name;

    /**
     * @var boolean <p>Whether to enable</p>
     */
    public $Enable;

    /**
     * @var array <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
     */
    public $ScanType;

    /**
     * @var ImageScanScheduleConfig <p>Scheduled task scheduling configuration</p>
     */
    public $Schedule;

    /**
     * @var ImageScanAssetTarget <p>Scan target image filtering configuration</p>
     */
    public $Target;

    /**
     * @var ImageScanRegistryFilter <p>Mirror filter configuration</p>
     */
    public $Filter;

    /**
     * @var integer <p>Timeout period, in seconds</p>
     */
    public $Timeout;

    /**
     * @var string <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LastScanTime;

    /**
     * @var string <p>Scheduled task associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the account associated with the scheduled task</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>uin of the associated account for the scheduled task</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>Configuration creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Configuration update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @param integer $Id <p>Task ID.</p>
     * @param string $Name <p>Task name</p>
     * @param boolean $Enable <p>Whether to enable</p>
     * @param array $ScanType <p>Scan category</p><p>Enumeration values:</p><ul><li>CVE: vulnerability</li><li>RISK: risk</li><li>VIRUS: Trojan</li></ul>
     * @param ImageScanScheduleConfig $Schedule <p>Scheduled task scheduling configuration</p>
     * @param ImageScanAssetTarget $Target <p>Scan target image filtering configuration</p>
     * @param ImageScanRegistryFilter $Filter <p>Mirror filter configuration</p>
     * @param integer $Timeout <p>Timeout period, in seconds</p>
     * @param string $LastScanTime <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $OwnerAccountName <p>Scheduled task associated account name</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the scheduled task</p>
     * @param string $OwnerUin <p>uin of the associated account for the scheduled task</p>
     * @param string $CreateTime <p>Configuration creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $UpdateTime <p>Configuration update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
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

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
