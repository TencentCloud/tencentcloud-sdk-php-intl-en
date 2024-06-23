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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project Information
 *
 * @method string getTenantId() Obtain Tenant ID of the project
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant ID of the project
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project Identifier, English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project Identifier, English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDisplayName() Obtain Project Display Name, can be Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Project Display Name, can be Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain RegionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set RegionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain RemarksNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set RemarksNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method BaseUser getCreator() Obtain Creator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreator(BaseUser $Creator) Set Creator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method BaseTenant getTenant() Obtain Tenant Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTenant(BaseTenant $Tenant) Set Tenant Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getAdminUsers() Obtain Project Administrator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAdminUsers(array $AdminUsers) Set Project Administrator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getClusters() Obtain Project-related cluster information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusters(array $Clusters) Set Project-related cluster information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParams() Obtain Additional configuration parameters for the project
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParams(string $Params) Set Additional configuration parameters for the project
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Project Status: 0: disabled, 1: enabled, -3: disabling, 2: enabling
 * @method void setStatus(integer $Status) Set Project Status: 0: disabled, 1: enabled, -3: disabling, 2: enabling
 * @method string getModel() Obtain Project Type, SIMPLE: simple mode STANDARD: standard mode
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setModel(string $Model) Set Project Type, SIMPLE: simple mode STANDARD: standard mode
Note: This field may return null, indicating that no valid value can be obtained.
 */
class Project extends AbstractModel
{
    /**
     * @var string Tenant ID of the project
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TenantId;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project Identifier, English Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Project Display Name, can be Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DisplayName;

    /**
     * @var string RegionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var string RemarksNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var BaseUser Creator
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Creator;

    /**
     * @var BaseTenant Tenant Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tenant;

    /**
     * @var array Project Administrator
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AdminUsers;

    /**
     * @var array Project-related cluster information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Clusters;

    /**
     * @var string Additional configuration parameters for the project
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Params;

    /**
     * @var integer Project Status: 0: disabled, 1: enabled, -3: disabling, 2: enabling
     */
    public $Status;

    /**
     * @var string Project Type, SIMPLE: simple mode STANDARD: standard mode
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Model;

    /**
     * @param string $TenantId Tenant ID of the project
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project Identifier, English Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DisplayName Project Display Name, can be Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region RegionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description RemarksNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param BaseUser $Creator Creator
Note: This field may return null, indicating that no valid value can be obtained.
     * @param BaseTenant $Tenant Tenant Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $AdminUsers Project Administrator
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Clusters Project-related cluster information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Params Additional configuration parameters for the project
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Project Status: 0: disabled, 1: enabled, -3: disabling, 2: enabling
     * @param string $Model Project Type, SIMPLE: simple mode STANDARD: standard mode
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new BaseUser();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("Tenant",$param) and $param["Tenant"] !== null) {
            $this->Tenant = new BaseTenant();
            $this->Tenant->deserialize($param["Tenant"]);
        }

        if (array_key_exists("AdminUsers",$param) and $param["AdminUsers"] !== null) {
            $this->AdminUsers = [];
            foreach ($param["AdminUsers"] as $key => $value){
                $obj = new BaseUser();
                $obj->deserialize($value);
                array_push($this->AdminUsers, $obj);
            }
        }

        if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
            $this->Clusters = [];
            foreach ($param["Clusters"] as $key => $value){
                $obj = new BaseClusterInfo();
                $obj->deserialize($value);
                array_push($this->Clusters, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
