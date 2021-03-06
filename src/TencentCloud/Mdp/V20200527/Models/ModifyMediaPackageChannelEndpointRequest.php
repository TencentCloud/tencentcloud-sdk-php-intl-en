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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMediaPackageChannelEndpoint request structure.
 *
 * @method string getId() Obtain Channel ID.
 * @method void setId(string $Id) Set Channel ID.
 * @method string getUrl() Obtain Channel endpoint URL.
 * @method void setUrl(string $Url) Set Channel endpoint URL.
 * @method string getName() Obtain The channel name after modification.
 * @method void setName(string $Name) Set The channel name after modification.
 * @method EndpointAuthInfo getAuthInfo() Obtain The channel authentication after modification.
 * @method void setAuthInfo(EndpointAuthInfo $AuthInfo) Set The channel authentication after modification.
 */
class ModifyMediaPackageChannelEndpointRequest extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $Id;

    /**
     * @var string Channel endpoint URL.
     */
    public $Url;

    /**
     * @var string The channel name after modification.
     */
    public $Name;

    /**
     * @var EndpointAuthInfo The channel authentication after modification.
     */
    public $AuthInfo;

    /**
     * @param string $Id Channel ID.
     * @param string $Url Channel endpoint URL.
     * @param string $Name The channel name after modification.
     * @param EndpointAuthInfo $AuthInfo The channel authentication after modification.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new EndpointAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }
    }
}
