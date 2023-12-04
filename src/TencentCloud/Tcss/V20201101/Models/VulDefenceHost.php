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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the server with exploit prevention enabled
 *
 * @method string getHostName() Obtain General node/Super node name
 * @method void setHostName(string $HostName) Set General node/Super node name
 * @method string getHostIP() Obtain Server IP, which is the private IP
 * @method void setHostIP(string $HostIP) Set Server IP, which is the private IP
 * @method string getHostID() Obtain Node QUuid/Super node ID
 * @method void setHostID(string $HostID) Set Node QUuid/Super node ID
 * @method string getStatus() Obtain Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
 * @method void setStatus(string $Status) Set Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
 * @method string getPublicIP() Obtain Public IP
 * @method void setPublicIP(string $PublicIP) Set Public IP
 * @method string getCreateTime() Obtain First enablement time
 * @method void setCreateTime(string $CreateTime) Set First enablement time
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getNodeSubNetName() Obtain Super node subnet name
 * @method void setNodeSubNetName(string $NodeSubNetName) Set Super node subnet name
 * @method string getNodeSubNetCIDR() Obtain Super node subnet IP range
 * @method void setNodeSubNetCIDR(string $NodeSubNetCIDR) Set Super node subnet IP range
 * @method string getNodeSubNetID() Obtain Super node subnet ID
 * @method void setNodeSubNetID(string $NodeSubNetID) Set Super node subnet ID
 * @method string getNodeUniqueID() Obtain UID of a super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of a super node
 * @method string getNodeID() Obtain ID of a super node
 * @method void setNodeID(string $NodeID) Set ID of a super node
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 */
class VulDefenceHost extends AbstractModel
{
    /**
     * @var string General node/Super node name
     */
    public $HostName;

    /**
     * @var string Server IP, which is the private IP
     */
    public $HostIP;

    /**
     * @var string Node QUuid/Super node ID
     */
    public $HostID;

    /**
     * @var string Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
     */
    public $Status;

    /**
     * @var string Public IP
     */
    public $PublicIP;

    /**
     * @var string First enablement time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $ModifyTime;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string Super node subnet name
     */
    public $NodeSubNetName;

    /**
     * @var string Super node subnet IP range
     */
    public $NodeSubNetCIDR;

    /**
     * @var string Super node subnet ID
     */
    public $NodeSubNetID;

    /**
     * @var string UID of a super node
     */
    public $NodeUniqueID;

    /**
     * @var string ID of a super node
     */
    public $NodeID;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @param string $HostName General node/Super node name
     * @param string $HostIP Server IP, which is the private IP
     * @param string $HostID Node QUuid/Super node ID
     * @param string $Status Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
     * @param string $PublicIP Public IP
     * @param string $CreateTime First enablement time
     * @param string $ModifyTime Update time
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $NodeSubNetName Super node subnet name
     * @param string $NodeSubNetCIDR Super node subnet IP range
     * @param string $NodeSubNetID Super node subnet ID
     * @param string $NodeUniqueID UID of a super node
     * @param string $NodeID ID of a super node
     * @param string $PodIP Pod IP
     * @param string $PodName Pod name
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeSubNetName",$param) and $param["NodeSubNetName"] !== null) {
            $this->NodeSubNetName = $param["NodeSubNetName"];
        }

        if (array_key_exists("NodeSubNetCIDR",$param) and $param["NodeSubNetCIDR"] !== null) {
            $this->NodeSubNetCIDR = $param["NodeSubNetCIDR"];
        }

        if (array_key_exists("NodeSubNetID",$param) and $param["NodeSubNetID"] !== null) {
            $this->NodeSubNetID = $param["NodeSubNetID"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }
    }
}
