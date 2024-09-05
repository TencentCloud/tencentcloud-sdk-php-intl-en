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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specification availability
 *
 * @method string getSpecType() Obtain Specification type.<li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li><li>shared: Shared</li>Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecType(string $SpecType) Set Specification type.<li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li><li>shared: Shared</li>Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAvailability() Obtain Specification availability. It indicates the resource availability. Valid values: Available, Unavailable.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailability(string $Availability) Set Specification availability. It indicates the resource availability. Valid values: Available, Unavailable.Note: This field may return null, indicating that no valid values can be obtained.
 */
class SpecAvailability extends AbstractModel
{
    /**
     * @var string Specification type.<li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li><li>shared: Shared</li>Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecType;

    /**
     * @var string Specification availability. It indicates the resource availability. Valid values: Available, Unavailable.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Availability;

    /**
     * @param string $SpecType Specification type.<li>clb.c2.medium: Standard</li><li>clb.c3.small: Advanced 1</li><li>clb.c3.medium: Advanced 2</li><li>clb.c4.small: Super Large 1</li><li>clb.c4.medium: Super Large 2</li><li>clb.c4.large: Super Large 3</li><li>clb.c4.xlarge: Super Large 4</li><li>shared: Shared</li>Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Availability Specification availability. It indicates the resource availability. Valid values: Available, Unavailable.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SpecType",$param) and $param["SpecType"] !== null) {
            $this->SpecType = $param["SpecType"];
        }

        if (array_key_exists("Availability",$param) and $param["Availability"] !== null) {
            $this->Availability = $param["Availability"];
        }
    }
}
