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
 * Records to be bulk added
 *
 * @method string getRecordType() Obtain Record type. For more information, see the `DescribeRecordType` API.
 * @method void setRecordType(string $RecordType) Set Record type. For more information, see the `DescribeRecordType` API.
 * @method string getValue() Obtain Record value.
 * @method void setValue(string $Value) Set Record value.
 * @method string getSubDomain() Obtain Subdomain (host record), which is `@` by default.
 * @method void setSubDomain(string $SubDomain) Set Subdomain (host record), which is `@` by default.
 * @method string getRecordLine() Obtain Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API. If neither `RecordLine` nor `RecordLineId` is specified, the default split zone will be used.
 * @method void setRecordLine(string $RecordLine) Set Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API. If neither `RecordLine` nor `RecordLineId` is specified, the default split zone will be used.
 * @method string getRecordLineId() Obtain Split zone ID of the DNS record. If both `RecordLine` and `RecordLineId` are specified, `RecordLineId` will be used.
 * @method void setRecordLineId(string $RecordLineId) Set Split zone ID of the DNS record. If both `RecordLine` and `RecordLineId` are specified, `RecordLineId` will be used.
 * @method integer getWeight() Obtain The record weight (not supported).
 * @method void setWeight(integer $Weight) Set The record weight (not supported).
 * @method integer getMX() Obtain MX record value. It is `0` by default for non-MX records and required for MX records.
 * @method void setMX(integer $MX) Set MX record value. It is `0` by default for non-MX records and required for MX records.
 * @method integer getTTL() Obtain TTL value of the record, which is `600` by default.
 * @method void setTTL(integer $TTL) Set TTL value of the record, which is `600` by default.
 * @method integer getEnabled() Obtain Record status (not supported). Valid values: `0` (disabled); `1` (enabled). Default value: `1`.
 * @method void setEnabled(integer $Enabled) Set Record status (not supported). Valid values: `0` (disabled); `1` (enabled). Default value: `1`.
 * @method string getRemark() Obtain Record remarks (not supported).
 * @method void setRemark(string $Remark) Set Record remarks (not supported).
 */
class AddRecordBatch extends AbstractModel
{
    /**
     * @var string Record type. For more information, see the `DescribeRecordType` API.
     */
    public $RecordType;

    /**
     * @var string Record value.
     */
    public $Value;

    /**
     * @var string Subdomain (host record), which is `@` by default.
     */
    public $SubDomain;

    /**
     * @var string Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API. If neither `RecordLine` nor `RecordLineId` is specified, the default split zone will be used.
     */
    public $RecordLine;

    /**
     * @var string Split zone ID of the DNS record. If both `RecordLine` and `RecordLineId` are specified, `RecordLineId` will be used.
     */
    public $RecordLineId;

    /**
     * @var integer The record weight (not supported).
     */
    public $Weight;

    /**
     * @var integer MX record value. It is `0` by default for non-MX records and required for MX records.
     */
    public $MX;

    /**
     * @var integer TTL value of the record, which is `600` by default.
     */
    public $TTL;

    /**
     * @var integer Record status (not supported). Valid values: `0` (disabled); `1` (enabled). Default value: `1`.
     */
    public $Enabled;

    /**
     * @var string Record remarks (not supported).
     */
    public $Remark;

    /**
     * @param string $RecordType Record type. For more information, see the `DescribeRecordType` API.
     * @param string $Value Record value.
     * @param string $SubDomain Subdomain (host record), which is `@` by default.
     * @param string $RecordLine Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API. If neither `RecordLine` nor `RecordLineId` is specified, the default split zone will be used.
     * @param string $RecordLineId Split zone ID of the DNS record. If both `RecordLine` and `RecordLineId` are specified, `RecordLineId` will be used.
     * @param integer $Weight The record weight (not supported).
     * @param integer $MX MX record value. It is `0` by default for non-MX records and required for MX records.
     * @param integer $TTL TTL value of the record, which is `600` by default.
     * @param integer $Enabled Record status (not supported). Valid values: `0` (disabled); `1` (enabled). Default value: `1`.
     * @param string $Remark Record remarks (not supported).
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
        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
