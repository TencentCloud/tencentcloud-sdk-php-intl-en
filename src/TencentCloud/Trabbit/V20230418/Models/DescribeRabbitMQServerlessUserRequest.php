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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessUser request structure.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getSearchUser() Obtain Retrieves usernames. supports prefix match and suffix matching.
 * @method void setSearchUser(string $SearchUser) Set Retrieves usernames. supports prefix match and suffix matching.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method string getUser() Obtain Specifies the username for an exact query.
 * @method void setUser(string $User) Set Specifies the username for an exact query.
 * @method array getTags() Obtain User tag. filters by Tag filter list.
 * @method void setTags(array $Tags) Set User tag. filters by Tag filter list.
 */
class DescribeRabbitMQServerlessUserRequest extends AbstractModel
{
    /**
     * @var string instance ID
     */
    public $InstanceId;

    /**
     * @var string Retrieves usernames. supports prefix match and suffix matching.
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
     * @var string Specifies the username for an exact query.
     */
    public $User;

    /**
     * @var array User tag. filters by Tag filter list.
     */
    public $Tags;

    /**
     * @param string $InstanceId instance ID
     * @param string $SearchUser Retrieves usernames. supports prefix match and suffix matching.
     * @param integer $Offset Pagination offset
     * @param integer $Limit Pagination limit
     * @param string $User Specifies the username for an exact query.
     * @param array $Tags User tag. filters by Tag filter list.
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
