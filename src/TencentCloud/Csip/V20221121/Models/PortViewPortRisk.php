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
 * Port Risk Objects from Port's Perspective
 *
 * @method integer getNoHandleCount() Obtain Unprocessed quantity.
 * @method void setNoHandleCount(integer $NoHandleCount) Set Unprocessed quantity.
 * @method string getLevel() Obtain Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: severe.
 * @method void setLevel(string $Level) Set Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: severe.
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getComponent() Obtain Component
 * @method void setComponent(string $Component) Set Component
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getSuggestion() Obtain Disposal Suggestions. 0: Maintain Status Quo; 1: Restrict Access; 2: Block Port.
 * @method void setSuggestion(integer $Suggestion) Set Disposal Suggestions. 0: Maintain Status Quo; 1: Restrict Access; 2: Block Port.
 * @method string getAffectAssetCount() Obtain Number of Affected Assets
 * @method void setAffectAssetCount(string $AffectAssetCount) Set Number of Affected Assets
 * @method string getId() Obtain ID
 * @method void setId(string $Id) Set ID
 * @method string getFrom() Obtain Source recognition
 * @method void setFrom(string $From) Set Source recognition
 * @method string getIndex() Obtain Front-end Index
 * @method void setIndex(string $Index) Set Front-end Index
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getService() Obtain Service.
 * @method void setService(string $Service) Set Service.
 */
class PortViewPortRisk extends AbstractModel
{
    /**
     * @var integer Unprocessed quantity.
     */
    public $NoHandleCount;

    /**
     * @var string Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: severe.
     */
    public $Level;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Component
     */
    public $Component;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string Latest Recognition Time
     */
    public $RecentTime;

    /**
     * @var string First Recognition Time
     */
    public $FirstTime;

    /**
     * @var integer Disposal Suggestions. 0: Maintain Status Quo; 1: Restrict Access; 2: Block Port.
     */
    public $Suggestion;

    /**
     * @var string Number of Affected Assets
     */
    public $AffectAssetCount;

    /**
     * @var string ID
     */
    public $Id;

    /**
     * @var string Source recognition
     */
    public $From;

    /**
     * @var string Front-end Index
     */
    public $Index;

    /**
     * @var string User appid.
     */
    public $AppId;

    /**
     * @var string User Nickname
     */
    public $Nick;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Service.
     */
    public $Service;

    /**
     * @param integer $NoHandleCount Unprocessed quantity.
     * @param string $Level Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: severe.
     * @param string $Protocol Protocol
     * @param string $Component Component
     * @param integer $Port Port.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $Suggestion Disposal Suggestions. 0: Maintain Status Quo; 1: Restrict Access; 2: Block Port.
     * @param string $AffectAssetCount Number of Affected Assets
     * @param string $Id ID
     * @param string $From Source recognition
     * @param string $Index Front-end Index
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $Service Service.
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
        if (array_key_exists("NoHandleCount",$param) and $param["NoHandleCount"] !== null) {
            $this->NoHandleCount = $param["NoHandleCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }
    }
}
