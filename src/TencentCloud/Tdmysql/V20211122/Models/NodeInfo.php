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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information type
 *
 * @method string getIP() Obtain 
 * @method void setIP(string $IP) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getNodeId() Obtain 
 * @method void setNodeId(string $NodeId) Set 
 * @method integer getPort() Obtain 
 * @method void setPort(integer $Port) Set 
 * @method string getZone() Obtain 
 * @method void setZone(string $Zone) Set 
 * @method string getHost() Obtain 
 * @method void setHost(string $Host) Set 
 * @method array getBinlogInfo() Obtain <p>Node log service information</p>
 * @method void setBinlogInfo(array $BinlogInfo) Set <p>Node log service information</p>
 * @method integer getCpu() Obtain <p>Number of CPUs of the node</p>
 * @method void setCpu(integer $Cpu) Set <p>Number of CPUs of the node</p>
 * @method integer getMem() Obtain <p>Node mem size</p>
 * @method void setMem(integer $Mem) Set <p>Node mem size</p>
 * @method integer getDataDisk() Obtain <p>Node disk size</p>
 * @method void setDataDisk(integer $DataDisk) Set <p>Node disk size</p>
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $IP;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $NodeId;

    /**
     * @var integer 
     */
    public $Port;

    /**
     * @var string 
     */
    public $Zone;

    /**
     * @var string 
     */
    public $Host;

    /**
     * @var array <p>Node log service information</p>
     */
    public $BinlogInfo;

    /**
     * @var integer <p>Number of CPUs of the node</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Node mem size</p>
     */
    public $Mem;

    /**
     * @var integer <p>Node disk size</p>
     */
    public $DataDisk;

    /**
     * @param string $IP 
     * @param string $Type 
     * @param string $NodeId 
     * @param integer $Port 
     * @param string $Zone 
     * @param string $Host 
     * @param array $BinlogInfo <p>Node log service information</p>
     * @param integer $Cpu <p>Number of CPUs of the node</p>
     * @param integer $Mem <p>Node mem size</p>
     * @param integer $DataDisk <p>Node disk size</p>
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("BinlogInfo",$param) and $param["BinlogInfo"] !== null) {
            $this->BinlogInfo = [];
            foreach ($param["BinlogInfo"] as $key => $value){
                $obj = new BinlogInfo();
                $obj->deserialize($value);
                array_push($this->BinlogInfo, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = $param["DataDisk"];
        }
    }
}
