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
 * DeleteBlackList request structure.
 *
 * @method array getEmailAddressList() Obtain List of email addresses to be unblocklisted. Enter at least one address.
 * @method void setEmailAddressList(array $EmailAddressList) Set List of email addresses to be unblocklisted. Enter at least one address.
 */
class DeleteBlackListRequest extends AbstractModel
{
    /**
     * @var array List of email addresses to be unblocklisted. Enter at least one address.
     */
    public $EmailAddressList;

    /**
     * @param array $EmailAddressList List of email addresses to be unblocklisted. Enter at least one address.
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
        if (array_key_exists("EmailAddressList",$param) and $param["EmailAddressList"] !== null) {
            $this->EmailAddressList = $param["EmailAddressList"];
        }
    }
}
