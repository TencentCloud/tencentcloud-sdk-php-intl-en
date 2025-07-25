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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Types of the returned error logs for an instance
 *
 * @method integer getTimestamp() Obtain Log timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Log timestamp.
 * @method string getLevel() Obtain Log level.
 * @method void setLevel(string $Level) Set Log level.
 * @method string getContent() Obtain Log content.
 * @method void setContent(string $Content) Set Log content.
 */
class CynosdbErrorLogItem extends AbstractModel
{
    /**
     * @var integer Log timestamp.
     */
    public $Timestamp;

    /**
     * @var string Log level.
     */
    public $Level;

    /**
     * @var string Log content.
     */
    public $Content;

    /**
     * @param integer $Timestamp Log timestamp.
     * @param string $Level Log level.
     * @param string $Content Log content.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
