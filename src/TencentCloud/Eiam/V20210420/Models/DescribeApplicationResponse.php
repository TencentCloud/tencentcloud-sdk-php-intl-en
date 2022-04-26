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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplication response structure.
 *
 * @method string getKeyId() Obtain Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeyId(string $KeyId) Set Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastModifiedDate() Obtain Last modification time of the application in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifiedDate(string $LastModifiedDate) Set Last modification time of the application in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClientId() Obtain Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClientId(string $ClientId) Set Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationType() Obtain Application type, i.e., the application template type selected during application creation.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationType(string $ApplicationType) Set Application type, i.e., the application template type selected during application creation.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedDate() Obtain Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedDate(string $CreatedDate) Set Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTokenExpired() Obtain Token validity period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTokenExpired(integer $TokenExpired) Set Token validity period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClientSecret() Obtain Client secret.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClientSecret(string $ClientSecret) Set Client secret.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPublicKey() Obtain Public key information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicKey(string $PublicKey) Set Public key information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAuthorizeUrl() Obtain Authorization address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthorizeUrl(string $AuthorizeUrl) Set Authorization address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIconUrl() Obtain Access address of the application icon image.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIconUrl(string $IconUrl) Set Access address of the application icon image.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSecureLevel() Obtain Security level.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecureLevel(string $SecureLevel) Set Security level.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getAppStatus() Obtain Application status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAppStatus(boolean $AppStatus) Set Application status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeApplicationResponse extends AbstractModel
{
    /**
     * @var string Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeyId;

    /**
     * @var string Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string Last modification time of the application in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifiedDate;

    /**
     * @var string Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClientId;

    /**
     * @var string Application type, i.e., the application template type selected during application creation.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationType;

    /**
     * @var string Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedDate;

    /**
     * @var string Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var integer Token validity period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TokenExpired;

    /**
     * @var string Client secret.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClientSecret;

    /**
     * @var string Public key information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicKey;

    /**
     * @var string Authorization address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthorizeUrl;

    /**
     * @var string Access address of the application icon image.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IconUrl;

    /**
     * @var string Security level.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecureLevel;

    /**
     * @var boolean Application status.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AppStatus;

    /**
     * @var string Description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $KeyId Key ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Displayed application name, which can contain up to 64 characters and is the same as the application name by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastModifiedDate Last modification time of the application in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClientId Client ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationType Application type, i.e., the application template type selected during application creation.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedDate Application creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId Application ID, which is globally unique.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TokenExpired Token validity period in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClientSecret Client secret.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PublicKey Public key information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AuthorizeUrl Authorization address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IconUrl Access address of the application icon image.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SecureLevel Security level.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $AppStatus Application status.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("TokenExpired",$param) and $param["TokenExpired"] !== null) {
            $this->TokenExpired = $param["TokenExpired"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("AuthorizeUrl",$param) and $param["AuthorizeUrl"] !== null) {
            $this->AuthorizeUrl = $param["AuthorizeUrl"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("SecureLevel",$param) and $param["SecureLevel"] !== null) {
            $this->SecureLevel = $param["SecureLevel"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
