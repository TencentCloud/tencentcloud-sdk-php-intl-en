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
 * Port risk details
 *
 * @method integer getPort() Obtain Port
 * @method void setPort(integer $Port) Set Port
 * @method string getAffectAsset() Obtain Affected assets
 * @method void setAffectAsset(string $AffectAsset) Set Affected assets
 * @method string getLevel() Obtain Risk level
 * @method void setLevel(string $Level) Set Risk level
 * @method string getInstanceType() Obtain Asset type
 * @method void setInstanceType(string $InstanceType) Set Asset type
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
 * @method integer getSuggestion() Obtain Suggested action. `0`: Keep as it is; `1`: Block access requests; `2`: Block the port
 * @method void setSuggestion(integer $Suggestion) Set Suggested action. `0`: Keep as it is; `1`: Block access requests; `2`: Block the port
 * @method integer getStatus() Obtain Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method void setStatus(integer $Status) Set Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method string getId() Obtain Unique ID of the asset
 * @method void setId(string $Id) Set Unique ID of the asset
 * @method string getIndex() Obtain Frontend index
 * @method void setIndex(string $Index) Set Frontend index
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
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
 * @method string getFrom() Obtain Source of the task
 * @method void setFrom(string $From) Set Source of the task
 */
class AssetViewPortRisk extends AbstractModel
{
    /**
     * @var integer Port
     */
    public $Port;

    /**
     * @var string Affected assets
     */
    public $AffectAsset;

    /**
     * @var string Risk level
     */
    public $Level;

    /**
     * @var string Asset type
     */
    public $InstanceType;

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
     * @var integer Suggested action. `0`: Keep as it is; `1`: Block access requests; `2`: Block the port
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
     * @var string Frontend index
     */
    public $Index;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

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
     * @var string Source of the task
     */
    public $From;

    /**
     * @param integer $Port Port
     * @param string $AffectAsset Affected assets
     * @param string $Level Risk level
     * @param string $InstanceType Asset type
     * @param string $Protocol Network protocol
     * @param string $Component Components
     * @param string $Service Service
     * @param string $RecentTime Last detected 
     * @param string $FirstTime First detected
     * @param integer $Suggestion Suggested action. `0`: Keep as it is; `1`: Block access requests; `2`: Block the port
     * @param integer $Status Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
     * @param string $Id Unique ID of the asset
     * @param string $Index Frontend index
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $AppId User `appid`
     * @param string $Nick User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $From Source of the task
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
    }
}
