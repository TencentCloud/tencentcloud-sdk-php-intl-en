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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of person libraries containing this person and description field content
 *
 * @method string getGroupId() Obtain Personnel database ID that contains this person.
 * @method void setGroupId(string $GroupId) Set Personnel database ID that contains this person.
 * @method array getPersonExDescriptions() Obtain Person description field content.
 * @method void setPersonExDescriptions(array $PersonExDescriptions) Set Person description field content.
 */
class PersonGroupInfo extends AbstractModel
{
    /**
     * @var string Personnel database ID that contains this person.
     */
    public $GroupId;

    /**
     * @var array Person description field content.
     */
    public $PersonExDescriptions;

    /**
     * @param string $GroupId Personnel database ID that contains this person.
     * @param array $PersonExDescriptions Person description field content.
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
