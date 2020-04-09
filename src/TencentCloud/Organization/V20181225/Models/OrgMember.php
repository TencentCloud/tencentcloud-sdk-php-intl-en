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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on an organization member.
 *
 * @method integer getUin() Obtain UIN
 * @method void setUin(integer $Uin) Set UIN
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getRemark() Obtain Notes
 * @method void setRemark(string $Remark) Set Notes
 * @method string getJoinTime() Obtain Joining time
 * @method void setJoinTime(string $JoinTime) Set Joining time
 */
class OrgMember extends AbstractModel
{
    /**
     * @var integer UIN
     */
    public $Uin;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Notes
     */
    public $Remark;

    /**
     * @var string Joining time
     */
    public $JoinTime;

    /**
     * @param integer $Uin UIN
     * @param string $Name Name
     * @param string $Remark Notes
     * @param string $JoinTime Joining time
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }
    }
}
