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
 * ModifyApiIncrement request structure.
 *
 * @method string getServiceId() Obtain Service ID
 * @method void setServiceId(string $ServiceId) Set Service ID
 * @method string getApiId() Obtain API ID
 * @method void setApiId(string $ApiId) Set API ID
 * @method string getBusinessType() Obtain Authorization type of the API to be modified (you can select `OAUTH`, i.e., authorization API)
 * @method void setBusinessType(string $BusinessType) Set Authorization type of the API to be modified (you can select `OAUTH`, i.e., authorization API)
 * @method string getPublicKey() Obtain Public key value to be modified by OAuth API
 * @method void setPublicKey(string $PublicKey) Set Public key value to be modified by OAuth API
 * @method string getLoginRedirectUrl() Obtain OAuth API redirect address
 * @method void setLoginRedirectUrl(string $LoginRedirectUrl) Set OAuth API redirect address
 */
class ModifyApiIncrementRequest extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var string API ID
     */
    public $ApiId;

    /**
     * @var string Authorization type of the API to be modified (you can select `OAUTH`, i.e., authorization API)
     */
    public $BusinessType;

    /**
     * @var string Public key value to be modified by OAuth API
     */
    public $PublicKey;

    /**
     * @var string OAuth API redirect address
     */
    public $LoginRedirectUrl;

    /**
     * @param string $ServiceId Service ID
     * @param string $ApiId API ID
     * @param string $BusinessType Authorization type of the API to be modified (you can select `OAUTH`, i.e., authorization API)
     * @param string $PublicKey Public key value to be modified by OAuth API
     * @param string $LoginRedirectUrl OAuth API redirect address
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("LoginRedirectUrl",$param) and $param["LoginRedirectUrl"] !== null) {
            $this->LoginRedirectUrl = $param["LoginRedirectUrl"];
        }
    }
}
