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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcEndPointServiceWhiteList request structure.
 *
 * @method string getUserUin() Obtain User UIN
 * @method void setUserUin(string $UserUin) Set User UIN
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 * @method string getDescription() Obtain Allowlist description
 * @method void setDescription(string $Description) Set Allowlist description
 */
class ModifyVpcEndPointServiceWhiteListRequest extends AbstractModel
{
    /**
     * @var string User UIN
     */
    public $UserUin;

    /**
     * @var string Endpoint service ID
     */
    public $EndPointServiceId;

    /**
     * @var string Allowlist description
     */
    public $Description;

    /**
     * @param string $UserUin User UIN
     * @param string $EndPointServiceId Endpoint service ID
     * @param string $Description Allowlist description
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
