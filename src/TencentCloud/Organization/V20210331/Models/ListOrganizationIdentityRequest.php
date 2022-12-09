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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListOrganizationIdentity request structure.
 *
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain Maximum number of returned results. Maximum value: `50`.
 * @method void setLimit(integer $Limit) Set Maximum number of returned results. Maximum value: `50`.
 * @method string getSearchKey() Obtain Search by name.
 * @method void setSearchKey(string $SearchKey) Set Search by name.
 * @method integer getIdentityId() Obtain Search by identity ID.
 * @method void setIdentityId(integer $IdentityId) Set Search by identity ID.
 */
class ListOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Maximum number of returned results. Maximum value: `50`.
     */
    public $Limit;

    /**
     * @var string Search by name.
     */
    public $SearchKey;

    /**
     * @var integer Search by identity ID.
     */
    public $IdentityId;

    /**
     * @param integer $Offset Offset.
     * @param integer $Limit Maximum number of returned results. Maximum value: `50`.
     * @param string $SearchKey Search by name.
     * @param integer $IdentityId Search by identity ID.
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

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }
    }
}
