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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP range group
 *
 * @method integer getGroupId() Obtain Group ID. Enter `0`.
 * @method void setGroupId(integer $GroupId) Set Group ID. Enter `0`.
 * @method string getName() Obtain Group name.
 * @method void setName(string $Name) Set Group name.
 * @method array getContent() Obtain IP group content. Only supports IP and IP mask.
 * @method void setContent(array $Content) Set IP group content. Only supports IP and IP mask.
 */
class IPGroup extends AbstractModel
{
    /**
     * @var integer Group ID. Enter `0`.
     */
    public $GroupId;

    /**
     * @var string Group name.
     */
    public $Name;

    /**
     * @var array IP group content. Only supports IP and IP mask.
     */
    public $Content;

    /**
     * @param integer $GroupId Group ID. Enter `0`.
     * @param string $Name Group name.
     * @param array $Content IP group content. Only supports IP and IP mask.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
