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
 * Channel endpoint information.
 *
 * @method string getName() Obtain Endpoint name.
 * @method void setName(string $Name) Set Endpoint name.
 * @method string getUrl() Obtain Endpoint URL.
 * @method void setUrl(string $Url) Set Endpoint URL.
 * @method EndpointAuthInfo getAuthInfo() Obtain Endpoint authentication information.
 * @method void setAuthInfo(EndpointAuthInfo $AuthInfo) Set Endpoint authentication information.
 */
class EndpointInfo extends AbstractModel
{
    /**
     * @var string Endpoint name.
     */
    public $Name;

    /**
     * @var string Endpoint URL.
     */
    public $Url;

    /**
     * @var EndpointAuthInfo Endpoint authentication information.
     */
    public $AuthInfo;

    /**
     * @param string $Name Endpoint name.
     * @param string $Url Endpoint URL.
     * @param EndpointAuthInfo $AuthInfo Endpoint authentication information.
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new EndpointAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }
    }
}
