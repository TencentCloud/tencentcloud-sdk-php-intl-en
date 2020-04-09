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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAppInfo request structure.
 *
 * @method integer getOffset() Obtain Offset position
 * @method void setOffset(integer $Offset) Set Offset position
 * @method integer getLimit() Obtain Maximum number of users to be queried in this request. Maximum value: 50. Default value: 50
 * @method void setLimit(integer $Limit) Set Maximum number of users to be queried in this request. Maximum value: 50. Default value: 50
 */
class DescribeAppInfoRequest extends AbstractModel
{
    /**
     * @var integer Offset position
     */
    public $Offset;

    /**
     * @var integer Maximum number of users to be queried in this request. Maximum value: 50. Default value: 50
     */
    public $Limit;

    /**
     * @param integer $Offset Offset position
     * @param integer $Limit Maximum number of users to be queried in this request. Maximum value: 50. Default value: 50
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
