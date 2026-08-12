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
 * Host brief information
 *
 * @method string getInstanceID() Obtain Cloud host instance ID
Parameter format: such as ins-instance
 * @method void setInstanceID(string $InstanceID) Set Cloud host instance ID
Parameter format: such as ins-instance
 * @method string getQUUID() Obtain Host QUUID (CWP internal unique identifier)
 * @method void setQUUID(string $QUUID) Set Host QUUID (CWP internal unique identifier)
 * @method string getUUID() Obtain Host UUID
 * @method void setUUID(string $UUID) Set Host UUID
 * @method string getPublicIP() Obtain Public network IP address
 * @method void setPublicIP(string $PublicIP) Set Public network IP address
 * @method string getPrivateIP() Obtain Private IP address
 * @method void setPrivateIP(string $PrivateIP) Set Private IP address
 * @method string getAgentStatus() Obtain CWP Agent status
Enumeration value:
ONLINE: Online
OFFLINE: Offline
UNINSTALLED: Not installed
 * @method void setAgentStatus(string $AgentStatus) Set CWP Agent status
Enumeration value:
ONLINE: Online
OFFLINE: Offline
UNINSTALLED: Not installed
 * @method string getInstanceStatus() Obtain CVM instance status
Enumeration value:
RUNNING: running.
STOPPED: Stopped
UNKNOWN: unknown
 * @method void setInstanceStatus(string $InstanceStatus) Set CVM instance status
Enumeration value:
RUNNING: running.
STOPPED: Stopped
UNKNOWN: unknown
 * @method string getName() Obtain Host name
 * @method void setName(string $Name) Set Host name
 * @method AccountBriefInfo getAccount() Obtain Account information belonging to
 * @method void setAccount(AccountBriefInfo $Account) Set Account information belonging to
 * @method array getTagItem() Obtain Asset tag list (CSIP internal assets)
 * @method void setTagItem(array $TagItem) Set Asset tag list (CSIP internal assets)
 * @method array getCloudTag() Obtain Tag list on cloud (Tag on cloud asset)
 * @method void setCloudTag(array $CloudTag) Set Tag list on cloud (Tag on cloud asset)
 */
class HostBriefInfo extends AbstractModel
{
    /**
     * @var string Cloud host instance ID
Parameter format: such as ins-instance
     */
    public $InstanceID;

    /**
     * @var string Host QUUID (CWP internal unique identifier)
     */
    public $QUUID;

    /**
     * @var string Host UUID
     */
    public $UUID;

    /**
     * @var string Public network IP address
     */
    public $PublicIP;

    /**
     * @var string Private IP address
     */
    public $PrivateIP;

    /**
     * @var string CWP Agent status
Enumeration value:
ONLINE: Online
OFFLINE: Offline
UNINSTALLED: Not installed
     */
    public $AgentStatus;

    /**
     * @var string CVM instance status
Enumeration value:
RUNNING: running.
STOPPED: Stopped
UNKNOWN: unknown
     */
    public $InstanceStatus;

    /**
     * @var string Host name
     */
    public $Name;

    /**
     * @var AccountBriefInfo Account information belonging to
     */
    public $Account;

    /**
     * @var array Asset tag list (CSIP internal assets)
     */
    public $TagItem;

    /**
     * @var array Tag list on cloud (Tag on cloud asset)
     */
    public $CloudTag;

    /**
     * @param string $InstanceID Cloud host instance ID
Parameter format: such as ins-instance
     * @param string $QUUID Host QUUID (CWP internal unique identifier)
     * @param string $UUID Host UUID
     * @param string $PublicIP Public network IP address
     * @param string $PrivateIP Private IP address
     * @param string $AgentStatus CWP Agent status
Enumeration value:
ONLINE: Online
OFFLINE: Offline
UNINSTALLED: Not installed
     * @param string $InstanceStatus CVM instance status
Enumeration value:
RUNNING: running.
STOPPED: Stopped
UNKNOWN: unknown
     * @param string $Name Host name
     * @param AccountBriefInfo $Account Account information belonging to
     * @param array $TagItem Asset tag list (CSIP internal assets)
     * @param array $CloudTag Tag list on cloud (Tag on cloud asset)
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountBriefInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("TagItem",$param) and $param["TagItem"] !== null) {
            $this->TagItem = [];
            foreach ($param["TagItem"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItem, $obj);
            }
        }

        if (array_key_exists("CloudTag",$param) and $param["CloudTag"] !== null) {
            $this->CloudTag = [];
            foreach ($param["CloudTag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTag, $obj);
            }
        }
    }
}
