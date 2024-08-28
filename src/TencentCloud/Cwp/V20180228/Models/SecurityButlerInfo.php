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
 * List of security manager information
 *
 * @method integer getId() Obtain Data ID
 * @method void setId(integer $Id) Set Data ID
 * @method integer getOrderId() Obtain Order ID
 * @method void setOrderId(integer $OrderId) Set Order ID
 * @method string getQuuid() Obtain cvm id
 * @method void setQuuid(string $Quuid) Set cvm id
 * @method integer getStatus() Obtain Service status. 0: in service; 1: expired; 2: terminated.
 * @method void setStatus(integer $Status) Set Service status. 0: in service; 1: expired; 2: terminated.
 * @method string getStartTime() Obtain Service start time
 * @method void setStartTime(string $StartTime) Set Service start time
 * @method string getEndTime() Obtain Service end time
 * @method void setEndTime(string $EndTime) Set Service end time
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method integer getRiskCount() Obtain Number of host risks
 * @method void setRiskCount(integer $RiskCount) Set Number of host risks
 */
class SecurityButlerInfo extends AbstractModel
{
    /**
     * @var integer Data ID
     */
    public $Id;

    /**
     * @var integer Order ID
     */
    public $OrderId;

    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var integer Service status. 0: in service; 1: expired; 2: terminated.
     */
    public $Status;

    /**
     * @var string Service start time
     */
    public $StartTime;

    /**
     * @var string Service end time
     */
    public $EndTime;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var integer Number of host risks
     */
    public $RiskCount;

    /**
     * @param integer $Id Data ID
     * @param integer $OrderId Order ID
     * @param string $Quuid cvm id
     * @param integer $Status Service status. 0: in service; 1: expired; 2: terminated.
     * @param string $StartTime Service start time
     * @param string $EndTime Service end time
     * @param string $HostName Host name
     * @param string $HostIp Host IP address
     * @param string $Uuid Host UUID
     * @param integer $RiskCount Number of host risks
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

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }
    }
}
