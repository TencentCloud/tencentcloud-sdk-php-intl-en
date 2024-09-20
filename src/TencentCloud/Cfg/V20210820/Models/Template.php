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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Template library
 *
 * @method integer getTemplateId() Obtain Template library ID
 * @method void setTemplateId(integer $TemplateId) Set Template library ID
 * @method string getTemplateTitle() Obtain Template library name
 * @method void setTemplateTitle(string $TemplateTitle) Set Template library name
 * @method string getTemplateDescription() Obtain Template library description
 * @method void setTemplateDescription(string $TemplateDescription) Set Template library description
 * @method string getTemplateTag() Obtain Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateTag(string $TemplateTag) Set Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTemplateIsUsed() Obtain Usage status. 1: in use; 2: not in use.
 * @method void setTemplateIsUsed(integer $TemplateIsUsed) Set Usage status. 1: in use; 2: not in use.
 * @method string getTemplateCreateTime() Obtain Template library creation time
 * @method void setTemplateCreateTime(string $TemplateCreateTime) Set Template library creation time
 * @method string getTemplateUpdateTime() Obtain Template library update time
 * @method void setTemplateUpdateTime(string $TemplateUpdateTime) Set Template library update time
 * @method integer getTemplateMode() Obtain Template library mode. 1: manual execution; 2: automatic execution.
 * @method void setTemplateMode(integer $TemplateMode) Set Template library mode. 1: manual execution; 2: automatic execution.
 * @method integer getTemplatePauseDuration() Obtain Automatic pause duration. Unit: minutes.
 * @method void setTemplatePauseDuration(integer $TemplatePauseDuration) Set Automatic pause duration. Unit: minutes.
 * @method string getTemplateOwnerUin() Obtain Main account that creates the experiment
 * @method void setTemplateOwnerUin(string $TemplateOwnerUin) Set Main account that creates the experiment
 * @method integer getTemplateRegionId() Obtain Region ID
 * @method void setTemplateRegionId(integer $TemplateRegionId) Set Region ID
 * @method array getTemplateGroups() Obtain Action group
 * @method void setTemplateGroups(array $TemplateGroups) Set Action group
 * @method array getTemplateMonitors() Obtain Monitoring metrics
 * @method void setTemplateMonitors(array $TemplateMonitors) Set Monitoring metrics
 * @method TemplatePolicy getTemplatePolicy() Obtain Guardrail monitoring
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplatePolicy(TemplatePolicy $TemplatePolicy) Set Guardrail monitoring
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTemplateSource() Obtain Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateSource(integer $TemplateSource) Set Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getApmServiceList() Obtain Application information on Application Performance Monitoring
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApmServiceList(array $ApmServiceList) Set Application information on Application Performance Monitoring
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAlarmPolicy() Obtain Alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmPolicy(array $AlarmPolicy) Set Alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPolicyDealType() Obtain Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyDealType(integer $PolicyDealType) Set Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Template extends AbstractModel
{
    /**
     * @var integer Template library ID
     */
    public $TemplateId;

    /**
     * @var string Template library name
     */
    public $TemplateTitle;

    /**
     * @var string Template library description
     */
    public $TemplateDescription;

    /**
     * @var string Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateTag;

    /**
     * @var integer Usage status. 1: in use; 2: not in use.
     */
    public $TemplateIsUsed;

    /**
     * @var string Template library creation time
     */
    public $TemplateCreateTime;

    /**
     * @var string Template library update time
     */
    public $TemplateUpdateTime;

    /**
     * @var integer Template library mode. 1: manual execution; 2: automatic execution.
     */
    public $TemplateMode;

    /**
     * @var integer Automatic pause duration. Unit: minutes.
     */
    public $TemplatePauseDuration;

    /**
     * @var string Main account that creates the experiment
     */
    public $TemplateOwnerUin;

    /**
     * @var integer Region ID
     */
    public $TemplateRegionId;

    /**
     * @var array Action group
     */
    public $TemplateGroups;

    /**
     * @var array Monitoring metrics
     */
    public $TemplateMonitors;

    /**
     * @var TemplatePolicy Guardrail monitoring
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplatePolicy;

    /**
     * @var array Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateSource;

    /**
     * @var array Application information on Application Performance Monitoring
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApmServiceList;

    /**
     * @var array Alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmPolicy;

    /**
     * @var integer Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyDealType;

    /**
     * @param integer $TemplateId Template library ID
     * @param string $TemplateTitle Template library name
     * @param string $TemplateDescription Template library description
     * @param string $TemplateTag Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TemplateIsUsed Usage status. 1: in use; 2: not in use.
     * @param string $TemplateCreateTime Template library creation time
     * @param string $TemplateUpdateTime Template library update time
     * @param integer $TemplateMode Template library mode. 1: manual execution; 2: automatic execution.
     * @param integer $TemplatePauseDuration Automatic pause duration. Unit: minutes.
     * @param string $TemplateOwnerUin Main account that creates the experiment
     * @param integer $TemplateRegionId Region ID
     * @param array $TemplateGroups Action group
     * @param array $TemplateMonitors Monitoring metrics
     * @param TemplatePolicy $TemplatePolicy Guardrail monitoring
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TemplateSource Template library source. 0: self-built; 1: recommended by experts.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ApmServiceList Application information on Application Performance Monitoring
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AlarmPolicy Alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PolicyDealType Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateTitle",$param) and $param["TemplateTitle"] !== null) {
            $this->TemplateTitle = $param["TemplateTitle"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("TemplateTag",$param) and $param["TemplateTag"] !== null) {
            $this->TemplateTag = $param["TemplateTag"];
        }

        if (array_key_exists("TemplateIsUsed",$param) and $param["TemplateIsUsed"] !== null) {
            $this->TemplateIsUsed = $param["TemplateIsUsed"];
        }

        if (array_key_exists("TemplateCreateTime",$param) and $param["TemplateCreateTime"] !== null) {
            $this->TemplateCreateTime = $param["TemplateCreateTime"];
        }

        if (array_key_exists("TemplateUpdateTime",$param) and $param["TemplateUpdateTime"] !== null) {
            $this->TemplateUpdateTime = $param["TemplateUpdateTime"];
        }

        if (array_key_exists("TemplateMode",$param) and $param["TemplateMode"] !== null) {
            $this->TemplateMode = $param["TemplateMode"];
        }

        if (array_key_exists("TemplatePauseDuration",$param) and $param["TemplatePauseDuration"] !== null) {
            $this->TemplatePauseDuration = $param["TemplatePauseDuration"];
        }

        if (array_key_exists("TemplateOwnerUin",$param) and $param["TemplateOwnerUin"] !== null) {
            $this->TemplateOwnerUin = $param["TemplateOwnerUin"];
        }

        if (array_key_exists("TemplateRegionId",$param) and $param["TemplateRegionId"] !== null) {
            $this->TemplateRegionId = $param["TemplateRegionId"];
        }

        if (array_key_exists("TemplateGroups",$param) and $param["TemplateGroups"] !== null) {
            $this->TemplateGroups = [];
            foreach ($param["TemplateGroups"] as $key => $value){
                $obj = new TemplateGroup();
                $obj->deserialize($value);
                array_push($this->TemplateGroups, $obj);
            }
        }

        if (array_key_exists("TemplateMonitors",$param) and $param["TemplateMonitors"] !== null) {
            $this->TemplateMonitors = [];
            foreach ($param["TemplateMonitors"] as $key => $value){
                $obj = new TemplateMonitor();
                $obj->deserialize($value);
                array_push($this->TemplateMonitors, $obj);
            }
        }

        if (array_key_exists("TemplatePolicy",$param) and $param["TemplatePolicy"] !== null) {
            $this->TemplatePolicy = new TemplatePolicy();
            $this->TemplatePolicy->deserialize($param["TemplatePolicy"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TemplateSource",$param) and $param["TemplateSource"] !== null) {
            $this->TemplateSource = $param["TemplateSource"];
        }

        if (array_key_exists("ApmServiceList",$param) and $param["ApmServiceList"] !== null) {
            $this->ApmServiceList = [];
            foreach ($param["ApmServiceList"] as $key => $value){
                $obj = new ApmServiceInfo();
                $obj->deserialize($value);
                array_push($this->ApmServiceList, $obj);
            }
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }

        if (array_key_exists("PolicyDealType",$param) and $param["PolicyDealType"] !== null) {
            $this->PolicyDealType = $param["PolicyDealType"];
        }
    }
}
