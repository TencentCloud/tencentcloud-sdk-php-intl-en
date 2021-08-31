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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPrivateZoneRecord request structure.
 *
 * @method string getZoneId() Obtain Private domain ID
 * @method void setZoneId(string $ZoneId) Set Private domain ID
 * @method string getRecordId() Obtain Record ID
 * @method void setRecordId(string $RecordId) Set Record ID
 * @method string getRecordType() Obtain Record type. Valid values: "A", "AAAA", "CNAME", "MX", "TXT", "PTR"
 * @method void setRecordType(string $RecordType) Set Record type. Valid values: "A", "AAAA", "CNAME", "MX", "TXT", "PTR"
 * @method string getSubDomain() Obtain Subdomain, such as "www", "m", and "@"
 * @method void setSubDomain(string $SubDomain) Set Subdomain, such as "www", "m", and "@"
 * @method string getRecordValue() Obtain Record value, such as IP: 192.168.10.2, CNAME: cname.qcloud.com., and MX: mail.qcloud.com.
 * @method void setRecordValue(string $RecordValue) Set Record value, such as IP: 192.168.10.2, CNAME: cname.qcloud.com., and MX: mail.qcloud.com.
 * @method integer getWeight() Obtain Record weight. Value range: 1–100
 * @method void setWeight(integer $Weight) Set Record weight. Value range: 1–100
 * @method integer getMX() Obtain MX priority, which is required when the record type is MX. Valid values: 5, 10, 15, 20, 30, 40, 50
 * @method void setMX(integer $MX) Set MX priority, which is required when the record type is MX. Valid values: 5, 10, 15, 20, 30, 40, 50
 * @method integer getTTL() Obtain Record cache time. The smaller the value, the faster the record will take effect. Value range: 1–86400s. Default value: 600
 * @method void setTTL(integer $TTL) Set Record cache time. The smaller the value, the faster the record will take effect. Value range: 1–86400s. Default value: 600
 */
class ModifyPrivateZoneRecordRequest extends AbstractModel
{
    /**
     * @var string Private domain ID
     */
    public $ZoneId;

    /**
     * @var string Record ID
     */
    public $RecordId;

    /**
     * @var string Record type. Valid values: "A", "AAAA", "CNAME", "MX", "TXT", "PTR"
     */
    public $RecordType;

    /**
     * @var string Subdomain, such as "www", "m", and "@"
     */
    public $SubDomain;

    /**
     * @var string Record value, such as IP: 192.168.10.2, CNAME: cname.qcloud.com., and MX: mail.qcloud.com.
     */
    public $RecordValue;

    /**
     * @var integer Record weight. Value range: 1–100
     */
    public $Weight;

    /**
     * @var integer MX priority, which is required when the record type is MX. Valid values: 5, 10, 15, 20, 30, 40, 50
     */
    public $MX;

    /**
     * @var integer Record cache time. The smaller the value, the faster the record will take effect. Value range: 1–86400s. Default value: 600
     */
    public $TTL;

    /**
     * @param string $ZoneId Private domain ID
     * @param string $RecordId Record ID
     * @param string $RecordType Record type. Valid values: "A", "AAAA", "CNAME", "MX", "TXT", "PTR"
     * @param string $SubDomain Subdomain, such as "www", "m", and "@"
     * @param string $RecordValue Record value, such as IP: 192.168.10.2, CNAME: cname.qcloud.com., and MX: mail.qcloud.com.
     * @param integer $Weight Record weight. Value range: 1–100
     * @param integer $MX MX priority, which is required when the record type is MX. Valid values: 5, 10, 15, 20, 30, 40, 50
     * @param integer $TTL Record cache time. The smaller the value, the faster the record will take effect. Value range: 1–86400s. Default value: 600
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
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
    }
}
