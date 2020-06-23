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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of groups containing this person and their description fields
 *
 * @method string getGroupId() Obtain ID of the group that contains this person
 * @method void setGroupId(string $GroupId) Set ID of the group that contains this person
 * @method array getPersonExDescriptions() Obtain Content of person description field
 * @method void setPersonExDescriptions(array $PersonExDescriptions) Set Content of person description field
 */
class PersonGroupInfo extends AbstractModel
{
    /**
     * @var string ID of the group that contains this person
     */
    public $GroupId;

    /**
     * @var array Content of person description field
     */
    public $PersonExDescriptions;

    /**
     * @param string $GroupId ID of the group that contains this person
     * @param array $PersonExDescriptions Content of person description field
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PersonExDescriptions",$param) and $param["PersonExDescriptions"] !== null) {
            $this->PersonExDescriptions = $param["PersonExDescriptions"];
        }
    }
}
