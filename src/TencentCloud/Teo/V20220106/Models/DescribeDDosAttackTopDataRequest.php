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
 * DescribeDDosAttackTopData request structure.
 *
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getMetricName() Obtain Filter metric
 * @method void setMetricName(string $MetricName) Set Filter metric
 * @method integer getLimit() Obtain Number of the top data entries to query. 0: queries all data entries.
 * @method void setLimit(integer $Limit) Set Number of the top data entries to query. 0: queries all data entries.
 * @method array getZoneIds() Obtain Site set
 * @method void setZoneIds(array $ZoneIds) Set Site set
 * @method array getPolicyIds() Obtain Set of DDoS policy group IDs
 * @method void setPolicyIds(array $PolicyIds) Set Set of DDoS policy group IDs
 * @method integer getPort() Obtain Port number
 * @method void setPort(integer $Port) Set Port number
 * @method string getProtocolType() Obtain Protocol type. Valid values: tcp, udp, all
 * @method void setProtocolType(string $ProtocolType) Set Protocol type. Valid values: tcp, udp, all
 * @method string getAttackType() Obtain Attack type. Valid values: flood, icmpFlood..., all
 * @method void setAttackType(string $AttackType) Set Attack type. Valid values: flood, icmpFlood..., all
 */
class DescribeDDosAttackTopDataRequest extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Filter metric
     */
    public $MetricName;

    /**
     * @var integer Number of the top data entries to query. 0: queries all data entries.
     */
    public $Limit;

    /**
     * @var array Site set
     */
    public $ZoneIds;

    /**
     * @var array Set of DDoS policy group IDs
     */
    public $PolicyIds;

    /**
     * @var integer Port number
     */
    public $Port;

    /**
     * @var string Protocol type. Valid values: tcp, udp, all
     */
    public $ProtocolType;

    /**
     * @var string Attack type. Valid values: flood, icmpFlood..., all
     */
    public $AttackType;

    /**
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $MetricName Filter metric
     * @param integer $Limit Number of the top data entries to query. 0: queries all data entries.
     * @param array $ZoneIds Site set
     * @param array $PolicyIds Set of DDoS policy group IDs
     * @param integer $Port Port number
     * @param string $ProtocolType Protocol type. Valid values: tcp, udp, all
     * @param string $AttackType Attack type. Valid values: flood, icmpFlood..., all
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }
    }
}
