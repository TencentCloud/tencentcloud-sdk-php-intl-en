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
 * Call log details
 *
 * @method string getCallID() Obtain Call record ID
 * @method void setCallID(string $CallID) Set Call record ID
 * @method string getAccessKey() Obtain Access key
 * @method void setAccessKey(string $AccessKey) Set Access key
 * @method string getAccessKeyRemark() Obtain Access key remark
 * @method void setAccessKeyRemark(string $AccessKeyRemark) Set Access key remark
 * @method integer getAccessKeyID() Obtain Access Key ID
 * @method void setAccessKeyID(integer $AccessKeyID) Set Access Key ID
 * @method string getSourceIP() Obtain Source IP for calls
 * @method void setSourceIP(string $SourceIP) Set Source IP for calls
 * @method string getSourceIPRemark() Obtain Source IP remark of a call
 * @method void setSourceIPRemark(string $SourceIPRemark) Set Source IP remark of a call
 * @method string getRegion() Obtain Region of the source IP
 * @method void setRegion(string $Region) Set Region of the source IP
 * @method integer getIPType() Obtain IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked)
 * @method void setIPType(integer $IPType) Set IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked)
 * @method string getEventName() Obtain Name of the called API
 * @method void setEventName(string $EventName) Set Name of the called API
 * @method string getProductName() Obtain API call product name
 * @method void setProductName(string $ProductName) Set API call product name
 * @method integer getEventType() Obtain Invocation type
0: Console invocation
1:API
 * @method void setEventType(integer $EventType) Set Invocation type
0: Console invocation
1:API
 * @method string getUserType() Obtain Type of user. Valid values: `CAMUser`, `root`, `AssumedRole`.

 * @method void setUserType(string $UserType) Set Type of user. Valid values: `CAMUser`, `root`, `AssumedRole`.

 * @method string getUserName() Obtain User/role name
 * @method void setUserName(string $UserName) Set User/role name
 * @method array getPolicySet() Obtain Policy List
 * @method void setPolicySet(array $PolicySet) Set Policy List
 * @method integer getCallCount() Obtain Call count
 * @method void setCallCount(integer $CallCount) Set Call count
 * @method integer getCode() Obtain Call error code
0: Successful
 * @method void setCode(integer $Code) Set Call error code
0: Successful
 * @method string getFirstCallTime() Obtain First call time
 * @method void setFirstCallTime(string $FirstCallTime) Set First call time
 * @method string getLastCallTime() Obtain Last call time
 * @method void setLastCallTime(string $LastCallTime) Set Last call time
 * @method string getInstanceID() Obtain ID of the associated asset for the IP. If it is an empty string, the IP is not associated with any asset.
 * @method void setInstanceID(string $InstanceID) Set ID of the associated asset for the IP. If it is an empty string, the IP is not associated with any asset.
 * @method string getInstanceName() Obtain IP associated asset name
 * @method void setInstanceName(string $InstanceName) Set IP associated asset name
 * @method string getDate() Obtain Aggregation date
 * @method void setDate(string $Date) Set Aggregation date
 * @method integer getAppID() Obtain appid
 * @method void setAppID(integer $AppID) Set appid
 * @method boolean getShowStatus() Obtain Display status.
 * @method void setShowStatus(boolean $ShowStatus) Set Display status.
 * @method string getISP() Obtain Internet service provider.
 * @method void setISP(string $ISP) Set Internet service provider.
 * @method array getVpcInfo() Obtain List of vpc information outside the account
 * @method void setVpcInfo(array $VpcInfo) Set List of vpc information outside the account
 * @method array getReqClient() Obtain List of call request clients
 * @method void setReqClient(array $ReqClient) Set List of call request clients
 */
class CallRecord extends AbstractModel
{
    /**
     * @var string Call record ID
     */
    public $CallID;

    /**
     * @var string Access key
     */
    public $AccessKey;

    /**
     * @var string Access key remark
     */
    public $AccessKeyRemark;

    /**
     * @var integer Access Key ID
     */
    public $AccessKeyID;

    /**
     * @var string Source IP for calls
     */
    public $SourceIP;

    /**
     * @var string Source IP remark of a call
     */
    public $SourceIPRemark;

    /**
     * @var string Region of the source IP
     */
    public $Region;

    /**
     * @var integer IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked)
     */
    public $IPType;

    /**
     * @var string Name of the called API
     */
    public $EventName;

    /**
     * @var string API call product name
     */
    public $ProductName;

    /**
     * @var integer Invocation type
0: Console invocation
1:API
     */
    public $EventType;

    /**
     * @var string Type of user. Valid values: `CAMUser`, `root`, `AssumedRole`.

     */
    public $UserType;

    /**
     * @var string User/role name
     */
    public $UserName;

    /**
     * @var array Policy List
     */
    public $PolicySet;

    /**
     * @var integer Call count
     */
    public $CallCount;

    /**
     * @var integer Call error code
0: Successful
     */
    public $Code;

    /**
     * @var string First call time
     */
    public $FirstCallTime;

    /**
     * @var string Last call time
     */
    public $LastCallTime;

    /**
     * @var string ID of the associated asset for the IP. If it is an empty string, the IP is not associated with any asset.
     */
    public $InstanceID;

    /**
     * @var string IP associated asset name
     */
    public $InstanceName;

    /**
     * @var string Aggregation date
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
     * @var string Internet service provider.
     */
    public $ISP;

    /**
     * @var array List of vpc information outside the account
     */
    public $VpcInfo;

    /**
     * @var array List of call request clients
     */
    public $ReqClient;

    /**
     * @param string $CallID Call record ID
     * @param string $AccessKey Access key
     * @param string $AccessKeyRemark Access key remark
     * @param integer $AccessKeyID Access Key ID
     * @param string $SourceIP Source IP for calls
     * @param string $SourceIPRemark Source IP remark of a call
     * @param string $Region Region of the source IP
     * @param integer $IPType IP type. 0: within the account (no remark). 1: outside the account (no remark). 2: within the account (remarked). 3: outside the account (remarked)
     * @param string $EventName Name of the called API
     * @param string $ProductName API call product name
     * @param integer $EventType Invocation type
0: Console invocation
1:API
     * @param string $UserType Type of user. Valid values: `CAMUser`, `root`, `AssumedRole`.

     * @param string $UserName User/role name
     * @param array $PolicySet Policy List
     * @param integer $CallCount Call count
     * @param integer $Code Call error code
0: Successful
     * @param string $FirstCallTime First call time
     * @param string $LastCallTime Last call time
     * @param string $InstanceID ID of the associated asset for the IP. If it is an empty string, the IP is not associated with any asset.
     * @param string $InstanceName IP associated asset name
     * @param string $Date Aggregation date
     * @param integer $AppID appid
     * @param boolean $ShowStatus Display status.
     * @param string $ISP Internet service provider.
     * @param array $VpcInfo List of vpc information outside the account
     * @param array $ReqClient List of call request clients
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
