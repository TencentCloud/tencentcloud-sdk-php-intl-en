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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ServiceParameter
 *
 * @method string getName() Obtain API backend service parameter name. This is only applicable when `ServiceType` is `HTTP`. Names of frontend and backend parameters can be different. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set API backend service parameter name. This is only applicable when `ServiceType` is `HTTP`. Names of frontend and backend parameters can be different. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPosition() Obtain Location of the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`. Configurations of frontend and backend parameters can be different. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(string $Position) Set Location of the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`. Configurations of frontend and backend parameters can be different. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRelevantRequestParameterPosition() Obtain Location of the frontend parameter corresponding to the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelevantRequestParameterPosition(string $RelevantRequestParameterPosition) Set Location of the frontend parameter corresponding to the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRelevantRequestParameterName() Obtain Name of the frontend parameter corresponding to the API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelevantRequestParameterName(string $RelevantRequestParameterName) Set Name of the frontend parameter corresponding to the API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultValue() Obtain Default value of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Default value of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRelevantRequestParameterDesc() Obtain Description of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelevantRequestParameterDesc(string $RelevantRequestParameterDesc) Set Description of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeApiResultServiceParametersInfo extends AbstractModel
{
    /**
     * @var string API backend service parameter name. This is only applicable when `ServiceType` is `HTTP`. Names of frontend and backend parameters can be different. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Location of the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`. Configurations of frontend and backend parameters can be different. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var string Location of the frontend parameter corresponding to the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelevantRequestParameterPosition;

    /**
     * @var string Name of the frontend parameter corresponding to the API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelevantRequestParameterName;

    /**
     * @var string Default value of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultValue;

    /**
     * @var string Description of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelevantRequestParameterDesc;

    /**
     * @param string $Name API backend service parameter name. This is only applicable when `ServiceType` is `HTTP`. Names of frontend and backend parameters can be different. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Position Location of the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`. Configurations of frontend and backend parameters can be different. 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RelevantRequestParameterPosition Location of the frontend parameter corresponding to the API backend service parameter, such as `head` This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RelevantRequestParameterName Name of the frontend parameter corresponding to the API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultValue Default value of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RelevantRequestParameterDesc Description of API backend service parameter. This is only applicable when `ServiceType` is `HTTP`.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("RelevantRequestParameterPosition",$param) and $param["RelevantRequestParameterPosition"] !== null) {
            $this->RelevantRequestParameterPosition = $param["RelevantRequestParameterPosition"];
        }

        if (array_key_exists("RelevantRequestParameterName",$param) and $param["RelevantRequestParameterName"] !== null) {
            $this->RelevantRequestParameterName = $param["RelevantRequestParameterName"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("RelevantRequestParameterDesc",$param) and $param["RelevantRequestParameterDesc"] !== null) {
            $this->RelevantRequestParameterDesc = $param["RelevantRequestParameterDesc"];
        }
    }
}
