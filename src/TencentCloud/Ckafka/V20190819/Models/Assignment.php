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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Stores the information of partition assigned to this consumer
 *
 * @method integer getVersion() Obtain Assignment version information
 * @method void setVersion(integer $Version) Set Assignment version information
 * @method array getTopics() Obtain topic information list.
 * @method void setTopics(array $Topics) Set topic information list.
 */
class Assignment extends AbstractModel
{
    /**
     * @var integer Assignment version information
     */
    public $Version;

    /**
     * @var array topic information list.
     */
    public $Topics;

    /**
     * @param integer $Version Assignment version information
     * @param array $Topics topic information list.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new GroupInfoTopics();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }
    }
}
