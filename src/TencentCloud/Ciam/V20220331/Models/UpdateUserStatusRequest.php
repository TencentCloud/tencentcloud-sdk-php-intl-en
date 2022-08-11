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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserStatus request structure.
 *
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getStatus() Obtain User status

<li> **NORMAL** </li>	  Normal
<li> **LOCK** </li>  Locked
<li> **FREEZE** </li>	  Frozen
 * @method void setStatus(string $Status) Set User status

<li> **NORMAL** </li>	  Normal
<li> **LOCK** </li>  Locked
<li> **FREEZE** </li>	  Frozen
 */
class UpdateUserStatusRequest extends AbstractModel
{
    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string User status

<li> **NORMAL** </li>	  Normal
<li> **LOCK** </li>  Locked
<li> **FREEZE** </li>	  Frozen
     */
    public $Status;

    /**
     * @param string $UserStoreId User directory ID
     * @param string $UserId User ID
     * @param string $Status User status

<li> **NORMAL** </li>	  Normal
<li> **LOCK** </li>  Locked
<li> **FREEZE** </li>	  Frozen
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
