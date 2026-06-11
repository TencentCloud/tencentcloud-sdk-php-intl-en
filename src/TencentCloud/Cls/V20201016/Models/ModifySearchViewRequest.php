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
 * ModifySearchView request structure.
 *
 * @method string getViewId() Obtain <p>View ID.</p>
 * @method void setViewId(string $ViewId) Set <p>View ID.</p>
 * @method string getViewName() Obtain <p>View name</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
 * @method void setViewName(string $ViewName) Set <p>View name</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
 * @method string getViewType() Obtain <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic information configured in the Topics field should match the ViewType.</p>
 * @method void setViewType(string $ViewType) Set <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic information configured in the Topics field should match the ViewType.</p>
 * @method array getTopics() Obtain <p>The query view contains topics, with a maximum of 10 topics.</p>
 * @method void setTopics(array $Topics) Set <p>The query view contains topics, with a maximum of 10 topics.</p>
 * @method string getDescription() Obtain <p>Description information</p>
 * @method void setDescription(string $Description) Set <p>Description information</p>
 */
class ModifySearchViewRequest extends AbstractModel
{
    /**
     * @var string <p>View ID.</p>
     */
    public $ViewId;

    /**
     * @var string <p>View name</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
     */
    public $ViewName;

    /**
     * @var string <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic information configured in the Topics field should match the ViewType.</p>
     */
    public $ViewType;

    /**
     * @var array <p>The query view contains topics, with a maximum of 10 topics.</p>
     */
    public $Topics;

    /**
     * @var string <p>Description information</p>
     */
    public $Description;

    /**
     * @param string $ViewId <p>View ID.</p>
     * @param string $ViewName <p>View name</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
     * @param string $ViewType <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic information configured in the Topics field should match the ViewType.</p>
     * @param array $Topics <p>The query view contains topics, with a maximum of 10 topics.</p>
     * @param string $Description <p>Description information</p>
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
        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new ViewSearchTopic();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
