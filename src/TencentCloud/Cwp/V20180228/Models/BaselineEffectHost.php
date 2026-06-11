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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the host affected by baseline
 *
 * @method integer getPassCount() Obtain Passed items
 * @method void setPassCount(integer $PassCount) Set Passed items
 * @method integer getFailCount() Obtain Risky item
 * @method void setFailCount(integer $FailCount) Set Risky item
 * @method string getFirstScanTime() Obtain First detection event
 * @method void setFirstScanTime(string $FirstScanTime) Set First detection event
 * @method string getLastScanTime() Obtain Last detection time
 * @method void setLastScanTime(string $LastScanTime) Set Last detection time
 * @method integer getStatus() Obtain Risky item processing status. 0: failed; 1: passed.
 * @method void setStatus(integer $Status) Set Risky item processing status. 0: failed; 1: passed.
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getAliasName() Obtain Host alias
 * @method void setAliasName(string $AliasName) Set Host alias
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method integer getMaxStatus() Obtain detecting state
 * @method void setMaxStatus(integer $MaxStatus) Set detecting state
 */
class BaselineEffectHost extends AbstractModel
{
    /**
     * @var integer Passed items
     */
    public $PassCount;

    /**
     * @var integer Risky item
     */
    public $FailCount;

    /**
     * @var string First detection event
     */
    public $FirstScanTime;

    /**
     * @var string Last detection time
     */
    public $LastScanTime;

    /**
     * @var integer Risky item processing status. 0: failed; 1: passed.
     */
    public $Status;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var string Host alias
     */
    public $AliasName;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var integer detecting state
     */
    public $MaxStatus;

    /**
     * @param integer $PassCount Passed items
     * @param integer $FailCount Risky item
     * @param string $FirstScanTime First detection event
     * @param string $LastScanTime Last detection time
     * @param integer $Status Risky item processing status. 0: failed; 1: passed.
     * @param string $Quuid Host QUUID
     * @param string $HostIp Host IP address
     * @param string $AliasName Host alias
     * @param string $Uuid Host UUID
     * @param integer $MaxStatus detecting state
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
        if (array_key_exists("PassCount",$param) and $param["PassCount"] !== null) {
            $this->PassCount = $param["PassCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MaxStatus",$param) and $param["MaxStatus"] !== null) {
            $this->MaxStatus = $param["MaxStatus"];
        }
    }
}
