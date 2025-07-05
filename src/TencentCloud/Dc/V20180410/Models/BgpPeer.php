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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BGP parameter, including Asn and AuthKey.
 *
 * @method integer getAsn() Obtain User-side BGP Asn.
 * @method void setAsn(integer $Asn) Set User-side BGP Asn.
 * @method string getAuthKey() Obtain User-side BGP key.
 * @method void setAuthKey(string $AuthKey) Set User-side BGP key.
 */
class BgpPeer extends AbstractModel
{
    /**
     * @var integer User-side BGP Asn.
     */
    public $Asn;

    /**
     * @var string User-side BGP key.
     */
    public $AuthKey;

    /**
     * @param integer $Asn User-side BGP Asn.
     * @param string $AuthKey User-side BGP key.
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
        if (array_key_exists("Asn",$param) and $param["Asn"] !== null) {
            $this->Asn = $param["Asn"];
        }

        if (array_key_exists("AuthKey",$param) and $param["AuthKey"] !== null) {
            $this->AuthKey = $param["AuthKey"];
        }
    }
}
