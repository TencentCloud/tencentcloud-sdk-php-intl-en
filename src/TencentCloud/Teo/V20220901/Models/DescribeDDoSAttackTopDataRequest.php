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
 * DescribeDDoSAttackTopData request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time.
 * @method void setEndTime(string $EndTime) Set The end time.
 * @method string getMetricName() Obtain The statistical metric. Values:
<li>`ddos_attackFlux_protocol`: Rank protocols by the attack traffic.</li>
<li>`ddos_attackPackageNum_protocol`: Rank protocols by the number of attack packets.</li>
<li>`ddos_attackNum_attackType`: Rank attack types by the number of attacks.</li>
<li>`ddos_attackNum_sregion`: Rank attacker regions by the number of attacks.</li>
<li>`ddos_attackFlux_sip`: Rank attacker IPs by the number of attacks.</li>
<li>`ddos_attackFlux_sregion`: Rank attacker regions by the number of attacks.</li>
 * @method void setMetricName(string $MetricName) Set The statistical metric. Values:
<li>`ddos_attackFlux_protocol`: Rank protocols by the attack traffic.</li>
<li>`ddos_attackPackageNum_protocol`: Rank protocols by the number of attack packets.</li>
<li>`ddos_attackNum_attackType`: Rank attack types by the number of attacks.</li>
<li>`ddos_attackNum_sregion`: Rank attacker regions by the number of attacks.</li>
<li>`ddos_attackFlux_sip`: Rank attacker IPs by the number of attacks.</li>
<li>`ddos_attackFlux_sregion`: Rank attacker regions by the number of attacks.</li>
 * @method array getZoneIds() Obtain Site ID set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter is required.
 * @method array getPolicyIds() Obtain The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
 * @method void setPolicyIds(array $PolicyIds) Set The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
 * @method string getAttackType() Obtain The attack type. Values:
<li>`flood`: Flood;</li>
<li>`icmpFlood`: ICMP flood;</li>
<li>`all`: All attack types.</li>This field will be set to the default value `all` if not specified.
 * @method void setAttackType(string $AttackType) Set The attack type. Values:
<li>`flood`: Flood;</li>
<li>`icmpFlood`: ICMP flood;</li>
<li>`all`: All attack types.</li>This field will be set to the default value `all` if not specified.
 * @method string getProtocolType() Obtain The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
 * @method void setProtocolType(string $ProtocolType) Set The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
 * @method integer getPort() Obtain The port number.
 * @method void setPort(integer $Port) Set The port number.
 * @method integer getLimit() Obtain Queries the top n rows of data. Top 10 rows of data will be queried if this field is not specified.
 * @method void setLimit(integer $Limit) Set Queries the top n rows of data. Top 10 rows of data will be queried if this field is not specified.
 * @method string getArea() Obtain Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 * @method void setArea(string $Area) Set Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 */
class DescribeDDoSAttackTopDataRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string The end time.
     */
    public $EndTime;

    /**
     * @var string The statistical metric. Values:
<li>`ddos_attackFlux_protocol`: Rank protocols by the attack traffic.</li>
<li>`ddos_attackPackageNum_protocol`: Rank protocols by the number of attack packets.</li>
<li>`ddos_attackNum_attackType`: Rank attack types by the number of attacks.</li>
<li>`ddos_attackNum_sregion`: Rank attacker regions by the number of attacks.</li>
<li>`ddos_attackFlux_sip`: Rank attacker IPs by the number of attacks.</li>
<li>`ddos_attackFlux_sregion`: Rank attacker regions by the number of attacks.</li>
     */
    public $MetricName;

    /**
     * @var array Site ID set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var array The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
     */
    public $PolicyIds;

    /**
     * @var string The attack type. Values:
<li>`flood`: Flood;</li>
<li>`icmpFlood`: ICMP flood;</li>
<li>`all`: All attack types.</li>This field will be set to the default value `all` if not specified.
     */
    public $AttackType;

    /**
     * @var string The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
     */
    public $ProtocolType;

    /**
     * @var integer The port number.
     */
    public $Port;

    /**
     * @var integer Queries the top n rows of data. Top 10 rows of data will be queried if this field is not specified.
     */
    public $Limit;

    /**
     * @var string Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime The end time.
     * @param string $MetricName The statistical metric. Values:
<li>`ddos_attackFlux_protocol`: Rank protocols by the attack traffic.</li>
<li>`ddos_attackPackageNum_protocol`: Rank protocols by the number of attack packets.</li>
<li>`ddos_attackNum_attackType`: Rank attack types by the number of attacks.</li>
<li>`ddos_attackNum_sregion`: Rank attacker regions by the number of attacks.</li>
<li>`ddos_attackFlux_sip`: Rank attacker IPs by the number of attacks.</li>
<li>`ddos_attackFlux_sregion`: Rank attacker regions by the number of attacks.</li>
     * @param array $ZoneIds Site ID set. This parameter is required.
     * @param array $PolicyIds The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
     * @param string $AttackType The attack type. Values:
<li>`flood`: Flood;</li>
<li>`icmpFlood`: ICMP flood;</li>
<li>`all`: All attack types.</li>This field will be set to the default value `all` if not specified.
     * @param string $ProtocolType The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
     * @param integer $Port The port number.
     * @param integer $Limit Queries the top n rows of data. Top 10 rows of data will be queried if this field is not specified.
     * @param string $Area Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
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
