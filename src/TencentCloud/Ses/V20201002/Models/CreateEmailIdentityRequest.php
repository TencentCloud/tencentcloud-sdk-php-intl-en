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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmailIdentity request structure.
 *
 * @method string getEmailIdentity() Obtain Your sender domain. You are advised to use a third-level domain, for example, mail.qcloud.com.
 * @method void setEmailIdentity(string $EmailIdentity) Set Your sender domain. You are advised to use a third-level domain, for example, mail.qcloud.com.
 */
class CreateEmailIdentityRequest extends AbstractModel
{
    /**
     * @var string Your sender domain. You are advised to use a third-level domain, for example, mail.qcloud.com.
     */
    public $EmailIdentity;

    /**
     * @param string $EmailIdentity Your sender domain. You are advised to use a third-level domain, for example, mail.qcloud.com.
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
        if (array_key_exists("EmailIdentity",$param) and $param["EmailIdentity"] !== null) {
            $this->EmailIdentity = $param["EmailIdentity"];
        }
    }
}
