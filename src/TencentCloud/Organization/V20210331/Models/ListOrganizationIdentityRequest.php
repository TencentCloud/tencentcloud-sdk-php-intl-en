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
 * @method integer getOffset() Obtain Offset.  It must be an integer multiple of the value of `Limit`.  Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset.  It must be an integer multiple of the value of `Limit`.  Default value: `0`.
 * @method integer getLimit() Obtain The limit for the number of query results.  Value range:  1-50.  Default value:  `10`.
 * @method void setLimit(integer $Limit) Set The limit for the number of query results.  Value range:  1-50.  Default value:  `10`.
 * @method string getSearchKey() Obtain Search by name.
 * @method void setSearchKey(string $SearchKey) Set Search by name.
 * @method integer getIdentityId() Obtain Identity ID, which can be searched by identity ID.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID, which can be searched by identity ID.
 * @method integer getIdentityType() Obtain Identity type.  Valid values: `1` (Preset), `2` (Custom).
 * @method void setIdentityType(integer $IdentityType) Set Identity type.  Valid values: `1` (Preset), `2` (Custom).
 */
class ListOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var integer Offset.  It must be an integer multiple of the value of `Limit`.  Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer The limit for the number of query results.  Value range:  1-50.  Default value:  `10`.
     */
    public $Limit;

    /**
     * @var string Search by name.
     */
    public $SearchKey;

    /**
     * @var integer Identity ID, which can be searched by identity ID.
     */
    public $IdentityId;

    /**
     * @var integer Identity type.  Valid values: `1` (Preset), `2` (Custom).
     */
    public $IdentityType;

    /**
     * @param integer $Offset Offset.  It must be an integer multiple of the value of `Limit`.  Default value: `0`.
     * @param integer $Limit The limit for the number of query results.  Value range:  1-50.  Default value:  `10`.
     * @param string $SearchKey Search by name.
     * @param integer $IdentityId Identity ID, which can be searched by identity ID.
     * @param integer $IdentityType Identity type.  Valid values: `1` (Preset), `2` (Custom).
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

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }
    }
}
