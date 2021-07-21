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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Login and sensitive operation flag
 *
 * @method integer getPhone() Obtain Mobile number
 * @method void setPhone(integer $Phone) Set Mobile number
 * @method integer getToken() Obtain Hard token
 * @method void setToken(integer $Token) Set Hard token
 * @method integer getStoken() Obtain Soft token
 * @method void setStoken(integer $Stoken) Set Soft token
 * @method integer getWechat() Obtain WeChat
 * @method void setWechat(integer $Wechat) Set WeChat
 * @method integer getCustom() Obtain Custom
 * @method void setCustom(integer $Custom) Set Custom
 * @method integer getMail() Obtain Email
 * @method void setMail(integer $Mail) Set Email
 */
class LoginActionFlagIntl extends AbstractModel
{
    /**
     * @var integer Mobile number
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
     * @var integer Email
     */
    public $Mail;

    /**
     * @param integer $Phone Mobile number
     * @param integer $Token Hard token
     * @param integer $Stoken Soft token
     * @param integer $Wechat WeChat
     * @param integer $Custom Custom
     * @param integer $Mail Email
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
    }
}
