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
 * Affected server information
 *
 * @method integer getId() Obtain Vulnerability ID.
 * @method void setId(integer $Id) Set Vulnerability ID.
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getLastScanTime() Obtain Last detection time.
 * @method void setLastScanTime(string $LastScanTime) Set Last detection time.
 * @method string getVulStatus() Obtain Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>SCANING: scanning</li>
<li>FIXED: fixed</li>
 * @method void setVulStatus(string $VulStatus) Set Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>SCANING: scanning</li>
<li>FIXED: fixed</li>
 * @method string getUuid() Obtain CWP agent `UUID`.
 * @method void setUuid(string $Uuid) Set CWP agent `UUID`.
 * @method string getDescription() Obtain Vulnerability description.
 * @method void setDescription(string $Description) Set Vulnerability description.
 * @method integer getVulId() Obtain Vulnerability category ID.
 * @method void setVulId(integer $VulId) Set Vulnerability category ID.
 * @method boolean getIsProVersion() Obtain Whether it is the CWP Pro.
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether it is the CWP Pro.
 */
class ImpactedHost extends AbstractModel
{
    /**
     * @var integer Vulnerability ID.
     */
    public $Id;

    /**
     * @var string Server IP.
     */
    public $MachineIp;

    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var string Last detection time.
     */
    public $LastScanTime;

    /**
     * @var string Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>SCANING: scanning</li>
<li>FIXED: fixed</li>
     */
    public $VulStatus;

    /**
     * @var string CWP agent `UUID`.
     */
    public $Uuid;

    /**
     * @var string Vulnerability description.
     */
    public $Description;

    /**
     * @var integer Vulnerability category ID.
     */
    public $VulId;

    /**
     * @var boolean Whether it is the CWP Pro.
     */
    public $IsProVersion;

    /**
     * @param integer $Id Vulnerability ID.
     * @param string $MachineIp Server IP.
     * @param string $MachineName Server name.
     * @param string $LastScanTime Last detection time.
     * @param string $VulStatus Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>SCANING: scanning</li>
<li>FIXED: fixed</li>
     * @param string $Uuid CWP agent `UUID`.
     * @param string $Description Vulnerability description.
     * @param integer $VulId Vulnerability category ID.
     * @param boolean $IsProVersion Whether it is the CWP Pro.
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

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("VulStatus",$param) and $param["VulStatus"] !== null) {
            $this->VulStatus = $param["VulStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }
    }
}
