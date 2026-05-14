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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopologyNew request structure.
 *
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 * @method integer getStartTime() Obtain Querying start time.
 * @method void setStartTime(integer $StartTime) Set Querying start time.
 * @method integer getEndTime() Obtain Query end time
 * @method void setEndTime(integer $EndTime) Set Query end time
 * @method string getServiceName() Obtain Application name
 * @method void setServiceName(string $ServiceName) Set Application name
 * @method integer getUpLevel() Obtain Upstream level.
 * @method void setUpLevel(integer $UpLevel) Set Upstream level.
 * @method string getServiceInstance() Obtain Application instance information.
 * @method void setServiceInstance(string $ServiceInstance) Set Application instance information.
 * @method integer getDownLevel() Obtain downstream hierarchy
 * @method void setDownLevel(integer $DownLevel) Set downstream hierarchy
 * @method string getView() Obtain perspective
 * @method void setView(string $View) Set perspective
 * @method array getFilters() Obtain Filter.
 * @method void setFilters(array $Filters) Set Filter.
 * @method string getTopic() Obtain Represents topic (for MQ topology)
 * @method void setTopic(string $Topic) Set Represents topic (for MQ topology)
 * @method Selectors getSelectors() Obtain View filtering list.
 * @method void setSelectors(Selectors $Selectors) Set View filtering list.
 * @method string getId() Obtain View ID
 * @method void setId(string $Id) Set View ID
 * @method string getTraceID() Obtain TraceID
 * @method void setTraceID(string $TraceID) Set TraceID
 * @method boolean getIsSlowTopFive() Obtain Specifies the top 5 slow response nodes query.
 * @method void setIsSlowTopFive(boolean $IsSlowTopFive) Set Specifies the top 5 slow response nodes query.
 * @method boolean getGetResource() Obtain Whether the resource layer information is obtained.
 * @method void setGetResource(boolean $GetResource) Set Whether the resource layer information is obtained.
 * @method array getTags() Obtain Filters by application tag.
 * @method void setTags(array $Tags) Set Filters by application tag.
 * @method Selectors getHidden() Obtain Node type not displayed.
 * @method void setHidden(Selectors $Hidden) Set Node type not displayed.
 */
class DescribeTopologyNewRequest extends AbstractModel
{
    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @var integer Querying start time.
     */
    public $StartTime;

    /**
     * @var integer Query end time
     */
    public $EndTime;

    /**
     * @var string Application name
     */
    public $ServiceName;

    /**
     * @var integer Upstream level.
     */
    public $UpLevel;

    /**
     * @var string Application instance information.
     */
    public $ServiceInstance;

    /**
     * @var integer downstream hierarchy
     */
    public $DownLevel;

    /**
     * @var string perspective
     */
    public $View;

    /**
     * @var array Filter.
     */
    public $Filters;

    /**
     * @var string Represents topic (for MQ topology)
     */
    public $Topic;

    /**
     * @var Selectors View filtering list.
     */
    public $Selectors;

    /**
     * @var string View ID
     */
    public $Id;

    /**
     * @var string TraceID
     */
    public $TraceID;

    /**
     * @var boolean Specifies the top 5 slow response nodes query.
     */
    public $IsSlowTopFive;

    /**
     * @var boolean Whether the resource layer information is obtained.
     */
    public $GetResource;

    /**
     * @var array Filters by application tag.
     */
    public $Tags;

    /**
     * @var Selectors Node type not displayed.
     */
    public $Hidden;

    /**
     * @param string $InstanceId Business system ID
     * @param integer $StartTime Querying start time.
     * @param integer $EndTime Query end time
     * @param string $ServiceName Application name
     * @param integer $UpLevel Upstream level.
     * @param string $ServiceInstance Application instance information.
     * @param integer $DownLevel downstream hierarchy
     * @param string $View perspective
     * @param array $Filters Filter.
     * @param string $Topic Represents topic (for MQ topology)
     * @param Selectors $Selectors View filtering list.
     * @param string $Id View ID
     * @param string $TraceID TraceID
     * @param boolean $IsSlowTopFive Specifies the top 5 slow response nodes query.
     * @param boolean $GetResource Whether the resource layer information is obtained.
     * @param array $Tags Filters by application tag.
     * @param Selectors $Hidden Node type not displayed.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("UpLevel",$param) and $param["UpLevel"] !== null) {
            $this->UpLevel = $param["UpLevel"];
        }

        if (array_key_exists("ServiceInstance",$param) and $param["ServiceInstance"] !== null) {
            $this->ServiceInstance = $param["ServiceInstance"];
        }

        if (array_key_exists("DownLevel",$param) and $param["DownLevel"] !== null) {
            $this->DownLevel = $param["DownLevel"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Selectors",$param) and $param["Selectors"] !== null) {
            $this->Selectors = new Selectors();
            $this->Selectors->deserialize($param["Selectors"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TraceID",$param) and $param["TraceID"] !== null) {
            $this->TraceID = $param["TraceID"];
        }

        if (array_key_exists("IsSlowTopFive",$param) and $param["IsSlowTopFive"] !== null) {
            $this->IsSlowTopFive = $param["IsSlowTopFive"];
        }

        if (array_key_exists("GetResource",$param) and $param["GetResource"] !== null) {
            $this->GetResource = $param["GetResource"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = new Selectors();
            $this->Hidden->deserialize($param["Hidden"]);
        }
    }
}
