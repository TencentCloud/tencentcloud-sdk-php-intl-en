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
 * ListGroupsForUser request structure.
 *
 * @method integer getUid() Obtain Sub-user UID
 * @method void setUid(integer $Uid) Set Sub-user UID
 * @method integer getRp() Obtain Number of entries per page; default is 20
 * @method void setRp(integer $Rp) Set Number of entries per page; default is 20
 * @method integer getPage() Obtain Page number; default is 1
 * @method void setPage(integer $Page) Set Page number; default is 1
 * @method integer getSubUin() Obtain Sub-account UIN
 * @method void setSubUin(integer $SubUin) Set Sub-account UIN
 */
class ListGroupsForUserRequest extends AbstractModel
{
    /**
     * @var integer Sub-user UID
     */
    public $Uid;

    /**
     * @var integer Number of entries per page; default is 20
     */
    public $Rp;

    /**
     * @var integer Page number; default is 1
     */
    public $Page;

    /**
     * @var integer Sub-account UIN
     */
    public $SubUin;

    /**
     * @param integer $Uid Sub-user UID
     * @param integer $Rp Number of entries per page; default is 20
     * @param integer $Page Page number; default is 1
     * @param integer $SubUin Sub-account UIN
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }
    }
}
