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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The combination of MatchCode and MatchTicket ID.
 *
 * @method string getMatchCode() Obtain MatchCode
 * @method void setMatchCode(string $MatchCode) Set MatchCode
 * @method string getMatchTicketId() Obtain MatchTicket ID
 * @method void setMatchTicketId(string $MatchTicketId) Set MatchTicket ID
 */
class MTicket extends AbstractModel
{
    /**
     * @var string MatchCode
     */
    public $MatchCode;

    /**
     * @var string MatchTicket ID
     */
    public $MatchTicketId;

    /**
     * @param string $MatchCode MatchCode
     * @param string $MatchTicketId MatchTicket ID
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
        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }

        if (array_key_exists("MatchTicketId",$param) and $param["MatchTicketId"] !== null) {
            $this->MatchTicketId = $param["MatchTicketId"];
        }
    }
}
