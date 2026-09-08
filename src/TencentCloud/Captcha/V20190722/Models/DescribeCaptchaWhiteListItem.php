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
 * ip whitelist data sub-item in the verification code console
 *
 * @method integer getId() Obtain <p>No.</p>
 * @method void setId(integer $Id) Set <p>No.</p>
 * @method string getName() Obtain <p>Allowlist name</p>
 * @method void setName(string $Name) Set <p>Allowlist name</p>
 * @method integer getCaptchaAppid() Obtain <p>Bind captcha</p>
 * @method void setCaptchaAppid(integer $CaptchaAppid) Set <p>Bind captcha</p>
 * @method string getIp() Obtain <p>ip address</p>
 * @method void setIp(string $Ip) Set <p>ip address</p>
 * @method integer getStatus() Obtain <p>Status. 0: Ip allowlisted; 1: cancel allowlisting</p>
 * @method void setStatus(integer $Status) Set <p>Status. 0: Ip allowlisted; 1: cancel allowlisting</p>
 * @method string getCreatedTime() Obtain <p>Creation time.</p>
 * @method void setCreatedTime(string $CreatedTime) Set <p>Creation time.</p>
 * @method string getUpdatedTime() Obtain <p>Update time.</p>
 * @method void setUpdatedTime(string $UpdatedTime) Set <p>Update time.</p>
 * @method string getComment() Obtain <p>Remarks.</p>
 * @method void setComment(string $Comment) Set <p>Remarks.</p>
 */
class DescribeCaptchaWhiteListItem extends AbstractModel
{
    /**
     * @var integer <p>No.</p>
     */
    public $Id;

    /**
     * @var string <p>Allowlist name</p>
     */
    public $Name;

    /**
     * @var integer <p>Bind captcha</p>
     */
    public $CaptchaAppid;

    /**
     * @var string <p>ip address</p>
     */
    public $Ip;

    /**
     * @var integer <p>Status. 0: Ip allowlisted; 1: cancel allowlisting</p>
     */
    public $Status;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdatedTime;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Comment;

    /**
     * @param integer $Id <p>No.</p>
     * @param string $Name <p>Allowlist name</p>
     * @param integer $CaptchaAppid <p>Bind captcha</p>
     * @param string $Ip <p>ip address</p>
     * @param integer $Status <p>Status. 0: Ip allowlisted; 1: cancel allowlisting</p>
     * @param string $CreatedTime <p>Creation time.</p>
     * @param string $UpdatedTime <p>Update time.</p>
     * @param string $Comment <p>Remarks.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
