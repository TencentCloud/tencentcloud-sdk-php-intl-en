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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCloudNativeAPIGatewayCertificateInfo request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method string getId() Obtain Certificate ID.
 * @method void setId(string $Id) Set Certificate ID.
 * @method array getBindDomains() Obtain Domain name list bound to
 * @method void setBindDomains(array $BindDomains) Set Domain name list bound to
 * @method string getName() Obtain Certificate Name
 * @method void setName(string $Name) Set Certificate Name
 */
class UpdateCloudNativeAPIGatewayCertificateInfoRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var string Certificate ID.
     */
    public $Id;

    /**
     * @var array Domain name list bound to
     */
    public $BindDomains;

    /**
     * @var string Certificate Name
     */
    public $Name;

    /**
     * @param string $GatewayId Gateway ID
     * @param string $Id Certificate ID.
     * @param array $BindDomains Domain name list bound to
     * @param string $Name Certificate Name
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
