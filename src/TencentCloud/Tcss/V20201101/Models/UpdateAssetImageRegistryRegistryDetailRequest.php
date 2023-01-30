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
 * UpdateAssetImageRegistryRegistryDetail request structure.
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
 * @method string getNetType() Obtain Network type, which can be `public` (public network).
 * @method void setNetType(string $NetType) Set Network type, which can be `public` (public network).
 * @method string getRegistryVersion() Obtain Repository version
 * @method void setRegistryVersion(string $RegistryVersion) Set Repository version
 * @method string getRegistryRegion() Obtain Region. Default value: `default`.
 * @method void setRegistryRegion(string $RegistryRegion) Set Region. Default value: `default`.
 * @method integer getSpeedLimit() Obtain Speed limit
 * @method void setSpeedLimit(integer $SpeedLimit) Set Speed limit
 * @method integer getInsecure() Obtain Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
 * @method void setInsecure(integer $Insecure) Set Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
 */
class UpdateAssetImageRegistryRegistryDetailRequest extends AbstractModel
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
     * @var string Network type, which can be `public` (public network).
     */
    public $NetType;

    /**
     * @var string Repository version
     */
    public $RegistryVersion;

    /**
     * @var string Region. Default value: `default`.
     */
    public $RegistryRegion;

    /**
     * @var integer Speed limit
     */
    public $SpeedLimit;

    /**
     * @var integer Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
     */
    public $Insecure;

    /**
     * @param string $Name Repository name
     * @param string $Username Username
     * @param string $Password Password
     * @param string $Url Repository URL
     * @param string $RegistryType Repository type, which can be `harbor`.
     * @param string $NetType Network type, which can be `public` (public network).
     * @param string $RegistryVersion Repository version
     * @param string $RegistryRegion Region. Default value: `default`.
     * @param integer $SpeedLimit Speed limit
     * @param integer $Insecure Valid values: `0` (secure mode with certificate verification, which is the default value); `1` (unsecure mode that skips certificate verification).
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

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
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
    }
}
