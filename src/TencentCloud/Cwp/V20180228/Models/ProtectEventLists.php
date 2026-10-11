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
 * Information on the list of protection events
 *
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getHostIp() Obtain Server IP address
 * @method void setHostIp(string $HostIp) Set Server IP address
 * @method string getEventDir() Obtain Event address
 * @method void setEventDir(string $EventDir) Set Event address
 * @method integer getEventType() Obtain Event type. 0: Content Modification Recovery; 1: Permission Modification Recovery; 2: Ownership Modification Recovery; 3: Deletion Recovery; 4: Newly-added Deletion
 * @method void setEventType(integer $EventType) Set Event type. 0: Content Modification Recovery; 1: Permission Modification Recovery; 2: Ownership Modification Recovery; 3: Deletion Recovery; 4: Newly-added Deletion
 * @method integer getEventStatus() Obtain Event status. 1: restored. 0: unrecovered
 * @method void setEventStatus(integer $EventStatus) Set Event status. 1: restored. 0: unrecovered
 * @method string getCreateTime() Obtain Detection time
 * @method void setCreateTime(string $CreateTime) Set Detection time
 * @method string getRestoreTime() Obtain Recovery time
 * @method void setRestoreTime(string $RestoreTime) Set Recovery time
 * @method integer getId() Obtain Unique ID
 * @method void setId(integer $Id) Set Unique ID
 * @method integer getFileType() Obtain File type. 0: normal file; 1: directory; 2: soft link
 * @method void setFileType(integer $FileType) Set File type. 0: normal file; 1: directory; 2: soft link
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
 * @method string getQuuid() Obtain Machine instance UUID.
 * @method void setQuuid(string $Quuid) Set Machine instance UUID.
 */
class ProtectEventLists extends AbstractModel
{
    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Server IP address
     */
    public $HostIp;

    /**
     * @var string Event address
     */
    public $EventDir;

    /**
     * @var integer Event type. 0: Content Modification Recovery; 1: Permission Modification Recovery; 2: Ownership Modification Recovery; 3: Deletion Recovery; 4: Newly-added Deletion
     */
    public $EventType;

    /**
     * @var integer Event status. 1: restored. 0: unrecovered
     */
    public $EventStatus;

    /**
     * @var string Detection time
     */
    public $CreateTime;

    /**
     * @var string Recovery time
     */
    public $RestoreTime;

    /**
     * @var integer Unique ID
     */
    public $Id;

    /**
     * @var integer File type. 0: normal file; 1: directory; 2: soft link
     */
    public $FileType;

    /**
     * @var MachineExtraInfo Host Additional Information
     */
    public $MachineExtraInfo;

    /**
     * @var string Machine instance UUID.
     */
    public $Quuid;

    /**
     * @param string $HostName Server name
     * @param string $HostIp Server IP address
     * @param string $EventDir Event address
     * @param integer $EventType Event type. 0: Content Modification Recovery; 1: Permission Modification Recovery; 2: Ownership Modification Recovery; 3: Deletion Recovery; 4: Newly-added Deletion
     * @param integer $EventStatus Event status. 1: restored. 0: unrecovered
     * @param string $CreateTime Detection time
     * @param string $RestoreTime Recovery time
     * @param integer $Id Unique ID
     * @param integer $FileType File type. 0: normal file; 1: directory; 2: soft link
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
     * @param string $Quuid Machine instance UUID.
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("EventDir",$param) and $param["EventDir"] !== null) {
            $this->EventDir = $param["EventDir"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
