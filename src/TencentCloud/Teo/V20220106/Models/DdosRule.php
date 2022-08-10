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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS mitigation configuration
 *
 * @method DDoSStatusInfo getDdosStatusInfo() Obtain DDoS mitigation level
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDdosStatusInfo(DDoSStatusInfo $DdosStatusInfo) Set DDoS mitigation level
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DDoSGeoIp getDdosGeoIp() Obtain DDoS regional blocking
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDdosGeoIp(DDoSGeoIp $DdosGeoIp) Set DDoS regional blocking
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DdosAllowBlock getDdosAllowBlock() Obtain DDoS blocklist/allowlist
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDdosAllowBlock(DdosAllowBlock $DdosAllowBlock) Set DDoS blocklist/allowlist
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DDoSAntiPly getDdosAntiPly() Obtain Protocol blocking and null session protection
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDdosAntiPly(DDoSAntiPly $DdosAntiPly) Set Protocol blocking and null session protection
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DdosPacketFilter getDdosPacketFilter() Obtain DDoS feature filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDdosPacketFilter(DdosPacketFilter $DdosPacketFilter) Set DDoS feature filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method DdosAcls getDdosAcl() Obtain DDoS port filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDdosAcl(DdosAcls $DdosAcl) Set DDoS port filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSwitch() Obtain DDoS mitigation switch. `on`: Enable; `off`: Disable.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSwitch(string $Switch) Set DDoS mitigation switch. `on`: Enable; `off`: Disable.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getUdpShardOpen() Obtain Whether to enable UDP fragmentation. `on`: Enable; `off`: Disable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUdpShardOpen(string $UdpShardOpen) Set Whether to enable UDP fragmentation. `on`: Enable; `off`: Disable.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DdosRule extends AbstractModel
{
    /**
     * @var DDoSStatusInfo DDoS mitigation level
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DdosStatusInfo;

    /**
     * @var DDoSGeoIp DDoS regional blocking
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DdosGeoIp;

    /**
     * @var DdosAllowBlock DDoS blocklist/allowlist
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DdosAllowBlock;

    /**
     * @var DDoSAntiPly Protocol blocking and null session protection
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DdosAntiPly;

    /**
     * @var DdosPacketFilter DDoS feature filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DdosPacketFilter;

    /**
     * @var DdosAcls DDoS port filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DdosAcl;

    /**
     * @var string DDoS mitigation switch. `on`: Enable; `off`: Disable.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Switch;

    /**
     * @var string Whether to enable UDP fragmentation. `on`: Enable; `off`: Disable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UdpShardOpen;

    /**
     * @param DDoSStatusInfo $DdosStatusInfo DDoS mitigation level
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DDoSGeoIp $DdosGeoIp DDoS regional blocking
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DdosAllowBlock $DdosAllowBlock DDoS blocklist/allowlist
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DDoSAntiPly $DdosAntiPly Protocol blocking and null session protection
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DdosPacketFilter $DdosPacketFilter DDoS feature filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param DdosAcls $DdosAcl DDoS port filtering
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Switch DDoS mitigation switch. `on`: Enable; `off`: Disable.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $UdpShardOpen Whether to enable UDP fragmentation. `on`: Enable; `off`: Disable.
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
        if (array_key_exists("DdosStatusInfo",$param) and $param["DdosStatusInfo"] !== null) {
            $this->DdosStatusInfo = new DDoSStatusInfo();
            $this->DdosStatusInfo->deserialize($param["DdosStatusInfo"]);
        }

        if (array_key_exists("DdosGeoIp",$param) and $param["DdosGeoIp"] !== null) {
            $this->DdosGeoIp = new DDoSGeoIp();
            $this->DdosGeoIp->deserialize($param["DdosGeoIp"]);
        }

        if (array_key_exists("DdosAllowBlock",$param) and $param["DdosAllowBlock"] !== null) {
            $this->DdosAllowBlock = new DdosAllowBlock();
            $this->DdosAllowBlock->deserialize($param["DdosAllowBlock"]);
        }

        if (array_key_exists("DdosAntiPly",$param) and $param["DdosAntiPly"] !== null) {
            $this->DdosAntiPly = new DDoSAntiPly();
            $this->DdosAntiPly->deserialize($param["DdosAntiPly"]);
        }

        if (array_key_exists("DdosPacketFilter",$param) and $param["DdosPacketFilter"] !== null) {
            $this->DdosPacketFilter = new DdosPacketFilter();
            $this->DdosPacketFilter->deserialize($param["DdosPacketFilter"]);
        }

        if (array_key_exists("DdosAcl",$param) and $param["DdosAcl"] !== null) {
            $this->DdosAcl = new DdosAcls();
            $this->DdosAcl->deserialize($param["DdosAcl"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("UdpShardOpen",$param) and $param["UdpShardOpen"] !== null) {
            $this->UdpShardOpen = $param["UdpShardOpen"];
        }
    }
}
