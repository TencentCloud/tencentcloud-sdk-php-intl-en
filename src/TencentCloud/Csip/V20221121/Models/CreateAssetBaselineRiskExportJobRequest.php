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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetBaselineRiskExportJob request structure.
 *
 * @method string getAssetUniqueID() Obtain <p>Unique asset identifier (UUID), used with AssetType to locate a specific asset.</p>
 * @method void setAssetUniqueID(string $AssetUniqueID) Set <p>Unique asset identifier (UUID), used with AssetType to locate a specific asset.</p>
 * @method string getAssetType() Obtain <p>Asset type. Parameter Value: HOST (host), CLUSTER (cluster).</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type. Parameter Value: HOST (host), CLUSTER (cluster).</p>
 * @method integer getAssetAppID() Obtain <p>appid of asset ownership</p>
 * @method void setAssetAppID(integer $AssetAppID) Set <p>appid of asset ownership</p>
 * @method string getName() Obtain <p>Export task name</p>
 * @method void setName(string $Name) Set <p>Export task name</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Universal Filter Criteria. Supported fields: ItemName (detection item name, blurry), PolicyName (baseline name, blurry), InstanceName (host name, blurry), InstanceID (instance ID, exact), IP (IP, blurry). Different Names are in an AND relationship with each other, while multiple Values under the same Name are in an OR relationship.</p>
 * @method void setFilters(array $Filters) Set <p>Universal Filter Criteria. Supported fields: ItemName (detection item name, blurry), PolicyName (baseline name, blurry), InstanceName (host name, blurry), InstanceID (instance ID, exact), IP (IP, blurry). Different Names are in an AND relationship with each other, while multiple Values under the same Name are in an OR relationship.</p>
 */
class CreateAssetBaselineRiskExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>Unique asset identifier (UUID), used with AssetType to locate a specific asset.</p>
     */
    public $AssetUniqueID;

    /**
     * @var string <p>Asset type. Parameter Value: HOST (host), CLUSTER (cluster).</p>
     */
    public $AssetType;

    /**
     * @var integer <p>appid of asset ownership</p>
     */
    public $AssetAppID;

    /**
     * @var string <p>Export task name</p>
     */
    public $Name;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Universal Filter Criteria. Supported fields: ItemName (detection item name, blurry), PolicyName (baseline name, blurry), InstanceName (host name, blurry), InstanceID (instance ID, exact), IP (IP, blurry). Different Names are in an AND relationship with each other, while multiple Values under the same Name are in an OR relationship.</p>
     */
    public $Filters;

    /**
     * @param string $AssetUniqueID <p>Unique asset identifier (UUID), used with AssetType to locate a specific asset.</p>
     * @param string $AssetType <p>Asset type. Parameter Value: HOST (host), CLUSTER (cluster).</p>
     * @param integer $AssetAppID <p>appid of asset ownership</p>
     * @param string $Name <p>Export task name</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Universal Filter Criteria. Supported fields: ItemName (detection item name, blurry), PolicyName (baseline name, blurry), InstanceName (host name, blurry), InstanceID (instance ID, exact), IP (IP, blurry). Different Names are in an AND relationship with each other, while multiple Values under the same Name are in an OR relationship.</p>
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
        if (array_key_exists("AssetUniqueID",$param) and $param["AssetUniqueID"] !== null) {
            $this->AssetUniqueID = $param["AssetUniqueID"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetAppID",$param) and $param["AssetAppID"] !== null) {
            $this->AssetAppID = $param["AssetAppID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
