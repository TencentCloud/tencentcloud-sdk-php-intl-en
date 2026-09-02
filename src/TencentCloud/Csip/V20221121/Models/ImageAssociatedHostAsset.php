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
 * Asset of the host associated with the mirror
 *
 * @method string getUuid() Obtain <p>Host UUID.</p>
 * @method void setUuid(string $Uuid) Set <p>Host UUID.</p>
 * @method string getQUuid() Obtain <p>Host quuid</p>
 * @method void setQUuid(string $QUuid) Set <p>Host quuid</p>
 * @method string getHostName() Obtain <p>host name</p>
 * @method void setHostName(string $HostName) Set <p>host name</p>
 * @method string getOwnerAccountName() Obtain <p>Account name associated with the host</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Account name associated with the host</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the host</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the host</p>
 * @method string getOwnerUin() Obtain <p>uin of the account associated with the host</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>uin of the account associated with the host</p>
 * @method string getInnerIp() Obtain <p>Host private network address</p>
 * @method void setInnerIp(string $InnerIp) Set <p>Host private network address</p>
 * @method string getPublicIp() Obtain <p>Host public network address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Host public network address</p>
 * @method string getAgentStatus() Obtain <p>agent status on the host</p><p>Enumeration value:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALL: uninstalled</li></ul>
 * @method void setAgentStatus(string $AgentStatus) Set <p>agent status on the host</p><p>Enumeration value:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALL: uninstalled</li></ul>
 * @method string getInstanceID() Obtain <p>Host instance ID.</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Host instance ID.</p>
 * @method string getInstanceState() Obtain <p>Host status</p>
 * @method void setInstanceState(string $InstanceState) Set <p>Host status</p>
 */
class ImageAssociatedHostAsset extends AbstractModel
{
    /**
     * @var string <p>Host UUID.</p>
     */
    public $Uuid;

    /**
     * @var string <p>Host quuid</p>
     */
    public $QUuid;

    /**
     * @var string <p>host name</p>
     */
    public $HostName;

    /**
     * @var string <p>Account name associated with the host</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the account associated with the host</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>uin of the account associated with the host</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>Host private network address</p>
     */
    public $InnerIp;

    /**
     * @var string <p>Host public network address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>agent status on the host</p><p>Enumeration value:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALL: uninstalled</li></ul>
     */
    public $AgentStatus;

    /**
     * @var string <p>Host instance ID.</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Host status</p>
     */
    public $InstanceState;

    /**
     * @param string $Uuid <p>Host UUID.</p>
     * @param string $QUuid <p>Host quuid</p>
     * @param string $HostName <p>host name</p>
     * @param string $OwnerAccountName <p>Account name associated with the host</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the host</p>
     * @param string $OwnerUin <p>uin of the account associated with the host</p>
     * @param string $InnerIp <p>Host private network address</p>
     * @param string $PublicIp <p>Host public network address</p>
     * @param string $AgentStatus <p>agent status on the host</p><p>Enumeration value:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALL: uninstalled</li></ul>
     * @param string $InstanceID <p>Host instance ID.</p>
     * @param string $InstanceState <p>Host status</p>
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("QUuid",$param) and $param["QUuid"] !== null) {
            $this->QUuid = $param["QUuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InnerIp",$param) and $param["InnerIp"] !== null) {
            $this->InnerIp = $param["InnerIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }
    }
}
