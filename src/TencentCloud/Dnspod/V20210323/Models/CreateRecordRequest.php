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
 * CreateRecord request structure.
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getRecordType() Obtain Record type, which is obtained through the record type API. The value contains uppercase letters, such as `A`.
 * @method void setRecordType(string $RecordType) Set Record type, which is obtained through the record type API. The value contains uppercase letters, such as `A`.
 * @method string getRecordLine() Obtain Record split zone, which is obtained through the record split zone API.
 * @method void setRecordLine(string $RecordLine) Set Record split zone, which is obtained through the record split zone API.
 * @method string getValue() Obtain Record value, such as `IP : 200.200.200.200`, `CNAME : cname.dnspod.com`, and `MX : mail.dnspod.com`.
 * @method void setValue(string $Value) Set Record value, such as `IP : 200.200.200.200`, `CNAME : cname.dnspod.com`, and `MX : mail.dnspod.com`.
 * @method integer getDomainId() Obtain Domain ID. The `DomainId` parameter has a higher priority than `Domain`. If `DomainId` is passed in, `Domain` will be ignored.
 * @method void setDomainId(integer $DomainId) Set Domain ID. The `DomainId` parameter has a higher priority than `Domain`. If `DomainId` is passed in, `Domain` will be ignored.
 * @method string getSubDomain() Obtain Host record such as `www`. If it is not passed in, it will be `@` by default.
 * @method void setSubDomain(string $SubDomain) Set Host record such as `www`. If it is not passed in, it will be `@` by default.
 * @method string getRecordLineId() Obtain Split zone ID, which is obtained through the record split zone API. The value is a string such as `10=1`. The `RecordLineId` parameter has a higher priority than `RecordLine`. If both of them are passed in, `RecordLineId` will be used first.
 * @method void setRecordLineId(string $RecordLineId) Set Split zone ID, which is obtained through the record split zone API. The value is a string such as `10=1`. The `RecordLineId` parameter has a higher priority than `RecordLine`. If both of them are passed in, `RecordLineId` will be used first.
 * @method integer getMX() Obtain MX priority, which is required for an MX record and will take effect if the record type is MX. Value range: 1–20.
 * @method void setMX(integer $MX) Set MX priority, which is required for an MX record and will take effect if the record type is MX. Value range: 1–20.
 * @method integer getTTL() Obtain TTL. Value range: 1–604800. The minimum value varies by domain level.
 * @method void setTTL(integer $TTL) Set TTL. Value range: 1–604800. The minimum value varies by domain level.
 * @method integer getWeight() Obtain Weight information, which is an integer between 0 and 100. It is supported only for enterprise VIP domains. `0` indicates not to pass in this parameter, i.e., not to set the weight.
 * @method void setWeight(integer $Weight) Set Weight information, which is an integer between 0 and 100. It is supported only for enterprise VIP domains. `0` indicates not to pass in this parameter, i.e., not to set the weight.
 * @method string getStatus() Obtain Initial status of the record. Valid values: ENABLE, DISABLE. Default value: ENABLE. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
 * @method void setStatus(string $Status) Set Initial status of the record. Valid values: ENABLE, DISABLE. Default value: ENABLE. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
 */
class CreateRecordRequest extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Record type, which is obtained through the record type API. The value contains uppercase letters, such as `A`.
     */
    public $RecordType;

    /**
     * @var string Record split zone, which is obtained through the record split zone API.
     */
    public $RecordLine;

    /**
     * @var string Record value, such as `IP : 200.200.200.200`, `CNAME : cname.dnspod.com`, and `MX : mail.dnspod.com`.
     */
    public $Value;

    /**
     * @var integer Domain ID. The `DomainId` parameter has a higher priority than `Domain`. If `DomainId` is passed in, `Domain` will be ignored.
     */
    public $DomainId;

    /**
     * @var string Host record such as `www`. If it is not passed in, it will be `@` by default.
     */
    public $SubDomain;

    /**
     * @var string Split zone ID, which is obtained through the record split zone API. The value is a string such as `10=1`. The `RecordLineId` parameter has a higher priority than `RecordLine`. If both of them are passed in, `RecordLineId` will be used first.
     */
    public $RecordLineId;

    /**
     * @var integer MX priority, which is required for an MX record and will take effect if the record type is MX. Value range: 1–20.
     */
    public $MX;

    /**
     * @var integer TTL. Value range: 1–604800. The minimum value varies by domain level.
     */
    public $TTL;

    /**
     * @var integer Weight information, which is an integer between 0 and 100. It is supported only for enterprise VIP domains. `0` indicates not to pass in this parameter, i.e., not to set the weight.
     */
    public $Weight;

    /**
     * @var string Initial status of the record. Valid values: ENABLE, DISABLE. Default value: ENABLE. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
     */
    public $Status;

    /**
     * @param string $Domain Domain
     * @param string $RecordType Record type, which is obtained through the record type API. The value contains uppercase letters, such as `A`.
     * @param string $RecordLine Record split zone, which is obtained through the record split zone API.
     * @param string $Value Record value, such as `IP : 200.200.200.200`, `CNAME : cname.dnspod.com`, and `MX : mail.dnspod.com`.
     * @param integer $DomainId Domain ID. The `DomainId` parameter has a higher priority than `Domain`. If `DomainId` is passed in, `Domain` will be ignored.
     * @param string $SubDomain Host record such as `www`. If it is not passed in, it will be `@` by default.
     * @param string $RecordLineId Split zone ID, which is obtained through the record split zone API. The value is a string such as `10=1`. The `RecordLineId` parameter has a higher priority than `RecordLine`. If both of them are passed in, `RecordLineId` will be used first.
     * @param integer $MX MX priority, which is required for an MX record and will take effect if the record type is MX. Value range: 1–20.
     * @param integer $TTL TTL. Value range: 1–604800. The minimum value varies by domain level.
     * @param integer $Weight Weight information, which is an integer between 0 and 100. It is supported only for enterprise VIP domains. `0` indicates not to pass in this parameter, i.e., not to set the weight.
     * @param string $Status Initial status of the record. Valid values: ENABLE, DISABLE. Default value: ENABLE. If `DISABLE` is passed in, the DNS record won't take effect, and the limit on round-robin DNS won't be verified.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
