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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlockByIpTimesList request structure.
 *
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getIp() Obtain IP search criteria
 * @method void setIp(string $Ip) Set IP search criteria
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getDirection() Obtain Direction
 * @method void setDirection(string $Direction) Set Direction
 * @method string getEdgeId() Obtain Inter-VPC firewall toggle edge ID
 * @method void setEdgeId(string $EdgeId) Set Inter-VPC firewall toggle edge ID
 * @method string getLogSource() Obtain Log source. move: inter-VPC firewall
 * @method void setLogSource(string $LogSource) Set Log source. move: inter-VPC firewall
 * @method string getSource() Obtain Source
 * @method void setSource(string $Source) Set Source
 * @method string getZone() Obtain Region
 * @method void setZone(string $Zone) Set Region
 */
class DescribeBlockByIpTimesListRequest extends AbstractModel
{
    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string IP search criteria
     */
    public $Ip;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string Direction
     */
    public $Direction;

    /**
     * @var string Inter-VPC firewall toggle edge ID
     */
    public $EdgeId;

    /**
     * @var string Log source. move: inter-VPC firewall
     */
    public $LogSource;

    /**
     * @var string Source
     */
    public $Source;

    /**
     * @var string Region
     */
    public $Zone;

    /**
     * @param string $EndTime End time
     * @param string $Ip IP search criteria
     * @param string $StartTime Start time
     * @param string $Direction Direction
     * @param string $EdgeId Inter-VPC firewall toggle edge ID
     * @param string $LogSource Log source. move: inter-VPC firewall
     * @param string $Source Source
     * @param string $Zone Region
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
