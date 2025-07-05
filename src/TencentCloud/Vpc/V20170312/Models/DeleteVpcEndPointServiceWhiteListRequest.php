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
 * DeleteVpcEndPointServiceWhiteList request structure.
 *
 * @method array getUserUin() Obtain Array of user UINs
 * @method void setUserUin(array $UserUin) Set Array of user UINs
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 */
class DeleteVpcEndPointServiceWhiteListRequest extends AbstractModel
{
    /**
     * @var array Array of user UINs
     */
    public $UserUin;

    /**
     * @var string Endpoint service ID
     */
    public $EndPointServiceId;

    /**
     * @param array $UserUin Array of user UINs
     * @param string $EndPointServiceId Endpoint service ID
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
    }
}
