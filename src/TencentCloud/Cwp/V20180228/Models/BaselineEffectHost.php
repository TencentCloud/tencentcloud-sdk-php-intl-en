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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the host affected by baseline
 *
 * @method integer getPassCount() Obtain Passed item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassCount(integer $PassCount) Set Passed item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFailCount() Obtain Risky item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailCount(integer $FailCount) Set Risky item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstScanTime() Obtain First check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstScanTime(string $FirstScanTime) Set First check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastScanTime() Obtain Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastScanTime(string $LastScanTime) Set Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Risky item processing status. 0: failed; 1: passed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Risky item processing status. 0: failed; 1: passed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuuid() Obtain Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIp() Obtain Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIp(string $HostIp) Set Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAliasName() Obtain Host alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAliasName(string $AliasName) Set Host alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxStatus() Obtain Check status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxStatus(integer $MaxStatus) Set Check status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaselineEffectHost extends AbstractModel
{
    /**
     * @var integer Passed item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassCount;

    /**
     * @var integer Risky item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailCount;

    /**
     * @var string First check time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstScanTime;

    /**
     * @var string Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastScanTime;

    /**
     * @var integer Risky item processing status. 0: failed; 1: passed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var string Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIp;

    /**
     * @var string Host alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AliasName;

    /**
     * @var string Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var integer Check status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxStatus;

    /**
     * @param integer $PassCount Passed item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FailCount Risky item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstScanTime First check time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastScanTime Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Risky item processing status. 0: failed; 1: passed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quuid Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIp Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AliasName Host alias
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxStatus Check status
Note: This field may return null, indicating that no valid values can be obtained.
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
