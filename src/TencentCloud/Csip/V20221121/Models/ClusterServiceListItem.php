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
 * Cluster service list items
 *
 * @method integer getAppID() Obtain <p>appid</p>
 * @method void setAppID(integer $AppID) Set <p>appid</p>
 * @method string getAssetId() Obtain <p>Asset id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset id</p>
 * @method string getName() Obtain <p>Name.</p>
 * @method void setName(string $Name) Set <p>Name.</p>
 * @method array getSelectorLabel() Obtain <p>selector tag.</p>
 * @method void setSelectorLabel(array $SelectorLabel) Set <p>selector tag.</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getServiceUniqueID() Obtain <p>Unique service ID</p>
 * @method void setServiceUniqueID(string $ServiceUniqueID) Set <p>Unique service ID</p>
 * @method string getServiceType() Obtain <p>service type</p>
 * @method void setServiceType(string $ServiceType) Set <p>service type</p>
 * @method string getClusterIP() Obtain <p>Cluster IP</p>
 * @method void setClusterIP(string $ClusterIP) Set <p>Cluster IP</p>
 * @method array getExternalIP() Obtain <p>Public network IP.</p>
 * @method void setExternalIP(array $ExternalIP) Set <p>Public network IP.</p>
 * @method array getPorts() Obtain <p>Port</p>
 * @method void setPorts(array $Ports) Set <p>Port</p>
 */
class ClusterServiceListItem extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>Asset id</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var string <p>Name.</p>
     */
    public $Name;

    /**
     * @var array <p>selector tag.</p>
     */
    public $SelectorLabel;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Unique service ID</p>
     */
    public $ServiceUniqueID;

    /**
     * @var string <p>service type</p>
     */
    public $ServiceType;

    /**
     * @var string <p>Cluster IP</p>
     */
    public $ClusterIP;

    /**
     * @var array <p>Public network IP.</p>
     */
    public $ExternalIP;

    /**
     * @var array <p>Port</p>
     */
    public $Ports;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $AssetId <p>Asset id</p>
     * @param string $Name <p>Name.</p>
     * @param array $SelectorLabel <p>selector tag.</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ServiceUniqueID <p>Unique service ID</p>
     * @param string $ServiceType <p>service type</p>
     * @param string $ClusterIP <p>Cluster IP</p>
     * @param array $ExternalIP <p>Public network IP.</p>
     * @param array $Ports <p>Port</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SelectorLabel",$param) and $param["SelectorLabel"] !== null) {
            $this->SelectorLabel = [];
            foreach ($param["SelectorLabel"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->SelectorLabel, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ServiceUniqueID",$param) and $param["ServiceUniqueID"] !== null) {
            $this->ServiceUniqueID = $param["ServiceUniqueID"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ClusterIP",$param) and $param["ClusterIP"] !== null) {
            $this->ClusterIP = $param["ClusterIP"];
        }

        if (array_key_exists("ExternalIP",$param) and $param["ExternalIP"] !== null) {
            $this->ExternalIP = $param["ExternalIP"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }
    }
}
