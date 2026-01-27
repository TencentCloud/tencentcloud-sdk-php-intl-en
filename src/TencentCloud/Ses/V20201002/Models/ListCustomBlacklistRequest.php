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
 * ListCustomBlacklist request structure.
 *
 * @method integer getOffset() Obtain Offset, int, starts from 0.
 * @method void setOffset(integer $Offset) Set Offset, int, starts from 0.
 * @method integer getLimit() Obtain Number limit, int, no more than 100.
 * @method void setLimit(integer $Limit) Set Number limit, int, no more than 100.
 * @method integer getStatus() Obtain Filter the state of the blocklist. valid values: 0 (expired), 1 (active), 2 (all).
 * @method void setStatus(integer $Status) Set Filter the state of the blocklist. valid values: 0 (expired), 1 (active), 2 (all).
 * @method string getEmail() Obtain Email address in blocklist.
 * @method void setEmail(string $Email) Set Email address in blocklist.
 */
class ListCustomBlacklistRequest extends AbstractModel
{
    /**
     * @var integer Offset, int, starts from 0.
     */
    public $Offset;

    /**
     * @var integer Number limit, int, no more than 100.
     */
    public $Limit;

    /**
     * @var integer Filter the state of the blocklist. valid values: 0 (expired), 1 (active), 2 (all).
     */
    public $Status;

    /**
     * @var string Email address in blocklist.
     */
    public $Email;

    /**
     * @param integer $Offset Offset, int, starts from 0.
     * @param integer $Limit Number limit, int, no more than 100.
     * @param integer $Status Filter the state of the blocklist. valid values: 0 (expired), 1 (active), 2 (all).
     * @param string $Email Email address in blocklist.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
