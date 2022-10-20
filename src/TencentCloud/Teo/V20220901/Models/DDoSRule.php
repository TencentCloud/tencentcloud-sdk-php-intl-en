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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS mitigation configuration
 *
 * @method DDoSStatusInfo getDDoSStatusInfo() Obtain The DDoS mitigation level. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSStatusInfo(DDoSStatusInfo $DDoSStatusInfo) Set The DDoS mitigation level. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DDoSGeoIp getDDoSGeoIp() Obtain The regional blocking settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSGeoIp(DDoSGeoIp $DDoSGeoIp) Set The regional blocking settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DDoSAllowBlock getDDoSAllowBlock() Obtain The IP blocklist/allowlist. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSAllowBlock(DDoSAllowBlock $DDoSAllowBlock) Set The IP blocklist/allowlist. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DDoSAntiPly getDDoSAntiPly() Obtain The protocol and connection protection settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSAntiPly(DDoSAntiPly $DDoSAntiPly) Set The protocol and connection protection settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DDoSPacketFilter getDDoSPacketFilter() Obtain The feature filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSPacketFilter(DDoSPacketFilter $DDoSPacketFilter) Set The feature filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DDoSAcl getDDoSAcl() Obtain The port filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSAcl(DDoSAcl $DDoSAcl) Set The port filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSwitch() Obtain Whether to enable DDoS mitigation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If it is null, the setting that was last configured will be used.
 * @method void setSwitch(string $Switch) Set Whether to enable DDoS mitigation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If it is null, the setting that was last configured will be used.
 * @method string getUdpShardOpen() Obtain Whether to enable UDP fragmentation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>It is required only when used as an output parameter.
 * @method void setUdpShardOpen(string $UdpShardOpen) Set Whether to enable UDP fragmentation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>It is required only when used as an output parameter.
 * @method DDoSSpeedLimit getDDoSSpeedLimit() Obtain The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSSpeedLimit(DDoSSpeedLimit $DDoSSpeedLimit) Set The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DDoSRule extends AbstractModel
{
    /**
     * @var DDoSStatusInfo The DDoS mitigation level. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSStatusInfo;

    /**
     * @var DDoSGeoIp The regional blocking settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSGeoIp;

    /**
     * @var DDoSAllowBlock The IP blocklist/allowlist. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSAllowBlock;

    /**
     * @var DDoSAntiPly The protocol and connection protection settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSAntiPly;

    /**
     * @var DDoSPacketFilter The feature filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSPacketFilter;

    /**
     * @var DDoSAcl The port filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSAcl;

    /**
     * @var string Whether to enable DDoS mitigation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If it is null, the setting that was last configured will be used.
     */
    public $Switch;

    /**
     * @var string Whether to enable UDP fragmentation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>It is required only when used as an output parameter.
     */
    public $UdpShardOpen;

    /**
     * @var DDoSSpeedLimit The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSSpeedLimit;

    /**
     * @param DDoSStatusInfo $DDoSStatusInfo The DDoS mitigation level. If it is null, the setting that was last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DDoSGeoIp $DDoSGeoIp The regional blocking settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DDoSAllowBlock $DDoSAllowBlock The IP blocklist/allowlist. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DDoSAntiPly $DDoSAntiPly The protocol and connection protection settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DDoSPacketFilter $DDoSPacketFilter The feature filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DDoSAcl $DDoSAcl The port filtering settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Switch Whether to enable DDoS mitigation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>If it is null, the setting that was last configured will be used.
     * @param string $UdpShardOpen Whether to enable UDP fragmentation. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>It is required only when used as an output parameter.
     * @param DDoSSpeedLimit $DDoSSpeedLimit The settings of the rate limiting rule. If it is null, the settings that were last configured will be used.
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
        if (array_key_exists("DDoSStatusInfo",$param) and $param["DDoSStatusInfo"] !== null) {
            $this->DDoSStatusInfo = new DDoSStatusInfo();
            $this->DDoSStatusInfo->deserialize($param["DDoSStatusInfo"]);
        }

        if (array_key_exists("DDoSGeoIp",$param) and $param["DDoSGeoIp"] !== null) {
            $this->DDoSGeoIp = new DDoSGeoIp();
            $this->DDoSGeoIp->deserialize($param["DDoSGeoIp"]);
        }

        if (array_key_exists("DDoSAllowBlock",$param) and $param["DDoSAllowBlock"] !== null) {
            $this->DDoSAllowBlock = new DDoSAllowBlock();
            $this->DDoSAllowBlock->deserialize($param["DDoSAllowBlock"]);
        }

        if (array_key_exists("DDoSAntiPly",$param) and $param["DDoSAntiPly"] !== null) {
            $this->DDoSAntiPly = new DDoSAntiPly();
            $this->DDoSAntiPly->deserialize($param["DDoSAntiPly"]);
        }

        if (array_key_exists("DDoSPacketFilter",$param) and $param["DDoSPacketFilter"] !== null) {
            $this->DDoSPacketFilter = new DDoSPacketFilter();
            $this->DDoSPacketFilter->deserialize($param["DDoSPacketFilter"]);
        }

        if (array_key_exists("DDoSAcl",$param) and $param["DDoSAcl"] !== null) {
            $this->DDoSAcl = new DDoSAcl();
            $this->DDoSAcl->deserialize($param["DDoSAcl"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("UdpShardOpen",$param) and $param["UdpShardOpen"] !== null) {
            $this->UdpShardOpen = $param["UdpShardOpen"];
        }

        if (array_key_exists("DDoSSpeedLimit",$param) and $param["DDoSSpeedLimit"] !== null) {
            $this->DDoSSpeedLimit = new DDoSSpeedLimit();
            $this->DDoSSpeedLimit->deserialize($param["DDoSSpeedLimit"]);
        }
    }
}
