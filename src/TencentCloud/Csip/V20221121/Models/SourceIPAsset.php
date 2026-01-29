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
 * Access key asset information (source IP perspective).
 *
 * @method integer getID() Obtain id of the source IP.
 * @method void setID(integer $ID) Set id of the source IP.
 * @method string getSourceIP() Obtain Source IP.
 * @method void setSourceIP(string $SourceIP) Set Source IP.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getAppID() Obtain Account associate APPID.
 * @method void setAppID(integer $AppID) Set Account associate APPID.
 * @method string getRegion() Obtain IP region.
 * @method void setRegion(string $Region) Set IP region.
 * @method integer getEventType() Obtain API call method.
-1: uncounted.
0: console invocation.
1:API
 * @method void setEventType(integer $EventType) Set API call method.
-1: uncounted.
0: console invocation.
1:API
 * @method integer getIPType() Obtain IP type.
0: within the account (unremarked).
1: external accounts (unremarked).
2: within the account (remarked).
3: external account (remarked).
 * @method void setIPType(integer $IPType) Set IP type.
0: within the account (unremarked).
1: external accounts (unremarked).
2: within the account (remarked).
3: external account (remarked).
 * @method array getAccessKeyAlarmList() Obtain Alarm information list.
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) Set Alarm information list.
 * @method array getAKInfo() Obtain ak information list.
 * @method void setAKInfo(array $AKInfo) Set ak information list.
 * @method integer getActionCount() Obtain Number of API calls.
 * @method void setActionCount(integer $ActionCount) Set Number of API calls.
 * @method string getLastAccessTime() Obtain Last access Time
 * @method void setLastAccessTime(string $LastAccessTime) Set Last access Time
 * @method string getInstanceID() Obtain IP associated instance ID. if an empty string, represents an asset not within the account.
 * @method void setInstanceID(string $InstanceID) Set IP associated instance ID. if an empty string, represents an asset not within the account.
 * @method string getInstanceName() Obtain Associated instance name.
 * @method void setInstanceName(string $InstanceName) Set Associated instance name.
 * @method string getUin() Obtain Account associate Uin.
 * @method void setUin(string $Uin) Set Account associate Uin.
 * @method string getNickname() Obtain Nickname.
 * @method void setNickname(string $Nickname) Set Nickname.
 * @method boolean getShowStatus() Obtain Display status.
 * @method void setShowStatus(boolean $ShowStatus) Set Display status.
 * @method string getISP() Obtain ISP field.
 * @method void setISP(string $ISP) Set ISP field.
 * @method array getVpcInfo() Obtain vpc information outside the account.
 * @method void setVpcInfo(array $VpcInfo) Set vpc information outside the account.
 * @method integer getCloudType() Obtain Cloud type.
0 for tencent cloud.
 * @method void setCloudType(integer $CloudType) Set Cloud type.
0 for tencent cloud.
 */
class SourceIPAsset extends AbstractModel
{
    /**
     * @var integer id of the source IP.
     */
    public $ID;

    /**
     * @var string Source IP.
     */
    public $SourceIP;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Account associate APPID.
     */
    public $AppID;

    /**
     * @var string IP region.
     */
    public $Region;

    /**
     * @var integer API call method.
-1: uncounted.
0: console invocation.
1:API
     */
    public $EventType;

    /**
     * @var integer IP type.
0: within the account (unremarked).
1: external accounts (unremarked).
2: within the account (remarked).
3: external account (remarked).
     */
    public $IPType;

    /**
     * @var array Alarm information list.
     */
    public $AccessKeyAlarmList;

    /**
     * @var array ak information list.
     */
    public $AKInfo;

    /**
     * @var integer Number of API calls.
     */
    public $ActionCount;

    /**
     * @var string Last access Time
     */
    public $LastAccessTime;

    /**
     * @var string IP associated instance ID. if an empty string, represents an asset not within the account.
     */
    public $InstanceID;

    /**
     * @var string Associated instance name.
     */
    public $InstanceName;

    /**
     * @var string Account associate Uin.
     */
    public $Uin;

    /**
     * @var string Nickname.
     */
    public $Nickname;

    /**
     * @var boolean Display status.
     */
    public $ShowStatus;

    /**
     * @var string ISP field.
     */
    public $ISP;

    /**
     * @var array vpc information outside the account.
     */
    public $VpcInfo;

    /**
     * @var integer Cloud type.
0 for tencent cloud.
     */
    public $CloudType;

    /**
     * @param integer $ID id of the source IP.
     * @param string $SourceIP Source IP.
     * @param string $Remark Remarks
     * @param integer $AppID Account associate APPID.
     * @param string $Region IP region.
     * @param integer $EventType API call method.
-1: uncounted.
0: console invocation.
1:API
     * @param integer $IPType IP type.
0: within the account (unremarked).
1: external accounts (unremarked).
2: within the account (remarked).
3: external account (remarked).
     * @param array $AccessKeyAlarmList Alarm information list.
     * @param array $AKInfo ak information list.
     * @param integer $ActionCount Number of API calls.
     * @param string $LastAccessTime Last access Time
     * @param string $InstanceID IP associated instance ID. if an empty string, represents an asset not within the account.
     * @param string $InstanceName Associated instance name.
     * @param string $Uin Account associate Uin.
     * @param string $Nickname Nickname.
     * @param boolean $ShowStatus Display status.
     * @param string $ISP ISP field.
     * @param array $VpcInfo vpc information outside the account.
     * @param integer $CloudType Cloud type.
0 for tencent cloud.
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

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("IPType",$param) and $param["IPType"] !== null) {
            $this->IPType = $param["IPType"];
        }

        if (array_key_exists("AccessKeyAlarmList",$param) and $param["AccessKeyAlarmList"] !== null) {
            $this->AccessKeyAlarmList = [];
            foreach ($param["AccessKeyAlarmList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyAlarmList, $obj);
            }
        }

        if (array_key_exists("AKInfo",$param) and $param["AKInfo"] !== null) {
            $this->AKInfo = [];
            foreach ($param["AKInfo"] as $key => $value){
                $obj = new AKInfo();
                $obj->deserialize($value);
                array_push($this->AKInfo, $obj);
            }
        }

        if (array_key_exists("ActionCount",$param) and $param["ActionCount"] !== null) {
            $this->ActionCount = $param["ActionCount"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("ShowStatus",$param) and $param["ShowStatus"] !== null) {
            $this->ShowStatus = $param["ShowStatus"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new SourceIPVpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
