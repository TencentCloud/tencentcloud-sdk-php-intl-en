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
 * List of hosts affected by vulnerabilities
 *
 * @method integer getEventId() Obtain Event ID
 * @method void setEventId(integer $EventId) Set Event ID
 * @method integer getStatus() Obtain Status: 0 - pending processing; 1 - ignored; 3 - fixed; 5 - detecting; 6 - in remediation; 7 - rolling back; 8 - fix failed.
 * @method void setStatus(integer $Status) Set Status: 0 - pending processing; 1 - ignored; 3 - fixed; 5 - detecting; 6 - in remediation; 7 - rolling back; 8 - fix failed.
 * @method string getLastTime() Obtain Last detection time
 * @method void setLastTime(string $LastTime) Set Last detection time
 * @method integer getLevel() Obtain Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
 * @method void setLevel(integer $Level) Set Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getAliasName() Obtain Host alias
 * @method void setAliasName(string $AliasName) Set Host alias
 * @method array getTags() Obtain Host tag
 * @method void setTags(array $Tags) Set Host tag
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getHostVersion() Obtain Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
 * @method void setHostVersion(integer $HostVersion) Set Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
 * @method integer getIsSupportAutoFix() Obtain Whether automatic fixing is supported 0: Cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Host can only be manually repaired if not flagship, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: In-progress detection, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not on linux, 13: Fixing failed but host is offline, 14: Fixing failed but host is not flagship, 15: Manually fixed
 * @method void setIsSupportAutoFix(integer $IsSupportAutoFix) Set Whether automatic fixing is supported 0: Cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Host can only be manually repaired if not flagship, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: In-progress detection, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not on linux, 13: Fixing failed but host is offline, 14: Fixing failed but host is not flagship, 15: Manually fixed
 * @method string getFixStatusMsg() Obtain Reason for failure
 * @method void setFixStatusMsg(string $FixStatusMsg) Set Reason for failure
 * @method string getFirstDiscoveryTime() Obtain First detection time
 * @method void setFirstDiscoveryTime(string $FirstDiscoveryTime) Set First detection time
 * @method string getInstanceState() Obtain Instance status: "PENDING" - creating, "LAUNCH_FAILED" - creation failed, "RUNNING" - running, "STOPPED" - shutdown, "STARTING" - starting, "STOPPING" - indicates shutdown in progress, "REBOOTING" - restarting, "SHUTDOWN" - indicate shutdown and pending termination, "TERMINATING" - indicates terminating in progress.
 * @method void setInstanceState(string $InstanceState) Set Instance status: "PENDING" - creating, "LAUNCH_FAILED" - creation failed, "RUNNING" - running, "STOPPED" - shutdown, "STARTING" - starting, "STOPPING" - indicates shutdown in progress, "REBOOTING" - restarting, "SHUTDOWN" - indicate shutdown and pending termination, "TERMINATING" - indicates terminating in progress.
 * @method string getPublicIpAddresses() Obtain Public IP address
 * @method void setPublicIpAddresses(string $PublicIpAddresses) Set Public IP address
 * @method array getCloudTags() Obtain Cloud Tag Information
 * @method void setCloudTags(array $CloudTags) Set Cloud Tag Information
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
 * @method string getMachineType() Obtain Host type
 * @method void setMachineType(string $MachineType) Set Host type
 * @method integer getRegionId() Obtain Availability zone ID.
 * @method void setRegionId(integer $RegionId) Set Availability zone ID.
 * @method integer getHasSnapshot() Obtain Whether to create a snapshot for the fix task: 0: not created; other: created.
 * @method void setHasSnapshot(integer $HasSnapshot) Set Whether to create a snapshot for the fix task: 0: not created; other: created.
 * @method string getLatestFixTime() Obtain Last repair time
 * @method void setLatestFixTime(string $LatestFixTime) Set Last repair time
 * @method string getDescriptionEn() Obtain Description
 * @method void setDescriptionEn(string $DescriptionEn) Set Description
 */
class VulEffectHostList extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $EventId;

    /**
     * @var integer Status: 0 - pending processing; 1 - ignored; 3 - fixed; 5 - detecting; 6 - in remediation; 7 - rolling back; 8 - fix failed.
     */
    public $Status;

    /**
     * @var string Last detection time
     */
    public $LastTime;

    /**
     * @var integer Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
     */
    public $Level;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var string Host alias
     */
    public $AliasName;

    /**
     * @var array Host tag
     */
    public $Tags;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
     */
    public $HostVersion;

    /**
     * @var integer Whether automatic fixing is supported 0: Cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Host can only be manually repaired if not flagship, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: In-progress detection, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not on linux, 13: Fixing failed but host is offline, 14: Fixing failed but host is not flagship, 15: Manually fixed
     */
    public $IsSupportAutoFix;

    /**
     * @var string Reason for failure
     */
    public $FixStatusMsg;

    /**
     * @var string First detection time
     */
    public $FirstDiscoveryTime;

    /**
     * @var string Instance status: "PENDING" - creating, "LAUNCH_FAILED" - creation failed, "RUNNING" - running, "STOPPED" - shutdown, "STARTING" - starting, "STOPPING" - indicates shutdown in progress, "REBOOTING" - restarting, "SHUTDOWN" - indicate shutdown and pending termination, "TERMINATING" - indicates terminating in progress.
     */
    public $InstanceState;

    /**
     * @var string Public IP address
     */
    public $PublicIpAddresses;

    /**
     * @var array Cloud Tag Information
     */
    public $CloudTags;

    /**
     * @var MachineExtraInfo Host Additional Information
     */
    public $MachineExtraInfo;

    /**
     * @var string Host type
     */
    public $MachineType;

    /**
     * @var integer Availability zone ID.
     */
    public $RegionId;

    /**
     * @var integer Whether to create a snapshot for the fix task: 0: not created; other: created.
     */
    public $HasSnapshot;

    /**
     * @var string Last repair time
     */
    public $LatestFixTime;

    /**
     * @var string Description
     */
    public $DescriptionEn;

    /**
     * @param integer $EventId Event ID
     * @param integer $Status Status: 0 - pending processing; 1 - ignored; 3 - fixed; 5 - detecting; 6 - in remediation; 7 - rolling back; 8 - fix failed.
     * @param string $LastTime Last detection time
     * @param integer $Level Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $HostIp Host IP address
     * @param string $AliasName Host alias
     * @param array $Tags Host tag
     * @param string $Description Description
     * @param integer $HostVersion Version information: 0-Basic version, 1-Pro edition, 2-Flagship edition, 3-Lightweight edition
     * @param integer $IsSupportAutoFix Whether automatic fixing is supported 0: Cannot be automatically repaired, 1: Can be automatically repaired, 2: Client offline, 3: Host can only be manually repaired if not flagship, 4: Not supported for this model, 5: In remediation, 6: Fixed, 7: In-progress detection, 9: Fix failed, 10: Ignored, 11: Vulnerability supported only on linux, not Windows, 12: Vulnerability supported only on Windows, not on linux, 13: Fixing failed but host is offline, 14: Fixing failed but host is not flagship, 15: Manually fixed
     * @param string $FixStatusMsg Reason for failure
     * @param string $FirstDiscoveryTime First detection time
     * @param string $InstanceState Instance status: "PENDING" - creating, "LAUNCH_FAILED" - creation failed, "RUNNING" - running, "STOPPED" - shutdown, "STARTING" - starting, "STOPPING" - indicates shutdown in progress, "REBOOTING" - restarting, "SHUTDOWN" - indicate shutdown and pending termination, "TERMINATING" - indicates terminating in progress.
     * @param string $PublicIpAddresses Public IP address
     * @param array $CloudTags Cloud Tag Information
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
     * @param string $MachineType Host type
     * @param integer $RegionId Availability zone ID.
     * @param integer $HasSnapshot Whether to create a snapshot for the fix task: 0: not created; other: created.
     * @param string $LatestFixTime Last repair time
     * @param string $DescriptionEn Description
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HostVersion",$param) and $param["HostVersion"] !== null) {
            $this->HostVersion = $param["HostVersion"];
        }

        if (array_key_exists("IsSupportAutoFix",$param) and $param["IsSupportAutoFix"] !== null) {
            $this->IsSupportAutoFix = $param["IsSupportAutoFix"];
        }

        if (array_key_exists("FixStatusMsg",$param) and $param["FixStatusMsg"] !== null) {
            $this->FixStatusMsg = $param["FixStatusMsg"];
        }

        if (array_key_exists("FirstDiscoveryTime",$param) and $param["FirstDiscoveryTime"] !== null) {
            $this->FirstDiscoveryTime = $param["FirstDiscoveryTime"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("HasSnapshot",$param) and $param["HasSnapshot"] !== null) {
            $this->HasSnapshot = $param["HasSnapshot"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }

        if (array_key_exists("DescriptionEn",$param) and $param["DescriptionEn"] !== null) {
            $this->DescriptionEn = $param["DescriptionEn"];
        }
    }
}
