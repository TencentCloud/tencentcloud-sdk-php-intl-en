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
 * CreateGroupsSTD request structure.
 *
 * @method string getInstanceId() Obtain Cluster name.
 * @method void setInstanceId(string $InstanceId) Set Cluster name.
 * @method array getGroups() Obtain Batch user group information.
 * @method void setGroups(array $Groups) Set Batch user group information.
 */
class CreateGroupsSTDRequest extends AbstractModel
{
    /**
     * @var string Cluster name.
     */
    public $InstanceId;

    /**
     * @var array Batch user group information.
     */
    public $Groups;

    /**
     * @param string $InstanceId Cluster name.
     * @param array $Groups Batch user group information.
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

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }
    }
}
