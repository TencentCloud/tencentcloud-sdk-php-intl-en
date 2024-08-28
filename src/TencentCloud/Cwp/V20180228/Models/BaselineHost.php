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
 * Baseline host information
 *
 * @method string getHostId() Obtain Host ID
 * @method void setHostId(string $HostId) Set Host ID
 * @method string getHostName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostTag() Obtain Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostTag(string $HostTag) Set Host tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIp() Obtain Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIp(string $HostIp) Set Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanIp() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanIp(string $WanIp) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaselineHost extends AbstractModel
{
    /**
     * @var string Host ID
     */
    public $HostId;

    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostTag;

    /**
     * @var string Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIp;

    /**
     * @var string Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanIp;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $HostId Host ID
     * @param string $HostName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostTag Host tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIp Private IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanIp Public IP address
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostTag",$param) and $param["HostTag"] !== null) {
            $this->HostTag = $param["HostTag"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
