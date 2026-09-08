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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIpWhiteListInternational request structure.
 *
 * @method string getName() Obtain <p>ip allowlist name</p>
 * @method void setName(string $Name) Set <p>ip allowlist name</p>
 * @method integer getCaptchaAppid() Obtain <p>Captcha appid</p>
 * @method void setCaptchaAppid(integer $CaptchaAppid) Set <p>Captcha appid</p>
 * @method string getIp() Obtain <p>ip data</p>
 * @method void setIp(string $Ip) Set <p>ip data</p>
 * @method string getComment() Obtain <p>Remark information.</p>
 * @method void setComment(string $Comment) Set <p>Remark information.</p>
 */
class CreateIpWhiteListInternationalRequest extends AbstractModel
{
    /**
     * @var string <p>ip allowlist name</p>
     */
    public $Name;

    /**
     * @var integer <p>Captcha appid</p>
     */
    public $CaptchaAppid;

    /**
     * @var string <p>ip data</p>
     */
    public $Ip;

    /**
     * @var string <p>Remark information.</p>
     */
    public $Comment;

    /**
     * @param string $Name <p>ip allowlist name</p>
     * @param integer $CaptchaAppid <p>Captcha appid</p>
     * @param string $Ip <p>ip data</p>
     * @param string $Comment <p>Remark information.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CaptchaAppid",$param) and $param["CaptchaAppid"] !== null) {
            $this->CaptchaAppid = $param["CaptchaAppid"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
