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
 * DescribeRabbitMQUser request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getSearchUser() Obtain Username search by prefix or suffix
 * @method void setSearchUser(string $SearchUser) Set Username search by prefix or suffix
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method string getUser() Obtain Username, which is queried by exact match.
 * @method void setUser(string $User) Set Username, which is queried by exact match.
 * @method array getTags() Obtain User tag, which is used to filter users.
 * @method void setTags(array $Tags) Set User tag, which is used to filter users.
 */
class DescribeRabbitMQUserRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var string Username search by prefix or suffix
     */
    public $SearchUser;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var string Username, which is queried by exact match.
     */
    public $User;

    /**
     * @var array User tag, which is used to filter users.
     */
    public $Tags;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param string $SearchUser Username search by prefix or suffix
     * @param integer $Offset Pagination offset
     * @param integer $Limit Pagination limit
     * @param string $User Username, which is queried by exact match.
     * @param array $Tags User tag, which is used to filter users.
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

        if (array_key_exists("SearchUser",$param) and $param["SearchUser"] !== null) {
            $this->SearchUser = $param["SearchUser"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
