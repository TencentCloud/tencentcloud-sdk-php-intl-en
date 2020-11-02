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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of version ID information.
 *
 * @method string getVersionId() Obtain Version ID.
 * @method void setVersionId(string $VersionId) Set Version ID.
 * @method integer getCreateTime() Obtain Creation time, formatted as a Unix timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Creation time, formatted as a Unix timestamp.
 */
class VersionInfo extends AbstractModel
{
    /**
     * @var string Version ID.
     */
    public $VersionId;

    /**
     * @var integer Creation time, formatted as a Unix timestamp.
     */
    public $CreateTime;

    /**
     * @param string $VersionId Version ID.
     * @param integer $CreateTime Creation time, formatted as a Unix timestamp.
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
