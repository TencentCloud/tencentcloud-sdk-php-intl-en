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
 * Region description information
 *
 * @method string getName() Obtain Region name, such as ap-guangzhou
 * @method void setName(string $Name) Set Region name, such as ap-guangzhou
 * @method string getDesc() Obtain Region description, such as Guangzhou
 * @method void setDesc(string $Desc) Set Region description, such as Guangzhou
 * @method integer getRegionId() Obtain Unique marker of region
 * @method void setRegionId(integer $RegionId) Set Unique marker of region
 * @method array getZones() Obtain List of all availability zones in the region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZones(array $Zones) Set List of all availability zones in the region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Number of clusters in the region
 * @method void setCount(integer $Count) Set Number of clusters in the region
 * @method integer getIsInternationalSite() Obtain 0 indicates the international site; 1 indicates not.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsInternationalSite(integer $IsInternationalSite) Set 0 indicates the international site; 1 indicates not.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucket() Obtain Bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucket(string $Bucket) Set Bucket
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region name, such as ap-guangzhou
     */
    public $Name;

    /**
     * @var string Region description, such as Guangzhou
     */
    public $Desc;

    /**
     * @var integer Unique marker of region
     */
    public $RegionId;

    /**
     * @var array List of all availability zones in the region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zones;

    /**
     * @var integer Number of clusters in the region
     */
    public $Count;

    /**
     * @var integer 0 indicates the international site; 1 indicates not.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsInternationalSite;

    /**
     * @var string Bucket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bucket;

    /**
     * @param string $Name Region name, such as ap-guangzhou
     * @param string $Desc Region description, such as Guangzhou
     * @param integer $RegionId Unique marker of region
     * @param array $Zones List of all availability zones in the region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Number of clusters in the region
     * @param integer $IsInternationalSite 0 indicates the international site; 1 indicates not.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Bucket Bucket
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = [];
            foreach ($param["Zones"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->Zones, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("IsInternationalSite",$param) and $param["IsInternationalSite"] !== null) {
            $this->IsInternationalSite = $param["IsInternationalSite"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }
    }
}
