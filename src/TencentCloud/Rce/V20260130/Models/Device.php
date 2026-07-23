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
 * The basic infomation of the device
 *
 * @method string getDeviceId() Obtain <p>The unique id of device returned by RCE</p>
 * @method void setDeviceId(string $DeviceId) Set <p>The unique id of device returned by RCE</p>
 * @method string getAppVersion() Obtain <p>The version of the application</p>
 * @method void setAppVersion(string $AppVersion) Set <p>The version of the application</p>
 * @method string getBrand() Obtain <p>Device brand</p>
 * @method void setBrand(string $Brand) Set <p>Device brand</p>
 * @method string getClientIp() Obtain <p>Client IP address</p>
 * @method void setClientIp(string $ClientIp) Set <p>Client IP address</p>
 * @method string getModel() Obtain <p>Device model</p>
 * @method void setModel(string $Model) Set <p>Device model</p>
 * @method string getNetworkType() Obtain <p>Network type of the device</p>
 * @method void setNetworkType(string $NetworkType) Set <p>Network type of the device</p>
 * @method string getPackageName() Obtain <p>The package name of the application</p>
 * @method void setPackageName(string $PackageName) Set <p>The package name of the application</p>
 * @method string getPlatform() Obtain <p>Device platform</p><p>Enumeration value:</p><ul><li>2: Android</li><li>3: IOS</li><li>4: H5</li><li>5: WeChat Mini Program</li></ul>
 * @method void setPlatform(string $Platform) Set <p>Device platform</p><p>Enumeration value:</p><ul><li>2: Android</li><li>3: IOS</li><li>4: H5</li><li>5: WeChat Mini Program</li></ul>
 * @method string getSystemVersion() Obtain <p>Device system version</p>
 * @method void setSystemVersion(string $SystemVersion) Set <p>Device system version</p>
 * @method string getSdkBuildVersion() Obtain <p>The build version of SDK</p>
 * @method void setSdkBuildVersion(string $SdkBuildVersion) Set <p>The build version of SDK</p>
 */
class Device extends AbstractModel
{
    /**
     * @var string <p>The unique id of device returned by RCE</p>
     */
    public $DeviceId;

    /**
     * @var string <p>The version of the application</p>
     */
    public $AppVersion;

    /**
     * @var string <p>Device brand</p>
     */
    public $Brand;

    /**
     * @var string <p>Client IP address</p>
     */
    public $ClientIp;

    /**
     * @var string <p>Device model</p>
     */
    public $Model;

    /**
     * @var string <p>Network type of the device</p>
     */
    public $NetworkType;

    /**
     * @var string <p>The package name of the application</p>
     */
    public $PackageName;

    /**
     * @var string <p>Device platform</p><p>Enumeration value:</p><ul><li>2: Android</li><li>3: IOS</li><li>4: H5</li><li>5: WeChat Mini Program</li></ul>
     */
    public $Platform;

    /**
     * @var string <p>Device system version</p>
     */
    public $SystemVersion;

    /**
     * @var string <p>The build version of SDK</p>
     */
    public $SdkBuildVersion;

    /**
     * @param string $DeviceId <p>The unique id of device returned by RCE</p>
     * @param string $AppVersion <p>The version of the application</p>
     * @param string $Brand <p>Device brand</p>
     * @param string $ClientIp <p>Client IP address</p>
     * @param string $Model <p>Device model</p>
     * @param string $NetworkType <p>Network type of the device</p>
     * @param string $PackageName <p>The package name of the application</p>
     * @param string $Platform <p>Device platform</p><p>Enumeration value:</p><ul><li>2: Android</li><li>3: IOS</li><li>4: H5</li><li>5: WeChat Mini Program</li></ul>
     * @param string $SystemVersion <p>Device system version</p>
     * @param string $SdkBuildVersion <p>The build version of SDK</p>
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SystemVersion",$param) and $param["SystemVersion"] !== null) {
            $this->SystemVersion = $param["SystemVersion"];
        }

        if (array_key_exists("SdkBuildVersion",$param) and $param["SdkBuildVersion"] !== null) {
            $this->SdkBuildVersion = $param["SdkBuildVersion"];
        }
    }
}
