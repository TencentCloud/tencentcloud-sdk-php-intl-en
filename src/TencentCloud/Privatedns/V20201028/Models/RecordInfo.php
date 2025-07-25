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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private domain information.
 *
 * @method string getRecordId() Obtain Record ID.
 * @method void setRecordId(string $RecordId) Set Record ID.
 * @method string getZoneId() Obtain Private domain ID, which is in zone-xxxxxxxx format.
 * @method void setZoneId(string $ZoneId) Set Private domain ID, which is in zone-xxxxxxxx format.
 * @method string getSubDomain() Obtain Subdomain name.
 * @method void setSubDomain(string $SubDomain) Set Subdomain name.
 * @method string getRecordType() Obtain Record type. Valid values: A, AAAA, CNAME, MX, TXT, and PTR.
 * @method void setRecordType(string $RecordType) Set Record type. Valid values: A, AAAA, CNAME, MX, TXT, and PTR.
 * @method string getRecordValue() Obtain Record value.
 * @method void setRecordValue(string $RecordValue) Set Record value.
 * @method integer getTTL() Obtain Record cache time. The smaller the value, the faster the record will take effect. Value range: 1-86,400s. Default value: 600.
 * @method void setTTL(integer $TTL) Set Record cache time. The smaller the value, the faster the record will take effect. Value range: 1-86,400s. Default value: 600.
 * @method integer getMX() Obtain MX priority, which is required when the record type is mx. valid values: 5, 10, 15, 20, 30, 40, and 50.
 * @method void setMX(integer $MX) Set MX priority, which is required when the record type is mx. valid values: 5, 10, 15, 20, 30, 40, and 50.
 * @method integer getWeight() Obtain Record weight. valid values: 1–100.
 * @method void setWeight(integer $Weight) Set Record weight. valid values: 1–100.
 * @method string getCreatedOn() Obtain Record creation time.
 * @method void setCreatedOn(string $CreatedOn) Set Record creation time.
 * @method string getUpdatedOn() Obtain Record update time.
 * @method void setUpdatedOn(string $UpdatedOn) Set Record update time.
 * @method integer getEnabled() Obtain 0 suspend 1 enable.
 * @method void setEnabled(integer $Enabled) Set 0 suspend 1 enable.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var string Record ID.
     */
    public $RecordId;

    /**
     * @var string Private domain ID, which is in zone-xxxxxxxx format.
     */
    public $ZoneId;

    /**
     * @var string Subdomain name.
     */
    public $SubDomain;

    /**
     * @var string Record type. Valid values: A, AAAA, CNAME, MX, TXT, and PTR.
     */
    public $RecordType;

    /**
     * @var string Record value.
     */
    public $RecordValue;

    /**
     * @var integer Record cache time. The smaller the value, the faster the record will take effect. Value range: 1-86,400s. Default value: 600.
     */
    public $TTL;

    /**
     * @var integer MX priority, which is required when the record type is mx. valid values: 5, 10, 15, 20, 30, 40, and 50.
     */
    public $MX;

    /**
     * @var integer Record weight. valid values: 1–100.
     */
    public $Weight;

    /**
     * @var string Record creation time.
     */
    public $CreatedOn;

    /**
     * @var string Record update time.
     */
    public $UpdatedOn;

    /**
     * @var integer 0 suspend 1 enable.
     */
    public $Enabled;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param string $RecordId Record ID.
     * @param string $ZoneId Private domain ID, which is in zone-xxxxxxxx format.
     * @param string $SubDomain Subdomain name.
     * @param string $RecordType Record type. Valid values: A, AAAA, CNAME, MX, TXT, and PTR.
     * @param string $RecordValue Record value.
     * @param integer $TTL Record cache time. The smaller the value, the faster the record will take effect. Value range: 1-86,400s. Default value: 600.
     * @param integer $MX MX priority, which is required when the record type is mx. valid values: 5, 10, 15, 20, 30, 40, and 50.
     * @param integer $Weight Record weight. valid values: 1–100.
     * @param string $CreatedOn Record creation time.
     * @param string $UpdatedOn Record update time.
     * @param integer $Enabled 0 suspend 1 enable.
     * @param string $Remark Remarks
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
