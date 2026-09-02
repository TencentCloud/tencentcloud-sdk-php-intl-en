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
 * Service Risk
 *
 * @method string getServiceTag() Obtain Mapping Tag
 * @method void setServiceTag(string $ServiceTag) Set Mapping Tag
 * @method integer getPort() Obtain Port.
 * @method void setPort(integer $Port) Set Port.
 * @method string getAffectAsset() Obtain Affect assets
 * @method void setAffectAsset(string $AffectAsset) Set Affect assets
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceType() Obtain Asset type
 * @method void setInstanceType(string $InstanceType) Set Asset type
 * @method string getLevel() Obtain Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical
 * @method void setLevel(string $Level) Set Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getComponent() Obtain component
 * @method void setComponent(string $Component) Set component
 * @method string getService() Obtain Service.
 * @method void setService(string $Service) Set Service.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method string getRiskDetails() Obtain Risk details
 * @method void setRiskDetails(string $RiskDetails) Set Risk details
 * @method string getSuggestion() Obtain Handling suggestion
 * @method void setSuggestion(string $Suggestion) Set Handling suggestion
 * @method integer getStatus() Obtain Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
 * @method void setStatus(integer $Status) Set Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
 * @method string getId() Obtain Unique ID of Asset
 * @method void setId(string $Id) Set Unique ID of Asset
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getServiceSnapshot() Obtain Service Snapshot
 * @method void setServiceSnapshot(string $ServiceSnapshot) Set Service Snapshot
 * @method string getUrl() Obtain Service Access URL
 * @method void setUrl(string $Url) Set Service Access URL
 * @method string getIndex() Obtain List Index Value
 * @method void setIndex(string $Index) Set List Index Value
 * @method array getRiskList() Obtain Risk list
 * @method void setRiskList(array $RiskList) Set Risk list
 * @method array getSuggestionList() Obtain Recommendation List
 * @method void setSuggestionList(array $SuggestionList) Set Recommendation List
 * @method string getStatusCode() Obtain HTTP Response Status Code
 * @method void setStatusCode(string $StatusCode) Set HTTP Response Status Code
 * @method string getNewLevel() Obtain New risk level. high_risk: high risk. suspect: suspected. Normal: no risk data yet.
 * @method void setNewLevel(string $NewLevel) Set New risk level. high_risk: high risk. suspect: suspected. Normal: no risk data yet.
 * @method integer getXspmStatus() Obtain Status. 0: unprocessed; 1: processed; 2: ignored; 3: defended by Cloud Firewall; 4: no action is required.
 * @method void setXspmStatus(integer $XspmStatus) Set Status. 0: unprocessed; 1: processed; 2: ignored; 3: defended by Cloud Firewall; 4: no action is required.
 */
class ServerRisk extends AbstractModel
{
    /**
     * @var string Mapping Tag
     */
    public $ServiceTag;

    /**
     * @var integer Port.
     */
    public $Port;

    /**
     * @var string Affect assets
     */
    public $AffectAsset;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Asset type
     */
    public $InstanceType;

    /**
     * @var string Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical
     */
    public $Level;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string component
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
     * @var string Risk details
     */
    public $RiskDetails;

    /**
     * @var string Handling suggestion
     */
    public $Suggestion;

    /**
     * @var integer Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
     */
    public $Status;

    /**
     * @var string Unique ID of Asset
     */
    public $Id;

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
     * @var string Service Snapshot
     */
    public $ServiceSnapshot;

    /**
     * @var string Service Access URL
     */
    public $Url;

    /**
     * @var string List Index Value
     */
    public $Index;

    /**
     * @var array Risk list
     */
    public $RiskList;

    /**
     * @var array Recommendation List
     */
    public $SuggestionList;

    /**
     * @var string HTTP Response Status Code
     */
    public $StatusCode;

    /**
     * @var string New risk level. high_risk: high risk. suspect: suspected. Normal: no risk data yet.
     */
    public $NewLevel;

    /**
     * @var integer Status. 0: unprocessed; 1: processed; 2: ignored; 3: defended by Cloud Firewall; 4: no action is required.
     */
    public $XspmStatus;

    /**
     * @param string $ServiceTag Mapping Tag
     * @param integer $Port Port.
     * @param string $AffectAsset Affect assets
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $InstanceType Asset type
     * @param string $Level Risk level. low: low risk. high: high risk. middle: medium risk. info: notification. extreme: critical
     * @param string $Protocol Protocol
     * @param string $Component component
     * @param string $Service Service.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param string $RiskDetails Risk details
     * @param string $Suggestion Handling suggestion
     * @param integer $Status Status. 0-Unprocessed; 1-Disposed; 2-Ignored; 3-Defended by Cloud Firewall.
     * @param string $Id Unique ID of Asset
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $ServiceSnapshot Service Snapshot
     * @param string $Url Service Access URL
     * @param string $Index List Index Value
     * @param array $RiskList Risk list
     * @param array $SuggestionList Recommendation List
     * @param string $StatusCode HTTP Response Status Code
     * @param string $NewLevel New risk level. high_risk: high risk. suspect: suspected. Normal: no risk data yet.
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
        if (array_key_exists("ServiceTag",$param) and $param["ServiceTag"] !== null) {
            $this->ServiceTag = $param["ServiceTag"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
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

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("RiskDetails",$param) and $param["RiskDetails"] !== null) {
            $this->RiskDetails = $param["RiskDetails"];
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ServiceSnapshot",$param) and $param["ServiceSnapshot"] !== null) {
            $this->ServiceSnapshot = $param["ServiceSnapshot"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("RiskList",$param) and $param["RiskList"] !== null) {
            $this->RiskList = [];
            foreach ($param["RiskList"] as $key => $value){
                $obj = new ServerRiskSuggestion();
                $obj->deserialize($value);
                array_push($this->RiskList, $obj);
            }
        }

        if (array_key_exists("SuggestionList",$param) and $param["SuggestionList"] !== null) {
            $this->SuggestionList = [];
            foreach ($param["SuggestionList"] as $key => $value){
                $obj = new ServerRiskSuggestion();
                $obj->deserialize($value);
                array_push($this->SuggestionList, $obj);
            }
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("NewLevel",$param) and $param["NewLevel"] !== null) {
            $this->NewLevel = $param["NewLevel"];
        }

        if (array_key_exists("XspmStatus",$param) and $param["XspmStatus"] !== null) {
            $this->XspmStatus = $param["XspmStatus"];
        }
    }
}
