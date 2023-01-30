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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterCheckTask request structure.
 *
 * @method array getClusterCheckTaskList() Obtain Information of the specified cluster to be scanned
 * @method void setClusterCheckTaskList(array $ClusterCheckTaskList) Set Information of the specified cluster to be scanned
 */
class CreateClusterCheckTaskRequest extends AbstractModel
{
    /**
     * @var array Information of the specified cluster to be scanned
     */
    public $ClusterCheckTaskList;

    /**
     * @param array $ClusterCheckTaskList Information of the specified cluster to be scanned
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
        if (array_key_exists("ClusterCheckTaskList",$param) and $param["ClusterCheckTaskList"] !== null) {
            $this->ClusterCheckTaskList = [];
            foreach ($param["ClusterCheckTaskList"] as $key => $value){
                $obj = new ClusterCheckTaskItem();
                $obj->deserialize($value);
                array_push($this->ClusterCheckTaskList, $obj);
            }
        }
    }
}
