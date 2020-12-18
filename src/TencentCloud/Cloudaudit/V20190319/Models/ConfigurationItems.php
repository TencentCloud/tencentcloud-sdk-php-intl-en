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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource configuration items
 *
 * @method string getConfigurationItemCaptureTime() Obtain Time of getting a configuration item
 * @method void setConfigurationItemCaptureTime(string $ConfigurationItemCaptureTime) Set Time of getting a configuration item
 * @method string getRelationships() Obtain Resource relationship list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRelationships(string $Relationships) Set Resource relationship list
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastItemInfo() Obtain This parameter takes effect only when `DiffMode` is set to `true`. When the input parameter `ChronologicalOrder` of the `GetConfigurationItems` API is set to `Forward`, details of the configuration item before the first one (if not a creation configuration item) will be returned. When this parameter is set to `Reverse`, details of the configuration item after the last one (if not a resource deletion configuration item) will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastItemInfo(string $LastItemInfo) Set This parameter takes effect only when `DiffMode` is set to `true`. When the input parameter `ChronologicalOrder` of the `GetConfigurationItems` API is set to `Forward`, details of the configuration item before the first one (if not a creation configuration item) will be returned. When this parameter is set to `Reverse`, details of the configuration item after the last one (if not a resource deletion configuration item) will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getRelatedEvents() Obtain List of events associated with the configuration changes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRelatedEvents(array $RelatedEvents) Set List of events associated with the configuration changes
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getResourceType() Obtain Resource type
 * @method void setResourceType(string $ResourceType) Set Resource type
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getConfigurationStateId() Obtain Configuration item ID
 * @method void setConfigurationStateId(string $ConfigurationStateId) Set Configuration item ID
 * @method string getResourceCreateTime() Obtain Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceCreateTime(string $ResourceCreateTime) Set Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain CFA version
 * @method void setVersion(string $Version) Set CFA version
 * @method string getResourceRegion() Obtain Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getConfiguration() Obtain 
 * @method void setConfiguration(string $Configuration) Set 
 * @method string getResourceAlias() Obtain Resource name
 * @method void setResourceAlias(string $ResourceAlias) Set Resource name
 * @method string getConfigurationItemStatus() Obtain Configuration item status. Valid values: OK, ResourceDiscovered, ResourceNotRecorded, ResourceDeleted, ResourceDeletedNotRecorded.
 * @method void setConfigurationItemStatus(string $ConfigurationItemStatus) Set Configuration item status. Valid values: OK, ResourceDiscovered, ResourceNotRecorded, ResourceDeleted, ResourceDeletedNotRecorded.
 */
class ConfigurationItems extends AbstractModel
{
    /**
     * @var string Time of getting a configuration item
     */
    public $ConfigurationItemCaptureTime;

    /**
     * @var string Resource relationship list
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Relationships;

    /**
     * @var string This parameter takes effect only when `DiffMode` is set to `true`. When the input parameter `ChronologicalOrder` of the `GetConfigurationItems` API is set to `Forward`, details of the configuration item before the first one (if not a creation configuration item) will be returned. When this parameter is set to `Reverse`, details of the configuration item after the last one (if not a resource deletion configuration item) will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastItemInfo;

    /**
     * @var array List of events associated with the configuration changes
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RelatedEvents;

    /**
     * @var string Resource type
     */
    public $ResourceType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Configuration item ID
     */
    public $ConfigurationStateId;

    /**
     * @var string Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceCreateTime;

    /**
     * @var string CFA version
     */
    public $Version;

    /**
     * @var string Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceRegion;

    /**
     * @var string 
     */
    public $Configuration;

    /**
     * @var string Resource name
     */
    public $ResourceAlias;

    /**
     * @var string Configuration item status. Valid values: OK, ResourceDiscovered, ResourceNotRecorded, ResourceDeleted, ResourceDeletedNotRecorded.
     */
    public $ConfigurationItemStatus;

    /**
     * @param string $ConfigurationItemCaptureTime Time of getting a configuration item
     * @param string $Relationships Resource relationship list
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastItemInfo This parameter takes effect only when `DiffMode` is set to `true`. When the input parameter `ChronologicalOrder` of the `GetConfigurationItems` API is set to `Forward`, details of the configuration item before the first one (if not a creation configuration item) will be returned. When this parameter is set to `Reverse`, details of the configuration item after the last one (if not a resource deletion configuration item) will be returned.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $RelatedEvents List of events associated with the configuration changes
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ResourceType Resource type
     * @param string $ResourceId Resource ID
     * @param string $ConfigurationStateId Configuration item ID
     * @param string $ResourceCreateTime Resource creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Version CFA version
     * @param string $ResourceRegion Resource region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Configuration 
     * @param string $ResourceAlias Resource name
     * @param string $ConfigurationItemStatus Configuration item status. Valid values: OK, ResourceDiscovered, ResourceNotRecorded, ResourceDeleted, ResourceDeletedNotRecorded.
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
        if (array_key_exists("ConfigurationItemCaptureTime",$param) and $param["ConfigurationItemCaptureTime"] !== null) {
            $this->ConfigurationItemCaptureTime = $param["ConfigurationItemCaptureTime"];
        }

        if (array_key_exists("Relationships",$param) and $param["Relationships"] !== null) {
            $this->Relationships = $param["Relationships"];
        }

        if (array_key_exists("LastItemInfo",$param) and $param["LastItemInfo"] !== null) {
            $this->LastItemInfo = $param["LastItemInfo"];
        }

        if (array_key_exists("RelatedEvents",$param) and $param["RelatedEvents"] !== null) {
            $this->RelatedEvents = [];
            foreach ($param["RelatedEvents"] as $key => $value){
                $obj = new RelatedEvent();
                $obj->deserialize($value);
                array_push($this->RelatedEvents, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ConfigurationStateId",$param) and $param["ConfigurationStateId"] !== null) {
            $this->ConfigurationStateId = $param["ConfigurationStateId"];
        }

        if (array_key_exists("ResourceCreateTime",$param) and $param["ResourceCreateTime"] !== null) {
            $this->ResourceCreateTime = $param["ResourceCreateTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = $param["Configuration"];
        }

        if (array_key_exists("ResourceAlias",$param) and $param["ResourceAlias"] !== null) {
            $this->ResourceAlias = $param["ResourceAlias"];
        }

        if (array_key_exists("ConfigurationItemStatus",$param) and $param["ConfigurationItemStatus"] !== null) {
            $this->ConfigurationItemStatus = $param["ConfigurationItemStatus"];
        }
    }
}
