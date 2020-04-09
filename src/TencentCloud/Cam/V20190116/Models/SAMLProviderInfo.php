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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SAML identity provider
 *
 * @method string getName() Obtain SAML identity provider name
 * @method void setName(string $Name) Set SAML identity provider name
 * @method string getDescription() Obtain SAML identity provider description
 * @method void setDescription(string $Description) Set SAML identity provider description
 * @method string getCreateTime() Obtain Time SAML identity provider created
 * @method void setCreateTime(string $CreateTime) Set Time SAML identity provider created
 * @method string getModifyTime() Obtain Time SAML identity provider last modified
 * @method void setModifyTime(string $ModifyTime) Set Time SAML identity provider last modified
 */
class SAMLProviderInfo extends AbstractModel
{
    /**
     * @var string SAML identity provider name
     */
    public $Name;

    /**
     * @var string SAML identity provider description
     */
    public $Description;

    /**
     * @var string Time SAML identity provider created
     */
    public $CreateTime;

    /**
     * @var string Time SAML identity provider last modified
     */
    public $ModifyTime;

    /**
     * @param string $Name SAML identity provider name
     * @param string $Description SAML identity provider description
     * @param string $CreateTime Time SAML identity provider created
     * @param string $ModifyTime Time SAML identity provider last modified
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
