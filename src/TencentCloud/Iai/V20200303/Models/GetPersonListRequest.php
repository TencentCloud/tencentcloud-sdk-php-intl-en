<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetPersonList request structure.
 *
 * @method string getGroupId() Obtain Group ID, which is the `GroupId` in the `CreateGroup` API.
 * @method void setGroupId(string $GroupId) Set Group ID, which is the `GroupId` in the `CreateGroup` API.
 * @method integer getOffset() Obtain Starting number. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting number. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 10. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 10. Maximum value: 1000.
 */
class GetPersonListRequest extends AbstractModel
{
    /**
     * @var string Group ID, which is the `GroupId` in the `CreateGroup` API.
     */
    public $GroupId;

    /**
     * @var integer Starting number. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 10. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @param string $GroupId Group ID, which is the `GroupId` in the `CreateGroup` API.
     * @param integer $Offset Starting number. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 10. Maximum value: 1000.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
