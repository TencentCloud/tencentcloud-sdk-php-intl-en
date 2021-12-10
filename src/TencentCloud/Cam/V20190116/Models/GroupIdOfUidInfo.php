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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the association between a sub-user and a User Group
 *
 * @method integer getGroupId() Obtain User Group ID
 * @method void setGroupId(integer $GroupId) Set User Group ID
 * @method integer getUid() Obtain Sub-user UID
 * @method void setUid(integer $Uid) Set Sub-user UID
 * @method integer getUin() Obtain Sub-user UIN. For UIN and UID, at least one of them is required.
 * @method void setUin(integer $Uin) Set Sub-user UIN. For UIN and UID, at least one of them is required.
 */
class GroupIdOfUidInfo extends AbstractModel
{
    /**
     * @var integer User Group ID
     */
    public $GroupId;

    /**
     * @var integer Sub-user UID
     */
    public $Uid;

    /**
     * @var integer Sub-user UIN. For UIN and UID, at least one of them is required.
     */
    public $Uin;

    /**
     * @param integer $GroupId User Group ID
     * @param integer $Uid Sub-user UID
     * @param integer $Uin Sub-user UIN. For UIN and UID, at least one of them is required.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
