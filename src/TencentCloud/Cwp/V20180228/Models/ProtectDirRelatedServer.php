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
 * Server list information associated with the protection directory
 *
 * @method string getId() Obtain Unique ID
 * @method void setId(string $Id) Set Unique ID
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getHostIp() Obtain Server IP address
 * @method void setHostIp(string $HostIp) Set Server IP address
 * @method string getMachineOs() Obtain Server system
 * @method void setMachineOs(string $MachineOs) Set Server system
 * @method integer getRelateDirNum() Obtain Number of associated directories
 * @method void setRelateDirNum(integer $RelateDirNum) Set Number of associated directories
 * @method integer getProtectStatus() Obtain Protection status
 * @method void setProtectStatus(integer $ProtectStatus) Set Protection status
 * @method integer getProtectSwitch() Obtain Protection switch
 * @method void setProtectSwitch(integer $ProtectSwitch) Set Protection switch
 * @method integer getAutoRestoreSwitchStatus() Obtain Auto recovery switch
 * @method void setAutoRestoreSwitchStatus(integer $AutoRestoreSwitchStatus) Set Auto recovery switch
 * @method string getQuuid() Obtain Unique server ID
 * @method void setQuuid(string $Quuid) Set Unique server ID
 * @method boolean getAuthorization() Obtain Whether it has been authorized
 * @method void setAuthorization(boolean $Authorization) Set Whether it has been authorized
 * @method integer getException() Obtain Abnormal status
 * @method void setException(integer $Exception) Set Abnormal status
 * @method integer getProgress() Obtain Transition progress
 * @method void setProgress(integer $Progress) Set Transition progress
 * @method string getExceptionMessage() Obtain Exception message
 * @method void setExceptionMessage(string $ExceptionMessage) Set Exception message
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
 */
class ProtectDirRelatedServer extends AbstractModel
{
    /**
     * @var string Unique ID
     */
    public $Id;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Server IP address
     */
    public $HostIp;

    /**
     * @var string Server system
     */
    public $MachineOs;

    /**
     * @var integer Number of associated directories
     */
    public $RelateDirNum;

    /**
     * @var integer Protection status
     */
    public $ProtectStatus;

    /**
     * @var integer Protection switch
     */
    public $ProtectSwitch;

    /**
     * @var integer Auto recovery switch
     */
    public $AutoRestoreSwitchStatus;

    /**
     * @var string Unique server ID
     */
    public $Quuid;

    /**
     * @var boolean Whether it has been authorized
     */
    public $Authorization;

    /**
     * @var integer Abnormal status
     */
    public $Exception;

    /**
     * @var integer Transition progress
     */
    public $Progress;

    /**
     * @var string Exception message
     */
    public $ExceptionMessage;

    /**
     * @var MachineExtraInfo Host Additional Information
     */
    public $MachineExtraInfo;

    /**
     * @param string $Id Unique ID
     * @param string $HostName Server name
     * @param string $HostIp Server IP address
     * @param string $MachineOs Server system
     * @param integer $RelateDirNum Number of associated directories
     * @param integer $ProtectStatus Protection status
     * @param integer $ProtectSwitch Protection switch
     * @param integer $AutoRestoreSwitchStatus Auto recovery switch
     * @param string $Quuid Unique server ID
     * @param boolean $Authorization Whether it has been authorized
     * @param integer $Exception Abnormal status
     * @param integer $Progress Transition progress
     * @param string $ExceptionMessage Exception message
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
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

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("RelateDirNum",$param) and $param["RelateDirNum"] !== null) {
            $this->RelateDirNum = $param["RelateDirNum"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("ProtectSwitch",$param) and $param["ProtectSwitch"] !== null) {
            $this->ProtectSwitch = $param["ProtectSwitch"];
        }

        if (array_key_exists("AutoRestoreSwitchStatus",$param) and $param["AutoRestoreSwitchStatus"] !== null) {
            $this->AutoRestoreSwitchStatus = $param["AutoRestoreSwitchStatus"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("Exception",$param) and $param["Exception"] !== null) {
            $this->Exception = $param["Exception"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ExceptionMessage",$param) and $param["ExceptionMessage"] !== null) {
            $this->ExceptionMessage = $param["ExceptionMessage"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
