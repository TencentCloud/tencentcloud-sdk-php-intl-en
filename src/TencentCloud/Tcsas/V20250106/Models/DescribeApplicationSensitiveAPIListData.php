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
 * Superapp sensitive API list data.
 *
 * @method string getAPIId() Obtain <p>APIID</p>
 * @method void setAPIId(string $APIId) Set <p>APIID</p>
 * @method string getAPIName() Obtain <p>API name.</p>
 * @method void setAPIName(string $APIName) Set <p>API name.</p>
 * @method string getAPIMethod() Obtain <p>API method.</p>
 * @method void setAPIMethod(string $APIMethod) Set <p>API method.</p>
 * @method string getAPIDesc() Obtain <p>API description.</p>
 * @method void setAPIDesc(string $APIDesc) Set <p>API description.</p>
 * @method string getCreateUser() Obtain <p>Creator.</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateUser() Obtain <p>Last modifier.</p>
 * @method void setUpdateUser(string $UpdateUser) Set <p>Last modifier.</p>
 * @method string getUpdateTime() Obtain <p>Last modified time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last modified time.</p>
 * @method string getApplicationId() Obtain <p>Superapp ID.</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Superapp ID.</p>
 * @method string getApplicationName() Obtain <p>Superapp name.</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Superapp name.</p>
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method string getApplicationLogo() Obtain <p>Superapp icon.</p>
 * @method void setApplicationLogo(string $ApplicationLogo) Set <p>Superapp icon.</p>
 * @method integer getAPIType() Obtain <p>API type. Valid values: 1: System; 2: Custom.</p>
 * @method void setAPIType(integer $APIType) Set <p>API type. Valid values: 1: System; 2: Custom.</p>
 * @method integer getStatus() Obtain <p>API status. Valid values: 0: Public; 1: Restricted.</p>
 * @method void setStatus(integer $Status) Set <p>API status. Valid values: 0: Public; 1: Restricted.</p>
 * @method integer getUseScope() Obtain <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Both.</p>
 * @method void setUseScope(integer $UseScope) Set <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Both.</p>
 */
class DescribeApplicationSensitiveAPIListData extends AbstractModel
{
    /**
     * @var string <p>APIID</p>
     */
    public $APIId;

    /**
     * @var string <p>API name.</p>
     */
    public $APIName;

    /**
     * @var string <p>API method.</p>
     */
    public $APIMethod;

    /**
     * @var string <p>API description.</p>
     */
    public $APIDesc;

    /**
     * @var string <p>Creator.</p>
     */
    public $CreateUser;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last modifier.</p>
     */
    public $UpdateUser;

    /**
     * @var string <p>Last modified time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Superapp ID.</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>Superapp name.</p>
     */
    public $ApplicationName;

    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var string <p>Superapp icon.</p>
     */
    public $ApplicationLogo;

    /**
     * @var integer <p>API type. Valid values: 1: System; 2: Custom.</p>
     */
    public $APIType;

    /**
     * @var integer <p>API status. Valid values: 0: Public; 1: Restricted.</p>
     */
    public $Status;

    /**
     * @var integer <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Both.</p>
     */
    public $UseScope;

    /**
     * @param string $APIId <p>APIID</p>
     * @param string $APIName <p>API name.</p>
     * @param string $APIMethod <p>API method.</p>
     * @param string $APIDesc <p>API description.</p>
     * @param string $CreateUser <p>Creator.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateUser <p>Last modifier.</p>
     * @param string $UpdateTime <p>Last modified time.</p>
     * @param string $ApplicationId <p>Superapp ID.</p>
     * @param string $ApplicationName <p>Superapp name.</p>
     * @param string $TeamId <p>Team ID.</p>
     * @param string $TeamName <p>Team name.</p>
     * @param string $ApplicationLogo <p>Superapp icon.</p>
     * @param integer $APIType <p>API type. Valid values: 1: System; 2: Custom.</p>
     * @param integer $Status <p>API status. Valid values: 0: Public; 1: Restricted.</p>
     * @param integer $UseScope <p>Applicable scope: Valid values: 0: Mini program; 1: Mini game; 100: Both.</p>
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

        if (array_key_exists("UseScope",$param) and $param["UseScope"] !== null) {
            $this->UseScope = $param["UseScope"];
        }
    }
}
