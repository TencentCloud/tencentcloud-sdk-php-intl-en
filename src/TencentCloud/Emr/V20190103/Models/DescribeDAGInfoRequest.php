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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDAGInfo request structure.
 *
 * @method string getInstanceID() Obtain Cluster ID.
 * @method void setInstanceID(string $InstanceID) Set Cluster ID.
 * @method string getType() Obtain DAG type. Only STARROCKS is supported currently.
 * @method void setType(string $Type) Set DAG type. Only STARROCKS is supported currently.
 * @method array getIDList() Obtain Query ID list. The maximum length is 1.
 * @method void setIDList(array $IDList) Set Query ID list. The maximum length is 1.
 */
class DescribeDAGInfoRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceID;

    /**
     * @var string DAG type. Only STARROCKS is supported currently.
     */
    public $Type;

    /**
     * @var array Query ID list. The maximum length is 1.
     */
    public $IDList;

    /**
     * @param string $InstanceID Cluster ID.
     * @param string $Type DAG type. Only STARROCKS is supported currently.
     * @param array $IDList Query ID list. The maximum length is 1.
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }
    }
}
