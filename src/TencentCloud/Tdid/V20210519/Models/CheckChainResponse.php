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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckChain response structure.
 *
 * @method integer getRoleType() Obtain Whether you are the owner of the consortium. `1`: Yes; `0`: No.
 * @method void setRoleType(integer $RoleType) Set Whether you are the owner of the consortium. `1`: Yes; `0`: No.
 * @method string getChainId() Obtain The chain ID.
 * @method void setChainId(string $ChainId) Set The chain ID.
 * @method string getAppName() Obtain The application name.
 * @method void setAppName(string $AppName) Set The application name.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CheckChainResponse extends AbstractModel
{
    /**
     * @var integer Whether you are the owner of the consortium. `1`: Yes; `0`: No.
     */
    public $RoleType;

    /**
     * @var string The chain ID.
     */
    public $ChainId;

    /**
     * @var string The application name.
     */
    public $AppName;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $RoleType Whether you are the owner of the consortium. `1`: Yes; `0`: No.
     * @param string $ChainId The chain ID.
     * @param string $AppName The application name.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
