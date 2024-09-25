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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePeakPoints request structure.
 *
 * @method string getFromTime() Obtain Query start time
 * @method void setFromTime(string $FromTime) Set Query start time
 * @method string getToTime() Obtain Query End Time
 * @method void setToTime(string $ToTime) Set Query End Time
 * @method string getDomain() Obtain The domain to query, leave this parameter blank if querying data for all domains
 * @method void setDomain(string $Domain) Set The domain to query, leave this parameter blank if querying data for all domains
 * @method string getEdition() Obtain Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
 * @method void setEdition(string $Edition) Set Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
 * @method string getInstanceID() Obtain WAF instance ID. No filter will be carried out if it is not input.
 * @method void setInstanceID(string $InstanceID) Set WAF instance ID. No filter will be carried out if it is not input.
 * @method string getMetricName() Obtain Twelve available values:
access: peak QPS trend chart
botAccess: peak bot QPS trend chart
down: downstream peak bandwidth trend chart
up: upstream peak bandwidth trend chart
attack: trend chart of total web attacks
cc: trend chart of total CC attacks
bw: trend chart of total attacks from blocklisted IP addresses
tamper: trend chart of total tampering attacks
leak: total leakage trend chart
acl: trend chart of total access control attacks
http_status: status code trend chart
wx_access: trend chart of peak WeChat mini program QPS
 * @method void setMetricName(string $MetricName) Set Twelve available values:
access: peak QPS trend chart
botAccess: peak bot QPS trend chart
down: downstream peak bandwidth trend chart
up: upstream peak bandwidth trend chart
attack: trend chart of total web attacks
cc: trend chart of total CC attacks
bw: trend chart of total attacks from blocklisted IP addresses
tamper: trend chart of total tampering attacks
leak: total leakage trend chart
acl: trend chart of total access control attacks
http_status: status code trend chart
wx_access: trend chart of peak WeChat mini program QPS
 */
class DescribePeakPointsRequest extends AbstractModel
{
    /**
     * @var string Query start time
     */
    public $FromTime;

    /**
     * @var string Query End Time
     */
    public $ToTime;

    /**
     * @var string The domain to query, leave this parameter blank if querying data for all domains
     */
    public $Domain;

    /**
     * @var string Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
     */
    public $Edition;

    /**
     * @var string WAF instance ID. No filter will be carried out if it is not input.
     */
    public $InstanceID;

    /**
     * @var string Twelve available values:
access: peak QPS trend chart
botAccess: peak bot QPS trend chart
down: downstream peak bandwidth trend chart
up: upstream peak bandwidth trend chart
attack: trend chart of total web attacks
cc: trend chart of total CC attacks
bw: trend chart of total attacks from blocklisted IP addresses
tamper: trend chart of total tampering attacks
leak: total leakage trend chart
acl: trend chart of total access control attacks
http_status: status code trend chart
wx_access: trend chart of peak WeChat mini program QPS
     */
    public $MetricName;

    /**
     * @param string $FromTime Query start time
     * @param string $ToTime Query End Time
     * @param string $Domain The domain to query, leave this parameter blank if querying data for all domains
     * @param string $Edition Only two values are valid: sparta-waf, clb-waf. No filtering if not input.
     * @param string $InstanceID WAF instance ID. No filter will be carried out if it is not input.
     * @param string $MetricName Twelve available values:
access: peak QPS trend chart
botAccess: peak bot QPS trend chart
down: downstream peak bandwidth trend chart
up: upstream peak bandwidth trend chart
attack: trend chart of total web attacks
cc: trend chart of total CC attacks
bw: trend chart of total attacks from blocklisted IP addresses
tamper: trend chart of total tampering attacks
leak: total leakage trend chart
acl: trend chart of total access control attacks
http_status: status code trend chart
wx_access: trend chart of peak WeChat mini program QPS
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
        if (array_key_exists("FromTime",$param) and $param["FromTime"] !== null) {
            $this->FromTime = $param["FromTime"];
        }

        if (array_key_exists("ToTime",$param) and $param["ToTime"] !== null) {
            $this->ToTime = $param["ToTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
