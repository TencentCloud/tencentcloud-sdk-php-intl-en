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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of the app, os and device
 *
 * @method string getOS() Obtain <p>The operating system your application is running on</p>
 * @method void setOS(string $OS) Set <p>The operating system your application is running on</p>
 * @method string getOSVersion() Obtain <p>The operating system version  your application is running on</p>
 * @method void setOSVersion(string $OSVersion) Set <p>The operating system version  your application is running on</p>
 * @method string getDeviceManufacturer() Obtain <p>The manufacturer of  the device your application is running on</p>
 * @method void setDeviceManufacturer(string $DeviceManufacturer) Set <p>The manufacturer of  the device your application is running on</p>
 * @method string getDeviceModel() Obtain <p>The model of the device your application is running on</p>
 * @method void setDeviceModel(string $DeviceModel) Set <p>The model of the device your application is running on</p>
 * @method string getDeviceId() Obtain <p>The ID of the device your application is running on</p>
 * @method void setDeviceId(string $DeviceId) Set <p>The ID of the device your application is running on</p>
 * @method string getAppName() Obtain <p>The name of your application</p>
 * @method void setAppName(string $AppName) Set <p>The name of your application</p>
 * @method string getAppVersion() Obtain <p>The version of your application</p>
 * @method void setAppVersion(string $AppVersion) Set <p>The version of your application</p>
 * @method string getClientLanguage() Obtain <p>The language of your application</p>
 * @method void setClientLanguage(string $ClientLanguage) Set <p>The language of your application</p>
 */
class App extends AbstractModel
{
    /**
     * @var string <p>The operating system your application is running on</p>
     */
    public $OS;

    /**
     * @var string <p>The operating system version  your application is running on</p>
     */
    public $OSVersion;

    /**
     * @var string <p>The manufacturer of  the device your application is running on</p>
     */
    public $DeviceManufacturer;

    /**
     * @var string <p>The model of the device your application is running on</p>
     */
    public $DeviceModel;

    /**
     * @var string <p>The ID of the device your application is running on</p>
     */
    public $DeviceId;

    /**
     * @var string <p>The name of your application</p>
     */
    public $AppName;

    /**
     * @var string <p>The version of your application</p>
     */
    public $AppVersion;

    /**
     * @var string <p>The language of your application</p>
     */
    public $ClientLanguage;

    /**
     * @param string $OS <p>The operating system your application is running on</p>
     * @param string $OSVersion <p>The operating system version  your application is running on</p>
     * @param string $DeviceManufacturer <p>The manufacturer of  the device your application is running on</p>
     * @param string $DeviceModel <p>The model of the device your application is running on</p>
     * @param string $DeviceId <p>The ID of the device your application is running on</p>
     * @param string $AppName <p>The name of your application</p>
     * @param string $AppVersion <p>The version of your application</p>
     * @param string $ClientLanguage <p>The language of your application</p>
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
        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("OSVersion",$param) and $param["OSVersion"] !== null) {
            $this->OSVersion = $param["OSVersion"];
        }

        if (array_key_exists("DeviceManufacturer",$param) and $param["DeviceManufacturer"] !== null) {
            $this->DeviceManufacturer = $param["DeviceManufacturer"];
        }

        if (array_key_exists("DeviceModel",$param) and $param["DeviceModel"] !== null) {
            $this->DeviceModel = $param["DeviceModel"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("ClientLanguage",$param) and $param["ClientLanguage"] !== null) {
            $this->ClientLanguage = $param["ClientLanguage"];
        }
    }
}
