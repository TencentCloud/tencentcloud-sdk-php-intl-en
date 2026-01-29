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
 * Access key account information.
 *
 * @method integer getID() Obtain Account ID.
 * @method void setID(integer $ID) Set Account ID.
 * @method string getName() Obtain Account name
 * @method void setName(string $Name) Set Account name
 * @method integer getType() Obtain 0 root account 1 sub-account.
 * @method void setType(integer $Type) Set 0 root account 1 sub-account.
 * @method integer getAccessType() Obtain Access method.
0 API
1 console and API.
 * @method void setAccessType(integer $AccessType) Set Access method.
0 API
1 console and API.
 * @method integer getAdvice() Obtain Security recommendation enumerate 0 normal 1 process immediately 2 recommend reinforcement.
 * @method void setAdvice(integer $Advice) Set Security recommendation enumerate 0 normal 1 process immediately 2 recommend reinforcement.
 * @method array getAccessKeyAlarmList() Obtain Alarm information list.
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) Set Alarm information list.
 * @method array getAccessKeyRiskList() Obtain Risk information list.
 * @method void setAccessKeyRiskList(array $AccessKeyRiskList) Set Risk information list.
 * @method integer getAppID() Obtain Account associate APPID.
 * @method void setAppID(integer $AppID) Set Account associate APPID.
 * @method string getNickname() Obtain Nickname of the main account.
 * @method void setNickname(string $Nickname) Set Nickname of the main account.
 * @method string getSubNickname() Obtain Sub-Account nickname.
 * @method void setSubNickname(string $SubNickname) Set Sub-Account nickname.
 * @method string getUin() Obtain Account Uin belonging to main account.
 * @method void setUin(string $Uin) Set Account Uin belonging to main account.
 * @method string getSubUin() Obtain Account self uin, same as root account uin when it is the root account.
 * @method void setSubUin(string $SubUin) Set Account self uin, same as root account uin when it is the root account.
 * @method string getLoginIP() Obtain Login IP.
 * @method void setLoginIP(string $LoginIP) Set Login IP.
 * @method string getLoginLocation() Obtain Login address.
 * @method void setLoginLocation(string $LoginLocation) Set Login address.
 * @method string getLoginTime() Obtain Log-In time.
 * @method void setLoginTime(string $LoginTime) Set Log-In time.
 * @method string getISP() Obtain ISP name
 * @method void setISP(string $ISP) Set ISP name
 * @method integer getActionFlag() Obtain Whether operation protection is enabled.
0 not enabled.
1: enabled.
 * @method void setActionFlag(integer $ActionFlag) Set Whether operation protection is enabled.
0 not enabled.
1: enabled.
 * @method integer getLoginFlag() Obtain Is login protection enabled?.
0 not enabled.
1: enabled.
 * @method void setLoginFlag(integer $LoginFlag) Set Is login protection enabled?.
0 not enabled.
1: enabled.
 * @method integer getCheckStatus() Obtain 0 means detected. 1 means detecting.
 * @method void setCheckStatus(integer $CheckStatus) Set 0 means detected. 1 means detecting.
 * @method integer getCloudType() Obtain Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
 * @method void setCloudType(integer $CloudType) Set Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
 */
class AccessKeyUser extends AbstractModel
{
    /**
     * @var integer Account ID.
     */
    public $ID;

    /**
     * @var string Account name
     */
    public $Name;

    /**
     * @var integer 0 root account 1 sub-account.
     */
    public $Type;

    /**
     * @var integer Access method.
0 API
1 console and API.
     */
    public $AccessType;

    /**
     * @var integer Security recommendation enumerate 0 normal 1 process immediately 2 recommend reinforcement.
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
     * @var integer Account associate APPID.
     */
    public $AppID;

    /**
     * @var string Nickname of the main account.
     */
    public $Nickname;

    /**
     * @var string Sub-Account nickname.
     */
    public $SubNickname;

    /**
     * @var string Account Uin belonging to main account.
     */
    public $Uin;

    /**
     * @var string Account self uin, same as root account uin when it is the root account.
     */
    public $SubUin;

    /**
     * @var string Login IP.
     */
    public $LoginIP;

    /**
     * @var string Login address.
     */
    public $LoginLocation;

    /**
     * @var string Log-In time.
     */
    public $LoginTime;

    /**
     * @var string ISP name
     */
    public $ISP;

    /**
     * @var integer Whether operation protection is enabled.
0 not enabled.
1: enabled.
     */
    public $ActionFlag;

    /**
     * @var integer Is login protection enabled?.
0 not enabled.
1: enabled.
     */
    public $LoginFlag;

    /**
     * @var integer 0 means detected. 1 means detecting.
     */
    public $CheckStatus;

    /**
     * @var integer Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
     */
    public $CloudType;

    /**
     * @param integer $ID Account ID.
     * @param string $Name Account name
     * @param integer $Type 0 root account 1 sub-account.
     * @param integer $AccessType Access method.
0 API
1 console and API.
     * @param integer $Advice Security recommendation enumerate 0 normal 1 process immediately 2 recommend reinforcement.
     * @param array $AccessKeyAlarmList Alarm information list.
     * @param array $AccessKeyRiskList Risk information list.
     * @param integer $AppID Account associate APPID.
     * @param string $Nickname Nickname of the main account.
     * @param string $SubNickname Sub-Account nickname.
     * @param string $Uin Account Uin belonging to main account.
     * @param string $SubUin Account self uin, same as root account uin when it is the root account.
     * @param string $LoginIP Login IP.
     * @param string $LoginLocation Login address.
     * @param string $LoginTime Log-In time.
     * @param string $ISP ISP name
     * @param integer $ActionFlag Whether operation protection is enabled.
0 not enabled.
1: enabled.
     * @param integer $LoginFlag Is login protection enabled?.
0 not enabled.
1: enabled.
     * @param integer $CheckStatus 0 means detected. 1 means detecting.
     * @param integer $CloudType Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
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
