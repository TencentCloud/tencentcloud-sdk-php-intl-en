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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Malicious request data.
 *
 * @method integer getId() Obtain Record ID.
 * @method void setId(integer $Id) Set Record ID.
 * @method string getUuid() Obtain CWP agent `UUID`.
 * @method void setUuid(string $Uuid) Set CWP agent `UUID`.
 * @method string getMachineIp() Obtain Private IP of server.
 * @method void setMachineIp(string $MachineIp) Set Private IP of server.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getDomain() Obtain Malicious request domain name.
 * @method void setDomain(string $Domain) Set Malicious request domain name.
 * @method integer getCount() Obtain Number of malicious requests.
 * @method void setCount(integer $Count) Set Number of malicious requests.
 * @method string getProcessName() Obtain Process name.
 * @method void setProcessName(string $ProcessName) Set Process name.
 * @method string getStatus() Obtain Record status.
<li>UN_OPERATED: to be processed</li>
<li>TRUSTED: trusted</li>
<li>UN_TRUSTED: untrusted</li>
 * @method void setStatus(string $Status) Set Record status.
<li>UN_OPERATED: to be processed</li>
<li>TRUSTED: trusted</li>
<li>UN_TRUSTED: untrusted</li>
 * @method string getDescription() Obtain Malicious request domain name description.
 * @method void setDescription(string $Description) Set Malicious request domain name description.
 * @method string getReference() Obtain Reference address.
 * @method void setReference(string $Reference) Set Reference address.
 * @method string getCreateTime() Obtain Discovery time.
 * @method void setCreateTime(string $CreateTime) Set Discovery time.
 * @method string getMergeTime() Obtain Record merge time.
 * @method void setMergeTime(string $MergeTime) Set Record merge time.
 * @method string getProcessMd5() Obtain Process MD5
Value.
 * @method void setProcessMd5(string $ProcessMd5) Set Process MD5
Value.
 * @method string getCmdLine() Obtain Executed command line.
 * @method void setCmdLine(string $CmdLine) Set Executed command line.
 * @method integer getPid() Obtain Process `PID`.
 * @method void setPid(integer $Pid) Set Process `PID`.
 */
class MaliciousRequest extends AbstractModel
{
    /**
     * @var integer Record ID.
     */
    public $Id;

    /**
     * @var string CWP agent `UUID`.
     */
    public $Uuid;

    /**
     * @var string Private IP of server.
     */
    public $MachineIp;

    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var string Malicious request domain name.
     */
    public $Domain;

    /**
     * @var integer Number of malicious requests.
     */
    public $Count;

    /**
     * @var string Process name.
     */
    public $ProcessName;

    /**
     * @var string Record status.
<li>UN_OPERATED: to be processed</li>
<li>TRUSTED: trusted</li>
<li>UN_TRUSTED: untrusted</li>
     */
    public $Status;

    /**
     * @var string Malicious request domain name description.
     */
    public $Description;

    /**
     * @var string Reference address.
     */
    public $Reference;

    /**
     * @var string Discovery time.
     */
    public $CreateTime;

    /**
     * @var string Record merge time.
     */
    public $MergeTime;

    /**
     * @var string Process MD5
Value.
     */
    public $ProcessMd5;

    /**
     * @var string Executed command line.
     */
    public $CmdLine;

    /**
     * @var integer Process `PID`.
     */
    public $Pid;

    /**
     * @param integer $Id Record ID.
     * @param string $Uuid CWP agent `UUID`.
     * @param string $MachineIp Private IP of server.
     * @param string $MachineName Server name.
     * @param string $Domain Malicious request domain name.
     * @param integer $Count Number of malicious requests.
     * @param string $ProcessName Process name.
     * @param string $Status Record status.
<li>UN_OPERATED: to be processed</li>
<li>TRUSTED: trusted</li>
<li>UN_TRUSTED: untrusted</li>
     * @param string $Description Malicious request domain name description.
     * @param string $Reference Reference address.
     * @param string $CreateTime Discovery time.
     * @param string $MergeTime Record merge time.
     * @param string $ProcessMd5 Process MD5
Value.
     * @param string $CmdLine Executed command line.
     * @param integer $Pid Process `PID`.
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }
    }
}
