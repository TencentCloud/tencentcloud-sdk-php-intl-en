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
 * Record list elements
 *
 * @method integer getRecordId() Obtain The record ID.
 * @method void setRecordId(integer $RecordId) Set The record ID.
 * @method string getValue() Obtain The record value.
 * @method void setValue(string $Value) Set The record value.
 * @method string getStatus() Obtain The record status. Valid values: `ENABLE` (enabled), `DISABLE` (disabled).
 * @method void setStatus(string $Status) Set The record status. Valid values: `ENABLE` (enabled), `DISABLE` (disabled).
 * @method string getUpdatedOn() Obtain The update time.
 * @method void setUpdatedOn(string $UpdatedOn) Set The update time.
 * @method string getName() Obtain The host name.
 * @method void setName(string $Name) Set The host name.
 * @method string getLine() Obtain The record split zone.
 * @method void setLine(string $Line) Set The record split zone.
 * @method string getLineId() Obtain The split zone ID.
 * @method void setLineId(string $LineId) Set The split zone ID.
 * @method string getType() Obtain The record type.
 * @method void setType(string $Type) Set The record type.
 * @method integer getWeight() Obtain The record weight, which is required for round-robin DNS records.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set The record weight, which is required for round-robin DNS records.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMonitorStatus() Obtain The monitoring status of the record. Valid values: `OK` (normal), `WARN` (warning), and `DOWN` (downtime). It is empty if no monitoring is set or the monitoring is suspended.
 * @method void setMonitorStatus(string $MonitorStatus) Set The monitoring status of the record. Valid values: `OK` (normal), `WARN` (warning), and `DOWN` (downtime). It is empty if no monitoring is set or the monitoring is suspended.
 * @method string getRemark() Obtain The record remarks.
 * @method void setRemark(string $Remark) Set The record remarks.
 * @method integer getTTL() Obtain The record cache time.
 * @method void setTTL(integer $TTL) Set The record cache time.
 * @method integer getMX() Obtain The MX value, applicable to the MX record only.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMX(integer $MX) Set The MX value, applicable to the MX record only.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDefaultNS() Obtain Whether it is a default NS record.
 * @method void setDefaultNS(boolean $DefaultNS) Set Whether it is a default NS record.
 */
class RecordListItem extends AbstractModel
{
    /**
     * @var integer The record ID.
     */
    public $RecordId;

    /**
     * @var string The record value.
     */
    public $Value;

    /**
     * @var string The record status. Valid values: `ENABLE` (enabled), `DISABLE` (disabled).
     */
    public $Status;

    /**
     * @var string The update time.
     */
    public $UpdatedOn;

    /**
     * @var string The host name.
     */
    public $Name;

    /**
     * @var string The record split zone.
     */
    public $Line;

    /**
     * @var string The split zone ID.
     */
    public $LineId;

    /**
     * @var string The record type.
     */
    public $Type;

    /**
     * @var integer The record weight, which is required for round-robin DNS records.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string The monitoring status of the record. Valid values: `OK` (normal), `WARN` (warning), and `DOWN` (downtime). It is empty if no monitoring is set or the monitoring is suspended.
     */
    public $MonitorStatus;

    /**
     * @var string The record remarks.
     */
    public $Remark;

    /**
     * @var integer The record cache time.
     */
    public $TTL;

    /**
     * @var integer The MX value, applicable to the MX record only.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MX;

    /**
     * @var boolean Whether it is a default NS record.
     */
    public $DefaultNS;

    /**
     * @param integer $RecordId The record ID.
     * @param string $Value The record value.
     * @param string $Status The record status. Valid values: `ENABLE` (enabled), `DISABLE` (disabled).
     * @param string $UpdatedOn The update time.
     * @param string $Name The host name.
     * @param string $Line The record split zone.
     * @param string $LineId The split zone ID.
     * @param string $Type The record type.
     * @param integer $Weight The record weight, which is required for round-robin DNS records.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MonitorStatus The monitoring status of the record. Valid values: `OK` (normal), `WARN` (warning), and `DOWN` (downtime). It is empty if no monitoring is set or the monitoring is suspended.
     * @param string $Remark The record remarks.
     * @param integer $TTL The record cache time.
     * @param integer $MX The MX value, applicable to the MX record only.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $DefaultNS Whether it is a default NS record.
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("DefaultNS",$param) and $param["DefaultNS"] !== null) {
            $this->DefaultNS = $param["DefaultNS"];
        }
    }
}
