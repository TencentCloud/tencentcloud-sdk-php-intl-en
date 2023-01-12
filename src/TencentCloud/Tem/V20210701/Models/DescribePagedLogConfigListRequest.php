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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePagedLogConfigList request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getName() Obtain Name of the rule
 * @method void setName(string $Name) Set Name of the rule
 * @method integer getLimit() Obtain Number of entries per page. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: 20
 * @method string getContinueToken() Obtain Paging cursor
 * @method void setContinueToken(string $ContinueToken) Set Paging cursor
 */
class DescribePagedLogConfigListRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Name of the rule
     */
    public $Name;

    /**
     * @var integer Number of entries per page. Default value: 20
     */
    public $Limit;

    /**
     * @var string Paging cursor
     */
    public $ContinueToken;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $ApplicationId Application ID
     * @param string $ApplicationName Application name
     * @param string $Name Name of the rule
     * @param integer $Limit Number of entries per page. Default value: 20
     * @param string $ContinueToken Paging cursor
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ContinueToken",$param) and $param["ContinueToken"] !== null) {
            $this->ContinueToken = $param["ContinueToken"];
        }
    }
}
