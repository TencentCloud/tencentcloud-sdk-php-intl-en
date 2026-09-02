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
 * Baseline host asset, which hosts the host details associated with subtasks and risk records.
 *
 * @method string getInstanceID() Obtain <p>Cloud host instance ID, e.g. ins-instanceid.</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Cloud host instance ID, e.g. ins-instanceid.</p>
 * @method string getQUUID() Obtain <p>Host unique identifier QUUID.</p>
 * @method void setQUUID(string $QUUID) Set <p>Host unique identifier QUUID.</p>
 * @method string getUUID() Obtain <p>UUID submitted by the Host Agent.</p>
 * @method void setUUID(string $UUID) Set <p>UUID submitted by the Host Agent.</p>
 * @method string getPublicIP() Obtain <p>Public IP address of the host.</p>
 * @method void setPublicIP(string $PublicIP) Set <p>Public IP address of the host.</p>
 * @method string getPrivateIP() Obtain <p>Private IP of the host.</p>
 * @method void setPrivateIP(string $PrivateIP) Set <p>Private IP of the host.</p>
 * @method string getAgentStatus() Obtain <p>CWP Agent status. Valid values:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALLED: not installed</li></ul>
 * @method void setAgentStatus(string $AgentStatus) Set <p>CWP Agent status. Valid values:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALLED: not installed</li></ul>
 * @method string getInstanceStatus() Obtain <p>Cloud virtual machine instance running status. Parameter values:</p><ul><li>RUNNING: running</li><li>STOPPED: stopped</li><li>UNKNOWN: unknown</li></ul>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Cloud virtual machine instance running status. Parameter values:</p><ul><li>RUNNING: running</li><li>STOPPED: stopped</li><li>UNKNOWN: unknown</li></ul>
 * @method string getName() Obtain <p>Host name.</p>
 * @method void setName(string $Name) Set <p>Host name.</p>
 * @method integer getAppid() Obtain <p>Appid of the tenant associated with the host.</p>
 * @method void setAppid(integer $Appid) Set <p>Appid of the tenant associated with the host.</p>
 * @method array getTagItem() Obtain <p>CSIP internal asset tag list.</p>
 * @method void setTagItem(array $TagItem) Set <p>CSIP internal asset tag list.</p>
 * @method array getCloudTag() Obtain <p>Cloud natively asset Tag list.</p>
 * @method void setCloudTag(array $CloudTag) Set <p>Cloud natively asset Tag list.</p>
 * @method RegionInfo getRegionInfo() Obtain <p>Region information of the host.</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set <p>Region information of the host.</p>
 * @method string getOsInfo() Obtain <p>Host operating system information (including distro and version number).</p>
 * @method void setOsInfo(string $OsInfo) Set <p>Host operating system information (including distro and version number).</p>
 * @method string getProtectVersion() Obtain <p>Host protection version. Value: NONE (no protection), BASIC (basic version), PRO (pro edition), ULTIMATE (flagship edition), PRO_LH (lite edition).</p>
 * @method void setProtectVersion(string $ProtectVersion) Set <p>Host protection version. Value: NONE (no protection), BASIC (basic version), PRO (pro edition), ULTIMATE (flagship edition), PRO_LH (lite edition).</p>
 */
class BaselineHostAsset extends AbstractModel
{
    /**
     * @var string <p>Cloud host instance ID, e.g. ins-instanceid.</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Host unique identifier QUUID.</p>
     */
    public $QUUID;

    /**
     * @var string <p>UUID submitted by the Host Agent.</p>
     */
    public $UUID;

    /**
     * @var string <p>Public IP address of the host.</p>
     */
    public $PublicIP;

    /**
     * @var string <p>Private IP of the host.</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>CWP Agent status. Valid values:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALLED: not installed</li></ul>
     */
    public $AgentStatus;

    /**
     * @var string <p>Cloud virtual machine instance running status. Parameter values:</p><ul><li>RUNNING: running</li><li>STOPPED: stopped</li><li>UNKNOWN: unknown</li></ul>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Host name.</p>
     */
    public $Name;

    /**
     * @var integer <p>Appid of the tenant associated with the host.</p>
     */
    public $Appid;

    /**
     * @var array <p>CSIP internal asset tag list.</p>
     */
    public $TagItem;

    /**
     * @var array <p>Cloud natively asset Tag list.</p>
     */
    public $CloudTag;

    /**
     * @var RegionInfo <p>Region information of the host.</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>Host operating system information (including distro and version number).</p>
     */
    public $OsInfo;

    /**
     * @var string <p>Host protection version. Value: NONE (no protection), BASIC (basic version), PRO (pro edition), ULTIMATE (flagship edition), PRO_LH (lite edition).</p>
     */
    public $ProtectVersion;

    /**
     * @param string $InstanceID <p>Cloud host instance ID, e.g. ins-instanceid.</p>
     * @param string $QUUID <p>Host unique identifier QUUID.</p>
     * @param string $UUID <p>UUID submitted by the Host Agent.</p>
     * @param string $PublicIP <p>Public IP address of the host.</p>
     * @param string $PrivateIP <p>Private IP of the host.</p>
     * @param string $AgentStatus <p>CWP Agent status. Valid values:</p><ul><li>ONLINE: ONLINE</li><li>OFFLINE: OFFLINE</li><li>UNINSTALLED: not installed</li></ul>
     * @param string $InstanceStatus <p>Cloud virtual machine instance running status. Parameter values:</p><ul><li>RUNNING: running</li><li>STOPPED: stopped</li><li>UNKNOWN: unknown</li></ul>
     * @param string $Name <p>Host name.</p>
     * @param integer $Appid <p>Appid of the tenant associated with the host.</p>
     * @param array $TagItem <p>CSIP internal asset tag list.</p>
     * @param array $CloudTag <p>Cloud natively asset Tag list.</p>
     * @param RegionInfo $RegionInfo <p>Region information of the host.</p>
     * @param string $OsInfo <p>Host operating system information (including distro and version number).</p>
     * @param string $ProtectVersion <p>Host protection version. Value: NONE (no protection), BASIC (basic version), PRO (pro edition), ULTIMATE (flagship edition), PRO_LH (lite edition).</p>
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

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
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

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("ProtectVersion",$param) and $param["ProtectVersion"] !== null) {
            $this->ProtectVersion = $param["ProtectVersion"];
        }
    }
}
