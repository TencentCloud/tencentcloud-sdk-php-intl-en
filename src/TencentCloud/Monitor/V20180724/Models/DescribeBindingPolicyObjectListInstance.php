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
 * Object instance information returned by the DescribeBindingPolicyObjectListInstance API.
 *
 * @method string getUniqueId() Obtain Unique ID of the object.
 * @method void setUniqueId(string $UniqueId) Set Unique ID of the object.
 * @method string getDimensions() Obtain Dimension set of an object instance, which is a jsonObj string.
 * @method void setDimensions(string $Dimensions) Set Dimension set of an object instance, which is a jsonObj string.
 * @method integer getIsShielded() Obtain Whether the object is shielded. The value 0 indicates that the object is not shielded. The value 1 indicates that the object is shielded.
 * @method void setIsShielded(integer $IsShielded) Set Whether the object is shielded. The value 0 indicates that the object is not shielded. The value 1 indicates that the object is shielded.
 * @method string getRegion() Obtain Region where the object resides.
 * @method void setRegion(string $Region) Set Region where the object resides.
 */
class DescribeBindingPolicyObjectListInstance extends AbstractModel
{
    /**
     * @var string Unique ID of the object.
     */
    public $UniqueId;

    /**
     * @var string Dimension set of an object instance, which is a jsonObj string.
     */
    public $Dimensions;

    /**
     * @var integer Whether the object is shielded. The value 0 indicates that the object is not shielded. The value 1 indicates that the object is shielded.
     */
    public $IsShielded;

    /**
     * @var string Region where the object resides.
     */
    public $Region;

    /**
     * @param string $UniqueId Unique ID of the object.
     * @param string $Dimensions Dimension set of an object instance, which is a jsonObj string.
     * @param integer $IsShielded Whether the object is shielded. The value 0 indicates that the object is not shielded. The value 1 indicates that the object is shielded.
     * @param string $Region Region where the object resides.
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
        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("IsShielded",$param) and $param["IsShielded"] !== null) {
            $this->IsShielded = $param["IsShielded"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
