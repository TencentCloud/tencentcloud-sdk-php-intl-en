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
 * Details of the Prometheus recording rule instance, including the cluster ID.
 *
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method string getUpdateTime() Obtain Last update time
 * @method void setUpdateTime(string $UpdateTime) Set Last update time
 * @method string getTemplateId() Obtain YAML content
 * @method void setTemplateId(string $TemplateId) Set YAML content
 * @method string getContent() Obtain If the recording rule comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(string $Content) Set If the recording rule comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain If the recording rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set If the recording rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getId() Obtain id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Number of rules
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Number of rules
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusRecordRuleYamlItem extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var string Last update time
     */
    public $UpdateTime;

    /**
     * @var string YAML content
     */
    public $TemplateId;

    /**
     * @var string If the recording rule comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var string If the recording rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var integer Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var integer Number of rules
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @param string $Name Instance name
     * @param string $UpdateTime Last update time
     * @param string $TemplateId YAML content
     * @param string $Content If the recording rule comes from a template, `TemplateId` is the template ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId If the recording rule comes from the user cluster CRD resource definition, `ClusterId` is the cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Id id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Number of rules
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
