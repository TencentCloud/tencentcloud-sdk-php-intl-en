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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service risk
 *
 * @method string getServiceTag() Obtain Service tag
 * @method void setServiceTag(string $ServiceTag) Set Service tag
 * @method integer getPort() Obtain Port
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Port
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAffectAsset() Obtain Affected assets
 * @method void setAffectAsset(string $AffectAsset) Set Affected assets
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceType() Obtain Asset type
 * @method void setInstanceType(string $InstanceType) Set Asset type
 * @method string getLevel() Obtain Risk level
 * @method void setLevel(string $Level) Set Risk level
 * @method string getProtocol() Obtain Network protocol
 * @method void setProtocol(string $Protocol) Set Network protocol
 * @method string getComponent() Obtain Components
 * @method void setComponent(string $Component) Set Components
 * @method string getService() Obtain Service
 * @method void setService(string $Service) Set Service
 * @method string getRecentTime() Obtain Last detected 
 * @method void setRecentTime(string $RecentTime) Set Last detected 
 * @method string getFirstTime() Obtain First detected
 * @method void setFirstTime(string $FirstTime) Set First detected
 * @method string getRiskDetails() Obtain Risk Details
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRiskDetails(string $RiskDetails) Set Risk Details
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain Handling suggestion
 * @method void setSuggestion(string $Suggestion) Set Handling suggestion
 * @method integer getStatus() Obtain Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method void setStatus(integer $Status) Set Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method string getId() Obtain Unique ID of the asset
 * @method void setId(string $Id) Set Unique ID of the asset
 * @method string getAppId() Obtain User `appid`
 * @method void setAppId(string $AppId) Set User `appid`
 * @method string getNick() Obtain User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNick(string $Nick) Set User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getServiceSnapshot() Obtain Service snapshot
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setServiceSnapshot(string $ServiceSnapshot) Set Service snapshot
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Service access URL.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Service access URL.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getIndex() Obtain Data entry key
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIndex(string $Index) Set Data entry key
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getRiskList() Obtain List of risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRiskList(array $RiskList) Set List of risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getSuggestionList() Obtain List of fix suggestions 
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSuggestionList(array $SuggestionList) Set List of fix suggestions 
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getStatusCode() Obtain HTTP response code
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStatusCode(string $StatusCode) Set HTTP response code
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class ServerRisk extends AbstractModel
{
    /**
     * @var string Service tag
     */
    public $ServiceTag;

    /**
     * @var integer Port
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Affected assets
     */
    public $AffectAsset;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Asset type
     */
    public $InstanceType;

    /**
     * @var string Risk level
     */
    public $Level;

    /**
     * @var string Network protocol
     */
    public $Protocol;

    /**
     * @var string Components
     */
    public $Component;

    /**
     * @var string Service
     */
    public $Service;

    /**
     * @var string Last detected 
     */
    public $RecentTime;

    /**
     * @var string First detected
     */
    public $FirstTime;

    /**
     * @var string Risk Details
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RiskDetails;

    /**
     * @var string Handling suggestion
     */
    public $Suggestion;

    /**
     * @var integer Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
     */
    public $Status;

    /**
     * @var string Unique ID of the asset
     */
    public $Id;

    /**
     * @var string User `appid`
     */
    public $AppId;

    /**
     * @var string User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Nick;

    /**
     * @var string User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Service snapshot
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ServiceSnapshot;

    /**
     * @var string Service access URL.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Data entry key
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Index;

    /**
     * @var array List of risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RiskList;

    /**
     * @var array List of fix suggestions 
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SuggestionList;

    /**
     * @var string HTTP response code
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $StatusCode;

    /**
     * @param string $ServiceTag Service tag
     * @param integer $Port Port
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AffectAsset Affected assets
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $InstanceType Asset type
     * @param string $Level Risk level
     * @param string $Protocol Network protocol
     * @param string $Component Components
     * @param string $Service Service
     * @param string $RecentTime Last detected 
     * @param string $FirstTime First detected
     * @param string $RiskDetails Risk Details
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Suggestion Handling suggestion
     * @param integer $Status Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
     * @param string $Id Unique ID of the asset
     * @param string $AppId User `appid`
     * @param string $Nick User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ServiceSnapshot Service snapshot
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Url Service access URL.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Index Data entry key
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $RiskList List of risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $SuggestionList List of fix suggestions 
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $StatusCode HTTP response code
Note: This field may return·null, indicating that no valid values can be obtained.
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
    }
}
