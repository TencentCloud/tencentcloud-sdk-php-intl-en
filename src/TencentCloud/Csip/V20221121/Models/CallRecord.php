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
 * Record details.
 *
 * @method string getCallID() Obtain Invocation record ID.
 * @method void setCallID(string $CallID) Set Invocation record ID.
 * @method string getAccessKey() Obtain Access key.
 * @method void setAccessKey(string $AccessKey) Set Access key.
 * @method string getAccessKeyRemark() Obtain Access key remark.
 * @method void setAccessKeyRemark(string $AccessKeyRemark) Set Access key remark.
 * @method integer getAccessKeyID() Obtain Access key ID.
 * @method void setAccessKeyID(integer $AccessKeyID) Set Access key ID.
 * @method string getSourceIP() Obtain Source IP of the call.
 * @method void setSourceIP(string $SourceIP) Set Source IP of the call.
 * @method string getSourceIPRemark() Obtain Source IP of the call remark.
 * @method void setSourceIPRemark(string $SourceIPRemark) Set Source IP of the call remark.
 * @method string getRegion() Obtain Source IP region of the call.
 * @method void setRegion(string $Region) Set Source IP region of the call.
 * @method integer getIPType() Obtain IP type 0: within the account (unremarked) 1: outside the account (unremarked) 2: within the account (remarked) 3: outside the account (remarked).
 * @method void setIPType(integer $IPType) Set IP type 0: within the account (unremarked) 1: outside the account (unremarked) 2: within the account (remarked) 3: outside the account (remarked).
 * @method string getEventName() Obtain Call interface name.
 * @method void setEventName(string $EventName) Set Call interface name.
 * @method string getProductName() Obtain Call the product name.
 * @method void setProductName(string $ProductName) Set Call the product name.
 * @method integer getEventType() Obtain Invocation type.
0: console invocation.
1:API
 * @method void setEventType(integer $EventType) Set Invocation type.
0: console invocation.
1:API
 * @method string getUserType() Obtain Type of user: CAMUser/root/AssumedRole.

 * @method void setUserType(string $UserType) Set Type of user: CAMUser/root/AssumedRole.

 * @method string getUserName() Obtain User/Role name.
 * @method void setUserName(string $UserName) Set User/Role name.
 * @method array getPolicySet() Obtain Policy List
 * @method void setPolicySet(array $PolicySet) Set Policy List
 * @method integer getCallCount() Obtain Number of calls.
 * @method void setCallCount(integer $CallCount) Set Number of calls.
 * @method integer getCode() Obtain Error code.
0: Successful
 * @method void setCode(integer $Code) Set Error code.
0: Successful
 * @method string getFirstCallTime() Obtain First time call time.
 * @method void setFirstCallTime(string $FirstCallTime) Set First time call time.
 * @method string getLastCallTime() Obtain Call time.
 * @method void setLastCallTime(string $LastCallTime) Set Call time.
 * @method string getInstanceID() Obtain IP associated asset ID. if an empty string, means not associated with.
 * @method void setInstanceID(string $InstanceID) Set IP associated asset ID. if an empty string, means not associated with.
 * @method string getInstanceName() Obtain Associated asset name of the IP.
 * @method void setInstanceName(string $InstanceName) Set Associated asset name of the IP.
 * @method string getDate() Obtain Aggregate date.
 * @method void setDate(string $Date) Set Aggregate date.
 * @method integer getAppID() Obtain appid
 * @method void setAppID(integer $AppID) Set appid
 * @method boolean getShowStatus() Obtain Display status.
 * @method void setShowStatus(boolean $ShowStatus) Set Display status.
 * @method string getISP() Obtain Carrier.
 * @method void setISP(string $ISP) Set Carrier.
 * @method array getVpcInfo() Obtain vpc information list outside the account.
 * @method void setVpcInfo(array $VpcInfo) Set vpc information list outside the account.
 * @method array getReqClient() Obtain Request client list.
 * @method void setReqClient(array $ReqClient) Set Request client list.
 */
class CallRecord extends AbstractModel
{
    /**
     * @var string Invocation record ID.
     */
    public $CallID;

    /**
     * @var string Access key.
     */
    public $AccessKey;

    /**
     * @var string Access key remark.
     */
    public $AccessKeyRemark;

    /**
     * @var integer Access key ID.
     */
    public $AccessKeyID;

    /**
     * @var string Source IP of the call.
     */
    public $SourceIP;

    /**
     * @var string Source IP of the call remark.
     */
    public $SourceIPRemark;

    /**
     * @var string Source IP region of the call.
     */
    public $Region;

    /**
     * @var integer IP type 0: within the account (unremarked) 1: outside the account (unremarked) 2: within the account (remarked) 3: outside the account (remarked).
     */
    public $IPType;

    /**
     * @var string Call interface name.
     */
    public $EventName;

    /**
     * @var string Call the product name.
     */
    public $ProductName;

    /**
     * @var integer Invocation type.
0: console invocation.
1:API
     */
    public $EventType;

    /**
     * @var string Type of user: CAMUser/root/AssumedRole.

     */
    public $UserType;

    /**
     * @var string User/Role name.
     */
    public $UserName;

    /**
     * @var array Policy List
     */
    public $PolicySet;

    /**
     * @var integer Number of calls.
     */
    public $CallCount;

    /**
     * @var integer Error code.
0: Successful
     */
    public $Code;

    /**
     * @var string First time call time.
     */
    public $FirstCallTime;

    /**
     * @var string Call time.
     */
    public $LastCallTime;

    /**
     * @var string IP associated asset ID. if an empty string, means not associated with.
     */
    public $InstanceID;

    /**
     * @var string Associated asset name of the IP.
     */
    public $InstanceName;

    /**
     * @var string Aggregate date.
     */
    public $Date;

    /**
     * @var integer appid
     */
    public $AppID;

    /**
     * @var boolean Display status.
     */
    public $ShowStatus;

    /**
     * @var string Carrier.
     */
    public $ISP;

    /**
     * @var array vpc information list outside the account.
     */
    public $VpcInfo;

    /**
     * @var array Request client list.
     */
    public $ReqClient;

    /**
     * @param string $CallID Invocation record ID.
     * @param string $AccessKey Access key.
     * @param string $AccessKeyRemark Access key remark.
     * @param integer $AccessKeyID Access key ID.
     * @param string $SourceIP Source IP of the call.
     * @param string $SourceIPRemark Source IP of the call remark.
     * @param string $Region Source IP region of the call.
     * @param integer $IPType IP type 0: within the account (unremarked) 1: outside the account (unremarked) 2: within the account (remarked) 3: outside the account (remarked).
     * @param string $EventName Call interface name.
     * @param string $ProductName Call the product name.
     * @param integer $EventType Invocation type.
0: console invocation.
1:API
     * @param string $UserType Type of user: CAMUser/root/AssumedRole.

     * @param string $UserName User/Role name.
     * @param array $PolicySet Policy List
     * @param integer $CallCount Number of calls.
     * @param integer $Code Error code.
0: Successful
     * @param string $FirstCallTime First time call time.
     * @param string $LastCallTime Call time.
     * @param string $InstanceID IP associated asset ID. if an empty string, means not associated with.
     * @param string $InstanceName Associated asset name of the IP.
     * @param string $Date Aggregate date.
     * @param integer $AppID appid
     * @param boolean $ShowStatus Display status.
     * @param string $ISP Carrier.
     * @param array $VpcInfo vpc information list outside the account.
     * @param array $ReqClient Request client list.
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
        if (array_key_exists("CallID",$param) and $param["CallID"] !== null) {
            $this->CallID = $param["CallID"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AccessKeyRemark",$param) and $param["AccessKeyRemark"] !== null) {
            $this->AccessKeyRemark = $param["AccessKeyRemark"];
        }

        if (array_key_exists("AccessKeyID",$param) and $param["AccessKeyID"] !== null) {
            $this->AccessKeyID = $param["AccessKeyID"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("SourceIPRemark",$param) and $param["SourceIPRemark"] !== null) {
            $this->SourceIPRemark = $param["SourceIPRemark"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IPType",$param) and $param["IPType"] !== null) {
            $this->IPType = $param["IPType"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = $param["PolicySet"];
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("FirstCallTime",$param) and $param["FirstCallTime"] !== null) {
            $this->FirstCallTime = $param["FirstCallTime"];
        }

        if (array_key_exists("LastCallTime",$param) and $param["LastCallTime"] !== null) {
            $this->LastCallTime = $param["LastCallTime"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
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

        if (array_key_exists("ReqClient",$param) and $param["ReqClient"] !== null) {
            $this->ReqClient = $param["ReqClient"];
        }
    }
}
