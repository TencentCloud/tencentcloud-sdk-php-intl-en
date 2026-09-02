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
 * Access key account information
 *
 * @method integer getID() Obtain Account ID
 * @method void setID(integer $ID) Set Account ID
 * @method string getName() Obtain Account name
 * @method void setName(string $Name) Set Account name
 * @method integer getType() Obtain 0 Root account 1 Sub-account
 * @method void setType(integer $Type) Set 0 Root account 1 Sub-account
 * @method integer getAccessType() Obtain Access method
0 API
1 Console and API
 * @method void setAccessType(integer $AccessType) Set Access method
0 API
1 Console and API
 * @method integer getAdvice() Obtain Security advice. Enumerated values: 0: Normal. 1: Process now. 2: Hardening recommended.
 * @method void setAdvice(integer $Advice) Set Security advice. Enumerated values: 0: Normal. 1: Process now. 2: Hardening recommended.
 * @method array getAccessKeyAlarmList() Obtain Alarm information list.
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) Set Alarm information list.
 * @method array getAccessKeyRiskList() Obtain Risk information list.
 * @method void setAccessKeyRiskList(array $AccessKeyRiskList) Set Risk information list.
 * @method integer getAppID() Obtain APPID of the account
 * @method void setAppID(integer $AppID) Set APPID of the account
 * @method string getNickname() Obtain Main account nickname
 * @method void setNickname(string $Nickname) Set Main account nickname
 * @method string getSubNickname() Obtain Sub-account nickname
 * @method void setSubNickname(string $SubNickname) Set Sub-account nickname
 * @method string getUin() Obtain Uin of the main account to which the account belongs
 * @method void setUin(string $Uin) Set Uin of the main account to which the account belongs
 * @method string getSubUin() Obtain Account's own uin. For a root account, it is the same as the root account uin.
 * @method void setSubUin(string $SubUin) Set Account's own uin. For a root account, it is the same as the root account uin.
 * @method string getLoginIP() Obtain Login IP
 * @method void setLoginIP(string $LoginIP) Set Login IP
 * @method string getLoginLocation() Obtain Login address.
 * @method void setLoginLocation(string $LoginLocation) Set Login address.
 * @method string getLoginTime() Obtain Log-in time
 * @method void setLoginTime(string $LoginTime) Set Log-in time
 * @method string getISP() Obtain ISP name
 * @method void setISP(string $ISP) Set ISP name
 * @method integer getActionFlag() Obtain Whether operation protection is enabled
0: not enabled
1: On.
 * @method void setActionFlag(integer $ActionFlag) Set Whether operation protection is enabled
0: not enabled
1: On.
 * @method integer getLoginFlag() Obtain Whether login protection is enabled
0: not enabled
1: On.
 * @method void setLoginFlag(integer $LoginFlag) Set Whether login protection is enabled
0: not enabled
1: On.
 * @method integer getCheckStatus() Obtain 0 indicates detected, and 1 indicates in-progress detection.
 * @method void setCheckStatus(integer $CheckStatus) Set 0 indicates detected, and 1 indicates in-progress detection.
 * @method integer getCloudType() Obtain Cloud vendor type. 0: Tencent Cloud. 1: Amazon Web Services. 2: Microsoft Azure. 3: Google Cloud. 4: Alibaba Cloud. 5: Huawei Cloud
 * @method void setCloudType(integer $CloudType) Set Cloud vendor type. 0: Tencent Cloud. 1: Amazon Web Services. 2: Microsoft Azure. 3: Google Cloud. 4: Alibaba Cloud. 5: Huawei Cloud
 */
class AccessKeyUser extends AbstractModel
{
    /**
     * @var integer Account ID
     */
    public $ID;

    /**
     * @var string Account name
     */
    public $Name;

    /**
     * @var integer 0 Root account 1 Sub-account
     */
    public $Type;

    /**
     * @var integer Access method
0 API
1 Console and API
     */
    public $AccessType;

    /**
     * @var integer Security advice. Enumerated values: 0: Normal. 1: Process now. 2: Hardening recommended.
     */
    public $Advice;

    /**
     * @var array Alarm information list.
     */
    public $AccessKeyAlarmList;

    /**
     * @var array Risk information list.
     */
    public $AccessKeyRiskList;

    /**
     * @var integer APPID of the account
     */
    public $AppID;

    /**
     * @var string Main account nickname
     */
    public $Nickname;

    /**
     * @var string Sub-account nickname
     */
    public $SubNickname;

    /**
     * @var string Uin of the main account to which the account belongs
     */
    public $Uin;

    /**
     * @var string Account's own uin. For a root account, it is the same as the root account uin.
     */
    public $SubUin;

    /**
     * @var string Login IP
     */
    public $LoginIP;

    /**
     * @var string Login address.
     */
    public $LoginLocation;

    /**
     * @var string Log-in time
     */
    public $LoginTime;

    /**
     * @var string ISP name
     */
    public $ISP;

    /**
     * @var integer Whether operation protection is enabled
0: not enabled
1: On.
     */
    public $ActionFlag;

    /**
     * @var integer Whether login protection is enabled
0: not enabled
1: On.
     */
    public $LoginFlag;

    /**
     * @var integer 0 indicates detected, and 1 indicates in-progress detection.
     */
    public $CheckStatus;

    /**
     * @var integer Cloud vendor type. 0: Tencent Cloud. 1: Amazon Web Services. 2: Microsoft Azure. 3: Google Cloud. 4: Alibaba Cloud. 5: Huawei Cloud
     */
    public $CloudType;

    /**
     * @param integer $ID Account ID
     * @param string $Name Account name
     * @param integer $Type 0 Root account 1 Sub-account
     * @param integer $AccessType Access method
0 API
1 Console and API
     * @param integer $Advice Security advice. Enumerated values: 0: Normal. 1: Process now. 2: Hardening recommended.
     * @param array $AccessKeyAlarmList Alarm information list.
     * @param array $AccessKeyRiskList Risk information list.
     * @param integer $AppID APPID of the account
     * @param string $Nickname Main account nickname
     * @param string $SubNickname Sub-account nickname
     * @param string $Uin Uin of the main account to which the account belongs
     * @param string $SubUin Account's own uin. For a root account, it is the same as the root account uin.
     * @param string $LoginIP Login IP
     * @param string $LoginLocation Login address.
     * @param string $LoginTime Log-in time
     * @param string $ISP ISP name
     * @param integer $ActionFlag Whether operation protection is enabled
0: not enabled
1: On.
     * @param integer $LoginFlag Whether login protection is enabled
0: not enabled
1: On.
     * @param integer $CheckStatus 0 indicates detected, and 1 indicates in-progress detection.
     * @param integer $CloudType Cloud vendor type. 0: Tencent Cloud. 1: Amazon Web Services. 2: Microsoft Azure. 3: Google Cloud. 4: Alibaba Cloud. 5: Huawei Cloud
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Advice",$param) and $param["Advice"] !== null) {
            $this->Advice = $param["Advice"];
        }

        if (array_key_exists("AccessKeyAlarmList",$param) and $param["AccessKeyAlarmList"] !== null) {
            $this->AccessKeyAlarmList = [];
            foreach ($param["AccessKeyAlarmList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyAlarmList, $obj);
            }
        }

        if (array_key_exists("AccessKeyRiskList",$param) and $param["AccessKeyRiskList"] !== null) {
            $this->AccessKeyRiskList = [];
            foreach ($param["AccessKeyRiskList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyRiskList, $obj);
            }
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("SubNickname",$param) and $param["SubNickname"] !== null) {
            $this->SubNickname = $param["SubNickname"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("LoginIP",$param) and $param["LoginIP"] !== null) {
            $this->LoginIP = $param["LoginIP"];
        }

        if (array_key_exists("LoginLocation",$param) and $param["LoginLocation"] !== null) {
            $this->LoginLocation = $param["LoginLocation"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = $param["ActionFlag"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = $param["LoginFlag"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
