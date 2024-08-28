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
 * Network attack logs on the large screen
 *
 * @method integer getId() Obtain Log ID
 * @method void setId(integer $Id) Set Log ID
 * @method string getUuid() Obtain Client ID
 * @method void setUuid(string $Uuid) Set Client ID
 * @method string getSrcIp() Obtain Source IP
 * @method void setSrcIp(string $SrcIp) Set Source IP
 * @method integer getSrcPort() Obtain Source port
 * @method void setSrcPort(integer $SrcPort) Set Source port
 * @method string getHttpMethod() Obtain Attack method
 * @method void setHttpMethod(string $HttpMethod) Set Attack method
 * @method string getVulType() Obtain Threat type
 * @method void setVulType(string $VulType) Set Threat type
 * @method string getCreatedTime() Obtain Attack time
 * @method void setCreatedTime(string $CreatedTime) Set Attack time
 * @method integer getDstPort() Obtain Target port
 * @method void setDstPort(integer $DstPort) Set Target port
 * @method string getQuuid() Obtain Host quuid
 * @method void setQuuid(string $Quuid) Set Host quuid
 * @method string getDstIp() Obtain Target IP
 * @method void setDstIp(string $DstIp) Set Target IP
 */
class ScreenDefendAttackLog extends AbstractModel
{
    /**
     * @var integer Log ID
     */
    public $Id;

    /**
     * @var string Client ID
     */
    public $Uuid;

    /**
     * @var string Source IP
     */
    public $SrcIp;

    /**
     * @var integer Source port
     */
    public $SrcPort;

    /**
     * @var string Attack method
     */
    public $HttpMethod;

    /**
     * @var string Threat type
     */
    public $VulType;

    /**
     * @var string Attack time
     */
    public $CreatedTime;

    /**
     * @var integer Target port
     */
    public $DstPort;

    /**
     * @var string Host quuid
     */
    public $Quuid;

    /**
     * @var string Target IP
     */
    public $DstIp;

    /**
     * @param integer $Id Log ID
     * @param string $Uuid Client ID
     * @param string $SrcIp Source IP
     * @param integer $SrcPort Source port
     * @param string $HttpMethod Attack method
     * @param string $VulType Threat type
     * @param string $CreatedTime Attack time
     * @param integer $DstPort Target port
     * @param string $Quuid Host quuid
     * @param string $DstIp Target IP
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

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("SrcPort",$param) and $param["SrcPort"] !== null) {
            $this->SrcPort = $param["SrcPort"];
        }

        if (array_key_exists("HttpMethod",$param) and $param["HttpMethod"] !== null) {
            $this->HttpMethod = $param["HttpMethod"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }
    }
}
