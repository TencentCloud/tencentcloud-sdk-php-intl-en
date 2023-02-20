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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBizHttpStatus request structure.
 *
 * @method string getStatistics() Obtain Statistical mode. Value: `sum`.
 * @method void setStatistics(string $Statistics) Set Statistical mode. Value: `sum`.
 * @method string getBusiness() Obtain Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
 * @method integer getPeriod() Obtain Statistical period in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, and `86400`.
 * @method void setPeriod(integer $Period) Set Statistical period in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, and `86400`.
 * @method string getStartTime() Obtain Statistics start time, such as `2020-02-01 12:04:12`
 * @method void setStartTime(string $StartTime) Set Statistics start time, such as `2020-02-01 12:04:12`
 * @method string getEndTime() Obtain Statistics end time, such as `2020-02-03 18:03:23`
 * @method void setEndTime(string $EndTime) Set Statistics end time, such as `2020-02-03 18:03:23`
 * @method string getId() Obtain The resource ID.
 * @method void setId(string $Id) Set The resource ID.
 * @method string getDomain() Obtain Specific domain name query
 * @method void setDomain(string $Domain) Set Specific domain name query
 * @method array getProtoInfo() Obtain Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
 * @method void setProtoInfo(array $ProtoInfo) Set Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
 */
class DescribeBizHttpStatusRequest extends AbstractModel
{
    /**
     * @var string Statistical mode. Value: `sum`.
     */
    public $Statistics;

    /**
     * @var string Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     */
    public $Business;

    /**
     * @var integer Statistical period in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, and `86400`.
     */
    public $Period;

    /**
     * @var string Statistics start time, such as `2020-02-01 12:04:12`
     */
    public $StartTime;

    /**
     * @var string Statistics end time, such as `2020-02-03 18:03:23`
     */
    public $EndTime;

    /**
     * @var string The resource ID.
     */
    public $Id;

    /**
     * @var string Specific domain name query
     */
    public $Domain;

    /**
     * @var array Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
     */
    public $ProtoInfo;

    /**
     * @param string $Statistics Statistical mode. Value: `sum`.
     * @param string $Business Anti-DDoS service type (`bgpip`: Anti-DDoS Advanced)
     * @param integer $Period Statistical period in seconds. Valid values: `60`, `300`, `1800`, `3600`, `21600`, and `86400`.
     * @param string $StartTime Statistics start time, such as `2020-02-01 12:04:12`
     * @param string $EndTime Statistics end time, such as `2020-02-03 18:03:23`
     * @param string $Id The resource ID.
     * @param string $Domain Specific domain name query
     * @param array $ProtoInfo Protocol and port list, which is valid when the metric is `connum`, `new_conn` or `inactive_conn`. Valid protocols: `TCP`, `UDP`, `HTTP`, `HTTPS`
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
        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = $param["Statistics"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ProtoInfo",$param) and $param["ProtoInfo"] !== null) {
            $this->ProtoInfo = [];
            foreach ($param["ProtoInfo"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtoInfo, $obj);
            }
        }
    }
}
