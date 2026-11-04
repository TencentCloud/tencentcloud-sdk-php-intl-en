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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent plug-in credential configuration
 *
 * @method integer getAuthValueSource() Obtain <p>Plugin authentication value source</p><p>Enumeration values:</p><ul><li>0: Unspecified</li><li>1: Use the default authentication value of the plug-in. Only APIKey/AccessKey is supported.</li><li>2: Refer to a credential</li><li>3: Refer to a variable</li></ul>
 * @method void setAuthValueSource(integer $AuthValueSource) Set <p>Plugin authentication value source</p><p>Enumeration values:</p><ul><li>0: Unspecified</li><li>1: Use the default authentication value of the plug-in. Only APIKey/AccessKey is supported.</li><li>2: Refer to a credential</li><li>3: Refer to a variable</li></ul>
 * @method string getCredentialId() Obtain <p>Credential ID</p><p>Input parameter limit: required when AuthValueSource=2</p>
 * @method void setCredentialId(string $CredentialId) Set <p>Credential ID</p><p>Input parameter limit: required when AuthValueSource=2</p>
 * @method array getParamList() Obtain <p>Parameter configuration</p>
 * @method void setParamList(array $ParamList) Set <p>Parameter configuration</p>
 */
class AgentPluginCredentialConfig extends AbstractModel
{
    /**
     * @var integer <p>Plugin authentication value source</p><p>Enumeration values:</p><ul><li>0: Unspecified</li><li>1: Use the default authentication value of the plug-in. Only APIKey/AccessKey is supported.</li><li>2: Refer to a credential</li><li>3: Refer to a variable</li></ul>
     */
    public $AuthValueSource;

    /**
     * @var string <p>Credential ID</p><p>Input parameter limit: required when AuthValueSource=2</p>
     */
    public $CredentialId;

    /**
     * @var array <p>Parameter configuration</p>
     */
    public $ParamList;

    /**
     * @param integer $AuthValueSource <p>Plugin authentication value source</p><p>Enumeration values:</p><ul><li>0: Unspecified</li><li>1: Use the default authentication value of the plug-in. Only APIKey/AccessKey is supported.</li><li>2: Refer to a credential</li><li>3: Refer to a variable</li></ul>
     * @param string $CredentialId <p>Credential ID</p><p>Input parameter limit: required when AuthValueSource=2</p>
     * @param array $ParamList <p>Parameter configuration</p>
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
        if (array_key_exists("AuthValueSource",$param) and $param["AuthValueSource"] !== null) {
            $this->AuthValueSource = $param["AuthValueSource"];
        }

        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new AgentPluginCredentialParam();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
