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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Register instance info.
 *
 * @method string getRegisterCodeId() Obtain Registration code ID.
 * @method void setRegisterCodeId(string $RegisterCodeId) Set Registration code ID.
 * @method string getInstanceId() Obtain Managed instance ID.
 * @method void setInstanceId(string $InstanceId) Set Managed instance ID.
 * @method string getInstanceName() Obtain Managed instance name.
 * @method void setInstanceName(string $InstanceName) Set Managed instance name.
 * @method string getMachineId() Obtain Machine ID.
 * @method void setMachineId(string $MachineId) Set Machine ID.
 * @method string getSystemName() Obtain System name. valid values: Linux | Windows.
 * @method void setSystemName(string $SystemName) Set System name. valid values: Linux | Windows.
 * @method string getHostName() Obtain Host name.
 * @method void setHostName(string $HostName) Set Host name.
 * @method string getLocalIp() Obtain Private network IP
 * @method void setLocalIp(string $LocalIp) Set Private network IP
 * @method string getPublicKey() Obtain Public key.
 * @method void setPublicKey(string $PublicKey) Set Public key.
 * @method string getStatus() Obtain Hosting status.
Return Online means the instance is managed, return Offline means the instance is unhosted.
 * @method void setStatus(string $Status) Set Hosting status.
Return Online means the instance is managed, return Offline means the instance is unhosted.
 * @method string getCreatedTime() Obtain Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method string getUpdatedTime() Obtain Last update time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method void setUpdatedTime(string $UpdatedTime) Set Last update time. the format is YYYY-MM-DDThh:MM:ssZ.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class RegisterInstanceInfo extends AbstractModel
{
    /**
     * @var string Registration code ID.
     */
    public $RegisterCodeId;

    /**
     * @var string Managed instance ID.
     */
    public $InstanceId;

    /**
     * @var string Managed instance name.
     */
    public $InstanceName;

    /**
     * @var string Machine ID.
     */
    public $MachineId;

    /**
     * @var string System name. valid values: Linux | Windows.
     */
    public $SystemName;

    /**
     * @var string Host name.
     */
    public $HostName;

    /**
     * @var string Private network IP
     */
    public $LocalIp;

    /**
     * @var string Public key.
     */
    public $PublicKey;

    /**
     * @var string Hosting status.
Return Online means the instance is managed, return Offline means the instance is unhosted.
     */
    public $Status;

    /**
     * @var string Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
     */
    public $CreatedTime;

    /**
     * @var string Last update time. the format is YYYY-MM-DDThh:MM:ssZ.
     */
    public $UpdatedTime;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $RegisterCodeId Registration code ID.
     * @param string $InstanceId Managed instance ID.
     * @param string $InstanceName Managed instance name.
     * @param string $MachineId Machine ID.
     * @param string $SystemName System name. valid values: Linux | Windows.
     * @param string $HostName Host name.
     * @param string $LocalIp Private network IP
     * @param string $PublicKey Public key.
     * @param string $Status Hosting status.
Return Online means the instance is managed, return Offline means the instance is unhosted.
     * @param string $CreatedTime Creation time. the format is YYYY-MM-DDThh:MM:ssZ.
     * @param string $UpdatedTime Last update time. the format is YYYY-MM-DDThh:MM:ssZ.
     * @param array $Tags Tag.
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
        if (array_key_exists("RegisterCodeId",$param) and $param["RegisterCodeId"] !== null) {
            $this->RegisterCodeId = $param["RegisterCodeId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("MachineId",$param) and $param["MachineId"] !== null) {
            $this->MachineId = $param["MachineId"];
        }

        if (array_key_exists("SystemName",$param) and $param["SystemName"] !== null) {
            $this->SystemName = $param["SystemName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("LocalIp",$param) and $param["LocalIp"] !== null) {
            $this->LocalIp = $param["LocalIp"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
