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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamPackageSource request structure.
 *
 * @method string getAttachedLocation() Obtain The location id to which this source belongs is required and uniquely bound to one location.
 * @method void setAttachedLocation(string $AttachedLocation) Set The location id to which this source belongs is required and uniquely bound to one location.
 * @method string getName() Obtain Source name, globally unique under location.
 * @method void setName(string $Name) Set Source name, globally unique under location.
 * @method string getType() Obtain Distinguish between live broadcast and on-demand VOD source types. Optional values: Live, VOD.
 * @method void setType(string $Type) Set Distinguish between live broadcast and on-demand VOD source types. Optional values: Live, VOD.
 * @method array getPackageConfs() Obtain source specific configuration.
 * @method void setPackageConfs(array $PackageConfs) Set source specific configuration.
 */
class CreateStreamPackageSourceRequest extends AbstractModel
{
    /**
     * @var string The location id to which this source belongs is required and uniquely bound to one location.
     */
    public $AttachedLocation;

    /**
     * @var string Source name, globally unique under location.
     */
    public $Name;

    /**
     * @var string Distinguish between live broadcast and on-demand VOD source types. Optional values: Live, VOD.
     */
    public $Type;

    /**
     * @var array source specific configuration.
     */
    public $PackageConfs;

    /**
     * @param string $AttachedLocation The location id to which this source belongs is required and uniquely bound to one location.
     * @param string $Name Source name, globally unique under location.
     * @param string $Type Distinguish between live broadcast and on-demand VOD source types. Optional values: Live, VOD.
     * @param array $PackageConfs source specific configuration.
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
        if (array_key_exists("AttachedLocation",$param) and $param["AttachedLocation"] !== null) {
            $this->AttachedLocation = $param["AttachedLocation"];
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
    }
}
