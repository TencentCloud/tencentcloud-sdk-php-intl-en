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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwLogs request structure.
 *
 * @method string getLogType() Obtain Log type. Required for the initial query; cannot be passed when using NextToken for continuation. cfw_netflow_border=Internet boundary traffic, cfw_netflow_vpc=VPC east-west traffic, cfw_netflow_nat=NAT firewall traffic, cfw_netflow_nta=NDR/NTA traffic, cfw_netflow_dns=DNS firewall log, cfw_rule_threatinfo=Intrusion defense/Threat Intelligence Alarm, cfw_rule_acl=Internet Boundary Access Control log, cfw_rule_vpc_acl=VPC access control log, cfw_rule_nat_acl=NAT access control log, cfw_ndr_subject_risk=NDR topic risk, cfw_ndr_dataleak_entry=NDR sensitive data leak, cfw_ndr_ai_audit=NDR AI application identification and Large Model Invocation audit, cfw_feature_collect=Statistical feature and baseline anomaly, cfw_behavior_collect=Beacon/DNS/port/cert/VPC mutual access behavior, operate_log_all=Operation audit log.
 * @method void setLogType(string $LogType) Set Log type. Required for the initial query; cannot be passed when using NextToken for continuation. cfw_netflow_border=Internet boundary traffic, cfw_netflow_vpc=VPC east-west traffic, cfw_netflow_nat=NAT firewall traffic, cfw_netflow_nta=NDR/NTA traffic, cfw_netflow_dns=DNS firewall log, cfw_rule_threatinfo=Intrusion defense/Threat Intelligence Alarm, cfw_rule_acl=Internet Boundary Access Control log, cfw_rule_vpc_acl=VPC access control log, cfw_rule_nat_acl=NAT access control log, cfw_ndr_subject_risk=NDR topic risk, cfw_ndr_dataleak_entry=NDR sensitive data leak, cfw_ndr_ai_audit=NDR AI application identification and Large Model Invocation audit, cfw_feature_collect=Statistical feature and baseline anomaly, cfw_behavior_collect=Beacon/DNS/port/cert/VPC mutual access behavior, operate_log_all=Operation audit log.
 * @method string getQuery() Obtain Log filter expression. Default * means no filtering; for example src_ip:1.1.1.1. Queryable fields vary with LogType. You should preferentially use the field name returned in the corresponding Items. Do not guess non-existing fields. It cannot be passed when using NextToken for continued query.
 * @method void setQuery(string $Query) Set Log filter expression. Default * means no filtering; for example src_ip:1.1.1.1. Queryable fields vary with LogType. You should preferentially use the field name returned in the corresponding Items. Do not guess non-existing fields. It cannot be passed when using NextToken for continued query.
 * @method string getStartTime() Obtain Query start time. Supports RFC3339, YYYY-MM-DD HH:MM:SS, YYYY-MM-DD, or Unix timestamp. Input to query the TimeRange backward from this time. Cannot be imported when using NextToken for continued querying.
 * @method void setStartTime(string $StartTime) Set Query start time. Supports RFC3339, YYYY-MM-DD HH:MM:SS, YYYY-MM-DD, or Unix timestamp. Input to query the TimeRange backward from this time. Cannot be imported when using NextToken for continued querying.
 * @method string getTimeRange() Obtain Query time range. Default 1h; format is positive integer plus unit m/h/d, such as 5m, 1h, 24h, 7d; cannot be passed when using NextToken for continuation.
 * @method void setTimeRange(string $TimeRange) Set Query time range. Default 1h; format is positive integer plus unit m/h/d, such as 5m, 1h, 24h, 7d; cannot be passed when using NextToken for continuation.
 * @method integer getLimit() Obtain Return limit. Selectable for initial query, default 100; value 1 to 1000; cannot be passed when using NextToken for continued query.
 * @method void setLimit(integer $Limit) Set Return limit. Selectable for initial query, default 100; value 1 to 1000; cannot be passed when using NextToken for continued query.
 * @method string getNextToken() Obtain Previous page opaque continuation token returned by Response.Data. Not required for initial query; only required for continuation query with NextToken. Invalid, tampered, or mismatched tenant will be rejected.
 * @method void setNextToken(string $NextToken) Set Previous page opaque continuation token returned by Response.Data. Not required for initial query; only required for continuation query with NextToken. Invalid, tampered, or mismatched tenant will be rejected.
 */
class DescribeCfwLogsRequest extends AbstractModel
{
    /**
     * @var string Log type. Required for the initial query; cannot be passed when using NextToken for continuation. cfw_netflow_border=Internet boundary traffic, cfw_netflow_vpc=VPC east-west traffic, cfw_netflow_nat=NAT firewall traffic, cfw_netflow_nta=NDR/NTA traffic, cfw_netflow_dns=DNS firewall log, cfw_rule_threatinfo=Intrusion defense/Threat Intelligence Alarm, cfw_rule_acl=Internet Boundary Access Control log, cfw_rule_vpc_acl=VPC access control log, cfw_rule_nat_acl=NAT access control log, cfw_ndr_subject_risk=NDR topic risk, cfw_ndr_dataleak_entry=NDR sensitive data leak, cfw_ndr_ai_audit=NDR AI application identification and Large Model Invocation audit, cfw_feature_collect=Statistical feature and baseline anomaly, cfw_behavior_collect=Beacon/DNS/port/cert/VPC mutual access behavior, operate_log_all=Operation audit log.
     */
    public $LogType;

    /**
     * @var string Log filter expression. Default * means no filtering; for example src_ip:1.1.1.1. Queryable fields vary with LogType. You should preferentially use the field name returned in the corresponding Items. Do not guess non-existing fields. It cannot be passed when using NextToken for continued query.
     */
    public $Query;

    /**
     * @var string Query start time. Supports RFC3339, YYYY-MM-DD HH:MM:SS, YYYY-MM-DD, or Unix timestamp. Input to query the TimeRange backward from this time. Cannot be imported when using NextToken for continued querying.
     */
    public $StartTime;

    /**
     * @var string Query time range. Default 1h; format is positive integer plus unit m/h/d, such as 5m, 1h, 24h, 7d; cannot be passed when using NextToken for continuation.
     */
    public $TimeRange;

    /**
     * @var integer Return limit. Selectable for initial query, default 100; value 1 to 1000; cannot be passed when using NextToken for continued query.
     */
    public $Limit;

    /**
     * @var string Previous page opaque continuation token returned by Response.Data. Not required for initial query; only required for continuation query with NextToken. Invalid, tampered, or mismatched tenant will be rejected.
     */
    public $NextToken;

    /**
     * @param string $LogType Log type. Required for the initial query; cannot be passed when using NextToken for continuation. cfw_netflow_border=Internet boundary traffic, cfw_netflow_vpc=VPC east-west traffic, cfw_netflow_nat=NAT firewall traffic, cfw_netflow_nta=NDR/NTA traffic, cfw_netflow_dns=DNS firewall log, cfw_rule_threatinfo=Intrusion defense/Threat Intelligence Alarm, cfw_rule_acl=Internet Boundary Access Control log, cfw_rule_vpc_acl=VPC access control log, cfw_rule_nat_acl=NAT access control log, cfw_ndr_subject_risk=NDR topic risk, cfw_ndr_dataleak_entry=NDR sensitive data leak, cfw_ndr_ai_audit=NDR AI application identification and Large Model Invocation audit, cfw_feature_collect=Statistical feature and baseline anomaly, cfw_behavior_collect=Beacon/DNS/port/cert/VPC mutual access behavior, operate_log_all=Operation audit log.
     * @param string $Query Log filter expression. Default * means no filtering; for example src_ip:1.1.1.1. Queryable fields vary with LogType. You should preferentially use the field name returned in the corresponding Items. Do not guess non-existing fields. It cannot be passed when using NextToken for continued query.
     * @param string $StartTime Query start time. Supports RFC3339, YYYY-MM-DD HH:MM:SS, YYYY-MM-DD, or Unix timestamp. Input to query the TimeRange backward from this time. Cannot be imported when using NextToken for continued querying.
     * @param string $TimeRange Query time range. Default 1h; format is positive integer plus unit m/h/d, such as 5m, 1h, 24h, 7d; cannot be passed when using NextToken for continuation.
     * @param integer $Limit Return limit. Selectable for initial query, default 100; value 1 to 1000; cannot be passed when using NextToken for continued query.
     * @param string $NextToken Previous page opaque continuation token returned by Response.Data. Not required for initial query; only required for continuation query with NextToken. Invalid, tampered, or mismatched tenant will be rejected.
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
