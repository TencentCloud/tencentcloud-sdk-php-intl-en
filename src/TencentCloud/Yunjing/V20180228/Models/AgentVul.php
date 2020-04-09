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
 * Server vulnerability information
 *
 * @method integer getId() Obtain Vulnerability ID.
 * @method void setId(integer $Id) Set Vulnerability ID.
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method string getVulName() Obtain Vulnerability name.
 * @method void setVulName(string $VulName) Set Vulnerability name.
 * @method string getVulLevel() Obtain Vulnerability severity level.
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
<li>NOTICE: notice</li>
 * @method void setVulLevel(string $VulLevel) Set Vulnerability severity level.
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
<li>NOTICE: notice</li>
 * @method string getLastScanTime() Obtain Last scanned time.
 * @method void setLastScanTime(string $LastScanTime) Set Last scanned time.
 * @method string getDescription() Obtain Vulnerability description.
 * @method void setDescription(string $Description) Set Vulnerability description.
 * @method integer getVulId() Obtain Vulnerability category ID.
 * @method void setVulId(integer $VulId) Set Vulnerability category ID.
 * @method string getVulStatus() Obtain Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>FIXED: fixed</li>
 * @method void setVulStatus(string $VulStatus) Set Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>FIXED: fixed</li>
 */
class AgentVul extends AbstractModel
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
     * @var string Vulnerability name.
     */
    public $VulName;

    /**
     * @var string Vulnerability severity level.
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
<li>NOTICE: notice</li>
     */
    public $VulLevel;

    /**
     * @var string Last scanned time.
     */
    public $LastScanTime;

    /**
     * @var string Vulnerability description.
     */
    public $Description;

    /**
     * @var integer Vulnerability category ID.
     */
    public $VulId;

    /**
     * @var string Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>FIXED: fixed</li>
     */
    public $VulStatus;

    /**
     * @param integer $Id Vulnerability ID.
     * @param string $MachineIp Server IP.
     * @param string $VulName Vulnerability name.
     * @param string $VulLevel Vulnerability severity level.
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
<li>NOTICE: notice</li>
     * @param string $LastScanTime Last scanned time.
     * @param string $Description Vulnerability description.
     * @param integer $VulId Vulnerability category ID.
     * @param string $VulStatus Vulnerability status.
<li>UN_OPERATED: to be processed</li>
<li>FIXED: fixed</li>
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

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulStatus",$param) and $param["VulStatus"] !== null) {
            $this->VulStatus = $param["VulStatus"];
        }
    }
}
