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
 * Cloud function
 *
 * @method string getInstanceName() Obtain Cloud function name
 * @method void setInstanceName(string $InstanceName) Set Cloud function name
 * @method string getInstanceStatus() Obtain Function status
 * @method void setInstanceStatus(string $InstanceStatus) Set Function status
 * @method string getFunctionType() Obtain Cloud function type
 * @method void setFunctionType(string $FunctionType) Set Cloud function type
 * @method string getInstanceTag() Obtain Resource tag
 * @method void setInstanceTag(string $InstanceTag) Set Resource tag
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getDomain() Obtain Custom domain name
 * @method void setDomain(string $Domain) Set Custom domain name
 * @method string getInstanceID() Obtain Instance ID.
 * @method void setInstanceID(string $InstanceID) Set Instance ID.
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method integer getAppID() Obtain Tenant ID
 * @method void setAppID(integer $AppID) Set Tenant ID
 * @method string getInstanceStatusDisplay() Obtain Displayed content of function status
 * @method void setInstanceStatusDisplay(string $InstanceStatusDisplay) Set Displayed content of function status
 * @method string getCoreAssetFlag() Obtain Core asset tag
 * @method void setCoreAssetFlag(string $CoreAssetFlag) Set Core asset tag
 * @method string getPublicURL() Obtain Public network access URL
 * @method void setPublicURL(string $PublicURL) Set Public network access URL
 * @method string getPrivateURL() Obtain VPC access URL
 * @method void setPrivateURL(string $PrivateURL) Set VPC access URL
 * @method string getAccountInfo() Obtain Account
 * @method void setAccountInfo(string $AccountInfo) Set Account
 */
class CloudFunctionItem extends AbstractModel
{
    /**
     * @var string Cloud function name
     */
    public $InstanceName;

    /**
     * @var string Function status
     */
    public $InstanceStatus;

    /**
     * @var string Cloud function type
     */
    public $FunctionType;

    /**
     * @var string Resource tag
     */
    public $InstanceTag;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Custom domain name
     */
    public $Domain;

    /**
     * @var string Instance ID.
     */
    public $InstanceID;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var integer Tenant ID
     */
    public $AppID;

    /**
     * @var string Displayed content of function status
     */
    public $InstanceStatusDisplay;

    /**
     * @var string Core asset tag
     */
    public $CoreAssetFlag;

    /**
     * @var string Public network access URL
     */
    public $PublicURL;

    /**
     * @var string VPC access URL
     */
    public $PrivateURL;

    /**
     * @var string Account
     */
    public $AccountInfo;

    /**
     * @param string $InstanceName Cloud function name
     * @param string $InstanceStatus Function status
     * @param string $FunctionType Cloud function type
     * @param string $InstanceTag Resource tag
     * @param string $Namespace Namespace
     * @param string $Region Region.
     * @param string $Domain Custom domain name
     * @param string $InstanceID Instance ID.
     * @param string $InstanceType Instance type
     * @param integer $AppID Tenant ID
     * @param string $InstanceStatusDisplay Displayed content of function status
     * @param string $CoreAssetFlag Core asset tag
     * @param string $PublicURL Public network access URL
     * @param string $PrivateURL VPC access URL
     * @param string $AccountInfo Account
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("FunctionType",$param) and $param["FunctionType"] !== null) {
            $this->FunctionType = $param["FunctionType"];
        }

        if (array_key_exists("InstanceTag",$param) and $param["InstanceTag"] !== null) {
            $this->InstanceTag = $param["InstanceTag"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("InstanceStatusDisplay",$param) and $param["InstanceStatusDisplay"] !== null) {
            $this->InstanceStatusDisplay = $param["InstanceStatusDisplay"];
        }

        if (array_key_exists("CoreAssetFlag",$param) and $param["CoreAssetFlag"] !== null) {
            $this->CoreAssetFlag = $param["CoreAssetFlag"];
        }

        if (array_key_exists("PublicURL",$param) and $param["PublicURL"] !== null) {
            $this->PublicURL = $param["PublicURL"];
        }

        if (array_key_exists("PrivateURL",$param) and $param["PrivateURL"] !== null) {
            $this->PrivateURL = $param["PrivateURL"];
        }

        if (array_key_exists("AccountInfo",$param) and $param["AccountInfo"] !== null) {
            $this->AccountInfo = $param["AccountInfo"];
        }
    }
}
