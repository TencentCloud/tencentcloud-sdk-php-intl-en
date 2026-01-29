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
 * @method string getSourceIP() Obtain Source IP of the call.
 * @method void setSourceIP(string $SourceIP) Set Source IP of the call.
 * @method integer getEventType() Obtain Invocation type.
0: console invocation.
1:API
 * @method void setEventType(integer $EventType) Set Invocation type.
0: console invocation.
1:API
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
 * @method string getSourceIPRemark() Obtain Source IP of the call remark.
 * @method void setSourceIPRemark(string $SourceIPRemark) Set Source IP of the call remark.
 * @method string getRegion() Obtain Source IP region of the call.
 * @method void setRegion(string $Region) Set Source IP region of the call.
 * @method string getUserName() Obtain User/Role name.
 * @method void setUserName(string $UserName) Set User/Role name.
 * @method string getDate() Obtain Aggregate date.
 * @method void setDate(string $Date) Set Aggregate date.
 * @method integer getAppID() Obtain appid
 * @method void setAppID(integer $AppID) Set appid
 * @method string getISP() Obtain Carrier.
 * @method void setISP(string $ISP) Set Carrier.
 */
class UserCallRecord extends AbstractModel
{
    /**
     * @var string Source IP of the call.
     */
    public $SourceIP;

    /**
     * @var integer Invocation type.
0: console invocation.
1:API
     */
    public $EventType;

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
     * @var string Source IP of the call remark.
     */
    public $SourceIPRemark;

    /**
     * @var string Source IP region of the call.
     */
    public $Region;

    /**
     * @var string User/Role name.
     */
    public $UserName;

    /**
     * @var string Aggregate date.
     */
    public $Date;

    /**
     * @var integer appid
     */
    public $AppID;

    /**
     * @var string Carrier.
     */
    public $ISP;

    /**
     * @param string $SourceIP Source IP of the call.
     * @param integer $EventType Invocation type.
0: console invocation.
1:API
     * @param integer $CallCount Number of calls.
     * @param integer $Code Error code.
0: Successful
     * @param string $FirstCallTime First time call time.
     * @param string $LastCallTime Call time.
     * @param string $SourceIPRemark Source IP of the call remark.
     * @param string $Region Source IP region of the call.
     * @param string $UserName User/Role name.
     * @param string $Date Aggregate date.
     * @param integer $AppID appid
     * @param string $ISP Carrier.
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
        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
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

        if (array_key_exists("SourceIPRemark",$param) and $param["SourceIPRemark"] !== null) {
            $this->SourceIPRemark = $param["SourceIPRemark"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }
    }
}
