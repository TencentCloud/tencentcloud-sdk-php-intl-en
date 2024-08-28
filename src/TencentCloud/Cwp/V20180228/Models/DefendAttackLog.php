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
 * Network attack log
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
 * @method string getHttpCgi() Obtain Attack description
 * @method void setHttpCgi(string $HttpCgi) Set Attack description
 * @method string getHttpParam() Obtain Attack parameter
 * @method void setHttpParam(string $HttpParam) Set Attack parameter
 * @method string getVulType() Obtain Threat type
 * @method void setVulType(string $VulType) Set Threat type
 * @method string getCreatedAt() Obtain Attack time
 * @method void setCreatedAt(string $CreatedAt) Set Attack time
 * @method string getMachineIp() Obtain Target server IP
 * @method void setMachineIp(string $MachineIp) Set Target server IP
 * @method string getMachineName() Obtain Target server name
 * @method void setMachineName(string $MachineName) Set Target server name
 * @method string getDstIp() Obtain Target IP
 * @method void setDstIp(string $DstIp) Set Target IP
 * @method integer getDstPort() Obtain Target port
 * @method void setDstPort(integer $DstPort) Set Target port
 * @method string getHttpContent() Obtain Attack content
 * @method void setHttpContent(string $HttpContent) Set Attack content
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DefendAttackLog extends AbstractModel
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
     * @var string Attack description
     */
    public $HttpCgi;

    /**
     * @var string Attack parameter
     */
    public $HttpParam;

    /**
     * @var string Threat type
     */
    public $VulType;

    /**
     * @var string Attack time
     */
    public $CreatedAt;

    /**
     * @var string Target server IP
     */
    public $MachineIp;

    /**
     * @var string Target server name
     */
    public $MachineName;

    /**
     * @var string Target IP
     */
    public $DstIp;

    /**
     * @var integer Target port
     */
    public $DstPort;

    /**
     * @var string Attack content
     */
    public $HttpContent;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param integer $Id Log ID
     * @param string $Uuid Client ID
     * @param string $SrcIp Source IP
     * @param integer $SrcPort Source port
     * @param string $HttpMethod Attack method
     * @param string $HttpCgi Attack description
     * @param string $HttpParam Attack parameter
     * @param string $VulType Threat type
     * @param string $CreatedAt Attack time
     * @param string $MachineIp Target server IP
     * @param string $MachineName Target server name
     * @param string $DstIp Target IP
     * @param integer $DstPort Target port
     * @param string $HttpContent Attack content
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
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

        if (array_key_exists("HttpCgi",$param) and $param["HttpCgi"] !== null) {
            $this->HttpCgi = $param["HttpCgi"];
        }

        if (array_key_exists("HttpParam",$param) and $param["HttpParam"] !== null) {
            $this->HttpParam = $param["HttpParam"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("HttpContent",$param) and $param["HttpContent"] !== null) {
            $this->HttpContent = $param["HttpContent"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
