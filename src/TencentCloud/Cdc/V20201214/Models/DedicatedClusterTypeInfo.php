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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DedicatedClusterType => (Id, Count)
 *
 * @method string getId() Obtain Cluster type id
 * @method void setId(string $Id) Set Cluster type id
 * @method integer getCount() Obtain Cluster type count
 * @method void setCount(integer $Count) Set Cluster type count
 */
class DedicatedClusterTypeInfo extends AbstractModel
{
    /**
     * @var string Cluster type id
     */
    public $Id;

    /**
     * @var integer Cluster type count
     */
    public $Count;

    /**
     * @param string $Id Cluster type id
     * @param integer $Count Cluster type count
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
