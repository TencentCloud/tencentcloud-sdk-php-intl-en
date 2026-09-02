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
 * Access key asset information
 *
 * @method integer getID() Obtain id of the AK
 * @method void setID(integer $ID) Set id of the AK
 * @method string getName() Obtain AK name
 * @method void setName(string $Name) Set AK name
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getAppID() Obtain APPID of the account
 * @method void setAppID(integer $AppID) Set APPID of the account
 * @method string getUin() Obtain Uin of the main account
 * @method void setUin(string $Uin) Set Uin of the main account
 * @method string getNickname() Obtain Account nickname
 * @method void setNickname(string $Nickname) Set Account nickname
 * @method string getSubUin() Obtain Sub-account Uin it belongs to
 * @method void setSubUin(string $SubUin) Set Sub-account Uin it belongs to
 * @method string getSubNickname() Obtain Sub-account nickname
 * @method void setSubNickname(string $SubNickname) Set Sub-account nickname
 * @method integer getType() Obtain 0 root account AK
1 Sub-account AK
2 Temporary key
 * @method void setType(integer $Type) Set 0 root account AK
1 Sub-account AK
2 Temporary key
 * @method integer getAdvice() Obtain Security advice Enumerate
0 Normal
1 Process now
2. Hardening is recommended.
 * @method void setAdvice(integer $Advice) Set Security advice Enumerate
0 Normal
1 Process now
2. Hardening is recommended.
 * @method array getAccessKeyAlarmList() Obtain Alarm information list.
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) Set Alarm information list.
 * @method array getAccessKeyRiskList() Obtain Risk information list.
 * @method void setAccessKeyRiskList(array $AccessKeyRiskList) Set Risk information list.
 * @method integer getIPCount() Obtain Source IP quantity
 * @method void setIPCount(integer $IPCount) Set Source IP quantity
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getLastAccessTime() Obtain Last access Time
 * @method void setLastAccessTime(string $LastAccessTime) Set Last access Time
 * @method integer getStatus() Obtain AK status 
0: Disable
1: Enabled
2: Deleted (already deleted on the cam side, and the security center still retains earlier records)
 * @method void setStatus(integer $Status) Set AK status 
0: Disable
1: Enabled
2: Deleted (already deleted on the cam side, and the security center still retains earlier records)
 * @method integer getCheckStatus() Obtain 0 indicates detected
1: Indicates detection in progress
 * @method void setCheckStatus(integer $CheckStatus) Set 0 indicates detected
1: Indicates detection in progress
 * @method integer getCloudType() Obtain Cloud vendor type. 0: Tencent Cloud. 1: Amazon Web Services. 2: Microsoft Azure. 3: Google Cloud. 4: Alibaba Cloud. 5: Huawei Cloud
 * @method void setCloudType(integer $CloudType) Set Cloud vendor type. 0: Tencent Cloud. 1: Amazon Web Services. 2: Microsoft Azure. 3: Google Cloud. 4: Alibaba Cloud. 5: Huawei Cloud
 */
class AccessKeyAsset extends AbstractModel
{
    /**
     * @var integer id of the AK
     */
    public $ID;

    /**
     * @var string AK name
     */
    public $Name;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer APPID of the account
     */
    public $AppID;

    /**
     * @var string Uin of the main account
     */
    public $Uin;

    /**
     * @var string Account nickname
     */
    public $Nickname;

    /**
     * @var string Sub-account Uin it belongs to
     */
    public $SubUin;

    /**
     * @var string Sub-account nickname
     */
    public $SubNickname;

    /**
     * @var integer 0 root account AK
1 Sub-account AK
2 Temporary key
     */
    public $Type;

    /**
     * @var integer Security advice Enumerate
0 Normal
1 Process now
2. Hardening is recommended.
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
     * @var integer Source IP quantity
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
     * @var integer AK status 
0: Disable
1: Enabled
2: Deleted (already deleted on the cam side, and the security center still retains earlier records)
     */
    public $Status;

    /**
     * @var integer 0 indicates detected
1: Indicates detection in progress
     */
    public $CheckStatus;

    /**
     * @var integer Cloud vendor type. 0: Tencent Cloud. 1: Amazon Web Services. 2: Microsoft Azure. 3: Google Cloud. 4: Alibaba Cloud. 5: Huawei Cloud
     */
    public $CloudType;

    /**
     * @param integer $ID id of the AK
     * @param string $Name AK name
     * @param string $Remark Remarks
     * @param integer $AppID APPID of the account
     * @param string $Uin Uin of the main account
     * @param string $Nickname Account nickname
     * @param string $SubUin Sub-account Uin it belongs to
     * @param string $SubNickname Sub-account nickname
     * @param integer $Type 0 root account AK
1 Sub-account AK
2 Temporary key
     * @param integer $Advice Security advice Enumerate
0 Normal
1 Process now
2. Hardening is recommended.
     * @param array $AccessKeyAlarmList Alarm information list.
     * @param array $AccessKeyRiskList Risk information list.
     * @param integer $IPCount Source IP quantity
     * @param string $CreateTime Creation time.
     * @param string $LastAccessTime Last access Time
     * @param integer $Status AK status 
0: Disable
1: Enabled
2: Deleted (already deleted on the cam side, and the security center still retains earlier records)
     * @param integer $CheckStatus 0 indicates detected
1: Indicates detection in progress
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
