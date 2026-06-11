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
 * CreateSearchView request structure.
 *
 * @method string getLogsetId() Obtain <p>log set id</p><p>Logset to which the query view belongs. It is only used to manage the query view. Topics contained in the query view can be irrelevant to this logset.</p>
 * @method void setLogsetId(string $LogsetId) Set <p>log set id</p><p>Logset to which the query view belongs. It is only used to manage the query view. Topics contained in the query view can be irrelevant to this logset.</p>
 * @method string getLogsetRegion() Obtain <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
 * @method void setLogsetRegion(string $LogsetRegion) Set <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
 * @method string getViewName() Obtain <p>View name</p><p>Input parameter limit: Supports up to 255 characters. Cannot contain "|" character.</p>
 * @method void setViewName(string $ViewName) Set <p>View name</p><p>Input parameter limit: Supports up to 255 characters. Cannot contain "|" character.</p>
 * @method string getViewType() Obtain <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic type in the field of Topics should match the ViewType.</p>
 * @method void setViewType(string $ViewType) Set <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic type in the field of Topics should match the ViewType.</p>
 * @method array getTopics() Obtain <p>The query view contains topics, with a maximum of 10 topics.</p><p>The topic information configured in the Topics field should match the ViewType.</p>
 * @method void setTopics(array $Topics) Set <p>The query view contains topics, with a maximum of 10 topics.</p><p>The topic information configured in the Topics field should match the ViewType.</p>
 * @method string getViewIdPrefix() Obtain <p>Custom query view id prefix</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>ViewId format of successfully created query view is ${ViewIdPrefix}-view</p>
 * @method void setViewIdPrefix(string $ViewIdPrefix) Set <p>Custom query view id prefix</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>ViewId format of successfully created query view is ${ViewIdPrefix}-view</p>
 * @method string getDescription() Obtain <p>Description</p>
 * @method void setDescription(string $Description) Set <p>Description</p>
 */
class CreateSearchViewRequest extends AbstractModel
{
    /**
     * @var string <p>log set id</p><p>Logset to which the query view belongs. It is only used to manage the query view. Topics contained in the query view can be irrelevant to this logset.</p>
     */
    public $LogsetId;

    /**
     * @var string <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
     */
    public $LogsetRegion;

    /**
     * @var string <p>View name</p><p>Input parameter limit: Supports up to 255 characters. Cannot contain "|" character.</p>
     */
    public $ViewName;

    /**
     * @var string <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic type in the field of Topics should match the ViewType.</p>
     */
    public $ViewType;

    /**
     * @var array <p>The query view contains topics, with a maximum of 10 topics.</p><p>The topic information configured in the Topics field should match the ViewType.</p>
     */
    public $Topics;

    /**
     * @var string <p>Custom query view id prefix</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>ViewId format of successfully created query view is ${ViewIdPrefix}-view</p>
     */
    public $ViewIdPrefix;

    /**
     * @var string <p>Description</p>
     */
    public $Description;

    /**
     * @param string $LogsetId <p>log set id</p><p>Logset to which the query view belongs. It is only used to manage the query view. Topics contained in the query view can be irrelevant to this logset.</p>
     * @param string $LogsetRegion <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
     * @param string $ViewName <p>View name</p><p>Input parameter limit: Supports up to 255 characters. Cannot contain "|" character.</p>
     * @param string $ViewType <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul><p>The topic type in the field of Topics should match the ViewType.</p>
     * @param array $Topics <p>The query view contains topics, with a maximum of 10 topics.</p><p>The topic information configured in the Topics field should match the ViewType.</p>
     * @param string $ViewIdPrefix <p>Custom query view id prefix</p><p>Parameter format: <code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>ViewId format of successfully created query view is ${ViewIdPrefix}-view</p>
     * @param string $Description <p>Description</p>
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetRegion",$param) and $param["LogsetRegion"] !== null) {
            $this->LogsetRegion = $param["LogsetRegion"];
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

        if (array_key_exists("ViewIdPrefix",$param) and $param["ViewIdPrefix"] !== null) {
            $this->ViewIdPrefix = $param["ViewIdPrefix"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
