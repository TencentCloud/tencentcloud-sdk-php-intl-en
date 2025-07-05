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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Login and sensitive operation flag
 *
 * @method integer getPhone() Obtain Phone
 * @method void setPhone(integer $Phone) Set Phone
 * @method integer getToken() Obtain Hard token
 * @method void setToken(integer $Token) Set Hard token
 * @method integer getStoken() Obtain Soft token
 * @method void setStoken(integer $Stoken) Set Soft token
 * @method integer getWechat() Obtain WeChat
 * @method void setWechat(integer $Wechat) Set WeChat
 * @method integer getCustom() Obtain Custom
 * @method void setCustom(integer $Custom) Set Custom
 * @method integer getMail() Obtain Mail
 * @method void setMail(integer $Mail) Set Mail
 * @method integer getU2FToken() Obtain U2F token
 * @method void setU2FToken(integer $U2FToken) Set U2F token
 */
class LoginActionFlag extends AbstractModel
{
    /**
     * @var integer Phone
     */
    public $Phone;

    /**
     * @var integer Hard token
     */
    public $Token;

    /**
     * @var integer Soft token
     */
    public $Stoken;

    /**
     * @var integer WeChat
     */
    public $Wechat;

    /**
     * @var integer Custom
     */
    public $Custom;

    /**
     * @var integer Mail
     */
    public $Mail;

    /**
     * @var integer U2F token
     */
    public $U2FToken;

    /**
     * @param integer $Phone Phone
     * @param integer $Token Hard token
     * @param integer $Stoken Soft token
     * @param integer $Wechat WeChat
     * @param integer $Custom Custom
     * @param integer $Mail Mail
     * @param integer $U2FToken U2F token
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
        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Stoken",$param) and $param["Stoken"] !== null) {
            $this->Stoken = $param["Stoken"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("U2FToken",$param) and $param["U2FToken"] !== null) {
            $this->U2FToken = $param["U2FToken"];
        }
    }
}
