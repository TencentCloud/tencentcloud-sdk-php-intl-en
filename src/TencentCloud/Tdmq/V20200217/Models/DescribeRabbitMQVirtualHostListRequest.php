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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQVirtualHostList request structure.
 *
 * @method string getInstanceId() Obtain A default parameter that won’t be used
 * @method void setInstanceId(string $InstanceId) Set A default parameter that won’t be used
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The maximum number of entries per page
 * @method void setLimit(integer $Limit) Set The maximum number of entries per page
 */
class DescribeRabbitMQVirtualHostListRequest extends AbstractModel
{
    /**
     * @var string A default parameter that won’t be used
     */
    public $InstanceId;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The maximum number of entries per page
     */
    public $Limit;

    /**
     * @param string $InstanceId A default parameter that won’t be used
     * @param integer $Offset Offset
     * @param integer $Limit The maximum number of entries per page
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
