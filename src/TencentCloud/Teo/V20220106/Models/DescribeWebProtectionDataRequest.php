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
 * DescribeWebProtectionData request structure.
 *
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method array getMetricNames() Obtain List of statistical metrics
 * @method void setMetricNames(array $MetricNames) Set List of statistical metrics
 * @method array getZoneIds() Obtain List of site IDs
 * @method void setZoneIds(array $ZoneIds) Set List of site IDs
 * @method array getDomains() Obtain List of subdomain names
 * @method void setDomains(array $Domains) Set List of subdomain names
 * @method string getProtocolType() Obtain Protocol type
 * @method void setProtocolType(string $ProtocolType) Set Protocol type
 * @method string getAttackType() Obtain "webshell" : WebShell detection prevention
"oa" : Common OA vulnerability prevention
"xss" : XSS attack prevention
"xxe" : XXE attack prevention
"webscan" : Scanner attack vulnerability prevention
"cms" : Common CMS vulnerability prevention
"upload" : Malicious file upload attack prevention
"sql" : SQL injection attack prevention
"cmd_inject": Command/Code injection attack prevention
"osc" : Open-source component vulnerability prevention
"file_read" : Arbitrary file read prevention
"ldap" : LDAP injection attack prevention
"other" : Other vulnerability prevention

"all":"All"
 * @method void setAttackType(string $AttackType) Set "webshell" : WebShell detection prevention
"oa" : Common OA vulnerability prevention
"xss" : XSS attack prevention
"xxe" : XXE attack prevention
"webscan" : Scanner attack vulnerability prevention
"cms" : Common CMS vulnerability prevention
"upload" : Malicious file upload attack prevention
"sql" : SQL injection attack prevention
"cmd_inject": Command/Code injection attack prevention
"osc" : Open-source component vulnerability prevention
"file_read" : Arbitrary file read prevention
"ldap" : LDAP injection attack prevention
"other" : Other vulnerability prevention

"all":"All"
 * @method string getInterval() Obtain Query time granularity. Valid values: {min,5min,hour,day}
 * @method void setInterval(string $Interval) Set Query time granularity. Valid values: {min,5min,hour,day}
 */
class DescribeWebProtectionDataRequest extends AbstractModel
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
     * @var array List of statistical metrics
     */
    public $MetricNames;

    /**
     * @var array List of site IDs
     */
    public $ZoneIds;

    /**
     * @var array List of subdomain names
     */
    public $Domains;

    /**
     * @var string Protocol type
     */
    public $ProtocolType;

    /**
     * @var string "webshell" : WebShell detection prevention
"oa" : Common OA vulnerability prevention
"xss" : XSS attack prevention
"xxe" : XXE attack prevention
"webscan" : Scanner attack vulnerability prevention
"cms" : Common CMS vulnerability prevention
"upload" : Malicious file upload attack prevention
"sql" : SQL injection attack prevention
"cmd_inject": Command/Code injection attack prevention
"osc" : Open-source component vulnerability prevention
"file_read" : Arbitrary file read prevention
"ldap" : LDAP injection attack prevention
"other" : Other vulnerability prevention

"all":"All"
     */
    public $AttackType;

    /**
     * @var string Query time granularity. Valid values: {min,5min,hour,day}
     */
    public $Interval;

    /**
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param array $MetricNames List of statistical metrics
     * @param array $ZoneIds List of site IDs
     * @param array $Domains List of subdomain names
     * @param string $ProtocolType Protocol type
     * @param string $AttackType "webshell" : WebShell detection prevention
"oa" : Common OA vulnerability prevention
"xss" : XSS attack prevention
"xxe" : XXE attack prevention
"webscan" : Scanner attack vulnerability prevention
"cms" : Common CMS vulnerability prevention
"upload" : Malicious file upload attack prevention
"sql" : SQL injection attack prevention
"cmd_inject": Command/Code injection attack prevention
"osc" : Open-source component vulnerability prevention
"file_read" : Arbitrary file read prevention
"ldap" : LDAP injection attack prevention
"other" : Other vulnerability prevention

"all":"All"
     * @param string $Interval Query time granularity. Valid values: {min,5min,hour,day}
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

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
