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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountDescription request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow728lmc.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow728lmc.
 * @method string getUserName() Obtain Login username.
 * @method void setUserName(string $UserName) Set Login username.
 * @method string getHost() Obtain Access host allowed for a user. An account is uniquely identified by username and host.
 * @method void setHost(string $Host) Set Access host allowed for a user. An account is uniquely identified by username and host.
 * @method string getDescription() Obtain New account remarks, which can contain 0-256 characters.
 * @method void setDescription(string $Description) Set New account remarks, which can contain 0-256 characters.
 */
class ModifyAccountDescriptionRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow728lmc.
     */
    public $InstanceId;

    /**
     * @var string Login username.
     */
    public $UserName;

    /**
     * @var string Access host allowed for a user. An account is uniquely identified by username and host.
     */
    public $Host;

    /**
     * @var string New account remarks, which can contain 0-256 characters.
     */
    public $Description;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow728lmc.
     * @param string $UserName Login username.
     * @param string $Host Access host allowed for a user. An account is uniquely identified by username and host.
     * @param string $Description New account remarks, which can contain 0-256 characters.
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
