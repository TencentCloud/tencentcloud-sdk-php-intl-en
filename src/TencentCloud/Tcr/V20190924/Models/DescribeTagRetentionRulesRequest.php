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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagRetentionRules request structure.
 *
 * @method string getRegistryId() Obtain Primary instance ID
 * @method void setRegistryId(string $RegistryId) Set Primary instance ID
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method integer getLimit() Obtain `PageSize` for pagination
 * @method void setLimit(integer $Limit) Set `PageSize` for pagination
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 */
class DescribeTagRetentionRulesRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID
     */
    public $RegistryId;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var integer `PageSize` for pagination
     */
    public $Limit;

    /**
     * @var integer Page offset
     */
    public $Offset;

    /**
     * @param string $RegistryId Primary instance ID
     * @param string $NamespaceName Namespace name
     * @param integer $Limit `PageSize` for pagination
     * @param integer $Offset Page offset
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
