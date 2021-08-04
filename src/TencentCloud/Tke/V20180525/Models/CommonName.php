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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The CommonName in the certificate of the client corresponding to the user UIN
 *
 * @method string getSubaccountUin() Obtain User UIN
 * @method void setSubaccountUin(string $SubaccountUin) Set User UIN
 * @method string getCN() Obtain The CommonName in the certificate of the client corresponding to the sub-account
 * @method void setCN(string $CN) Set The CommonName in the certificate of the client corresponding to the sub-account
 */
class CommonName extends AbstractModel
{
    /**
     * @var string User UIN
     */
    public $SubaccountUin;

    /**
     * @var string The CommonName in the certificate of the client corresponding to the sub-account
     */
    public $CN;

    /**
     * @param string $SubaccountUin User UIN
     * @param string $CN The CommonName in the certificate of the client corresponding to the sub-account
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
        if (array_key_exists("SubaccountUin",$param) and $param["SubaccountUin"] !== null) {
            $this->SubaccountUin = $param["SubaccountUin"];
        }

        if (array_key_exists("CN",$param) and $param["CN"] !== null) {
            $this->CN = $param["CN"];
        }
    }
}
