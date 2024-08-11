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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sensitive API information
 *
 * @method string getApiId() Obtain APIID
 * @method void setApiId(string $ApiId) Set APIID
 * @method string getApiName() Obtain API name
 * @method void setApiName(string $ApiName) Set API name
 * @method string getApiMethod() Obtain API method
 * @method void setApiMethod(string $ApiMethod) Set API method
 * @method string getApiDesc() Obtain API description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiDesc(string $ApiDesc) Set API description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateUser() Obtain Updater
 * @method void setUpdateUser(string $UpdateUser) Set Updater
 * @method string getUpdateTime() Obtain Update date
 * @method void setUpdateTime(string $UpdateTime) Set Update date
 * @method string getApplicationId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationLogo() Obtain Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAPIType() Obtain API type 1 - System API 2 Custom API
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIType(integer $APIType) Set API type 1 - System API 2 Custom API
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain API status 0 Public 1 Restricted
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set API status 0 Public 1 Restricted
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SensitiveApiInfoResp extends AbstractModel
{
    /**
     * @var string APIID
     */
    public $ApiId;

    /**
     * @var string API name
     */
    public $ApiName;

    /**
     * @var string API method
     */
    public $ApiMethod;

    /**
     * @var string API description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiDesc;

    /**
     * @var string Creator
     */
    public $CreateUser;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Updater
     */
    public $UpdateUser;

    /**
     * @var string Update date
     */
    public $UpdateTime;

    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamId;

    /**
     * @var string Team name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @var string Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationLogo;

    /**
     * @var integer API type 1 - System API 2 Custom API
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIType;

    /**
     * @var integer API status 0 Public 1 Restricted
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $ApiId APIID
     * @param string $ApiName API name
     * @param string $ApiMethod API method
     * @param string $ApiDesc API description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
     * @param string $CreateTime Creation time
     * @param string $UpdateUser Updater
     * @param string $UpdateTime Update date
     * @param string $ApplicationId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationLogo Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $APIType API type 1 - System API 2 Custom API
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status API status 0 Public 1 Restricted
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiMethod",$param) and $param["ApiMethod"] !== null) {
            $this->ApiMethod = $param["ApiMethod"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("ApplicationLogo",$param) and $param["ApplicationLogo"] !== null) {
            $this->ApplicationLogo = $param["ApplicationLogo"];
        }

        if (array_key_exists("APIType",$param) and $param["APIType"] !== null) {
            $this->APIType = $param["APIType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
