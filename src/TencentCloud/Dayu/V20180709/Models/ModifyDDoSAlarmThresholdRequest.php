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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSAlarmThreshold request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type (`shield`: Chess Shield, `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`shield`: Chess Shield, `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate)
 * @method string getRsId() Obtain Anti-DDoS instance ID
 * @method void setRsId(string $RsId) Set Anti-DDoS instance ID
 * @method integer getAlarmType() Obtain Alarm threshold type. 0: not set, 1: inbound traffic, 2: cleansed traffic
 * @method void setAlarmType(integer $AlarmType) Set Alarm threshold type. 0: not set, 1: inbound traffic, 2: cleansed traffic
 * @method integer getAlarmThreshold() Obtain Alarm threshold, which should be greater than 0 (currently scheduled value)
 * @method void setAlarmThreshold(integer $AlarmThreshold) Set Alarm threshold, which should be greater than 0 (currently scheduled value)
 * @method array getIpList() Obtain List of IPs associated with resource. If no Anti-DDoS Pro instance is bound, pass in an empty array. For Anti-DDoS Ultimate, pass in multiple IPs
 * @method void setIpList(array $IpList) Set List of IPs associated with resource. If no Anti-DDoS Pro instance is bound, pass in an empty array. For Anti-DDoS Ultimate, pass in multiple IPs
 */
class ModifyDDoSAlarmThresholdRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type (`shield`: Chess Shield, `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate)
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $RsId;

    /**
     * @var integer Alarm threshold type. 0: not set, 1: inbound traffic, 2: cleansed traffic
     */
    public $AlarmType;

    /**
     * @var integer Alarm threshold, which should be greater than 0 (currently scheduled value)
     */
    public $AlarmThreshold;

    /**
     * @var array List of IPs associated with resource. If no Anti-DDoS Pro instance is bound, pass in an empty array. For Anti-DDoS Ultimate, pass in multiple IPs
     */
    public $IpList;

    /**
     * @param string $Business Anti-DDoS service type (`shield`: Chess Shield, `bgpip`: Anti-DDoS Advanced, `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate)
     * @param string $RsId Anti-DDoS instance ID
     * @param integer $AlarmType Alarm threshold type. 0: not set, 1: inbound traffic, 2: cleansed traffic
     * @param integer $AlarmThreshold Alarm threshold, which should be greater than 0 (currently scheduled value)
     * @param array $IpList List of IPs associated with resource. If no Anti-DDoS Pro instance is bound, pass in an empty array. For Anti-DDoS Ultimate, pass in multiple IPs
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("RsId",$param) and $param["RsId"] !== null) {
            $this->RsId = $param["RsId"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmThreshold",$param) and $param["AlarmThreshold"] !== null) {
            $this->AlarmThreshold = $param["AlarmThreshold"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
