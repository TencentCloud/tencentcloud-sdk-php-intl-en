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
 * Port Risk Objects from Asset's Perspective
 *
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getAffectAsset() Obtain Affect assets
 * @method void setAffectAsset(string $AffectAsset) Set Affect assets
 * @method string getLevel() Obtain Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method void setLevel(string $Level) Set Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
 * @method string getInstanceType() Obtain Asset type
 * @method void setInstanceType(string $InstanceType) Set Asset type
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getComponent() Obtain Component
 * @method void setComponent(string $Component) Set Component
 * @method string getService() Obtain Service.
 * @method void setService(string $Service) Set Service.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getSuggestion() Obtain Disposal Suggestions. 0: Maintain Status Quo; 1: Restrict Access; 2: Block Port.
 * @method void setSuggestion(integer $Suggestion) Set Disposal Suggestions. 0: Maintain Status Quo; 1: Restrict Access; 2: Block Port.
 * @method integer getStatus() Obtain Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
 * @method void setStatus(integer $Status) Set Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
 * @method string getId() Obtain Risk ID
 * @method void setId(string $Id) Set Risk ID
 * @method string getIndex() Obtain Front-end Index
 * @method void setIndex(string $Index) Set Front-end Index
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getFrom() Obtain Recognition Source. See Enumeration Return for details.
 * @method void setFrom(string $From) Set Recognition Source. See Enumeration Return for details.
 * @method string getServiceJudge() Obtain Service judgment. high_risk_service: high-risk service. web_service: web service. other_service: other service.
 * @method void setServiceJudge(string $ServiceJudge) Set Service judgment. high_risk_service: high-risk service. web_service: web service. other_service: other service.
 * @method integer getXspmStatus() Obtain Status. 0: unprocessed; 1: processed; 2: ignored; 3: defended by Cloud Firewall; 4: no action is required.
 * @method void setXspmStatus(integer $XspmStatus) Set Status. 0: unprocessed; 1: processed; 2: ignored; 3: defended by Cloud Firewall; 4: no action is required.
 */
class AssetViewPortRisk extends AbstractModel
{
    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string Affect assets
     */
    public $AffectAsset;

    /**
     * @var string Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
     */
    public $Level;

    /**
     * @var string Asset type
     */
    public $InstanceType;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Component
     */
    public $Component;

    /**
     * @var string Service.
     */
    public $Service;

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
     * @var integer Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
     */
    public $Status;

    /**
     * @var string Risk ID
     */
    public $Id;

    /**
     * @var string Front-end Index
     */
    public $Index;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

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
     * @var string Recognition Source. See Enumeration Return for details.
     */
    public $From;

    /**
     * @var string Service judgment. high_risk_service: high-risk service. web_service: web service. other_service: other service.
     */
    public $ServiceJudge;

    /**
     * @var integer Status. 0: unprocessed; 1: processed; 2: ignored; 3: defended by Cloud Firewall; 4: no action is required.
     */
    public $XspmStatus;

    /**
     * @param integer $Port Port.
     * @param string $AffectAsset Affect assets
     * @param string $Level Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical.
     * @param string $InstanceType Asset type
     * @param string $Protocol Protocol
     * @param string $Component Component
     * @param string $Service Service.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $Suggestion Disposal Suggestions. 0: Maintain Status Quo; 1: Restrict Access; 2: Block Port.
     * @param integer $Status Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
     * @param string $Id Risk ID
     * @param string $Index Front-end Index
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $From Recognition Source. See Enumeration Return for details.
     * @param string $ServiceJudge Service judgment. high_risk_service: high-risk service. web_service: web service. other_service: other service.
     * @param integer $XspmStatus Status. 0: unprocessed; 1: processed; 2: ignored; 3: defended by Cloud Firewall; 4: no action is required.
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("ServiceJudge",$param) and $param["ServiceJudge"] !== null) {
            $this->ServiceJudge = $param["ServiceJudge"];
        }

        if (array_key_exists("XspmStatus",$param) and $param["XspmStatus"] !== null) {
            $this->XspmStatus = $param["XspmStatus"];
        }
    }
}
