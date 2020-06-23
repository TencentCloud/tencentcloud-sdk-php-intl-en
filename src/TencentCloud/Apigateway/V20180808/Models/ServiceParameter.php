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
 * @method string getName() Obtain API backend service parameter name, which is used only if `ServiceType` is `HTTP`. The frontend and backend parameter names can be different.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set API backend service parameter name, which is used only if `ServiceType` is `HTTP`. The frontend and backend parameter names can be different.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPosition() Obtain Position of API backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`. The positions of frontend and backend parameters can be different.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(string $Position) Set Position of API backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`. The positions of frontend and backend parameters can be different.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRelevantRequestParameterPosition() Obtain Position of the API frontend parameter corresponding to the backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRelevantRequestParameterPosition(string $RelevantRequestParameterPosition) Set Position of the API frontend parameter corresponding to the backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRelevantRequestParameterName() Obtain Name of the API frontend parameter corresponding to the backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRelevantRequestParameterName(string $RelevantRequestParameterName) Set Name of the API frontend parameter corresponding to the backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultValue() Obtain Default value of API backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Default value of API backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRelevantRequestParameterDesc() Obtain API backend service parameter remarks, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRelevantRequestParameterDesc(string $RelevantRequestParameterDesc) Set API backend service parameter remarks, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRelevantRequestParameterType() Obtain API backend service parameter type, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRelevantRequestParameterType(string $RelevantRequestParameterType) Set API backend service parameter type, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ServiceParameter extends AbstractModel
{
    /**
     * @var string API backend service parameter name, which is used only if `ServiceType` is `HTTP`. The frontend and backend parameter names can be different.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Position of API backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`. The positions of frontend and backend parameters can be different.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var string Position of the API frontend parameter corresponding to the backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RelevantRequestParameterPosition;

    /**
     * @var string Name of the API frontend parameter corresponding to the backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RelevantRequestParameterName;

    /**
     * @var string Default value of API backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultValue;

    /**
     * @var string API backend service parameter remarks, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RelevantRequestParameterDesc;

    /**
     * @var string API backend service parameter type, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RelevantRequestParameterType;

    /**
     * @param string $Name API backend service parameter name, which is used only if `ServiceType` is `HTTP`. The frontend and backend parameter names can be different.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Position Position of API backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`. The positions of frontend and backend parameters can be different.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RelevantRequestParameterPosition Position of the API frontend parameter corresponding to the backend service parameter, such as `head`, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RelevantRequestParameterName Name of the API frontend parameter corresponding to the backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultValue Default value of API backend service parameter, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RelevantRequestParameterDesc API backend service parameter remarks, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RelevantRequestParameterType API backend service parameter type, which is used only if `ServiceType` is `HTTP`.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("RelevantRequestParameterType",$param) and $param["RelevantRequestParameterType"] !== null) {
            $this->RelevantRequestParameterType = $param["RelevantRequestParameterType"];
        }
    }
}
