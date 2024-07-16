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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceNew request structure.
 *
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method CreateInstanceSpec getFeSpec() Obtain FE specifications
 * @method void setFeSpec(CreateInstanceSpec $FeSpec) Set FE specifications
 * @method CreateInstanceSpec getBeSpec() Obtain BE specifications.
 * @method void setBeSpec(CreateInstanceSpec $BeSpec) Set BE specifications.
 * @method boolean getHaFlag() Obtain Whether it is highly available.
 * @method void setHaFlag(boolean $HaFlag) Set Whether it is highly available.
 * @method string getUserVPCId() Obtain User VPCID
 * @method void setUserVPCId(string $UserVPCId) Set User VPCID
 * @method string getUserSubnetId() Obtain User subnet ID
 * @method void setUserSubnetId(string $UserSubnetId) Set User subnet ID
 * @method string getProductVersion() Obtain Product version number
 * @method void setProductVersion(string $ProductVersion) Set Product version number
 * @method ChargeProperties getChargeProperties() Obtain Payment type
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) Set Payment type
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getDorisUserPwd() Obtain Database password
 * @method void setDorisUserPwd(string $DorisUserPwd) Set Database password
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 * @method integer getHaType() Obtain High availability type:
0 indicates non-high availability (only one FE, FeSpec.CreateInstanceSpec.Count=1),
1 indicates read high availability (at least 3 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=3, and it must be an odd number),
2 indicates read and write high availability (at least 5 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=5, and it must be an odd number).
 * @method void setHaType(integer $HaType) Set High availability type:
0 indicates non-high availability (only one FE, FeSpec.CreateInstanceSpec.Count=1),
1 indicates read high availability (at least 3 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=3, and it must be an odd number),
2 indicates read and write high availability (at least 5 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=5, and it must be an odd number).
 * @method integer getCaseSensitive() Obtain Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
 * @method void setCaseSensitive(integer $CaseSensitive) Set Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
 * @method boolean getEnableMultiZones() Obtain Whether to enable multi-availability zone.
 * @method void setEnableMultiZones(boolean $EnableMultiZones) Set Whether to enable multi-availability zone.
 * @method NetworkInfo getUserMultiZoneInfos() Obtain After the Multi-AZ is enabled, all user's Availability Zones and Subnets information are shown.
 * @method void setUserMultiZoneInfos(NetworkInfo $UserMultiZoneInfos) Set After the Multi-AZ is enabled, all user's Availability Zones and Subnets information are shown.
 */
class CreateInstanceNewRequest extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var CreateInstanceSpec FE specifications
     */
    public $FeSpec;

    /**
     * @var CreateInstanceSpec BE specifications.
     */
    public $BeSpec;

    /**
     * @var boolean Whether it is highly available.
     */
    public $HaFlag;

    /**
     * @var string User VPCID
     */
    public $UserVPCId;

    /**
     * @var string User subnet ID
     */
    public $UserSubnetId;

    /**
     * @var string Product version number
     */
    public $ProductVersion;

    /**
     * @var ChargeProperties Payment type
     */
    public $ChargeProperties;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Database password
     */
    public $DorisUserPwd;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @var integer High availability type:
0 indicates non-high availability (only one FE, FeSpec.CreateInstanceSpec.Count=1),
1 indicates read high availability (at least 3 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=3, and it must be an odd number),
2 indicates read and write high availability (at least 5 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=5, and it must be an odd number).
     */
    public $HaType;

    /**
     * @var integer Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
     */
    public $CaseSensitive;

    /**
     * @var boolean Whether to enable multi-availability zone.
     */
    public $EnableMultiZones;

    /**
     * @var NetworkInfo After the Multi-AZ is enabled, all user's Availability Zones and Subnets information are shown.
     */
    public $UserMultiZoneInfos;

    /**
     * @param string $Zone Availability zone
     * @param CreateInstanceSpec $FeSpec FE specifications
     * @param CreateInstanceSpec $BeSpec BE specifications.
     * @param boolean $HaFlag Whether it is highly available.
     * @param string $UserVPCId User VPCID
     * @param string $UserSubnetId User subnet ID
     * @param string $ProductVersion Product version number
     * @param ChargeProperties $ChargeProperties Payment type
     * @param string $InstanceName Instance name
     * @param string $DorisUserPwd Database password
     * @param array $Tags Tag list
     * @param integer $HaType High availability type:
0 indicates non-high availability (only one FE, FeSpec.CreateInstanceSpec.Count=1),
1 indicates read high availability (at least 3 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=3, and it must be an odd number),
2 indicates read and write high availability (at least 5 FEs must be deployed, FeSpec.CreateInstanceSpec.Count>=5, and it must be an odd number).
     * @param integer $CaseSensitive Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
     * @param boolean $EnableMultiZones Whether to enable multi-availability zone.
     * @param NetworkInfo $UserMultiZoneInfos After the Multi-AZ is enabled, all user's Availability Zones and Subnets information are shown.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("FeSpec",$param) and $param["FeSpec"] !== null) {
            $this->FeSpec = new CreateInstanceSpec();
            $this->FeSpec->deserialize($param["FeSpec"]);
        }

        if (array_key_exists("BeSpec",$param) and $param["BeSpec"] !== null) {
            $this->BeSpec = new CreateInstanceSpec();
            $this->BeSpec->deserialize($param["BeSpec"]);
        }

        if (array_key_exists("HaFlag",$param) and $param["HaFlag"] !== null) {
            $this->HaFlag = $param["HaFlag"];
        }

        if (array_key_exists("UserVPCId",$param) and $param["UserVPCId"] !== null) {
            $this->UserVPCId = $param["UserVPCId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DorisUserPwd",$param) and $param["DorisUserPwd"] !== null) {
            $this->DorisUserPwd = $param["DorisUserPwd"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HaType",$param) and $param["HaType"] !== null) {
            $this->HaType = $param["HaType"];
        }

        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("EnableMultiZones",$param) and $param["EnableMultiZones"] !== null) {
            $this->EnableMultiZones = $param["EnableMultiZones"];
        }

        if (array_key_exists("UserMultiZoneInfos",$param) and $param["UserMultiZoneInfos"] !== null) {
            $this->UserMultiZoneInfos = new NetworkInfo();
            $this->UserMultiZoneInfos->deserialize($param["UserMultiZoneInfos"]);
        }
    }
}
