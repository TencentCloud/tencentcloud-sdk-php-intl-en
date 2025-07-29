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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance-related information.
 *
 * @method integer getAppID() Obtain User APP ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppID(integer $AppID) Set User APP ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterID() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterID(string $ClusterID) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccountID() Obtain Account ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountID(string $AccountID) Set Account ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Customizes the instance name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Customizes the instance name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZones() Obtain Availability zone.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZones(string $Zones) Set Availability zone.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNetworks() Obtain Network information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworks(array $Networks) Set Network information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Spec getSpec() Obtain Instance specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpec(Spec $Spec) Set Instance specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Instance status. 0: running; 1: creating; 16: adjusting configuration; 17: isolating; 18: to be terminated; 19: recovering; 20: shutting down; 21: terminating; 22: terminated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Instance status. 0: running; 1: creating; 16: adjusting configuration; 17: isolating; 18: to be terminated; 19: recovering; 20: shutting down; 21: terminating; 22: terminated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Period getPeriod() Obtain Instance validity period.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriod(Period $Period) Set Instance validity period.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Last modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Last modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Tenant getTenant() Obtain Internal features of the product.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTenant(Tenant $Tenant) Set Internal features of the product.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSecurity() Obtain Security group information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurity(array $Security) Set Security group information.Note: This field may return null, indicating that no valid values can be obtained.
 */
class Cluster extends AbstractModel
{
    /**
     * @var integer User APP ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppID;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterID;

    /**
     * @var string Account ID.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountID;

    /**
     * @var string Customizes the instance name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Region.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Availability zone.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zones;

    /**
     * @var array Network information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Networks;

    /**
     * @var Spec Instance specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Spec;

    /**
     * @var integer Instance status. 0: running; 1: creating; 16: adjusting configuration; 17: isolating; 18: to be terminated; 19: recovering; 20: shutting down; 21: terminating; 22: terminated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var Period Instance validity period.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Period;

    /**
     * @var string Creation time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Last modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var Tenant Internal features of the product.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tenant;

    /**
     * @var array Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array Security group information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Security;

    /**
     * @param integer $AppID User APP ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterID Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccountID Account ID.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Customizes the instance name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zones Availability zone.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Networks Network information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Spec $Spec Instance specification.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Instance status. 0: running; 1: creating; 16: adjusting configuration; 17: isolating; 18: to be terminated; 19: recovering; 20: shutting down; 21: terminating; 22: terminated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Period $Period Instance validity period.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Last modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Tenant $Tenant Internal features of the product.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Security Security group information.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("AccountID",$param) and $param["AccountID"] !== null) {
            $this->AccountID = $param["AccountID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Networks",$param) and $param["Networks"] !== null) {
            $this->Networks = [];
            foreach ($param["Networks"] as $key => $value){
                $obj = new Network();
                $obj->deserialize($value);
                array_push($this->Networks, $obj);
            }
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new Spec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = new Period();
            $this->Period->deserialize($param["Period"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Tenant",$param) and $param["Tenant"] !== null) {
            $this->Tenant = new Tenant();
            $this->Tenant->deserialize($param["Tenant"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Security",$param) and $param["Security"] !== null) {
            $this->Security = $param["Security"];
        }
    }
}
