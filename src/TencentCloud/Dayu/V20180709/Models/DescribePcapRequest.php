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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePcap request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method string getStartTime() Obtain Attack event start time in the format of "2018-08-28 07:00:00"
 * @method void setStartTime(string $StartTime) Set Attack event start time in the format of "2018-08-28 07:00:00"
 * @method string getEndTime() Obtain Attack event end time in the format of "2018-08-28 07:02:00"
 * @method void setEndTime(string $EndTime) Set Attack event end time in the format of "2018-08-28 07:02:00"
 * @method string getIp() Obtain Resource IP, which is required only if `Business` is `net`;
 * @method void setIp(string $Ip) Set Resource IP, which is required only if `Business` is `net`;
 */
class DescribePcapRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var string Attack event start time in the format of "2018-08-28 07:00:00"
     */
    public $StartTime;

    /**
     * @var string Attack event end time in the format of "2018-08-28 07:02:00"
     */
    public $EndTime;

    /**
     * @var string Resource IP, which is required only if `Business` is `net`;
     */
    public $Ip;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `bgp`: Anti-DDoS Pro (single IP); `bgp-multip`: Anti-DDoS Pro (multi-IP), `net`: Anti-DDoS Ultimate
     * @param string $Id Anti-DDoS instance ID
     * @param string $StartTime Attack event start time in the format of "2018-08-28 07:00:00"
     * @param string $EndTime Attack event end time in the format of "2018-08-28 07:02:00"
     * @param string $Ip Resource IP, which is required only if `Business` is `net`;
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
