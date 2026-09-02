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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster node list item
 *
 * @method string getAssetId() Obtain <p>Asset ID.</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset ID.</p>
 * @method integer getAppID() Obtain <p>appid</p>
 * @method void setAppID(integer $AppID) Set <p>appid</p>
 * @method string getNodeId() Obtain <p>Node ID.</p>
 * @method void setNodeId(string $NodeId) Set <p>Node ID.</p>
 * @method string getNodeName() Obtain <p>Node name.</p>
 * @method void setNodeName(string $NodeName) Set <p>Node name.</p>
 * @method string getPublicIP() Obtain <p>Public ip address</p>
 * @method void setPublicIP(string $PublicIP) Set <p>Public ip address</p>
 * @method string getInternalIP() Obtain <p>Private ip</p>
 * @method void setInternalIP(string $InternalIP) Set <p>Private ip</p>
 * @method string getNodeType() Obtain <p>Node type</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type</p>
 * @method integer getCoresCount() Obtain <p>Number of cores.</p>
 * @method void setCoresCount(integer $CoresCount) Set <p>Number of cores.</p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 * @method string getRunStatus() Obtain <p>Running state</p>
 * @method void setRunStatus(string $RunStatus) Set <p>Running state</p>
 * @method boolean getIsNew() Obtain <p>Whether it is a new asset</p>
 * @method void setIsNew(boolean $IsNew) Set <p>Whether it is a new asset</p>
 * @method string getUniqueID() Obtain <p>Unique ID of the node</p>
 * @method void setUniqueID(string $UniqueID) Set <p>Unique ID of the node</p>
 * @method string getClientStatus() Obtain <p>Client status</p><p>Enumeration values:</p><ul><li>ONLINE: online</li><li>OFFLINE: offline</li><li>UNINSTALL: not installed</li></ul>
 * @method void setClientStatus(string $ClientStatus) Set <p>Client status</p><p>Enumeration values:</p><ul><li>ONLINE: online</li><li>OFFLINE: offline</li><li>UNINSTALL: not installed</li></ul>
 * @method string getInstanceId() Obtain <p>Node instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Node instance ID</p>
 */
class ClusterNodeListItem extends AbstractModel
{
    /**
     * @var string <p>Asset ID.</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>Node ID.</p>
     */
    public $NodeId;

    /**
     * @var string <p>Node name.</p>
     */
    public $NodeName;

    /**
     * @var string <p>Public ip address</p>
     */
    public $PublicIP;

    /**
     * @var string <p>Private ip</p>
     */
    public $InternalIP;

    /**
     * @var string <p>Node type</p>
     */
    public $NodeType;

    /**
     * @var integer <p>Number of cores.</p>
     */
    public $CoresCount;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @var string <p>Running state</p>
     */
    public $RunStatus;

    /**
     * @var boolean <p>Whether it is a new asset</p>
     */
    public $IsNew;

    /**
     * @var string <p>Unique ID of the node</p>
     */
    public $UniqueID;

    /**
     * @var string <p>Client status</p><p>Enumeration values:</p><ul><li>ONLINE: online</li><li>OFFLINE: offline</li><li>UNINSTALL: not installed</li></ul>
     */
    public $ClientStatus;

    /**
     * @var string <p>Node instance ID</p>
     */
    public $InstanceId;

    /**
     * @param string $AssetId <p>Asset ID.</p>
     * @param integer $AppID <p>appid</p>
     * @param string $NodeId <p>Node ID.</p>
     * @param string $NodeName <p>Node name.</p>
     * @param string $PublicIP <p>Public ip address</p>
     * @param string $InternalIP <p>Private ip</p>
     * @param string $NodeType <p>Node type</p>
     * @param integer $CoresCount <p>Number of cores.</p>
     * @param array $Tags <p>Tag.</p>
     * @param string $RunStatus <p>Running state</p>
     * @param boolean $IsNew <p>Whether it is a new asset</p>
     * @param string $UniqueID <p>Unique ID of the node</p>
     * @param string $ClientStatus <p>Client status</p><p>Enumeration values:</p><ul><li>ONLINE: online</li><li>OFFLINE: offline</li><li>UNINSTALL: not installed</li></ul>
     * @param string $InstanceId <p>Node instance ID</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("InternalIP",$param) and $param["InternalIP"] !== null) {
            $this->InternalIP = $param["InternalIP"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
        }

        if (array_key_exists("ClientStatus",$param) and $param["ClientStatus"] !== null) {
            $this->ClientStatus = $param["ClientStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
