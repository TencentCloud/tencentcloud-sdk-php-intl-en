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
 * Event details list.
 *
 * @method string getHost() Obtain IP address of the affected event.
 * @method void setHost(string $Host) Set IP address of the affected event.
 * @method string getRole() Obtain Service role of the affected event.
 * @method void setRole(string $Role) Set Service role of the affected event.
 * @method string getName() Obtain Event name.
 * @method void setName(string $Name) Set Event name.
 * @method string getDetail() Obtain Event alarm details.
 * @method void setDetail(string $Detail) Set Event alarm details.
 * @method string getCreateTime() Obtain Event occurrence time.
 * @method void setCreateTime(string $CreateTime) Set Event occurrence time.
 */
class EMREventListItem extends AbstractModel
{
    /**
     * @var string IP address of the affected event.
     */
    public $Host;

    /**
     * @var string Service role of the affected event.
     */
    public $Role;

    /**
     * @var string Event name.
     */
    public $Name;

    /**
     * @var string Event alarm details.
     */
    public $Detail;

    /**
     * @var string Event occurrence time.
     */
    public $CreateTime;

    /**
     * @param string $Host IP address of the affected event.
     * @param string $Role Service role of the affected event.
     * @param string $Name Event name.
     * @param string $Detail Event alarm details.
     * @param string $CreateTime Event occurrence time.
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
