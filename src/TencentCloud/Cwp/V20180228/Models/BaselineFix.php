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
 * Baseline password fix
 *
 * @method string getItemName() Obtain Item name to repair
 * @method void setItemName(string $ItemName) Set Item name to repair
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getCreateTime() Obtain First detection time
 * @method void setCreateTime(string $CreateTime) Set First detection time
 * @method string getModifyTime() Obtain Last detection time
 * @method void setModifyTime(string $ModifyTime) Set Last detection time
 * @method string getFixTime() Obtain Fixing time
 * @method void setFixTime(string $FixTime) Set Fixing time
 * @method integer getId() Obtain Baseline detection item result ID
 * @method void setId(integer $Id) Set Baseline detection item result ID
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
 */
class BaselineFix extends AbstractModel
{
    /**
     * @var string Item name to repair
     */
    public $ItemName;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var string First detection time
     */
    public $CreateTime;

    /**
     * @var string Last detection time
     */
    public $ModifyTime;

    /**
     * @var string Fixing time
     */
    public $FixTime;

    /**
     * @var integer Baseline detection item result ID
     */
    public $Id;

    /**
     * @var MachineExtraInfo Host Additional Information
     */
    public $MachineExtraInfo;

    /**
     * @param string $ItemName Item name to repair
     * @param string $HostIp Host IP address
     * @param string $CreateTime First detection time
     * @param string $ModifyTime Last detection time
     * @param string $FixTime Fixing time
     * @param integer $Id Baseline detection item result ID
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
        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("FixTime",$param) and $param["FixTime"] !== null) {
            $this->FixTime = $param["FixTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
