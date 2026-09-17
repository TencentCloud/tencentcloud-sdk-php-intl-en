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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source log topic configuration
 *
 * @method integer getTopicFilterType() Obtain <p>Log topic filtering method.</p><p>Enumeration values:</p><ul><li>1: Static selection</li></ul>
 * @method void setTopicFilterType(integer $TopicFilterType) Set <p>Log topic filtering method.</p><p>Enumeration values:</p><ul><li>1: Static selection</li></ul>
 * @method string getLogsetId() Obtain <p>Source logset id</p>
 * @method void setLogsetId(string $LogsetId) Set <p>Source logset id</p>
 * @method array getTopics() Obtain <p>Source log topic list</p><p>Required when TopicFilterType=1</p>
 * @method void setTopics(array $Topics) Set <p>Source log topic list</p><p>Required when TopicFilterType=1</p>
 */
class SourceTopicConfig extends AbstractModel
{
    /**
     * @var integer <p>Log topic filtering method.</p><p>Enumeration values:</p><ul><li>1: Static selection</li></ul>
     */
    public $TopicFilterType;

    /**
     * @var string <p>Source logset id</p>
     */
    public $LogsetId;

    /**
     * @var array <p>Source log topic list</p><p>Required when TopicFilterType=1</p>
     */
    public $Topics;

    /**
     * @param integer $TopicFilterType <p>Log topic filtering method.</p><p>Enumeration values:</p><ul><li>1: Static selection</li></ul>
     * @param string $LogsetId <p>Source logset id</p>
     * @param array $Topics <p>Source log topic list</p><p>Required when TopicFilterType=1</p>
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
        if (array_key_exists("TopicFilterType",$param) and $param["TopicFilterType"] !== null) {
            $this->TopicFilterType = $param["TopicFilterType"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new SourceTopicInfo();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }
    }
}
