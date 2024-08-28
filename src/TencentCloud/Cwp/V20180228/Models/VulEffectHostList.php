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
 * List of hosts affected by vulnerabilities
 *
 * @method integer getEventId() Obtain Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(integer $EventId) Set Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 7: rolling back; 8: fixing failed.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status. 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 7: rolling back; 8: fixing failed.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastTime() Obtain Last detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastTime(string $LastTime) Set Last detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIp() Obtain Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIp(string $HostIp) Set Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAliasName() Obtain Host alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAliasName(string $AliasName) Set Host alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostVersion() Obtain Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostVersion(integer $HostVersion) Set Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSupportAutoFix() Obtain Whether automatic fixing is supported. 0: not supported; 1: supported; 2: client offline; 3: manual fixing supported for Ultimate Edition hosts; 4: not supported for this model; 5: fixing, 6: fixed; 7: detecting; 9: fixing failed; 10: ignored; 11: supported for Linux but not Windows; 12: supported for Windows but not Linux; 13: fixing failed but host is offline; 14: fixing failed but host is not of the Ultimate edition; 15: manually fixed.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportAutoFix(integer $IsSupportAutoFix) Set Whether automatic fixing is supported. 0: not supported; 1: supported; 2: client offline; 3: manual fixing supported for Ultimate Edition hosts; 4: not supported for this model; 5: fixing, 6: fixed; 7: detecting; 9: fixing failed; 10: ignored; 11: supported for Linux but not Windows; 12: supported for Windows but not Linux; 13: fixing failed but host is offline; 14: fixing failed but host is not of the Ultimate edition; 15: manually fixed.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFixStatusMsg() Obtain Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixStatusMsg(string $FixStatusMsg) Set Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstDiscoveryTime() Obtain First detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstDiscoveryTime(string $FirstDiscoveryTime) Set First detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceState() Obtain Instance status. "PENDING": creating; "LAUNCH_FAILED" : creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": shut down and pending termination; "TERMINATING": terminating.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceState(string $InstanceState) Set Instance status. "PENDING": creating; "LAUNCH_FAILED" : creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": shut down and pending termination; "TERMINATING": terminating.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicIpAddresses() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIpAddresses(string $PublicIpAddresses) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCloudTags() Obtain Cloud tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudTags(array $CloudTags) Set Cloud tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulEffectHostList extends AbstractModel
{
    /**
     * @var integer Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @var integer Status. 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 7: rolling back; 8: fixing failed.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Last detection time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastTime;

    /**
     * @var integer Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var string Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var string Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIp;

    /**
     * @var string Host alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AliasName;

    /**
     * @var array Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostVersion;

    /**
     * @var integer Whether automatic fixing is supported. 0: not supported; 1: supported; 2: client offline; 3: manual fixing supported for Ultimate Edition hosts; 4: not supported for this model; 5: fixing, 6: fixed; 7: detecting; 9: fixing failed; 10: ignored; 11: supported for Linux but not Windows; 12: supported for Windows but not Linux; 13: fixing failed but host is offline; 14: fixing failed but host is not of the Ultimate edition; 15: manually fixed.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportAutoFix;

    /**
     * @var string Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixStatusMsg;

    /**
     * @var string First detection time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstDiscoveryTime;

    /**
     * @var string Instance status. "PENDING": creating; "LAUNCH_FAILED" : creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": shut down and pending termination; "TERMINATING": terminating.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceState;

    /**
     * @var string Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIpAddresses;

    /**
     * @var array Cloud tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudTags;

    /**
     * @var MachineExtraInfo Host additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param integer $EventId Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status. 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 7: rolling back; 8: fixing failed.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastTime Last detection time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Level Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIp Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AliasName Host alias
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostVersion Edition information. 0: Basic Edition; 1: Pro Edition; 2: Ultimate Edition; 3: Inclusive Edition.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSupportAutoFix Whether automatic fixing is supported. 0: not supported; 1: supported; 2: client offline; 3: manual fixing supported for Ultimate Edition hosts; 4: not supported for this model; 5: fixing, 6: fixed; 7: detecting; 9: fixing failed; 10: ignored; 11: supported for Linux but not Windows; 12: supported for Windows but not Linux; 13: fixing failed but host is offline; 14: fixing failed but host is not of the Ultimate edition; 15: manually fixed.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FixStatusMsg Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstDiscoveryTime First detection time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceState Instance status. "PENDING": creating; "LAUNCH_FAILED" : creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": shut down and pending termination; "TERMINATING": terminating.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicIpAddresses Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CloudTags Cloud tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Host additional information
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
    }
}
