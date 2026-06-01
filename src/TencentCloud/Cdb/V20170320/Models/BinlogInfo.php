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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binlog information
 *
 * @method string getName() Obtain <p>binlog backup file name</p>
 * @method void setName(string $Name) Set <p>binlog backup file name</p>
 * @method integer getSize() Obtain <p>Backup file size, unit: Byte</p>
 * @method void setSize(integer $Size) Set <p>Backup file size, unit: Byte</p>
 * @method string getDate() Obtain <p>File storage time. Time format: 2016-03-17 02:10:37</p>
 * @method void setDate(string $Date) Set <p>File storage time. Time format: 2016-03-17 02:10:37</p>
 * @method string getIntranetUrl() Obtain <p>Download link<br>Description: This download link is the same as the download address of the parameter InternetUrl.</p>
 * @method void setIntranetUrl(string $IntranetUrl) Set <p>Download link<br>Description: This download link is the same as the download address of the parameter InternetUrl.</p>
 * @method string getInternetUrl() Obtain <p>Download address<br>Description: This download address is the same as the IntranetUrl download address.</p>
 * @method void setInternetUrl(string $InternetUrl) Set <p>Download address<br>Description: This download address is the same as the IntranetUrl download address.</p>
 * @method string getType() Obtain <p>Log specific type. Possible values: binlog - binary log</p>
 * @method void setType(string $Type) Set <p>Log specific type. Possible values: binlog - binary log</p>
 * @method string getBinlogStartTime() Obtain <p>binlog file start time</p>
 * @method void setBinlogStartTime(string $BinlogStartTime) Set <p>binlog file start time</p>
 * @method string getBinlogFinishTime() Obtain <p>binlog file expiration time</p>
 * @method void setBinlogFinishTime(string $BinlogFinishTime) Set <p>binlog file expiration time</p>
 * @method string getRegion() Obtain <p>Region where local binlog files are located</p>
 * @method void setRegion(string $Region) Set <p>Region where local binlog files are located</p>
 * @method string getStatus() Obtain <p>Backup task status. Possible values: "SUCCESS": backup successful, "FAILED": backup FAILED, "RUNNING": backup in progress.</p>
 * @method void setStatus(string $Status) Set <p>Backup task status. Possible values: "SUCCESS": backup successful, "FAILED": backup FAILED, "RUNNING": backup in progress.</p>
 * @method array getRemoteInfo() Obtain <p>Detailed information of binlog offsite backup</p>
 * @method void setRemoteInfo(array $RemoteInfo) Set <p>Detailed information of binlog offsite backup</p>
 * @method integer getCosStorageType() Obtain <p>Storage method: 0 - regular storage, 1 - archive storage, 2 - standard storage, defaults to 0.</p>
 * @method void setCosStorageType(integer $CosStorageType) Set <p>Storage method: 0 - regular storage, 1 - archive storage, 2 - standard storage, defaults to 0.</p>
 * @method string getInstanceId() Obtain <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
 * @method integer getProgress() Obtain <p>Backup completion progress</p>
 * @method void setProgress(integer $Progress) Set <p>Backup completion progress</p>
 */
class BinlogInfo extends AbstractModel
{
    /**
     * @var string <p>binlog backup file name</p>
     */
    public $Name;

    /**
     * @var integer <p>Backup file size, unit: Byte</p>
     */
    public $Size;

    /**
     * @var string <p>File storage time. Time format: 2016-03-17 02:10:37</p>
     */
    public $Date;

    /**
     * @var string <p>Download link<br>Description: This download link is the same as the download address of the parameter InternetUrl.</p>
     */
    public $IntranetUrl;

    /**
     * @var string <p>Download address<br>Description: This download address is the same as the IntranetUrl download address.</p>
     */
    public $InternetUrl;

    /**
     * @var string <p>Log specific type. Possible values: binlog - binary log</p>
     */
    public $Type;

    /**
     * @var string <p>binlog file start time</p>
     */
    public $BinlogStartTime;

    /**
     * @var string <p>binlog file expiration time</p>
     */
    public $BinlogFinishTime;

    /**
     * @var string <p>Region where local binlog files are located</p>
     */
    public $Region;

    /**
     * @var string <p>Backup task status. Possible values: "SUCCESS": backup successful, "FAILED": backup FAILED, "RUNNING": backup in progress.</p>
     */
    public $Status;

    /**
     * @var array <p>Detailed information of binlog offsite backup</p>
     */
    public $RemoteInfo;

    /**
     * @var integer <p>Storage method: 0 - regular storage, 1 - archive storage, 2 - standard storage, defaults to 0.</p>
     */
    public $CosStorageType;

    /**
     * @var string <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
     * @deprecated
     */
    public $InstanceId;

    /**
     * @var integer <p>Backup completion progress</p>
     */
    public $Progress;

    /**
     * @param string $Name <p>binlog backup file name</p>
     * @param integer $Size <p>Backup file size, unit: Byte</p>
     * @param string $Date <p>File storage time. Time format: 2016-03-17 02:10:37</p>
     * @param string $IntranetUrl <p>Download link<br>Description: This download link is the same as the download address of the parameter InternetUrl.</p>
     * @param string $InternetUrl <p>Download address<br>Description: This download address is the same as the IntranetUrl download address.</p>
     * @param string $Type <p>Log specific type. Possible values: binlog - binary log</p>
     * @param string $BinlogStartTime <p>binlog file start time</p>
     * @param string $BinlogFinishTime <p>binlog file expiration time</p>
     * @param string $Region <p>Region where local binlog files are located</p>
     * @param string $Status <p>Backup task status. Possible values: "SUCCESS": backup successful, "FAILED": backup FAILED, "RUNNING": backup in progress.</p>
     * @param array $RemoteInfo <p>Detailed information of binlog offsite backup</p>
     * @param integer $CosStorageType <p>Storage method: 0 - regular storage, 1 - archive storage, 2 - standard storage, defaults to 0.</p>
     * @param string $InstanceId <p>Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.</p>
     * @param integer $Progress <p>Backup completion progress</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("IntranetUrl",$param) and $param["IntranetUrl"] !== null) {
            $this->IntranetUrl = $param["IntranetUrl"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BinlogStartTime",$param) and $param["BinlogStartTime"] !== null) {
            $this->BinlogStartTime = $param["BinlogStartTime"];
        }

        if (array_key_exists("BinlogFinishTime",$param) and $param["BinlogFinishTime"] !== null) {
            $this->BinlogFinishTime = $param["BinlogFinishTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RemoteInfo",$param) and $param["RemoteInfo"] !== null) {
            $this->RemoteInfo = [];
            foreach ($param["RemoteInfo"] as $key => $value){
                $obj = new RemoteBackupInfo();
                $obj->deserialize($value);
                array_push($this->RemoteInfo, $obj);
            }
        }

        if (array_key_exists("CosStorageType",$param) and $param["CosStorageType"] !== null) {
            $this->CosStorageType = $param["CosStorageType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
