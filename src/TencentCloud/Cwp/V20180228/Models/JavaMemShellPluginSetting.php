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
 * Java Memory Trojan Plugin Configuration
 *
 * @method string getQuuid() Obtain Container QUUID
 * @method void setQuuid(string $Quuid) Set Container QUUID
 * @method string getAlias() Obtain Server name
 * @method void setAlias(string $Alias) Set Server name
 * @method string getHostIp() Obtain Server IP address
 * @method void setHostIp(string $HostIp) Set Server IP address
 * @method integer getJavaShellStatus() Obtain Javashell Plugin Switch. 0: Off; 1: On
 * @method void setJavaShellStatus(integer $JavaShellStatus) Set Javashell Plugin Switch. 0: Off; 1: On
 * @method integer getException() Obtain Plugin Exception Status. 0: Normal; 1: Abnormal
 * @method void setException(integer $Exception) Set Plugin Exception Status. 0: Normal; 1: Abnormal
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method string getUuid() Obtain Server UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Server UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class JavaMemShellPluginSetting extends AbstractModel
{
    /**
     * @var string Container QUUID
     */
    public $Quuid;

    /**
     * @var string Server name
     */
    public $Alias;

    /**
     * @var string Server IP address
     */
    public $HostIp;

    /**
     * @var integer Javashell Plugin Switch. 0: Off; 1: On
     */
    public $JavaShellStatus;

    /**
     * @var integer Plugin Exception Status. 0: Normal; 1: Abnormal
     */
    public $Exception;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var string Server UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid Container QUUID
     * @param string $Alias Server name
     * @param string $HostIp Server IP address
     * @param integer $JavaShellStatus Javashell Plugin Switch. 0: Off; 1: On
     * @param integer $Exception Plugin Exception Status. 0: Normal; 1: Abnormal
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param string $Uuid Server UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("JavaShellStatus",$param) and $param["JavaShellStatus"] !== null) {
            $this->JavaShellStatus = $param["JavaShellStatus"];
        }

        if (array_key_exists("Exception",$param) and $param["Exception"] !== null) {
            $this->Exception = $param["Exception"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
