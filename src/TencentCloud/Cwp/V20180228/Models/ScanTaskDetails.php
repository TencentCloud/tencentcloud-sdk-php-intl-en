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
 * List of scan task details
 *
 * @method string getHostIp() Obtain Server IP
 * @method void setHostIp(string $HostIp) Set Server IP
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getOsName() Obtain Operating system
 * @method void setOsName(string $OsName) Set Operating system
 * @method integer getRiskNum() Obtain Number of risks
 * @method void setRiskNum(integer $RiskNum) Set Number of risks
 * @method string getScanBeginTime() Obtain Scan start time
 * @method void setScanBeginTime(string $ScanBeginTime) Set Scan start time
 * @method string getScanEndTime() Obtain Scan end time
 * @method void setScanEndTime(string $ScanEndTime) Set Scan end time
 * @method string getUuid() Obtain UUID
 * @method void setUuid(string $Uuid) Set UUID
 * @method string getQuuid() Obtain QUUID
 * @method void setQuuid(string $Quuid) Set QUUID
 * @method string getStatus() Obtain Status code
 * @method void setStatus(string $Status) Set Status code
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getId() Obtain Unique ID
 * @method void setId(integer $Id) Set Unique ID
 * @method integer getFailType() Obtain Failure details
 * @method void setFailType(integer $FailType) Set Failure details
 * @method string getMachineWanIp() Obtain Public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScanTaskDetails extends AbstractModel
{
    /**
     * @var string Server IP
     */
    public $HostIp;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Operating system
     */
    public $OsName;

    /**
     * @var integer Number of risks
     */
    public $RiskNum;

    /**
     * @var string Scan start time
     */
    public $ScanBeginTime;

    /**
     * @var string Scan end time
     */
    public $ScanEndTime;

    /**
     * @var string UUID
     */
    public $Uuid;

    /**
     * @var string QUUID
     */
    public $Quuid;

    /**
     * @var string Status code
     */
    public $Status;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Unique ID
     */
    public $Id;

    /**
     * @var integer Failure details
     */
    public $FailType;

    /**
     * @var string Public IP address
     */
    public $MachineWanIp;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $HostIp Server IP
     * @param string $HostName Server name
     * @param string $OsName Operating system
     * @param integer $RiskNum Number of risks
     * @param string $ScanBeginTime Scan start time
     * @param string $ScanEndTime Scan end time
     * @param string $Uuid UUID
     * @param string $Quuid QUUID
     * @param string $Status Status code
     * @param string $Description Description
     * @param integer $Id Unique ID
     * @param integer $FailType Failure details
     * @param string $MachineWanIp Public IP address
     * @param MachineExtraInfo $MachineExtraInfo Additional information
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
        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("RiskNum",$param) and $param["RiskNum"] !== null) {
            $this->RiskNum = $param["RiskNum"];
        }

        if (array_key_exists("ScanBeginTime",$param) and $param["ScanBeginTime"] !== null) {
            $this->ScanBeginTime = $param["ScanBeginTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FailType",$param) and $param["FailType"] !== null) {
            $this->FailType = $param["FailType"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
