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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Template instance
 *
 * @method string getName() Obtain Template name
 * @method void setName(string $Name) Set Template name
 * @method string getLevel() Obtain Template dimension. Valid values:
`instance`
`cluster`
 * @method void setLevel(string $Level) Set Template dimension. Valid values:
`instance`
`cluster`
 * @method string getDescribe() Obtain Template description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescribe(string $Describe) Set Template description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRecordRules() Obtain This parameter is valid if `Level` is `instance`.
List of recording rules in the template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordRules(array $RecordRules) Set This parameter is valid if `Level` is `instance`.
List of recording rules in the template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getServiceMonitors() Obtain This parameter is valid if `Level` is `cluster`.
List of ServiceMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceMonitors(array $ServiceMonitors) Set This parameter is valid if `Level` is `cluster`.
List of ServiceMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPodMonitors() Obtain This parameter is valid if `Level` is `cluster`.
List of PodMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodMonitors(array $PodMonitors) Set This parameter is valid if `Level` is `cluster`.
List of PodMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRawJobs() Obtain This parameter is valid if `Level` is `cluster`.
List of RawJob rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRawJobs(array $RawJobs) Set This parameter is valid if `Level` is `cluster`.
List of RawJob rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTemplateId() Obtain Template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateId(string $TemplateId) Set Template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Last update time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Last update time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain The current version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set The current version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDefault() Obtain Whether it is the default template provided by the system, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default template provided by the system, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAlertDetailRules() Obtain This parameter is valid if `Level` is `instance`.
List of alert configurations in the template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlertDetailRules(array $AlertDetailRules) Set This parameter is valid if `Level` is `instance`.
List of alert configurations in the template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetsTotal() Obtain Number of associated instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetsTotal(integer $TargetsTotal) Set Number of associated instances
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusTemp extends AbstractModel
{
    /**
     * @var string Template name
     */
    public $Name;

    /**
     * @var string Template dimension. Valid values:
`instance`
`cluster`
     */
    public $Level;

    /**
     * @var string Template description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Describe;

    /**
     * @var array This parameter is valid if `Level` is `instance`.
List of recording rules in the template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordRules;

    /**
     * @var array This parameter is valid if `Level` is `cluster`.
List of ServiceMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceMonitors;

    /**
     * @var array This parameter is valid if `Level` is `cluster`.
List of PodMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodMonitors;

    /**
     * @var array This parameter is valid if `Level` is `cluster`.
List of RawJob rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RawJobs;

    /**
     * @var string Template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateId;

    /**
     * @var string Last update time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string The current version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var boolean Whether it is the default template provided by the system, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefault;

    /**
     * @var array This parameter is valid if `Level` is `instance`.
List of alert configurations in the template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlertDetailRules;

    /**
     * @var integer Number of associated instances
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetsTotal;

    /**
     * @param string $Name Template name
     * @param string $Level Template dimension. Valid values:
`instance`
`cluster`
     * @param string $Describe Template description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RecordRules This parameter is valid if `Level` is `instance`.
List of recording rules in the template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ServiceMonitors This parameter is valid if `Level` is `cluster`.
List of ServiceMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PodMonitors This parameter is valid if `Level` is `cluster`.
List of PodMonitor rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RawJobs This parameter is valid if `Level` is `cluster`.
List of RawJob rules in the template.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TemplateId Template ID, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Last update time, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version The current version, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDefault Whether it is the default template provided by the system, which is used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AlertDetailRules This parameter is valid if `Level` is `instance`.
List of alert configurations in the template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetsTotal Number of associated instances
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("RecordRules",$param) and $param["RecordRules"] !== null) {
            $this->RecordRules = [];
            foreach ($param["RecordRules"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RecordRules, $obj);
            }
        }

        if (array_key_exists("ServiceMonitors",$param) and $param["ServiceMonitors"] !== null) {
            $this->ServiceMonitors = [];
            foreach ($param["ServiceMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->ServiceMonitors, $obj);
            }
        }

        if (array_key_exists("PodMonitors",$param) and $param["PodMonitors"] !== null) {
            $this->PodMonitors = [];
            foreach ($param["PodMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->PodMonitors, $obj);
            }
        }

        if (array_key_exists("RawJobs",$param) and $param["RawJobs"] !== null) {
            $this->RawJobs = [];
            foreach ($param["RawJobs"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RawJobs, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("AlertDetailRules",$param) and $param["AlertDetailRules"] !== null) {
            $this->AlertDetailRules = [];
            foreach ($param["AlertDetailRules"] as $key => $value){
                $obj = new PrometheusAlertPolicyItem();
                $obj->deserialize($value);
                array_push($this->AlertDetailRules, $obj);
            }
        }

        if (array_key_exists("TargetsTotal",$param) and $param["TargetsTotal"] !== null) {
            $this->TargetsTotal = $param["TargetsTotal"];
        }
    }
}
