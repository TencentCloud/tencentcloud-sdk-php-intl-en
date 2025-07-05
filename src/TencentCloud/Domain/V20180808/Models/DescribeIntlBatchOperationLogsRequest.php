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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntlBatchOperationLogs request structure.
 *
 * @method integer getOffset() Obtain The offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The offset. Default value: 0
 * @method integer getLimit() Obtain The number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of returned results. Default value: 20. Maximum value: 100.
 */
class DescribeIntlBatchOperationLogsRequest extends AbstractModel
{
    /**
     * @var integer The offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param integer $Offset The offset. Default value: 0
     * @param integer $Limit The number of returned results. Default value: 20. Maximum value: 100.
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
    }
}
