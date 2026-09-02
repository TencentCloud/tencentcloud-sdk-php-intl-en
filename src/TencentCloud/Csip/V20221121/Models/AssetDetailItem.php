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
 * Asset detail information
 *
 * @method integer getAppID() Obtain <p>Tenant ID</p>
 * @method void setAppID(integer $AppID) Set <p>Tenant ID</p>
 * @method string getCloudAccountName() Obtain <p>Cloud account name</p>
 * @method void setCloudAccountName(string $CloudAccountName) Set <p>Cloud account name</p>
 * @method string getAssetID() Obtain <p>Asset ID.</p>
 * @method void setAssetID(string $AssetID) Set <p>Asset ID.</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method array getTags() Obtain <p>Cloud API return tag</p>
 * @method void setTags(array $Tags) Set <p>Cloud API return tag</p>
 * @method array getSecurityGroupIDs() Obtain <p>Security group ID collection</p>
 * @method void setSecurityGroupIDs(array $SecurityGroupIDs) Set <p>Security group ID collection</p>
 * @method string getPublicIP() Obtain <p>Public IP address</p>
 * @method void setPublicIP(string $PublicIP) Set <p>Public IP address</p>
 * @method string getPrivateIP() Obtain <p>Private IP address.</p>
 * @method void setPrivateIP(string $PrivateIP) Set <p>Private IP address.</p>
 * @method string getPublicDomain() Obtain <p>Public network domain</p>
 * @method void setPublicDomain(string $PublicDomain) Set <p>Public network domain</p>
 * @method string getPrivateDomain() Obtain <p>Private domain</p>
 * @method void setPrivateDomain(string $PrivateDomain) Set <p>Private domain</p>
 * @method integer getRiskCount() Obtain <p>Total number of risks</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Total number of risks</p>
 * @method integer getAlarmCount() Obtain <p>Total number of alarms</p>
 * @method void setAlarmCount(integer $AlarmCount) Set <p>Total number of alarms</p>
 * @method string getAssetName() Obtain <p>Asset name</p>
 * @method void setAssetName(string $AssetName) Set <p>Asset name</p>
 * @method array getCustomTags() Obtain <p>Cloud security center tag</p>
 * @method void setCustomTags(array $CustomTags) Set <p>Cloud security center tag</p>
 * @method string getProvider() Obtain <p>Cloud service provider</p>
 * @method void setProvider(string $Provider) Set <p>Cloud service provider</p>
 * @method string getAssetTypeName() Obtain <p>Asset type name</p>
 * @method void setAssetTypeName(string $AssetTypeName) Set <p>Asset type name</p>
 * @method string getAssetTypeIconURL() Obtain <p>Asset type icon</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) Set <p>Asset type icon</p>
 * @method string getAssetRID() Obtain <p>Asset unique identifier</p>
 * @method void setAssetRID(string $AssetRID) Set <p>Asset unique identifier</p>
 */
class AssetDetailItem extends AbstractModel
{
    /**
     * @var integer <p>Tenant ID</p>
     */
    public $AppID;

    /**
     * @var string <p>Cloud account name</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>Asset ID.</p>
     */
    public $AssetID;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var array <p>Cloud API return tag</p>
     */
    public $Tags;

    /**
     * @var array <p>Security group ID collection</p>
     */
    public $SecurityGroupIDs;

    /**
     * @var string <p>Public IP address</p>
     */
    public $PublicIP;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>Public network domain</p>
     */
    public $PublicDomain;

    /**
     * @var string <p>Private domain</p>
     */
    public $PrivateDomain;

    /**
     * @var integer <p>Total number of risks</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>Total number of alarms</p>
     */
    public $AlarmCount;

    /**
     * @var string <p>Asset name</p>
     */
    public $AssetName;

    /**
     * @var array <p>Cloud security center tag</p>
     */
    public $CustomTags;

    /**
     * @var string <p>Cloud service provider</p>
     */
    public $Provider;

    /**
     * @var string <p>Asset type name</p>
     */
    public $AssetTypeName;

    /**
     * @var string <p>Asset type icon</p>
     */
    public $AssetTypeIconURL;

    /**
     * @var string <p>Asset unique identifier</p>
     */
    public $AssetRID;

    /**
     * @param integer $AppID <p>Tenant ID</p>
     * @param string $CloudAccountName <p>Cloud account name</p>
     * @param string $AssetID <p>Asset ID.</p>
     * @param string $AssetType <p>Asset type</p>
     * @param array $Tags <p>Cloud API return tag</p>
     * @param array $SecurityGroupIDs <p>Security group ID collection</p>
     * @param string $PublicIP <p>Public IP address</p>
     * @param string $PrivateIP <p>Private IP address.</p>
     * @param string $PublicDomain <p>Public network domain</p>
     * @param string $PrivateDomain <p>Private domain</p>
     * @param integer $RiskCount <p>Total number of risks</p>
     * @param integer $AlarmCount <p>Total number of alarms</p>
     * @param string $AssetName <p>Asset name</p>
     * @param array $CustomTags <p>Cloud security center tag</p>
     * @param string $Provider <p>Cloud service provider</p>
     * @param string $AssetTypeName <p>Asset type name</p>
     * @param string $AssetTypeIconURL <p>Asset type icon</p>
     * @param string $AssetRID <p>Asset unique identifier</p>
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

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIDs",$param) and $param["SecurityGroupIDs"] !== null) {
            $this->SecurityGroupIDs = $param["SecurityGroupIDs"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("PrivateDomain",$param) and $param["PrivateDomain"] !== null) {
            $this->PrivateDomain = $param["PrivateDomain"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("CustomTags",$param) and $param["CustomTags"] !== null) {
            $this->CustomTags = [];
            foreach ($param["CustomTags"] as $key => $value){
                $obj = new CustomTag();
                $obj->deserialize($value);
                array_push($this->CustomTags, $obj);
            }
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }

        if (array_key_exists("AssetRID",$param) and $param["AssetRID"] !== null) {
            $this->AssetRID = $param["AssetRID"];
        }
    }
}
