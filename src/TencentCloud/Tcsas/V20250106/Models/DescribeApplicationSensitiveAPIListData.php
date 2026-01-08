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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of sensitive APIs of an application
 *
 * @method string getAPIId() Obtain APIID
 * @method void setAPIId(string $APIId) Set APIID
 * @method string getAPIName() Obtain API name
 * @method void setAPIName(string $APIName) Set API name
 * @method string getAPIMethod() Obtain API request method
 * @method void setAPIMethod(string $APIMethod) Set API request method
 * @method string getAPIDesc() Obtain API description
 * @method void setAPIDesc(string $APIDesc) Set API description
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateUser() Obtain Updater
 * @method void setUpdateUser(string $UpdateUser) Set Updater
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method string getApplicationLogo() Obtain Specifies the application icon.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Specifies the application icon.
 * @method integer getAPIType() Obtain API type. 1: system; 2: custom.
 * @method void setAPIType(integer $APIType) Set API type. 1: system; 2: custom.
 * @method integer getStatus() Obtain API status. 0: public; 1: restricted.
 * @method void setStatus(integer $Status) Set API status. 0: public; 1: restricted.
 */
class DescribeApplicationSensitiveAPIListData extends AbstractModel
{
    /**
     * @var string APIID
     */
    public $APIId;

    /**
     * @var string API name
     */
    public $APIName;

    /**
     * @var string API request method
     */
    public $APIMethod;

    /**
     * @var string API description
     */
    public $APIDesc;

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
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var string Specifies the application icon.
     */
    public $ApplicationLogo;

    /**
     * @var integer API type. 1: system; 2: custom.
     */
    public $APIType;

    /**
     * @var integer API status. 0: public; 1: restricted.
     */
    public $Status;

    /**
     * @param string $APIId APIID
     * @param string $APIName API name
     * @param string $APIMethod API request method
     * @param string $APIDesc API description
     * @param string $CreateUser Creator
     * @param string $CreateTime Creation time
     * @param string $UpdateUser Updater
     * @param string $UpdateTime Update time
     * @param string $ApplicationId Application ID
     * @param string $ApplicationName Application name
     * @param string $TeamId Team ID
     * @param string $TeamName Team name
     * @param string $ApplicationLogo Specifies the application icon.
     * @param integer $APIType API type. 1: system; 2: custom.
     * @param integer $Status API status. 0: public; 1: restricted.
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
        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("APIName",$param) and $param["APIName"] !== null) {
            $this->APIName = $param["APIName"];
        }

        if (array_key_exists("APIMethod",$param) and $param["APIMethod"] !== null) {
            $this->APIMethod = $param["APIMethod"];
        }

        if (array_key_exists("APIDesc",$param) and $param["APIDesc"] !== null) {
            $this->APIDesc = $param["APIDesc"];
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
