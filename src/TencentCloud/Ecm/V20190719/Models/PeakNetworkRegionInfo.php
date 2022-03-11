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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Peak network information by region
 *
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method array getPeakNetworkSet() Obtain Peak network set
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPeakNetworkSet(array $PeakNetworkSet) Set Peak network set
Note: this field may return null, indicating that no valid values can be obtained.
 */
class PeakNetworkRegionInfo extends AbstractModel
{
    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var array Peak network set
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PeakNetworkSet;

    /**
     * @param string $Region Region information
     * @param array $PeakNetworkSet Peak network set
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PeakNetworkSet",$param) and $param["PeakNetworkSet"] !== null) {
            $this->PeakNetworkSet = [];
            foreach ($param["PeakNetworkSet"] as $key => $value){
                $obj = new PeakNetwork();
                $obj->deserialize($value);
                array_push($this->PeakNetworkSet, $obj);
            }
        }
    }
}
