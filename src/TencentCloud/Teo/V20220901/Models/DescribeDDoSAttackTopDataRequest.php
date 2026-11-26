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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSAttackTopData request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
 * @method string getMetricName() Obtain Queried statistical metric. Valid values:
<li>ddos_attackFlux_protocol: ranking of attack traffic by protocol;</li>
<li>ddos_attackPackageNum_protocol: ranking by attack packet volume of each protocol;</li>
<li>ddos_attackNum_attackType: Ranking by number of attacks for each attack type;</li>
<li>ddos_attackNum_sregion: ranking by number of attacks by attack source region;</li>
<li>ddos_attackFlux_sip: ranking by number of attacks from attack source IPs;</li>
<li>ddos_attackFlux_sregion: ranking of attackNum by attack source region.</li>
 * @method void setMetricName(string $MetricName) Set Queried statistical metric. Valid values:
<li>ddos_attackFlux_protocol: ranking of attack traffic by protocol;</li>
<li>ddos_attackPackageNum_protocol: ranking by attack packet volume of each protocol;</li>
<li>ddos_attackNum_attackType: Ranking by number of attacks for each attack type;</li>
<li>ddos_attackNum_sregion: ranking by number of attacks by attack source region;</li>
<li>ddos_attackFlux_sip: ranking by number of attacks from attack source IPs;</li>
<li>ddos_attackFlux_sregion: ranking of attackNum by attack source region.</li>
 * @method array getZoneIds() Obtain Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
 * @method array getPolicyIds() Obtain Set of DDoS policy group IDs. If not specified, all policy IDs are selected by default.
 * @method void setPolicyIds(array $PolicyIds) Set Set of DDoS policy group IDs. If not specified, all policy IDs are selected by default.
 * @method string getAttackType() Obtain Attack type. Valid values:
<li>flood: flood attack;</li>
<li>icmpFlood: ICMP flood attack;</li>
<li>all: all attack types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all attack types.
 * @method void setAttackType(string $AttackType) Set Attack type. Valid values:
<li>flood: flood attack;</li>
<li>icmpFlood: ICMP flood attack;</li>
<li>all: all attack types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all attack types.
 * @method string getProtocolType() Obtain Protocol type. Valid values:
<li>tcp: TCP protocol;</li>
<li>udp: UDP protocol;</li>
<li>all: all protocol types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all protocols.
 * @method void setProtocolType(string $ProtocolType) Set Protocol type. Valid values:
<li>tcp: TCP protocol;</li>
<li>udp: UDP protocol;</li>
<li>all: all protocol types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all protocols.
 * @method integer getPort() Obtain Port number.
 * @method void setPort(integer $Port) Set Port number.
 * @method integer getLimit() Obtain Indicates the top N data to be queried. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method void setLimit(integer $Limit) Set Indicates the top N data to be queried. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
 * @method string getArea() Obtain Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data.</li>If not specified, the region will be smart selected according to the user's location.
 * @method void setArea(string $Area) Set Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data.</li>If not specified, the region will be smart selected according to the user's location.
 */
class DescribeDDoSAttackTopDataRequest extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     */
    public $EndTime;

    /**
     * @var string Queried statistical metric. Valid values:
<li>ddos_attackFlux_protocol: ranking of attack traffic by protocol;</li>
<li>ddos_attackPackageNum_protocol: ranking by attack packet volume of each protocol;</li>
<li>ddos_attackNum_attackType: Ranking by number of attacks for each attack type;</li>
<li>ddos_attackNum_sregion: ranking by number of attacks by attack source region;</li>
<li>ddos_attackFlux_sip: ranking by number of attacks from attack source IPs;</li>
<li>ddos_attackFlux_sregion: ranking of attackNum by attack source region.</li>
     */
    public $MetricName;

    /**
     * @var array Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
     */
    public $ZoneIds;

    /**
     * @var array Set of DDoS policy group IDs. If not specified, all policy IDs are selected by default.
     */
    public $PolicyIds;

    /**
     * @var string Attack type. Valid values:
<li>flood: flood attack;</li>
<li>icmpFlood: ICMP flood attack;</li>
<li>all: all attack types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all attack types.
     */
    public $AttackType;

    /**
     * @var string Protocol type. Valid values:
<li>tcp: TCP protocol;</li>
<li>udp: UDP protocol;</li>
<li>all: all protocol types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all protocols.
     */
    public $ProtocolType;

    /**
     * @var integer Port number.
     */
    public $Port;

    /**
     * @var integer Indicates the top N data to be queried. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     */
    public $Limit;

    /**
     * @var string Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data.</li>If not specified, the region will be smart selected according to the user's location.
     */
    public $Area;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be less than or equal to 31 days.
     * @param string $MetricName Queried statistical metric. Valid values:
<li>ddos_attackFlux_protocol: ranking of attack traffic by protocol;</li>
<li>ddos_attackPackageNum_protocol: ranking by attack packet volume of each protocol;</li>
<li>ddos_attackNum_attackType: Ranking by number of attacks for each attack type;</li>
<li>ddos_attackNum_sregion: ranking by number of attacks by attack source region;</li>
<li>ddos_attackFlux_sip: ranking by number of attacks from attack source IPs;</li>
<li>ddos_attackFlux_sregion: ranking of attackNum by attack source region.</li>
     * @param array $ZoneIds Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). Import up to 100 site IDs. To query data of all sites under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
     * @param array $PolicyIds Set of DDoS policy group IDs. If not specified, all policy IDs are selected by default.
     * @param string $AttackType Attack type. Valid values:
<li>flood: flood attack;</li>
<li>icmpFlood: ICMP flood attack;</li>
<li>all: all attack types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all attack types.
     * @param string $ProtocolType Protocol type. Valid values:
<li>tcp: TCP protocol;</li>
<li>udp: UDP protocol;</li>
<li>all: all protocol types.</li>If this parameter is not input, the default value `all` is used, indicating a query for all protocols.
     * @param integer $Port Port number.
     * @param integer $Limit Indicates the top N data to be queried. If this parameter is not input, the default value is 10, indicating querying the top 10 data.
     * @param string $Area Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data.</li>If not specified, the region will be smart selected according to the user's location.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
