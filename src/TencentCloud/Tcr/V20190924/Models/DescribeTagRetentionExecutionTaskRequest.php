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
 * DescribeTagRetentionExecutionTask request structure.
 *
 * @method string getRegistryId() Obtain Primary instance ID
 * @method void setRegistryId(string $RegistryId) Set Primary instance ID
 * @method integer getRetentionId() Obtain Rule ID
 * @method void setRetentionId(integer $RetentionId) Set Rule ID
 * @method integer getExecutionId() Obtain Rule execution ID
 * @method void setExecutionId(integer $ExecutionId) Set Rule execution ID
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 * @method integer getLimit() Obtain `PageSize` for pagination
 * @method void setLimit(integer $Limit) Set `PageSize` for pagination
 */
class DescribeTagRetentionExecutionTaskRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID
     */
    public $RegistryId;

    /**
     * @var integer Rule ID
     */
    public $RetentionId;

    /**
     * @var integer Rule execution ID
     */
    public $ExecutionId;

    /**
     * @var integer Page offset
     */
    public $Offset;

    /**
     * @var integer `PageSize` for pagination
     */
    public $Limit;

    /**
     * @param string $RegistryId Primary instance ID
     * @param integer $RetentionId Rule ID
     * @param integer $ExecutionId Rule execution ID
     * @param integer $Offset Page offset
     * @param integer $Limit `PageSize` for pagination
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

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
