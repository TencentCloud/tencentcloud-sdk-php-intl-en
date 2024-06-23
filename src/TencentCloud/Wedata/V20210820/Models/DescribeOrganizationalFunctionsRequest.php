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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationalFunctions request structure.
 *
 * @method string getType() Obtain Scenario Type: Development, In Use
 * @method void setType(string $Type) Set Scenario Type: Development, In Use
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getName() Obtain Function Name
 * @method void setName(string $Name) Set Function Name
 * @method string getDisplayName() Obtain Display Name
 * @method void setDisplayName(string $DisplayName) Set Display Name
 * @method string getEnvType() Obtain Standard Mode Development Environment: DEV
Standard Mode Production Environment: PROD
Simple Mode: ALL

 * @method void setEnvType(string $EnvType) Set Standard Mode Development Environment: DEV
Standard Mode Production Environment: PROD
Simple Mode: ALL
 */
class DescribeOrganizationalFunctionsRequest extends AbstractModel
{
    /**
     * @var string Scenario Type: Development, In Use
     */
    public $Type;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Function Name
     */
    public $Name;

    /**
     * @var string Display Name
     */
    public $DisplayName;

    /**
     * @var string Standard Mode Development Environment: DEV
Standard Mode Production Environment: PROD
Simple Mode: ALL

     */
    public $EnvType;

    /**
     * @param string $Type Scenario Type: Development, In Use
     * @param string $ProjectId Project ID
     * @param string $Name Function Name
     * @param string $DisplayName Display Name
     * @param string $EnvType Standard Mode Development Environment: DEV
Standard Mode Production Environment: PROD
Simple Mode: ALL
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }
    }
}
