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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load configuration.
 *
 * @method LoadSpec getLoadSpec() Obtain Load configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLoadSpec(LoadSpec $LoadSpec) Set Load configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method VpcLoadDistribution getVpcLoadDistribution() Obtain Stress source from vpc.

Note: This field may return null, indicating that no valid value is found.
 * @method void setVpcLoadDistribution(VpcLoadDistribution $VpcLoadDistribution) Set Stress source from vpc.

Note: This field may return null, indicating that no valid value is found.
 * @method array getGeoRegionsLoadDistribution() Obtain Multi-region stress distribution.

Note: This field may return null, indicating that no valid value is found.
 * @method void setGeoRegionsLoadDistribution(array $GeoRegionsLoadDistribution) Set Multi-region stress distribution.

Note: This field may return null, indicating that no valid value is found.
 */
class Load extends AbstractModel
{
    /**
     * @var LoadSpec Load configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $LoadSpec;

    /**
     * @var VpcLoadDistribution Stress source from vpc.

Note: This field may return null, indicating that no valid value is found.
     */
    public $VpcLoadDistribution;

    /**
     * @var array Multi-region stress distribution.

Note: This field may return null, indicating that no valid value is found.
     */
    public $GeoRegionsLoadDistribution;

    /**
     * @param LoadSpec $LoadSpec Load configuration.

Note: This field may return null, indicating that no valid value is found.
     * @param VpcLoadDistribution $VpcLoadDistribution Stress source from vpc.

Note: This field may return null, indicating that no valid value is found.
     * @param array $GeoRegionsLoadDistribution Multi-region stress distribution.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("LoadSpec",$param) and $param["LoadSpec"] !== null) {
            $this->LoadSpec = new LoadSpec();
            $this->LoadSpec->deserialize($param["LoadSpec"]);
        }

        if (array_key_exists("VpcLoadDistribution",$param) and $param["VpcLoadDistribution"] !== null) {
            $this->VpcLoadDistribution = new VpcLoadDistribution();
            $this->VpcLoadDistribution->deserialize($param["VpcLoadDistribution"]);
        }

        if (array_key_exists("GeoRegionsLoadDistribution",$param) and $param["GeoRegionsLoadDistribution"] !== null) {
            $this->GeoRegionsLoadDistribution = [];
            foreach ($param["GeoRegionsLoadDistribution"] as $key => $value){
                $obj = new GeoRegionsLoadItem();
                $obj->deserialize($value);
                array_push($this->GeoRegionsLoadDistribution, $obj);
            }
        }
    }
}
