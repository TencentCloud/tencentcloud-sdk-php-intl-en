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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Record information
 *
 * @method integer getId() Obtain Record ID.
 * @method void setId(integer $Id) Set Record ID.
 * @method string getSubDomain() Obtain Subdomain (host record).
 * @method void setSubDomain(string $SubDomain) Set Subdomain (host record).
 * @method string getRecordType() Obtain Record type. For more information, see the `DescribeRecordType` API.
 * @method void setRecordType(string $RecordType) Set Record type. For more information, see the `DescribeRecordType` API.
 * @method string getRecordLine() Obtain Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
 * @method void setRecordLine(string $RecordLine) Set Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
 * @method string getRecordLineId() Obtain Split zone ID of the DNS record. For more information, see the `DescribeRecordLineList` API.
 * @method void setRecordLineId(string $RecordLineId) Set Split zone ID of the DNS record. For more information, see the `DescribeRecordLineList` API.
 * @method string getValue() Obtain Record value.
 * @method void setValue(string $Value) Set Record value.
 * @method integer getWeight() Obtain Record weight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Record weight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMX() Obtain MX record value. It is 0 by default for non-MX records.
 * @method void setMX(integer $MX) Set MX record value. It is 0 by default for non-MX records.
 * @method integer getTTL() Obtain TTL value of the record.
 * @method void setTTL(integer $TTL) Set TTL value of the record.
 * @method integer getEnabled() Obtain Record status. Valid values: 0 (disabled); 1 (enabled).
 * @method void setEnabled(integer $Enabled) Set Record status. Valid values: 0 (disabled); 1 (enabled).
 * @method string getMonitorStatus() Obtain D-Monitor status of the record.
"Ok" : The server is normal.
"Warn" : There is an alarm on this record, and the server returns 4XX.
"Down" : The server is down.
"" : D-Monitor is disabled for this record.
 * @method void setMonitorStatus(string $MonitorStatus) Set D-Monitor status of the record.
"Ok" : The server is normal.
"Warn" : There is an alarm on this record, and the server returns 4XX.
"Down" : The server is down.
"" : D-Monitor is disabled for this record.
 * @method string getRemark() Obtain Record remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Record remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedOn() Obtain Last update time of the record.
 * @method void setUpdatedOn(string $UpdatedOn) Set Last update time of the record.
 * @method integer getDomainId() Obtain Domain ID.
 * @method void setDomainId(integer $DomainId) Set Domain ID.
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var integer Record ID.
     */
    public $Id;

    /**
     * @var string Subdomain (host record).
     */
    public $SubDomain;

    /**
     * @var string Record type. For more information, see the `DescribeRecordType` API.
     */
    public $RecordType;

    /**
     * @var string Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
     */
    public $RecordLine;

    /**
     * @var string Split zone ID of the DNS record. For more information, see the `DescribeRecordLineList` API.
     */
    public $RecordLineId;

    /**
     * @var string Record value.
     */
    public $Value;

    /**
     * @var integer Record weight.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var integer MX record value. It is 0 by default for non-MX records.
     */
    public $MX;

    /**
     * @var integer TTL value of the record.
     */
    public $TTL;

    /**
     * @var integer Record status. Valid values: 0 (disabled); 1 (enabled).
     */
    public $Enabled;

    /**
     * @var string D-Monitor status of the record.
"Ok" : The server is normal.
"Warn" : There is an alarm on this record, and the server returns 4XX.
"Down" : The server is down.
"" : D-Monitor is disabled for this record.
     */
    public $MonitorStatus;

    /**
     * @var string Record remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Last update time of the record.
     */
    public $UpdatedOn;

    /**
     * @var integer Domain ID.
     */
    public $DomainId;

    /**
     * @param integer $Id Record ID.
     * @param string $SubDomain Subdomain (host record).
     * @param string $RecordType Record type. For more information, see the `DescribeRecordType` API.
     * @param string $RecordLine Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
     * @param string $RecordLineId Split zone ID of the DNS record. For more information, see the `DescribeRecordLineList` API.
     * @param string $Value Record value.
     * @param integer $Weight Record weight.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MX MX record value. It is 0 by default for non-MX records.
     * @param integer $TTL TTL value of the record.
     * @param integer $Enabled Record status. Valid values: 0 (disabled); 1 (enabled).
     * @param string $MonitorStatus D-Monitor status of the record.
"Ok" : The server is normal.
"Warn" : There is an alarm on this record, and the server returns 4XX.
"Down" : The server is down.
"" : D-Monitor is disabled for this record.
     * @param string $Remark Record remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedOn Last update time of the record.
     * @param integer $DomainId Domain ID.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
