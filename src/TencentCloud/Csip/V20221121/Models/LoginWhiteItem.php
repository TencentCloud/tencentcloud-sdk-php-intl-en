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
 * Abnormal login allowlist rule item (shared by custom and self-learning, distinguished by Type)
 *
 * @method string getType() Obtain <p>Allowlist type: Custom - custom allowlist; Learn - self-learning allowlist</p>
 * @method void setType(string $Type) Set <p>Allowlist type: Custom - custom allowlist; Learn - self-learning allowlist</p>
 * @method integer getAppId() Obtain <p>AppId of the account associated with the policy, used to distinguish and locate for subsequent editing in multi-account scenarios</p>
 * @method void setAppId(integer $AppId) Set <p>AppId of the account associated with the policy, used to distinguish and locate for subsequent editing in multi-account scenarios</p>
 * @method integer getId() Obtain <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
 * @method void setId(integer $Id) Set <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
 * @method string getSrcIp() Obtain <p>Login source IP (comma-separated); self-learning allowlist is always empty</p>
 * @method void setSrcIp(string $SrcIp) Set <p>Login source IP (comma-separated); self-learning allowlist is always empty</p>
 * @method string getUserName() Obtain <p>Login usernames (separate with commas); self-learning allowlist is always empty</p>
 * @method void setUserName(string $UserName) Set <p>Login usernames (separate with commas); self-learning allowlist is always empty</p>
 * @method string getStartTime() Obtain <p>Starting HH:MM when logging in; the self-learning allowlist is always empty</p>
 * @method void setStartTime(string $StartTime) Set <p>Starting HH:MM when logging in; the self-learning allowlist is always empty</p>
 * @method string getEndTime() Obtain <p>Login period ends at HH:MM; self-learning allowlist is always empty</p>
 * @method void setEndTime(string $EndTime) Set <p>Login period ends at HH:MM; self-learning allowlist is always empty</p>
 * @method array getPlaces() Obtain <p>Common login location list</p>
 * @method void setPlaces(array $Places) Set <p>Common login location list</p>
 * @method string getLocations() Obtain <p>Common login location display copy (comma-separated) for direct display in the list</p>
 * @method void setLocations(string $Locations) Set <p>Common login location display copy (comma-separated) for direct display in the list</p>
 * @method integer getScope() Obtain <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
 * @method void setScope(integer $Scope) Set <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
 * @method array getQUUIDS() Obtain <p>Effective host QUUID list (one-to-one correspondence with InstanceIDs)</p>
 * @method void setQUUIDS(array $QUUIDS) Set <p>Effective host QUUID list (one-to-one correspondence with InstanceIDs)</p>
 * @method array getInstanceIDs() Obtain <p>List of host instance IDs that take effect (one-to-one correspondence with QUUIDS)</p>
 * @method void setInstanceIDs(array $InstanceIDs) Set <p>List of host instance IDs that take effect (one-to-one correspondence with QUUIDS)</p>
 * @method array getExcludeQUUIDS() Obtain <p>Remove host QUUID list</p>
 * @method void setExcludeQUUIDS(array $ExcludeQUUIDS) Set <p>Remove host QUUID list</p>
 * @method array getExcludeInstanceIDs() Obtain <p>Host instance ID list for removal</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) Set <p>Host instance ID list for removal</p>
 * @method array getTagItems() Obtain <p>List of effective tag details.</p>
 * @method void setTagItems(array $TagItems) Set <p>List of effective tag details.</p>
 * @method integer getHostCount() Obtain <p>Hosts: custom to the specified number of hosts (0 when Scope=1, all hosts displayed on the front-end); self-learning is the number of deduplicated hosts in the group</p>
 * @method void setHostCount(integer $HostCount) Set <p>Hosts: custom to the specified number of hosts (0 when Scope=1, all hosts displayed on the front-end); self-learning is the number of deduplicated hosts in the group</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getCreateTime() Obtain <p>Creation time, format 2006-01-02 15:04:05</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time, format 2006-01-02 15:04:05</p>
 * @method string getModifyTime() Obtain <p>Last modification time, format 2006-01-02 15:04:05</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Last modification time, format 2006-01-02 15:04:05</p>
 */
class LoginWhiteItem extends AbstractModel
{
    /**
     * @var string <p>Allowlist type: Custom - custom allowlist; Learn - self-learning allowlist</p>
     */
    public $Type;

    /**
     * @var integer <p>AppId of the account associated with the policy, used to distinguish and locate for subsequent editing in multi-account scenarios</p>
     */
    public $AppId;

    /**
     * @var integer <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
     */
    public $Id;

    /**
     * @var string <p>Login source IP (comma-separated); self-learning allowlist is always empty</p>
     */
    public $SrcIp;

    /**
     * @var string <p>Login usernames (separate with commas); self-learning allowlist is always empty</p>
     */
    public $UserName;

    /**
     * @var string <p>Starting HH:MM when logging in; the self-learning allowlist is always empty</p>
     */
    public $StartTime;

    /**
     * @var string <p>Login period ends at HH:MM; self-learning allowlist is always empty</p>
     */
    public $EndTime;

    /**
     * @var array <p>Common login location list</p>
     */
    public $Places;

    /**
     * @var string <p>Common login location display copy (comma-separated) for direct display in the list</p>
     */
    public $Locations;

    /**
     * @var integer <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
     */
    public $Scope;

    /**
     * @var array <p>Effective host QUUID list (one-to-one correspondence with InstanceIDs)</p>
     */
    public $QUUIDS;

    /**
     * @var array <p>List of host instance IDs that take effect (one-to-one correspondence with QUUIDS)</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>Remove host QUUID list</p>
     */
    public $ExcludeQUUIDS;

    /**
     * @var array <p>Host instance ID list for removal</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @var array <p>List of effective tag details.</p>
     */
    public $TagItems;

    /**
     * @var integer <p>Hosts: custom to the specified number of hosts (0 when Scope=1, all hosts displayed on the front-end); self-learning is the number of deduplicated hosts in the group</p>
     */
    public $HostCount;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Creation time, format 2006-01-02 15:04:05</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modification time, format 2006-01-02 15:04:05</p>
     */
    public $ModifyTime;

    /**
     * @param string $Type <p>Allowlist type: Custom - custom allowlist; Learn - self-learning allowlist</p>
     * @param integer $AppId <p>AppId of the account associated with the policy, used to distinguish and locate for subsequent editing in multi-account scenarios</p>
     * @param integer $Id <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
     * @param string $SrcIp <p>Login source IP (comma-separated); self-learning allowlist is always empty</p>
     * @param string $UserName <p>Login usernames (separate with commas); self-learning allowlist is always empty</p>
     * @param string $StartTime <p>Starting HH:MM when logging in; the self-learning allowlist is always empty</p>
     * @param string $EndTime <p>Login period ends at HH:MM; self-learning allowlist is always empty</p>
     * @param array $Places <p>Common login location list</p>
     * @param string $Locations <p>Common login location display copy (comma-separated) for direct display in the list</p>
     * @param integer $Scope <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
     * @param array $QUUIDS <p>Effective host QUUID list (one-to-one correspondence with InstanceIDs)</p>
     * @param array $InstanceIDs <p>List of host instance IDs that take effect (one-to-one correspondence with QUUIDS)</p>
     * @param array $ExcludeQUUIDS <p>Remove host QUUID list</p>
     * @param array $ExcludeInstanceIDs <p>Host instance ID list for removal</p>
     * @param array $TagItems <p>List of effective tag details.</p>
     * @param integer $HostCount <p>Hosts: custom to the specified number of hosts (0 when Scope=1, all hosts displayed on the front-end); self-learning is the number of deduplicated hosts in the group</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $CreateTime <p>Creation time, format 2006-01-02 15:04:05</p>
     * @param string $ModifyTime <p>Last modification time, format 2006-01-02 15:04:05</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new LoginWhitePlace();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("Locations",$param) and $param["Locations"] !== null) {
            $this->Locations = $param["Locations"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("QUUIDS",$param) and $param["QUUIDS"] !== null) {
            $this->QUUIDS = $param["QUUIDS"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeQUUIDS",$param) and $param["ExcludeQUUIDS"] !== null) {
            $this->ExcludeQUUIDS = $param["ExcludeQUUIDS"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new EDRRuleTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
