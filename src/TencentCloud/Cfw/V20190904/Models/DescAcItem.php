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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Item in the access control list. Each item represents an access control rule.
 *
 * @method string getSourceContent() Obtain Access source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceContent(string $SourceContent) Set Access source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetContent() Obtain Access destination.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetContent(string $TargetContent) Set Access destination.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPort() Obtain Port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(string $Port) Set Port.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleAction() Obtain Action that Cloud Firewall performs on the traffic. Valid values: accept (allow), drop (reject), and log (monitor).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleAction(string $RuleAction) Set Action that Cloud Firewall performs on the traffic. Valid values: accept (allow), drop (reject), and log (monitor).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Number of rule matching times.
 * @method void setCount(integer $Count) Set Number of rule matching times.
 * @method integer getOrderIndex() Obtain Rule sequence number.
 * @method void setOrderIndex(integer $OrderIndex) Set Rule sequence number.
 * @method string getSourceType() Obtain Access source type. Valid values for an inbound rule: ip, net, template, and location; valid values for an outbound rule: ip, net, template, instance, group, and tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceType(string $SourceType) Set Access source type. Valid values for an inbound rule: ip, net, template, and location; valid values for an outbound rule: ip, net, template, instance, group, and tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetType() Obtain Access destination type. Valid values for an inbound rule: ip, net, template, instance, group, and tag; valid values for an outbound rule: ip, net, domain, template, and location.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetType(string $TargetType) Set Access destination type. Valid values for an inbound rule: ip, net, template, instance, group, and tag; valid values for an outbound rule: ip, net, domain, template, and location.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUuid() Obtain Unique ID of the rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(integer $Uuid) Set Unique ID of the rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInvalid() Obtain Rule validity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInvalid(integer $Invalid) Set Rule validity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsRegion() Obtain Valid values: 0: common rules; 1: regional rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRegion(integer $IsRegion) Set Valid values: 0: common rules; 1: regional rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCountryCode() Obtain Country ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountryCode(integer $CountryCode) Set Country ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCityCode() Obtain City ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCityCode(integer $CityCode) Set City ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCountryName() Obtain Country name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCountryName(string $CountryName) Set Country name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCityName() Obtain City name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCityName(string $CityName) Set City name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloudCode() Obtain Cloud provider code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudCode(string $CloudCode) Set Cloud provider code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsCloud() Obtain Valid values: 0: common rules; 1: cloud provider rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsCloud(integer $IsCloud) Set Valid values: 0: common rules; 1: cloud provider rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnable() Obtain Rule status. Valid values: true: enabled; false: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(string $Enable) Set Rule status. Valid values: true: enabled; false: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDirection() Obtain Rule direction. Valid values: 1: inbound; 0: outbound.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDirection(integer $Direction) Set Rule direction. Valid values: 1: inbound; 0: outbound.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInternalUuid() Obtain UUID for internal use. Generally, this field is not required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternalUuid(integer $InternalUuid) Set UUID for internal use. Generally, this field is not required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Rule status. This field is valid when you query rule matching details. Valid values: 0: new; 1: deleted; 2: edited and deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Rule status. This field is valid when you query rule matching details. Valid values: 0: new; 1: deleted; 2: edited and deleted.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBetaList() Obtain Details of associated tasks
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBetaList(array $BetaList) Set Details of associated tasks
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class DescAcItem extends AbstractModel
{
    /**
     * @var string Access source.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceContent;

    /**
     * @var string Access destination.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetContent;

    /**
     * @var string Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Port.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Action that Cloud Firewall performs on the traffic. Valid values: accept (allow), drop (reject), and log (monitor).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleAction;

    /**
     * @var string Description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Number of rule matching times.
     */
    public $Count;

    /**
     * @var integer Rule sequence number.
     */
    public $OrderIndex;

    /**
     * @var string Access source type. Valid values for an inbound rule: ip, net, template, and location; valid values for an outbound rule: ip, net, template, instance, group, and tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceType;

    /**
     * @var string Access destination type. Valid values for an inbound rule: ip, net, template, instance, group, and tag; valid values for an outbound rule: ip, net, domain, template, and location.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetType;

    /**
     * @var integer Unique ID of the rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var integer Rule validity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Invalid;

    /**
     * @var integer Valid values: 0: common rules; 1: regional rules.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRegion;

    /**
     * @var integer Country ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CountryCode;

    /**
     * @var integer City ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CityCode;

    /**
     * @var string Country name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CountryName;

    /**
     * @var string City name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CityName;

    /**
     * @var string Cloud provider code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudCode;

    /**
     * @var integer Valid values: 0: common rules; 1: cloud provider rules.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsCloud;

    /**
     * @var string Rule status. Valid values: true: enabled; false: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var integer Rule direction. Valid values: 1: inbound; 0: outbound.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Direction;

    /**
     * @var string Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var integer UUID for internal use. Generally, this field is not required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternalUuid;

    /**
     * @var integer Rule status. This field is valid when you query rule matching details. Valid values: 0: new; 1: deleted; 2: edited and deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var array Details of associated tasks
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BetaList;

    /**
     * @param string $SourceContent Access source.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetContent Access destination.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Port Port.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleAction Action that Cloud Firewall performs on the traffic. Valid values: accept (allow), drop (reject), and log (monitor).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Number of rule matching times.
     * @param integer $OrderIndex Rule sequence number.
     * @param string $SourceType Access source type. Valid values for an inbound rule: ip, net, template, and location; valid values for an outbound rule: ip, net, template, instance, group, and tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetType Access destination type. Valid values for an inbound rule: ip, net, template, instance, group, and tag; valid values for an outbound rule: ip, net, domain, template, and location.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Uuid Unique ID of the rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Invalid Rule validity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsRegion Valid values: 0: common rules; 1: regional rules.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CountryCode Country ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CityCode City ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CountryName Country name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CityName City name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloudCode Cloud provider code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsCloud Valid values: 0: common rules; 1: cloud provider rules.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Enable Rule status. Valid values: true: enabled; false: disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Direction Rule direction. Valid values: 1: inbound; 0: outbound.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InternalUuid UUID for internal use. Generally, this field is not required.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Rule status. This field is valid when you query rule matching details. Valid values: 0: new; 1: deleted; 2: edited and deleted.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BetaList Details of associated tasks
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("TargetContent",$param) and $param["TargetContent"] !== null) {
            $this->TargetContent = $param["TargetContent"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Invalid",$param) and $param["Invalid"] !== null) {
            $this->Invalid = $param["Invalid"];
        }

        if (array_key_exists("IsRegion",$param) and $param["IsRegion"] !== null) {
            $this->IsRegion = $param["IsRegion"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("CityCode",$param) and $param["CityCode"] !== null) {
            $this->CityCode = $param["CityCode"];
        }

        if (array_key_exists("CountryName",$param) and $param["CountryName"] !== null) {
            $this->CountryName = $param["CountryName"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("CloudCode",$param) and $param["CloudCode"] !== null) {
            $this->CloudCode = $param["CloudCode"];
        }

        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BetaList",$param) and $param["BetaList"] !== null) {
            $this->BetaList = [];
            foreach ($param["BetaList"] as $key => $value){
                $obj = new BetaInfoByACL();
                $obj->deserialize($value);
                array_push($this->BetaList, $obj);
            }
        }
    }
}
