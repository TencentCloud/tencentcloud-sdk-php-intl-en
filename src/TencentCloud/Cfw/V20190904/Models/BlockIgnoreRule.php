<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Allowlist or blocklist for intrusion prevention
 *
 * @method string getDomain() Obtain Domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIoc() Obtain Rule IP.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIoc(string $Ioc) Set Rule IP.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain Threat level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Threat level.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventName() Obtain Source event name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventName(string $EventName) Set Source event name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDirection() Obtain Direction. Valid values: 0: outbound; 1: inbound.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDirection(integer $Direction) Set Direction. Valid values: 0: outbound; 1: inbound.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAction() Obtain Rule type. Valid values: 1: block; 2: allow.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAction(integer $Action) Set Rule type. Valid values: 1: block; 2: allow.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Time when a rule starts to take effect.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Time when a rule starts to take effect.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Time when a rule expires.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Time when a rule expires.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIgnoreReason() Obtain Reason for ignoring.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreReason(string $IgnoreReason) Set Reason for ignoring.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSource() Obtain Security event source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSource(string $Source) Set Security event source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqueId() Obtain Rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqueId(string $UniqueId) Set Rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMatchTimes() Obtain Number of rule matching times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMatchTimes(integer $MatchTimes) Set Number of rule matching times.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCountry() Obtain Country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountry(string $Country) Set Country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 */
class BlockIgnoreRule extends AbstractModel
{
    /**
     * @var string Domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Rule IP.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ioc;

    /**
     * @var string Threat level.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var string Source event name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventName;

    /**
     * @var integer Direction. Valid values: 0: outbound; 1: inbound.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Direction;

    /**
     * @var string Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var integer Rule type. Valid values: 1: block; 2: allow.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var string Time when a rule starts to take effect.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Time when a rule expires.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Reason for ignoring.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoreReason;

    /**
     * @var string Security event source.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Source;

    /**
     * @var string Rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqueId;

    /**
     * @var integer Number of rule matching times.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MatchTimes;

    /**
     * @var string Country.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Country;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @param string $Domain Domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Ioc Rule IP.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Level Threat level.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventName Source event name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Direction Direction. Valid values: 0: outbound; 1: inbound.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Action Rule type. Valid values: 1: block; 2: allow.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Time when a rule starts to take effect.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Time when a rule expires.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IgnoreReason Reason for ignoring.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Source Security event source.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqueId Rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MatchTimes Number of rule matching times.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Country Country.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Comment 
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ioc",$param) and $param["Ioc"] !== null) {
            $this->Ioc = $param["Ioc"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IgnoreReason",$param) and $param["IgnoreReason"] !== null) {
            $this->IgnoreReason = $param["IgnoreReason"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("MatchTimes",$param) and $param["MatchTimes"] !== null) {
            $this->MatchTimes = $param["MatchTimes"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
