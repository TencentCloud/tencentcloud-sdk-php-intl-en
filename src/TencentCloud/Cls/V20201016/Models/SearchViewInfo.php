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
 * Query view info
 *
 * @method string getViewId() Obtain <p>View ID</p>
 * @method void setViewId(string $ViewId) Set <p>View ID</p>
 * @method string getViewName() Obtain <p>View name</p>
 * @method void setViewName(string $ViewName) Set <p>View name</p>
 * @method string getViewType() Obtain <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul>
 * @method void setViewType(string $ViewType) Set <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul>
 * @method string getLogsetId() Obtain <p>Logset id</p><p>Logset of the view</p>
 * @method void setLogsetId(string $LogsetId) Set <p>Logset id</p><p>Logset of the view</p>
 * @method string getLogsetRegion() Obtain <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
 * @method void setLogsetRegion(string $LogsetRegion) Set <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
 * @method array getTopics() Obtain <p>View log topic information</p>
 * @method void setTopics(array $Topics) Set <p>View log topic information</p>
 * @method string getDescription() Obtain <p>View description</p>
 * @method void setDescription(string $Description) Set <p>View description</p>
 * @method integer getCreateTime() Obtain <p>Creation time</p><p>Unit: second-level timestamp</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time</p><p>Unit: second-level timestamp</p>
 * @method integer getUpdateTime() Obtain <p>Update time</p><p>Measurement unit: second-level timestamp</p>
 * @method void setUpdateTime(integer $UpdateTime) Set <p>Update time</p><p>Measurement unit: second-level timestamp</p>
 */
class SearchViewInfo extends AbstractModel
{
    /**
     * @var string <p>View ID</p>
     */
    public $ViewId;

    /**
     * @var string <p>View name</p>
     */
    public $ViewName;

    /**
     * @var string <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul>
     */
    public $ViewType;

    /**
     * @var string <p>Logset id</p><p>Logset of the view</p>
     */
    public $LogsetId;

    /**
     * @var string <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
     */
    public $LogsetRegion;

    /**
     * @var array <p>View log topic information</p>
     */
    public $Topics;

    /**
     * @var string <p>View description</p>
     */
    public $Description;

    /**
     * @var integer <p>Creation time</p><p>Unit: second-level timestamp</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Update time</p><p>Measurement unit: second-level timestamp</p>
     */
    public $UpdateTime;

    /**
     * @param string $ViewId <p>View ID</p>
     * @param string $ViewName <p>View name</p>
     * @param string $ViewType <p>View type</p><p>Enumeration value:</p><ul><li>log: Log topic</li><li>metric: Metric topic</li></ul>
     * @param string $LogsetId <p>Logset id</p><p>Logset of the view</p>
     * @param string $LogsetRegion <p>Region of the logset</p><p>Parameter format: ap-guangzhou</p>
     * @param array $Topics <p>View log topic information</p>
     * @param string $Description <p>View description</p>
     * @param integer $CreateTime <p>Creation time</p><p>Unit: second-level timestamp</p>
     * @param integer $UpdateTime <p>Update time</p><p>Measurement unit: second-level timestamp</p>
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

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetRegion",$param) and $param["LogsetRegion"] !== null) {
            $this->LogsetRegion = $param["LogsetRegion"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
