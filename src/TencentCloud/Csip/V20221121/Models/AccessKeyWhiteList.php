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
 * Access key alarm rule allowlist
 *
 * @method integer getID() Obtain Allowlist ID
 * @method void setID(integer $ID) Set Allowlist ID
 * @method string getName() Obtain Allowlist policy name
 * @method void setName(string $Name) Set Allowlist policy name
 * @method array getAKList() Obtain ak allowlist
 * @method void setAKList(array $AKList) Set ak allowlist
 * @method array getIPList() Obtain ip allowlist
 * @method void setIPList(array $IPList) Set ip allowlist
 * @method array getIPTypeList() Obtain ip type list IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked). 4: LAN (no remark). 5: LAN (remarked)
 * @method void setIPTypeList(array $IPTypeList) Set ip type list IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked). 4: LAN (no remark). 5: LAN (remarked)
 * @method array getActionList() Obtain API allowlist
 * @method void setActionList(array $ActionList) Set API allowlist
 * @method integer getCallType() Obtain Add the call method to the allowlist
0: all calling methods
1 Console
2 API
-1 Nonexistent
 * @method void setCallType(integer $CallType) Set Add the call method to the allowlist
0: all calling methods
1 Console
2 API
-1 Nonexistent
 * @method array getErrorCodeList() Obtain Error code allowlist (other error codes to be supplemented)
0: successful.

 * @method void setErrorCodeList(array $ErrorCodeList) Set Error code allowlist (other error codes to be supplemented)
0: successful.

 * @method string getRemark() Obtain Policy content/description
 * @method void setRemark(string $Remark) Set Policy content/description
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method integer getAkImportType() Obtain Input type of ak 
0: Select from existing
1: Manually enter
2: Temporary key
3: Persistent key
4: All keys
-1: None
 * @method void setAkImportType(integer $AkImportType) Set Input type of ak 
0: Select from existing
1: Manually enter
2: Temporary key
3: Persistent key
4: All keys
-1: None
 * @method integer getAppID() Obtain Main account AppID
 * @method void setAppID(integer $AppID) Set Main account AppID
 * @method string getUin() Obtain uin of the main account
 * @method void setUin(string $Uin) Set uin of the main account
 * @method string getNickname() Obtain Main account Nickname
 * @method void setNickname(string $Nickname) Set Main account Nickname
 * @method boolean getNeedDealPastAlarm() Obtain Whether to process past alarms
 * @method void setNeedDealPastAlarm(boolean $NeedDealPastAlarm) Set Whether to process past alarms
 * @method integer getDealStatus() Obtain Processing status
0: Processing completed
1 Currently processing
 * @method void setDealStatus(integer $DealStatus) Set Processing status
0: Processing completed
1 Currently processing
 * @method integer getActionType() Obtain Select an API
0: Custom input
1: Select product+api format interaction
2: All interfaces
 * @method void setActionType(integer $ActionType) Set Select an API
0: Custom input
1: Select product+api format interaction
2: All interfaces
 * @method array getAlarmPolicyID() Obtain List of binding policy IDs. If this parameter is empty, the policy takes effect globally.
 * @method void setAlarmPolicyID(array $AlarmPolicyID) Set List of binding policy IDs. If this parameter is empty, the policy takes effect globally.
 */
class AccessKeyWhiteList extends AbstractModel
{
    /**
     * @var integer Allowlist ID
     */
    public $ID;

    /**
     * @var string Allowlist policy name
     */
    public $Name;

    /**
     * @var array ak allowlist
     */
    public $AKList;

    /**
     * @var array ip allowlist
     */
    public $IPList;

    /**
     * @var array ip type list IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked). 4: LAN (no remark). 5: LAN (remarked)
     */
    public $IPTypeList;

    /**
     * @var array API allowlist
     */
    public $ActionList;

    /**
     * @var integer Add the call method to the allowlist
0: all calling methods
1 Console
2 API
-1 Nonexistent
     */
    public $CallType;

    /**
     * @var array Error code allowlist (other error codes to be supplemented)
0: successful.

     */
    public $ErrorCodeList;

    /**
     * @var string Policy content/description
     */
    public $Remark;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var integer Input type of ak 
0: Select from existing
1: Manually enter
2: Temporary key
3: Persistent key
4: All keys
-1: None
     */
    public $AkImportType;

    /**
     * @var integer Main account AppID
     */
    public $AppID;

    /**
     * @var string uin of the main account
     */
    public $Uin;

    /**
     * @var string Main account Nickname
     */
    public $Nickname;

    /**
     * @var boolean Whether to process past alarms
     */
    public $NeedDealPastAlarm;

    /**
     * @var integer Processing status
0: Processing completed
1 Currently processing
     */
    public $DealStatus;

    /**
     * @var integer Select an API
0: Custom input
1: Select product+api format interaction
2: All interfaces
     */
    public $ActionType;

    /**
     * @var array List of binding policy IDs. If this parameter is empty, the policy takes effect globally.
     */
    public $AlarmPolicyID;

    /**
     * @param integer $ID Allowlist ID
     * @param string $Name Allowlist policy name
     * @param array $AKList ak allowlist
     * @param array $IPList ip allowlist
     * @param array $IPTypeList ip type list IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked). 4: LAN (no remark). 5: LAN (remarked)
     * @param array $ActionList API allowlist
     * @param integer $CallType Add the call method to the allowlist
0: all calling methods
1 Console
2 API
-1 Nonexistent
     * @param array $ErrorCodeList Error code allowlist (other error codes to be supplemented)
0: successful.

     * @param string $Remark Policy content/description
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time
     * @param integer $AkImportType Input type of ak 
0: Select from existing
1: Manually enter
2: Temporary key
3: Persistent key
4: All keys
-1: None
     * @param integer $AppID Main account AppID
     * @param string $Uin uin of the main account
     * @param string $Nickname Main account Nickname
     * @param boolean $NeedDealPastAlarm Whether to process past alarms
     * @param integer $DealStatus Processing status
0: Processing completed
1 Currently processing
     * @param integer $ActionType Select an API
0: Custom input
1: Select product+api format interaction
2: All interfaces
     * @param array $AlarmPolicyID List of binding policy IDs. If this parameter is empty, the policy takes effect globally.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AKList",$param) and $param["AKList"] !== null) {
            $this->AKList = $param["AKList"];
        }

        if (array_key_exists("IPList",$param) and $param["IPList"] !== null) {
            $this->IPList = $param["IPList"];
        }

        if (array_key_exists("IPTypeList",$param) and $param["IPTypeList"] !== null) {
            $this->IPTypeList = $param["IPTypeList"];
        }

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = $param["ActionList"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("ErrorCodeList",$param) and $param["ErrorCodeList"] !== null) {
            $this->ErrorCodeList = $param["ErrorCodeList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AkImportType",$param) and $param["AkImportType"] !== null) {
            $this->AkImportType = $param["AkImportType"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("NeedDealPastAlarm",$param) and $param["NeedDealPastAlarm"] !== null) {
            $this->NeedDealPastAlarm = $param["NeedDealPastAlarm"];
        }

        if (array_key_exists("DealStatus",$param) and $param["DealStatus"] !== null) {
            $this->DealStatus = $param["DealStatus"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("AlarmPolicyID",$param) and $param["AlarmPolicyID"] !== null) {
            $this->AlarmPolicyID = $param["AlarmPolicyID"];
        }
    }
}
