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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageRegistryRegistryDetail response structure.
 *
 * @method string getName() Obtain Repository name
 * @method void setName(string $Name) Set Repository name
 * @method string getUsername() Obtain Username
 * @method void setUsername(string $Username) Set Username
 * @method string getPassword() Obtain Password
 * @method void setPassword(string $Password) Set Password
 * @method string getUrl() Obtain Repository URL
 * @method void setUrl(string $Url) Set Repository URL
 * @method string getRegistryType() Obtain Repository type, which can be `harbor`.
 * @method void setRegistryType(string $RegistryType) Set Repository type, which can be `harbor`.
 * @method string getRegistryVersion() Obtain Repository version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryVersion(string $RegistryVersion) Set Repository version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNetType() Obtain Network type, which can be `public` (public network).
 * @method void setNetType(string $NetType) Set Network type, which can be `public` (public network).
 * @method string getRegistryRegion() Obtain Region. Default value: `default`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryRegion(string $RegistryRegion) Set Region. Default value: `default`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSpeedLimit() Obtain Speed limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpeedLimit(integer $SpeedLimit) Set Speed limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInsecure() Obtain Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInsecure(integer $Insecure) Set Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAssetImageRegistryRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string Repository name
     */
    public $Name;

    /**
     * @var string Username
     */
    public $Username;

    /**
     * @var string Password
     */
    public $Password;

    /**
     * @var string Repository URL
     */
    public $Url;

    /**
     * @var string Repository type, which can be `harbor`.
     */
    public $RegistryType;

    /**
     * @var string Repository version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryVersion;

    /**
     * @var string Network type, which can be `public` (public network).
     */
    public $NetType;

    /**
     * @var string Region. Default value: `default`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryRegion;

    /**
     * @var integer Speed limit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpeedLimit;

    /**
     * @var integer Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Insecure;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Name Repository name
     * @param string $Username Username
     * @param string $Password Password
     * @param string $Url Repository URL
     * @param string $RegistryType Repository type, which can be `harbor`.
     * @param string $RegistryVersion Repository version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NetType Network type, which can be `public` (public network).
     * @param string $RegistryRegion Region. Default value: `default`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SpeedLimit Speed limit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Insecure Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("SpeedLimit",$param) and $param["SpeedLimit"] !== null) {
            $this->SpeedLimit = $param["SpeedLimit"];
        }

        if (array_key_exists("Insecure",$param) and $param["Insecure"] !== null) {
            $this->Insecure = $param["Insecure"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
