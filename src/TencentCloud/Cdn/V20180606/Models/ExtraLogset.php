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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of logsets and log topics (except those created in the Shanghai region)
 *
 * @method LogSetInfo getLogset() Obtain Logset information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogset(LogSetInfo $Logset) Set Logset information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getTopics() Obtain Log topic information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTopics(array $Topics) Set Log topic information
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ExtraLogset extends AbstractModel
{
    /**
     * @var LogSetInfo Logset information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Logset;

    /**
     * @var array Log topic information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Topics;

    /**
     * @param LogSetInfo $Logset Logset information
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Topics Log topic information
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = new LogSetInfo();
            $this->Logset->deserialize($param["Logset"]);
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new TopicInfo();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }
    }
}
