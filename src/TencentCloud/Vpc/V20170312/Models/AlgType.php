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
 * ALG protocol type
 *
 * @method boolean getFtp() Obtain Ftp protocol Alg functionality whether enabled, available values:.
<li>true: enable Ftp protocol Alg functionality.</li>.
<li>false: disable Ftp protocol Alg functionality.</li>.
 * @method void setFtp(boolean $Ftp) Set Ftp protocol Alg functionality whether enabled, available values:.
<li>true: enable Ftp protocol Alg functionality.</li>.
<li>false: disable Ftp protocol Alg functionality.</li>.
 * @method boolean getSip() Obtain Whether the Sip protocol Alg function is enabled. available values:.
<li>true: enable Sip protocol Alg function.</li>.
<li>false: disable Sip protocol Alg function.</li>.
 * @method void setSip(boolean $Sip) Set Whether the Sip protocol Alg function is enabled. available values:.
<li>true: enable Sip protocol Alg function.</li>.
<li>false: disable Sip protocol Alg function.</li>.
 */
class AlgType extends AbstractModel
{
    /**
     * @var boolean Ftp protocol Alg functionality whether enabled, available values:.
<li>true: enable Ftp protocol Alg functionality.</li>.
<li>false: disable Ftp protocol Alg functionality.</li>.
     */
    public $Ftp;

    /**
     * @var boolean Whether the Sip protocol Alg function is enabled. available values:.
<li>true: enable Sip protocol Alg function.</li>.
<li>false: disable Sip protocol Alg function.</li>.
     */
    public $Sip;

    /**
     * @param boolean $Ftp Ftp protocol Alg functionality whether enabled, available values:.
<li>true: enable Ftp protocol Alg functionality.</li>.
<li>false: disable Ftp protocol Alg functionality.</li>.
     * @param boolean $Sip Whether the Sip protocol Alg function is enabled. available values:.
<li>true: enable Sip protocol Alg function.</li>.
<li>false: disable Sip protocol Alg function.</li>.
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
        if (array_key_exists("Ftp",$param) and $param["Ftp"] !== null) {
            $this->Ftp = $param["Ftp"];
        }

        if (array_key_exists("Sip",$param) and $param["Sip"] !== null) {
            $this->Sip = $param["Sip"];
        }
    }
}
