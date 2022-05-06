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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProductDynamicRegister response structure.
 *
 * @method integer getRegisterType() Obtain Dynamic registration type. Valid values: 0 - disabled; 1 - pre-create device; 2 - auto-create device.
 * @method void setRegisterType(integer $RegisterType) Set Dynamic registration type. Valid values: 0 - disabled; 1 - pre-create device; 2 - auto-create device.
 * @method string getProductSecret() Obtain Product key for dynamic registration
 * @method void setProductSecret(string $ProductSecret) Set Product key for dynamic registration
 * @method integer getRegisterLimit() Obtain Maximum dynamically registered devices
 * @method void setRegisterLimit(integer $RegisterLimit) Set Maximum dynamically registered devices
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class UpdateProductDynamicRegisterResponse extends AbstractModel
{
    /**
     * @var integer Dynamic registration type. Valid values: 0 - disabled; 1 - pre-create device; 2 - auto-create device.
     */
    public $RegisterType;

    /**
     * @var string Product key for dynamic registration
     */
    public $ProductSecret;

    /**
     * @var integer Maximum dynamically registered devices
     */
    public $RegisterLimit;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $RegisterType Dynamic registration type. Valid values: 0 - disabled; 1 - pre-create device; 2 - auto-create device.
     * @param string $ProductSecret Product key for dynamic registration
     * @param integer $RegisterLimit Maximum dynamically registered devices
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
        if (array_key_exists("RegisterType",$param) and $param["RegisterType"] !== null) {
            $this->RegisterType = $param["RegisterType"];
        }

        if (array_key_exists("ProductSecret",$param) and $param["ProductSecret"] !== null) {
            $this->ProductSecret = $param["ProductSecret"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
