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
 * DescribeMachineInfo response structure.
 *
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method integer getProtectDays() Obtain Days under protection by CWP
 * @method void setProtectDays(integer $ProtectDays) Set Days under protection by CWP
 * @method string getMachineOs() Obtain OS.
 * @method void setMachineOs(string $MachineOs) Set OS.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getMachineStatus() Obtain Status.
<li>ONLINE: online</li>
<li>OFFLINE: offline</li>
 * @method void setMachineStatus(string $MachineStatus) Set Status.
<li>ONLINE: online</li>
<li>OFFLINE: offline</li>
 * @method string getInstanceId() Obtain Unique ID of CVM or BM instance.
 * @method void setInstanceId(string $InstanceId) Set Unique ID of CVM or BM instance.
 * @method string getMachineWanIp() Obtain Public IP of server.
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP of server.
 * @method string getQuuid() Obtain CVM or BM instance `Uuid`.
 * @method void setQuuid(string $Quuid) Set CVM or BM instance `Uuid`.
 * @method string getUuid() Obtain CWP agent `Uuid`.
 * @method void setUuid(string $Uuid) Set CWP agent `Uuid`.
 * @method boolean getIsProVersion() Obtain Whether CWP Pro is activated.
<li>true: yes</li>
<li>false: no</li>
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether CWP Pro is activated.
<li>true: yes</li>
<li>false: no</li>
 * @method string getProVersionOpenDate() Obtain CWP Pro activation time.
 * @method void setProVersionOpenDate(string $ProVersionOpenDate) Set CWP Pro activation time.
 * @method string getMachineType() Obtain Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
 * @method void setMachineType(string $MachineType) Set Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
 * @method string getMachineRegion() Obtain Server region, such as ap-guangzhou or ap-shanghai
 * @method void setMachineRegion(string $MachineRegion) Set Server region, such as ap-guangzhou or ap-shanghai
 * @method string getPayMode() Obtain Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
 * @method void setPayMode(string $PayMode) Set Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
 * @method integer getFreeMalwaresLeft() Obtain Number of trojans left for free scan.
 * @method void setFreeMalwaresLeft(integer $FreeMalwaresLeft) Set Number of trojans left for free scan.
 * @method integer getFreeVulsLeft() Obtain Number of vulnerability left for free scan.
 * @method void setFreeVulsLeft(integer $FreeVulsLeft) Set Number of vulnerability left for free scan.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeMachineInfoResponse extends AbstractModel
{
    /**
     * @var string Server IP.
     */
    public $MachineIp;

    /**
     * @var integer Days under protection by CWP
     */
    public $ProtectDays;

    /**
     * @var string OS.
     */
    public $MachineOs;

    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var string Status.
<li>ONLINE: online</li>
<li>OFFLINE: offline</li>
     */
    public $MachineStatus;

    /**
     * @var string Unique ID of CVM or BM instance.
     */
    public $InstanceId;

    /**
     * @var string Public IP of server.
     */
    public $MachineWanIp;

    /**
     * @var string CVM or BM instance `Uuid`.
     */
    public $Quuid;

    /**
     * @var string CWP agent `Uuid`.
     */
    public $Uuid;

    /**
     * @var boolean Whether CWP Pro is activated.
<li>true: yes</li>
<li>false: no</li>
     */
    public $IsProVersion;

    /**
     * @var string CWP Pro activation time.
     */
    public $ProVersionOpenDate;

    /**
     * @var string Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
     */
    public $MachineType;

    /**
     * @var string Server region, such as ap-guangzhou or ap-shanghai
     */
    public $MachineRegion;

    /**
     * @var string Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
     */
    public $PayMode;

    /**
     * @var integer Number of trojans left for free scan.
     */
    public $FreeMalwaresLeft;

    /**
     * @var integer Number of vulnerability left for free scan.
     */
    public $FreeVulsLeft;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $MachineIp Server IP.
     * @param integer $ProtectDays Days under protection by CWP
     * @param string $MachineOs OS.
     * @param string $MachineName Server name.
     * @param string $MachineStatus Status.
<li>ONLINE: online</li>
<li>OFFLINE: offline</li>
     * @param string $InstanceId Unique ID of CVM or BM instance.
     * @param string $MachineWanIp Public IP of server.
     * @param string $Quuid CVM or BM instance `Uuid`.
     * @param string $Uuid CWP agent `Uuid`.
     * @param boolean $IsProVersion Whether CWP Pro is activated.
<li>true: yes</li>
<li>false: no</li>
     * @param string $ProVersionOpenDate CWP Pro activation time.
     * @param string $MachineType Server type.
<li>CVM: CVM</li>
<li>BM: BM</li>
     * @param string $MachineRegion Server region, such as ap-guangzhou or ap-shanghai
     * @param string $PayMode Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
     * @param integer $FreeMalwaresLeft Number of trojans left for free scan.
     * @param integer $FreeVulsLeft Number of vulnerability left for free scan.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("ProVersionOpenDate",$param) and $param["ProVersionOpenDate"] !== null) {
            $this->ProVersionOpenDate = $param["ProVersionOpenDate"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("FreeMalwaresLeft",$param) and $param["FreeMalwaresLeft"] !== null) {
            $this->FreeMalwaresLeft = $param["FreeMalwaresLeft"];
        }

        if (array_key_exists("FreeVulsLeft",$param) and $param["FreeVulsLeft"] !== null) {
            $this->FreeVulsLeft = $param["FreeVulsLeft"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
