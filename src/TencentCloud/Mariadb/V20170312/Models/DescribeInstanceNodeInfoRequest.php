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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodeInfo request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as tdsql-6ltok4u9
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as tdsql-6ltok4u9
 * @method integer getLimit() Obtain The maximum number of results returned at a time. By default, there is no upper limit to this value, that is, all results can be returned.
 * @method void setLimit(integer $Limit) Set The maximum number of results returned at a time. By default, there is no upper limit to this value, that is, all results can be returned.
 * @method integer getOffset() Obtain Offset of the returned results. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset of the returned results. Default value: `0`.
 */
class DescribeInstanceNodeInfoRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as tdsql-6ltok4u9
     */
    public $InstanceId;

    /**
     * @var integer The maximum number of results returned at a time. By default, there is no upper limit to this value, that is, all results can be returned.
     */
    public $Limit;

    /**
     * @var integer Offset of the returned results. Default value: `0`.
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID, such as tdsql-6ltok4u9
     * @param integer $Limit The maximum number of results returned at a time. By default, there is no upper limit to this value, that is, all results can be returned.
     * @param integer $Offset Offset of the returned results. Default value: `0`.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
