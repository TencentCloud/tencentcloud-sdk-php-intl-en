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
 * Access key asset information.
 *
 * @method integer getID() Obtain AK id.
 * @method void setID(integer $ID) Set AK id.
 * @method string getName() Obtain AK name.
 * @method void setName(string $Name) Set AK name.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getAppID() Obtain Account associate APPID.
 * @method void setAppID(integer $AppID) Set Account associate APPID.
 * @method string getUin() Obtain Account associate Uin belonging to main account.
 * @method void setUin(string $Uin) Set Account associate Uin belonging to main account.
 * @method string getNickname() Obtain Nickname of the main account.
 * @method void setNickname(string $Nickname) Set Nickname of the main account.
 * @method string getSubUin() Obtain Sub-Account Uin belonging to.
 * @method void setSubUin(string $SubUin) Set Sub-Account Uin belonging to.
 * @method string getSubNickname() Obtain Sub-Account nickname.
 * @method void setSubNickname(string $SubNickname) Set Sub-Account nickname.
 * @method integer getType() Obtain Root account AK.
Sub-Account AK.
2 temporary key.
 * @method void setType(integer $Type) Set Root account AK.
Sub-Account AK.
2 temporary key.
 * @method integer getAdvice() Obtain Security advice enumeration.
Normal.
Process now.
2 recommend reinforcement.
 * @method void setAdvice(integer $Advice) Set Security advice enumeration.
Normal.
Process now.
2 recommend reinforcement.
 * @method array getAccessKeyAlarmList() Obtain Alarm information list.
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) Set Alarm information list.
 * @method array getAccessKeyRiskList() Obtain Risk information list.
 * @method void setAccessKeyRiskList(array $AccessKeyRiskList) Set Risk information list.
 * @method integer getIPCount() Obtain Source IP quantity.
 * @method void setIPCount(integer $IPCount) Set Source IP quantity.
 * @method string getCreateTime() Obtain Creation time.


 * @method void setCreateTime(string $CreateTime) Set Creation time.


 * @method string getLastAccessTime() Obtain Last access Time
 * @method void setLastAccessTime(string $LastAccessTime) Set Last access Time
 * @method integer getStatus() Obtain AK status. 
0: disabled.
1: enabled.
2: deleted (deleted in cam, the security center still retains the previous log).
 * @method void setStatus(integer $Status) Set AK status. 
0: disabled.
1: enabled.
2: deleted (deleted in cam, the security center still retains the previous log).
 * @method integer getCheckStatus() Obtain 0 means detected.
1 indicates detecting.
 * @method void setCheckStatus(integer $CheckStatus) Set 0 means detected.
1 indicates detecting.
 * @method integer getCloudType() Obtain Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
 * @method void setCloudType(integer $CloudType) Set Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
 */
class AccessKeyAsset extends AbstractModel
{
    /**
     * @var integer AK id.
     */
    public $ID;

    /**
     * @var string AK name.
     */
    public $Name;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Account associate APPID.
     */
    public $AppID;

    /**
     * @var string Account associate Uin belonging to main account.
     */
    public $Uin;

    /**
     * @var string Nickname of the main account.
     */
    public $Nickname;

    /**
     * @var string Sub-Account Uin belonging to.
     */
    public $SubUin;

    /**
     * @var string Sub-Account nickname.
     */
    public $SubNickname;

    /**
     * @var integer Root account AK.
Sub-Account AK.
2 temporary key.
     */
    public $Type;

    /**
     * @var integer Security advice enumeration.
Normal.
Process now.
2 recommend reinforcement.
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
     * @var integer Source IP quantity.
     */
    public $IPCount;

    /**
     * @var string Creation time.


     */
    public $CreateTime;

    /**
     * @var string Last access Time
     */
    public $LastAccessTime;

    /**
     * @var integer AK status. 
0: disabled.
1: enabled.
2: deleted (deleted in cam, the security center still retains the previous log).
     */
    public $Status;

    /**
     * @var integer 0 means detected.
1 indicates detecting.
     */
    public $CheckStatus;

    /**
     * @var integer Cloud vendor type 0: tencent cloud 1: amazon web services 2: microsoft azure 3: google cloud 4: alibaba cloud 5: huawei cloud.
     */
    public $CloudType;

    /**
     * @param integer $ID AK id.
     * @param string $Name AK name.
     * @param string $Remark Remarks
     * @param integer $AppID Account associate APPID.
     * @param string $Uin Account associate Uin belonging to main account.
     * @param string $Nickname Nickname of the main account.
     * @param string $SubUin Sub-Account Uin belonging to.
     * @param string $SubNickname Sub-Account nickname.
     * @param integer $Type Root account AK.
Sub-Account AK.
2 temporary key.
     * @param integer $Advice Security advice enumeration.
Normal.
Process now.
2 recommend reinforcement.
     * @param array $AccessKeyAlarmList Alarm information list.
     * @param array $AccessKeyRiskList Risk information list.
     * @param integer $IPCount Source IP quantity.
     * @param string $CreateTime Creation time.


     * @param string $LastAccessTime Last access Time
     * @param integer $Status AK status. 
0: disabled.
1: enabled.
2: deleted (deleted in cam, the security center still retains the previous log).
     * @param integer $CheckStatus 0 means detected.
1 indicates detecting.
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubNickname",$param) and $param["SubNickname"] !== null) {
            $this->SubNickname = $param["SubNickname"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("IPCount",$param) and $param["IPCount"] !== null) {
            $this->IPCount = $param["IPCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
