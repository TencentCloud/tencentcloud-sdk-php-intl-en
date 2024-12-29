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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query input parameters of risk assessment results
 *
 * @method string getIsAuthorized() Obtain Whether to authorize.
 * @method void setIsAuthorized(string $IsAuthorized) Set Whether to authorize.
 * @method string getCryptoType() Obtain Encryption type.
 * @method void setCryptoType(string $CryptoType) Set Encryption type.
 * @method string getCryptoContent() Obtain Encrypted content.
 * @method void setCryptoContent(string $CryptoContent) Set Encrypted content.
 */
class InputBizCryptoData extends AbstractModel
{
    /**
     * @var string Whether to authorize.
     */
    public $IsAuthorized;

    /**
     * @var string Encryption type.
     */
    public $CryptoType;

    /**
     * @var string Encrypted content.
     */
    public $CryptoContent;

    /**
     * @param string $IsAuthorized Whether to authorize.
     * @param string $CryptoType Encryption type.
     * @param string $CryptoContent Encrypted content.
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
        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("CryptoType",$param) and $param["CryptoType"] !== null) {
            $this->CryptoType = $param["CryptoType"];
        }

        if (array_key_exists("CryptoContent",$param) and $param["CryptoContent"] !== null) {
            $this->CryptoContent = $param["CryptoContent"];
        }
    }
}
