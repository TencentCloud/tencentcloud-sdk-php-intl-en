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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes image sharing information.
 *
 * @method string getCreatedTime() Obtain Time when an image was shared.
 * @method void setCreatedTime(string $CreatedTime) Set Time when an image was shared.
 * @method string getAccountId() Obtain ID of the account with which the image is shared.
 * @method void setAccountId(string $AccountId) Set ID of the account with which the image is shared.
 */
class SharePermission extends AbstractModel
{
    /**
     * @var string Time when an image was shared.
     */
    public $CreatedTime;

    /**
     * @var string ID of the account with which the image is shared.
     */
    public $AccountId;

    /**
     * @param string $CreatedTime Time when an image was shared.
     * @param string $AccountId ID of the account with which the image is shared.
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }
    }
}
