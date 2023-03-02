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
 * Record information in the task of bulk adding domains
 *
 * @method string getSubDomain() Obtain Subdomain (host record).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubDomain(string $SubDomain) Set Subdomain (host record).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordType() Obtain Record type. For more information, see the `DescribeRecordType` API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordType(string $RecordType) Set Record type. For more information, see the `DescribeRecordType` API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordLine() Obtain Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordLine(string $RecordLine) Set Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Record value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Record value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTTL() Obtain TTL value of the record
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTTL(integer $TTL) Set TTL value of the record
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Record adding status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Record adding status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperation() Obtain Operation type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperation(string $Operation) Set Operation type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrMsg() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrMsg(string $ErrMsg) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain ID of the record in the list
 * @method void setId(integer $Id) Set ID of the record in the list
 */
class CreateDomainBatchRecord extends AbstractModel
{
    /**
     * @var string Subdomain (host record).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubDomain;

    /**
     * @var string Record type. For more information, see the `DescribeRecordType` API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordType;

    /**
     * @var string Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordLine;

    /**
     * @var string Record value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var integer TTL value of the record
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TTL;

    /**
     * @var string Record adding status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Operation type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operation;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrMsg;

    /**
     * @var integer ID of the record in the list
     */
    public $Id;

    /**
     * @param string $SubDomain Subdomain (host record).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordType Record type. For more information, see the `DescribeRecordType` API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordLine Split zone of the DNS record. For more information, see the `DescribeRecordLineList` API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Record value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TTL TTL value of the record
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Record adding status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Operation Operation type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrMsg Error message
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id ID of the record in the list
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
        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
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

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
