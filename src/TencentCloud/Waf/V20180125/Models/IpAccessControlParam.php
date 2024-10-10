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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP blocklist/allowlist parameters structure, which is mainly used for IP blocklist/allowlist import.
 *
 * @method array getIpList() Obtain IP list.
 * @method void setIpList(array $IpList) Set IP list.
 * @method integer getValidTs() Obtain valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
 * @method void setValidTs(integer $ValidTs) Set valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
 * @method integer getActionType() Obtain 42: blocklist; 40: allowlist.
 * @method void setActionType(integer $ActionType) Set 42: blocklist; 40: allowlist.
 * @method string getNote() Obtain Remarks
 * @method void setNote(string $Note) Set Remarks
 */
class IpAccessControlParam extends AbstractModel
{
    /**
     * @var array IP list.
     */
    public $IpList;

    /**
     * @var integer valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
     */
    public $ValidTs;

    /**
     * @var integer 42: blocklist; 40: allowlist.
     */
    public $ActionType;

    /**
     * @var string Remarks
     */
    public $Note;

    /**
     * @param array $IpList IP list.
     * @param integer $ValidTs valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
     * @param integer $ActionType 42: blocklist; 40: allowlist.
     * @param string $Note Remarks
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
        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("ValidTs",$param) and $param["ValidTs"] !== null) {
            $this->ValidTs = $param["ValidTs"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
