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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBParams request structure.
 *
 * @method array getNodeTypes() Obtain cn/dn
 * @method void setNodeTypes(array $NodeTypes) Set cn/dn
 * @method integer getLimit() Obtain Limit.
 * @method void setLimit(integer $Limit) Set Limit.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getInstanceId() Obtain InstanceId.
 * @method void setInstanceId(string $InstanceId) Set InstanceId.
 */
class DescribeDBParamsRequest extends AbstractModel
{
    /**
     * @var array cn/dn
     */
    public $NodeTypes;

    /**
     * @var integer Limit.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string InstanceId.
     */
    public $InstanceId;

    /**
     * @param array $NodeTypes cn/dn
     * @param integer $Limit Limit.
     * @param integer $Offset Offset.
     * @param string $InstanceId InstanceId.
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
        if (array_key_exists("NodeTypes",$param) and $param["NodeTypes"] !== null) {
            $this->NodeTypes = $param["NodeTypes"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
