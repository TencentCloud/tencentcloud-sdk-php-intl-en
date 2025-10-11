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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamPackageSource request structure.
 *
 * @method string getId() Obtain Source Id.
 * @method void setId(string $Id) Set Source Id.
 * @method string getName() Obtain Modified name.
 * @method void setName(string $Name) Set Modified name.
 * @method string getType() Obtain Distinguish between live broadcast and on-demand VOD source types.
Optional values: Live, VOD (on demand)
 * @method void setType(string $Type) Set Distinguish between live broadcast and on-demand VOD source types.
Optional values: Live, VOD (on demand)
 * @method array getPackageConfs() Obtain source configuration.
 * @method void setPackageConfs(array $PackageConfs) Set source configuration.
 * @method array getSourceTags() Obtain ADS can return more precise advertisements based on Source Tag information.
 * @method void setSourceTags(array $SourceTags) Set ADS can return more precise advertisements based on Source Tag information.
 */
class ModifyStreamPackageSourceRequest extends AbstractModel
{
    /**
     * @var string Source Id.
     */
    public $Id;

    /**
     * @var string Modified name.
     */
    public $Name;

    /**
     * @var string Distinguish between live broadcast and on-demand VOD source types.
Optional values: Live, VOD (on demand)
     */
    public $Type;

    /**
     * @var array source configuration.
     */
    public $PackageConfs;

    /**
     * @var array ADS can return more precise advertisements based on Source Tag information.
     */
    public $SourceTags;

    /**
     * @param string $Id Source Id.
     * @param string $Name Modified name.
     * @param string $Type Distinguish between live broadcast and on-demand VOD source types.
Optional values: Live, VOD (on demand)
     * @param array $PackageConfs source configuration.
     * @param array $SourceTags ADS can return more precise advertisements based on Source Tag information.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PackageConfs",$param) and $param["PackageConfs"] !== null) {
            $this->PackageConfs = [];
            foreach ($param["PackageConfs"] as $key => $value){
                $obj = new SourcePackageConf();
                $obj->deserialize($value);
                array_push($this->PackageConfs, $obj);
            }
        }

        if (array_key_exists("SourceTags",$param) and $param["SourceTags"] !== null) {
            $this->SourceTags = [];
            foreach ($param["SourceTags"] as $key => $value){
                $obj = new SourceTag();
                $obj->deserialize($value);
                array_push($this->SourceTags, $obj);
            }
        }
    }
}
