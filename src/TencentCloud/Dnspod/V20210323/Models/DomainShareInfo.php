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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain sharing information
 *
 * @method string getShareTo() Obtain Account with which the domain is shared
 * @method void setShareTo(string $ShareTo) Set Account with which the domain is shared
 * @method string getMode() Obtain Sharing mode. Valid values: `rw` (read/write), `r` (read-only).
 * @method void setMode(string $Mode) Set Sharing mode. Valid values: `rw` (read/write), `r` (read-only).
 * @method string getStatus() Obtain Sharing status. Valid values: `enabled` (shared successfully); `pending` (the account shared to does not exist and is pending registration).
 * @method void setStatus(string $Status) Set Sharing status. Valid values: `enabled` (shared successfully); `pending` (the account shared to does not exist and is pending registration).
 */
class DomainShareInfo extends AbstractModel
{
    /**
     * @var string Account with which the domain is shared
     */
    public $ShareTo;

    /**
     * @var string Sharing mode. Valid values: `rw` (read/write), `r` (read-only).
     */
    public $Mode;

    /**
     * @var string Sharing status. Valid values: `enabled` (shared successfully); `pending` (the account shared to does not exist and is pending registration).
     */
    public $Status;

    /**
     * @param string $ShareTo Account with which the domain is shared
     * @param string $Mode Sharing mode. Valid values: `rw` (read/write), `r` (read-only).
     * @param string $Status Sharing status. Valid values: `enabled` (shared successfully); `pending` (the account shared to does not exist and is pending registration).
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
        if (array_key_exists("ShareTo",$param) and $param["ShareTo"] !== null) {
            $this->ShareTo = $param["ShareTo"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
