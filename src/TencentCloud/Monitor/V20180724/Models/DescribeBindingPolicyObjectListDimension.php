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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dimensions of the DescribeBindingPolicyObjectList API
 *
 * @method integer getRegionId() Obtain Region ID.
 * @method void setRegionId(integer $RegionId) Set Region ID.
 * @method string getRegion() Obtain Region abbreviation.
 * @method void setRegion(string $Region) Set Region abbreviation.
 * @method string getDimensions() Obtain Combined JSON string of dimensions.
 * @method void setDimensions(string $Dimensions) Set Combined JSON string of dimensions.
 * @method string getEventDimensions() Obtain Combined JSON string of event dimensions.
 * @method void setEventDimensions(string $EventDimensions) Set Combined JSON string of event dimensions.
 */
class DescribeBindingPolicyObjectListDimension extends AbstractModel
{
    /**
     * @var integer Region ID.
     */
    public $RegionId;

    /**
     * @var string Region abbreviation.
     */
    public $Region;

    /**
     * @var string Combined JSON string of dimensions.
     */
    public $Dimensions;

    /**
     * @var string Combined JSON string of event dimensions.
     */
    public $EventDimensions;

    /**
     * @param integer $RegionId Region ID.
     * @param string $Region Region abbreviation.
     * @param string $Dimensions Combined JSON string of dimensions.
     * @param string $EventDimensions Combined JSON string of event dimensions.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("EventDimensions",$param) and $param["EventDimensions"] !== null) {
            $this->EventDimensions = $param["EventDimensions"];
        }
    }
}
