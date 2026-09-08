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
 * ModifyIpWhiteListInternational request structure.
 *
 * @method string getName() Obtain <p>ip allowlist name</p>
 * @method void setName(string $Name) Set <p>ip allowlist name</p>
 * @method integer getId() Obtain <p>Record number</p>
 * @method void setId(integer $Id) Set <p>Record number</p>
 * @method integer getCaptchaAppid() Obtain <p>Captcha appid</p>
 * @method void setCaptchaAppid(integer $CaptchaAppid) Set <p>Captcha appid</p>
 * @method integer getStatus() Obtain <p>IP whitelist status</p><p>Enumeration values:</p><ul><li>0: enable</li><li>1: disable</li></ul>
 * @method void setStatus(integer $Status) Set <p>IP whitelist status</p><p>Enumeration values:</p><ul><li>0: enable</li><li>1: disable</li></ul>
 * @method string getComment() Obtain <p>Remark information.</p>
 * @method void setComment(string $Comment) Set <p>Remark information.</p>
 */
class ModifyIpWhiteListInternationalRequest extends AbstractModel
{
    /**
     * @var string <p>ip allowlist name</p>
     */
    public $Name;

    /**
     * @var integer <p>Record number</p>
     */
    public $Id;

    /**
     * @var integer <p>Captcha appid</p>
     */
    public $CaptchaAppid;

    /**
     * @var integer <p>IP whitelist status</p><p>Enumeration values:</p><ul><li>0: enable</li><li>1: disable</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Remark information.</p>
     */
    public $Comment;

    /**
     * @param string $Name <p>ip allowlist name</p>
     * @param integer $Id <p>Record number</p>
     * @param integer $CaptchaAppid <p>Captcha appid</p>
     * @param integer $Status <p>IP whitelist status</p><p>Enumeration values:</p><ul><li>0: enable</li><li>1: disable</li></ul>
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CaptchaAppid",$param) and $param["CaptchaAppid"] !== null) {
            $this->CaptchaAppid = $param["CaptchaAppid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
