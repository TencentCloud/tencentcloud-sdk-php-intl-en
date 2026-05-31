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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQMigrationTask request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getType() Obtain <p>Task type:<br>0, Cluster migration<br>1, Import To specified namespace</p>
 * @method void setType(integer $Type) Set <p>Task type:<br>0, Cluster migration<br>1, Import To specified namespace</p>
 * @method array getTopics() Obtain <p>List of Topics to Import</p>
 * @method void setTopics(array $Topics) Set <p>List of Topics to Import</p>
 * @method array getGroups() Obtain <p>List of consumer groups to be imported</p>
 * @method void setGroups(array $Groups) Set <p>List of consumer groups to be imported</p>
 * @method array getRoles() Obtain <p>List of roles to be imported</p>
 * @method void setRoles(array $Roles) Set <p>List of roles to be imported</p>
 * @method string getNamespace() Obtain <p>Specify the imported namespace</p>
 * @method void setNamespace(string $Namespace) Set <p>Specify the imported namespace</p>
 */
class CreateRocketMQMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Task type:<br>0, Cluster migration<br>1, Import To specified namespace</p>
     */
    public $Type;

    /**
     * @var array <p>List of Topics to Import</p>
     */
    public $Topics;

    /**
     * @var array <p>List of consumer groups to be imported</p>
     */
    public $Groups;

    /**
     * @var array <p>List of roles to be imported</p>
     */
    public $Roles;

    /**
     * @var string <p>Specify the imported namespace</p>
     */
    public $Namespace;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $Type <p>Task type:<br>0, Cluster migration<br>1, Import To specified namespace</p>
     * @param array $Topics <p>List of Topics to Import</p>
     * @param array $Groups <p>List of consumer groups to be imported</p>
     * @param array $Roles <p>List of roles to be imported</p>
     * @param string $Namespace <p>Specify the imported namespace</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new RocketMQTopicConfig();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new RocketMQGroupConfig();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RocketMQRoleConfig();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
